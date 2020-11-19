<?php

namespace App\Controller;

use App\Entity\Magacin;
use App\Form\MagacinType;
use App\Repository\MagacinRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MagacinController extends AbstractController
{
    /**
     * @Route("/", name="magacin_index", methods={"GET"})
     */
    public function index(MagacinRepository $magacinRepository): Response
    {
        return $this->render('magacin/index.html.twig', [
            'magacins' => $magacinRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="magacin_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $magacin = new Magacin();
        $form = $this->createForm(MagacinType::class, $magacin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($magacin);
            $entityManager->flush();

            return $this->redirectToRoute('magacin_index');
        }

        return $this->render('magacin/new.html.twig', [
            'magacin' => $magacin,
            'form' => $form->createView(),
        ]);
    }
     /**
     * @Route("/racun", name="blog_index")
     */
    public function racun(Request $request): Response
    {   $magacin = new Magacin();
        $form = $this->createForm(MagacinType::class, $magacin);
        $form->handleRequest($request);
        return $this->render('magacin/racun.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/{id}", name="magacin_show", methods={"GET"})
     */
    public function show(Magacin $magacin): Response
    {
        return $this->render('magacin/show.html.twig', [
            'magacin' => $magacin,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="magacin_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Magacin $magacin): Response
    {
        $form = $this->createForm(MagacinType::class, $magacin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('magacin_index');
        }

        return $this->render('magacin/edit.html.twig', [
            'magacin' => $magacin,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="magacin_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Magacin $magacin): Response
    {
        if ($this->isCsrfTokenValid('delete'.$magacin->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($magacin);
            $entityManager->flush();
        }

        return $this->redirectToRoute('magacin_index');
    }
   
     

}
