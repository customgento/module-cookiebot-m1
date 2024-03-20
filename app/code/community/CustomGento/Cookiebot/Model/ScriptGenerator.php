<?php

declare(strict_types=1);

class CustomGento_Cookiebot_Model_ScriptGenerator
{
    private const COOKIEBOT_SCRIPT_FORMAT = '<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="%s" data-blockingmode="%s" type="text/javascript"></script>';

    public function generate(): string
    {
        $cookiebotId  = Mage::getModel('customgento_cookiebot/config')->getCookiebotId();
        $blockingMode = Mage::getModel('customgento_cookiebot/config')->getBlockingMode();

        $cookiebotScript = sprintf(self::COOKIEBOT_SCRIPT_FORMAT, $cookiebotId, $blockingMode);

        if (Mage::getModel('customgento_cookiebot/config')->useGoogleConsentMode()) {
            $cookiebotScript .= '<script data-cookieconsent="ignore">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag("consent", "default", {
            ad_personalization: "denied",
            ad_storage: "denied",
            ad_user_data: "denied",
            analytics_storage: "denied",
            functionality_storage: "denied",
            personalization_storage: "denied",
            security_storage: "granted",
            wait_for_update: 500,
        });
        gtag("set", "ads_data_redaction", true);
        gtag("set", "url_passthrough", true);
    </script>';
        }

        return $cookiebotScript;
    }
}
