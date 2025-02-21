<?php include"includes/header.php"; ?>



<link rel="stylesheet" href="css/index_responsive.css">


<style>
    .collapsible-content {
      overflow: hidden;
      max-height: 3em; /* Collapsed height */
      line-height: 1.5em;
      text-overflow: ellipsis;
      transition: max-height 0.3s ease;
    }

    .toggle-button {
      color: #007bff;
      cursor: pointer;
      text-decoration: underline;
      margin-top: 10px;
      display: inline-block;
    }

    .toggle-button:hover {
      text-decoration: none;
    }
  </style>

  <!-- <style>
    .footer {
    position: relative;
    margin-top: 45px;
    padding-top: 90px;
    /* background: #20212B;  by default theme color*/
    background: #023660;
    /* logo color  */
}

.footer .footer-contact,
.footer .footer-link,
.footer .footer-newsletter {
    position: relative;
    margin-bottom: 45px;
    color: #ffffff;
}

.footer .footer-contact h2,
.footer .footer-link h2,
.footer .footer-newsletter h2 {
    margin-bottom: 30px;
    font-size: 22px;
    font-weight: 700;
    color: #f9a230;
}

.footer .footer-link a {
    display: block;
    margin-bottom: 10px;
    color: #ffffff;
    transition: .3s;
}

.footer .footer-link a::before {
    position: relative;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    margin-right: 10px;
}

.footer .footer-link a:hover {
    color: #f9a230;
    letter-spacing: 1px;
}

.footer .footer-contact p i {
    width: 25px;
}

.footer .footer-social {
    position: relative;
    margin-top: 20px;
}

.footer .footer-social a {
    width: 40px;
    height: 40px;
    padding: 6px 0;
}

.footer .footer-social a {
    margin-top: 5px;
}

.footer .footer-newsletter form {
    position: relative;
    width: 100%;
}

.footer .footer-newsletter input {
    margin-bottom: 15px;
    height: 60px;
    border: none;
    border-radius: 0;
}

.footer .footer-newsletter label {
    margin-top: 5px;
    color: #777777;
    font-size: 14px;
    letter-spacing: 1px;
}

.footer .footer-newsletter .btn.btn-custom {
    width: 100%;
    padding: 15px 0;
}

.footer .copyright {
    padding: 0 30px;
}

.footer .copyright .row {
    padding-top: 25px;
    padding-bottom: 25px;
    border-top: 1px solid rgba(256, 256, 256, .1);
}

.footer .copyright p {
    margin: 0;
    color: #999999;
}

.footer .copyright .col-md-6:last-child p {
    text-align: right;
}

.footer .copyright p a {
    color: #ffffff;
}

.footer .copyright p a:hover {
    color: #f9a230;
}

