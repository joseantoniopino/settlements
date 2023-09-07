<?php

namespace App\DataModels;

class TradingPostData
{
    private string $diceType;
    private string $type;
    private string $model;
    private array $results;


    private function __construct(array $data)
    {
        $this->diceType = $data['dice_type'];
        $this->results = $data['results'];
        $this->type = $data['type'];
        $this->model = $data['model'];
    }

    public static function fromArray(array $data): self
    {
        return new self($data);
    }

    public function getDiceType(): string
    {
        return $this->diceType;
    }

    public function getResults(): array
    {
        return $this->results;
    }

    public function getDescription(int $diceResult): string
    {
        return $this->results[$diceResult]['description'];
    }

    public function getSpecial(int $diceResult): ?string
    {
        return $this->results[$diceResult]['special'];
    }

    public function getChoice(int $diceResult): ?array
    {
        return $this->results[$diceResult]['choice'];
    }

    public function getTableModifications(int $diceResult): ?array
    {
        return $this->results[$diceResult]['table_modifications'];
    }
}
