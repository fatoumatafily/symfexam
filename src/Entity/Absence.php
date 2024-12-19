<?php

namespace App\Entity;

use App\Repository\AbsenceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AbsenceRepository::class)
 */
class Absence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Inscription::class, inversedBy="absences")
     */
    private $inscription;

    /**
     * @ORM\ManyToOne(targetEntity=session::class, inversedBy="absences")
     */
    private $session;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInscription(): ?Inscription
    {
        return $this->inscription;
    }

    public function setInscription(?Inscription $inscription): self
    {
        $this->inscription = $inscription;

        return $this;
    }

    public function getsession(): ?session
    {
        return $this->session;
    }

    public function setsession(?session $session): self
    {
        $this->session = $session;

        return $this;
    }
}
