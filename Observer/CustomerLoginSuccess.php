<?php
/**
 * Created: 21/06/2019
 *
 * @category  PHPAISS
 * @package   PHPAISS_CustomLog
 * @author    Yassine AISSAOUI
 * @copyright 21/06/2019 - PHPAISS Magento
 * @license   PHPAISS Magento
 */

namespace PHPAISS\CustomLog\Observer;

class CustomerLoginSuccess implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var \PHPAISS\CustomLog\Logger\Customer
     */
    protected $loggerCustomer;

    /**
     * @param \PHPAISS\CustomLog\Logger\Customer $loggerCustomer
     */
    public function __construct(
        \PHPAISS\CustomLog\Logger\Customer $loggerCustomer
    ) {
        $this->loggerCustomer = $loggerCustomer;
    }

    /**
     * Handler for 'customer_login' event.
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        /** @var \Magento\Customer\Model\Customer $customer */
        $customer = $observer->getEvent()->getCustomer();
        $this->loggerCustomer->info('Customer ID: '.$customer->getId().' has been logged in successfully!');
    }
}