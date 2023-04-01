<?php

namespace App\Http\Controllers;

use App\Models\Reply;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('JWT', ['only' => ['like','unlike']]);
    }

    public function like(Reply $reply)
    {
        // $reply->like()->create(['user_id'=>auth()->id()]);
        $reply->like()->create(['user_id'=>1]);
        return response('created',200);
    }

    public function unLike(Reply $reply)
    {
        $reply->like()->where('user_id',1)->first()->delete();
        return response("deleted",201);
    }
}
