<?php

namespace App\Entity;

use DateTime;
use DateTimeInterface;
use App\Entity\Category;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\VideogamesRepository;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints\Date;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass:VideogamesRepository::class)]
#[Vich\Uploadable]
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


    #[Vich\UploadableField(mapping: "img_file", fileNameProperty: "img")]
    #[Assert\File(
         maxSize : "1M",
         mimeTypes : ["image/jpeg", "image/png", "image/webp"],
     )]

    private $imgFile;

    #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: 'videogames')]
    private $category;

    /**
    * @ORM\Column(type="Datetime")
    */
    private DateTimeInterface $updatedAt;


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

    public function setImgFile(File $img = null)
    {
      $this->imgFile = $img;
      if ($img) {
        $this->updatedAt = new DateTime('now');
      }
    }

    public function getImgFile(): ?File
    {
        return $this->imgFile;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

}
