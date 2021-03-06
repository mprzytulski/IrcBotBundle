<?php

namespace Whisnet\IrcBotBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class WhisnetIrcBotExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $container->setParameter('whisnet_irc_bot.user', $config['user']);
        $container->setParameter('whisnet_irc_bot.server', array($config['host'], $config['port']));
        $container->setParameter('whisnet_irc_bot.channels', $config['channels']);
        $container->setParameter('whisnet_irc_bot.bot_command_prefix', $config['command_prefix']);
    }
}
