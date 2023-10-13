<?php

declare(strict_types=1);

class CustomGento_Cookiebot_Model_Source_BlockingMode
{
    public function toOptionArray(): array
    {
        return [
            ['value' => 'auto', 'label' => Mage::helper('adminhtml')->__('Auto')],
            ['value' => 'manual', 'label' => Mage::helper('adminhtml')->__('Manual')],
        ];
    }
}
