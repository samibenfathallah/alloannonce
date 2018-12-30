<?php

namespace BackofficeBundle\Controller;

use BackofficeBundle\Entity\Info;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AccueilController extends Controller {

    public function acceuilAction(Request $request) {

        if ($this->getUser() === Null)
            return $this->redirectToRoute('login_homepage');

        $info = new Info();

        $res = $this->getDoctrine()->getRepository(Info::class)->findOneById(1);
        $info->setBloc1($res->getBloc1());
        $info->setBloc2($res->getBloc2());
        $info->setBloc3($res->getBloc3());
        $info->setBloc4($res->getBloc4());
        $info->setTitrebloc2($res->getTitrebloc2());
        $info->setTbloc3($res->getTbloc3());
        $info->setTbloc4($res->getTbloc4());

        $form = $this->createFormBuilder($info)
                ->add('bloc1', TextareaType::class, array(
                    'label' => 'Notre Journal/Descriprion * ',
                    'required' => true,
                    'attr' => [
                       
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
                ->add('titrebloc2', TextType::class, array('label' => 'Notre Journal/Titre partie Jaune * ',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
                ->add('bloc2', TextareaType::class, array('label' => 'Notre Journal/Descriprion partie Jaune * ',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
                ->add('tbloc3', TextType::class, array('label' => 'Annonce légale Solidaire/Titre * ',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
                ->add('bloc3', TextareaType::class, array('label' => 'Annonce légale Solidaire/Description à gauche * ',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
                ->add('tbloc4', TextType::class, array('label' => 'Comment publier/Titre * ',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
                ->add('bloc4', TextareaType::class, array('label' => 'Comment publier/Description * ',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control col-md-7 col-xs-12'
                    ],
                    'label_attr' => [
                        'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                    ]
                ))
                ->add('save', SubmitType::class, array('label' => 'Valider',
                    'attr' => [
                        'class' => 'btn btn-success btn-add',
                        'style' => 'float:right;margin-right:10%'
                    ]
                ))
                ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $res = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $info = $this->getDoctrine()->getRepository(Info::class)->findOneById(1);
            $info->setBloc1($res->getBloc1());
            $info->setBloc2($res->getBloc2());
            $info->setBloc3($res->getBloc3());
            $info->setBloc4($res->getBloc4());
            $info->setTitrebloc2($res->getTitrebloc2());
            $info->setTbloc3($res->getTbloc3());
            $info->setTbloc4($res->getTbloc4());

            $em->persist($info);
            $em->flush();
            return $this->redirectToRoute('edit_accueil', array('modif' => '1'));
        }


        return $this->render('@Backoffice/Default/accueil.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}
