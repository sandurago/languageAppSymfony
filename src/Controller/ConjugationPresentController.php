<?php
// @CrossOrigin(origins = "http://localhost:4200")

namespace App\Controller;

use App\Entity\ConjugationPresent;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ConjugationPresentRepository;

class ConjugationPresentController extends AbstractController
{
    #[Route('/verbs', name: 'verbs')]
    // here will be the function that reads verbs from database
    // then sends it in a response
    // thats a big simple image for now.

    // fetching objects from database (entityManager and getRepository)
    public function getVerbs(EntityManagerInterface $entityManager): Response {
        /** @var ConjugationPresentRepository $repository */
        // using getRepository to get objects from database (list of verbs)
        $repository = $entityManager->getRepository(ConjugationPresent::class);
        // making a query then converting to array
        $query = $repository->createQueryBuilder('verb')->getQuery();
        $array = $query->getArrayResult();

        // shapes json response
        $func = function ($verb) {
            return [
                'id' => $verb['id'],
                'name' => $verb['name'],
                'translation' => $verb['translation'],
                'example' => $verb['example'],
                'conjugation' => [
                    'je' => $verb['je'],
                    'tu' => $verb['tu'],
                    'il/elle' => $verb['ilelle'],
                    'nous' => $verb['nous'],
                    'vous' => $verb['vous'],
                    'ils/elles' => $verb['ilselles'],
                ]
            ];
        };

        $json = json_encode(array_map($func, $array));
        return new Response($json, 200, [
            'Content-Type' => 'application/json',
            'Access-Control-Allow-Origin' => '*'
        ]);
        //return new Response('Check out this great verb: ' . $verb->getExample());
    }
}
