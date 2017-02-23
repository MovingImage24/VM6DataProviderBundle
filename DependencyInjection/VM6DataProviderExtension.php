<?php

namespace MovingImage\Bundle\DataProvider\VideoManager6\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class VM6DataProviderExtension
 * @package MovingImage\Bundle\DataProvider\VideoManagerPro\DependencyInjection
 *
 * @author Robert Szeker <robert.szeker@movingimage.com>
 */
class VM6DataProviderExtension extends Extension
{
    /**
     * @param array $config
     * @param ContainerBuilder $containerBuilder
     */
    public function load(array $config, ContainerBuilder $containerBuilder)
    {
        $loader = new YamlFileLoader(
            $containerBuilder,
            new FileLocator(__DIR__.'/../Resources/config')
        );

        $loader->load('services.yml');
    }

}