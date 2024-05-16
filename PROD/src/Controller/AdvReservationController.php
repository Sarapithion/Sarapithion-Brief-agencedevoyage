<?php

namespace App\Controller;

use App\Entity\AdvReservation;
use App\Form\AdvReservationType;
use App\Repository\AdvReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/adv/reservation')]
class AdvReservationController extends AbstractController
{
    #[Route('/adv_reservation_index', name: 'app_adv_reservation_index', methods: ['GET'])]
    public function index(AdvReservationRepository $advReservationRepository): Response
    {
        return $this->render('adv_reservation/index.html.twig', [
            'adv_reservations' => $advReservationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_adv_reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $advReservation = new AdvReservation();
        $form = $this->createForm(AdvReservationType::class, $advReservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($advReservation);
            $entityManager->flush();

            return $this->redirectToRoute('app_adv_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('adv_reservation/new.html.twig', [
            'adv_reservation' => $advReservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_adv_reservation_show', methods: ['GET'])]
    public function show(AdvReservation $advReservation): Response
    {
        return $this->render('adv_reservation/show.html.twig', [
            'adv_reservation' => $advReservation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_adv_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, AdvReservation $advReservation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AdvReservationType::class, $advReservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_adv_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('adv_reservation/edit.html.twig', [
            'adv_reservation' => $advReservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_adv_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, AdvReservation $advReservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$advReservation->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($advReservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_adv_reservation_index', [], Response::HTTP_SEE_OTHER);
    }
}
