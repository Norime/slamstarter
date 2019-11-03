<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectsRepository")
 */
class Projects
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $projects;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProjects(): ?string
    {
        return $this->projects;
    }

    public function setProjects(?string $projects): self
    {
        $this->projects = $projects;

        return $this;
    }
}
