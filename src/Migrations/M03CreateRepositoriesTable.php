<?php

declare(strict_types=1);

namespace Danilocgsilva\DevCenter\Migrations;

class M03CreateRepositoriesTable extends MigrationsAbstract implements MigrationInterface
{
    public function __construct()
    {
        $filePath = __DIR__ ."/../../resources/migrations_scripts/03_create_repositories_table.sql";
        parent::__construct($filePath);
    }
}