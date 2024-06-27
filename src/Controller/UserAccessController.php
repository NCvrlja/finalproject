<?php

namespace App\Controller;

use App\Entity\Meals;
use App\Form\MealsType;
use App\Repository\MealsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class UserAccessController extends AbstractController
{
    #[Route('/', name: 'app_user_access')]
    public function index(MealsRepository $mealsRepository): Response
    {
        $user = $this->getUser();
        $queryBuilder = $mealsRepository->createQueryBuilder('m')
        ->where('m.approved = :approved')
        ->setParameter('approved', true)
        ->orderBy('m.mealName', 'ASC');
        // $meals = $mealsRepository->findBy(['approved' => true]);
        $approvedMeals = $queryBuilder->getQuery()->getResult();
       
        
        return $this->render('user_access/index.html.twig', [
            'meals' => $approvedMeals,
            "user" => $user,
        ]);
    }

    #[Route('/new', name: 'app_user_access_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $meal = new Meals();
        $form = $this->createForm(MealsType::class, $meal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $meal->setFkUser($this->getUser());
            $entityManager->persist($meal);
            $entityManager->flush();

            if( $this->isGranted("ROLE_ADMIN")) {
                return $this->redirectToRoute('app_meals_index', [], Response::HTTP_SEE_OTHER);
               }else{
                return $this->redirectToRoute('app_user_access', [], Response::HTTP_SEE_OTHER);
               }
        }

        return $this->render('user_access/new.html.twig', [
            'meal' => $meal,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_meals_show', methods: ['GET'])]
    public function show(Meals $meal): Response
    {
        return $this->render('user_access/show.html.twig', [
            'meal' => $meal,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_meals_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Meals $meal, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MealsType::class, $meal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            if( $this->isGranted("ROLE_ADMIN")) {
                return $this->redirectToRoute('app_meals_index', [], Response::HTTP_SEE_OTHER);
               }else{
                return $this->redirectToRoute('app_user_access', [], Response::HTTP_SEE_OTHER);
               }
            }

        return $this->render('meals/edit.html.twig', [
            'meal' => $meal,
            'form' => $form,
        ]);
    }

}

    

