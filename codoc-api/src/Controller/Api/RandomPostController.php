<?php

namespace App\Controller\Api;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RandomPostController extends AbstractController
{
    // Route is /api/random-post (not /api/posts/random) to avoid conflict with
    // API Platform's /api/posts/{id} route which would match "random" as an id.
    // __invoke() makes this an invocable controller — Symfony calls it like a function.
    #[Route('/api/random-post', name: 'api_post_random', methods: ['GET'])]
    public function __invoke(PostRepository $postRepository): JsonResponse
    {
        $posts = $postRepository->findAll();

        if (empty($posts)) {
            return $this->json(['error' => 'No posts found.'], Response::HTTP_NOT_FOUND);
        }

        $post = $posts[array_rand($posts)];

        // 'groups' => ['post:read'] tells the serializer to only include fields
        // tagged with #[Groups(['post:read'])] — prevents circular references.
        return $this->json($post, context: ['groups' => ['post:read']]);
    }
}