@media (max-width: 767.98px) {
    .footer .copyright p,
    .footer .copyright .col-md-6:last-child p {
        margin: 5px 0;
        text-align: center;
    }
}

  </style> -->
       

        <!-- Carousel Start -->
        <div class="containertwo">
            <div class="arrow arrow-left"><i class="fas fa-chevron-circle-left"></i></div>
            <video autoplay muted playsinline>
                <source src="https://videos.pexels.com/video-files/12851353/12851353-uhd_2560_1440_60fps.mp4" type="video/mp4" />
              </video>
            <video autoplay muted playsinline>
                <source src="https://videos.pexels.com/video-files/8190074/8190074-uhd_2732_1440_30fps.mp4" type="video/mp4" />
              </video>
            <video autoplay muted playsinline>
                <source src="https://videos.pexels.com/video-files/5598970/5598970-uhd_2560_1440_24fps.mp4" type="video/mp4" />
              </video>
           

            <div class="arrow arrow-right"><i class="fas fa-chevron-circle-right"></i>
            </div>
            <div class="dots">
              <div class="dot">
                <i class="far fa-dot-circle"></i>
              </div>
              <div class="dot">
                <i class="far fa-circle"></i>
              </div>
              <div class="dot">
                <i class="far fa-circle"></i>
              </div>
            </div>
          </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="img/21.jpg"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>About Us</p>
                            <h2>A Journey Towards Inclusive Human Development</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                    We are a fast-growing non-profit dedicated to designing and implementing inclusive development programs for a more equitable and sustainable world. Our mission is to support vulnerable children, youth, women, and communities through innovative solutions, policy analysis, technical assistance, capacity building, and program implementation. With extensive experience working with donors such as the UN, government, private sector, and civil society across India, we collaborate with key stakeholders to address development challenges and enhance service delivery for the disadvantaged.

                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                    Global Pathfields' mission is to develop effective partnerships with governments, the private sector, international agencies, media, civil society organisations, and communities. These partnerships aim to provide innovative solutions and support to address global and local development challenges. The organisation strives to improve lives, expand opportunities, and help societies flourish.
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    Global Pathfields' vision is to promote and nurture socio-economic and political development and empowerment, enabling the poor and marginalised to realise their full potential for a more equitable and sustainable world, and to promote inclusive business models.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>Our Areas of Impact</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="service-text">
                                <h3>Child Rights and Education</h3>
                                <p>Works to improve the lives of vulnerable children through education, healthcare, and protection. Focuses on quality education, early childhood development, and child protection.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-social-care"></i>
                            </div>
                            <div class="service-text">
                                <h3>Skills, Employment and Inclusive Social and Economic Development</h3>
                                <p>Committed to equitable opportunities, focusing on skill development, and promoting economic empowerment. Supports entrepreneurship, particularly for women from disadvantaged communities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                            <div class="service-text">
                                <h3>Public Health, Nutrition and Water, Sanitation and Hygiene (WASH)</h3>
                                <p>Aims to improve health outcomes through an integrated approach to health systems, nutrition, and WASH. Focuses on maternal and child health, safe water, and sanitation practices.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="service-text">
                                <h3>Environment and Sustainability</h3>
                                <p>Addresses climate change and environmental degradation through research, policy interventions, and community-based models. Supports climate-smart agriculture, renewable energy, and natural resource management.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-kindness"></i>
                            </div>
                            <div class="service-text">
                                <h3>Monitoring, Evaluation and Impact Assessment</h3>
                                <p>Provides cross-cutting services across all thematic areas, focusing on adaptive and participatory approaches. Uses technology to collect and analyse data and measure the impact of development programmes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
        <!-- Facts Start -->
        <!-- <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg"> -->
        <div class="facts" data-parallax="scroll" data-image-src="img/10.jpeg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">6</h3>
                                <p>States</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">100</h3>
                                <p>Volunteers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">10000</h3>
                                <p>Our Goal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">5000</h3>
                                <p>Raised</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        
        <!-- our initiatives social impact gallery Start -->
        <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Initiatives</p>
                    <h2>Transforming Lives: Our Social Impact in Action</h2>
                </div>
                <div class="owl-carousel causes-carousel">
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/16.jpeg" alt="Image">
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/17.jpeg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/7.jpeg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/8.jpeg" alt="Image">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- our initiatives social impact gallery End -->
        
        
        <!-- Donate Start -->
        <div class="donate" data-parallax="scroll" data-image-src="img/18.jpeg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="donate-content">
                            <div class="section-header">
                                <p>Donate Now</p>
                                <h2>Be the Change: Support Our Mission</h2>
                            </div>
                            <div class="donate-text">
                                <p>
                                    Your generosity has the power to transform lives and build a more equitable world. By donating, you enable us to provide essential support to vulnerable children, youth, women, and communities, helping them rise above challenges and thrive. Every contribution helps us expand our impact, implement life-changing programs, and create lasting change. Join us in shaping a future where everyone has the opportunity to succeed—because together, we can make a difference. Donate now and be the catalyst for positive change!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="donate-form">
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-custom active">
                                        <input type="radio" name="options" checked> Rs.10,000
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="options"> Rs.50,000
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="options"> Rs.1,00,000
                                    </label>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Donate Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->
        
        
        <!-- Event Start -->
        <!-- <div class="event">
            <div class="container">
                <div class="section-header text-center">
                    <p>Recent Projects</p>
                    <h2>Making an Impact Together</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="img/14.jpeg" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>20-Nov-24</p>
                                    <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>Sangam Nagar, Indore</p>
                                </div>
                                <div class="event-text">
                                    <h3>The Kidney Kid</h3>
                                    <p>
                                        Through "The Kidney Kid" campaign, we raise awareness about kidney health, focusing on prevention and early detection. By empowering communities with knowledge, we aim to promote healthier lives for all.
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="img/13.jpeg" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>17-Dec-24</p>
                                    <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>New Delhi</p>
                                </div>
                                <div class="event-text">
                                    <h3>Save Environment</h3>
                                    <p>
                                        We are committed to environmental conservation through tree plantation drives, waste management initiatives, and community awareness programs. By educating and empowering communities, we strive to create a sustainable future for generations to come. Together, we can make a difference.
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Event End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container-fluid">
                <div class="section-header text-center">
                    <p>Meet Our Team</p>
                    <h2>Awesome guys behind our charity activities</h2>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-2">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/management/gauravJoshi.png" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Gaurav Joshi</h2>
                                <p>Co-founder & Managing Director</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/in/gaurav-joshi-8974836a/?originalSubdomain=in"><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-2">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/management/aashishPurohit.png" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Aashish Purohit</h2>
                                <p>Position</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-2">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/management/jitenderKumar.png" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Jitender Kumar</h2>
                                <p>Position</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-2">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/management/preetiSagore.png" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Preeti Sagore</h2>
                                <p>Position</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    <div class="col-lg-2 col-md-4 col-sm-2">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/management/ritaLehri.png" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Rita Lehri</h2>
                                <p>Position</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    <div class="col-lg-2 col-md-4 col-sm-2">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/management/yuktaburvey.png" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Yukta Burvey</h2>
                                <p>Position</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        </div>
        </div>
        <!-- Team End -->
        
        
        <!-- Volunteer Start -->
        <div class="volunteer" data-parallax="scroll" data-image-src="img/16.jpeg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" placeholder="Why you want to become a volunteer?" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Become a volunteer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Become A Volunteer</p>
                                <h2>Let’s make a difference in the lives of others</h2>
                            </div>
                            <div class="volunteer-text">
                                <p>
                                    Join us in creating positive change! As a volunteer, you’ll play a vital role in transforming lives and empowering communities. Together, we can make a lasting impact—one step at a time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteer End -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center ">
                    <p>Testimonial</p>
                    <h2>What people are talking about our charity activities</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="https://media.licdn.com/dms/image/v2/C4E03AQGeIbXQenIaZg/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1517721651591?e=1741219200&v=beta&t=6i60QOz7qlTyLt-uLGXXmtJKX0R8Gnr6lXI1xNEcFJo" alt="Image">
                            <div class="testimonial-name collapsible-section">
                                <h3>Alok Kumar</h3>
                                <p>Head - Corporate Social Responsibility (CSR)
                                    Adventz Group (Dr. K.K Birla Group of Companies)</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="collapsible-content">
                                I have found Global Pathfields a result oriented, technically sound institution dedicated to proving development support and execution. The institution has already made a significant contribution to many mid-size and large size donor funded as well as state driven programs in the county.
