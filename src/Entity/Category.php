<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Videogames::class)]
    private $videogames;

    public function __construct()
    {
        $this->videogames = new ArrayCollection();
    }

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

    /**
     * @return Collection|videogames[]
     */
    public function getVideogames(): Collection
    {
        return $this->videogames;
    }

    public function addVideogame(videogames $videogame): self
    {
        if (!$this->videogames->contains($videogame)) {
            $this->videogames[] = $videogame;
            $videogame->setCategory($this);
        }

        return $this;
    }

    public function removeVideogame(videogames $videogame): self
    {
        if ($this->videogames->removeElement($videogame)) {
            // set the owning side to null (unless already changed)
            if ($videogame->getCategory() === $this) {
                $videogame->setCategory(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
}
