<?php

declare(strict_types=1);

namespace Danilocgsilva\DevCenter\Migrations;

interface MigrationInterface
{
    public function getMigrationScript(): string;
}
