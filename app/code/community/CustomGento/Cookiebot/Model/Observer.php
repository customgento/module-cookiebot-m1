<?php

declare(strict_types=1);

class CustomGento_Cookiebot_Model_Observer
{
    public function addCookiebotScript($event): void
    {
        if (!$event->getData('block') instanceof Mage_Page_Block_Html_Head
            || !Mage::getModel('customgento_cookiebot/config')->isEnabled()) {
            return;
        }
        $cookiebotScript = Mage::getModel('customgento_cookiebot/scriptGenerator')->generate();
        $transportObject = $event->getData('transport');
        if ($cookiebotScript !== '' && $transportObject && $transportObject->getData('html')) {
            $transportObject->setData('html', $cookiebotScript . PHP_EOL . $transportObject->getData('html'));
        }
    }
}
