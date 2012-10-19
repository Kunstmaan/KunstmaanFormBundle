<?php

namespace Kunstmaan\FormBundle\EventListener;

use Kunstmaan\AdminBundle\Event\ConfigureMenuEvent;

class ConfigureMenuListener
{

    public function __construct()
    {

    }

    public function onMenuConfigure(ConfigureMenuEvent $event)
    {
        $menu = $event->getMenu();
        $factory = $event->getFactory();

        $menu->addChild($factory->createItem('Form submissions', array('route' => 'KunstmaanFormBundle_formsubmissions')));
    }
}