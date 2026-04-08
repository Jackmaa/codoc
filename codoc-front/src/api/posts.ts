import { api } from './client'

// Matches the shape returned by API Platform for a Post entity

export interface Post {
  id: number,
  title: string,
  content: string,
  description: string,
  publishedDate: string,
  author: {
    id: number,
    email: string,
    username: string,
  },
  likedBy: { id: number }[]
}

// API Platform wraps collections in a JSON-LD enveloppe
interface PostCollection {
  'member': Post[],
  'totalItems': number,
}

export function getPosts(): Promise<PostCollection> {
  return api<PostCollection>('/api/posts')
}

export function getPost(id: number): Promise<Post> {
  return api<Post>(`/api/posts/${id}`)
}

export function createPost(data: { title: string; content: string; description: string; author: string }): Promise<Post> {
  return api<Post>('/api/posts', {
    method: 'POST',
    // author must be an IRI string like "/api/users/4" — API Platform's way
    // of referencing related entities in JSON-LD format
    body: JSON.stringify({ ...data, publishedDate: new Date().toISOString() }),
  })
}

export function deletePost(id: number): Promise<void> {
  return api<void>(`/api/posts/${id}`, { method: 'DELETE' })
}

export function toggleLike(id: number): Promise<{ liked: boolean; totalLikes: number }> {
  return api<{ liked: boolean; totalLikes: number }>(`/api/posts/${id}/like`, {
    method: 'POST',
  })
}

export function getRandomPost(): Promise<Post> {
  return api<Post>('/api/random-post')
}
