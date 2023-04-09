<?php

use App\Controller\ViewController;
use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Filesystem\Filesystem;

class ViewControllerTest extends TestCase
{
    private $formFactory;
    private $em;
    private $filesystem;

    protected function setUp(): void
    {
        $this->formFactory = $this->createMock(FormFactoryInterface::class);
        $this->em = $this->createMock(EntityManagerInterface::class);
        $this->filesystem = $this->createMock(Filesystem::class);
    }

    public function testCalculateXMinutes(): void
    {
        $article = new Article();
        $article->setText('Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

        $viewController = new ViewController($this->formFactory, $this->em, $this->filesystem);
        $xMinutes = $viewController->calculateXMinutes($article);

        $this->assertEquals(1, $xMinutes);
    }
}


