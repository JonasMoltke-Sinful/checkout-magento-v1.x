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
class Bambora_Online_Helper_BamboraConstant
{
    //Surcharge
    const BAMBORA_SURCHARGE = 'surcharge_fee';

    //Config constants
    const ORDER_STATUS = 'order_status';
    const ORDER_STATUS_AFTER_PAYMENT = 'order_status_after_payment';
    const MASS_CAPTURE_INVOICE_MAIL = 'masscaptureinvoicemail';
    const TITLE = 'title';
    const MERCHANT_NUMBER = 'merchantnumber';
    const ACCESS_TOKEN = 'accesstoken';
    const SECRET_TOKEN = 'secrettoken';
    const MD5_KEY = 'md5key';
    const PAYMENT_WINDOW_ID = 'paymentwindowid';
    const INSTANT_CAPTURE = 'instantcapture'; //DONT CHANTE THIS
    const INSTANT_INVOICE = 'instantinvoice';
    const INSTANT_INVOICE_MAIL = 'instantinvoicemail';
    const IMMEDIATEREDI_REDIRECT_TO_ACCEPT = 'immediateredirecttoaccept';
    const ADD_SURCHARGE_TO_PAYMENT = 'addsurchargetopayment';
    const SEND_MAIL_ORDER_CONFIRMATION = 'sendmailorderconfirmation';
    const WINDOW_STATE = 'windowstate';
    const REMOTE_INTERFACE = 'remoteinterface';
    const ONLY_SHOW_PAYMENT_LOGOS = 'onlyshowpaymentlogos';
    const USE_AUTO_CANCEL = 'useautocancel';

    //Actions
    const CAPTURE = 'capture';
    const REFUND = 'refund';
    const VOID = 'void';
    const GET_TRANSACTION = 'gettransaction';


}