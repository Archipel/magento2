<?php
/**
 * Copyright © 2018 Magmodules.eu. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mollie\Payment\Model\Methods;

use Mollie\Payment\Model\Mollie;

/**
 * Class Giftcard
 *
 * @package Mollie\Payment\Model\Methods
 */
class Giftcard extends Mollie
{

    /**
     * Payment method code
     *
     * @var string
     */
    protected $_code = 'mollie_methods_giftcard';

    /**
     * Info instructions block path
     *
     * @var string
     */
    protected $_infoBlockType = 'Mollie\Payment\Block\Info\Base';

    /**
     * Disable refund for Giftcard
     *
     * @var bool
     */
    protected $_canRefund = false;

    /**
     * Disable partial refund for Giftcard
     *
     * @var bool
     */
    protected $_canRefundInvoicePartial = false;

}
