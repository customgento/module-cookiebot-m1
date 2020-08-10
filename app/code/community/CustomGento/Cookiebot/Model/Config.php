<?php

declare(strict_types=1);

class CustomGento_Cookiebot_Model_Config
{
    private const XML_PATH_COOKIEBOT_ENABLED = 'web/cookiebot/enabled';
    private const XML_PATH_COOKIEBOT_ID = 'web/cookiebot/id';

    public function isEnabled(): bool
    {
        return (bool)Mage::getStoreConfig(self::XML_PATH_COOKIEBOT_ENABLED);
    }

    public function getCookiebotId(): string
    {
        return Mage::getStoreConfig(self::XML_PATH_COOKIEBOT_ID);
    }
}
