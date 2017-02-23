<?php

class Entexa_LogisticPlus_Block_Box extends Mage_Core_Block_Template
{

    public function box()
    {

        if (Mage::getStoreConfigFlag('logisticplus/general/enabled')) {

            return Mage::getStoreConfig('logisticplus/box');
        }
    }
}