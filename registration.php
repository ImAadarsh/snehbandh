<?php include "include/header.php" ?>

      <!-- Main Body - Start
      ================================================== -->
      <main class="page_content">

        <!-- Page Section - Start
        ================================================== -->
        <section class="page_banner">
          <div class="container">
            <div class="content_wrapper" style="background-image: url('assets/images/banner/page_banner_image.png');">
              <div class="row align-items-center">
                <div class="col col-lg-6">
                  <ul class="breadcrumb_nav unordered_list">
                    <li><a href="index.php">Home</a></li>
                    <li>Member Registeration</li>
                  </ul>
                  <h1 class="page_title">Member Registeration</h1>
                  <p class="page_description">
                  By accessing and using our platform, you agree to abide by our terms and conditions, ensuring a respectful and secure environment.
                  </p>
                 
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Page Section - End
        ================================================== -->

        <!-- Contact Section - Start
        ================================================== -->
        <section class="contact_section section_space_lg">
          <div class="container">
          <section class="register_section section_space_lg">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col col-lg-16">
                <h1 class="register_heading text-center">Snehbandh  Registeration</h1>
                <p class="register_heading_description text-center">
                  Already have account? <a href="login.php">Login</a>
                </p>
                <form action="#">
                  <div class="register_form signup_login_form">
                  <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">Name</label>
                      <input required type="name" name="name" placeholder="Your Full Name">
                    </div>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">Gender</label>
                      <select name="email" placeholder="Email">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                      </select>
                    </div>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">Looking For</label>
                      <select name="email" placeholder="Email">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
                    </div>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">Date of Birth</label>
                      <input required type="date" name="dob" placeholder="Your Full Name">
                    </div>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">Religion</label>
                      <input required type="text" name="religion" placeholder="Your Religion">
                    </div>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">Education</label>
                      <input required type="text" name="education" placeholder="Your Education">
                    </div>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">Occupation</label>
                      <input required type="text" name="occupation" placeholder="Your Occupation">
                    </div>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">Email</label>
                      <input required type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">Phone</label>
                      <input required type="text" name="phone" placeholder="Your Contact Number">
                    </div>
                    <h3 class="mb-4">Mental Health Information:</h3>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">Do you have a diagnosed mental health condition?</label>
                      <select name="email">
                        <option value="Depression">Depression</option>
                        <option value="Anxiety">Anxiety</option>
                        <option value="Bipolar Disorde">Bipolar Disorder</option>
                        <option value="Schizophrenia">Schizophrenia</option>
                        <option value="PTSD">PTSD</option>
                        <option value="other">Other</option>
                      </select>
                    </div>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">Briefly describe your mental health journey and any treatment or support you
have received</label>
                      <textarea  name="health" placeholder="Please Describe"></textarea>
                    </div>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">Profile Picture: (Upload a clear, recent photo of yourself)</label>
                      <input required type="file" name="profile" >
                    </div>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">City</label>
                      <input required type="text" name="location" placeholder="Your City">
                    </div>
                    <div class="form_item">
    <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_state" class="input required_title">Select your state:</label>
    <select name="state">
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
    </select>
</div>
<div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">Country</label>
                      <input required type="text" name="country" placeholder="Your Country">
                    </div>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">About Me: </label>
                      <textarea  name="health" placeholder="Please Describe">Share a brief introduction about yourself, your interests, and what you&#39;re
looking for in a partner</textarea>
                    </div>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">What qualities are you looking for in a partner?</label>
                      <select name="email">
                        <option value="Understanding and Empathetic">Understanding and Empathetic</option>
                        <option value="Similar Mental Health Challenges">Similar Mental Health Challenges</option>
                        <option value="Shared Interests">Shared Interests</option>
                        <option value="Open to Supportive of Mental Health Needs">Open to Supportive of Mental Health Needs</option>
                        <option value="Other">Other</option> 
                      </select>
                    </div>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">Desired Age Range in a Partner</label>
                      <input required type="number" min="18" placeholder="Age" max="100" name="partner_age" >
                    </div>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">Preferred Location for a Partner</label>
                      <input required type="text" placeholder="Location" name="partner_location" >
                    </div>
                    <div class="form_item">
                      <label style="font-size: 16.5px; padding-bottom: 7px; padding-left: 5px;" for="input required_name" class="input required_title">Profile Visibility: (Choose who can view your profile)</label>
                      <select name="email">
                        <option value="Everyone">Everyone</option>
                        <option value="Only registered users">Only registered users</option>
                        <option value="Only those I express interest In">Only those I express interest In</option>
                        
                        <option value="Other">Other</option> 
                      </select>
                    </div>
                    <div class="form_item">
   
    <input required type="checkbox" style="width: 15px; height: 15px; margin-right: 5px;"  name="check">
    <span style="display: inline-block; vertical-align: top;">-I certify that the information provided is accurate and complete. <a href="terms.php">Terms & conditions</a> <br>  <br>By filling out this registration form, you acknowledge that you are seeking a partner through
Snehsobti Matrimony and understand the nature of the platform. Your privacy and security
are our top priority, and we will do our best to provide a safe and supportive environment for
your journey to find love and companionship.</span>
</div>


                    <div class="form_item">
                      <input required type="password" name="createpassword" placeholder="Create Password">
                    </div>
                   
                    <button type="submit" class="btn btn_dark mb-5">
                      <span>
                        <small>Register Now</small>
                        <small>Click Now</small>
                      </span>
                    </button>

                    <p class="text-center">Or Login With</p>

                    <ul class="social_links unordered_list_center">
                      <li>
                        <a href="#">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-google"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
                 
          </div>
        </section>
        <!-- Contact Section - End
        ================================================== -->



<?php include "include/footer.php" ?>