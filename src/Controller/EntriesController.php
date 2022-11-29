<?php

namespace App\Controller;

use App\Entity\Entries;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntriesController extends AbstractController
{
    #[Route('/entries', name: 'entries')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $entries = $doctrine->getRepository(Entries::class)->findAll();
        // dd($entries);
        return $this->render('entries/index.html.twig', [
            'entries' => $entries
        ]);
    }

    #[Route('/create', name: 'create')]
    public function createEntry(): Response
    {
        return $this->render('entries/create.html.twig');
    }

    #[Route('/update/{id}', name: 'update')]
    public function updateEntry($id): Response
    {
        return $this->render('entries/update.html.twig');
    }

    #[Route('/details/{id}', name: 'details')]
    public function detailsAction($id, ManagerRegistry $doctrine): Response
    {
        $entry = $doctrine->getRepository(Entries::class)->find($id);
        return $this->render('entries/details.html.twig', [
            "entry" => $entry
        ]);
    }

    #[Route('/delete/{id}', name: 'delete')]
    public function deleteEntry($id): Response
    {
        return $this->render('entries/delete.html.twig');
    }
}
