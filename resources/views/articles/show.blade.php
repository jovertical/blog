<x-layout>
    <div class="mx-auto w-full md:w-3/5">
        <h1 class="text-3xl font-bold mb-4">
            {{ $article->title }}
        </h1>

        <p class="text-gray mb-4">
            {{ optional($article->published_at)->toFormattedDateString() }}
        </p>

        <p>
            {!! $article->body !!}
        </p>
    </div>
</x-layout>