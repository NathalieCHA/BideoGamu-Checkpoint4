<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\VideogamesRepository;
use Symfony\Component\Validator\Constraints\Date;

#[ORM\Entity(repositoryClass: VideogamesRepository::class)]
class Videogames
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'text', nullable: true)]
    private $description;


    #[ORM\Column(type: 'datetime', nullable: true)]
    private $releaseDate;

    #[ORM\Column(type: 'integer')]
    private $howLongToBeat;

    #[ORM\Column(type: 'string', length: 255)]
    private $img;

    #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: 'videogames')]
    private $category;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getReleaseDate(): ?\DateTime
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(\DateTime $releaseDate): self
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getHowLongToBeat(): ?int
    {
        return $this->howLongToBeat;
    }

    public function setHowLongToBeat(int $howLongToBeat): self
    {
        $this->howLongToBeat = $howLongToBeat;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

}
