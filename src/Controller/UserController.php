<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use App\Repository\UserRepository;

class UserController extends AbstractController
{
    // have to specify the method. created array of allowed methods.
    #[Route('/create', name: 'create_user', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $entity_manager): JsonResponse
    {
        // get the content of the request. getContent() will give a string;
        $reqArr = $request->toArray();
        // var_dump($reqArr);

        /** @var UserRepository $userRepository */
        $userRepository = $entity_manager->getRepository(User::class);
        $userNickname = $userRepository->findOneBy(['nickname' => $reqArr['nickname']]);

        if ($reqArr['nickname'] == '' || $reqArr['name'] == '' || $reqArr['password'] == '') {
            $response = ['message' => 'Please fill in all the fields.'];
            $status = 411;
        } else {
            if ($userNickname) {
                // var_dump($userName);
                $response = ['message' => 'User already exists.'];
                $status = 403;
            } else {
                $user = new User();
                $user->setNickname($reqArr['nickname']);
                $user->setName($reqArr['name']);
                $user->setPassword($reqArr['password']);

                // Push and save to database
                $entity_manager->persist($user);
                $entity_manager->flush();

                $response = ['message' => 'User created.', 'id' => $user->getId()];
                $status = 201;
            }
        }

        return $this->json($response, $status);
    }

    #[Route('/login', name: 'login_user', methods: ['POST'])]
    public function login(Request $request, EntityManagerInterface $entity_manager): JsonResponse {
        $reqArr = $request->toArray();

        // Gets repository of the user to use methods to find in database
        $userRepository = $entity_manager->getRepository(User::class);
        // Find user by nickname. If not found, returns NULL
        $user = $userRepository->findOneBy(['nickname' => $reqArr['nickname']]);

        if (!$user) {
            $response = ['message' => 'Cannot login. User not found.'];
            $status = 404;
        } else {
            $response = ['message' => 'OK', 'id' => $user->getId()];
            $status = 200;
        }
        return new JsonResponse($response, $status);
    }
}
