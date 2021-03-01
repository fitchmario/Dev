<?php

namespace App\Entity;

use App\Repository\CheckPointTypeRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CheckPointTypeRepository::class)
 */
class CheckPointType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $name;

    /**
     * @ORM\Column(type="time")
     */
    private $absTime;

    /**
     * @ORM\Column(type="time")
     */
    private $relTime;

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

    public function getAbsTime(): ?DateTimeInterface
    {
        return $this->absTime;
    }

    public function setAbsTime(DateTimeInterface $absTime): self
    {
        $this->absTime = $absTime;

        return $this;
    }

    public function getRelTime(): ?DateTimeInterface
    {
        return $this->relTime;
    }

    public function setRelTime(DateTimeInterface $relTime): self
    {
        $this->relTime = $relTime;

        return $this;
    }
}
