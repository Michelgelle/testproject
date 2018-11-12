<?php

declare(strict_types=1);

namespace Domain;

final class Bus
{
    /** @var LineId */
    private $lineId;

    public function __construct(LineId $lineId)
    {
        $this->lineId = $lineId;
    }

    public function unknownLine()
    {
        return $this->lineId->isUnknown();
    }
}