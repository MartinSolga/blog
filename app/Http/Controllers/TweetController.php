<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    public function create()
    {

        return view('/home');
    }


    public function store()
    {
        $attributes = request()->validate([
            'text' => 'required|max:255']);

        Tweet::create([
            'user_id' => auth()->id(),
            'text' => $attributes['text']
        ]);

        return redirect('/home');
    }
}
