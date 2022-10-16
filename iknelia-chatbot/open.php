<?php
// This File help us to test chatbot Code from the Browser.
// For more Info check Documentation.



##-----------------------------Core--------------------------##
// Zaroc
require_once("../zaroc/zaroc.php");                          # Zaroc Library
// Vendor
// require_once("../vendor/autoload.php");                    # Optional (For vendor and thir party components)

##------------------Chatbot Variables------------------------##
// Links, Emails, Information
require_once("core/variables.php");                         # Informational Variables
// Url of common images
require_once("core/images.php");
##---------------------------Classes----------------------------------##
# Classes
require_once("classes/Engages.php");


##---------------------------VIEWS----------------------------------##
# basicIntents
require_once("intents/test.php");                        #To make test Create Test Intent, connect Webhook and test your Request/Response






?>
