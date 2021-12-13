<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F213462032614445" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F213462032614445" title="oEmbed Form">
<meta property="og:title" content="New Customer Registration Form" >
<meta property="og:url" content="https://form.jotform.com/213462032614445" >
<meta property="og:description" content="Please click the link to complete this form." >
<meta name="slack-app-id" content="AHNMASS8M">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021.svg">
<link rel="canonical" href="https://form.jotform.com/213462032614445" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>New Customer Registration Form</title>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5eb3b4ae85bd2e1e2966db96"/>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.29573" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.29573" />
<script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.29573" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.29573" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.29573" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.29573" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;

   JotForm.setConditions([{"action":[{"field":"9","visibility":"Show","id":"action_0_1579704830003"}],"id":"1579704830003","index":"0","link":"Any","priority":"0","terms":[{"field":"8","operator":"equals","value":"Other (Please specify...)"}],"type":"field"}]);
	JotForm.init(function(){
	/*INIT-START*/
      JotForm.setPhoneMaskingValidator( 'input_5_full', '(###) ###-####' );
      setTimeout(function() {
          $('input_6').hint('ex: email@yahoo.com');
       }, 20);
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"clickTo","qid":"1","text":"Customer Details:","type":"control_head"},{"name":"submit","qid":"2","text":"Submit","type":"control_button"},{"name":"fullName3","qid":"3","text":"Full Name","type":"control_fullname"},null,{"name":"phoneNumber5","qid":"5","text":"Phone Number","type":"control_phone"},{"name":"email6","qid":"6","subLabel":"example@example.com","text":"E-mail","type":"control_email"},null,{"name":"howDid8","qid":"8","text":"How did you hear about us?","type":"control_dropdown"},null,null,null,null,null,null,{"description":"","name":"address","qid":"15","text":"Address","type":"control_address"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"clickTo","qid":"1","text":"Customer Details:","type":"control_head"},{"name":"submit","qid":"2","text":"Submit","type":"control_button"},{"name":"fullName3","qid":"3","text":"Full Name","type":"control_fullname"},null,{"name":"phoneNumber5","qid":"5","text":"Phone Number","type":"control_phone"},{"name":"email6","qid":"6","subLabel":"example@example.com","text":"E-mail","type":"control_email"},null,{"name":"howDid8","qid":"8","text":"How did you hear about us?","type":"control_dropdown"},null,null,null,null,null,null,{"description":"","name":"address","qid":"15","text":"Address","type":"control_address"}]);}, 20); 
</script>
</head>
<body>

<?php
    $firstname = $lastname = "";
    $street = $state = "";
    $postal = $cpnum =  "";
    $email = $select = "";
    $date = "";
    $city = "";
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if (empty($_POST["firstname"])){
      
          echo "<script>alert('Firstname is required...')</script>";
      }else {
          $firstname = test_input($_POST["firstname"]);
      }
      if (empty($_POST["lastname"])){
    
          echo "<script>alert('Lastname is required...')</script>";
      }else {
          $lastname = test_input($_POST["lastname"]);
      }
      if (empty($_POST["street"])){
     
        echo "<script>alert('Street is required...')</script>";
      }else {
          $street = test_input($_POST["street"]);
      }
      if (empty($_POST["state"])){
     
        echo "<script>alert('State is required...')</script>";
       }else {
        $state = test_input($_POST["state"]);
       } 
       if (empty($_POST["postal"])){

        echo "<script>alert('Postal is required...')</script>";
       }else {
        $postal = test_input($_POST["postal"]);
       } 
       if (empty($_POST["cpnum"])){
      
        echo "<script>alert('Phone Number is required...')</script>";
       }else {
        $cpnum = test_input($_POST["cpnum"]);
       } 
       if (empty($_POST["email"])){
        
        echo "<script>alert('Email is required...')</script>";
       }else {
        $email = test_input($_POST["email"]);
       } 
       if (empty($_POST["select"])){
      
        echo "<script>alert('where you found us is required...')</script>";
       }else {
        $select = test_input($_POST["select"]);
       }   
       if (empty($_POST["city"])){
       
        echo "<script>alert('city is required...')</script>";
       }else {
        $city = test_input($_POST["city"]);
       }
    
  }
   
    function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
?>

