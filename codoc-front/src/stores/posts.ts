import { ref } from 'vue'
import { defineStore } from 'pinia'
import { getPosts, getPost, createPost, deletePost, toggleLike, getRandomPost } from '@/api/posts'
import type { Post } from '@/api/posts'

export const usePostsStore = defineStore('posts', () => {
  const posts = ref<Post[]>([])
  const currentPost = ref<Post | null>(null)

  async function fetchPosts() {
    const res = await getPosts()
    posts.value = res.member
  }

  async function fetchPost(id: number) {
    currentPost.value = await getPost(id)
  }

  async function addPost(data: { title: string; content: string; description: string; author: string }) {
    const post = await createPost(data)
    posts.value.unshift(post)
    return post
  }

  async function removePost(id: number) {
    await deletePost(id)
    posts.value = posts.value.filter(p => p.id !== id)
  }

  async function togglePostLike(id: number) {
    const res = await toggleLike(id)
    const post = posts.value.find(p => p.id === id)
    if (post) {
      post.likedBy = res.liked
        ? [...post.likedBy, { id: 0 }]
        : post.likedBy.slice(0, -1)
    }
    return res
  }

  async function fetchRandomPost() {
    currentPost.value = await getRandomPost()
  }

  return { posts, currentPost, fetchPosts, fetchPost, addPost, removePost, togglePostLike, fetchRandomPost }
})
