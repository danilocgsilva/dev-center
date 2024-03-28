<?php

declare(strict_types=1);

namespace Danilocgsilva\DevCenter\Migrations;

class M02CreateProjectsTable extends MigrationsAbstract implements MigrationInterface
{
    public function __construct()
    {
        $filePath = __DIR__ ."/../../resources/migrations_scripts/02_create_projects_table.sql";
        parent::__construct($filePath);
    }
}