<x-layout>
    <div class="block">

        <div class="box">
            <a href={{ route('top') }}>
                <span class="icon-text">
                    <span class="icon">
                        <i class="fa-solid fa-circle-arrow-left"></i>
                    </span>
                    <span>戻る</span>
                </span>
            </a>
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
                    <x-comment :$comment />
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
