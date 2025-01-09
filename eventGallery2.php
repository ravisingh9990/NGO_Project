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
<div class="page-header-eventsGallery">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <h2>Event</h2> -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Basant Valley School section start -->
<div class="container">
    <div class="section-header text-center">
        <p>Highlights of Events</p>
        <h2>Basant Valley School</h2>
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
                        <img loading="lazy" src="img/schools/basantValleySchool/1.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/basantValleySchool/2.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/basantValleySchool/3.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/basantValleySchool/4.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/basantValleySchool/5.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/basantValleySchool/6.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/basantValleySchool/7.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/basantValleySchool/8.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/basantValleySchool/9.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/basantValleySchool/10.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/basantValleySchool/11.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/basantValleySchool/12.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/basantValleySchool/13.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/basantValleySchool/14.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/basantValleySchool/15.jpg" alt="">
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
<!-- Basant Valley School section end -->


<!-- Dissemination Workshop Sayaji section start -->
<div class="container">
    <div class="section-header text-center">
        <p>Highlights of Events</p>
        <h2>Dissemination Workshop Sayaji</h2>
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
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/1.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/2.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/3.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/4.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/5.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/6.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/7.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/8.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/9.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/10.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/11.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/12.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/13.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/14.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/15.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/16.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/17.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/18.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/19.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/20.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/21.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/22.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/23.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/24.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/disseminationWorkshopAtSayaji/25.jpg" alt="">
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

<!-- Dissemination Workshop Sayaji section end -->


<!-- Delhi Public school section start -->
<div class="container">
    <div class="section-header text-center">
        <p>Highlights of Events</p>
        <h2>Delhi Public school</h2>
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
                        <img loading="lazy" src="img/schools/dps/1.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/dps/2.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/dps/3.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/dps/4.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/dps/5.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/dps/6.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/dps/7.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/dps/8.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/dps/9.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/dps/10.jpeg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/dps/11.jpeg" alt="">
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

<!-- Delhi Public school section end -->

<!-- FLW Training section start -->
<div class="container">
    <div class="section-header text-center">
        <p>Highlights of Events</p>
        <h2>FLW Training</h2>
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
                        <img loading="lazy" src="img/schools/flwtraining/1.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/2.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/3.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/4.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/5.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/6.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/7.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/8.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/9.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/10.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/11.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/12.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/13.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/14.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/15.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/16.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/17.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/18.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/19.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/20.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/21.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/22.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/23.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/24.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/25.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/26.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/27.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/28.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/29.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/30.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/31.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/32.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/33.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/34.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/35.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/36.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/37.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/38.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/39.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/40.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/41.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/42.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/43.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/44.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/flwtraining/45.jpg" alt="">
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

<!-- FLW Training section end -->



<!-- Presentation school section start -->
<div class="container">
    <div class="section-header text-center">
        <p>Highlights of Events</p>
        <h2>Presentation School</h2>
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
                        <img loading="lazy" src="img/schools/presentationSchool/1.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/2.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/3.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/4.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/5.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/6.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/7.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/8.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/9.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/10.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/11.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/12.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/13.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/14.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/15.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/16.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/17.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/18.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/19.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/20.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/21.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/22.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/23.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/24.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/25.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/26.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/27.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/28.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/29.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/30.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/31.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/32.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/33.jpg" alt="">
                    </div>
                </li>
                <li class="carousel__slide">
                    <div class="thumbnail">
                        <img loading="lazy" src="img/schools/presentationSchool/34.jpg" alt="">
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

<!-- Presentation school section end -->

<button class="btn btn-custom"><a href="eventGallery.php">Previous Page</a></button>

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