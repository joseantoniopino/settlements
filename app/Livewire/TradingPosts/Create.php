<?php

namespace App\Livewire\TradingPosts;

use App\Models\Settlements\TradingPost\TradingPost;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Create extends Component
{
    public array $tradingPostData;
    public array $results;

    public function mount(): void
    {
        $this->tradingPostData = TradingPost::getGenerator();
    }

    public function render(): View
    {
        return view('livewire.trading-posts.create');
    }


    public function renderResult(string $type): void
    {
        $diceFaces = $this->getDiceFaces($this->tradingPostData[$type]['dice_type']);
        $diceResult = $this->roll($diceFaces);
        $resultRendered = $this->tradingPostData[$type]['results'][$diceResult]['description'];

        $this->results[$type]['roll'] = $diceResult;
        $this->results[$type]['description'] = $resultRendered;
    }

    private function getDiceFaces(string $diceType): int
    {
        return (int)explode('d', $diceType)[1];
    }

    private function roll(int $diceFaces = 8): int
    {
        return rand(1, $diceFaces);
    }
}
