<?php


namespace Plugin\KansaiUg\EventListener;


use Eccube\Event\TemplateEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class NoshiEvent implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return [
            '@admin/Order/edit.twig' => 'onAdminOrderEditTwig',
        ];
    }

    public function onAdminOrderEditTwig(TemplateEvent $event)
    {
        $event->addSnippet('@KansaiUg/admin/order_edit.twig');
    }
}
