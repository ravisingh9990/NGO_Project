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

    .foucsareaheading {
        color: azure;
    }


    /* INTRO SECTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */

    /* .intro {
        
        padding: 100px 0;
    }

    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
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
<div class="page-header-socialDevelopment">
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
        <h1 style="font-size: 40px;">Skill,
            Employability
            and Inclusive
            Economic
            Development
            (SEED)</h1>


        <div class="container-img-section">
            <div class="card">
                <div class="card-inner">
                    <div class="box">
                        <div class="imgBox">
                            <img src="img/socialdevelopment/imageCard/4.png" alt="social development">
                        </div>

                    </div>
                </div>
            </div>
            <div class="card video">
                <div class="card-inner">
                    <div class="box">

                    <div class="imgBox">
                            <img src="img/socialdevelopment/imageCard/6.png" alt="social development">
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="card">

                <div class="card-inner">
                    <div class="box">
                        <div class="imgBox">
                            <img src="img/socialdevelopment/imageCard/5.png" alt="social development event">
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
            <p style="line-height: 1.8; font-size: 18px;">
                Concurrent monitoring of 22,000 Handloom Weavers in six northeast
                states (Arunachal Pradesh, Manipur, Meghalaya, Mizoram, Sikkim and
                Tripura) Donor Ministry of Textile, GoI and Pricewaterhousecoopers
                Skill development is viewed as part of a larger effort of the holistic
                and all round development of individuals, leading to achieving optimal
                human potential. There is a need for a speedy reorganisation of the
                ecosystem of education and skill development, collectively, to suit the
                needs of the industry and enable employment and entrepreneurship
                development for the youth (particularly women) from disadvantaged
                communities.
            </p>
            <br>
            <br>
            <p style="line-height: 1.8; font-size: 18px;">
                Global Pathfields through this initiative, intends to promote the economic
                empowerment and financial inclusion of the youth (especially girls and
                women) and communities through multi-pronged approaches, namely:
                <br>
                <li>Employment oriented Skill Training (EST) in alignment with NSQF</li>
                <li>Skill Training for Entrepreneurship Promotion, with special a focus
                    on young women (STEP)</li>
                <li>Community Promoted Micro Finance Institutions (CPMFI)</li>
                <li>Policy analysis and reform</li>
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
            <div class="foucsareaheading">
                <time></time>Skill Development
            </div>
        </li>
        <li>
            <div class="foucsareaheading">
                <time></time>Technical and Vocational Education and Training
            </div>
        </li>
        <li>
            <div class="foucsareaheading">
                <time></time>Assessment and Certification
            </div>
        </li>
        <li>
            <div class="foucsareaheading">
                <time></time>Employment and Entrepreneurship Development
            </div>
        </li>
        <li>
            <div class="foucsareaheading">
                <time></time>Community Managed Micro Finance
            </div>
        </li>
        <li>
            <div class="foucsareaheading">
                <time></time>Value Chain Development
            </div>
        </li>
        <li>
            <div class="foucsareaheading">
                <time></time>Green Growth
            </div>
        </li>
        <li>
            <div class="foucsareaheading">
                <time></time>Public-Private Partnerships
            </div>
        </li>
        <li>
            <div class="foucsareaheading">
                <time></time>Women Entrepreneurship and Local Economic Development
            </div>
        </li>
        <li>
            <div class="foucsareaheading">
                <time></time>Access to Finance
            </div>
        </li>
        <li>
            <div class="foucsareaheading">
                <time></time>Cost Benefit, Market System and Value Chain Analyses
            </div>
        </li>
        <li>
            <div class="foucsareaheading">
                <time></time>Review and design of Economic Development Programmes
            </div>
        </li>
        <li>
            <div class="foucsareaheading">
                <time></time>Women Empowerment
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
    </div>
</section>

<div class="projects">
    <main>
        <!--Card div begin-->
        <div class="quote-card-socialdevelopment1">
            <!--Card header begin-->
            <div class="card-navigation-socialdevelopment1">
                <div class="layer"></div>
                <p class="quote-sign">"</p>
            </div>
            <!--Card header end-->
            <!--Card body begin-->
            <div class="card-body">
                <ul>
                    <li>
                        <p class="quote-text">Evaluation of North East Region Textile Promotion Scheme
                            (NERTPS) in Arunachal Pradesh, Manipur, Meghalaya, Mizoram,
                            Sikkim and Tripura, Ministry of Textile, Govt. of India and PwC,
                            Sep 2019</p>
                    </li>
                    <br>
                    <li>
                        <p class="quote-text">Endline Evaluation of Homeless Population in Delhi, Humana
                        People to People India, Sep 2019</p>
                    </li>
                    <br>
                    <li>
                        <p class="quote-text">Baseline Study of Homeless in Andhra Pradesh, Bihar, Jharkhand
                        and Maharashtra</p>
                    </li>
                    <br>
                    <li>
                        <p class="quote-text">Skill Development of Street Food Vendors in Delhi</p>
                    </li>
                    <br>
                    <li>
                        <p class="quote-text">Capacity Building Program on Social Development</p>
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
<br>
<br>
<section class="intro">
    <div class="container">
        <h1>Donors and
        Partners &darr;</h1>
        <!-- <p>Timeline v2 <a href="https://codepen.io/tutsplus/pen/zYQqPYG" target="_blank">here</a></p> -->
    </div>
</section>

<div class="projects">
    <main>
        <!--Card div begin-->
        <div class="quote-card-socialdevelopment2">
            <!--Card header begin-->
            <div class="card-navigation-socialdevelopment2">
                <div class="layer"></div>
                <p class="quote-sign">"</p>
            </div>
            <!--Card header end-->
            <!--Card body begin-->
            <div class="card-body">
                <ul>
                    <li>
                        <p class="quote-text">Ministry of Skill and Entrepreneurship Development, (PMKY),
                        GoI; FSSAI</p>
                    </li>
                    <br>
                    <li>
                        <p class="quote-text">NAPSWI and Department of Social Work, University of Delhi</p>
                    </li>
                    <br>
                    
                    <li>
                        
                        <p class="quote-text"> <span style="font-style: bold">NGO Partners: </span>Pricewaterhousecoopers; Matrix Society; Aanchal
                        Charitable Trust; Janhit Society;</p>
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