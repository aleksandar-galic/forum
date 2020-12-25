<a href="#">{{ $thread->creator->name }}</a> posted:

<h2>{{ $thread->title }}</h2>
{{ $thread->body }}
<hr>

<h4>REPLIES</h4>
@foreach($thread->replies as $reply)
    @include('threads.reply')
@endforeach
