<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post as ApiPost;
use ApiPlatform\Metadata\Delete;
use Symfony\Component\Serializer\Attribute\Groups;

// #[ApiResource] exposes this entity as a REST API resource via API Platform.
// Each "operation" maps to an HTTP verb + route:
//   - GetCollection = GET /api/posts         (list all)
//   - Get           = GET /api/posts/{id}    (read one)
//   - ApiPost       = POST /api/posts        (create — "Post" aliased to avoid collision with entity name)
//   - Delete        = DELETE /api/posts/{id} (delete)
// "security" uses Symfony's expression language to restrict access:
//   - is_granted('ROLE_USER')       → must be authenticated
//   - object.getAuthor() == user    → can only delete your own posts
// normalizationContext tells API Platform which serialization groups to use
// when converting entities to JSON. With 'post:read', only fields tagged
// #[Groups(['post:read'])] are included — and nested relations (like author)
// are serialized as objects instead of IRI strings.
#[ApiResource(
    operations: [
        new GetCollection(),
        new Get(),
        new ApiPost(security: "is_granted('ROLE_USER')"),
        new Delete(security: "is_granted('ROLE_USER') and object.getAuthor() == user"),
    ],
    normalizationContext: ['groups' => ['post:read']],
)]
#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    // #[Groups(['post:read'])] controls serialization — only fields tagged with 'post:read'
    // are included in the JSON response when that group is active.
    // This prevents circular references (Post -> User -> Posts -> User -> ...)
    // and lets you expose different fields for different contexts (read vs write).
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['post:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['post:read'])]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['post:read'])]
    private ?string $content = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['post:read'])]
    private ?string $description = null;

    #[ORM\Column]
    #[Groups(['post:read'])]
    private ?\DateTime $publishedDate = null;

    #[ORM\ManyToOne(inversedBy: 'posts')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['post:read'])]
    private ?User $author = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'likedPosts')]
    #[Groups(['post:read'])]
    private Collection $likedBy;

    public function __construct()
    {
        $this->likedBy = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPublishedDate(): ?\DateTime
    {
        return $this->publishedDate;
    }

    public function setPublishedDate(\DateTime $publishedDate): static
    {
        $this->publishedDate = $publishedDate;

        return $this;
    }

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(?User $author): static
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getLikedBy(): Collection
    {
        return $this->likedBy;
    }

    public function addLikedBy(User $likedBy): static
    {
        if (!$this->likedBy->contains($likedBy)) {
            $this->likedBy->add($likedBy);
        }

        return $this;
    }

    public function removeLikedBy(User $likedBy): static
    {
        $this->likedBy->removeElement($likedBy);

        return $this;
    }
}
