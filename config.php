<?php 
 
// Product Details 
$itemNumber = "DP12345"; 
$itemName = "Demo Product"; 
$itemPrice = 5;  
$currency = "MXN"; 
 
/* PayPal REST API configuration 
 * You can generate API credentials from the PayPal developer panel. 
 * See your keys here: https://developer.paypal.com/dashboard/ 
 */ 
define('PAYPAL_SANDBOX', TRUE); //TRUE=Sandbox | FALSE=Production 
define('PAYPAL_SANDBOX_CLIENT_ID', 'AZ-lUbJ4dvAetw7nHyFqNsvcmScm-mMikDT2DN5SXZ6oCtC5cXcGecgzVZP1citleZL0HRsox2bmGBqq'); 
define('PAYPAL_SANDBOX_CLIENT_SECRET', 'EPqbQdjckz0ki6kmRnETWr52YwgHOP1q8pFFIEpnNmFSLTn6TdPCaokR51wzFEfALrJtZkqJs-eKkgps'); 
define('PAYPAL_PROD_CLIENT_ID', 'AZLJzCzJ5BF6tbrLH-Gn5HsLY5YF12M8hAToi8FY3NbVyGnFfnL5T6Rdu9tHqv0OG33BCybIUpNVvcm1'); 
define('PAYPAL_PROD_CLIENT_SECRET', 'EBWLAFlXRlnyS3EtsOEImrDJR3bQbW0xMaGIBENxCZwLWI0d9qswI_KwW9P7Ui_Ibgbnok_b2PAhjude'); 
  
// Database configuration  
define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'paypal_check'); 
 
?>