<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category	CosmoCommerce
 * @package 	CosmoCommerce_Sinapay
 * @copyright	Copyright (c) 2009-2013 CosmoCommerce,LLC. (http://www.cosmocommerce.com)
 * @contact :
 * T: +86-021-66346672
 * L: Shanghai,China
 * M:sales@cosmocommerce.com
 */
class CosmoCommerce_Sinapay_Model_Source_Servicetype
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'create_forex_trade', 'label' => Mage::helper('sinapay')->__('Create Forex Trade')),
            array('value' => 'trade_create_by_buyer', 'label' => Mage::helper('sinapay')->__('Trade Create By Buyer')),
            array('value' => 'create_direct_pay_by_user', 'label' => Mage::helper('sinapay')->__('Create Direct Pay By User')),
            array('value' => 'create_partner_trade_by_buyer', 'label' => Mage::helper('sinapay')->__('Create Partner Trade By Buyer')),
        );
    }
}


