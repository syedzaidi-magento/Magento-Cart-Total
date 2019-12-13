<?php
/**
 * Created by PhpStorm.
 * User: syedzaidi
 * Date: 7/30/19
 * Time: 11:30 PM
 */

namespace Syedzaidi\CartTotal\Model\Total;


use Magento\Quote\Model\Quote\Address\Total\AbstractTotal;
use Magento\Quote\Model\QuoteValidator;

class Customfee extends AbstractTotal
{
    /**
     * @var QuoteValidator
     */
    private $quoteValidator;

    /**
     * Customfee constructor.
     * @param QuoteValidator $quoteValidator
     */
    public function __construct(QuoteValidator $quoteValidator)
    {
        $this->quoteValidator = $quoteValidator;
    }

    /**
     * @param \Magento\Quote\Model\Quote $quote
     * @param \Magento\Quote\Api\Data\ShippingAssignmentInterface $shippingAssignment
     * @param \Magento\Quote\Model\Quote\Address\Total $total
     * @return $this
     */
//    public function collect(
//        \Magento\Quote\Model\Quote $quote,
//        \Magento\Quote\Api\Data\ShippingAssignmentInterface $shippingAssignment,
//        \Magento\Quote\Model\Quote\Address\Total $total
//    ) {
//        parent::collect($quote, $shippingAssignment, $total);
//
//
//        //$exist_amount = 0; //$quote->getCustomfee();
//        //$customfee = 100; //enter amount which you want to set
//        //$balance = $customfee - $exist_amount;//final amount
//        $balance = 1;
//
//        $total->setTotalAmount('customfee', $balance);
//        $total->setBaseTotalAmount('customfee', $balance);
//
//        $total->setCustomfee($balance);
//        $total->setBaseCustomfee($balance);
//
//        $total->setGrandTotal($total->getGrandTotal() + $balance);
//        $total->setBaseGrandTotal($total->getBaseGrandTotal() + $balance);
//
//
//        return $this;
//    }

    /**
     * @param \Magento\Quote\Model\Quote\Address\Total $total
     */
    protected function clearValues(\Magento\Quote\Model\Quote\Address\Total $total)
    {
        $total->setTotalAmount('subtotal', 0);
        $total->setBaseTotalAmount('subtotal', 0);
        $total->setTotalAmount('tax', 0);
        $total->setBaseTotalAmount('tax', 0);
        $total->setTotalAmount('discount_tax_compensation', 0);
        $total->setBaseTotalAmount('discount_tax_compensation', 0);
        $total->setTotalAmount('shipping_discount_tax_compensation', 0);
        $total->setBaseTotalAmount('shipping_discount_tax_compensation', 0);
        $total->setSubtotalInclTax(0);
        $total->setBaseSubtotalInclTax(0);
    }

    /**
     * @param \Magento\Quote\Model\Quote $quote
     * @param \Magento\Quote\Model\Quote\Address\Total $total
     * @return array
     */
    public function fetch(\Magento\Quote\Model\Quote $quote, \Magento\Quote\Model\Quote\Address\Total $total)
    {
        return [
            'code' => 'customfee',
            'title' => 'Custom Fee',
            'value' => 100
        ];
    }

    /**
     * Get Subtotal label
     *
     * @return \Magento\Framework\Phrase
     */
    public function getLabel()
    {
        return __('Custom Fee');
    }
}