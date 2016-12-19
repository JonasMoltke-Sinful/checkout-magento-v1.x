<?php
/**
 * 888                             888
 * 888                             888
 * 88888b.   8888b.  88888b.d88b.  88888b.   .d88b.  888d888  8888b.
 * 888 "88b     "88b 888 "888 "88b 888 "88b d88""88b 888P"       "88b
 * 888  888 .d888888 888  888  888 888  888 888  888 888     .d888888
 * 888 d88P 888  888 888  888  888 888 d88P Y88..88P 888     888  888
 * 88888P"  "Y888888 888  888  888 88888P"   "Y88P"  888     "Y888888
 *
 * @category    Online Payment Gatway
 * @package     Bambora_Online
 * @author      Bambora Online
 * @copyright   Bambora (http://bambora.com)
 */
use Bambora_Online_Model_Api_Checkout_Constant_Endpoint as Endpoint;

class Bambora_Online_Model_Api_Checkout_Assets extends Bambora_Online_Model_Api_Checkout_Base
{
    /**
     * Get Bambora Checkout payment window js url
     *
     * @return string
     */
    public function getCheckoutPaymentWindowJSUrl()
    {
        $url = $this->_getEndpoint(Endpoint::ENDPOINT_CHECKOUT_ASSETS).'/paymentwindow-v1.min.js';

        return $url;
    }

    /**
     * Get Checkout payment window js url
     *
     * @return string
     */
    public function getCheckoutIconUrl()
    {
        $url = $this->_getEndpoint(Endpoint::ENDPOINT_GLOBAL_ASSETS).'/bambora_icon_64x64.png';

        return $url;
    }
}