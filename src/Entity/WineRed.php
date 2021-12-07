<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\WineRedRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *      normalizationContext={"groups"={"wine:read"}},
 *      denormalizationContext={"groups"={"wine:write"}}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\WineRedRepository")
 */
class WineRed
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("wine:read")
     * 
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"wine:read", "wine:write"})
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"wine:read", "wine:write"})
     */
    private $origin;

     /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     * @Groups({"wine:read", "wine:write"})
     */
    private $liters;
     /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     * @Groups({"wine:read", "wine:write"})
     */
    private $prices;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"wine:read", "wine:write"})
     */
    private $wine_year;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"wine:read", "wine:write"})
     */
    private $email;

    /**
     * @ORM\Column(type="datetime")
     * @Groups("wine:read")
     */
    private $published_date;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    public function setOrigin(string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    public function getLiters(): ?string
    {
        return $this->liters;
    }

    public function setLiters(string $liters): self
    {
        $this->liters = $liters;

        return $this;
    }

    public function getPrices(): ?string
    {
        return $this->prices;
    }

    public function setPrices(string $prices): self
    {
        $this->prices = $prices;

        return $this;
    }

    public function getWineYear(): ?string
    {
        return $this->wine_year;
    }

    public function setWineYear(string $wine_year): self
    {
        $this->wine_year = $wine_year;

        return $this;
    }


    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPublishedDate(): ?\DateTimeInterface
    {
        return $this->published_date;
    }

    public function setPublishedDate(\DateTimeInterface $published_date): self
    {
        $this->published_date = $published_date;

        return $this;
    }
}
