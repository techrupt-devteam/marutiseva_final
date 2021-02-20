<?php    
$title="Maruti Insurance | Maruti Suzuki Showroom in Nashik, Nagpur | SEVA";	
?>
<?php 
 $pgDesc="Choose the best Maruti Insurance from SEVA Maruti Suzuki ARENA Car Showroom in Nashik, Nagpur, Nanded, Dhule, Wardha, Nandurbar. A Complete Car Insurance";
 $pgKeywords="Maruti Suzuki, Car Price list, Maruti Suzuki Insurance, Maruti Service Center, Maruti Suzuki Finance, services, service center, Maruti Suzuki Showroom, Nashik, Nagpur, car service, maruti suzuki service center, Maruti Insurance, car Insurance, Vehicle Insurance, Accident Insurance, wardha, nanded, dhule, nandurbar";
 include 'header.php'; 
?>
<style type="text/css">
.parsley-required {
	color: red;
}
.parsley-type {
	color:red;
}
.parsley-pattern {
	color: red;
}
.parsley-range {
	color: red;
}
.parsley-min {
	color: red;
}
</style>
<section class="page-title  v3 clearfix parallax  parallax5" style="background-position: 50% -136px;background-image: url(assets/images/icon/car-insurance.jpeg);">

<div class="overlay"></div>
<div class="container">
  <div class="wrap-page-title">
    <div class="breakcrums text-center v2">
      <ul>
        <li><a href="#" class="hover-text">Home &nbsp;&nbsp; : : </a></li>
        <li><a href="value-added-services.php" class="hover-text">VAS &nbsp;&nbsp; </a></li>
      </ul>
    </div>
    <div class="page-title-heading text-center v2">
      <h1><a href="#" class="hover-text">Car Insurance</a></h1>
    </div>
  </div>
</div>
</section>
<main>
  <section class="feature-car mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title mb-4"> <span>Maruti Insurance</span>
            <h2>insurance </h2>
            <div class="separator"></div>
          </div>
        </div>
      </div>
    <div class="formsection ">
      <div class="row">
        <div class="mt-2 mb-2">
          <form action="send_mail_insurance.php" method="post" data-parsley-validate="parsley" onSubmit="return submitUserForm();">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="inputAddress">Full Name<span class="parsley-required" style="color:red">*</span></label>
                <input type="text" class="form-control" id="inputAddress" name="full_name" placeholder="Full your Name" required data-parsley-pattern="^[a-zA-Z.,/ $()]+$" data-parsley-pattern-message="Name should be in text only" data-parsley-required-message="Please Enter Name">
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress2">Email <span class="parsley-required" style="color:red">*</span></label>
                <input type="text" class="form-control" id="inputAddress2" name="email" placeholder="Enter your Email " required data-parsley-type="email" data-parsley-required-message="Please Enter Email Id">
              </div>
              <div class="form-group col-md-4">
                <label for="inputAddress2">Phone No. <span class="parsley-required" style="color:red">*</span></label>
                <input type="text" class="form-control" id="inputAddress2" name="phone_no" placeholder="Enter your Phone No." required data-parsley-type="digits" maxlength="10" data-parsley-pattern=^[6-9]\d{9}$ data-parsley-pattern-message="Mobile no should starts with 6/7/8/9 AND 10 Digit" data-parsley-required-message="Please Enter Contact No">
              </div>
              <div class="form-group col-md-4">
                <label for="inputAddress2">Select City<span class="parsley-required" style="color:red">*</span></label>
                <select class="form-control" name="city"  aria-required="true" aria-invalid="false" required="true">
                  <option value="Nagpur">Nagpur</option>
                  <option value="Wardha">Wardha</option>
                  <option value="Nanded">Nanded</option>
                  <option value="Dhule">Dhule</option>
                  <option value="Nandurbar">Nandurbar</option>
                  <option value="Nashik">Nashik</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputAddress2">For Insurance<span class="parsley-required" style="color:red">*</span></label>
                <select class="form-control" name="for_insurance"  aria-required="true" aria-invalid="false" required="true">
                  <option value="New">New</option>
                  <option value="Renew">Renew</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputAddress2">Vehicle Registration<span class="parsley-required" style="color:red">*</span> </label>
                <input type="text" class="form-control" name="reg_no" id="" placeholder="Vehicle Registration" required data-parsley-required-message="Please enter your vehicle no ">
              </div>
            
              <div class="form-group col-md-8 mt-4">
                <div class="input-group">
                  <div class="input-group-prepend"> <span class="input-group-text">Your Message</span> </div>
                  <textarea class="form-control" name="s_message" aria-label="With textarea"></textarea>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <div class="g-recaptcha" data-sitekey="6LcuUwEVAAAAAOF4b4IxvoXTo3TN09aaviVw2xaw" data-callback="verifyCaptcha"></div>
                <div id="g-recaptcha-error"></div>
              </div>
              <div class="form-group col-md-12">
                <div class="custom-control custom-checkbox form-check">
                  <input type="checkbox" class="custom-control-input form-check-input" name="conditions" required id="exampleCheck1" data-parsley-required-message="Please indicate that you accept the Terms and Conditions">
                  <label class="custom-control-label form-check-label" for="exampleCheck1"> I Agree With <a href="disclaimer.php" style="color: blue">Terms and Conditions.</a><span class="red">*</span></label>
                </div>
              </div>
            </div>
            <input type="submit" name="submit" class="button button-purple button-180 triggerBookAShowRoomVisitButton" value="Submit">
          </form>
        </div>

