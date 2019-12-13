<?php
/**
 * Created by PhpStorm.
 * User: syedzaidi
 * Date: 8/1/19
 * Time: 3:19 PM
 */

namespace Syedzaidi\CartTotal\Plugin;


class CartTotalPlugin
{
    /**
     * @param \Magento\Quote\Model\Quote\Address\Total\AbstractTotal $subject
     * @param \Magento\Quote\Model\Quote $quote
     * @param \Magento\Quote\Api\Data\ShippingAssignmentInterface $shippingAssignment
     * @param \Magento\Quote\Model\Quote\Address\Total $total
     * @return array
     */
    public function beforeCollect(
        \Magento\Quote\Model\Quote\Address\Total\AbstractTotal $subject,
        \Magento\Quote\Model\Quote $quote,
        \Magento\Quote\Api\Data\ShippingAssignmentInterface $shippingAssignment,
        \Magento\Quote\Model\Quote\Address\Total $total
    ){

        $amount = 100;

        $total->setTotalAmount('custom_total', $amount);
        $total->setBaseTotalAmount('custom_total', $amount);

        return [$quote, $shippingAssignment, $total];
    }
}