<?php
/** 
* Config file for Mortgage Calculator
* This file holds settings that affect the mortgage calculator tool.
*
**/

// Defaults for initial calculator
define('DPRICE', '224000.00');
define('DINT', '5.5');
define('DDP', '12');
define('DTERM', '30');


// Other factors (taxes, insurance, pmi)
define('HIR', '56');   // Homeowners Insurance Rate
define('PMI', '56');   // Private Mortgage Insurance


// Settings
define('LAYOUT', 'div'); // amortization schedule modal, div or popup
define('WEBSITE', 'www.yourwebsite.com'); // Used in pdf emails to let your customers know where they came from 
define('URL', 'http://www.yourwebsite.com/calc');  // Used for file reference locations (include http://), no trailing slashes
define('EMAIL', ''); // Used for bcc to you so you can contact the customer 
define('FROMEMAIL', '');  // The email address that shows in the from field
define('ALLOWEMAIL', 'yes');  // Allow email to send report to customer
define('SHOWBLURB', 'yes');   // Option to give information about other costs before schedule

// Disclaimer can say what you want
define('DISCLAIMER', 'Calculations by this calculator are estimates only. There is no warranty for the accuracy of the results or the relationship to your financial situation.');
