<div class="my-6">
    <h5 class="subtitle is-6">
        {{ $comment->comment_no }}：
        <span style="font-size: 1.2em; margin-right:8px;">{{ $comment->user->name }}</span>
        <span style="margin-right:8px;">{{ $comment->created_at }}</span>
        <span style="margin-right:8px;">{{ $comment->user->user_id }}</span>
    </h5>
    <p class="is-size-5" style="padding: 20px">
        {{ $comment->content }}
    </p>
</div>
