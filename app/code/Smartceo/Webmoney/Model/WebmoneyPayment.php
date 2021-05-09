<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Smartceo\Webmoney\Model;



/**
 * Pay In Store payment method model
 */
class WebmoneyPayment extends \Magento\Payment\Model\Method\AbstractMethod
{

  const PAYMENT_METHOD_WEBMONEY_CODE = 'webmoneypayment';

  /**
   * Payment code
   *
   * @var string
   */
  protected $_code = self::PAYMENT_METHOD_WEBMONEY_CODE;


    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;

  /**
   * Get instructions text from config
   *
   * @return string
   */
  public function getInstructions() {
	return trim($this->getConfigData('instructions'));
  }
 
  public function getConfigPaymentAction() {
	return ($this->getConfigData('order_status') == 'pending') ? null : parent::getConfigPaymentAction();
  }

}
