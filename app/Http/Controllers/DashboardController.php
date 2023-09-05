<?php

namespace App\Http\Controllers;

use App\DataModels\TradingPostData;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $tradingPostOriginData = TradingPostData::fromArray(__('settlements/trading_post.origin'));
        return view('dashboard', ['tradingPostOriginData' => $tradingPostOriginData]);
    }
}
