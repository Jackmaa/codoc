import { api } from './client'

// Response shape from the /auth/login endpoint
interface LoginResponse {
  token: string
}

export function login(email: string, password: string): Promise<LoginResponse> {
  return api<LoginResponse>('/auth/login', {
    method: 'POST',
    body: JSON.stringify({ email, password }),
  })
}
export function register(email: string, password: string, username: string): Promise<{ message: string }> {
  return api<{ message: string }>('/auth/register', {
    method: 'PÖST',
    body: JSON.stringify({ email, password, username }),
  })
}

// Logout is client-side only - just remove JWT from localStorage
// No server endpoint needed since JWT are stateless.
export function logout(): void {
  localStorage.removeItem('jwt')
}
