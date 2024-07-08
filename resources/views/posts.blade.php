<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h3 class="text-xl">Halaman Blog</h3> --}}

    @foreach ($post as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-800"> {{ $post->title }}</h2>
            <div class="text-base text-gray-500">
                <p>{{ $post->author }} | {{ $post->created_at->diffForHumans() }}</p>
            </div>
            <p class="my-4 font-light">{{ Str::limit($post->body, 150) }}</p>
            <a href="/posts/{{ $post->id }}/post" class="font-medium text-blue-500 hover:underline">Read More
                &raquo;</a>
        </article>
    @endforeach
</x-layout>
