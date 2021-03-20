<?php


namespace FSchmid\SkeletonBundle\Tests;


use FSchmid\SkeletonBundle\FSchmidSkeletonBundle;
use Generator;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouteCollectionBuilder;

class TestKernel extends Kernel
{
    use MicroKernelTrait;

    /**
     * @return Generator|iterable|BundleInterface[]
     */
    public function registerBundles(): Generator
    {
        $bundles = [
            FrameworkBundle::class,
            FSchmidSkeletonBundle::class
        ];

        foreach ($bundles as $bundle) {
            yield new $bundle();
        }
    }

    public function getCacheDir(): string
    {
        return __DIR__.'/cache/'.spl_object_hash($this);
    }

    protected function configureContainer(ContainerBuilder $container, LoaderInterface $loader): void
    {
        // TODO: Implement configureRoutes() method.
    }

    protected function configureRoutes(RouteCollectionBuilder $routes): void
    {
        // TODO: Implement configureRoutes() method.
    }
}