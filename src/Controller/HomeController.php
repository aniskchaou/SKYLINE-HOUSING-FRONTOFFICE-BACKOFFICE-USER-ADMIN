<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PropertyRepository;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use App\Form\PropertySearchType;
use App\Form\ContactType;
use App\Entity\PropertySearch;
use App\Entity\Contact;


class HomeController extends AbstractController {

    /**
     * @Route("/",name="home")
     */
    function index(Request $request, PropertyRepository $propertyRepository,PaginatorInterface $paginator):Response
    {
       //$properties=$propertyRepository->findLastest();
        
       $propertySearch=new PropertySearch();
        $form = $this->createForm(PropertySearchType::class, $propertySearch);
        $form->handleRequest($request);



       $properties = $paginator->paginate(
        $propertyRepository->findPagination($propertySearch), /* query NOT result */
        $request->query->getInt('page', 1), /*page number*/
        6 /*limit per page*/
    );

        return new Response($this->renderView('home.html.twig',array('properties'=>$properties,'form' => $form->createView() )));
    }

    /**
     * @Route("/show",name="show")
     */
    function show(PropertyRepository $propertyRepository,Request $request,\Swift_Mailer $mailer):Response
    {
        //return new Response($this->renderView('show.html.twig',array('slug'=>$request->request->get('slug'))));
        $id=$request->query->get('id');
        $property=$propertyRepository->find($id);
        $contact=new Contact();
        $contact->setProperty($property);
        $form=$this->createForm(ContactType::class,$contact);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            
            $message = (new \Swift_Message('Hello Email'))
            ->setFrom('send@example.com')
            ->setTo('recipient@example.com')
            ->setBody(
                $this->renderView(
                    // templates/emails/registration.html.twig
                    'emails/contact.html.twig',
                    ['contact' => $contact]
                ),
                'text/html'
            );


          $mailer->send($message);
          print($request);
            $this->addFlash('info','property has been created');
        }

             ////////////
        return new Response($this->renderView('show.html.twig',array('property'=>$property,'form' => $form->createView() )));

    }

}



