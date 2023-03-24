<x-layout>
    <div class="block">
        <a href={{ route('top') }}>
            <span class="icon-text">
                <span class="icon">
                    <i class="fa-solid fa-circle-arrow-left"></i>
                </span>
                <span>戻る</span>
            </span>
        </a>
        <div class="box">
            <div class="section">
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
            <div class="section">
                <form method="POST" action={{ route('comment.store', $thread) }}>
                    @csrf
                    <input type="hidden" name="thread_id" value={{ $thread->id }}>
                    <div class="field">
                        <label class="label">コメント</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="" name="content"></textarea>
                        </div>
                    </div>
                    @if ($errors->any())
                        <div class="notification is-danger is-light">
                            <button class="delete"></button>

                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    @endif
                    <div class="field is-grouped">
                        <div class="control">
                            <button type="submit" class="button is-link">送信</button>
                        </div>
                        <div class="control">
                            <button class="button is-link is-light">キャンセル</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
