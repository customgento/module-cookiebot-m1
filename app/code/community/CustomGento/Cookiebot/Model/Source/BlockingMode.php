<?php

declare(strict_types=1);

class CustomGento_Cookiebot_Model_Source_BlockingMode
{
    public function toOptionArray(): array
    {
        return array(
            array('value' => 'auto', 'label'=>Mage::helper('adminhtml')->__('Auto')),
            array('value' => 'manual', 'label'=>Mage::helper('adminhtml')->__('Manual')),
        );
    }
}
