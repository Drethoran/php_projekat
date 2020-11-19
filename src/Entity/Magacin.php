<?php

namespace App\Entity;
use App\Entity\Racun;
use App\Repository\MagacinRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MagacinRepository::class)
 */
class Magacin
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $naziv_proizvoda;

    /**
     * @ORM\Column(type="integer")
     */
    private $stopa_pdv;

    /**
     * @ORM\Column(type="float")
     */
    private $prodajna_cena;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $valuta;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $opis;

    /**
     * @ORM\OneToMany(targetEntity=Racun::class, mappedBy="Magacin")
     */
    private $racuns;

    public function __construct()
    {
        $this->racuns = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazivProizvoda(): ?string
    {
        return $this->naziv_proizvoda;
    }

    public function setNazivProizvoda(string $naziv_proizvoda): self
    {
        $this->naziv_proizvoda = $naziv_proizvoda;

        return $this;
    }

    public function getStopaPdv(): ?int
    {
        return $this->stopa_pdv;
    }

    public function setStopaPdv(int $stopa_pdv): self
    {
        $this->stopa_pdv = $stopa_pdv;

        return $this;
    }

    public function getProdajnaCena(): ?float
    {
        return $this->prodajna_cena;
    }

    public function setProdajnaCena(float $prodajna_cena): self
    {
        $this->prodajna_cena = $prodajna_cena;

        return $this;
    }

    public function getValuta(): ?string
    {
        return $this->valuta;
    }

    public function setValuta(string $valuta): self
    {
        $this->valuta = $valuta;

        return $this;
    }

    public function getOpis(): ?string
    {
        return $this->opis;
    }

    public function setOpis(string $opis): self
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * @return Collection|Racun[]
     */
    public function getRacuns(): Collection
    {
        return $this->racuns;
    }

    public function addRacun(Racun $racun): self
    {
        if (!$this->racuns->contains($racun)) {
            $this->racuns[] = $racun;
            $racun->setMagacin($this);
        }

        return $this;
    }

    public function removeRacun(Racun $racun): self
    {
        if ($this->racuns->removeElement($racun)) {
            // set the owning side to null (unless already changed)
            if ($racun->getMagacin() === $this) {
                $racun->setMagacin(null);
            }
        }

        return $this;
    }
}
