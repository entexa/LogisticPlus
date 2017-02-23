<?php

class Entexa_LogisticPlus_Model_Source_Status
{
    const ENABLED = '1';
    const DISABLED = '0';

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => self::ENABLED, 'label' => Mage::helper('logisticplus')->__('Enabled')),
            array('value' => self::DISABLED, 'label' => Mage::helper('logisticplus')->__('Disabled')),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            self::DISABLED => Mage::helper('logisticplus')->__('Disabled'),
            self::ENABLED => Mage::helper('logisticplus')->__('Enabled'),
        );
    }
}