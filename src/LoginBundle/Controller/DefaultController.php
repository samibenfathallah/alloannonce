<?php

namespace LoginBundle\Controller;

use AppBundle\Entity\User;
use BackofficeBundle\Entity\Responsable;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Login/Default/index.html.twig');
    }
    
    public function registerAction()
    {
        return $this->render('@Login/Default/register.html.twig');
    }
    
    public function valideinscriptionAction()
    {
        $em = $this->getDoctrine()->getManager();

        $responsable = new User();
        $responsable->setUsername($_POST['name']);
        $responsable->setEmail($_POST['email']);
        $responsable->setEnabled(1);
        $responsable->setRoles(['ROLE_USER']);
		$responsables = $this->getDoctrine()->getRepository(Responsable::class)->ExisteResponsable($_POST['name'],$_POST['email']);
        if(empty($responsables))
        {

        if (isset($_POST['mp1']) && $_POST['mp1'] == $_POST['mp2']) {
            $password = $this->get('security.password_encoder')
                    ->encodePassword($responsable, $_POST['mp1']);
            $responsable->setPassword($password);


            $em->persist($responsable);
            $em->flush();

           // $responsables = $this->getDoctrine()->getRepository(Responsable::class)->ListeResponsables();
            /* print_r($responsables);
              echo "jj";
              die(); */
            return $this->redirectToRoute('login_homepage', array('erreur' => '0'));
            //return $this->render('@Backoffice/Default/utilisateurs.html.twig', array('responsables' => $responsables,'erreur' => "0"));
        } else {
            return $this->redirectToRoute('inscription', array('erreur' => '1'));
        }
		}
		else
		{
			return $this->redirectToRoute('inscription', array('erreur' => '2'));
		}
    }
}
