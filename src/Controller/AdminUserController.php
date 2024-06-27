<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;




class AdminUserController extends AbstractController
{
    #[Route('/admin/user', name: 'app_admin_user')]
    public function index(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();

        return $this->render('user/user_list.html.twig', [
            'users' => $users,
        ]);
    }

   
    /**
 * @Route("/admin/users/{id}/ban", name="admin_user_ban")
 */
public function banUser(User $user, EntityManagerInterface $entityManager): Response
{
    if ($user->isStatus() === true || $user->isStatus() === null) { // checking user status
        $user->setStatus(false); // status ban = false
        $entityManager->flush(); // save in DB

        $this->addFlash('success', 'user is banned.'); // flash which never works
    } else {
        $this->addFlash('error', 'user already banned.'); // one more flash which never works
    }

    return $this->redirectToRoute('app_admin_user'); // redirect to user list
}

/**
 * @Route("/admin/users/{id}/unban", name="admin_user_unban")
 */
public function unbanUser(User $user, EntityManagerInterface $entityManager): Response
{
    if ($user->isStatus() === false) { // checking user status
        $user->setStatus(true); // status ban = true
        $entityManager->flush(); // save in DB

        $this->addFlash('success', 'Пользователь разблокирован.'); // flash
    } else {
        $this->addFlash('error', 'Пользователь уже разблокирован.'); // flash
    }

    return $this->redirectToRoute('app_admin_user'); // redirect to user list
}

}
