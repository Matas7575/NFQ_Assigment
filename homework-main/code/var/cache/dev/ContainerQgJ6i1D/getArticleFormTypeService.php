<?php

namespace ContainerQgJ6i1D;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticleFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ArticleFormType' shared autowired service.
     *
     * @return \App\Form\ArticleFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ArticleFormType.php';

        return $container->privates['App\\Form\\ArticleFormType'] = new \App\Form\ArticleFormType();
    }
}
