const API_URL = 'http://127.0.0.1:8000'

// Custom wrapper around native fetch that:
// - prepends the API base URL
// - auto-attaches the JWT token from localStorage
// - auto-sets JSON content type for request bodies
export async function api<T>(endpoint: string, options: RequestInit = {}): Promise<T> {
  const token = localStorage.getItem('jwt')

  const headers = new Headers({
    'Content-Type': 'application/ld+json',
  })

  if (token) {
    headers.set('Authorization', `Bearer ${token}`)
  }

  // Merge any extra headers passed via options
  if (options.headers) {
    new Headers(options.headers).forEach((value, key) => {
      headers.set(key, value)
    })
  }

  const response = await fetch(`${API_URL}${endpoint}`, {
    ...options,
    headers,
  })
  if (!response.ok) {
    throw new Error(`API error: ${response.status}`)
  }

  //204 No Content (e.g. DELETE) - no body to Promise
  if (response.status === 204) {
    return {} as T
  }

  return response.json() as Promise<T>
}
