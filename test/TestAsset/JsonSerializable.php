<?php

declare(strict_types=1);

namespace LaminasTest\ApiTools\Rest\TestAsset;

use JsonSerializable as JsonSerializableInterface;

class JsonSerializable implements JsonSerializableInterface
{
    public function jsonSerialize(): array
    {
        return ['foo' => 'bar'];
    }
}
