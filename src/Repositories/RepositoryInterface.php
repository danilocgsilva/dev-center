<?php

declare(strict_types=1);

namespace Danilocgsilva\DevCenter\Repositories;

use Danilocgsilva\DevCenter\Entities\EntityInterface;

interface RepositoryInterface
{
    /**
     * @return \Danilocgsilva\DevCenter\Entities\EntityInterface[]
     */
    public function all(): array;

    /**
     * @param integer $id
     * 
     * @throws \Danilocgsilva\DevCenter\Exceptions\EntityNotFoundException
     *   If the entity does not exists
     * 
     * @return EntityInterface
     */
    public function find(int $id): EntityInterface;
}
