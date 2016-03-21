<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title> &gt; 1.0 &gt; API Manager</title>
  <!-- <script src="assets/jquery-1.js" type="text/javascript"></script>
  <script src="assets/jquery-ui-1.js" type="text/javascript"></script>
  <script src="assets/jquery.js" type="text/javascript"></script>
  <script src="assets/jquery_002.js" type="text/javascript" charset="utf-8"></script> -->
  <script src="js/lib//jquery/jquery-1.10.2.js"></script>
  <script type="text/javascript">
        $('document').ready(function(){
	    var id = $('#apiChange').val();
            $('.all').hide();
            $('#'+id).show();
            $('#apiChange').change(function(){
                var id = $(this).val();
                $('.all').hide();
                $('#'+id).show();
            });
	     });
	
	
    </script>
  <style type="text/css">
td {
	vertical-align: super;
	min-width: 110px;
	padding-bottom: 10px;
}
td input[type="text"] {
	background: none repeat scroll 0 0 #FFFFFF;
	border-color: #CCCCCC #999999 #999999 #CCCCCC;
	border-radius: 3px 3px 3px 3px;
	border-style: solid;
	border-width: 1px;
	box-shadow: 0 1px 0 #E8E8E8;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10pt;
	min-width: 300px;
	padding: 3px;
}
</style>
  </head>
  <body>
<!-- Insert your content here -->
<table style="width:100%">
    <tbody><tr>
    <td style="alignment-adjust: central;" colspan="2" align="center">
	  <a href="https://dragonfruit-staging.herokuapp.com/" target="_blank">
		<h1 style="font-size: 49px; font-family: sans-serif; text-decoration: underline; color: purple;"></h1>
	  </a>
	</td>
  </tr>
    <tr>
	  
    <td style="padding: 20px;text-align: center;"> apiName :
        <select name="apiChange" id="apiChange">
      <option selected="selected" value="login">login</option>
      <option value="register">register</option>
      <option value="category">category</option>
      <option value="categoryProduct">categoryProduct</option>
      <option value="product">product</option>
      <option value="addToCart">addToCart</option>
      <option value="viewCart">viewCart</option>
      <option value="placeOrder">placeOrder</option>
      <option value="clearCart">clearCart</option>
      <option value="removeCartItem">removeCartItem</option>
		  <option value="updateCartItem">updateCartItem</option>
      <option value="fetchAllProcessingOrders">fetchAllProcessingOrders</option>
      <option value="createShipment">createShipment</option>
        </select>
	</td>
  </tr>
    <tr>
    <td style="padding: 30px 0 0 0;" align="center">
      
<!-- ====================================================================== login ============================================================================================== -->

	  <div class="all" id="login" style="display: none;">
        <form name="apiform" id="loginForm" method="post" action="http://localhost/magento/rest/index/login">
          <table>
		  	<tbody><tr>
                <td>email:</td>
                <td><input name="email" type="text"></td>
            </tr>
			<tr>
                <td>password:</td>
                <td><input name="password" type="password" value="123456"></td>
            </tr>
			<tr>
              <td></td>
              <td></td>
            </tr>
          </tbody></table>
          <br>
          <br>
          <br>
		  <input type="submit" value="login"/>
        </form>
      </div>	  
	  
