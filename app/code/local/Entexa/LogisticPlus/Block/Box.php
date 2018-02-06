<?php

class Entexa_LogisticPlus_Block_Box extends Mage_Core_Block_Template
{
    public function box()
    {
        if (Mage::getStoreConfigFlag('logisticplus/general/enabled')) {

            if (strpos(Mage::getSingleton('core/session')->getLastUrl(), 'checkout/cart') !== false) {

                if ($cart = Mage::getModel('checkout/cart')->getQuote()) {

                    $totalQuantity = Mage::getModel('checkout/cart')->getQuote()->getItemsQty();

                    foreach ($cart->getAllItems() as $item) {

                        $product_id = $item->getProduct()->getId();
                        $qty = $item->getQty();
                        $_resource = Mage::getSingleton('catalog/product')->getResource();
                        $optionValue = $_resource->getAttributeRawValue($product_id, 'logisticplus_box_volume', Mage::app()->getStore());
                        $volume += $optionValue * $qty;
                    }

                    return $volume;
                }

            } else {
                $product_id = Mage::registry('current_product')->getId();
                $product = Mage::getModel('catalog/product')->load($product_id);

                $attributes = $product->getAttributes();

                foreach ($attributes as $attribute) {
                    $attribute_code = $attribute->getAttributeCode();

                    if ($attribute_code == 'logisticplus_box_length' ||
                        $attribute_code == 'logisticplus_box_width' ||
                        $attribute_code == 'logisticplus_box_height' ||
                        $attribute_code == 'logisticplus_box_volume'
                    ) {
                        $box[$attribute_code] = $attribute->getFrontend()->getValue($product);
                    }
                }
                return $box;
            }

        }

    }
}
