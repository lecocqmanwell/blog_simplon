<?php

namespace SR\BlogBundle\Controller;

use SR\BlogBundle\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\VarDumper\VarDumper;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class UserController extends Controller
{

//
//    /**
//     * @Security("has_role('ROLE_USER')")
//     */
    public function indexAction()
    {
          $listUsers = $this->getDoctrine()
            ->getManager()
            ->getRepository('SRBlogBundle:User' )
            ->findAll();


        return $this->render('SRBlogBundle:User:homepage.html.twig',array('listUsers' => $listUsers));
    }

    public function viewAction($id)
    {

        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('SRBlogBundle:User');

        $user = $repository->findBy(array('id'=>$id));


        if ([] === $user) {
            throw new NotFoundHttpException("Vous n'étes pas connecté");
        }

;        return $this->render('SRBlogBundle:User:view.html.twig',array('user'=>$user));
    }



    public function addAction(Request $request )
    {
        // On crée un objet User
        $user = new User();

        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $user);

        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
            ->add('username', TextType::class)
            ->add('name', TextType::class)
            ->add('firstname', TextType::class)
            ->add('mail',EmailType::class)
            ->add('password', PasswordType::class)
//            ->add('avatar', TextType::class)
            ->add('save', SubmitType::class);

        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

        // Si la requête est en POST
        if ($request->isMethod('POST')) {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
            $form->handleRequest($request);
            // On vérifie que les valeurs entrées sont correctes
            if ($form->isValid()) {

                $password = $this->get('security.password_encoder')
                     ->encodePassword($user, $user->getPassword());
                $user->setPassword($password);




                // On enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'User bien enregistré.');
                // On redirige vers la page de visualisation du user nouvellement crée
                return $this->redirectToRoute('sr_user_view', array('id' => $user->getId()));
            }
        }

        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('SRBlogBundle:User:add.html.twig', array(
            'form' => $form->createView()));
    }


    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function editAction(User $user, Request $request)
    {
        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
        {

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $user);
        $formBuilder
            ->add('name', TextType::class)
            ->add('username', TextType::class)
            ->add('firstname', TextType::class)
            ->add('mail', TextType::class)
            ->add('password', PasswordType::class)
            ->add('avatar', TextType::class)
            ->add('save', SubmitType::class);

        $form = $formBuilder->getForm();

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);
            // On vérifie que les valeurs entrées sont correctes

                 if ($form->isValid()) {

                        $password = $this->get('security.password_encoder')
                            ->encodePassword($user, $user->getPassword());
                        $user->setPassword($password);
                        // On enregistre notre objet $advert dans la base de données, par exemple
                        $em = $this->getDoctrine()->getManager();
                        $em->flush();
                        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');


                 }

            return $this->redirectToRoute('sr_user_view', array(
                'id' => $user->getId()));


            }

        return $this->render('SRBlogBundle:User:edit.html.twig', array(
            'form' => $form->createView()));

        }
        return $this->redirectToRoute('sr_user_homepage');

    }

//    /**
//     * @Security("has_role('ROLE_USER')")
//     */
    public function deleteAction(Request $request, User $user)
    {
        $em = $this->getDoctrine()->getManager();
        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->get('form.factory')->create();
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($user);
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', "L'utilisateur a bien été supprimée.");
            return $this->redirectToRoute('sr_article_homepage');
        }

        return $this->render('SRBlogBundle:User:delete.html.twig', array(
            'user' => $user,
            'form'   => $form->createView(),
        ));
    }


}

