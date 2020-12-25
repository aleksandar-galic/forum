@foreach($threads as $thread)
    <article>
        <h2>
            <a href="{{ $thread->path() }}">
                {{ $thread->title }}
            </a>
        </h2>

        <div class="body">{{ $thread->body }}</div>
    </article>
    <hr>
@endforeach
