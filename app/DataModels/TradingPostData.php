<?php

namespace App\DataModels;

class TradingPostData
{
    private string $diceType;
    private array $results;
    private ?array $subTables;

    private function __construct(array $data)
    {
        $this->diceType = $data['dice_type'];
        $this->results = $data['results'];
        $this->subTables = $data['sub_tables'];
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

    public function getSubTables(): ?array
    {
        return $this->subTables;
    }
}
