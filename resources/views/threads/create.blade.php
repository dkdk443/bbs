<x-layout>
    <div class="block">
        <div class="box">
            <div class="section">
                <form action={{ route('thread.store') }} method="post">
                    @csrf
                    <h4 class="title is-4 mt-5">スレッド作成</h4>
                    <div class="field">
                        <label class="label">タイトル</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="スレタイ" name="title"
                                value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">内容</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="" name="content">{{ old('content') }}</textarea>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">送信</button>
                        </div>
                        <div class="control">
                            <button class="button is-link is-light" type="button"
                                onclick="location.href='{{ route('top') }}'">キャンセル</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-layout>
