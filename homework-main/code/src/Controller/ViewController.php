<?php

namespace App\Controller;

//use Symfony\Component\Form\FormTypeGuesserChain;

use Symfony\Component\Filesystem\Filesystem;
use App\Entity\Article;

use App\Form\ArticleFormType;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    private $formFactory;
    private $em;
    private $filesystem;

    public function __construct(FormFactoryInterface $formFactory, EntityManagerInterface $em,Filesystem $filesystem)
    {
        $this->em = $em;
        $this->formFactory = $formFactory;
        $this->filesystem = $filesystem;
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

    

    #[Route('/article/{id}', name: 'article_view')]
    public function view(Article $article): Response
    {
        $xMinutes = $this->calculateXMinutes($article);
        
        return $this->render('pages/view.html.twig', [
            'article' => $article,
            'xMinutes' => $xMinutes,
            
        ]);
    }
    #[Route('/article/edit/{id}', name: 'article_edit')]
    public function edit(Article $article, Request $request): Response
    {
        //$article = new Article();

        //$form = $this->formFactory->create(ArticleFormType::class, $article);
        $form =$this->createForm(ArticleFormType::class, $article);

        $form->handleRequest($request);
        $imagePath = $form->get('image')->getData();

        if($form->isSubmitted() && $form->isValid()){
            
            if($imagePath){
                if ($article->getImage() !== null){
                    if(file_exists(
                        $this->getParameter('kernel.project_dir') . $article->getImage()
                    )){
                        $this->getParameter('kernel.project_dir') . $article->getImage();

                        $newFileName = uniqid() . '.' . $imagePath->guessExtension();

                        try {
                            $imagePath->move(
                                $this->getParameter('kernel.project_dir') . '/public/uploads',
                                $newFileName
                            );
                        } catch (FileException $e){ 
                            return new Response($e->getMessage());
                        }

                        $article->setImage('/uploads/' . $newFileName);
                        $this->em->flush();

                        return $this->redirectToRoute('article_view', ['id' => $article->getId()]);
                    }
                }
            } else {
                $article->setTitle($form->get('title')->getData());
                $article->setText($form->get('text')->getData());

                $article->setUpdatedAt(new \DateTime());

                $this->em->flush();
                return $this->redirectToRoute('article_view', ['id' => $article->getId()]);
            }
        }

        
        return $this->render('pages/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }
}
