<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MainTableRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MainTableRepository::class)]
#[ApiResource]
class MainTable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Event::class)]
    private $event;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    private $who;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getWho(): ?Users
    {
        return $this->who;
    }

    public function setWho(?Users $who): self
    {
        $this->who = $who;

        return $this;
    }
}
