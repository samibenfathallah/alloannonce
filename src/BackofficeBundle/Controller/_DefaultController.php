<?php

namespace BackofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackofficeBundle\Entity\Annonces_cloture;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;

class DefaultController extends Controller {

    //////////////////////Partie Cosultation/////////////////////
    public function indexAction() {
       // return $this->render('@Backoffice/Default/index.html.twig');
        return $this->redirectToRoute('liste_annonces');
    }

    public function annoncesAction() {
        return $this->render('@Backoffice/Default/annonces.html.twig');
    }
    
    public function devisAction() {
     
        $pdf = new \FPDF();

        $pdf->AddPage();
         $pdf->SetFont('Arial','B',16);
        $pdf->SetXY(150,10);
        $pdf->Cell(30,10,'Devis');
        $user = $this->getUser();
        $email = $user->getEmail();
        $id=$user->getId();
        $annonce = $this->getDoctrine()->getRepository(Annonces_cloture::class)->findOneById($_GET['id']);
        
        //$pdf->Cell(40,10,'Hello World!');
        $pdf->Image('bundles/backoffice/images/logo.png',10,10,70);
        
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY(10,30);
        $pdf->Cell(40,10,'Code client : 2018'.$id);
        $pdf->SetXY(10,35);
        $pdf->Cell(40,10,'N de devis :2018'.$annonce->getId());
        $pdf->SetXY(10,40);
        $pdf->Cell(40,10,'Date :'.$annonce->getDatepublication());
        $pdf->SetXY(10,45);
        $pdf->Cell(40,10,'Rubrique :');
        $pdf->SetXY(10,50);
        $pdf->Cell(40,10,'Denomination :'.$annonce->getSociete());
        $pdf->SetXY(150,30);
        $pdf->Cell(40,10,$user);
        $pdf->SetXY(150,35);
        $pdf->Cell(40,10,'Email:'.$email);
        //$pdf->SetXY(150,40);
        //$pdf->Cell(40,10,'80560 ACHEUX EN AMIENOIS');
        
        
        $pdf->SetFont('Arial','B',7);
        $pdf->SetFillColor(192,192,192);
        $pdf->SetXY(10,70);
        $pdf->Cell(80,5,'Designation',1,'','C','true');
        $pdf->SetXY(90,70);
        $pdf->Cell(20,5,'Qte',1,'','C','true');
        $pdf->SetXY(110,70);
        $pdf->Cell(20,5,'Prix HT',1,'','C','true');
        $pdf->SetXY(130,70);
        $pdf->Cell(20,5,'TVA',1,'','C','true');
        $pdf->SetXY(150,70);
        $pdf->Cell(20,5,'Remise',1,'','C','true');
        $pdf->SetXY(170,70);
        $pdf->Cell(30,5,'Net HT',1,'','C','true');
        
        $code = $annonce->getCodePostal();
        $pdf->SetFillColor(255,255,255);
        $pdf->SetXY(10,75);
        $pdf->Cell(80,8,"Tarif d'insertion a la ligne pour le departement ".$code[0].$code[1]." *",1,'','L','true');
        $pdf->SetXY(10,83);
        $pdf->Cell(80,8,"Justificatif de parution",1,'','L','true');
        $pdf->SetXY(10,91);
        $pdf->Cell(80,8,"Frais d'affanchissement - Envoi des justificatifs",1,'','L','true');
        
        $pdf->SetXY(90,75);
        $pdf->Cell(20,8,'19',1,'','C','true');
        $pdf->SetXY(90,83);
        $pdf->Cell(20,8,'1',1,'','C','true');
        $pdf->SetXY(90,91);
        $pdf->Cell(20,8,'1',1,'','C','true');
        
        $pdf->SetXY(110,75);
        $pdf->Cell(20,8,'5.50 Euro',1,'','C','true');
        $pdf->SetXY(110,83);
        $pdf->Cell(20,8,'1.96 Euro',1,'','C','true');
        $pdf->SetXY(110,91);
        $pdf->Cell(20,8,'1.63 Euro',1,'','C','true');
        
        $pdf->SetXY(130,75);
        $pdf->Cell(20,8,'20.00%',1,'','C','true');
        $pdf->SetXY(130,83);
        $pdf->Cell(20,8,'2.10%',1,'','C','true');
        $pdf->SetXY(130,91);
        $pdf->Cell(20,8,'0.00%',1,'','C','true');
        
        $pdf->SetXY(150,75);
        $pdf->Cell(20,8,'',1,'','C','true');
        $pdf->SetXY(150,83);
        $pdf->Cell(20,8,'',1,'','C','true');
        $pdf->SetXY(150,91);
        $pdf->Cell(20,8,'',1,'','C','true');
        
        $pdf->SetXY(170,75);
        $pdf->Cell(30,8,'104.50 Euro',1,'','C','true');
        $pdf->SetXY(170,83);
        $pdf->Cell(30,8,'1.96 Euro',1,'','C','true');
        $pdf->SetXY(170,91);
        $pdf->Cell(30,8,'1.63 Euro',1,'','C','true');
        
        
        $pdf->SetXY(10,105);
        $pdf->Cell(30,8,"Total HT",1,'','C','true');
        $pdf->SetXY(10,113);
        $pdf->Cell(30,6,"104.50",1,'','C','true');
        $pdf->SetXY(10,119);
        $pdf->Cell(30,6,"1.96",1,'','C','true');
        $pdf->SetXY(10,125);
        $pdf->Cell(30,6,"1.63",1,'','C','true');
        
        $pdf->SetXY(40,105);
        $pdf->Cell(30,8,"Taux",1,'','C','true');
        $pdf->SetXY(40,113);
        $pdf->Cell(30,6,"20.00%",1,'','C','true');
        $pdf->SetXY(40,119);
        $pdf->Cell(30,6,"2.10%",1,'','C','true');
        $pdf->SetXY(40,125);
        $pdf->Cell(30,6,"0.00%",1,'','C','true');
        
        $pdf->SetXY(70,105);
        $pdf->Cell(30,8,"Total TVA",1,'','C','true');
        $pdf->SetXY(70,113);
        $pdf->Cell(30,6,"20.90",1,'','C','true');
        $pdf->SetXY(70,119);
        $pdf->Cell(30,6,"0.04",1,'','C','true');
        $pdf->SetXY(70,125);
        $pdf->Cell(30,6,"0.00",1,'','C','true');
        
        $pdf->SetFont('Arial','B',9);
        $pdf->SetFillColor(192,192,192);
        
        $pdf->SetXY(140,105);
        $pdf->Cell(30,8,"Total net HT :",0,'','L','true');
        $pdf->SetXY(140,113);
        $pdf->Cell(30,6,"Total TVA :",0,'','L','true');
        $pdf->SetXY(140,119);
        $pdf->Cell(30,6,"Total TTC :",0,'','L','true');
        
        
        $pdf->SetXY(170,105);
        $pdf->Cell(30,8,"108.09 Euro",0,'','L','true');
        $pdf->SetXY(170,113);
        $pdf->Cell(30,6,"20.94 Euro",0,'','L','true');
        $pdf->SetXY(170,119);
        $pdf->Cell(30,6,"129.03 Euro",0,'','L','true');
        
        $pdf->SetFillColor(255,255,255);
        $pdf->SetFont('Arial','B',7);
        
        $pdf->SetXY(10,150);
        $pdf->Cell(30,6,"* Arretes Prefectoraux : de Paris, Hauts-de-Seine, Seine-et-Marne, Seine-Saint-Denis et Val-de-Marne du 22/12/17, 26/12/17, 11/12/17, 01/12/17, 21/12/17.
",0,'','L','true');
        

        $pdf->AddPage();
        
        
        //$pdf->Cell(40,10,'Hello World!');
        $pdf->Image('bundles/backoffice/images/logo.png',10,10,70);
        
        
        
        $pdf->SetFont('Arial','B',14);
        $pdf->SetXY(10,40);
        $pdf->Cell(190,10,'APERCU DE VOTRE ANNONCE',0,'',"C");
        
        $pdf->SetFont('Arial','B',18);
        $pdf->SetXY(10,55);
        $pdf->Cell(190,10,$annonce->getSociete(),0,'',"C");
        
        $pdf->SetFont('Arial','',15);
        $pdf->SetXY(10,75);
        $pdf->Cell(190,10,'--------------------',0,'',"C");
        
        $pdf->SetXY(10,85);
        $pdf->Cell(190,10,$annonce->getFormeJurique().' au capital de '.$annonce->getCapital().' Euro',0,'',"C");
        
        $pdf->SetXY(10,95);
        $pdf->Cell(190,10,'Siege social :'.$annonce->getAdresse(),0,'',"C");
        
        $pdf->SetXY(10,105);
        $pdf->Cell(190,10,$annonce->getCodePostal().' '.$annonce->getVille(),0,'',"C");
        
        $pdf->SetXY(10,115);
        $pdf->Cell(190,10,$annonce->getNrcs().' RCS de '.$annonce->getVille(),0,'',"C");
        
        $pdf->SetXY(10,125);
        $pdf->Cell(190,10,'--------------------',0,'',"C");
         $pdf->SetFont('Arial','',12);
        $pdf->SetXY(5,135);
        $pdf->MultiCell(205,5,"Par AGO du 06/10/2018, il a ete approuve les comptes definitifs de liquidation, donne quitus au liquidateur M.NOM Prenom Adresse Liquiditeur 9200 92000 NANTERRE, residant a l'etranger pour sa gestion, l'a decharge de son mandat et constate la cloture definitive de la liquidation a compter du 23/10/2018",0,'FJ',1);

        $y=$pdf->GetY();
        $pdf->SetXY(5,$y+5);
        $pdf->Cell(190,10,'Radiation du RCS de NANTERRE',0,'',"L");

        return new Response($pdf->Output(), 200, array(
            'Content-Type' => 'application/pdf'));
    
    }

    public function ajoutannoncesAction() {
        return $this->render('@Backoffice/Default/ajoutannonces.html.twig');
    }

    /*    public function utilisateursAction() {
      $users = $this->getDoctrine()->getRepository(Responsables::class)->ListeResponsables();
      //print_r($users);
      print_r($users);
      //return $this->render('@Backoffice/Default/utilisateurs.html.twig');
      } */

    public function annonceclotureAction() {
        return $this->render('@Backoffice/Default/annonce_cloture.html.twig');
    }

    public function tousannoncesAction() {
        
        
        $user = $this->getUser();
        if ($user->hasRole('ROLE_ADMIN')){
            $listeAnnonces = $this->getDoctrine()->getRepository(Annonces_cloture::class)->findAll();
           /* print_r($listeAnnonces);
            die();*/
            return $this->render('@Backoffice/Default/annonces.html.twig', array('listeAnnonces' => $listeAnnonces));
        }
        else{
            $listeAnnonces = $this->getDoctrine()->getRepository(Annonces_cloture::class)->findAllUser($user->getEmail());
            /*print_r($listeAnnonces);
            die();*/
            return $this->render('@Backoffice/Default/annonces.html.twig', array('listeAnnonces' => $listeAnnonces));
        }
        
        
    }

    //////////////////////Partie En lien avec la bdd/////////////////////
    //////////////////////FUNCTION ADD ANNONCE///////////////////////////

    public function AddannonceclotureAction() {

        $em = $this->getDoctrine()->getManager();

        $annonce = new Annonces_cloture();
        $annonce->setAdresse($_POST['adresse']);
        $annonce->setCodePostal($_POST['code']);
        $annonce->setVilleDuGreffe($_POST['greffe']);
        $annonce->setComplementAdresse($_POST['com_adr']);
        $annonce->setVille($_POST['ville']);
        $annonce->setSociete($_POST['denomination']);
        $annonce->setCapital($_POST['capital']);
        $annonce->setFormeJurique($_POST['forme']);
        $annonce->setNrcs($_POST['rcs']);
        $annonce->setTypeAssemblee($_POST['type_ass']);
        $annonce->setDateAssemblee($_POST['dt_assemblee']);
        $annonce->setDateEffet($_POST['dt_effet']);
        $annonce->setTypeAssemble2($_POST['autre_type']);
        $annonce->setLiquidateur("sami");
        $annonce->setTypeannonce("Cloture");
        $annonce->setDatepublication(date("Y-m-d"));


        $user = $this->getUser();
        $email = $user->getEmail();

        $annonce->setPublierpar($email);

        $em->persist($annonce);
        $em->flush();

        /* $listeAnnonces = $this->getDoctrine()->getRepository(Annonces_cloture::class)->findAll();
          print_r($listeAnnonces);
          echo "jj";
          die(); */
        //return $this->render('AdminBundle:Default:responsables.html.twig', array('responsables' => $responsables));
        //return $this->render('@Backoffice/Default/annonces.html.twig');
        //return $this->redirectToRoute('liste_annonces', array('add' => '1'));
        return $this->render('@Backoffice/Default/visualiser.html.twig', array('annonce' => $annonce));  
    }

    public function EditAnnonceAction() {

        $annonce = $this->getDoctrine()->getRepository(Annonces_cloture::class)->findOneById($_GET['id']);
        return $this->render('@Backoffice/Default/formeditannonce.html.twig', array('annonce' => $annonce));
    }
    
    
    public function ViewAnnonceAction() {
       $annonce = $this->getDoctrine()->getRepository(Annonces_cloture::class)->findOneById($_GET['id']);
        return $this->render('@Backoffice/Default/visualiser.html.twig', array('annonce' => $annonce));  
    }
    

    function DeleteAnnonceAction() {

        $em = $this->getDoctrine()->getManager();
        $annonce = $this->getDoctrine()->getRepository(Annonces_cloture::class)->findOneById($_GET['id']);

        $em->remove($annonce);
        $em->flush();

        /* print_r($services);
          die(); */
        //return $this->render('AdminBundle:Default:menu_liste.html.twig', array('menus' => $menus, 'validesupp' => '1'));
        return $this->redirectToRoute('liste_annonces', array('delete' => '1'));
    }

    public function valideeditAnnonceAction() {

        $em = $this->getDoctrine()->getManager();
        $annonce = $this->getDoctrine()->getRepository(Annonces_cloture::class)->findOneById($_POST['idannonce']);
        $annonce->setAdresse($_POST['adresse']);
        $annonce->setCodePostal($_POST['code']);
        $annonce->setVilleDuGreffe($_POST['greffe']);
        $annonce->setComplementAdresse($_POST['com_adr']);
        $annonce->setVille($_POST['ville']);
        $annonce->setSociete($_POST['denomination']);
        $annonce->setCapital($_POST['capital']);
        $annonce->setFormeJurique($_POST['forme']);
        $annonce->setNrcs($_POST['rcs']);
        $annonce->setTypeAssemblee($_POST['type_ass']);
        $annonce->setDateAssemblee($_POST['dt_assemblee']);
        $annonce->setDateEffet($_POST['dt_effet']);
        $annonce->setTypeAssemble2($_POST['autre_type']);
        $annonce->setLiquidateur("sami");
        $annonce->setTypeannonce("Cloture");





        $em->persist($annonce);
        $em->flush();

        /* print_r($services);
          die(); */
        return $this->redirectToRoute('visualiser_annonce', array('id' => $_POST['idannonce']));
    }

}
