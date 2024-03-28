<?php

declare(strict_types=1);

namespace Danilocgsilva\DevCenter\Migrations;

class M01CreateNodesTable extends MigrationsAbstract implements MigrationInterface
{
    public function __construct()
    {
        $filePath = __DIR__ ."/../../resources/migrations_scripts/01_create_nodes_tables.sql";
        parent::__construct($filePath);
    }
}