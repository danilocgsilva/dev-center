<?php

declare(strict_types=1);

namespace Danilocgsilva\DevCenter\Migrations;

abstract class MigrationsAbstract implements MigrationInterface
{
    public function __construct(private string $migrationScriptPath) {}

    public function getMigrationScript(): string
    {
        $handle = fopen($this->migrationScriptPath, "r");
        $contents = fread($handle, filesize($this->migrationScriptPath));
        fclose($handle);
        return $contents;
    }
}