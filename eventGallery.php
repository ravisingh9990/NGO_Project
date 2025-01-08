<?php include "includes/header.php"; ?>

<style>
    *,
    *::after,
    *::before {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --items: 5;
        --gap: 0.75rem;

        --border-xl: 20px;
        --border-m: 8px;
        --border-s: 6px;

        --accent-color: hsl(198, 86%, 53%);
        --fill-primary: hsl(204, 3%, 47%);
        --fill-active: hsl(204, 23%, 20%);
        --fill-disabled: hsl(204, 9%, 85%);
    }

    html {
        scroll-behavior: smooth;
    }

    img {
        height: 100%;
        width: 100%;
        max-width: 100%;
        object-fit: cover;
        display: block;
    }

    .event {
        min-block-size: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .image-thumbnail-carousel {
        padding: 1rem;
        width: clamp(360px, 90vw, 820px);
        display: flex;
        flex-flow: column;
        gap: 1rem;
        position: relative;
    }

    .image-display {
        border-radius: var(--border-xl);
        overflow: hidden;
        min-height: 30vmin;
        aspect-ratio: 16 / 9;
        box-shadow: 0 0.375em 0.67em #0003, 0 0.5em 1.3em #0002;
    }

    .screen {
        block-size: 100%;
        display: flex;
        background-image: linear-gradient(12deg, #aaa, #eee);
        position: relative;
        user-select: none;
        justify-content: center;
        align-items: center;
    }

    .thumbnail-carousel {
        display: flex;
        gap: var(--gap);
        block-size: 100%;
    }

    .carousel__btn {
        flex: 1 0 max(2.75rem, 5.834%);
        background: #0000;
        border: 1px solid #0000;
        cursor: pointer;
        display: flex;
        align-items: center;
    }

    .arrow-icon {
        margin-inline: auto;
        outline: none;
        border: 0;
        scale: 1;
        display: inline grid;
        width: max(80%, 1.5rem);
        height: max(80%, 1.5rem);
        fill: var(--fill-primary);
    }

    .carousel__btn:hover .arrow-icon {
        fill: var(--fill-active);
    }

    .carousel__btn:disabled {
        opacity: 0.1;
        pointer-events: none;
    }

    .carousel__slider {
        user-select: none;
        flex-grow: 999;
        list-style: none;
        display: flex;
        gap: var(--gap);
        padding: 0.5rem;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        scrollbar-width: none;
    }

    .carousel__slider::-webkit-scrollbar {
        display: none;
    }

    .carousel__slide {
        cursor: pointer;
        border-radius: var(--border-m);
        overflow: hidden;
        scroll-snap-align: center;
        flex: 1 0 calc((100% / var(--items)) - 10px);
    }

    .active.carousel__slide {
        outline: 0.125em solid var(--accent-color);
        outline-offset: -0.37em;
    }

    @media (max-width: 680px) {
        .image-thumbnail-carousel {
            width: 90vw;
        }

        .active.carousel__slide {
            background-color: var(--fill-active);
            outline-offset: 3px;
        }

        .carousel__btn {
            flex-grow: 0;
        }

        .thumbnail-carousel {
            user-select: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .carousel__slider {
            max-width: fit-content;
            align-items: center;
            gap: 1em;
        }

        .carousel__slide {
            flex: none;
            aspect-ratio: 1;
            block-size: 0.625rem;
            border-radius: 50%;
            background-color: var(--fill-primary);
        }

        .thumbnail {
            opacity: 0;
            display: none;
            aspect-ratio: 16 / 9;
            block-size: 8vw;
            position: absolute;
            border-radius: var(--border-s);
            overflow: hidden;
            z-index: 99;
            will-change: transform, opacity;
            transition: opacity 150ms ease-out;
            transform-origin: bottom;
            translate: -50%;
            bottom: 20%;
        }

        .carousel__slide:not(.active):hover .thumbnail {
            opacity: 1;
            display: block;
            animation: show 250ms ease-out forwards;
            box-shadow: 0 0.375em 0.67em #0003, 0 0.5em 1.3em #0002;
        }

        @keyframes show {
            from {
                opacity: 0;
                transform: scale(0);
            }

            to {
                display: block;
                transform: scale(1);
                opacity: 1;
            }
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

<!-- Alpine school section start -->
<div class="container">
    <div class="section-header text-center">
        <p>Highlights of Events</p>
        <h2>Alpine School</h2>
    </div>
</div>
<div class="event">
    <!-- image slider section start -->
    <div class="image-thumbnail-carousel">
        <section class="image-display">
            <div class="screen"></div>
        </section>
        <section class="thumbnail-carousel">
            <button type="button" class="carousel__btn prev" aria-label="Previous slide">
                <svg width="16" height="16" fill="currentColor" class="arrow-icon arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                </svg>
            </button>
            <ul class="carousel__slider">
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Alpine School/1.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Alpine School/2.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Alpine School/3.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Alpine School/4.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Alpine School/5.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Alpine School/6.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Alpine School/7.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Alpine School/8.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Alpine School/9.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Alpine School/10.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Alpine School/11.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Alpine School/12.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Alpine School/13.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Alpine School/14.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Alpine School/15.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Alpine School/16.jpg" alt="">
                    </div>
                </li>
            </ul>
            <button type="button" class="carousel__btn next" aria-label="Next slide">
                <svg width="16" height="16" fill="currentColor" class="arrow-icon arrow-right-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                </svg>
            </button>
        </section>
    </div>
    <!-- image slider section end -->
</div>
<!-- Alpine school section end -->


<!-- Advance Academy section start -->
<div class="container">
    <div class="section-header text-center">
        <p>Highlights of Events</p>
        <h2>Advance Academy</h2>
    </div>
</div>
<div class="event">
    <!-- image slider section start -->
    <div class="image-thumbnail-carousel">
        <section class="image-display">
            <div class="screen"></div>
        </section>
        <section class="thumbnail-carousel">
            <button type="button" class="carousel__btn prev" aria-label="Previous slide">
                <svg width="16" height="16" fill="currentColor" class="arrow-icon arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                </svg>
            </button>
            <ul class="carousel__slider">
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/advanceAcademy/1.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/advanceAcademy/2.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/advanceAcademy/3.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/advanceAcademy/4.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/advanceAcademy/5.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/advanceAcademy/6.jpg" alt="">
                    </div>
                </li>
            </ul>
            <button type="button" class="carousel__btn next" aria-label="Next slide">
                <svg width="16" height="16" fill="currentColor" class="arrow-icon arrow-right-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                </svg>
            </button>
        </section>
    </div>
    <!-- image slider section end -->
</div>

<!-- Advance Academy section end -->


<!-- Ahilya Ashram school section start -->
<div class="container">
    <div class="section-header text-center">
        <p>Highlights of Events</p>
        <h2>Ahilya Ashram school</h2>
    </div>
</div>
<div class="event">

    <!-- image slider section start -->
    <div class="image-thumbnail-carousel">
        <section class="image-display">
            <div class="screen"></div>
        </section>
        <section class="thumbnail-carousel">
            <button type="button" class="carousel__btn prev" aria-label="Previous slide">
                <svg width="16" height="16" fill="currentColor" class="arrow-icon arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                </svg>
            </button>
            <ul class="carousel__slider">
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/ahilyaAshramSchool/1.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/ahilyaAshramSchool/2.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/ahilyaAshramSchool/3.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/ahilyaAshramSchool/4.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/ahilyaAshramSchool/5.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/ahilyaAshramSchool/6.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/ahilyaAshramSchool/7.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/ahilyaAshramSchool/8.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/ahilyaAshramSchool/9.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/ahilyaAshramSchool/10.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/ahilyaAshramSchool/11.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/ahilyaAshramSchool/12.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/ahilyaAshramSchool/13.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/ahilyaAshramSchool/14.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/ahilyaAshramSchool/15.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/ahilyaAshramSchool/16.jpeg" alt="">
                    </div>
                </li>

            </ul>
            <button type="button" class="carousel__btn next" aria-label="Next slide">
                <svg width="16" height="16" fill="currentColor" class="arrow-icon arrow-right-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                </svg>
            </button>
        </section>
    </div>
    <!-- image slider section end -->
</div>

<!-- Ahilya Ashram school section end -->

<!-- Adhyan school section start -->
<div class="container">
    <div class="section-header text-center">
        <p>Highlights of Events</p>
        <h2>Adhyan School</h2>
    </div>
</div>
<div class="event">

    <!-- image slider section start -->
    <div class="image-thumbnail-carousel">
        <section class="image-display">
            <div class="screen"></div>
        </section>
        <section class="thumbnail-carousel">
            <button type="button" class="carousel__btn prev" aria-label="Previous slide">
                <svg width="16" height="16" fill="currentColor" class="arrow-icon arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                </svg>
            </button>
            <ul class="carousel__slider">
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/adhyanSchool/1.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/adhyanSchool/2.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/adhyanSchool/3.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/adhyanSchool/4.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/adhyanSchool/5.jpg" alt="">
                    </div>
                </li>
            </ul>
            <button type="button" class="carousel__btn next" aria-label="Next slide">
                <svg width="16" height="16" fill="currentColor" class="arrow-icon arrow-right-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                </svg>
            </button>
        </section>
    </div>
    <!-- image slider section end -->
</div>

<!-- Adhyan school section end -->



<!-- Bakshi Bag school section start -->
<div class="container">
    <div class="section-header text-center">
        <p>Highlights of Events</p>
        <h2>Bakshi Bag School</h2>
    </div>
</div>
<div class="event">
    <!-- image slider section start -->
    <div class="image-thumbnail-carousel">
        <section class="image-display">
            <div class="screen"></div>
        </section>
        <section class="thumbnail-carousel">
            <button type="button" class="carousel__btn prev" aria-label="Previous slide">
                <svg width="16" height="16" fill="currentColor" class="arrow-icon arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                </svg>
            </button>
            <ul class="carousel__slider">
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bakshi Bagh School/1.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bakshi Bagh School/2.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bakshi Bagh School/3.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bakshi Bagh School/4.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bakshi Bagh School/5.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bakshi Bagh School/6.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bakshi Bagh School/7.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bakshi Bagh School/8.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bakshi Bagh School/9.jpg" alt="">
                    </div>
                </li>
            </ul>
            <button type="button" class="carousel__btn next" aria-label="Next slide">
                <svg width="16" height="16" fill="currentColor" class="arrow-icon arrow-right-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                </svg>
            </button>
        </section>
    </div>
    <!-- image slider section end -->
</div>

<!-- Bakshi Bag school section end -->

<!-- Bal Vinay Mandir section start -->
<div class="container">
    <div class="section-header text-center">
        <p>Highlights of Events</p>
        <h2>Bal Vinay Mandir</h2>
    </div>
</div>
<div class="event">
    <!-- image slider section start -->
    <div class="image-thumbnail-carousel">
        <section class="image-display">
            <div class="screen"></div>
        </section>
        <section class="thumbnail-carousel">
            <button type="button" class="carousel__btn prev" aria-label="Previous slide">
                <svg width="16" height="16" fill="currentColor" class="arrow-icon arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                </svg>
            </button>
            <ul class="carousel__slider">
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bal Vinay Mandir/1.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bal Vinay Mandir/2.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bal Vinay Mandir/3.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bal Vinay Mandir/4.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bal Vinay Mandir/5.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bal Vinay Mandir/6.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bal Vinay Mandir/7.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bal Vinay Mandir/8.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bal Vinay Mandir/9.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bal Vinay Mandir/10.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bal Vinay Mandir/11.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/Bal Vinay Mandir/12.jpg" alt="">
                    </div>
                </li>
            </ul>
            <button type="button" class="carousel__btn next" aria-label="Next slide">
                <svg width="16" height="16" fill="currentColor" class="arrow-icon arrow-right-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                </svg>
            </button>
        </section>
    </div>
    <!-- image slider section end -->
</div>
<!-- Bal Vinay Mandir section end -->

<button class="btn btn-custom"><a href="eventGallery2.php">Next Page</a></button>


<script>
    const Carousel = (() => {
        const initCarousel = (carouselContainer) => {
            const carouselSlider = carouselContainer.querySelector(".carousel__slider");
            const prevButton = carouselContainer.querySelector(".carousel__btn.prev");
            const nextButton = carouselContainer.querySelector(".carousel__btn.next");
            const screen = carouselContainer.querySelector(".image-display .screen");

            const getActiveSlide = () =>
                carouselContainer.querySelector(".carousel__slide.active");
            const getFirstSlide = () => carouselSlider.firstElementChild;
            const getLastSlide = () => carouselSlider.lastElementChild;

            const getSiblingSlide = (slide, direction) =>
                direction === "prev" ? slide.previousElementSibling : slide.nextElementSibling;

            const getNewActiveSlide = (key, activeSlide) => {
                const actions = {
                    Home: getFirstSlide,
                    End: getLastSlide,
                    ArrowLeft: () => getSiblingSlide(activeSlide, "prev"),
                    ArrowRight: () => getSiblingSlide(activeSlide, "next")
                };
                return actions[key]?.() || null;
            };

            const updateScreen = (activeSlide) => {
                const img = activeSlide.querySelector("img").cloneNode(true);
                screen.innerHTML = "";
                screen.appendChild(img);
            };

            const scrollToActiveSlide = (activeSlide) => {
                const {
                    offsetLeft,
                    offsetWidth
                } = activeSlide;
                const {
                    clientWidth
                } = carouselSlider;

                carouselSlider.scrollTo({
                    left: offsetLeft - clientWidth / 2 + offsetWidth / 2,
                    behavior: "smooth"
                });
            };

            const updateActiveSlideClass = (activeSlide) => {
                carouselContainer
                    .querySelectorAll(".carousel__slide.active")
                    .forEach((slide) => slide.classList.remove("active"));
                activeSlide.classList.add("active");
            };

            const updateButtonStates = (activeSlide) => {
                prevButton.disabled = !getSiblingSlide(activeSlide, "prev");
                nextButton.disabled = !getSiblingSlide(activeSlide, "next");
            };

            const updateCarousel = (activeSlide) => {
                updateActiveSlideClass(activeSlide);
                updateScreen(activeSlide);
                scrollToActiveSlide(activeSlide);
                updateButtonStates(activeSlide);
            };

            const handleKeydown = (e) => {
                if (!e.target.closest(".carousel__slider")) return;
                const activeSlide = getActiveSlide();
                const newActiveSlide = getNewActiveSlide(e.key, activeSlide);

                if (newActiveSlide) {
                    e.preventDefault();
                    updateCarousel(newActiveSlide);
                }
            };

            const handleButtonClick = (e) => {
                const activeSlide = getActiveSlide();
                const newActiveSlide = getSiblingSlide(
                    activeSlide,
                    e.currentTarget.classList.contains("prev") ? "prev" : "next"
                );

                if (newActiveSlide) {
                    updateCarousel(newActiveSlide);
                }
            };

            const handleCarouselClick = (e) => {
                const clickedSlide = e.target.closest(".carousel__slide");
                if (clickedSlide) {
                    updateCarousel(clickedSlide);
                }
            };

            updateCarousel(getFirstSlide());

            document.addEventListener("keydown", handleKeydown);
            prevButton.addEventListener("click", handleButtonClick);
            nextButton.addEventListener("click", handleButtonClick);
            carouselSlider.addEventListener("click", handleCarouselClick);
        };

        const initializeAllCarousels = () => {
            const carousels = document.querySelectorAll(".image-thumbnail-carousel");
            carousels.forEach(initCarousel);
        };

        return {
            initializeAllCarousels
        };
    })();

    // Initialize all carousels on the page
    Carousel.initializeAllCarousels();
</script>


<?php include "includes/footer.php"; ?>