<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Tests\SpecialResponse;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $post = new Post();
        $form = $this->createFormBuilder($post)
            ->add('body', TextType::class)
            ->add('submit', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();
        if ($form->isValid()) {
            $entityManager->persist($post);
            $entityManager->flush();
        }

        return $this->render(
            '@App/default.html.twig',
            [
                'form' => $form->createView(), 
                'posts' => $this->getPostsAction(),
            ]
        );
    }

    public function getPostsAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $posts = $entityManager->getRepository('AppBundle:Post')->findAll();

        return $posts;
    }
}
