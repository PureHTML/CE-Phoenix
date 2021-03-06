<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

const MODULE_PAYMENT_SAGE_PAY_DIRECT_TEXT_TITLE = 'Sage Pay Direct';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_TEXT_PUBLIC_TITLE = 'Credit Card (Processed by Sage Pay)';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_TEXT_DESCRIPTION = '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&sage_pay&oscom23&direct" target="_blank" style="text-decoration: underline; font-weight: bold;">View Online Documentation</a><br /><br /><img src="images/icon_popup.gif" border="0">&nbsp;<a href="https://support.sagepay.com/apply/default.aspx?PartnerID=E194E079-84A9-493C-AB9A-91CB362D3238&PromotionCode=osc3MF" target="_blank" style="text-decoration: underline; font-weight: bold;">Visit Sage Pay Website</a>&nbsp;<a href="javascript:toggleDivBlock(\'sagePayInfo\');">(info)</a><span id="sagePayInfo" style="display: none;"><br /><i>Using the above link to signup at Sage Pay grants osCommerce a small financial bonus for referring a customer.</i></span>';

const MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_ADMIN_CURL = 'This module requires cURL to be enabled in PHP and will not load until it has been enabled on this webserver.';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_ADMIN_CONFIGURATION = 'This module will not load until the Vendor Login Name parameter has been configured. Please edit and configure the settings of this module.';

const MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_NEW = 'Enter a new Card';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_TYPE = 'Card Type:';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_OWNER = 'Name on Card:';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_NUMBER = 'Card Number:';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_STARTS = 'Start Date:';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_STARTS_INFO = '(for Maestro and American Express cards only)';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_EXPIRES = 'Expiry Date:';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_ISSUE_NUMBER = 'Issue Number:';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_ISSUE_NUMBER_INFO = '(for Maestro cards only)';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_CVC = 'Security Code:';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_SAVE = 'Save Card for next purchase?';

const MODULE_PAYMENT_SAGE_PAY_DIRECT_3DAUTH_TITLE = '3D Secure Verification';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_3DAUTH_INFO = 'Please click on the CONTINUE button to authenticate your card at the website of your bank.';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_3DAUTH_BUTTON = 'CONTINUE';

const MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_TITLE = 'There has been an error processing your credit card';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_GENERAL = 'Please try again and if problems persist, please try another payment method.';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDTYPE = 'The card type is not supported. Please try again with another card and if problems persist, please try another payment method.';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDOWNER = 'The card owners name must be provided to complete the order. Please try again and if problems persist, please try another payment method.';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDNUMBER = 'The card number was not able to be processed. Please try again and if problems persist, please try another payment method.';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDSTART = 'The card start date was not able to be processed. Please try again and if problems persist, please try another payment method.';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDEXPIRES = 'The card expiry date was not able to be processed. Please try again and if problems persist, please try another payment method.';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDISSUE = 'The card issue number was not able to be processed. Please try again and if problems persist, please try another payment method.';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDCVC = 'The card security code was not able to be processed. Please try again and if problems persist, please try another payment method.';

const MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_LINK_TITLE = 'Test API Server Connection';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_TITLE = 'API Server Connection Test';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_GENERAL_TEXT = 'Testing connection to server..';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_BUTTON_CLOSE = 'Close';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_TIME = 'Connection Time:';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_SUCCESS = 'Success!';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_FAILED = 'Failed! Please review the Verify SSL Certificate settings and try again.';
const MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_ERROR = 'An error occurred. Please refresh the page, review your settings, and try again.';
?>
