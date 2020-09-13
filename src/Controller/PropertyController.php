<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;

class PropertyController  extends AbstractController{

    /**
     * @var PropertyRepository
     */
    private $repository;
   
    /**
     * @var EntityManagerInterface
     */
    private  $em;

   public function __construct(PropertyRepository $repository, EntityManagerInterface $em) {
       $this->repository = $repository;
       $this->em=$em;
   }
   
   
    /**
     * @Route("/properties",name="properties")
     */
    function index():Response
    {  /*
        $property = new Property();
        $property->setTitle('Mon premier bien')
            ->setPrice(200000)
            ->setRooms(4)
            ->setBedrooms(3)
            ->setDescription('Une petite description')
            ->setSurface(60)
            ->setFloor(4)
            ->setHeat(1)
            ->setCity('Cholet')
            ->setAddress('21 rue Emile Grasset')
            ->setPostalCode('49300');

        $em = $this->getDoctrine()->getManager();
        $em->persist($property);
        */
        $property=$this->repository->findNotSold();
        $this->em->flush();
        return new Response($this->renderView('properties.html.twig'));
    }
}



