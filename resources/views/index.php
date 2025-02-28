<?php  
  include "includes/header.php";
?> 

<link rel="stylesheet" href="<?=$baseurl?>static/styles/index.css">
<!-- start hero section --> 
  <section class="hero">
    <div class="container-fluid px-4 hero-container">
        <div class="row justify-content-evenly align-items-center">
          <div class="col-md-5">
              <small>JPTS RESULT PORTAL</small>
              <h1 class="text-uppercase">Track <span>your Academic</span> Progress </h1>
              <p>
                Track your results and know your academic progress with ease. Stay updated on your performance and achieve your academic goals. Our portal provides you with detailed insights into your academic journey, helping you identify strengths and areas for improvement. Stay informed and take control of your educational success with our comprehensive tracking system.
              </p>
              <a href="/login" class="btn">CHECK RESULT</a>
          </div>
          <div class="col-md-5">
              <img src="<?=$baseurl?>static/images/image2.png" alt="Image of college graduate" class="img-fluid">
          </div>
        </div>
    </div>
  </section>
<!-- End hero section -->


<!-- Qualities section -->
  <section class="quality">
    <div class="container py-4">
        <div class="text-center my-4"><h4 class="examrule">EXAM RULES</h4></div>
        <div class="row">
          
          <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4 examcard">
                    <img src="<?=$baseurl?>static/images/jpts5.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title text-purple">KNOW YOUR EXAM DATES</h5>
                      <p class="card-text examcardtext">Stay Informed and avoid last minuited suprises, check your department notice board or your school exam portal for the complete exam timetable. Set reminder for each exam day to stay on track</p>
                      <p class="card-text"><small class="text-body-secondary">JPTS / ISQ Exam <?=date("m-Y")?></small></p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4 examcard">
                    <img src="<?=$baseurl?>static/images/jpts6.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title text-purple">YOU'VE GOT THIS</h5>
                      <p class="card-text examcardtext">Every Effort You put in today is paving the way for a brighter tommorow Believe in yourself, Stay consistent and finish strong</p>
                      <p class="card-text"><small class="text-body-secondary">JPTS / ISQ Exam <?=date("m-Y")?></small></p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4 examcard">
                    <img src="<?=$baseurl?>static/images/jpts7.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title text-purple">STAY CALM, STAY FOCUSED</h5>
                      <p class="card-text examcardtext">Exams can be stressful, but dont let anxiety win. Ensure you get 7-8 hours of sleep, Practice deep breating, stay hydrated and eat brain boosing meals</p>
                      <p class="card-text"><small class="text-body-secondary">JPTS / ISQ Exam <?=date("m-Y")?></small></p>
                    </div>
                  </div>
                </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4 examcard">
                    <img src="<?=$baseurl?>static/images/jpts8.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title text-purple">AVOID EXAM MALPRACTICE</h5>
                      <p class="card-text examcardtext">Adhere strictly to JPTS/ISQ examinatos policies. Arive at the venue 30mins before the start time, bring your student ID and any required materials =, Keep your gadget away unless allowed</p>
                      <p class="card-text"><small class="text-body-secondary">JPTS / ISQ Exam <?=date("m-Y")?></small></p>
                    </div>
                  </div>
                </div>
            </div>
          </div>

        </div>
    </div>
  </section>
<!-- End Qualities Section -->


<!-- Need help section  -->
 <section class="need-help p-4">
    <div class="helps">
      <h1>Get Ready For <span>Exam Success</span></h1>
      <p>Your Success is our priority and we will help you with all you need to excel during any exam period</p>
      <a href="/login" class="btn">Check Result</a>
    </div>
 </section>
<!-- End Need Help Section -->


<!-- Last Section -->
<section class="lastsection py-5">
  <div class="container">
    <div class="row justify-content-evenly align-items-center">
      <div class="col-md-4">
          <h1>GOOD LUCK <span class="text-purple">FROM ALL OF US </span></h1>
          <p>We the co-orrdnator, lecturers and staffs, we are rooting for your success, Trust the process, give your best and remember, we are here to help you.</p>
          <a href="/login" class="btn">Check Result</a>
      </div>
      <div class="col-md-4 last-section-img">
          <img src="<?=$baseurl?>static/images/jpts3.jpg" alt="Image of Jpts Designs">
      </div>
    </div>
  </div>
</section>
<!-- End Last Secton -->


<?php 
  include_once "includes/footer.php";
?>