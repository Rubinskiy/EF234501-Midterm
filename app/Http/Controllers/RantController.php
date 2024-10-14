<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RantController extends Controller
{
    public function create() {
        return view('create');
    }

    public function createApi(Request $request) {
        $request->validate([
            'content' => 'required',
        ]);

        $post = new Post;
        $post->content = $request->content;
        $post->user_id = Auth::id();
        
        if ($post->save()) {
            return redirect(route('rants'))->with('success', 'Post created');
        } else {
             return redirect(route('error'))->with('error', 'Error creating post: ' . $post->getError());
        }
    }

    public function deleteApi(Request $request) {
        $request->validate([
            'post_id' => 'required',
        ]);

        $post = Post::find($request->post_id);
        if ($post->delete()) {
            return redirect(route('rants'))->with('info', 'Post deleted');
        } else {
             return redirect(route('error'))->with('error', 'Error deleting post: ' . $post->getError());
        }
    }

    public function updateApi(Request $request) {
        $request->validate([
            'post_id' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($request->post_id);
        $post->content = $request->content;
        if ($post->save()) {
            return redirect(route('rants'))->with('info', 'Post updated');
        } else {
             return redirect(route('error'))->with('error', 'Error updating post: ' . $post->getError());
        }
    }

    public function rants() {
        //$posts = Post::where('user_id', Auth::id())->get();
        // get all rants from all users, limit 10, from most recent
        $posts = Post::orderBy('created_at', 'desc')->limit(10)->get();

        // get the name of the user from the user_id in the posts
        foreach ($posts as $post) {
            $user = User::find($post->user_id);
            $post->user_name = $user->name;
        }
        
        return view('rants', ['posts' => $posts]);
    }

    public function userRants($user_id) {
        $posts = Post::where('user_id', $user_id)->get();
        $user = User::find($user_id);
        return view('user', ['posts' => $posts], ['user' => $user]);
    }
}
