<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


class PropertySearch 
{ 
    private $minSurface;
    private $maxPrice;


    public function getMinSurface()
    {
        return $this->minSurface;
    }

    public function setMinSurface($minSurface)
    {
        $this->minSurface=$minSurface;
    }

    public function setmaxPrice($maxPrice)
    {
        $this->maxPrice=$maxPrice;
    }

    public function getmaxPrice()
    {
        return $this->maxPrice;
    }

   
}