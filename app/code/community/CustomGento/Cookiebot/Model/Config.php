<?php

declare(strict_types=1);

class CustomGento_Cookiebot_Model_Config
{
    private const XML_PATH_COOKIEBOT_ENABLED = 'web/cookiebot/enabled';
    private const XML_PATH_COOKIEBOT_ID = 'web/cookiebot/id';
    private const XML_PATH_COOKIEBOT_BLOCKINGMODE = 'web/cookiebot/blocking_mode';
    private const XML_PATH_COOKIEBOT_USE_GOOGLE_CONSENT_MODE = 'web/cookiebot/use_google_consent_mode';

    public function isEnabled(): bool
    {
        return (bool)Mage::getStoreConfig(self::XML_PATH_COOKIEBOT_ENABLED);
    }

    public function getCookiebotId(): string
    {
        return Mage::getStoreConfig(self::XML_PATH_COOKIEBOT_ID);
    }

    public function getBlockingMode(): string
    {
        return Mage::getStoreConfig(self::XML_PATH_COOKIEBOT_BLOCKINGMODE);
    }

    public function useGoogleConsentMode(): bool
    {
        return (bool)Mage::getStoreConfig(self::XML_PATH_COOKIEBOT_USE_GOOGLE_CONSENT_MODE);
    }
}
