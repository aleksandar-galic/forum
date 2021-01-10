{{ $reply->body }}
<br>
<div class="pb-4">
<a href="#" class="underline font-bold">
    {{ $reply->owner->name }}
</a> said {{ $reply->created_at->diffForHumans() }}...

</div>
