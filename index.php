
<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE >



<meta property="og:title" content="ODU COVID STUDY" >

<title>ODU COVID STUDY</title>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.22637" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.22637" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.22637" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.22637" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.22637" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.22637" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.22637" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #555555;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .login-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}
.topnav input[type=password] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}


.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active">ODU Covid Study</a>
  <!-- <a href="#contact">Register</a> -->
  <div class="login-container">
    <form action="login.php" method = "post">
      <input type="text" placeholder="Username" name="username">
      <input type="password" placeholder="Password" name="psw">
      <button type="submit">Login</button>
    </form>
  </div>
</div>


<form class="jotform-form" action="database_connection.php" method="post" name="form_210108899869068" id="210108899869068" accept-charset="utf-8" >
  <input type="hidden" name="formID" value="210108899869068" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
             Express your interest
            </h1>
          </div>
        </div>
      </li>
      <li id="cid_3" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_3" class="form-header" data-component="header">
              ODU Covid Study
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_4">
        <label class="form-label form-label-top form-label-auto" id="label_4" for="first_4">
          Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_4" class="form-input-wide jf-required" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_name" name="first_name" class="form-textbox validate[required]" size="10" value="" data-component="first" aria-labelledby="label_4 sublabel_4_first" required="" />
              <label class="form-sub-label" for="first_4" id="sublabel_4_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_name" name="last_name" class="form-textbox validate[required]" size="15" value="" data-component="last" aria-labelledby="label_4 sublabel_4_last"  />
              <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_5">
        <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5">
          Email
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="email" id="email" name="email" class="form-textbox validate[required, Email]" style="width:310px" size="310" value="" data-component="email" aria-labelledby="label_5 sublabel_input_5" required="" />
            <label class="form-sub-label" for="input_5" id="sublabel_input_5" style="min-height:13px" aria-hidden="false"> example@example.com </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_10">
        <label class="form-label form-label-top form-label-auto" id="label_10" for="input_10">
          Select your Gender
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_10" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_10" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_10_0" name="gender" value="Male" required="" />
              <label id="label_input_10_0" for="input_10_0"> Male </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_10_1" name="gender" value="Female" required="" />
              <label id="label_input_10_1" for="input_10_1"> Female </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_10_2" name="gender" value="Other" required="" />
              <label id="label_input_10_2" for="input_10_2"> Other </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_number" id="id_11">
        <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11">
          Age
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_11" class="form-input-wide jf-required" data-layout="half">
          <input type="number" id="age" name="age" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:310px" size="310" value="" placeholder="ex: 23" data-component="number" aria-labelledby="label_11" required="" step="any" maxlength = "3"/>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_phone" id="id_8">
        <label class="form-label form-label-top form-label-auto" id="label_8" for="input_8_full">
          Phone Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_8" class="form-input-wide jf-required" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="number" id="phone" name="phone" data-type="mask-number" class="mask-phone-number form-textbox validate[required, Fill Mask]" style="width:310px" data-masked="true" value="" placeholder="(000) 000-0000" data-component="phone" aria-labelledby="label_8 sublabel_8_masked" required="" maxlength="10" />
            <label class="form-sub-label" for="input_8_full" id="sublabel_8_masked" style="min-height:13px" aria-hidden="false"> Please enter a valid phone number. </label>
          </span>
        </div>
      </li>
      <input type="hidden" name="submission_id" value="submission_id" />
      <li class="form-line" data-type="control_textarea" id="id_9">
        <label class="form-label form-label-top form-label-auto" id="label_9" for="input_9"> Please enter your interest to join the study </label>
        <div id="cid_9" class="form-input-wide" data-layout="full">
          <textarea id="message" class="form-textarea" name="message" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_9"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit
            </button>
            <!-- <button type="button" onclick="foo()">Click Me</button> -->
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
     function foo () {
      $.ajax({
        url:"submission_via_postman.php", //the page containing php script
        type: "POST", //request type
        success:function(result){
         alert(result);
       }
     });
 }
  </script>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by JotForm";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="210108899869068" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='210108899869068'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "210108899869068-210108899869068";
}
  </script>
  
</form>

</body>
</html>
<script type="text/javascript">JotForm.ownerView=true;</script><script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.22637"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.22637"></script>
