<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Forum') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach($threads as $thread)
                    <article class="m-0 p-5 bg-cool-gray-200">
                        <h2 class="font-bold">
                            <a href="{{ $thread->path() }}">
                                {{ $thread->title }}
                            </a>
                        </h2>

                        <div class="body">{{ $thread->body }}</div>
                    </article>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
