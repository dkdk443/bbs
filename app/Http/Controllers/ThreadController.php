<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\StoreThreadRequest;
use App\Http\Requests\UpdateThreadRequest;
use App\Models\Comment;
use App\Models\Thread;
use Illuminate\Support\Facades\Auth;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $threads = Thread::with('comments.user')->orderBy('created_at', 'DESC')->paginate(4);

        return view('threads.index')
            ->with('threads', $threads);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('threads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreThreadRequest $storeThreadRequest, StoreCommentRequest $storeCommentRequest)
    {
        $thread = new Thread();
        $thread->title = $storeThreadRequest->title;
        $thread->user_id = Auth::id();
        $thread->save();

        $comment = new Comment();

        $comment->content = $storeCommentRequest->content;
        $comment->thread_id = $thread->id;
        $comment->user_id = Auth::id();

        $commentNo = $comment->getCommentNo($thread->id);
        $comment->comment_no = $commentNo;

        $comment->save();

        return redirect('/')->with('success', 'スレットの作成に成功しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(Thread $thread)
    {
        $thread = Thread::find($thread)->first();
        return view('threads.show')
            ->with('thread', $thread);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thread $thread)
    {
        $thread = Thread::find($thread)->first();
        return view('threads.edit')->with('thread', $thread);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateThreadRequest $request, Thread $thread)
    {
        $thread->update([
            'title' => $request->title
        ]);
        $thread->save();
         return redirect('/')->with('success', 'スレットの更新に成功しました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thread $thread)
    {
        // コメントも削除する
        $thread->comments()->delete();
        $thread->delete();
        return redirect('/')->with('success', 'スレットの削除に成功しました');
    }
}
