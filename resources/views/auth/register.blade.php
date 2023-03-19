<x-layout>
    <div class="center p-5">
        <form class="box" method="POST" action={{ route('registUser') }}>
            @csrf
            <h4 class="title is-4">会員登録</h4>
            <div class="field">
                <label class="label">メールアドレス</label>
                <div class="control">
                    <input class="input" type="email" placeholder="e.g. alex@example.com" name="email"
                        value="{{ old('email') }}">
                </div>
            </div>
            <div class="field">
                <label class="label">ニックネーム</label>
                <div class="control">
                    <input class="input" type="text" placeholder="名無しの権兵衛" name="name"
                        value="{{ old('name') }}">
                </div>
            </div>
            <div class="field">
                <label class="label">パスワード</label>
                <div class="control">
                    <input class="input" type="password" placeholder="********" name="password">
                </div>
            </div>
            <div class="field">
                <label class="label">パスワード(確認用)</label>
                <div class="control">
                    <input class="input" type="password" placeholder="********" name="password_confirmation">
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
            <button class="button is-primary">ログイン</button>
        </form>
    </div>
    <style>
        .box {
            width: 600px;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
    </style>
</x-layout>
