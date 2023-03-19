<div>
    <header mb-4>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="" href={{ route('top') }}>
                    <img src="/nch-logo.png" width="280px">
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                    data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item">
                        Home
                    </a>

                    <a class="navbar-item">
                        Documentation
                    </a>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            @guest
                                <a class="button is-primary" href={{ route('register') }}>
                                    <strong>会員登録</strong>
                                </a>
                                <a class="button is-light" href={{ route('login') }}>
                                    ログイン
                                </a>
                            @endguest
                            @auth
                                <a class="button is-primary">
                                    スレッド作成
                                </a>
                                <form method="POST" action={{ route('logout') }}>
                                    @csrf
                                    <button class="button is-light" type="submit">ログアウト
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