<!-- ====================================================================== register ============================================================================================== -->

    <div class="all" id="register" style="display: none;">
        <form name="apiform" id="registerForm" method="post" action="http://localhost/magento/rest/index/register">
          <table>
        <tbody><tr>
                <td>group:</td>
                <td>
                <select name="group">
                  <option value="1">General</option>
                  <option value="2">Wholesale</option>
                  <option value="3">Retailer</option>
                </select>
                </td>
            </tr>
      <tr>
                <td>prefix:</td>
                <td><input name="prefix" type="test"></td>
            </tr>
      <tr>
                <td>firstname:</td>
                <td><input name="firstname" type="test"></td>
            </tr>
      <tr>
                <td>middelname:</td>
                <td><input name="middelname" type="test"></td>
            </tr>
      <tr>
                <td>lastname:</td>
                <td><input name="lastname" type="test"></td>
            </tr>
      <tr>
                <td>suffix:</td>
                <td><input name="suffix" type="test"></td>
            </tr>
      <tr>
                <td>email:</td>
                <td><input name="email" type="email"></td>
            </tr>
      <tr>
                <td>password:</td>
                <td><input name="password" type="password"></td>
            </tr>

      <tr>
            <td colspan="2" align="center"><strong><u>Address</u></strong></td>
            </tr>
      <tr>
                <td>countrycode:</td>
                <td><input name="countrycode" type="text"></td>
            </tr>
      <tr>
                <td>postcode:</td>
                <td><input name="postcode" type="text"></td>
            </tr>
      <tr>
                <td>region:</td>
                <td><input name="region" type="text"></td>
            </tr>
      <tr>
                <td>city:</td>
                <td><input name="city" type="text"></td>
            </tr>
      <tr>
                <td>telephone:</td>
                <td><input name="telephone" type="text"></td>
            </tr>
      <tr>
                <td>fax:</td>
                <td><input name="fax" type="text"></td>
            </tr>
      <tr>
                <td>company:</td>
                <td><input name="company" type="text"></td>
            </tr>
      <tr>
                <td>street:</td>
                <td><input name="street" type="text"></td>
            </tr>
      <tr>
            <td colspan="2" align="center"><strong><u>Other</u></strong></td>
            </tr>
      <tr>
                <td>isDefaultBilling:</td>
                <td>
                    <select name="isDefaultBilling">
                      <option value="0">0</option>
                      <option value="1">1</option>
                    </select>
                </td>
            </tr>
      <tr>
                <td>isDefaultShipping:</td>
                <td>
                    <select name="isDefaultShipping">
                      <option value="0">0</option>
                      <option value="1">1</option>
                    </select>
                </td>
            </tr>
      <tr>
                <td>saveInAddressBook:</td>
                <td>
                    <select name="saveInAddressBook">
                      <option value="0">0</option>
                      <option value="1">1</option>
                    </select>
                </td>
            </tr>

      <tr>
              <td></td>
              <td></td>
            </tr>
          </tbody></table>
          <br>
          <br>
          <br>
      <input type="submit" value="register"/>
        </form>
      </div>

<!-- ====================================================================== category ============================================================================================== -->

    <div class="all" id="category" style="display: none;">
        <form name="apiform" id="categoryForm" method="post" action="http://localhost/magento/rest/index/category">
          <table>
        <tbody>
      <tr>
              <td></td>
              <td></td>
            </tr>
          </tbody></table>
          <br>
          <br>
          <br>
      <input type="submit" value="submit"/>
        </form>
      </div>

<!-- ====================================================================== categoryProduct ============================================================================================== -->

    <div class="all" id="categoryProduct" style="display: none;">
        <form name="apiform" id="categoryProductForm" method="get" action="http://localhost/magento/rest/index/categoryProduct">
          <table>
        <tbody><tr>
                <td>categoryid:</td>
                <td><input name="categoryid" type="text"></td>
            </tr>
      <tr>
              <td></td>
              <td></td>
            </tr>
          </tbody></table>
          <br>
          <br>
          <br>
      <input type="submit" value="submit"/>
        </form>
      </div>

<!-- =========================================================================== product ================================================================================================== -->

    <div class="all" id="product" style="display: none;">
        <form name="apiform" id="productForm" method="get" action="http://localhost/magento/rest/index/product">
          <table>
        <tbody><tr>
                <td>productid:</td>
                <td><input name="productid" type="text"></td>
            </tr>
      <tr>
              <td></td>
              <td></td>
            </tr>
          </tbody></table>
          <br>
          <br>
          <br>
      <input type="submit" value="submit"/>
        </form>
      </div>

<!-- ====================================================================== addToCart ============================================================================================== -->
  
    <?php
        // Super attributes array for configurable product
        $super_attribute = array(136 => 7, 92 => 4);
        $str = json_encode($super_attribute);
    ?>

    <div class="all" id="addToCart" style="display: none;">
        <form name="apiform" id="addToCartForm" method="post" action="http://localhost/magento/rest/index/addToCart">
          <table>
        <tbody><tr>
                <td>productid:</td>
                <td><input name="productid" type="text"></td>
            </tr>

            <tr>
                <td>quantity:</td>
                <td><input name="quantity" type="text"></td>
            </tr>

            <tr>
                <td>userid:</td>
                <td><input name="userid" type="text">
                    <input name="super_attribute" type="hidden" value='<?php echo $str; ?>'></td>
            </tr>
      <tr>
              <td></td>
              <td></td>
            </tr>
          </tbody></table>
          <br>
          <br>
          <br>
      <input type="submit" value="submit"/>
        </form>
      </div>

<!-- ====================================================================== viewCart ============================================================================================== -->

    <div class="all" id="viewCart" style="display: none;">
        <form name="apiform" id="viewCartForm" method="post" action="http://localhost/magento/rest/index/viewCart">
          <table>
        <tbody><tr>
                <td>userid:</td>
                <td><input name="userid" type="text"></td>
            </tr>

              <td></td>
              <td></td>
            </tr>
          </tbody></table>
          <br>
          <br>
          <br>
      <input type="submit" value="submit"/>
        </form>
      </div>

