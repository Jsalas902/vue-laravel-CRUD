<?php

namespace App\Http\Controllers;

use App\Thought;
use Illuminate\Http\Request;

class ThoughtController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return Thought::where('user_id', auth()->id())->get();
    }

    public function store(Request $request)
    {
        $thought = new Thought();
        $thought->description = $request->description;
        $thought->user_id = auth()->id();
        $thought->save();
        
        return $thought;
    }

    public function update(Request $request, Thought $thought)
    {
        $thought->description = $request->description;
        $thought->save();

        return $thought;

    }

    public function destroy(Thought $thought)
    {
        $thought->delete();   
    }
}
