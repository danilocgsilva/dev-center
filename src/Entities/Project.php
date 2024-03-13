<?php

declare(strict_types=1);

namespace Danilocgsilva\DevCenter\Entities;

class Project
{
    /**
     * @var string
     */
    private readonly string $projectName;

    /**
     * @var string
     */
    private readonly string $mainRepositoryAddress;

    /**
     * @param string $projectName
     * @return self
     */
    public function setProjectName(string $projectName): self
    {
        $this->projectName = $projectName;
        return $this;
    }

    /**
     * @param string $mainRepositoryAddress
     * @return self
     */
    public function setMainRepositoryAddress(string $mainRepositoryAddress): self
    {
        $this->mainRepositoryAddress = $mainRepositoryAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getMainRepositoryAddress(): string
    {
        return $this->mainRepositoryAddress;
    }

    /**
     * @return string
     */
    public function getProjectName(): string
    {
        return $this->projectName;
    }
}
