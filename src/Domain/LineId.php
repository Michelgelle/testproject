<?php

declare(strict_types=1);

namespace Domain;

final class LineId
{
    private $lineId;

    public function __construct(string $lineId)
    {
        $this->lineId = $lineId;
    }

    public static function fromString(string $busId): LineId
    {
        return new self($busId);
    }

    public function unknownLine()
    {
        return $this->lineId === '';
    }
}