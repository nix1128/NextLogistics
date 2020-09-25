<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Model\Comment;
use App\Model\Hause_users;
use App\Model\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Comments extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */


    public function index()


    {
        $comments = Comment::with('user')->simplePaginate(50);
        $username = Auth::user()->name;
        $user = Auth::user();
        return view('frontview.layouts.messages', compact('username','comments','user'));

    }


    public function store(Request $request)
    {
        $valid = $request->validate([
            'comment' => 'required',
        ]);
        $comment = Comment::firstOrCreate([
            'content' => $request->comment,
            'user_id' => $request->user()->id
        ]);
        $comment->save();


        if ($valid)

            return back()->with('added', '');
        else {
            return back()->with('error', '');
        }
    }


    function delete($id){
        $user = Auth::user($id);
        $comment = Comment::find($id);
        if($comment->user_id !== $user->id  ) {return back()->with('wrong_user','');
        }else
            $comment->delete();
        return back()->with('deleted','');
    }
}
