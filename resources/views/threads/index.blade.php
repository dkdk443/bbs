<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>えぬちゃんねる</title>
</head>

<body>
    <header mb-4>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="" href="">
                    <img src="nch-logo.png" width="280px">
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
                            <a class="button is-primary">
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="columns">
        {{-- <div class="column is-one-fifth mr-5">
            <aside class="menu block">
                <p class="menu-label">
                    General
                </p>
                <ul class="menu-list">
                    <li><a>Dashboard</a></li>
                    <li><a>Customers</a></li>
                </ul>
                <p class="menu-label">
                    Administration
                </p>
                <ul class="menu-list">
                    <li><a>Team Settings</a></li>
                    <li>
                        <a class="is-active">Manage Your Team</a>
                        <ul>
                            <li><a>Members</a></li>
                            <li><a>Plugins</a></li>
                            <li><a>Add a member</a></li>
                        </ul>
                    </li>
                    <li><a>Invitations</a></li>
                    <li><a>Cloud Storage Environment Settings</a></li>
                    <li><a>Authentication</a></li>
                </ul>
                <p class="menu-label">
                    Transactions
                </p>
                <ul class="menu-list">
                    <li><a>Payments</a></li>
                    <li><a>Transfers</a></li>
                    <li><a>Balance</a></li>
                </ul>
            </aside>
        </div> --}}
        <div class="container column">
            <div class="block">
                @foreach ($threads as $thread)
                    <div class="box">
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
                                @if ($loop->index === 2)
                                @break
                            @endif
                        @endforeach
                        <div class="my-1">
                            <a href="#" class="btn btn-primary">続きを読む</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $threads->links() }}
    </div>
</main>

<footer></footer>
</body>

</html>
