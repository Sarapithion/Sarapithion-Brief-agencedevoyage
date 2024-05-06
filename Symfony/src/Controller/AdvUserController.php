<?php

namespace App\Controller;

use App\Entity\AdvUser;
use App\Form\AdvUserType;
use App\Repository\AdvUserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/adv/user')]
class AdvUserController extends AbstractController
{
    #[Route('/', name: 'app_adv_user_index', methods: ['GET'])]
    public function index(AdvUserRepository $advUserRepository): Response
    {
        return $this->render('adv_user/index.html.twig', [
            'adv_users' => $advUserRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_adv_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $advUser = new AdvUser();
        $form = $this->createForm(AdvUserType::class, $advUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($advUser);
            $entityManager->flush();

            return $this->redirectToRoute('app_adv_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('adv_user/new.html.twig', [
            'adv_user' => $advUser,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_adv_user_show', methods: ['GET'])]
    public function show(AdvUser $advUser): Response
    {
        return $this->render('adv_user/show.html.twig', [
            'adv_user' => $advUser,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_adv_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, AdvUser $advUser, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AdvUserType::class, $advUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_adv_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('adv_user/edit.html.twig', [
            'adv_user' => $advUser,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_adv_user_delete', methods: ['POST'])]
    public function delete(Request $request, AdvUser $advUser, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$advUser->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($advUser);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_adv_user_index', [], Response::HTTP_SEE_OTHER);
    }
}
