<?php

namespace App\Migration\CollectionMappers;

use App\Migration\CollectionMappers;

class UserCollectionMapper extends CollectionMappers\CollectionMapper
{
    /**
     * @inheritDoc
     */
    public function newCollectionName(): string
    {
        return 'users';
    }

    /**
     * @inheritDoc
     */
    public function requiredColumns(): array
    {
        return [];
    }
}
