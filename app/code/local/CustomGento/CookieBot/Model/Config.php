<?php

declare(strict_types=1);

class CustomGento_CookieBot_Model_Config
{
    private const XML_PATH_COOKIEBOT_ENABLED = 'web/cookiebot/enabled';
    private const XML_PATH_COOKIEBOT_ID = 'web/cookiebot/id';

    public function isEnabled(): bool
    {
        return (bool)Mage::getStoreConfig(self::XML_PATH_COOKIEBOT_ENABLED, Mage::app()->getStore()->getStoreId());
    }

    public function getCookiebotId(): string
    {
        return Mage::getStoreConfig(self::XML_PATH_COOKIEBOT_ID, Mage::app()->getStore()->getStoreId());
    }
}
