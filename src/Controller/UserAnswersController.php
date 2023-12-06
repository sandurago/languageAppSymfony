<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\UserAnswersPresent;
use App\Entity\ConjugationPresent;
use App\Entity\User;
use App\Repository\UserAnswersPresentRepository;
use App\Repository\ConjugationPresentRepsitory;
use App\Repository\UserRepository;

class UserAnswersController extends AbstractController
{
    #[Route('/user/answers', name: 'app_user_answers', methods: ["POST"])]
    public function saveAnswers(Request $request, EntityManagerInterface $entity_manager): JsonResponse
    {
        $data = $request->toArray();
        $infinitive = $data["verb"];
        $conjugationRepository = $entity_manager->getRepository(ConjugationPresent::class);
        $verb = $conjugationRepository->findOneBy(['name' => $infinitive]);

        $userId = $data["user"];
        $userRepository = $entity_manager->getRepository(User::class);
        $user = $userRepository->find($userId);

        $answer = new UserAnswersPresent();
        $answer->setJe($data['je']);
        $answer->setTu($data['tu']);
        $answer->setIlelle($data['il/elle']);
        $answer->setNous($data['nous']);
        $answer->setVous($data['vous']);
        $answer->setIlselles($data['ils/elles']);
        $answer->setUserId($user);
        $answer->setVerbId($verb);

        if ($answer) {
            $entity_manager->persist($answer);
            $entity_manager->flush();
            $response = ['message' => 'Progress saved!'];
            $status = 200;
        } else {
            $response = ['message' => 'Error. Try again.'];
            $status = 404;
        }
        return new JsonResponse($response, $status);
    }
}
