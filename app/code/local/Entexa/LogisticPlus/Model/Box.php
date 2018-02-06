<?php

class Entexa_LogisticPlus_Model_Box extends Mage_Core_Model_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('logisticplus/box');
    }
}
