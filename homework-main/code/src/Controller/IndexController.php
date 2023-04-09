<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

    #[Route('/', name: 'home')]
    public function list(ArticleRepository $articleRepository): Response
{
    $articleWithXMinutes = [];
    foreach ($articleRepository->findAll() as $article) {
        $articleWithXMinutes[] = [
            'article' => $article,
            'xMinutes' => $this->calculateXMinutes($article)
        ];
    }

    return $this->render('pages/index.html.twig', [
        'articleWithXMinutes' => $articleWithXMinutes,
    ]);
}

    public function calculateXMinutes(Article $article): int
    {
        $text = $article->getText();

        // Split the text into words
        $words = str_word_count($text, 1);

        // Filter out words with less than 3 letters
        $words = array_filter($words, function ($word) {
            return strlen($word) > 3;
        });

        // Divide the number of words by 200 and round up to the nearest integer
        $xMinutes = ceil(count($words) / 200);

        return $xMinutes;
    }
}
