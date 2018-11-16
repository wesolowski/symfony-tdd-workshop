<?php

namespace App\Component\Price\Persistence;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Component\Price\Persistence\PriceInfoRepository")
 */
class PriceInfo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $artnum;

    /**
     * @ORM\Column(type="json_array")
     */
    private $price;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getArtnum() : ?string
    {
        return $this->artnum;
    }

    public function setArtnum(string $artnum): self
    {
        $this->artnum = $artnum;

        return $this;
    }

    public function getPrice() :?array
    {
        return $this->price;
    }

    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }


}
