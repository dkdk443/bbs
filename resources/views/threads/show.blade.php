<x-layout>
    <div class="block">
        <div class="box">
            <a href={{ route('top') }}>戻る</a>
            <div class="section">
                <i class="fa-solid fa-ellipsis"></i>
                <h4 class="title is-4 mt-5">{{ $thread->title }}</h4>
                <h5 class="subtitle is-5 has-text-right">{{ $thread->created_at }}</h5>
                <div class="tags are-medium">
                    <span class="tag">All</span>
                    <span class="tag">Medium</span>
                    <span class="tag">Size</span>
                </div>
            </div>
            <div class="content section">
                @foreach ($thread->comments as $comment)
                    <div class="my-6">
                        <h5 class="subtitle is-6">
                            {{ $comment->comment_no }}：
                            {{ $comment->user->name }}
                            {{ $comment->created_at }}
                            ID:{{ $comment->user->user_id }}
                        </h5>
                        <p class="is-size-5">
                            {{ $comment->content }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
