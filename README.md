# Magento-Rest-API
Simple magento rest api, includes common api's like addToCart, updateCart, deleteCart, fetchAllProcessingOrders, createShipment etc.

Follow steps to use this api,

Please add
1) test.php at root of your magento project.
2) Rest_All.xml at app/etc/modules path in your project.
3) Rest folder at app/code/local  path in your project.

=> Please create wenservice/rest/role and webservice/rest/oauth cunsumer from magento admin and provide All resource access to user.

=> Change consumerKey, consumerSecret in indexController.php

=> Change all urls from "http://localhost/magento/" to your magento location.
