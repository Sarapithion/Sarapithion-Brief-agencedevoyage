<?php

namespace App\Controller\Api;

use App\Entity\AdvReservation;
use App\Repository\AdvReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/api/reservation', name: 'api_reservation_')]
class ReservationController extends AbstractController
{
    #[Route('s', name: 'index')]
    public function index(AdvReservationRepository $advReservationRepository): JsonResponse
    {
        $reservation = $advReservationRepository->findAll();
        return $this->json($reservation, context: ['groups' =>'api_reservation_index']);
    }

#[Route('/new', name:"new", methods:['POST'])]
public function new(SerializerInterface $serializer, ValidatorInterface $validator, EntityManagerInterface $em, Request $request): JsonResponse
{
$reservation = $serializer->deserialize($request->getContent(),AdvReservation::class, 'json', ['groups' => 'api_reservation_new'] );

$errors = $validator->validate($reservation);

if ($errors->count()) {
    $messages = [];
    foreach ($errors as $error) {
        $messages[] = $error->getMessage();
    }
    return $this->json($messages, Response::HTTP_UNPROCESSABLE_ENTITY);
} else {
    $em->persist($reservation);
    $em->flush();

    return $this->json('La réservation a bien été enregistrée', Response::HTTP_CREATED); 
}
}
}