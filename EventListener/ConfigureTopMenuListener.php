<?php

namespace Kunstmaan\FormBundle\EventListener;

use Knp\Menu\ItemInterface;
use Doctrine\ORM\EntityManager;
use Kunstmaan\AdminBundle\Event\ConfigureTopMenuEvent;

class ConfigureTopMenuListener
{

    public function __construct()
    {

    }

    public function onTopMenuConfigure(ConfigureTopMenuEvent $event)
    {
        $menu = $event->getMenu();
        $menu->addChild('Form submissions', array('route' => 'KunstmaanFormBundle_formsubmissions'));
    }
}