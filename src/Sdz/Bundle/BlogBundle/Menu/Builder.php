<?php

namespace Sdz\Bundle\BlogBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'homepage'));
        $menu->addChild('Ajouter', array(
            'route' => 'sdzblog_ajouter',
            'routeParameters' => array('id' => 42)
        ));
        // ... add more children

        return $menu;
    }
}

