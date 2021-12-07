<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CollectionWineRepository;
use Doctrine\ORM\Mapping as ORM;



/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\WineRedRepository")
 */
class CollectionWine
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $wine_name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWineName(): ?string
    {
        return $this->wine_name;
    }

    public function setWineName(?string $wine_name): self
    {
        $this->wine_name = $wine_name;

        return $this;
    }
}





    



    


     

    

