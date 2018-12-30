<?php

namespace BackofficeBundle\Controller;

use BackofficeBundle\Entity\sct_commerciale;
use BackofficeBundle\Entity\gerant;
use BackofficeBundle\Entity\Societe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class SctcommercialController extends Controller
{
    
    
    
    public function AddAnnoncesctcommercialeAction(Request $request){
            
        if ($this->getUser() === Null)
            return $this->redirectToRoute('login_homepage');
        
        
        $sctcom= new sct_commerciale();
      
        
        $em = $this->getDoctrine()->getManager();
        
        
        $form = $this->createFormBuilder($sctcom)
                ->add('adresse', TextareaType::class, array('label' => 'Adresse* ',
                    'required' => true,
                    'attr' => [
                       
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
                ->add('cmplAdresse', TextareaType::class, array(
                    'label' => 'Complement Adresse * ',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
                ->add('codePostale', TextType::class, array(
                    'label' => 'Code Postale',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
                ->add('ville', TextType::class, array(
                    'label' => 'Ville * ',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
                ->add('villeGreffe', TextType::class, array(
                    'label' => 'Ville de Greffe * ',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
				//////////////////////////////Societe
                ->add('nomSct', TextType::class, array(
                    'label' => 'Nom de la société *',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
                
				->add('formJuridique',ChoiceType::class,array('label'=>'Forme juridique de la société *',
					'multiple'=>false,
					'choices'=>array('- Sélectionner une valeur -' =>'' ,
										  'SARL unipersonnelle' =>'1',
										  'SARL unipersonnelle à capital variable' =>'2',
										  'SARL' =>'3',
										  'SARL à capital variable' =>'4',
										  'SELARL' =>'5',
										  'SELARL à capital variable' =>'6'
										  ),
					'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
					))
					              
				
                ->add('date_signature_state', TextType::class, array('label' => 'Date de signature des statuts * ',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
				->add('nomCommercial', TextType::class, array('label' => 'Nom du commerciale *',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
                ->add('enseigne', TextType::class, array('label' => 'Enseigne * ',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
                
                ->add('duree', TextType::class, array('label' => 'Durée * ',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
				
				->add('capital', TextType::class, array('label' => 'Capital * ',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
                
                ->add('sigle', TextType::class, array('label' => 'Sigle * ',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
                
                
                ->add('activitePrincipale', TextareaType::class, array('label' => 'Activité Principale * ',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
				
				
                 
				
                ->add('save', SubmitType::class, array('label' => '+ Enregistrez et visualisez votre annonce',
                    'attr' => [
                        'class' => 'btn btn-primary btn-add',
                        'style' => 'float:right;margin-right:10%'
                    ]
                ))
                ->getForm();
         $form->handleRequest($request);
         
         if ($form->isSubmitted() && $form->isValid()) {
			// echo $_POST['typegerant'];
			// exit;
            if($_POST['typegerant']==1){
				$gerant = new Gerant();
				$gerant->setCivilite($_POST['civilite']);
				$gerant->setPrenom($_POST['prenom']);
				$gerant->setNom($_POST['nom']);
				$gerant->setAdresse($_POST['adresse']);
				$gerant->setCmplAdresse($_POST['cmpadresse']);
				$gerant->setCodePostale($_POST['codepostal']);
				$gerant->setVille($_POST['ville']);
				$gerant->setResidenceEtranger($_POST['residant']);
				$em->persist($gerant);
				$em->flush();
				$idtype = $gerant->getId();
			}
			if($_POST['typegerant']==2){
				$societe = new Societe();
				$societe->setNom($_POST['nomsociete']);
				$societe->setFormJuridique($_POST['formejuridique']);
				$societe->setCapitale($_POST['capital']);
				$societe->setNrcs($_POST['nrcs']);
				$societe->setRepresenatant($_POST['npresplegal']);
				$societe->setAdresse($_POST['adresse']);
				$societe->setCmplAdresse($_POST['complementadresse']);
				$societe->setCodePostale($_POST['codepostal']);
				$societe->setVille($_POST['ville']);
				$societe->setVilleGreffe($_POST['villegreffe']);
				$em->persist($societe);
				$em->flush();
				$idtype = $societe->getId();
			}
			
			//Partie Annonce
			$res = $form->getData();
			$res->SetGerant($idtype);
			$res->SetTypegerant($_POST['typegerant']);
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($res);
            $em->flush();
            return $this->redirectToRoute('add_annonce_commerciale', array('add' => '1'));
        }
         
         
         
         
        return $this->render('@Backoffice/Default/annonce_commerciale.html.twig', array(
                    'form' => $form->createView(),
        ));
        
        
        
    }
}
