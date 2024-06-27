<?php

namespace App\Controller;

use App\Entity\Planner;
use App\Form\PlannerType;
use App\Repository\PlannerRepository;
use App\Repository\UserRepository;
use App\Repository\MealsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/planner')]
class PlannerController extends AbstractController
{
    #[Route('/', name: 'app_planner_index', methods: ['GET', "POST"])]
    public function index(PlannerRepository $plannerRepository, UserRepository $userRepo, MealsRepository $mealsRepo): Response
    {
        $from= (new \DateTime("first day of this month"))->format("Y-m-d");
        $to = (new \DateTime("last day of this month"))->format("Y-m-d");
        // dd($from, $to);
        if ($_POST){
            $from = $_POST["from"];
            $to =$_POST["to"];
            
        }
        $planner = $plannerRepository->showPlannerForUser($this->getUser()->getId(), "$from", "$to");
      
        
        return $this->render('planner/index.html.twig', [
            'planners' => $planner,
            'users' => $userRepo->findAll(),
            'meals' => $mealsRepo->findAll(),
            'now' => new \DateTime(),
        ]);
    }

    #[Route('/new/{id}', name: 'app_planner_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, $id, MealsRepository $mealsRepository): Response
    {
        $planner = new Planner();
        $form = $this->createForm(PlannerType::class, $planner);
        $form->handleRequest($request);
        $userId = $this->getUser();
        $meal = $mealsRepository->find($id);

        if ($form->isSubmitted() && $form->isValid()) {
            $planner->setFkUser($userId);
            $planner->setFkMeal($meal);
            $entityManager->persist($planner);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_access', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('planner/new.html.twig', [
            'planner' => $planner,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_planner_show', methods: ['GET'])]
    public function show(Planner $planner): Response
    {
        return $this->render('planner/show.html.twig', [
            'planner' => $planner,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_planner_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Planner $planner, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PlannerType::class, $planner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_planner_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('planner/edit.html.twig', [
            'planner' => $planner,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_planner_delete', methods: ['POST'])]
    public function delete(Request $request, Planner $planner, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$planner->getId(), $request->request->get('_token'))) {
            $entityManager->remove($planner);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_planner_index', [], Response::HTTP_SEE_OTHER);
    }
}
