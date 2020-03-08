<x-layout>
    <div class="mx-auto w-full md:w-1/2">
        @foreach ($articles as $article)
            <div class="rounded shadow-md mb-6 p-6">
                <h2 class="text-2xl text-gray-darker font-bold mb-4">
                    {{ $article->title }}
                </h2>
                <p class="mb-4">
                    {{ $article->body }}
                </p>
                <span class="w-full inline-flex justify-between">
                    <a href="{{ route('articles.show', $article->slug) }}" class="hover:underline text-gray inline-flex items-center">
                        <p class="mr-1">Read article</p>
                    </a>

                    <p class="text-gray">
                        {{ $article->published_at->diffForHumans() }}
                    </p>
                </span>
            </div>
        @endforeach

        <div class="w-full mt-12 text-center">
            <a href="/archives" class="text-gray hover:underline">
                View archive
            </a>
        </div>
    </div>
</x-layout>