<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class BackOfficeController extends AbstractController
{
    /**
     * @Route("/back-office", name="back_office")
     */
    public function index()
    {
        // Render the back office template
        return $this->render('back_office.html.twig');
    }

    /**
     * @Route("/back-office/users/{id}/edit", name="edit_user")
     */
    public function editUser($id)
    {
        // Load the user with the given ID
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Render the edit user template
        return $this->render('edit_user.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/back-office/users/{id}/delete", name="delete_user")
     */
    public function deleteUser($id)
    {
        // Load the user with the given ID
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        // Remove the user from the database
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();

        // Redirect to the user list
        return new RedirectResponse($this->generateUrl('back_office'));
    }
}