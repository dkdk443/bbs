<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function thread() {
        return $this->belongsTo(Thread::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getCommentNo($threadId) {
        $previousComment = $this::where('thread_id', $threadId)->orderBy('created_at', 'DESC')->first();
        return (int)$previousComment->comment_no + 1;
    }
}
