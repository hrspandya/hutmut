<?php
    $base_url = $this->config->config['base_url'];
    $this->load->helper('form');
?>


<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8"><meta name="Description" content="HutMut">
<meta name="Keywords" content="hut mut, brand, home, agent, location">

<title>HutMut: Agent Sign In</title>
<link rel="stylesheet" href= "<?= $base_url ?>css/hutmut.css" media="screen">
<link href="<?= $base_url ?>css/css.css" rel="stylesheet" type="text/css">
<link href="<?= $base_url ?>css/main.css" rel="stylesheet" type="text/css">


</head>

<body>
<div class="wrapper">
<div class="containertop">
		<div id="header_top_section">
     		<div class="logo"><a href="#" title="HutMut"><img src="<?= $base_url ?>img/common/logo.png" alt="HutMut"></a></div>
		<div id="links">
            	<ul class="sf-menu">
              <li><a href="#" title="How It Works">For Buyers</a></li>
              <li><a href="#" title="For Agents">For Sellers</a></li>
              <li><a href="#" title="About Us">For Agents</a></li>
              <li><a href="#" title="HutMut"><img src="<?= $base_url ?>img/common/agent-login.png" alt="HutMut"></a></li>
          	</ul>
        </div><!--links ends-->
		</div><!--header_top_section ends-->


<div class="mainheader_image">
<img src="<?= $base_url ?>img/common/Agent-Sign-In-topbanner.png" alt="HutMut">
</div><!-- mainheader_image -->
</div>


<div class="subnav_bar">
    <div style="float:left;"><img src="<?= $base_url ?>img/common/buy-nav-lt.png" alt="HutMut"></div>
<!--    	<div class="subnav_bkg" style="float:left;">
                  <ul  class="sf-menu">
                  <li style="font-weight:bold; margin-left:18px;">BUY:</li>
                  <li><a href="#" title="How It Works">How It Works</a></li>
                  <li><a href="#" title="For Agents">For Agents</a></li>
                  <li><a href="#" title="About Us">About Us</a></li>
                </ul>
        </div>  -->
        <!--        <div class="subnav_bkg" style="float:left;">
        <div class="buynav-text">
        <span><strong>Sign Up:</strong> Spend a few minutes now to propel your career in real estate.</span></div>
        </div> -->

         <div class="subnav_bkg" style="float:left;">
        <div class="buynav-text">
       <!--  <span> --><strong>HutMut:</strong><span class="buynav-text-right">Take your real estate profession to the next level.</span></div>
        </div> 

    <div style="float:left;"><img src="<?= $base_url ?>img/common/buy-nav-rt.png" alt="HutMut"></div>
</div> <!-- subnav_bar -->



<div class="bodycontent">
    <div class="contentbox">
        <div class="rightbody">
        <div class="icon-rt"><span class="icon"></span><span class="heading">New to HutMut?</span></div> 
        <p>HutMut is a revolutionary new way to get highly-qualified leads to take your real estate profession to the next level.</p>

<p>Potential home buyers and sellers rely on HutMut as their unbiased, comprehensive source in selecting a Real Estate Agent.</p>

<p>Unlike other services:</p>
<ul>
    <li>We are completely free to sign up.  No start-up, monthly or hidden fees.</li>
    <li>You pay us only when you've closed a lead that we brought to you.</li>
    <li>You determine how much you want to rebate back to clients as a percentage of your commissions.</li>
    <li>We offer BuyMut®, a one-of-a-kind service that lets you help a 
buyer purchase a home without conducting research and touring open 
houses.</li>
</ul>
<span class="learnmoretext"><a href="#">Learn More</a></span>
</div>
        <div class="leftbody">

                <div class="title"><h2>Sign In</h2></div>
                <div class="title2"><span>Not a Partner Agent?</span> <a href="#">Join HutMut</a></div>

			<div class="headingline">&nbsp;</div> 
            
            <div class="signin"><!-- <span class="subtitle"> -->Use your Facebook account<!-- </span> --></div>
            <div class="facebook-big"><span class="btn"></span><span class="bluecolor"><a href="#">Sign in with Facebook!</a></span></div>  
            <div class="facebook-small"><span class="btn2"></span><span class="greycolor">Nancy Nam uses HutMut</span></div>
            <div class="facebook-small-img"><img src="<?= $base_url ?>img/common/facebook-img.png"></div>  
            <div class="horz-separator"></div> 

            <div class="facebook-big"><span class="useaccount">Or use your HutMut account</span><span class="bluecolor"><a href="#">(No HutMut account?</a>)</span></div>

<table border="0" cellpadding="0" cellspacing="0" width="90%">
  <tbody><tr>
    <td align="center" valign="top">

