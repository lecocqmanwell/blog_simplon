<?php

namespace SR\BlogBundle\Controller;

use SR\BlogBundle\Entity\Article;
use SR\BlogBundle\Entity\Comment;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\VarDumper\VarDumper;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class ArticleController extends Controller
{
    public function indexAction()
    {

        $listArticles = $this->getDoctrine()
            ->getManager()
            ->getRepository('SRBlogBundle:Article' )
            ->findAll();

//        $auteur = $this->getDoctrine()
//            ->getManager()
//            ->getRepository('SRBlogBundle:User')
//            ->find($username);

//
//        VarDumper::dump($auteur);
//        die;


        return $this->render('SRBlogBundle:Article:homepage.html.twig',array('listArticles' => $listArticles));
    }

    public function viewAction($id, Request $request)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('SRBlogBundle:Article');
        $article = $repository->find($id);
        
        if (null === $article) {
            throw new NotFoundHttpException("L'article d'id ".$id." n'existe pas.");
        }
        $comment = new Comment();

        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $comment);

        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
            ->add('content', TextareaType::class)
            ->add('save', SubmitType::class);


        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {
            // On enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $comment->setArticle($article);
            $comment->setUser($this->getUser());
            $em->persist($comment);
            $em->flush();

        }
        
        return $this->render('SRBlogBundle:Article:view.html.twig', array(
            'article' => $article,
            'form' => $form->createView()));
    }






    /**
     * @Security("has_role('ROLE_USER')")
     */

    public function addAction(Request $request )
    {


            // On crée un objet Article
            $article = new Article();

            // On crée le FormBuilder grâce au service form factory
            $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $article);

            // On ajoute les champs de l'entité que l'on veut à notre formulaire
            $formBuilder
                ->add('date', DateType::class)
                ->add('title', TextType::class)
                ->add('content', TextareaType::class)
                ->add('published', CheckboxType::class, array('required' => false))
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
                    // On enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $article->setUser($this->getUser());
                    $article->setDate(new \DateTime());
                    $em->persist($article);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('notice', 'Article bien enregistrée.');
                    // On redirige vers la page de visualisation de l'annonce nouvellement créée
                    return $this->redirectToRoute('sr_article_view', array('id' => $article->getId()));
                }
            }


        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('SRBlogBundle:Article:add.html.twig', array(
            'form' => $form->createView()));
    }



    /**
     * @Security("has_role('ROLE_USER')")
     */

    public function editAction(Article $article, Request $request)
    {


        if ($this->getUser()->getId() == $article->getUser()->getId() ||
            $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')
        ) {


            $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $article);
            $formBuilder
                ->add('date', DateType::class)
                ->add('title', TextType::class)
                ->add('content', TextareaType::class)
                ->add('published', CheckboxType::class, array('required' => false))
                ->add('save', SubmitType::class);

            $form = $formBuilder->getForm();

            if ($request->isMethod('POST')) {

                $form->handleRequest($request);
                // On vérifie que les valeurs entrées sont correctes

                if ($form->isValid()) {
                    // On enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->flush();
                    $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');
                }
                return $this->redirectToRoute('sr_article_view', array(
                    'id' => $article->getId()));

            }

            return $this->render('SRBlogBundle:Article:edit.html.twig', array(
                'form' => $form->createView(),
                'utilisateur'=> $this->getUser()->getId(),
                'auteur'=> $article->getUser()->getId()));

        }
        return $this->redirectToRoute('sr_article_homepage');
    }


    /**
     * @Security("has_role('ROLE_USER')")
     */

    public function deleteAction(Request $request, Article $article)
    {
        $em = $this->getDoctrine()->getManager();
        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->get('form.factory')->create();
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($article);
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");
            return $this->redirectToRoute('sr_article_homepage');
        }

        return $this->render('SRBlogBundle:Article:delete.html.twig', array(
            'article' => $article,
            'form'   => $form->createView(),
        ));
    }


}

