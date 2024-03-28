<?php

declare(strict_types=1);

namespace Danilocgsilva\DevCenter\Migrations;

abstract class MigrationsAbstract implements MigrationInterface
{
    public function __construct(private string $migrationScriptPath) {}

    public function getMigrationScript(): string
    {
        $filename = __DIR__ ."../../resources/migrations_scripts/01_create_nodes_tables.sql";
        $handle = fopen($this->migrationScriptPath, "r");
        $contents = fread($handle, filesize($filename));
        fclose($handle);
        return $contents;
    }
}