<!-- ====================================================================== placeOrder ============================================================================================== -->
    <div class="all" id="placeOrder" style="display: none;">
        <form name="apiform" id="placeOrderForm" method="post" action="http://localhost/magento/rest/index/placeOrder">
          <table>
        <tbody><tr>
                <td>userid:</td>
                <td><input name="userid" type="text"></td>
            </tr>

      <tr>
                <td>payment_method:</td>
                <td><input name="payment_method" type="text"></td>
            </tr>
      <tr>
                <td>shipping_method:</td>
                <td><input name="shipping_method" type="text"></td>
            </tr>


              <td></td>
              <td></td>
            </tr>
          </tbody></table>
          <br>
          <br>
          <br>
      <input type="submit" value="submit"/>
        </form>
      </div>

<!-- ====================================================================== deleteCart ============================================================================================== -->

    <div class="all" id="clearCart" style="display: none;">
        <form name="apiform" id="placeOrderForm" method="post" action="http://localhost/magento/rest/index/clearCart">
          <table>
        <tbody><tr>
                <td>userid:</td>
                <td><input name="userid" type="text"></td>
            </tr>

              <td></td>
              <td></td>
            </tr>
          </tbody></table>
          <br>
          <br>
          <br>
      <input type="submit" value="submit"/>
        </form>
      </div>

<!-- ====================================================================== removeCartItem ============================================================================================== -->

    <div class="all" id="removeCartItem" style="display: none;">
        <form name="apiform" id="placeOrderForm" method="post" action="http://localhost/magento/rest/index/removeCartItem">
          <table>
        <tbody><tr>
                <td>userid:</td>
                <td><input name="userid" type="text"></td>
            </tr>

            <tr>
                <td>itemid:</td>
                <td><input name="itemid" type="text"></td>
            </tr>

              <td></td>
              <td></td>
            </tr>
          </tbody></table>
          <br>
          <br>
          <br>
      <input type="submit" value="submit"/>
        </form>
      </div>  

<!-- ====================================================================== updateCartItem ============================================================================================== -->

    <div class="all" id="updateCartItem" style="display: none;">
        <form name="apiform" id="placeOrderForm" method="post" action="http://localhost/magento/rest/index/updateCartItem">
          <table>
        <tbody><tr>
                <td>userid:</td>
                <td><input name="userid" type="text"></td>
            </tr>

            <tr>
                <td>itemid:</td>
                <td><input name="itemid" type="text"></td>
            </tr>

            <tr>
                <td>quantity:</td>
                <td><input name="quantity" type="text"></td>
            </tr>

              <td></td>
              <td></td>
            </tr>
          </tbody></table>
          <br>
          <br>
          <br>
      <input type="submit" value="submit"/>
        </form>
      </div> 

<!-- ============================================================= fetchAllProcessingOrders =================================================================== -->

    <div class="all" id="fetchAllProcessingOrders" style="display: none;">
        <form name="apiform" id="placeOrderForm" method="post" action="http://localhost/magento/rest/index/fetchAllProcessingOrders">
          <table>
        <tbody><!-- <tr>
                <td>userid:</td>
                <td><input name="userid" type="text"></td>
            </tr> -->

              <td></td>
              <td></td>
            </tr>
          </tbody></table>
          <br>
          <br>
          <br>
      <input type="submit" value="submit"/>
        </form>
      </div>

<!-- ============================================================= fetchAllProcessingOrders =================================================================== -->

    <div class="all" id="createShipment" style="display: none;">
        <form name="apiform" id="placeOrderForm" method="post" action="http://localhost/magento/rest/index/createShipment">
          <table>
        <tbody><tr>
                <td>orderid:</td>
                <td><input name="orderid" type="text"></td>
            </tr>
            <tr>
                <td>carriercode:</td>
                <td><input name="carriercode" type="text"></td>
            </tr>
            <tr>
                <td>couriertitle:</td>
                <td><input name="couriertitle" type="text"></td>
            </tr>
            <tr>
                <td>trackingnumber:</td>
                <td><input name="trackingnumber" type="text"></td>
            </tr>

              <td></td>
              <td></td>
            </tr>
          </tbody></table>
          <br>
          <br>
          <br>
      <input type="submit" value="submit"/>
        </form>
      </div>                

	</td>
  </tr>
  </tbody></table>

</body></html>