I am sure, that under the strong leadership of Mr. Joshi, and with a robust and transparent organizational system in place, Global Pathfields is all set to provide leadership in developing innovative partnerships, and solutions to address complex social problems.
                            </p>
                            <span class="toggle-button">Read More</span>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="http://sofiaconference.bg/wp-content/uploads/2014/10/200x200_brander.jpg" alt="Image">
                            <div class="testimonial-name collapsible-section">
                                <h3>Dr. Andreas Brandner</h3>
                                <p>Managing Director KMA Knowledge Management Associates GmbH Gersthofer Straße 162, 1180 Vienna</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="collapsible-content">
                                KMA Knowledge Management Associates GmbH, based in Vienna, Austria, collaborates globally to advance Knowledge Management (KM) for sustainable development. In partnership with Global Pathfields, we aim to create a sustainable KM community in India, developing innovative concepts and tools for the Government, Private Sector, and International Organisations.

                                Global Pathfields has proven to be a result-oriented and technically adept institution, dedicated to empowering disadvantaged communities and influencing policy at national and international levels. Under Gaurav's strong leadership and transparent systems, the organization continues to excel in addressing complex social challenges.
                                
                                I congratulate Gaurav and his team for their remarkable achievements and look forward to future collaborations in India. 
                            </p>                                
                                <span class="toggle-button">Read More</span>
                            </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="https://media.licdn.com/dms/image/v2/C5103AQF6UHsXV_R00A/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1516466328298?e=1741219200&v=beta&t=gexs24fvFKiWDYFXlwQzWqB6dsLNOkRWw4P3qk7mIdQ" alt="Image">
                            <div class="testimonial-name collapsible-section">
                                <h3>Nirmala Mishra</h3>
                                <p>Assistant Vice President
                                    Smile Foundation</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="collapsible-content">
                                Global Pathfields is one of the prime partner with Smile Foundation to develop IEC/BCC material on Nutrition, MCH, Anemia, WASH etc. They are providing technical support to develop posters, flip book, facilitator guide for the projects supported by the reputed companies.
                                I am impressed with the creativity and innovative approach used to design the communication materials. The IEC materials drafted by the Global Pathfields were highly appreciated by the donor agency. The Organisation is well oriented, highly professional, organized and is always open to constructive feedback, making our business relationship both effortless and pleasant.
                                Gaurav Joshi founder of the Organisation is very dedicated and sincere. Gaurav is a self-motivated, persistent hard worker, diligent, desire to experiment and always finding new ways to achieving the results is unparalleled.
                                I congratulate Gaurav and his team for the success and achievements they have made in short period. All my best wishes to Global Pathfields for their future endeavors.
                            </p>
                            <span class="toggle-button">Read More</span>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="https://media.licdn.com/dms/image/v2/C4D03AQHZdhlR70BDGA/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1609915952864?e=1741219200&v=beta&t=JM0y2nnUPb-ebZAzjneV8JcryKgbtmRnXb5L1DDlueA" alt="Image">
                            <div class="testimonial-name collapsible-section">
                                <h3>Dr. Gaurav Arya</h3>
                                <p>Regional Director (Patient Access)
                                    Abott Health Care India Limited</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="collapsible-content">
                                Current pandemic COVID 19 presents huge opportunity to Global Pathfields in the areas of Skill Development and Inclusive Public Health Services for Indians.
