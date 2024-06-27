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
use Doctrine\ORM\Mapping\OrderBy;

#[Route('/meals')]
class MealsController extends AbstractController
{
    

    #[Route('/', name: 'app_meals_index', methods: ['GET'])]
    public function index(MealsRepository $mealsRepository, EntityManagerInterface $entityManager ): Response
    {       
               

        return $this->render('meals/index.html.twig', [
            'meals' => $mealsRepository->mealOrder(),
            'newStuff' => $mealsRepository->findBy(['approved' => 0])
        ]);
    }
    #[Route('/meals/{id}', name: 'app_meals_index_some', methods: ['GET', 'POST'])]
    public function some(Request $request, MealsRepository $mealsRepository, EntityManagerInterface $entityManager, $id): Response
    {
      
        $meal = $mealsRepository->find($id);
    
        if (!$meal) {
            throw $this->createNotFoundException('Meal not found');
        }
    
        if ($request->isMethod('POST')) {
            $meal->setApproved(!$meal->isApproved());
            $entityManager->flush();
            //Flash not works???
            $this->addFlash('success', '');
            $this->addFlash('success', 'Meal approval status updated successfully.');
    
            return $this->redirectToRoute('app_meals_index', ['id' => $id]);
        }
    
        return $this->render('meals/index.html.twig', [
            'meals' => $mealsRepository->findAll(),
            'newStuff' => $mealsRepository->findBy(['approved' => 0])
        ]);
    }
    

    #[Route('/new', name: 'app_meals_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MealsRepository $mealsRepository): Response
    {
       
       
        $meal = new Meals();
        $form = $this->createForm(MealsType::class, $meal);
        $meal->setApproved(true);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $meal->setFkUser($this->getUser());
            
            $imageFile = $form->get('imageFile')->getData(); // Get the uploaded image file
            
            if (!$imageFile) {
                $meal->setImage('placeholder.jpg'); // Set placeholder image if imageFile is not provided
            }
            $entityManager->persist($meal);
            $entityManager->flush();
           if( $this->isGranted("ROLE_ADMIN")) {
            return $this->redirectToRoute('app_meals_index', [], Response::HTTP_SEE_OTHER);
           }else{
            return $this->redirectToRoute('app_user_access', [], Response::HTTP_SEE_OTHER);
           }
        }
        
        return $this->render('meals/new.html.twig', [
            'meal' => $meal,
            'form' => $form,
            'newStuff' => $mealsRepository->findBy(['approved' => 0])
        ]
    );
    }

    // #[Route('/{id}', name: 'app_meals_show', methods: ['GET'])]
    // public function show(Meals $meal, MealsRepository $mealsRepository): Response
    // {
    //     return $this->render('meals/show.html.twig', [
    //         'meal' => $meal,
    //         'newStuff' => $mealsRepository->findBy(['approved' => 0])
    //     ]);
    // }

    #[Route('/{id}/edit', name: 'app_meals_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Meals $meal, EntityManagerInterface $entityManager, MealsRepository $mealsRepository): Response
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
            'newStuff' => $mealsRepository->findBy(['approved' => 0])
        ]);
    }

    #[Route('/{id}', name: 'app_meals_delete', methods: ['POST'])]
    public function delete(Request $request, Meals $meal, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$meal->getId(), $request->request->get('_token'))) {
            $entityManager->remove($meal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_meals_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
 * @Route('/meals')
 */


    #[Route('/filter/{status}', name: 'app_meals_filter', methods: ['GET'])]
    public function filter($status, MealsRepository $mealsRepository, EntityManagerInterface $entityManager): Response
    {
          if ($status === 'approved') {
         $queryBuilder = $mealsRepository->createQueryBuilder('m')
         ->where('m.approved = :approved')
         ->setParameter('approved', true)
         ->orderBy('m.mealName', 'ASC');
         // $meals = $mealsRepository->findBy(['approved' => true]);
         $meals = $queryBuilder->getQuery()->getResult();
     } elseif ($status === 'not_approved') {
         $queryBuilder = $mealsRepository->createQueryBuilder('m')
         ->where('m.approved = :approved')
         ->setParameter('approved', false)
         ->orderBy('m.mealName', 'ASC');
         // $meals = $mealsRepository->findBy(['approved' => true]);
         $meals = $queryBuilder->getQuery()->getResult();
         // $meals = $mealsRepository->findBy(['approved' => false]);
        } else {
            throw $this->createNotFoundException('Invalid filter status');
        }

        return $this->render('meals/index.html.twig', [
            'meals' => $meals,
            'newStuff' => $mealsRepository->findBy(['approved' => 0])
        ]);
    }

#[Route('/filterByMealType/{mealType}', name: 'app_meals_filter_by_meal_type', methods: ['GET'])]
public function filterByMealType($mealType, MealsRepository $mealsRepository ,EntityManagerInterface $entityManager): Response
{
    $queryBuilder = $mealsRepository->createQueryBuilder('m')
        ->where('m.mealType = :mealType')
        ->setParameter('mealType', $mealType)
        ->andWhere('m.approved = :approved')
        ->setParameter('approved', true)
        ->orderBy('m.mealName', 'ASC');
    $meals = $queryBuilder->getQuery()->getResult();
    return $this->render('user_access/index.html.twig', [
        'meals' => $meals,
        'newStuff' => $mealsRepository->findBy(['approved' => 0]),
        'currentFilter' => 'all', // Измените на значение, которое вам нужно
        'currentMealType' => $mealType,
    ]);
}
}