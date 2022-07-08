<x-layout>
    <x-slot name="slot">

        @include ('posts._header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

            @if (empty($posts[0]))
            <p align="center">No posts yet. Please, check later.</p>
            @else
            <x-post-featured-card :post="$posts[0]" />
            @endif

            <div class="lg:grid lg:grid-cols-2">
                @foreach ($posts->skip(1) as $post)
                <x-post-card :post="$post" />
                @endforeach
            </div>

        </main>
    </x-slot>
</x-layout>