Delivery of Skill development through digital platform for people who are still not part of digital infrastructure is huge challenge for our country since classroom trainings and gathering of people are going to be difficult in coming months and there and there are chances that post COVID there would be more acceptance for online vocation education among employers both ends of supply and demand side. Global Pathfields through international collaborators can bring the best from international partners and put it to the service of Nation.
Similarly delivery of public health services through digital platform is a great opportunity for Global Pathfields to develop new and innovative models which can bring these services to the doorsteps of people of the country who are still not able to access basic health services and there huge gap exists between the quality health care and poor population of our country.
The organisation has done exemplary work in the last few years to make all of us proud and I hope it will venture into hard core solid implementation of projects which will bring many more benefits to its stakeholders and community.
                            </p>
                            <span class="toggle-button">Read More</span>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="https://media.licdn.com/dms/image/v2/D4D03AQGmUpL5YNCcfQ/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1670780271592?e=1741219200&v=beta&t=uVg0mabEi_FsIvI7AbG1-PaxpO_nGYMxOH7QEkrQwD4" alt="Image">
                            <div class="testimonial-name collapsible-section">
                                <h3>Chandan Verma</h3>
                                <p>National Partnership Officer-Govt. & CSR Partnerships
                                    Humana People to People India</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="collapsible-content">
                                It is overwhelming to know that Global Pathfields is playing a pivotal role in uplifting the overall quality of life for the most vulnerable population of India through various in-house inclusive development programs. I was glad to learn that each of the programs has been crafted with utmost precision, keeping in mid every element that is a must for the population on focus i.e. children, women, youth and the community.
Seamless planning and execution of various programs like SEED, WASH, Waste Management, Support My School Campaign, etc are milestones achieved in no time, that has not only garnered trust and admiration from various partners, however has also increased the geographical presence of the organisation, nationwide.
I must mention that, the dedicated team of Global Pathfields team is on a long journey of offering their services to the not so fortunate one’s of our society, hence what you have accomplished till date is remarkable and exemplary.
Keep up the good work and scale new heights team!
All the best for your future endeavours
                            </p>
                            <span class="toggle-button">Read More</span>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="https://media.licdn.com/dms/image/v2/D5603AQENZrzo5MBhZA/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1661353616994?e=1741219200&v=beta&t=obaaurDDhDtpSaX4Yx60JqXyDKzw91DtgWLwlZlCYXE" alt="Image">
                            <div class="testimonial-name collapsible-section">
                                <h3>Deep Chandra Papnoi</h3>
                                <p>Programme Manager United Nations Global Compact Network India</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="collapsible-content">
                                Global Pathfields is a not for profit Organisation and at the forefront of addressing the development challenges related to Sustainable Development Goals (SDGs) in India. With an organized, dynamic, passionate team that is dedicated to making a niche for themselves and contributing substantially in the development sector. The organization has been a joy to work with and is having a positive impact on the communities. We have been impressed with their unwavering commitment to bring positive changes in the lives of the disadvantaged communities, quality of their work, speed, dedication and professionalism in their programs, make the organisation a distinct entity. The organisation through its program implementation bringing the changes in the lives of disadvantaged communities, and developing development models, which could be scaled up further by the donor and the Government. Global Pathfields emphasizes positive action for community involvement and desired outcomes. Furthermore, the organisation in a short span of time, develop a strong partnership with various national and international organisations and demonstrated presence on various
                                policy forums as well. Global Pathfields has been a proactive supporter of United National Global Compact Network in India and contributed substantially on the policy discussions and global forums. We highly appreciate the efforts of the Global Pathfields and recommend them for the partnerships with the private sector, UN and Government.
                            </p>
                            <span class="toggle-button">Read More</span>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="https://media.licdn.com/dms/image/v2/D5603AQGTh54ufPxw3A/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1718215764887?e=1741219200&v=beta&t=wisEncCJYuYhOOT1Oys4la11F5hLUmI28PCBHRQGR_8" alt="Image">
                            <div class="testimonial-name collapsible-section">
                                <h3>Arvind Unni</h3>
                                <p>Urban Poverty Reduction Thematic Lead
                                    Indo Global Social Service Society (IGSSS)
                                    New Delhi</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="collapsible-content">
                                Our work with Global Pathfields was a positive experience. They helped us in the analysis of data for our Baseline for Enabling Inclusive Cities Project commissioned by European Union. The analysis includes more than 5000 surveys, involving a complex set of variables and parameters. The document has been widely appreciated in the civil society sector and especially amongst the organizations working with Homeless.
