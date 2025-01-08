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
        <h1 style="font-size: 40px;">Monitoring,
            Evaluation
            and Impact
            Assessment</h1>


            <div class="container">
            <div class="card">
                <div class="card-inner">
                    <div class="box">
                        <div class="imgBox">
                            <img src="img/monitoring/1.jpeg" alt="social development">
                        </div>

                    </div>
                </div>
            </div>
            <div class="card video">
                <div class="card-inner">
                    <div class="box">

                    <div class="imgBox">
                            <img src="img/monitoring/2.jpeg" alt="social development">
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="card">

                <div class="card-inner">
                    <div class="box">
                        <div class="imgBox">
                            <img src="img/monitoring/3.jpeg" alt="social development event">
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
                For us, Monitoring, Evaluation and Impact Assessment is a
                cross-cutting service that strengthens the importance of knowing
                the impact of our work and feeds into learning and continuous
                improvement across our programmes and our own organisation.
                The team has strong expertise in both quantitative and qualitative
                analysis and knowing how to use evidence and learning for improved
                practice. This area continues to grow and play a key role across
                all sectors of our business. Our services involve all stages of the
                project and programme cycles including design, implementation,
                capturing learnings at the end of programmes, and developing
                policies and implementation practices. Through our intervention,
                we contribute to improving performance, promoting accountability
                and demonstrating the value of client investment so that Value for
                Money (VfM) can be optimised.
            </p>
            <br>
            <br>
            <p style="line-height: 1.8; font-size: 18px;">
                We work with donors, international financing institutions, civil society
                organisations and the private sector to design and implement
                flexible, participatory approaches, to provide tools and technical
                solutions to monitor the present, evaluate the past and shape the
                future. With gender and inclusion being a key component of our
                work, our approaches are focused on continuous improvement and
                learning with organisations, development sectors and programmes.
                <br>
            </p>
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
                <time></time>Theory of Change and Program Logical Frameworks
            </div>
        </li>
        <li>
            <div>
                <time></time>Baseline, End-line, Research, Survey and, Impact Evaluation
                Study
            </div>
        </li>
        <li>
            <div>
                <time></time>Design and Implementation of Monitoring, Evaluation and
                Learning Systems.
            </div>
        </li>
        <li>
            <div>
                <time></time>Developing Quantitative and Qualitative Indicators for Measuring
                Change
            </div>
        </li>
        <li>
            <div>
                <time></time>Evaluation Programme Impact
            </div>
        </li>
        
    </ul>
</section>


<!-- Key focus areas end -->



<script src="js/childrights.js"></script>
<script src="js/childrightsfocus.js"></script>
<?php include "includes/footer.php"; ?>