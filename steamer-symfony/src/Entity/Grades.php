<?php

namespace App\Entity;

use App\Repository\GradesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GradesRepository::class)]
class Grades
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $français = null;

    #[ORM\Column]
    private ?float $anglais = null;

    #[ORM\Column]
    private ?float $svt = null;

    #[ORM\Column]
    private ?float $philosophie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFrançais(): ?float
    {
        return $this->français;
    }

    public function setFrançais(float $français): self
    {
        $this->français = $français;

        return $this;
    }

    public function getAnglais(): ?float
    {
        return $this->anglais;
    }

    public function setAnglais(float $anglais): self
    {
        $this->anglais = $anglais;

        return $this;
    }

    public function getSvt(): ?float
    {
        return $this->svt;
    }

    public function setSvt(float $svt): self
    {
        $this->svt = $svt;

        return $this;
    }

    public function getPhilosophie(): ?float
    {
        return $this->philosophie;
    }

    public function setPhilosophie(float $philosophie): self
    {
        $this->philosophie = $philosophie;

        return $this;
    }
}
