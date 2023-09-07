<?php

namespace App\Http\Controllers;

use App\DataModels\TradingPostData;
use App\Models\Settlements\TradingPost\TradingPost;

class DashboardController extends Controller
{
    public function __invoke()
    {
        // $tradingPostGenerators = TradingPostData::fromArray(TradingPost::getGenerator('origin'));
        return view('dashboard');
    }
}
