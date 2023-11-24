<?php include "include/header.php" ?>

      <!-- Main Body - Start
      ================================================== -->
      <main class="page_content">

        <!-- Register Section - Start
        ================================================== -->
        <section class="register_section section_space_lg">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col col-lg-5">
                <h1 class="register_heading text-center">Snehbandh Login</h1>
                <p class="register_heading_description text-center">
                  Please enter your Email & Password
                </p>
                <form action="#">
                  <div class="register_form signup_login_form">
                    <div class="form_item">
                      <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form_item">
                      <input type="password" name="password" placeholder="Your Password">
                    </div>
                    <div class="remenber_forget row mb-3 align-items-center justify-content-between">
                      <div class="col col-6">
                        <div class="checkbox_item mb-0">
                          <input id="checkbox_remenber" type="checkbox">
                          <label for="checkbox_remenber">Remenber me</label>
                        </div>
                      </div>
                      <div class="col col-6">
                        
                      </div>
                    </div>
                    <button type="submit" class="btn btn_dark mb-5">
                      <span>
                        <small>Login Now</small>
                        <small>Login Now</small>
                      </span>
                    </button>
                    <p class="mb-0 text-center">don't have an account? <a href="registration.php">Register Here</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        <!-- Register Section - End
        ================================================== -->
        <?php include "include/footer.php" ?>