<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     * @return Response
     */
    public function homepage()
    {
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/questions/{slug}", name="app_questions_show")
     */
    public function show($slug)
    {

        $answers = [
            'Spraw by twoj kot się nie ruszał',
            'Naprawdę lubie twoje byty bardziej od kota',
            'Może spróbuj wypowiedziec to na odwrót?'
        ];



        return $this->render('question/show.html.twig', [
           'question' => ucwords(str_replace('-',' ', $slug)),
            'answers' => $answers,
        ]);

    }
}