The best part of working with Global Pathfields apart from their analytical skills was their adaptive capacities to engage with nuanced issues like urban homelessness and also the ability to work with diverse stakeholders that were involved in the making of the report. Also, really value their commitment to the task and quick turnaround time in adverse time constraints that we had as a team.
I wish them success in the year ahead and also look forward to working with them.
                            </p>
                            <span class="toggle-button">Read More</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact for any query</h2>
                </div>
                <div class="contact-img">
                    <img src="img/19.jpeg" alt="Image">
                </div>
                <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Blog Start -->
        <!-- <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Blog</p>
                    <h2>Latest news & articles directly from our blog</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="https://www.globalpathfields.org/img/IMG_20181022_161407.jpg" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="blog1.html">Championing Child Rights and Education for a Brighter Future</a></h3>
                                <p>
                                    At Global Pathfields, we are committed to ensuring every child has access to quality education, with a focus on early childhood development, gender equality, and child protection, fostering a brighter and more equitable future.
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="https://images.pexels.com/photos/11586000/pexels-photo-11586000.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="blog2.html">Transforming Public Health and Nutrition for Vulnerable Communities</a></h3>
                                <p>
                                    At Global Pathfields, we work to improve public health and nutrition by addressing critical issues like access to safe water, sanitation, and healthcare, empowering communities to lead healthier lives and break the cycle of poor health.
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">10 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="https://images.pexels.com/photos/414807/pexels-photo-414807.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="blog3.html">Working Towards a Sustainable and Resilient Future</a></h3>
                                <p>
                                    Global Pathfields tackles climate change and environmental degradation through innovative solutions, community-based models, and policy interventions, working towards a more sustainable and resilient future for all.
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">19 Comments</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Blog End -->

        <!-- our partners gallery Start -->
        <div class="causespart">
            <div class="container">
                <div class="section-header text-center">
                    <p>Partners</p>
                    <h2>Our Partners</h2>
                </div>
                <div class="owl-carousel causes-carousel">
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner01.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner02.jpg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner03.png" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner04.jpg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner05.jpg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner06.jpg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner07.jpg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner08.jpg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner09.jpg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner10.jpg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner11.jpg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner12.jpg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner13.jpg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner14.jpg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner15.jpg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner16.jpg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner17.jpg" alt="Image">
                        </div>
                        
                    </div>
                    <div class="causespart-item">
                        <div class="causespart-img">
                            <img src="img/partners/partner18.jpg" alt="Image">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- our partners gallery End -->

        <!-- collapsible menu js for managment section read more button   -->
<script>
    // Select all toggle buttons
    document.querySelectorAll('.toggle-button').forEach(button => {
      button.addEventListener('click', function () {
        const content = this.previousElementSibling; // Find the corresponding paragraph
        if (content.style.maxHeight === 'none') {
          // Collapse the content
          content.style.maxHeight = '3em';
          this.textContent = 'Read More';
        } else {
          // Expand the content
          content.style.maxHeight = 'none';
          this.textContent = 'Read Less';
        }
      });
    });

    // Initialize styles for all collapsible paragraphs
    document.querySelectorAll('.collapsible-content').forEach(content => {
      content.style.maxHeight = '3em'; // Set initial collapsed height
    });
  </script>
  <!-- collapsible menu js for managment section read more button   -->

        <?php include"includes/footer.php"; ?>