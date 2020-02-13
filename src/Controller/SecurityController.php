<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class SecurityController extends EasyAdminController
{

    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder) {
        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($user, $user->getPassword());

            $user->setPassword($hash);

            $manager->persist($user);
            $manager->flush();  

            return $this->redirectToRoute('security_login');
        }

        return $this->render('security/registration.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/connexion", name="security_login")
     */
    public function login() {
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/deconnexion", name="security_logout")
     */
    public function logout() {}

     /**
     * @Route("/moncompte", name="moncompte")
     */

    public function showUser(UserInterface $user){
    //   var_dump($user);
        $user->getUsername();
        return $this->render('user/mon_compte.html.twig',[
            'user' => $user,
        ]);
    }

    /**
     * @Route("/update", name="update")
     */
    public function removeUser(Request $request, UserInterface $user){
        
        $users = $this->getDoctrine()
        ->getRepository(User::class);
        $username = $request->get('username');

        $uzer = $users->findBy(array('username' => $user->getUsername()));

        $uzer->setUsername($username);
        $users->updateUser($user);

        
        $user->getUsername();
        return $this->render('user/mon_compte.html.twig',[
            'user' => $user,
        ]);

    }


}
