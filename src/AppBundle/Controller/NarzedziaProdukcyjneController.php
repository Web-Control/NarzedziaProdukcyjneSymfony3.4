<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NarzedziaProdukcyjneController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function loginAction(Request $request)
    {   
           
            if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
            {
                return $this->redirectToRoute('glowny');  
            } else
                {
                    return $this->redirectToRoute('fos_user_security_login');
                }
        

        
    }

     /**
     * @Route("/NarzedziaProdukcyjne/glowny", name="glowny")
     */
    public function glownyAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('NarzedziaProdukcyjne/glowny.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/raportySuszeniaTworz", name="raportySuszeniaTworz")
     */
    public function raportySuszeniaTworzAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('NarzedziaProdukcyjne/raportySuszeniaTworz.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }



}
