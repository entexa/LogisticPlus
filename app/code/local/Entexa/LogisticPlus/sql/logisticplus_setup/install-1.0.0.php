<?php

$installer = $this;

$installer->startSetup();

$attrGroupName = 'LogisticPlus';

$objCatalogEavSetup = Mage::getResourceModel('catalog/eav_mysql4_setup', 'core_setup');

$objCatalogEavSetup->addAttribute('catalog_product', 'logisticplus_box_length', array(
    'group' => $attrGroupName,
    'sort_order' => 1,
    'type' => 'int',
    'backend' => '',
    'frontend' => '',
    'label' => 'Length, cm',
    'note' => '',
    'input' => 'text',
    'class' => 'validate-digits',
    'source' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'default' => '90',
    'visible_on_front' => false,
    'unique' => false,
    'is_configurable' => false,
    'used_for_promo_rules' => true));

$objCatalogEavSetup->addAttribute('catalog_product', 'logisticplus_box_width', array(
    'group' => $attrGroupName,
    'sort_order' => 2,
    'type' => 'int',
    'backend' => '',
    'frontend' => '',
    'label' => 'Width, cm',
    'note' => '',
    'input' => 'text',
    'class' => 'validate-digits',
    'source' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'default' => '70',
    'visible_on_front' => false,
    'unique' => false,
    'is_configurable' => false,
    'used_for_promo_rules' => true));

$objCatalogEavSetup->addAttribute('catalog_product', 'logisticplus_box_height', array(
    'group' => $attrGroupName,
    'sort_order' => 3,
    'type' => 'int',
    'backend' => '',
    'frontend' => '',
    'label' => 'Height, cm',
    'note' => '',
    'input' => 'text',
    'class' => 'validate-digits',
    'source' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'default' => '50',
    'visible_on_front' => false,
    'unique' => false,
    'is_configurable' => false,
    'used_for_promo_rules' => true));

$objCatalogEavSetup->addAttribute('catalog_product', 'logisticplus_box_volume', array(
    'group' => $attrGroupName,
    'sort_order' => 3,
    'type' => 'decimal',
    'backend' => '',
    'frontend' => '',
    'label' => 'Volume, m3',
    'note' => '',
    'input' => 'text',
    'class' => 'disabled',
    'source' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'default' => '0.315',
    'visible_on_front' => false,
    'unique' => false,
    'is_configurable' => false,
    'used_for_promo_rules' => true));


$installer->endSetup();