</div>
        
      </div>
      <div class="row">
        <div class="my-5 pb-4">
          <p class="alert alert-info text-justify">Maruti Insurance is the Insurance Broking entity licensed by IRDA, which offers motor insurance products from leading insurance companies. They address all your car insurance needs on a
            single-window concept and are trusted for their customer-centric approach and services. Maruti Insurance offers specialised motor insurance products from leading insurance companies like National Insurance, New India Assurance, ICICI Lombard, IFFCO Tokio, Royal Sundaram and Bajaj Allianz.</p>
          <p>With Maruti Insurance, you get near cash-less post-accident repairs at the vast service network of Maruti Suzuki service stations across the country. Maruti Suzuki service centres, equipped
            with state-of-the-art facilities and infrastructure, ensure quality repairs with Genuine Maruti parts fitted by trained technicians.</p>
          <p>Maruti Insurance also ensures excellent customer service with the utmost fairness and transparency available to you across the country. It is no wonder then, that more than 90% of customers buying a Maruti Suzuki, prefer to buy a Maruti Insurance policy for their car.</p>
          <div class="my-4">
            <h4>Advantages of Maruti Insurance</h4>
            <div class="my-3">
              <h6> Near cash-less accident repairs</h6>
              <p class=" text-justify"> You can avail of near cash-less accident repairs across the vast Maruti Suzuki service centre network in the country. Your vehicle will be repaired at a Maruti Suzuki workshop, and the cost
                incurred is payable by the Insurance company and the entire amount will not be charged to you. Just pay for the compulsory excess and applicable depreciation (as per motor tariff) and walk
                away with your repaired vehicle. The rest is settled directly between the repairer and the insurance company.</p>
            </div>
            <div class="my-3">
              <h6> Seamless Pan-India services</h6>
              <p class=" text-justify"> You have access to Maruti Insurance services across India, at all Maruti authorised dealers. Think of it as 'free Roaming' on your phone network! These services include buying a new policy, effecting renewals, endorsement issuance and claim settlement.</p>
            </div>
            <div class="my-3">
              <h6>Hassle-free, fair and transparent claim settlement</h6>
              <p class=" text-justify">Maruti Insurance ensures a customer-oriented, fair settlement process. Whatever is payable by standards, is always paid by the insurance company and the customer does not have to bear
                any undue differential cost of repair or replacement. No hassles of follow-ups with surveyors or insurance companies. No depositing of salvage with the insurance company. No compromise on the quality of repair and replacement parts!</p>
            </div>
            <div class="my-3">
              <h6>High-quality repairs at authorised dealer workshops</h6>
              <p class=" text-justify">With Maruti Insurance, you don’t compromise on the quality of repairs as you are not at the mercy of a roadside workshop. Your damaged vehicle will be repaired at a Maruti-authorised dealer workshop that is equipped with the best facilities and state of the art infrastructure. Be assured of high-quality repairs with genuine Maruti spare parts, fitted by trained technicians.</p>
            </div>
            <div class="my-3">
              <h6>Dealer-assisted towing facility</h6>
              <p class=" text-justify"> Towing assistance is provided for getting your damaged vehicle to a dealer workshop in case it is immobile after an accident. This service is available free of cost, up to Rs 1,500. This limit can be increased at the customer's preference by paying additional premium at the time of policy issuance.</p>
            </div>
            <div class="my-3">
              <h6> Easy transfer of no-claim bonus</h6>
              <p class=" text-justify"> If you are renewing with Maruti Insurance for the first time, the entitled No Claim Bonus (NCB) is easily transferred to your Maruti Insurance policy at the time of renewal.</p>
            </div>
            <div class="my-3">
              <h6>Instant policy issuance</h6>
              <p class=" text-justify">You get your policy document instantly at the time of purchase of your car, and can also download it from the official Maruti Insurance website. You can also opt for it to be delivered to
                your doorstep, and you do not have to wait weeks or months before you have your original policy document in your hands!</p>
            </div>
          </div>
        </div>
    </div>
    </div>  
  </section>
  
  </div>
</main>
<script src='https://www.google.com/recaptcha/api.js'></script> 
<script src="assets/js/jquery1.12.0-min.js"></script> 
<script src="assets/js/lightbox.js"></script> 
<script src="assets/js/parsley.js"></script> 
<script>
// document.getElementById('g-recaptcha-error').innerHTML = 'block';
function submitUserForm() {
    var response = grecaptcha.getResponse();
    // alert(response);die();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha() {
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
</script>
<?php  
require_once('footer.php');
?>
