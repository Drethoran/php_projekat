<?php

namespace App\Entity;

use App\Repository\RacunRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RacunRepository::class)
 */
class Racun
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Magacin::class, inversedBy="racuns")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Magacin;

    /**
     * @ORM\Column(type="date")
     */
    private $datum;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMagacin(): ?Magacin
    {
        return $this->Magacin;
    }

    public function setMagacin(?Magacin $Magacin): self
    {
        $this->Magacin = $Magacin;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }
}
