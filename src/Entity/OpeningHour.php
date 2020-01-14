<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OpeningHourRepository")
 */
class OpeningHour
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dayname;

    /**
     * @ORM\Column(type="smallint")
     */
    private $daynumber;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $openingTime;

    /**
     * @ORM\Column(type="time")
     */
    private $closingtime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDayname(): ?string
    {
        return $this->dayname;
    }

    public function setDayname(string $dayname): self
    {
        $this->dayname = $dayname;

        return $this;
    }

    public function getDaynumber(): ?int
    {
        return $this->daynumber;
    }

    public function setDaynumber(int $daynumber): self
    {
        $this->daynumber = $daynumber;

        return $this;
    }

    public function getOpeningTime(): ?\DateTimeInterface
    {
        return $this->openingTime;
    }

    public function setOpeningTime(?\DateTimeInterface $openingTime): self
    {
        $this->openingTime = $openingTime;

        return $this;
    }

    public function getClosingtime(): ?\DateTimeInterface
    {
        return $this->closingtime;
    }

    public function setClosingtime(\DateTimeInterface $closingtime): self
    {
        $this->closingtime = $closingtime;

        return $this;
    }
}
