{{ $reply->body }}
<br>
<a href="#">
    {{ $reply->owner->name }}
</a> said {{ $reply->created_at->diffForHumans() }}...
<br>
<hr>
