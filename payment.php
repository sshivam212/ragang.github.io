<form name="frm" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
    <div style="padding-left:250px;">
         <input type="hidden" name="cmd" value="_xclick" />
         <input type="hidden" name="business" value="MY_BUSINESS_MAIL_ID" />
         <input type="hidden" name="amount" value="<?php echo $amount; ?>" />
         <input type="hidden" name="no_shipping" value="1" />
         <input type="hidden" name="no_note" value="1" />
         <input type="hidden" name="currency_code" value="USD" />
         <input type="hidden" name="lc" value="USD" />
         <input type="hidden" name="item_name" value="Registration" />
         <input type="hidden" name="bn" value="PP-BuyNowBF" />
         <input type="hidden" name="return" value="<?php echo FRONT_END_PATH;?>payment-over.php?user_id=<?php echo $username;?>&req_amt=<?php echo $amount; ?>&role_name=<?php echo $role;?>&inramnt=<?php echo $inrAmnt; ?>" />
         <input type="hidden" name="rm" value="2" />
         <input type="submit"  border="0" name="submit" value="Order" alt="Make payments with PayPal - it's fast, free and secure!" class="additional_height button" title="Make payments with PayPal - it's fast, free and secure!" />
         <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" /> 
     </div>
</form> 