<?php

namespace App\Entity;

use App\Repository\PlannerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlannerRepository::class)]
class Planner
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $time_to_eat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne]
    public ?User $fk_user = null;

    #[ORM\ManyToOne]
    public ?Meals $fk_meal = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTimeToEat(): ?string
    {
        return $this->time_to_eat;
    }

    public function setTimeToEat(string $time_to_eat): static
    {
        $this->time_to_eat = $time_to_eat;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getFkUser(): ?User
    {
        return $this->fk_user;
    }

    public function setFkUser(?User $fk_user): static
    {
        $this->fk_user = $fk_user;

        return $this;
    }

    public function getFkMeal(): ?Meals
    {
        return $this->fk_meal;
    }

    public function setFkMeal(?Meals $fk_meal): static
    {
        $this->fk_meal = $fk_meal;

        return $this;
    }
}
