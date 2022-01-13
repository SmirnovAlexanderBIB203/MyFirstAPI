<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PlaceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlaceRepository::class)]
#[ApiResource]
class Place
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name_place;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamePlace(): ?string
    {
        return $this->name_place;
    }

    public function setNamePlace(string $name_place): self
    {
        $this->name_place = $name_place;

        return $this;
    }
}
