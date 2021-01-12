<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="#" class="underline">{{ $thread->creator->name }}</a> posted:
            {{ __($thread->title) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg form-textarea">
                {{ $thread->body }}
            </div>
        </div>
    </div>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg form-textarea">
                <h4 class="font-bold">REPLIES</h4>

                @foreach($thread->replies as $reply)
                    @include('threads.reply')
                    <hr>
                @endforeach
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg form-textarea">
                @if(auth()->check())
                    <form method="POST" action="{{ $thread->path() . '/replies' }}">
                        @csrf

                        <textarea name="body" id="body" placeholder="Have something to say?" rows="5"></textarea>
                        <button type="submit">Post</button>
                    </form>
                @else
                    <p>Please <a href="{{ route('login') }}" class="underline">sign in</a> to participate in this discussion.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
