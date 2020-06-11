<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_TITLE', 'PayPal Express Checkout',true);
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_PUBLIC_TITLE', 'PayPal (including Credit and Debit Cards)',true);
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&paypal&oscom23&express_checkout" target="_blank" style="text-decoration: underline; font-weight: bold;">View Online Documentation</a><br /><br /><img src="images/icon_popup.gif" border="0" />&nbsp;<a href="https://www.paypal.com" target="_blank" style="text-decoration: underline; font-weight: bold;">Visit PayPal Website</a>',true);

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_ERROR_ADMIN_CURL', 'This module requires cURL to be enabled in PHP and will not load until it has been enabled on this webserver.',true);
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_ERROR_ADMIN_CONFIGURATION', 'This module will not load until the Seller Account or API Credential parameters have been configured. Please edit and configure the settings of this module.',true);

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_BUTTON', 'Check Out with PayPal',true);
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_COMMENTS', 'Comments:',true);
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_EMAIL_PASSWORD', 'An account has automatically been created for you with the following e-mail address and password:' . "\n\n" . 'Store Account E-Mail Address: %s' . "\n" . 'Store Account Password: %s' . "\n\n");

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_BUTTON', 'https://www.paypalobjects.com/webstatic/en_US/btn/btn_checkout_pp_142x27.png',true);
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_LANGUAGE_LOCALE', 'en_US',true);

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_LINK_TITLE', 'Test API Server Connection',true);
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_TITLE', 'API Server Connection Test',true);
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_GENERAL_TEXT', 'Testing connection to server..',true);
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_BUTTON_CLOSE', 'Close',true);
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_TIME', 'Connection Time:',true);
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_SUCCESS', 'Success!',true);
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_FAILED', 'Failed! Please review the Verify SSL Certificate settings and try again.',true);
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_ERROR', 'An error occurred. Please refresh the page, review your settings, and try again.',true);

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_ERROR_NO_SHIPPING_AVAILABLE_TO_SHIPPING_ADDRESS', 'Shipping is currently not available for the selected shipping address. Please select or create a new shipping address to use with your purchase.',true);
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_WARNING_LOCAL_LOGIN_REQUIRED', 'Please log into your account to verify the order.',true);
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_NOTICE_CHECKOUT_CONFIRMATION', 'Please review and confirm your order below. Your order will not be processed until it has been confirmed.',true);
?>
const MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_TITLE = 'PayPal Express Checkout';
const MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_PUBLIC_TITLE = 'PayPal (including Credit and Debit Cards)';
const MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_DESCRIPTION = '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&paypal&oscom23&express_checkout" target="_blank" style="text-decoration: underline; font-weight: bold;">View Online Documentation</a><br /><br /><img src="images/icon_popup.gif" border="0" />&nbsp;<a href="https://www.paypal.com" target="_blank" style="text-decoration: underline; font-weight: bold;">Visit PayPal Website</a>';
const MODULE_PAYMENT_PAYPAL_EXPRESS_ERROR_ADMIN_CURL = 'This module requires cURL to be enabled in PHP and will not load until it has been enabled on this webserver.';
const MODULE_PAYMENT_PAYPAL_EXPRESS_ERROR_ADMIN_CONFIGURATION = 'This module will not load until the Seller Account or API Credential parameters have been configured. Please edit and configure the settings of this module.';
const MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_BUTTON = 'Check Out with PayPal';
const MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_COMMENTS = 'Comments:';
const MODULE_PAYMENT_PAYPAL_EXPRESS_EMAIL_PASSWORD = '';
const MODULE_PAYMENT_PAYPAL_EXPRESS_BUTTON = 'https://www.paypalobjects.com/webstatic/en_US/btn/btn_checkout_pp_142x27.png';
const MODULE_PAYMENT_PAYPAL_EXPRESS_LANGUAGE_LOCALE = 'en_US';
const MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_LINK_TITLE = 'Test API Server Connection';
const MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_TITLE = 'API Server Connection Test';
const MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_GENERAL_TEXT = 'Testing connection to server..';
const MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_BUTTON_CLOSE = 'Close';
const MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_TIME = 'Connection Time:';
const MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_SUCCESS = 'Success!';
const MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_FAILED = 'Failed! Please review the Verify SSL Certificate settings and try again.';
const MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_ERROR = 'An error occurred. Please refresh the page, review your settings, and try again.';
const MODULE_PAYMENT_PAYPAL_EXPRESS_ERROR_NO_SHIPPING_AVAILABLE_TO_SHIPPING_ADDRESS = 'Shipping is currently not available for the selected shipping address. Please select or create a new shipping address to use with your purchase.';
const MODULE_PAYMENT_PAYPAL_EXPRESS_WARNING_LOCAL_LOGIN_REQUIRED = 'Please log into your account to verify the order.';
const MODULE_PAYMENT_PAYPAL_EXPRESS_NOTICE_CHECKOUT_CONFIRMATION = 'Please review and confirm your order below. Your order will not be processed until it has been confirmed.';
