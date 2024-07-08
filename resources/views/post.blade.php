<x-layout>
    <x-slot:title>Blog Page</x-slot:title>
    {{-- <h3 class="text-xl">Halaman Blog</h3> --}}
    <article class="py-8 max-w-screen-md border-b">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900"> {{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post->author }}</a> |
        </div>
        <p class="my-4 font-light">{{ $post->body }}</p>
        <a href="/posts
        " class="font-medium text-blue-500 hover:underline">&laquo; Back to Post</a>
    </article>
</x-layout>
