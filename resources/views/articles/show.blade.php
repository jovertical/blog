<x-layout>
    <div class="mx-auto w-full md:w-1/2">
        <h1 class="text-4xl font-bold mb-2">
            {{ $article->title }}
        </h1>

        <p class="mb-2">
            {{ $article->published_at->diffForHumans() }}
        </p>

        <p>
            {{ $article->body }}
        </p>
    </div>
</x-layout>