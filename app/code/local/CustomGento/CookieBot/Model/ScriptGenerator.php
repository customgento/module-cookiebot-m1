<?php

declare(strict_types=1);

class CustomGento_CookieBot_Model_ScriptGenerator
{
    private const COOKIEBOT_SCRIPT_FORMAT = '<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="%s" data-blockingmode="auto" type="text/javascript"></script>';

    public function generate(): string
    {
        $cookiebotId = Mage::getModel('customgento_cookiebot/config')->getCookiebotId();

        return sprintf(self::COOKIEBOT_SCRIPT_FORMAT, $cookiebotId);
    }
}