<?=form_open('login/index')?>
<table border="0" cellpadding="1" cellspacing="1" width="100%">
  
  <tbody><tr>
    <td><span class="style2"><?=form_label('Email', 'email')?></span><!-- <span class="style3">*</span> --></td>
  </tr>
  
  
  
  <tr>
    <td style="padding-bottom:5px;">
            <?PHP
                $email = array(
                'name'        => 'email',
                'id'          => 'email',
                'value'       => set_value('email'),
                'maxlength'   => '100',
                'size'        => '50',
                'style'       => 'width:200px;',
                'class'       => 's',
                //'placeholder' => 'Email'
                );

            ?>
            <?=form_input($email)?>
            
            <?=form_error('email', '<span class="err">', '</span>')?>
    </td>
    </tr>
  
  
  <tr>
    <td><span class="style2"><?=form_label('Password', 'password')?></span><!-- <span class="style3">*</span> --></td>
  </tr>
  <tr>
    <td style="padding-bottom:5px;">
            <?PHP
            $password = array(
                'name'        => 'password',
                'id'          => 'password',
                'value'       => set_value('user_pass'),
                'maxlength'   => '100',
                'size'        => '50',
                'style'       => 'width:200px;',
                'class'       => 's',  
                //'placeholder' => 'Password - 6 characters minimum'
                );

            ?>
            <?=form_password($password)?>
            <?=form_error('password', '<span class="err">', '</span>')?>
    </td>
    </tr>
  
  <tr>
    <td>
      <label>
      <input name="Signin" class="input-cbox" id="Signin" type="checkbox">
      Stay signed in</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</tbody></table>
        
        <input type="submit" value ="" class="signin-btn" style="border:0px; float:left; cursor: pointer;"/>
    <?=form_close();?>    
    </td>
  </tr>
  <tr>
    <td align="center" valign="top"></td>
  </tr>
</tbody></table>

            
<!--<div class="signin-btn"></div> -->
<div>
<p><a href="#" class="bluecolorsmall">Forgot your HutMut password?</a></p>
<p><span style="color:#838383;">By signing in, you agree to HutMut’s </span><a href="#" class="greycolorlinks">Statement of Integrity</a>, <a href="#" class="greycolorlinks">Terms and Conditions</a> and <a href="#" class="greycolorlinks">Privacy Policy</a>.</p>
</div>
      </div><!-- leftbody -->

    </div><!-- contentbox -->
</div><!-- bodycontent -->


<div class="bottomimg"></div>
</div><!-- wrapper -->

<div class="footer">
			<div class="wrapperbottom">
				<div class="header_top_sectionbottom">
<div>
                <div class="logobottom"><a href="#" title="HutMut"><img src="<?= $base_url ?>img/common/footer-logo.png"></a></div>

                <div class="linksbottom">
                    <ul>
                        <li><a href="#" title="Home">Home</a></li>
						<li>|</li>
                        <li><a href="#" title="How it Works">How it Works</a></li>
						<li>|</li>
                        <li><a href="#" title="Our Team">Our Team</a></li>
						<li>|</li>
                        <li><a href="#" title="What we do">What we do</a></li>
						<li>|</li>
                        <li><a href="#" title="FAQs">FAQs</a></li>
						<li>|</li>
                        <li><a href="#" title="Our Clients">Our Clients</a></li>
						<li>|</li>
                        <li><a href="#" title="Contact Us">Contact Us</a></li>
						<li>|</li>
                        <li><a href="#" title="Sitemap">Sitemap</a></li>
                    </ul>
                </div><!--linksbottom ends-->

<!--                <div class="followusbottom">Follow us!<br><a href="#" target="_blank"><img src="images/twitter.png"></a> <a href="#" target="_blank"><img src="images/facebook.png"></a> <a href="#" target="_blank"><img src="images/linked-in.png"></a></div> -->


				<div class="footer-col">
                	<ul>
                    	<li class="footer-row footer-icon-facebook"><a href="#" target="_blank" class="footer-icon-block footer-icon-social"><span class="footer-icon footer-icon-facebook"></span></a></li>
                    	<li class="footer-row footer-icon-twitter"><a href="http://www.cherryhue.com/hutmut/www.ggooo.com" target="_blank" class="footer-icon-block footer-icon-social"><span class="footer-icon footer-icon-twitter"></span></a></li>
                    	<li class="footer-row footer-icon-linkedin"><a href="#" target="_blank" class="footer-icon-block footer-icon-social"><span class="footer-icon footer-icon-linkedin"></span></a></li>
                    </ul>
                </div> 

</div>
                <div class="place">
                <a href="#">Arizona Real Estate Agents</a> | <a href="#">Atlanta Real Estate Agents</a> | <a href="#">Austin Real Estate Agents</a> | <a href="#">Boston Real Estate Agents</a> | <a href="#">Chicago Real Estate Agents</a> | <a href="#">Dallas Real Estate Agents</a> | <a href="#">Denver Real Estate Agents</a> | <a href="#">Las Vegas Real Estate Agents</a> | <a href="#">New York Real Estate Agents</a> | <a href="#">Oregon Real Estate Agents</a> | <a href="#">Philadelphia Real Estate Agents</a> | <a href="#">Sacramento Real Estate Agents</a> | <a href="#">Southern California Real Estate Agents</a> | <a href="#">San Francisco Real Estate Agents</a> | <a href="#">Seattle Real Estate Agents</a> | <a href="#">Washington, DC Real Estate Agents</a>
                </div>
<div class="copyright">© 2012 by HutMut. All rights reserved. California DRE #01234567</div>
</div><!--header_top_sectionbottom ends-->
</div><!--wrapperbottom ends-->
</div><!--footer ends-->

</body></html>