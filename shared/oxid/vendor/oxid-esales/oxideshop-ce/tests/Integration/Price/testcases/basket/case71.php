<?php
/**
 * Price enter mode: netto
 * Price view mode:  netto
 * Product count: count of used products
 * VAT info: 19%
 * Currency rate: 1
 * Discounts: -
 * Vouchers: -
 * Wrapping: -;
 * Gift cart:  -;
 * Costs VAT caclulation rule: max
 * Costs:
 *  1. Payment +
 *  2. Delivery +
 * Short description:
 * Neto-Neto mode. Additiona products Neto-Neto.
 */
$aData = array(
    'articles' => array (
        0 => array (
            'oxid'                     => 9001,
            'oxprice'                  => 10,
            'oxvat'                    => 19,
            'amount'                   => 50,
        ),

    ),
    'costs' => array(

        'delivery' => array(
            0 => array(
                'oxtitle' => '6_abs_del',
                'oxactive' => 1,
                'oxaddsum' => 10,
                'oxaddsumtype' => 'abs',
                'oxdeltype' => 'p',
                'oxfinalize' => 1,
                'oxparamend' => 99999
            ),
        ),
        'payment' => array(
            0 => array(
                'oxtitle' => '1 abs payment',
                'oxaddsum' => 10,
                'oxaddsumtype' => 'abs',
                'oxfromamount' => 0,
                'oxtoamount' => 1000000,
                'oxchecked' => 1,
            ),
        ),
    ),
    'expected' => array (
        'articles' => array (
             9001 => array ( '10,00', '500,00' ),
        ),
        'totals' => array (
            'totalBrutto' => '595,00',
            'totalNetto'  => '500,00',
            'vats' => array (
                19 => '95,00'
            ),
            'delivery' => array(
                'brutto' => '11,90',
                'netto' => '10,00',
                'vat' => '1,90'
            ),
            'payment' => array(
                'brutto' => '11,90',
                'netto' => '10,00',
                'vat' => '1,90'
            ),
            'grandTotal'  => '618,80'
        ),
    ),
    'options' => array (
        // Configs (real named)
        'config' => array(
            'blEnterNetPrice' => true,
            'blShowNetPrice' => true,
            'blShowVATForDelivery'=> true,
            'blShowVATForPayCharge'=> true,
            'blShowVATForWrapping'=> true,
            'sAdditionalServVATCalcMethod' => 'biggest_net',
            'blDeliveryVatOnTop' => true,
            'blPaymentVatOnTop' => true,
            'blWrappingVatOnTop' => true,
        ),
        // Other options
        'activeCurrencyRate' => 1,
    ),
);
