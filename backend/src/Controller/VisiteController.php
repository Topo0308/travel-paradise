<?php

namespace App\Controller;
use App\Repository\VisiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class VisiteController
{
    /** @Route("/api/visites", methods={"GET"}) */
    public function list(VisiteRepository $repo) {
        return new JsonResponse($repo->findAll());
    }

    /** @Route("/api/visites/{id}/presence", methods={"POST"}) */
    public function cloturer(int $id, Request $req, EntityManagerInterface $em, VisiteRepository $repo) {
        // ...
        return new JsonResponse(['ok' => true]);
    }
}