<form class="jotform-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <input type="hidden" name="formID" value="213462032614445" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <style>
      .form-all:before { background: none;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Customer Details:
            </h1>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_3">
        <label class="form-label form-label-top form-label-auto" id="label_3" for="first_3">
          Full Name
          <span class="form-required">
          </span>
        </label>
        <div id="cid_3" class="form-input-wide jf-required" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_3" name="firstname" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_3 given-name" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" required="" />
              <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_3" name="lastname" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_3 family-name" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" required="" />
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_address" id="id_15">
        <label class="form-label form-label-top form-label-auto" id="label_15" for="input_15_addr_line1"> Address </label>
        <div id="cid_15" class="form-input-wide" data-layout="full">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_15_addr_line1" name="street" class="form-textbox form-address-line" data-defaultvalue="" autoComplete="section-input_15 address-line1" value="" data-component="address_line_1" aria-labelledby="label_15 sublabel_15_addr_line1" required="" />
                  <label class="form-sub-label" for="input_15_addr_line1" id="sublabel_15_addr_line1" style="min-height:13px" aria-hidden="false"> Street Address </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_15_city" name="city" class="form-textbox form-address-city" data-defaultvalue="" autoComplete="section-input_15 address-level2" value="" data-component="city" aria-labelledby="label_15 sublabel_15_city" required="" />
                  <label class="form-sub-label" for="input_15_city" id="sublabel_15_city" style="min-height:13px" aria-hidden="false"> City </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_15_state" name="state" class="form-textbox form-address-state" data-defaultvalue="" autoComplete="section-input_15 address-level1" value="" data-component="state" aria-labelledby="label_15 sublabel_15_state" required="" />
                  <label class="form-sub-label" for="input_15_state" id="sublabel_15_state" style="min-height:13px" aria-hidden="false"> State / Province </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_15_postal" name="postal" class="form-textbox form-address-postal" data-defaultvalue="" autoComplete="section-input_15 postal-code" value="" data-component="zip" aria-labelledby="label_15 sublabel_15_postal" required="" />
                  <label class="form-sub-label" for="input_15_postal" id="sublabel_15_postal" style="min-height:13px" aria-hidden="false"> Postal / Zip Code </label>
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_phone" id="id_5">
        <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5_full">
          Phone Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="tel" id="input_5_full" name="cpnum" data-type="mask-number" class="mask-phone-number form-textbox validate[required, Fill Mask]" data-defaultvalue="" autoComplete="section-input_5 tel-national" style="width:310px" data-masked="true" value="" placeholder="(000) 000-0000" data-component="phone" aria-labelledby="label_5" required="" />
            <label class="form-sub-label is-empty" for="input_5_full" id="sublabel_5_masked" style="min-height:13px" aria-hidden="false">  </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_6">
        <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6"> E-mail </label>
        <div id="cid_6" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="email" id="input_6" name="email" class="form-textbox validate[Email]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="ex: email@yahoo.com" data-component="email" aria-labelledby="label_6 sublabel_input_6" />
            <label class="form-sub-label" for="input_6" id="sublabel_input_6" style="min-height:13px" aria-hidden="false"> example@example.com </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_8">
        <label class="form-label form-label-top form-label-auto" id="label_8" for="input_8">
          How did you hear about us?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_8" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="input_8" name="select" style="width:310px" data-component="dropdown" required="">
            <option value=""> Please Select </option>
            <option value="Newspaper"> Newspaper </option>
            <option value="Internet"> Internet </option>
            <option value="Magazine"> Magazine </option>
            <option value="Other (Please specify...)"> Other (Please specify...) </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="left" class="form-buttons-wrapper form-buttons-left   jsTest-button-wrapperField">
            <button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit
            </button>
          </div>
        </div>
      </li>
      <?php
    echo "<h4>Your entered Informations :</h4>". " ";
    echo "<br><br>";
    echo "Fullname: ". $firstname . " " . $lastname;
    echo "<br><br>";
    echo "Street: ". $street;
    echo "<br><br>";
    echo "City: ". $city;
    echo "<br><br>";
    echo "State: ".$state;
    echo "<br><br>";
    echo "Postal: ". $postal;
    echo "<br><br>";
    echo "Phone Number: ". $cpnum;
    echo "<br><br>";
    echo "Email Address: ". $email;
    echo "<br><br>";
    echo "How did you hear about us?: ".$select;
    echo "<br><br>";
  
?>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by Jotform";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="213462032614445" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='213462032614445'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "213462032614445-213462032614445";
}
  </script>
  <div class="formFooter-heightMask">
  </div>
  <div class="formFooter f6 branding21">
    <div class="formFooter-wrapper formFooter-leftSide">
      <a href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=213462032614445&utm_content=jotform_logo&utm_campaign=powered_by_jotform_le" target="_blank" class="formFooter-logoLink"><img class="formFooter-logo" src="https://cdn.jotfor.ms/assets/img/logo2021/jotform-logo-white.svg" alt="Jotform Logo" style="height: 44px;"></a>
    </div>
    <div class="formFooter-wrapper formFooter-rightSide">
      <span class="formFooter-text">
        Now create your own Jotform - It's free!
      </span>
      <a class="formFooter-button" href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=213462032614445&utm_content=jotform_button&utm_campaign=powered_by_jotform_le" target="_blank">Create your own Jotform</a>
    </div>
  </div>
</form></body>
</html>
<script type="text/javascript">JotForm.ownerView=true;</script><script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.29573"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.29573"></script>
