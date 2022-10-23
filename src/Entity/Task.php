<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaskRepository::class)]
class Task
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $duration_minutes = null;

    #[ORM\ManyToOne(inversedBy: 'tasks')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Routine $routine = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDurationMinutes(): ?int
    {
        return $this->duration_minutes;
    }

    public function setDurationMinutes(int $duration_minutes): self
    {
        $this->duration_minutes = $duration_minutes;

        return $this;
    }

    public function getRoutine(): ?Routine
    {
        return $this->routine;
    }

    public function setRoutine(?Routine $routine): self
    {
        $this->routine = $routine;

        return $this;
    }
}
