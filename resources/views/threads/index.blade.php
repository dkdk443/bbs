<x-layout>
    <div class="block">
        @foreach ($threads as $thread)
            <div class="box">
                <div class="dropdown is-right menu-bar" id="dropdown">
                    <div class="dropdown-trigger">
                        <button class="" aria-haspopup="true" aria-controls="dropdown-menu" onclick="showMenu()">
                            <span><i class="fa-solid fa-bars fa-xl"></i></span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu" role="menu">
                        <div class="dropdown-content">
                            <a href={{ route('thread.edit', $thread) }} class="dropdown-item">
                                編集
                            </a>
                            <a class="dropdown-item">
                                削除
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                通報する
                            </a>
                        </div>
                    </div>
                </div>
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
                        @if ($loop->index === 2)
                        @break
                    @endif
                @endforeach
                <div class="my-1">
                    <a href={{ route('thread.show', ['thread' => $thread->id]) }} class="btn btn-primary">続きを読む</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
{{ $threads->links() }}
<style>
    .box {
        position: relative;
    }

    .menu-bar {
        position: absolute;
        top: 14px;
        right: 14px;
    }
</style>
<script>
    function showMenu() {
        const isActive = document.getElementsByClassName("is-active").length > 0 ? true : false;
        const dropdown = document.getElementById('dropdown');
        if (isActive) {
            dropdown.classList.remove('is-active');
        } else {
            dropdown.classList.add('is-active');
        }
    }
</script>
</x-layout>
