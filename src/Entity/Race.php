<?php

namespace App\Entity;

use App\Repository\RaceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RaceRepository::class)
 */
class Race
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
    private $location;

    /**
     * @ORM\Column(type="date")
     */
    private $registrationDate;

    /**
     * @ORM\Column(type="float")
     */
    private $raceLength;

    /**
     * @ORM\Column(type="integer")
     */
    private $totalCheckPoints;

    /**
     * @ORM\Column(type="time")
     */
    private $startTime;

    /**
     * @ORM\Column(type="time")
     */
    private $maxTime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getRegistrationDate(): ?\DateTimeInterface
    {
        return $this->registrationDate;
    }

    public function setRegistrationDate(\DateTimeInterface $registrationDate): self
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    public function getRaceLength(): ?float
    {
        return $this->raceLength;
    }

    public function setRaceLength(float $raceLength): self
    {
        $this->raceLength = $raceLength;

        return $this;
    }

    public function getTotalCheckPoints(): ?int
    {
        return $this->totalCheckPoints;
    }

    public function setTotalCheckPoints(int $totalCheckPoints): self
    {
        $this->totalCheckPoints = $totalCheckPoints;

        return $this;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->startTime;
    }

    public function setStartTime(\DateTimeInterface $startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getMaxTime(): ?\DateTimeInterface
    {
        return $this->maxTime;
    }

    public function setMaxTime(\DateTimeInterface $maxTime): self
    {
        $this->maxTime = $maxTime;

        return $this;
    }
}
