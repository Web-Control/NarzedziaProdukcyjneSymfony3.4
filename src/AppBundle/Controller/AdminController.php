<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;
use AppBundle\Form\roleFormType;
use AppBundle\Form\dodajAsortymentSuszuFormType;


class AdminController extends Controller
{

    /**
     * @Route("/admin/role", name="roleUzytkownika")
     */
    public function roleUzytkownika(Request $request)
    {

        $form = $this->createForm(roleFormType::class);
       

        // only handles data on POST
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
         {
            $imie = $form->get('username')->getData();
            $rola =$form->get('roles')->getData();
       
            $em = $this->getDoctrine()->getManager();

            $user = $em->getRepository('AppBundle:User')->findOneByUsername($imie->getUsername());
        //  dump($user); die;

            $user->setRoles($rola);
            $em->flush();

                $this->addFlash('success', '<b>Sukces!!!</b> Zmieniono rolę użytkownika: ' .$form->get('username')->getData().'.');

            return $this->redirectToRoute('roleUzytkownika');
        }

        return $this->render('NarzedziaProdukcyjne/Admin/roleUzytkownika.html.twig', [
            'roleUzytkownikaForm' => $form->createView()
        ]);

    }

     /**
     * @Route("/admin/dodajAsortymentSuszu", name="dodajAsortymentSuszu")
     */
    public function dodajAsortymentSuszu(Request $request)
    {

        $form = $this->createForm(dodajAsortymentSuszuFormType::class);
       

        // only handles data on POST
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
         {
            $nowy_asortyment = $form->getData(); //To jest obiekt
            $em = $this->getDoctrine()->getManager();

            //Sprawdzamy czy taki asortyment juz istnieje
            $asortyment_w_bazie = $em->getRepository('AppBundle:AsortymentSuszu')->findOneByAsortyment($form->get('asortyment')->getData());

            if (count($asortyment_w_bazie) > 0)
            {
                $this->addFlash('warning', '<b>Uwaga!!!</b> Podany asortyment już istnieje.');

                return $this->redirectToRoute('dodajAsortymentSuszu'); 
            }
                else
            {
                $em->persist($nowy_asortyment);
                $em->flush();

                $this->addFlash('success', '<b>Sukces!!!</b> Dodano nowy asortyment suszu: ' .$form->get('asortyment')->getData().'.');

                return $this->redirectToRoute('dodajAsortymentSuszu');
            }
        }

        return $this->render('NarzedziaProdukcyjne/Admin/dodajAsortymentSuszu.html.twig', [
            'dodajAsortymentSuszuForm' => $form->createView()
        ]);

    }

}