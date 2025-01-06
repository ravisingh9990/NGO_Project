<?php include "includes/header.php"; ?>
<link rel="stylesheet" href="css/childrights.css">
<link rel="stylesheet" href="css/childrightsfocus.css">


 <style>
        *,
        *::before,
        *::after {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
        }

        a {
                color: inherit;
        }

        body {
                /* font: normal 16px/1.5 "Helvetica Neue", sans-serif;
  background: #456990; */
                color: rgb(220, 220, 220);
                overflow-x: hidden;
                padding-bottom: 50px;
        }


        /* INTRO SECTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */

        .intro {
                /* background: #023660; */
                padding: 100px 0;
        }

        .container {
                width: 90%;
                max-width: 1200px;
                margin: 0 auto;
                text-align: center;
        }

        /* h1 {
  font-size: 2.5rem;
} */


        /* TIMELINE
–––––––––––––––––––––––––––––––––––––––––––––––––– */

        .timeline ul {
                background: rgba(241, 241, 241, 0.39);
                padding: 50px 0;
        }

        .timeline ul li {
                list-style-type: none;
                position: relative;
                width: 6px;
                margin: 0 auto;
                padding-top: 10px;
                background: #023660;
        }

        .timeline ul li::after {
                content: "";
                position: absolute;
                left: 50%;
                bottom: 0;
                transform: translateX(-50%);
                width: 30px;
                height: 30px;
                border-radius: 50%;
                background: inherit;
                z-index: 1;
        }

        .timeline ul li div {
                position: relative;
                bottom: 0;
                width: 400px;
                padding: 15px;
                background: #023660;
                border-radius: 20px;
        }

        .timeline ul li div::before {
                content: "";
                position: absolute;
                bottom: 7px;
                width: 0;
                height: 0;
                border-style: solid;
        }

        .timeline ul li:nth-child(odd) div {
                left: 45px;
        }

        .timeline ul li:nth-child(odd) div::before {
                left: -15px;
                border-width: 8px 16px 8px 0;
                border-color: transparent #023660 transparent transparent;
        }

        .timeline ul li:nth-child(even) div {
                left: -439px;
        }

        .timeline ul li:nth-child(even) div::before {
                right: -15px;
                border-width: 8px 0 8px 16px;
                border-color: transparent transparent transparent #023660;
        }

        time {
                display: block;
                font-size: 1.2rem;
                font-weight: bold;
                margin-bottom: 8px;
        }


        /* EFFECTS
–––––––––––––––––––––––––––––––––––––––––––––––––– */

        .timeline ul li::after {
                transition: background 0.5s ease-in-out;
        }

        .timeline ul li.in-view::after {
                background: #023660;
        }

        .timeline ul li div {
                visibility: hidden;
                opacity: 0;
                transition: all 0.5s ease-in-out;
        }

        .timeline ul li:nth-child(odd) div {
                transform: translate3d(200px, 0, 0);
        }

        .timeline ul li:nth-child(even) div {
                transform: translate3d(-200px, 0, 0);
        }

        .timeline ul li.in-view div {
                transform: none;
                visibility: visible;
                opacity: 1;
        }


        /* GENERAL MEDIA QUERIES
–––––––––––––––––––––––––––––––––––––––––––––––––– */

        @media screen and (max-width: 900px) {
                .timeline ul li div {
                        width: 250px;
                }

                .timeline ul li:nth-child(even) div {
                        left: -289px;
                        /*250+45-6*/
                }
        }

        @media screen and (max-width: 600px) {
                .timeline ul li {
                        margin-left: 20px;
                }

                .timeline ul li div {
                        width: calc(100vw - 91px);
                }

                .timeline ul li:nth-child(even) div {
                        left: 45px;
                }

                .timeline ul li:nth-child(even) div::before {
                        left: -15px;
                        border-width: 8px 16px 8px 0;
                        border-color: transparent #023660 transparent transparent;
                }
        }


        /* EXTRA/CLIP PATH STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
        .timeline-clippy ul li::after {
                width: 40px;
                height: 40px;
                border-radius: 0;
        }

        .timeline-rhombus ul li::after {
                clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        }

        .timeline-rhombus ul li div::before {
                bottom: 12px;
        }

        .timeline-star ul li::after {
                clip-path: polygon(50% 0%,
                                61% 35%,
                                98% 35%,
                                68% 57%,
                                79% 91%,
                                50% 70%,
                                21% 91%,
                                32% 57%,
                                2% 35%,
                                39% 35%);
        }

        .timeline-heptagon ul li::after {
                clip-path: polygon(50% 0%,
                                90% 20%,
                                100% 60%,
                                75% 100%,
                                25% 100%,
                                0% 60%,
                                10% 20%);
        }

        .timeline-infinite ul li::after {
                animation: scaleAnimation 2s infinite;
        }

        @keyframes scaleAnimation {
                0% {
                        transform: translateX(-50%) scale(1);
                }

                50% {
                        transform: translateX(-50%) scale(1.25);
                }

                100% {
                        transform: translateX(-50%) scale(1);
                }
        }
</style> 

<!-- Page Header Start -->
<div class="page-header-about">
        <div class="container">
                <div class="row">
                        <div class="col-12">
                                <!-- <h2>Event</h2> -->
                        </div>
                </div>
        </div>
</div>
<!-- Page Header End -->


<!-- Images section start  -->
<main>
        <div>
                <h1 style="font-size: 40px;">Child Rights
                        & Education</h1>


                        <div class="container">
                <div class="card">
                        <div class="card-inner">
                                <div class="box">
                                        <div class="imgBox">
                                                <img src="img/child rights/3.jpeg" alt="Awesome views">
                                        </div>
                                        <!-- <div class="more">
                                                <ul>
                                                        <li><img src="https://plus.unsplash.com/premium_photo-1672115680958-54438df0ab82?q=80&w=1784&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></li>
                                                        <li><img src="https://images.unsplash.com/photo-1600298882283-40b4dcb8b211?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></li>
                                                        <li><img src="https://plus.unsplash.com/premium_photo-1667987781458-c45c1ad5dfe1?q=80&w=2051&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""></li>
                                                        <li><img src="https://images.unsplash.com/photo-1600298882698-312a4137fd33?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""><span>50+</span></li>
                                                </ul>
                                        </div> -->
                                        <!-- <div class="tag">
                                                <a href="#">#Awesome views</a>
                                        </div> -->

                                </div>
                        </div>
                </div>
                <div class="card video">
                        <div class="card-inner">
                                <div class="box">
                                        <!-- <div class="videoBox poster">
                                                
                                                <iframe width="100%" height="100%" src="videos/1vid.mp4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </div> -->
                                        <div class="imgBox">
                                                <img src="img/child rights/2.jpeg" alt="childrights">
                                        </div>
                                        <!-- <div class="tag">
                                                <a href="#">#Pet friendly</a>
                                        </div> -->

                                </div>
                        </div>
                </div>
                <div class="card">
                        <!-- <p><a href="event.html">More about Child Rights & Education</a> </p> -->
                        
                        <div class="card-inner">
                                <div class="box">
                                        <div class="imgBox">
                                                <img src="img/child rights/1.jpeg" alt="childrights">
                                        </div>

                                        <div class="more">
                                                <!-- <a href="#" class="arrow"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                                        </svg></a> -->

                                        </div>
                                        <!-- <div class="tag">
                                                <a href="#">#Hiking</a>
                                        </div> -->

                                </div>
                        </div>
                </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
                <aside>
                        <p style="line-height: 1.8; font-size: 18px;">
                                Global Pathfields adopts a rights-based approach to create lasting improvements in the lives of vulnerable children and their communities in India. The organization focuses on key areas such as education, healthcare, nutrition, child protection, and community development, addressing children’s unique needs and empowering civil society to tackle development challenges collaboratively.

                                Recognizing that children’s rights and education are pivotal to inclusive growth, sustainable development, and democracy, Global Pathfields prioritizes access to quality education, bridging learning gaps, and improving infrastructure and teacher availability.

                                The organization provides technical assistance for policy reforms, program implementation, capacity building, monitoring, evaluation, and research. It emphasizes delivering quality education, particularly for girls, enhancing teachers’ skills, and strengthening School Management Committees to ensure better learning outcomes. Additionally, it focuses on community-based child protection mechanisms to combat gender-based violence and promote women’s empowerment.
                        </p>
                        <!-- <p>Since 2021</p> -->
                </aside>
        </div>
        
</main>


<!-- Images section end -->

<!-- Key focus areas start-->

<section class="intro">
        <div class="container">
                <h1>Key Focus Areas &darr;</h1>
                <!-- <p>Timeline v2 <a href="https://codepen.io/tutsplus/pen/zYQqPYG" target="_blank">here</a></p> -->
        </div>
</section>

<section class="timeline">
        <ul>
                <li>
                        <div>
                                <time></time>Early Childhood Care and Development
                        </div>
                </li>
                <li>
                        <div>
                                <time></time>Promoting quality learning in pre-schools for all children of 3-6
                                        years of age
                        </div>
                </li>
                <li>
                        <div>
                                <time></time>Promoting quality learning in schools for all children, especially
                                        girls, in Class I-XII
                        </div>
                </li>
                <li>
                        <div>
                                <time></time>Strategic Advisory Services and Policy Analysis
                        </div>
                </li>
                <li>
                        <div>
                                <time></time>Teacher Management and Development
                        </div>
                </li>
                <li>
                        <div>
                                <time></time>Education Planning and Administration
                        </div>
                </li>
                <li>
                        <div>
                                <time></time>Inclusion and Equity for Marginalised and Underprivileged
                                        Children
                        </div>
                </li>
                <li>
                        <div>
                                <time></time>Protection from abuse, neglect, exploitation and violence
                        </div>
                </li>
                <li>
                        <div>
                                <time></time>Evidence Based Advocacy at the state, national and international
                                        level
                        </div>
                </li>
        </ul>
</section>


<!-- Key focus areas end -->

<!-- major projects and partners start  -->

<section class="intro">
        <div class="container">
                <h1>Major Projects
                and Partners &darr;</h1>
                <!-- <p>Timeline v2 <a href="https://codepen.io/tutsplus/pen/zYQqPYG" target="_blank">here</a></p> -->
        </div>
</section>

<div class="projects">
<main>
  <!--Card div begin-->
  <div class="quote-card">
    <!--Card header begin-->
    <div class="card-navigation">
      <div class="layer"></div>
      <p class="quote-sign">"</p>
      <!-- <div class="quote-arrows arrow-left"></div>
      <div class="quote-arrows arrow-right"></div> -->
    </div>
<!--Card header end-->
    <!--Card body begin-->
    <div class="card-body">
        <ul>
                <li>
      <p class="quote-text">End Line Evaluation of Support my School Campaign on Education
and Waste Management, in Uttar Pradesh, Karnataka, Tamil Nadu
and Telangana by Plan India and Coca Cola Foundation (2018).</p>
</li>
<br>
<li>
      <p class="quote-text">End line Evaluation of Child Labour Project in Andhra Pradesh and
      Odisha</p>
      </li>
      </ul>
      
      <!--Card body end-->
    </div>
    <!--Card div end-->
  </div>
</main>
</div

<!-- major projects and partners end -->


<script src="js/childrights.js"></script>
<script src="js/childrightsfocus.js"></script>
<?php include "includes/footer.php"; ?>