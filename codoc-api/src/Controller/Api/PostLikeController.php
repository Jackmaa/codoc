<?php

namespace App\Controller\Api;

use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class PostLikeController extends AbstractController
{
    // Toggle pattern: one POST endpoint handles both like AND unlike.
    // If the user already liked → remove (unlike). Otherwise → add (like).
    // #[IsGranted] is a Symfony attribute that checks authorization before the method runs.
    // Post $post — Symfony auto-resolves {id} from the URL to a Post entity (param converter).
    #[Route('/api/posts/{id}/like', name: 'api_post_like_toggle', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function toggle(Post $post, EntityManagerInterface $em): JsonResponse
    {
        $user = $this->getUser();

        if ($post->getLikedBy()->contains($user)) {
            $post->removeLikedBy($user);
            $liked = false;
        } else {
            $post->addLikedBy($user);
            $liked = true;
        }

        $em->flush();

        return $this->json([
            'liked' => $liked,
            'totalLikes' => $post->getLikedBy()->count(),
        ]);
    }
}
