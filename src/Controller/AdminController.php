<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/users', name: 'admin_users_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('admin/users_index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/users/{id}/toggle-role', name: 'admin_toggle_user_role', methods: ['POST'])]
    public function toggleUserRole(Request $request, User $user, UserRepository $userRepository): Response
    {
        if (!$this->isCsrfTokenValid('toggle-role'.$user->getId(), $request->request->get('_token'))) {
            return $this->redirectToRoute('admin_users_index');
        }

        $roles = $user->getRoles();
        if (in_array('ROLE_ADMIN', $roles)) {
            $roles = array_diff($roles, ['ROLE_ADMIN']);
        } else {
            $roles[] = 'ROLE_ADMIN';
        }
        $user->setRoles(array_values($roles));

        $userRepository->save($user, true);

        $this->addFlash('success', 'Le rôle de l\'utilisateur a été mis à jour.');

        return $this->redirectToRoute('admin_users_index');
    }
}




