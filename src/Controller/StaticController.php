<?php

namespace App\Controller;

use App\Entity\Meals;
use App\Repository\MealsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticController extends AbstractController
{
    #[Route('/', name: 'app_static')]
    public function index(MealsRepository $mealsRepository, EntityManagerInterface $entityManager ): Response
    {

        $approvedMeals = $mealsRepository->findBy(['approved' => true]);
        $queryBuilder = $mealsRepository->createQueryBuilder('m')
        ->where('m.approved = :approved')
        ->setParameter('approved', true)
        ->orderBy('m.mealName', 'ASC');
        // $meals = $mealsRepository->findBy(['approved' => true]);
        $approvedMeals = $queryBuilder->getQuery()->getResult();

        return $this->render('static/index.html.twig', [
             'meals' => $approvedMeals,
        ]);
    }

    #[Route('/static/{id}', name: 'app_static_show')]
    public function show(Meals $meal): Response
    {

        return $this->render('user_access/show.html.twig', [
            'meal' => $meal,
        ]);
    }

    #[Route('/filterByMealType/{mealType}', name: 'app_static_filter_by_meal_type', methods: ['GET'])]
public function filterByMealType($mealType, MealsRepository $mealsRepository ,EntityManagerInterface $entityManager): Response
{
    $queryBuilder = $mealsRepository->createQueryBuilder('m')
        ->where('m.mealType = :mealType')
        ->setParameter('mealType', $mealType)
        ->andWhere('m.approved = :approved')
        ->setParameter('approved', true)
        ->orderBy('m.mealName', 'ASC');
    $meals = $queryBuilder->getQuery()->getResult();
    return $this->render('static/index.html.twig', [
        'meals' => $meals,
        'newStuff' => $mealsRepository->findBy(['approved' => 0]),
        'currentFilter' => 'all', // Измените на значение, которое вам нужно
        'currentMealType' => $mealType,
    ]);
}
}
