<?php

namespace Kunstmaan\FormBundle\EventListener;

use Kunstmaan\AdminBundle\Event\ConfigureMenuChildrenEvent;

class ConfigureMenuChildrenListener
{

    /**
     * @param ConfigureMenuChildrenEvent $event
     */
    public function onMenuChildrenConfigure(ConfigureMenuChildrenEvent $event)
    {
        if ('Modules' == $event->getMenu()->getName()) {
            $submissionsMenu = $event->getMenu()->addChild($event->getFactory()->createItem('Form submissions', array('route' => 'KunstmaanFormBundle_formsubmissions')));
            $submissionsMenu->setAttribute('rel', 'Submissions');
        }
    }
}