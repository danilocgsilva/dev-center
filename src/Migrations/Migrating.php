<?php

declare(strict_types=1);

namespace Danilocgsilva\DevCenter\Migrations;

use PDO;

class Migrating
{
    public static function migrate(PDO $pdo, MigrationInterface $migration): void
    {
        $preResult = $pdo->prepare($migration->getMigrationScript());
        $preResult->execute();
    }
}

