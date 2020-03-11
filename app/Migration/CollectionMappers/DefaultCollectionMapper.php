<?php

namespace App\Migration\CollectionMappers;

use App\Migration\CollectionMappers;

class DefaultCollectionMapper extends CollectionMappers\CollectionMapper
{
    /**
     * @inheritDoc
     */
    public function newCollectionName(): string
    {
        return $this->originCollectionName;
    }

    /**
     * @inheritDoc
     */
    public function requiredColumns(): array
    {
        return [];
    }
}
