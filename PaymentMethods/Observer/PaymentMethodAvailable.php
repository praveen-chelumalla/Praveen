<?php
 
namespace Praveen\PaymentMethods\Observer;
 
use Magento\Framework\Event\ObserverInterface;
 
 
class PaymentMethodAvailable implements ObserverInterface
{
    /**
     * payment_method_is_active event handler.
     *
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        
        if($observer->getEvent()->getMethodInstance()->getCode()=="cashondelivery"){
            $checkResult = $observer->getEvent()->getResult();
            $checkResult->setData('is_available', false); //this is disabling the payment method at checkout page
        }
    }
}