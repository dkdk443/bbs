<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/a49741a2a5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>えぬちゃんねる</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-header />
    <main class="columns">
        {{-- <div class="column is-one-fifth mr-5">
            <aside class="menu block">
                <p class="menu-label">
                    カテゴリ
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
            {{ $slot }}
        </div>
    </main>
    <footer></footer>
</body>

</html>
