<?php include "includes/header.php"; ?>
<link rel="stylesheet" href="css/childrights.css">



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
<div class="page-header-publicHealth">
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
        <h1 style="font-size: 40px;">Health, Nutrition
            and Water,
            Sanitation &
            Hygiene
            (WASH)</h1>


            <div class="container">
            <div class="card">
                <div class="card-inner">
                    <div class="box">
                        <div class="imgBox">
                            <img src="img/publichealth/imageCard/7.png" alt="social development">
                        </div>

                    </div>
                </div>
            </div>
            <div class="card video">
                <div class="card-inner">
                    <div class="box">

                    <div class="imgBox">
                            <img src="img/publichealth/imageCard/8.png" alt="social development">
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="card">

                <div class="card-inner">
                    <div class="box">
                        <div class="imgBox">
                            <img src="img/publichealth/imageCard/9.png" alt="social development event">
                        </div>

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
            <h4>Health, Nutrition, and WASH</h4>
            <p style="line-height: 1.8; font-size: 18px;">
                Health, nutrition, and WASH (Water, Sanitation, and Hygiene) are essential for a quality life, yet many marginalized groups in India, especially women, children, and girls, lack access to affordable healthcare, nutritious food, safe water, and basic sanitation. Healthy populations lead productive lives, strengthen communities, and boost economies.

                Global Pathfields adopts an integrated approach to strengthen health systems through policy design, service delivery, behavior change communication (BCC), and targeted interventions in health, nutrition, and WASH.</p>
            <br>
            <br>
            <h4>Public Health and Nutrition</h4>
            <p style="line-height: 1.8; font-size: 18px;">
                In India, 1.12 million children die annually before age five due to preventable causes like infections and malnutrition. Global Pathfields focuses on improving health and nutrition for newborns, mothers, children, and adolescents, especially disadvantaged girls, by promoting their growth and development through a life-cycle approach.<br>
            <p style="line-height: 1.8; font-size: 18px;">We collaborate with governments, private sectors, NGOs, and communities to strengthen the RMNCH+A program and empower youth, particularly girls, to adopt healthy behaviors. Our WASH interventions ensure sustainable healthcare by improving sanitation and hygiene.</p>
            <br>
            <h4>Water, Sanitation, and Hygiene (WASH)</h4>
            <p style="line-height: 1.8; font-size: 18px;">Global Pathfields’ WASH initiatives drive behavior change in households, schools, and communities, promoting access to safe water, sanitation services, and handwashing facilities. These efforts achieve Open Defecation Free (ODF) areas, reduce disease, and lower dropout rates for girls by ensuring hygiene facilities in schools.</p>

            <p style="line-height: 1.8; font-size: 18px;">We advocate for safe water, improved sanitation, and scalable solutions, working with citizens, local governments, and private sectors to address WASH challenges and implement sustainable practices.</p>
        </aside>
    </div>

</main>


<!-- Images section end -->


<!-- major projects and partners start  -->

<section class="intro">
    <div class="container">
        <h1>Major
            Projects and
            Partners &darr;</h1>
        <!-- <p>Timeline v2 <a href="https://codepen.io/tutsplus/pen/zYQqPYG" target="_blank">here</a></p> -->
    </div>
</section>

<div class="projects">
    <main>
        <!--Card div begin-->
        <div class="quote-card-public-health1">
            <!--Card header begin-->
            <div class="card-navigation-public-health1">
                <div class="layer"></div>
                <p class="quote-sign">"</p>
            </div>
            <!--Card header end-->
            <!--Card body begin-->
            <div class="card-body">
                <ul>
                    <li>
                        <p class="quote-text">Reproductive, Maternal, New-born child survival, Child Health,
                            Family planning, Nutrition services and adolescent and youth health</p>
                    </li>
                    <br>
                    <li>
                        <p class="quote-text">Nutrition</p>
                    </li>
                    <br>
                    <li>
                        <p class="quote-text">Water, Sanitation and Hygiene (WASH)</p>
                    </li>
                    <br>
                    <li>
                        <p class="quote-text">Communicable (including Neglected Tropical Diseases, TB,
                            Polio and HIV/AIDS) and non-communicable diseases</p>
                    </li>
                    <br>
                    <li>
                        <p class="quote-text">Universalisation of Health Coverage and Health Systems
                            Strengthening</p>
                    </li>
                </ul>

                <!--Card body end-->
            </div>
            <!--Card div end-->
        </div>
    </main>
</div
    <!--major projects and partners end -->

<!-- Donors and
Partners start  -->

<section class="intro">
    <div class="container">
        <h1>Donors and
            Partners &darr;</h1>
    </div>
</section>

<div class="projects">
    <main>
        <!--Card div begin-->
        <div class="quote-card-public-health2">
            <!--Card header begin-->
            <div class="card-navigation-public-health2">
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
                        <p class="quote-text">SBCC strategy development and implementation on nutrition
                            project (for pregnant women, lactating mothers and children)
                            in Andhra Pradesh, Pepsico Foundation and Smile Foundation
                            (2018)</p>
                    </li>
                    
                    <li>
                        <p class="quote-text">Integrated Peer Educator Training Programme (curriculum and
                            training material) under Young Health Programme. Plan India.</p>
                    </li>
                    

                    <li>

                        <p class="quote-text"> <span style="font-style: bold">Young Health Program Peer Educator’s Training on Non-
                                Communicable Diseases, Plan India</p>
                    </li>
                    
                    <li>

                        <p class="quote-text"> <span style="font-style: bold">Young Health Programme Peer Educator’s Training on Non-
                                Communicable Diseases, Plan India</p>
                    </li>
                    
                    <li>

                        <p class="quote-text"> <span style="font-style: bold">Bi-annual Workshop with multi-stakeholders to promote health
                                sector reforms, Plan India</p>
                    </li>
                    
                    <li>

                        <p class="quote-text"> <span style="font-style: bold">Capacity Building Workshop of Young Health Program Staff,
                                Plan India</p>
                    </li>
                    
                    <li>

                        <p class="quote-text"> <span style="font-style: bold">Capacity Building Workshop of Young Health Program Staff</p>
                    </li>
                    
                    <li>

                        <p class="quote-text"> <span style="font-style: bold">Advocacy Mapping on Non-Communicable Diseases</p>
                    </li>

                </ul>

                <!--Card body end-->
            </div>
            <!--Card div end-->
        </div>
    </main>
</div

    <!-- Donors and
    Partners end -->
<!-- Donors start  -->

<section class="intro">
    <div class="container">
        <h1>Donors &darr;</h1>
    </div>
</section>

<div class="projects">
    <main>
        <!--Card div begin-->
        <div class="quote-card-public-health3">
            <!--Card header begin-->
            <div class="card-navigation-public-health3">
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
                        <p class="quote-text">Pepsico Foundation and Smile Foundation; Plan International (UK
                        and India); Nav Srishti; Dr. A.V. Baliga Memorial Trust</p>
                    </li>

                </ul>

                <!--Card body end-->
            </div>
            <!--Card div end-->
        </div>
    </main>
</div

    <!-- Donors and
    Partners end -->


<script src="js/childrights.js"></script>
<script src="js/childrightsfocus.js"></script>
<?php include "includes/footer.php"; ?>