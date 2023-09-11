<?php

namespace App\Http\Controllers;

use App\DataModels\TradingPostData;
use App\Models\Settlements\TradingPost\TradingPost;

class TradingPostController extends Controller
{
    public function index()
    {
        $tradingPosts = TradingPost::where('user_id', auth()->user()->id)->get();
        $tradingPostData = TradingPost::getGenerator();
        return view('trading-posts.index', compact('tradingPosts', 'tradingPostData'));
    }

    public function create()
    {
        return view('trading-posts.create');
    }
}
