<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_SAGE_PAY_SERVER_TEXT_TITLE', 'Sage Pay Server',true);
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_TEXT_PUBLIC_TITLE', 'Credit Card or Bank Card (Processed by Sage Pay)',true);
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&sage_pay&oscom23&server" target="_blank" style="text-decoration: underline; font-weight: bold;">View Online Documentation</a><br /><br /><img src="images/icon_popup.gif" border="0">&nbsp;<a href="https://support.sagepay.com/apply/default.aspx?PartnerID=E194E079-84A9-493C-AB9A-91CB362D3238&PromotionCode=osc3MF" target="_blank" style="text-decoration: underline; font-weight: bold;">Visit Sage Pay Website</a>&nbsp;<a href="javascript:toggleDivBlock(\'sagePayInfo\',true);">(info)</a><span id="sagePayInfo" style="display: none;"><br /><i>Using the above link to signup at Sage Pay grants osCommerce a small financial bonus for referring a customer.</i></span>',true);

  define('MODULE_PAYMENT_SAGE_PAY_SERVER_ERROR_ADMIN_CURL', 'This module requires cURL to be enabled in PHP and will not load until it has been enabled on this webserver.',true);
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_ERROR_ADMIN_CONFIGURATION', 'This module will not load until the Vendor Login Name parameter has been configured. Please edit and configure the settings of this module.',true);

  define('MODULE_PAYMENT_SAGE_PAY_SERVER_ERROR_TITLE', 'There has been an error processing your credit card',true);
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_ERROR_GENERAL', 'Please try again and if problems persist, please try another payment method.',true);

  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_LINK_TITLE', 'Test API Server Connection',true);
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_TITLE', 'API Server Connection Test',true);
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_GENERAL_TEXT', 'Testing connection to server..',true);
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_BUTTON_CLOSE', 'Close',true);
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_TIME', 'Connection Time:',true);
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_SUCCESS', 'Success!',true);
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_FAILED', 'Failed! Please review the Verify SSL Certificate settings and try again.',true);
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_ERROR', 'An error occurred. Please refresh the page, review your settings, and try again.',true);
?>
const MODULE_PAYMENT_SAGE_PAY_SERVER_TEXT_TITLE = 'Sage Pay Server';
const MODULE_PAYMENT_SAGE_PAY_SERVER_TEXT_PUBLIC_TITLE = 'Credit Card or Bank Card (Processed by Sage Pay)';
const MODULE_PAYMENT_SAGE_PAY_SERVER_TEXT_DESCRIPTION = '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&sage_pay&oscom23&server" target="_blank" style="text-decoration: underline; font-weight: bold;">View Online Documentation</a><br /><br /><img src="images/icon_popup.gif" border="0">&nbsp;<a href="https://support.sagepay.com/apply/default.aspx?PartnerID=E194E079-84A9-493C-AB9A-91CB362D3238&PromotionCode=osc3MF" target="_blank" style="text-decoration: underline; font-weight: bold;">Visit Sage Pay Website</a>&nbsp;<a href="javascript:toggleDivBlock('sagePayInfo',true);">(info)</a><span id="sagePayInfo" style="display: none;"><br /><i>Using the above link to signup at Sage Pay grants osCommerce a small financial bonus for referring a customer.</i></span>';
const MODULE_PAYMENT_SAGE_PAY_SERVER_ERROR_ADMIN_CURL = 'This module requires cURL to be enabled in PHP and will not load until it has been enabled on this webserver.';
const MODULE_PAYMENT_SAGE_PAY_SERVER_ERROR_ADMIN_CONFIGURATION = 'This module will not load until the Vendor Login Name parameter has been configured. Please edit and configure the settings of this module.';
const MODULE_PAYMENT_SAGE_PAY_SERVER_ERROR_TITLE = 'There has been an error processing your credit card';
const MODULE_PAYMENT_SAGE_PAY_SERVER_ERROR_GENERAL = 'Please try again and if problems persist, please try another payment method.';
const MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_LINK_TITLE = 'Test API Server Connection';
const MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_TITLE = 'API Server Connection Test';
const MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_GENERAL_TEXT = 'Testing connection to server..';
const MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_BUTTON_CLOSE = 'Close';
const MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_TIME = 'Connection Time:';
const MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_SUCCESS = 'Success!';
const MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_FAILED = 'Failed! Please review the Verify SSL Certificate settings and try again.';
const MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_ERROR = 'An error occurred. Please refresh the page, review your settings, and try again.';
