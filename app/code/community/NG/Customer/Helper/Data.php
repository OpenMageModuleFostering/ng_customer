<?php

/**
 * NG_Customer extension
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 * 
 * @category       NG
 * @package        NG_Customer
 * @copyright      Copyright (c) 2014
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */
class NG_Customer_Helper_Data extends Mage_Core_Helper_Abstract {

    public function getLinkLabel() {
        return ucwords(Mage::getStoreConfig('ng_customer/link/name'));
    }

}
