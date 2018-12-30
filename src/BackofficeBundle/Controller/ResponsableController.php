<?php

namespace BackofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use BackofficeBundle\Entity\Responsable;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ResponsableController extends Controller {

    public function AddResponsablesAction() {

        return $this->render('@Backoffice/Default/formaddresponsable.html.twig');
    }

    public function ListeResponsbalesAction() {
        $responsables = $this->getDoctrine()->getRepository(Responsable::class)->ListeResponsables();
        //print_r($responsables);
        //echo "jj";
        // die(); 
        return $this->render('@Backoffice/Default/utilisateurs.html.twig', array('responsables' => $responsables));
        //return $this->render('BackofficeBundle:Default:utilisateurs.html.twig', array('responsables' => $responsables));
    }

    public function unResponsbaleRestAction(Request $request) {
        $responsables = $this->getDoctrine()->getRepository(Responsables::class)->UnResponsables($request->get('id'));
        //$responsables = $this->getDoctrine()->getRepository(Responsables::class)->findOneById(1);
        $listeresponsable = array();
        // foreach ($responsables as $responsable) {
        $listeresponsable[] = [
            'id' => $responsables[0]['id'],
            'username' => $responsables[0]['username'],
            'email' => $responsables[0]['email']
        ];
        //}
//        print_r($responsables);
//        echo "jj";
//        die();
        return new JsonResponse($listeresponsable);
    }

    public function ValideResponsableAction() {


        $em = $this->getDoctrine()->getManager();

        $responsable = new User();
        $responsable->setUsername($_POST['name']);
        $responsable->setEmail($_POST['email']);
        $responsable->setEnabled($_POST['statut']);

        if ($_POST['role'] == '1')
            $responsable->setRoles(['ROLE_ADMIN']);
        else
            $responsable->setRoles(['ROLE_USER']);


        if (isset($_POST['mp1']) && $_POST['mp1'] == $_POST['mp2']) {
            $password = $this->get('security.password_encoder')
                    ->encodePassword($responsable, $_POST['mp1']);
            $responsable->setPassword($password);


            $em->persist($responsable);
            $em->flush();

            $responsables = $this->getDoctrine()->getRepository(Responsable::class)->ListeResponsables();
            /* print_r($responsables);
              echo "jj";
              die(); */
            return $this->redirectToRoute('liste_users', array('erreur' => '0'));
            //return $this->render('@Backoffice/Default/utilisateurs.html.twig', array('responsables' => $responsables,'erreur' => "0"));
        } else {
            return $this->render('@Backoffice/Default/formaddresponsable.html.twig', array('erreur' => "1"));
        }
    }

    public function EditResponsableAction() {

        $responsable = $this->getDoctrine()->getRepository(User::class)->findOneById($_GET['id']);
        return $this->render('@Backoffice/Default/formeditresponsable.html.twig', array('responsable' => $responsable));
    }

    public function valideeditResponsableAction() {
        $em = $this->getDoctrine()->getManager();
        $responsable = $this->getDoctrine()->getRepository(User::class)->findOneById($_POST['idresponsable']);
        $responsable->setUsername($_POST['name']);
        $responsable->setEmail($_POST['email']);
        $responsable->setEnabled($_POST['statut']);

        if ($_POST['role'] == '1')
            $responsable->setRoles(['ROLE_ADMIN']);
        else
            $responsable->setRoles(['ROLE_USER']);


        if (isset($_POST['mp1']) && $_POST['mp1'] == $_POST['mp2']) {
            $password = $this->get('security.password_encoder')
                    ->encodePassword($responsable, $_POST['mp1']);
            $responsable->setPassword($password);




            $em->persist($responsable);
            $em->flush();

            /* print_r($services);
              die(); */
            return $this->redirectToRoute('liste_users', array('modif' => '1'));
        } else {
            $responsable = $this->getDoctrine()->getRepository(User::class)->findOneById($_POST['idresponsable']);
            return $this->render('@Backoffice/Default/formeditresponsable.html.twig', array('responsable' => $responsable, 'erreur' => "1"));
        }
    }

    function DeleteResponsableAction() {
        //$em = $this->getDoctrine()->getManager();
        /* echo $_GET['id'];
          die(); */
        //$responsable = $this->getDoctrine()->getRepository(Responsable::class)->UnResponsableID($_GET['id']);
        /* print_r($responsable);
          exit; */
        /* $em->remove($responsable);
          $em->flush(); */
        $em = $this->getDoctrine()->getManager();
        $user = $this->getDoctrine()->getRepository(User::class)->findOneById($_GET['id']);

        $em->remove($user);
        $em->flush();

        $responsables = $this->getDoctrine()->getRepository(Responsable::class)->ListeResponsables();
        /* print_r($services);
          die(); */
        //return $this->render('AdminBundle:Default:menu_liste.html.twig', array('menus' => $menus, 'validesupp' => '1'));
        return $this->redirectToRoute('liste_users', array('delete' => '1'));
    }

}
