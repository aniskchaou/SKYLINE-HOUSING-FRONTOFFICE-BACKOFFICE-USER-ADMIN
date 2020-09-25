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
        //create form
        $propertySearch=new PropertySearch();
        $form = $this->createForm(PropertySearchType::class, $propertySearch);
        $form->handleRequest($request);

        //pagination
        $properties = $paginator->paginate(
        $propertyRepository->findPagination($propertySearch), 
        $request->query->getInt('page', 1), 
        6 );

        return new Response($this->renderView('home.html.twig',array('properties'=>$properties,'form' => $form->createView() )));
    }

    /**
     * @Route("/show",name="show")
     */
    function show(PropertyRepository $propertyRepository,Request $request,\Swift_Mailer $mailer):Response
    {
        //show form
        $id=$request->query->get('id');
        $property=$propertyRepository->find($id);
        $contact=new Contact();
        $contact->setProperty($property);
        $form=$this->createForm(ContactType::class,$contact);
        $form->handleRequest($request);
        
        //retrieve post query
        if ($form->isSubmitted() && $form->isValid()){
            
            //send email
            $message = (new \Swift_Message('Hello Email'))
            ->setFrom('send@example.com')
            ->setTo('recipient@example.com')
            ->setBody(
                $this->renderView(
                    'emails/contact.html.twig',
                    ['contact' => $contact]
                ),
                'text/html'
            );


            $mailer->send($message);

            //show confirmation message
            $this->addFlash('info','Your email has been sent !');
        }


        return new Response($this->renderView('show.html.twig',array('property'=>$property,'form' => $form->createView() )));

    }

}



