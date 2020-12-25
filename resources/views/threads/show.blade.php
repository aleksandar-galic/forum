<h2>{{ $thread->title }}</h2>

{{ $thread->body }}

<h4>REPLIES</h4>
@foreach($thread->replies as $reply)
    {{ $reply->body }}
    <br>
    <a href="#">
        {{ $reply->owner->name }}
    </a> said {{ $reply->created_at->diffForHumans() }}...
    <br>
    <hr>
@endforeach
