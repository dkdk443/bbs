<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {

        $comment = new Comment();
        $comment->content = $request->content;
        $comment->comment_no = $comment->getCommentNo($request->thread_id);
        $comment->thread_id = $request->thread_id;
        $comment->user_id = Auth::id();
        $comment->save();
        return redirect()->back()->with('success', 'コメントの投稿に成功しました');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
