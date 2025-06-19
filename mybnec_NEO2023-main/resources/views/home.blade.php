<style>
    /* gradient box */
    .landingPage{
        background-image: url("storage/assets/NEO2024LandingBg/webSeaBackground.svg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        height: 105vh;
        min-height: 105vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @media (max-width: 1024px) {
    .landingPage {
        background-image: url("storage/assets/NEO2024LandingBg/phoneSeaBackground.svg"); /* Switch background */
        background-size: cover; /* You may want 'cover' for smaller screens */
        background-position: center;
        height: 10vh;
        }
    }

/* Further adjustments for smaller phones */
@media (max-width: 768px) {
    .landingPage {
        background-image: url("storage/assets/NEO2024LandingBg/phoneSeaBackground.svg");
        background-size: cover;
        background-position: center;
        height: 10vh;
        }
    }


    .videoPlace{
        background-image: url("storage/assets/NEO2024LandingBg/aboutUsPlank.svg");
    }

    .neoHeader{
        color: #522C22;
        font-family: "Pieces of Eight";
    }

    .neoContent{
        color: #522C22;
        font-family: "GoudyOld"
    }

    .secondary-btn-neo2024{
        font-family:"GoudyOld";
        font-weight: 600;
        color: #522C22;
        border:1px solid #522C22;
        border-radius: 16px;
    }

    .secondary-btn-neo2024:hover{
        font-family:"GoudyOld";
        background: #522C22;
        color: white;
        border-radius: 16px;
    }

    .woodContainer{
        background: #DDAC72;
        border: 5px solid #522C22;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0);
    }
    /* .gradient-div {
        background: radial-gradient(circle, black 40%, rgb(100, 12, 12) 100%);
        border: 5px solid #f83a00;
        padding: 20px; */
        /* Increase border width and set it to solid */
        /* padding-top: 20px;
        animation: gradient-animation 1s ease infinite, glow 1s ease infinite alternate;
        box-shadow: 0 0 10px #f83a00;
    }

    /* .gradient-div-starter {
        background: radial-gradient(circle, black 40%, rgb(100, 12, 12) 100%);
        animation: gradient-animation 1s ease infinite, glow 1s ease infinite alternate;
        box-shadow: 0 0 10px #f83a00;
        border: 5px solid #f83a00;
    } */

    @keyframes gradient-animation {
        0% {
            background-position: 0 0;
        }

        100% {
            background-position: 100% 100%;
        }
    }

    @keyframes glow {
        0% {
            box-shadow: 0 0 5px #f83a00;
        }

        100% {
            box-shadow: 0 0 10px #f83a00;
        }
    }


    /* testimony card */
    .carousel {
        display: flex;
        overflow: hidden;
        max-width: 600px;
        /* Adjust to your desired width */
        margin: 0 auto;
        transition: transform 0.5s;
    }

    .card {
        flex: 0 0 100%;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        background-color: inherit;
        transition: transform 0.5s;
        /* Ensure the background color is inherited */
    }

    .bg-white {
        background-color: #fff !important;
        /* Ensure background color takes precedence */
    }


    /* timeline line animation */

    .vertical-line {
        width: 10px;
        background-color: #f83a00;
        height: 1200px;
        transition: height 1s ease-in, opacity 1s ease-in;
    }

    .vertical-line1 {
        width: 5px;
        background-color: #f83a00;
        height: 300px;
        transition: height 1s ease-in, opacity 1s ease-in;
    }

    .animated-timeline {
        animation: timeline 1s ease-in-out forwards;
    }

    .glowing-line {
        animation: glows 1s infinite alternate;
    }

    @keyframes timeline {
        0% {
            height: 0;
            opacity: 0;
        }

        100% {
            height: 100%;
            /* Increase height to 100% for the animation */
            opacity: 1;
        }
    }

    @keyframes glows {
        0% {
            box-shadow: 0 0 10px #f83a00;
        }

        100% {
            box-shadow: 0 0 20px #f83a00, 0 0 30px #f83a00;
        }
    }


    /* Carousel */

    .swiper {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 300px;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
    }

    /* Media partner */
    @keyframes slide {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-100%);
        }
    }

    @keyframes slide2 {
        from {
            transform: translateX(100%);
        }

        to {
            transform: translateX(0);
        }
    }

    .logos {
        overflow: hidden;
        padding: 60px 0;
        background: #44C4DB;
        white-space: nowrap;
        position: relative;

    }

    .logos:before,
    .logos:after {
        position: absolute;
        top: 0;
        width: 250px;
        height: 100%;
        content: "";
        z-index: 2;
    }

    .logos:before {
        left: 0;
        background: linear-gradient(to left, rgba(255, 255, 255, 0), #44C4DB);
    }

    .logos:after {
        right: 0;
        background: linear-gradient(to right, rgba(255, 255, 255, 0), #44C4DB);
    }

    .logos-slide {
        display: inline-block;
        animation: 35s slide infinite linear;
    }

    .logos-slide img {
        height: 100px;
        margin: 0 40px;
    }

    .logos-slide2 {
        display: inline-block;
        animation: 35s slide infinite linear;
    }

    .logos-slide2 img {
        height: 100px;
        margin: 0 40px;
    }

    /* Scrolling */

    .outer-div {
        height: 500px;
        overflow-y: auto;
    }

    .inner-div {
        height: 200px;
        /* Adjust the height as needed */
        overflow-y: auto;
    }

    /* Style for scrollbar */
    .outer-div::-webkit-scrollbar {
        width: 12px;
        /* Adjust the width as needed */
    }

    .outer-div::-webkit-scrollbar-thumb {
        background-color: #f83a00;
        /* Color of the scrollbar thumb */
    }

    /* AOS */
    /* [data-aos] {
        visibility: hidden;
    }

    [data-aos].animated {
        visibility: visible;
    } */

    .scaling {
        scale: 1;
        transition: 500ms ease-in-out;
    }

    .scaling:hover {
        scale: 1.1;
        transition: 500ms ease-in-out;
    }

    .accordion {
        --bs-accordion-border-color: transparent !important;
        --bs-accordion-body-color: transparent !important;
    }

    .accordion-body {
        border-radius: 15px;
        margin-top: -35px;
        padding-top: 45px !important;
        padding-bottom: 5px !important;
        background-color: #f8dc9c;
    }

    .accordion-collapse {
        border-radius: 15px;
        margin-top: -35px;
        padding-top: 45px !important;
        padding-bottom: 5px !important;
        overflow: hidden;
        transform-origin: top; /* Set the point from where the scaling starts */
        height: 0;
        transition: height 0.4s ease-out; /* Smooth height transition */
    }

    .accordion-collapse.show {
        height: auto; /* When expanded, we need to calculate the height dynamically */
        transition: height 0.4s ease-out; /* This keeps it smooth */
    }

    .aspect-ratio-4x3 {
        aspect-ratio: 4/3;
    }

    @font-face {
    font-family: 'Pieces of Eight';
    src: url('/storage/app/public/PiecesOfEight.woff2') format('woff2'),
         url('/storage/app/public/PiecesOfEight.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    }

    /* Grid Layout */

    .image-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    justify-items: center;
    padding: 20px;
    }

    .image-item {
        text-align: center;
    }

    .image-item img {
        max-width: 100%;
        height: auto;
    }

    .image-item p {
        margin-top: 10px;
        font-size: 16px;
        color: #884A39;
        font-family: 'GOSB';
    }


    .hover-image {
        width: 250px;
        height: auto;
        transition: transform 0.3s ease;
        cursor: pointer;
    }

    /* Hover effect */
    .hover-image:hover {
        transform: scale(1.1);
    }

    /* .price {
        width: 250px;
        height: auto;
        margin-bottom: 20px;
    } */

    /* Modal styling */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 60px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background-color: white;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-height: 80%;
        overflow-y: scroll;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    .popup .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background: transparent;
    }

    .popup .content {
        position: relative;
        width: 50%;
        margin: 15% auto;
        padding: 30px;
        background-color: white;
        border-radius: 5px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        font-family: 'Arial', sans-serif;
    }

    .popup-footer {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    margin-top: 20px;
    }

    .guide-btn {
    display: inline-block;
    padding: 10px 20px;
    border-radius: 5px;
    border: 2px solid #884A39;
    background-color: #884A39;
    color: white;
    cursor: pointer;
    font-family: 'GOSB';
    text-decoration: none;
    transition: background-color 0.5s ease, color 0.5s ease;
    white-space: nowrap;
    line-height: 1.5;
    }

    .close-btn {
    padding: 10px 20px;
    border-radius: 5px;
    border: 2px solid #884A39;
    background-color: transparent;
    color: #884A39;
    cursor: pointer;
    font-family: 'GOSB';
    transition: background-color 0.5s ease, color 0.5s ease;
    }

    .guide-btn:hover, .close-btn:hover {
    background-color: #c06a4b;
    color: white;
    }


    @font-face {
    font-family: 'GOS';
    src: url('/storage/app/public/GOUDOS.ttf') format('truetype');
    }

    p{
        font-family: 'GOS';
        /* text-align: justify; */
    }

    @font-face {
    font-family: 'GOSB';
    src: url('/storage/app/public/Goudy Old Style Bold.ttf') format('truetype');
    }

    h2 {
        font-family: 'GOSB';
        color: #884A39 !important;
    }

    /* Price Box */
    .price-box-container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin: 10px 0;
    gap: 8px;
    }

    .price-box {
    background-color: #d4a373;
    padding: 1px 10px;
    border-radius: 5px;
    text-align: left;
    width: 50%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    font-family: 'GOS';
    font-size: 20px;
    color: #3e2723;
    }


    .price-box p {
        margin: 5px 0;
    }

    @media screen and (max-width: 768px) {
        .price-box-container {
            flex-direction: column;
            width: 100%;
        }

        .price-box {
            width: 80%;
        }
    }

    /* Competition Animation */
    .image-item {
    opacity: 0;
    transform: translateY(35px);
    transition: opacity 0.5s ease-out, transform 1s ease-out;
    }

    .image-item.fade-up {
    opacity: 1;
    transform: translateY(0);
    }


</style>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<x-app title="NEO 2024 ">
    <x-slot name="navbar"></x-slot>
    <div style="background-color:#44C4DB;overflow-x:hidden">
        {{-- <div class="invisible py-5">Padding</div> --}}
        <section class="landingPage">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center" style="z-index: 6;">
                    <div class="text-xl-center text-md-center text-center col-12 d-flex align-items-center justify-content-center col-xl-6 col-md-12 col-sm-12 mt-4 mt-md-4 mt-xl-0">
                        <div>
                            <!-- Headings for large screens -->
                            <div class="d-xl-flex d-md-none d-none flex-column gap-0 justify-content-center align-items-center">
                                <span class="m-0 p-0" style="color: #522C22;font-size: 40px;line-height:50px; text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3); font-family:GoudyOld">
                                    The 2024 NEO
                                </span>
                                <span class="m-0 p-0 mt-3" style="color: #522C22;font-size: 110px;line-height:100px;text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3); font-family:Pieces of Eight">
                                    ETERNAL VOYAGE
                                </span>
                                <span class="m-0 p-0 mt-2" style="color: #522C22;font-size: 50px;line-height:40px;text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3); font-family:GoudyOld">
                                    Discover the New World!
                                </span>
                            </div>

                            <!-- Headings for smaller screens -->
                            <div class="d-xl-none d-md-flex d-flex flex-column gap-0">
                                <span class="m-0 p-0" style="color: #522C22;font-size: 30px;line-height:30px; text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3); font-family:GoudyOld">
                                    The 2024 NEO
                                </span>
                                <span class="m-0 p-0 mt-2" style="color: #522C22;font-size: 50px;line-height:55px;text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3); font-family:Pieces of Eight">
                                    ETERNAL VOYAGE
                                </span>
                                <span class="m-0 p-0 mt-3" style="color: #522C22;font-size: 25px;line-height:25px;text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3); font-family:GoudyOld">
                                    Discover the New World!
                                </span>
                            </div>

                            <!-- Button Group (Register and E-Booklet) -->
                            <div class="pt-4 d-flex gap-4 justify-content-center align-items-center" style="font-family: GoudyOld">
                                <a href="{{ route('register') }}" class="col-xl-4 col-md-5 col-5 btn btn-lg primary-btn-neo2024">
                                    REGISTER
                                </a>
                                <a href="https://www.bit.ly/The2024NEOBooklet" class="col-xl-4 col-md-5 col-5 btn btn-lg secondary-btn-neo2024">
                                    E-BOOKLET
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Tale --}}
        <section  id="about" class="py-5">
            <div class=" container mt-5">
                <div class="row">
                    <div class="container py-5 text-center">
                        <p class="fs-1 font-acme m-0 neoHeader">
                            OUR TALE
                        </p>
                        {{-- PieceofEightnyaa ga kepanggil --}}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-xl-5 col-md-12 col-sm-12 mb-5 mb-md-5 mb-xl-0" data-aos="flip-down">
                        <div class="d-flex align-item-center">
                            <div id="neo2024VideoPlace">
                                <div class="carousel-inner">
                                    <div class="videoPlace">
                                        <img src="{{ url('./storage/logo/NEO-FULL/NEO2024Logo.png') }}" class="d-block w-100 img-fluid" style="height:300px;width:300px"
                                            alt="...">
                                            {{-- Sementara pake logo NEO --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up"  class="col-12 col-xl-7 col-md-12 col-sm-12 text-light ps-xl-5 ps-md-3 ps-3">
                        <div class="fs-4" style="color: #522C22">
                            The National English Olympics, commonly known as NEO, is a yearly national-level English
                            competition organized by BINUS English Club (BNEC) Alam Sutera. Its primary aim is to
                            harness the talents of
                            high school and college students by concentrating on various English-based competitions
                            in multiple categories.
                            {{-- The 2023 National English Olympics is a celebration of language and effective communication, featuring diverse competitions. Participants transform into language warriors, engaging in inspiring speeches, thought-provoking debates, captivating storytelling, and dynamic newscasting. NEO is more than victory. It's a journey of personal growth and a deep appreciation for the beauty of English. Join us to celebrate the power of words, push boundaries, and engage in friendly yet intense competition. Excellence is the standard, and linguistic triumph is the collective aspiration. --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

{{-- ------------------------------------------------------------- --}}
        {{-- Competition --}}
        <section class="py-5" id="competition">
            <div class="container mt-5">
                <div class="row">
                    <div class="container py-5 text-center">
                        <p class="fs-1 font-acme text-light m-0" style="font-family: 'Pieces of Eight'; color: #522C22 !important;">COMPETITIONS</p>
                    </div>
                </div>

                <div class="image-grid">
                    <div class="image-item">
                        <img src="./storage/assets2024/Debate.png" class="hover-image" alt="Debate" onclick="togglePopup('popup-1')">
                        {{-- <h2>Debate</h2> --}}
                    </div>

                    <div class="image-item">
                        <img src="./storage/assets2024/Speech.png" class="hover-image" alt="Speech" onclick="togglePopup('popup-3')">
                        {{-- <h2>Speech</h2> --}}
                    </div>
                    <div class="image-item">
                        <img src="./storage/assets2024/Storytelling.png" class="hover-image" alt="Storytelling" onclick="togglePopup('popup-4')">
                        {{-- <h2>Storytelling</h2> --}}
                    </div>
                    <div class="image-item">
                        <img src="./storage/assets2024/EssayWriting.png" class="hover-image" alt="EssayWriting" onclick="togglePopup('popup-2')">
                        {{-- <h2>Essay Writing</h2> --}}
                    </div>
                </div>


                <!-- Popup Structure -->
                {{-- Debate --}}
                <div class="popup" id="popup-1" style="overflow-y:scroll">
                    <div class="overlay" onclick="togglePopup('popup-1')"></div>
                    <div class="content" style="overflow: scroll">
                        <p class="fs-1 font-acme text-light m-0" style="font-family: 'Pieces of Eight'; color: #884A39 !important;">DEBATE</p>
                        <p>Embark on an exciting journey into the heart of intellectual exploration with our Debate Competition. Join us on this compelling voyage where your reasoning and rhetoric will be pushed to new limits...</p>
                        <h2>Price</h2>
                        {{-- <img src="./storage/assets2024/DB_early.png" class="price" alt="Early Bird">
                        <img src="./storage/assets2024/DB_normal.png" class="price" alt="Normal Register"> --}}
                        <div class="price-box-container">
                            <div class="price-box early">
                                <p>Early bird</p>
                                <p>Rp. 400.000,00 / Team</p>
                            </div>
                            <div class="price-box normal">
                                <p>Normal Registration</p>
                                <p>Rp. 475.000,00 / Team</p>
                            </div>
                        </div>
                        <div class="popup-footer">
                            <a href="https://www.bit.ly/The2024NEODebate" class="guide-btn" style="text-decoration: none;">Guide Book</a>
                            <button class="close-btn" onclick="togglePopup('popup-1')">Close</button>
                        </div>
                    </div>
                </div>

                {{-- Essay Writing --}}
                <div class="popup" id="popup-2" style="overflow-y:scroll">
                    <div class="overlay" onclick="togglePopup('popup-2')"></div>
                    <div class="content " >
                        <p class="fs-1 font-acme text-light m-0" style="font-family: 'Pieces of Eight'; color: #884A39 !important;">ESSAY WRITING</p>
                        <p>Throughout history, intellectuals have continuously pondered the plethora of ideologies that shape society and how the world operates. As one navigates through the endless sea of beliefs, the bombarding waves of ideas and opinions might overwhelm even the toughest sailors hungry for knowledge. For those who seek glory, hoist your flag and set sail for The 2024 NEO. Our Essay Writing Competition is a suitable platform for self-expression in written perfection. What lies ahead is the golden opportunity for you to string your thoughts and ideas creatively into brilliance. Wait no further and discover the depths of your critical thinking, analysis, and articulation skills.</p>
                        <h2>Price</h2>
                        {{-- <img src="./storage/assets2024/es_early.png" class="price" alt="Early Bird">
                        <img src="./storage/assets2024/es_normal.png" class="price" alt="Normal Register"> --}}
                        <div class="price-box-container">
                            <div class="price-box early">
                                <p>Early bird</p>
                                <p>Rp. 50.000,00 / Team</p>
                            </div>
                            <div class="price-box normal">
                                <p>Normal Registration</p>
                                <p>Rp. 150.000,00 / Team</p>
                            </div>
                        </div>
                        <div class="popup-footer">
                            <a href="https://www.bit.ly/The2024NEOEssay" class="guide-btn" style="text-decoration: none;">Guide Book</a>
                            <button class="close-btn" onclick="togglePopup('popup-2')">Close</button>
                        </div>
                    </div>
                </div>

                {{-- Speech --}}
                <div class="popup " id="popup-3" style="overflow-y:scroll">
                    <div class="overlay" onclick="togglePopup('popup-3')"></div>
                    <div class="content px-lg-5">
                        <p class="fs-1 font-acme text-light m-0" style="font-family: 'Pieces of Eight'; color: #884A39 !important;">SPEECH</p>
                        <p>In the vast ocean of ideas and aspirations, there lies a unique opportunity to chart a course that will inspire, persuade, and inform audiences far and wide. A speech competition is more than just a challenge; it is a dynamic platform where the art of communication meets the depth of human thought. Here, participants are invited to embark on an eternal voyage—one that pushes the boundaries of critical thinking, sharpens the tools of rhetoric, and refines the essence of storytelling. Whether you’re passionate about sharing your vision or eager to leave a lasting impact, this is your opportunity to set sail. Ready to embark on this extraordinary voyage? Step into the spotlight and let your voice resonate through the ages!</p>
                        <h2>Price</h2>
                        {{-- <img src="./storage/assets2024/sp_early.png" class="price" alt="Early Bird">
                        <img src="./storage/assets2024/sp_normal.png" class="price" alt="Normal Register"> --}}
                        <div class="price-box-container">
                            <div class="price-box early">
                                <p>Early bird</p>
                                <p>Rp. 275.000,00 / Team</p>
                            </div>
                            <div class="price-box normal">
                                <p>Normal Registration</p>
                                <p>Rp. 375.000,00 / Team</p>
                            </div>
                        </div>
                        <div class="popup-footer">
                            <a href="https://www.bit.ly/The2024NEOSpeech" class="guide-btn" style="text-decoration: none;">Guide Book</a>
                            <button class="close-btn" onclick="togglePopup('popup-3')">Close</button>
                        </div>

                    </div>
                </div>

                {{-- Storytelling --}}
                <div class="popup" id="popup-4" style="overflow-y:scroll">
                    <div class="overlay" onclick="togglePopup('popup-4')"></div>
                    <div class="content">
                        <p class="fs-1 font-acme text-light m-0" style="font-family: 'Pieces of Eight'; color: #884A39 !important;">STORYTELLING</p>
                        <p>Brace yourself for an exhilarating adventure as you delve into the unknown through our Storytelling Competition. Join us on this exciting voyage where your creativity knows no bounds. Challenge yourself to explore new horizons, not only to refine your craft but to bring your imagination vividly to life. Captivate your audience with storytelling and lead them on a voyage of wonder, discovery, and excitement. This is your chance to craft tales that resonate, inspire, and leave a lasting impression. Are you ready to set sail on this eternal voyage and discover the new world within your own imagination?</p>
                        <h2>Price</h2>
                        {{-- <img src="./storage/assets2024/ST_early.png" class="price" alt="Early Bird">
                        <img src="./storage/assets2024/ST_normal.png" class="price" alt="Normal Register"> --}}
                        <div class="price-box-container">
                            <div class="price-box early">
                                <p>Early bird</p>
                                <p>Rp. 275.000,00 / Team</p>
                            </div>
                            <div class="price-box normal">
                                <p>Normal Registration</p>
                                <p>Rp. 375.000,00 / Team</p>
                            </div>
                        </div>
                        <div class="popup-footer">
                            <a href="https://www.bit.ly/The2024NEOStorytelling" class="guide-btn" style="text-decoration: none;">Guide Book</a>
                            <button class="close-btn" onclick="togglePopup('popup-4')">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const imageItems = document.querySelectorAll('.image-item');

        const observerOptions = {
            root: null,
            threshold: 0.1,
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-up');
                } else {
                    entry.target.classList.remove('fade-up');
                }
            });
        }, observerOptions);

        imageItems.forEach(imageItem => {
            observer.observe(imageItem);
        });
    });

    function togglePopup(popupId) {
    var popup = document.getElementById(popupId);
    popup.style.display = (popup.style.display === "block") ? "none" : "block";
    }

    </script>

{{-- ----------------------------------------- --}}

        {{-- Timeline --}}
        <section class="py-5" id="timeline">
            <div class="mt-5">
                <div class="text-center text-pink">
                    <p class="fs-1 font-acme text-light" style="font-family: PiecesOfEight; color: #C22522;">TIMELINE</p>
                </div>
                {{-- desktop --}}
                <section class="py-5 d-none d-xl-block" id="timeline_image_section">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <!-- Centered image that is shifted slightly to the left and responsive -->
                                <img src="/storage/landing_page/faq/Maptimeline.png" class="img-fluid" alt="Timeline Map"
                                     style="max-width: 1223px; height: auto; margin-left: -50px;" >
                            </div>
                        </div>
                    </div>
                </section>
                {{-- mobile --}}
                <section class="py-5 d-xl-none d-block" id="timeline_image_mobile_section">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <!-- Same image but smaller and responsive for mobile -->
                                <img src="/storage/landing_page/faq/Maptimeline.png" class="img-fluid" alt="Timeline Map"
                                     style="max-width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        {{-- modal starter pack --}}
        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog-centered modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">How to Register</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ol style="list-style: none">
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Step 1:</p>
                                    <p>Go to <a href="https://neo.mybnec.org" target="_blank">neo.bnec.org</a></p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Step 2:</p>
                                    <p>Click <span class="fw-semibold">"Register"</span></p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Step 3:</p>
                                    <p>Complete your registration details</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Step 4:</p>
                                    <p>Go to <a href="https://neo.mybnec.org/dashboard">Dashboard Page</a> and select
                                        the competition</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Step 5:</p>
                                    <p>Fill in the form</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Step 6:</p>
                                    <p>Complete your payment</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Step 7:</p>
                                    <p>Wait for the committee to accept the payment</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Step 7:</p>
                                    <p>Registration completed! Check your registration details in <a
                                            href="https://neo.mybnec.org/registrations" target="_blank">Website NEO
                                            2023</a></p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="modal fade" id="tncModa" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog-centered modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Terms and Conditions</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ol style="list-style: none">
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">General Rules and Regulations</p>
                                    <p>
                                        1. All registered participants, except Debate participants, CAN NOT be replaced after registration.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Overcome Stage Fright</p>
                                    <p>These rules are binding and final but can be altered, added to, or removed by the committee as deemed necessary. Non-compliance will result in DISQUALIFICATION.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Stay Healthy</p>
                                    <p>Prioritize your physical and mental health during the competition. Get
                                        enough sleep, eat nutritious meals, and stay hydrated. A healthy body and mind
                                        will help you perform at your best.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Embrace Adaptability</p>
                                    <p>Be ready to adapt to unexpected situations. Sometimes, things may
                                        not go as planned during the competition. Stay flexible and maintain composure
                                        when
                                        faced with challenges or changes in the program.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Reflect and Improve</p>
                                    <p>After the competition, take time to reflect on your performance.
                                        Analyze both your strengths and areas for improvement. Use feedback from judges
                                        and
                                        peers to refine your skills for future competitions.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Stay Positive</p>
                                    <p>Maintain a positive mindset throughout the competition. Focus on your
                                        passion for your chosen event and your dedication to improvement. Positivity can
                                        help
                                        you handle stress and adversity more effectively.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Network and Connect</p>
                                    <p>Take the opportunity to network with fellow participants, judges,
                                        and organizers. Building connections can open doors for future opportunities and
                                        provide
                                        a support system for your personal and professional growth.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Enjoy the Experience</p>
                                    <p>Remember that participating in the 2023 National English Olympics
                                        is a unique and valuable experience. Embrace the journey, savor the moments, and
                                        have
                                        fun while showcasing your talents and abilities. Cherish the memories you create
                                        along
                                        the way.
                                    </p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div  class="modal fade"  id="tncModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog-centered modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Tips & Tricks</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ol style="list-style: none">
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">General Rules and Regulations
                                    </p>
                                    <p>1. All registered participants, except Debate participants, CAN NOT be replaced after registration.</p>
                                    <p>2. These rules are binding and final but can be altered, added to, or removed by the committee as deemed necessary. Non-compliance will result in DISQUALIFICATION</p>
                                    <p>3. Participants agree to secure data storage and consent that their data MAY be shared with third parties solely for purposes related to the event.</p>
                                    <p>4. All competitions and contents, including speeches and scripts, MUST be in English and MUST NOT include discriminatory comments, explicit content, or vulgar language.</p>
                                    <p>5. Participants MUST join the Zoom meeting at least 30 minutes before the technical meeting, coaching clinic, and the preliminary round, and arrive at the event location at least 30 minutes before the semifinal and Final round.</p>
                                    <p>6. All participants MUST wear formal clothing. Participants MUST wear formal shirts (preferably with ties) during the preliminary and semifinal rounds, then wear institution alma mater for university students or school uniform for students in the final round. All participants are NOT ALLOWED to wear t-shirts.</p>
                                    <p>7. Participants MUST consent to being recorded throughout the event.</p>
                                    <p>8. All participants or their representatives MUST attend the Technical Meeting and Coaching Clinic.</p>
                                    <p>9. Attendance at the Technical Meeting and Coaching Clinic is mandatory for obtaining further information about the event.</p>
                                    <p>10. Participants are not allowed to leave the event premises without permission from the committee.</p>
                                    <p>11. When it is a participant's turn, they MUST promptly proceed to the designated area (Designated breakout room for technical meeting, coaching clinic, and preliminary round. Also each designated room for the semifinal and final round).
                                    </p>
                                    <p>12. Participants MUST refrain from speaking when it is not their turn to prevent disruptions.</p>
                                    <p>13. Committee members WILL announce each participant's name three times before their turn. Failure to respond will be considered as a walkout.</p>
                                    <p>14. Judges MAY deduct points for rule violations and have the discretion to disqualify participants for serious infringements or non-compliance.</p>
                                    <p>15. The NEO 2023 Committee is NOT RESPONSIBLE for personal issues or disturbances not caused by the committee.
                                    </p>
                                    <p>16. All decisions made by the judges, which are FINAL and not subject to appeal, MUST be respected and accepted by all participants.</p>
                                    <p>17. No refunds for registration fees will be given unless proof of payment is uploaded after slots are full. For technical issues, contact the designated person.</p>
                                    <p>18. Registration fees for participants who walk out will not be refunded.</p>
                                    <p>19. Participants are strictly forbidden to smoke, vape, show sharp weapons, illegal drugs, and alcohol in the Zoom meeting, and also forbidden to bring them to the venue.</p>
                                    <p>20. Displaying or showing inappropriate videos and images, including those violating the ITE Law of the Republic of Indonesia, is prohibited.</p>
                                    <p>21. Damaging any facilities provided by the committee is prohibited.
                                    </p>
                                    <p>22. Violations against rules 20, 21, and 22 will be handled according to applicable regulations.</p>
                                    <p>23. Participants MAY only document the competition during the semifinals and finals.
                                    </p>
                                    <p>24. Participants MUST comply with all rules and regulations set forth by the committee.</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Requirements</p>
                                    <p>1. Participants MUST be senior high school, or university students located in Indonesia.
                                    </p>
                                    <p>Participants MUST be at least senior high school students by the age of 15 and, at most, university students by the age of 22 by 2023.</p>
                                    <p>Participants who are previous winners of NEO are allowed to join the same competition field.</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Payment
                                    </p>
                                    <p>1. Payment can be done through Bank Payments or E-Wallet.</p>
                                    <p>2. Payment cannot be refunded.</p>
                                    <p>3. Payment must be done in full, which means installment payments are not accepted.</p>
                                    <p>4. Payment must be done within the given time at the website when doing the registration process.</p>
                                    <p>5. After payment is done, participants will receive the payment confirmation in the period of 1x24 hours.</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Technical Meeting
                                    </p>
                                    <p>1. Represented by the chairperson/one of the group members. </p>
                                    <p>2. Participants must attend the Technical Meeting from the beginning until the end.
                                    </p>
                                    <p>3. Participants are highly requested to join the Zoom meeting 30 minutes before the Technical Meeting starts. </p>
                                    <p>4. Participants must wear appropriate clothing while attending the Technical Meeting.
                                    </p>
                                    <p>5. Participants are prohibited from wearing clothing/attributes that indicate their origin of institution. </p>
                                    <p>6. Participants are prohibited from using the name format indicating their origin of the institution.  </p>
                                    <p>7. Participants must pay attention and not make any noise during the Technical Meeting.  </p>
                                    <p>8. Participants are expected to turn on their cameras during the event.  </p>
                                    <p>9. Participants must mute their microphones during the event.  </p>
                                    <p>10. Participants are allowed to ask through the chatbox or unmute their mic after using the "raise hand" feature in the Q&A session   </p>
                                    <p>11. The NEO 2023 committee is NOT RESPONSIBLE for any internet issues or other issues/disturbances suffered by the participants throughout the event.  </p>
                                    <p>12. Participants are not allowed to leave the Zoom meeting without the committee's permission.  </p>
                                    <p>13. Participants who do not attend must accept the results of the Technical Meeting.  </p>
                                    <p>14. There is no re-explanation of information during the Technical Meeting to participants/groups who were not present.  </p>
                                    <p>15. It is prohibited to display or show videos and/or images related to pornography, smoking, liquor, and others that violate the ITE Law of the Republic of Indonesia.  </p>
                                    <p>16. Participants must obey all the rules that the committee has made.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Coaching Clinic</p>

                                    <p>1. Represented by the chairperson/one of the group members.  </p>
                                    <p>2. Participants must attend the Coaching Clinic from the beginning to the end.  </p>
                                    <p>3. Participants are highly requested to join the Zoom meeting 30 minutes before the Coaching Clinic starts. </p>
                                    <p>4. Participants are highly requested to join the Zoom meeting 30 minutes before the Coaching Clinic starts.  </p>
                                    <p>5. Participants are prohibited from wearing clothing/attributes that indicate their origin of institution.  </p>
                                    <p>6. Participants are prohibited from using the name format indicating their origin of institution.  </p>
                                    <p>7. Participants must pay attention and not make any noise during the Coaching Clinic.  </p>
                                    <p>8. Participants are expected to turn on their cameras during the event.  </p>
                                    <p>9. Participants must mute their microphones during the event.  </p>
                                    <p>10. Participants are allowed to ask through the chatbox or unmute their mic after using the "raise hand" feature in the Q&A session. </p>
                                    <p>11. The NEO 2023 committee is NOT RESPONSIBLE for any internet issues or other issues/disturbances suffered by the participants throughout the event. </p>
                                    <p>12. Participants are not allowed to leave the Zoom meeting without the committee's permission </p>
                                    <p>13. There is no re-explanation of information during the Coaching Clinic to participants/groups who were not present. </p>
                                    <p>14. It is prohibited to display or show videos and/or images related to pornography, smoking, liquor, and others that violate the ITE Law of the Republic of Indonesia. </p>
                                    <p>15. Participants must obey all the rules that the committee has made.</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Webinar</p>
                                    <p>1. For BINUSIAN, please change the name format to NIM_Name.</p>
                                    <p>2. For non-BINUSIAN, please change the name format to Institution_Name.</p>
                                    <p>3. Participants are highly requested to join the Zoom meeting 10 minutes before the webinar starts.</p>
                                    <p>4. Participants have to wear appropriate clothing while attending the webinar.</p>
                                    <p>5. Participants are expected to turn on their cameras during the event.</p>
                                    <p>6. Participants have to mute their microphones during the event.</p>
                                    <p>7. Participants are allowed to ask through the chatbox or unmute their mic after using the "raise hand" feature in the Q&A session.</p>
                                    <p>8. Participants are required to attend the event from the beginning to the end and fill in the attendance and satisfactory form to claim the e-certificate and SAT Points for BINUSIAN.</p>
                                    <p>9. It is prohibited to display or show videos and/or images related to pornography, smoking, liquor, and others that violate the ITE Law of the Republic of Indonesia.</p>
                                    <p>10. If you experience problems, please contact one of the webinar committees.</p>
                                    <p>11. Participants MUST obey all the rules that the committee has made.</p>
                                </div>
                            </li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>


        <div  class="modal fade"  id="tipsModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog-centered modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Tips & Tricks</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ol style="list-style: none">
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Research and Prepare</p>
                                    <p>Before the competition, thoroughly research the topic or subject
                                        matter related to your event. Having a deep understanding of your material will
                                        help you
                                        respond confidently to any questions or challenges from the judges or audience.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Overcome Stage Fright</p>
                                    <p>Many participants experience stage fright. To overcome it,
                                        practice in front of friends and family to gain confidence. You can also try
                                        relaxation
                                        techniques like deep breathing or visualization to calm your nerves before going
                                        on
                                        stage.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Stay Healthy</p>
                                    <p>Prioritize your physical and mental health during the competition. Get
                                        enough sleep, eat nutritious meals, and stay hydrated. A healthy body and mind
                                        will help you perform at your best.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Embrace Adaptability</p>
                                    <p>Be ready to adapt to unexpected situations. Sometimes, things may
                                        not go as planned during the competition. Stay flexible and maintain composure
                                        when
                                        faced with challenges or changes in the program.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Reflect and Improve</p>
                                    <p>After the competition, take time to reflect on your performance.
                                        Analyze both your strengths and areas for improvement. Use feedback from judges
                                        and
                                        peers to refine your skills for future competitions.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Stay Positive</p>
                                    <p>Maintain a positive mindset throughout the competition. Focus on your
                                        passion for your chosen event and your dedication to improvement. Positivity can
                                        help
                                        you handle stress and adversity more effectively.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Network and Connect</p>
                                    <p>Take the opportunity to network with fellow participants, judges,
                                        and organizers. Building connections can open doors for future opportunities and
                                        provide
                                        a support system for your personal and professional growth.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Enjoy the Experience</p>
                                    <p>Remember that participating in the 2023 National English Olympics
                                        is a unique and valuable experience. Embrace the journey, savor the moments, and
                                        have
                                        fun while showcasing your talents and abilities. Cherish the memories you create
                                        along
                                        the way.
                                    </p>
                                </div>
                            </li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>


        <div  class="modal fade" id="benefitModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog-centered modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Benefits</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ol>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Free ticket to AEO (Rank 1-3)</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Cash prize</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Trophies for winners</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">National Experience</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Nationwide connection</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">SAT Points</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div>
                                    <img src="{{ url('./storage/assets/Timeline1new.png') }}" class="img-fluid"
                                        style="max-width:40px">
                                </div>
                                <div>
                                    <p class="m-0 fw-semibold">Certificates</p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- StarterPack --}}
        <section class="pt-5" id="how-to-register">
            <div class="container mt-5">
                <!-- Title -->
                <div class="text-center">
                    <p class="fs-1 font-acme text-light m-0" style="font-family: PiecesOfEight">HOW TO REGISTER</p>
                </div>

                <!-- Normal layout for Desktop -->
                <div class="row justify-content-center d-none d-lg-block position-relative">
                    <!-- Registerbox image -->
                    <div class="col-12 text-center">
                        <img src="/storage/landing_page/faq/registerbox.png" class="img-fluid" alt="How to Register" style="width: 100%; max-width: 1223px;">

                        <!-- Text content positioned on top of the image -->
                        < <div class="position-absolute top-50 start-50 translate-middle text-start p-3" style="width: 90%; max-width: 1349px; color: white; transform: translate(-50%, -40px);">
                            <!-- Left-aligned steps text -->
                            <p class="fs-5" style="font-family: GoudyOldStyle">
                                <strong>1. MAKE AN ACCOUNT</strong><br>
                                a) Open our website (<a href="http://neo.mybnec.org" target="_blank" style="color: #fff;">neo.mybnec.org</a>) and click the “Register” button at the top right of your screen.<br>
                                b) Fill in the form as required.<br>
                                c) Verify your account by checking your e-mail.<br><br>

                                <strong>2. REGISTER FOR THE COMPETITION</strong><br>
                                a) Login to your account by clicking the “Login” button at the top right of your screen.<br>
                                b) Once you have logged in, select the competition field that you want to register.<br>
                                c) Fill in the form as required, and click the “Confirm” button.<br>
                                d) In the Payment Page, fill the required data correctly, and click the “Submit” button.<br>
                                e) Wait for the admin to confirm your payment.<br>
                                <span class="fst-italic">*To check your registration status, click your profile picture and then click “My Registration”. If the status is “Accepted”, then you are officially registered as a participant of The 2024 NEO.</span><br>
                                f) After payment, you will receive an invoice and participant account in your e-mail.<br>
                                <span class="fst-italic">*If you haven’t got the invoice, make sure to contact NEO’s LINE Official Account directly.</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion layout for Mobile/Tablet -->
                <section class="py-4 d-block d-md-none" id="how_to_register" style="background-color: #DDAC72; padding: 50px; border-radius: 30px; max-width: 800px; margin: 0 auto; border: 5px solid #3B2B1C; box-shadow: 0 4px 8px #522C22;">
                    <div class="container mt-5">
                        <!-- Accordion -->
                        <div class="accordion" id="accordionExample" style="border: none;">
                            <div class="accordion-item b-0" style="border: none; margin-bottom: 10px;">
                                <div class="accordion-header" style="position: relative; padding: 0; margin: 0;">
                                    <img src="/storage/assets/accordionbtn.png" alt="Accordion Button" class="accordion-image" style="width: 100%; height: auto; display: block;">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" style="position: absolute; left: 0; top: 0; background-color: transparent; border: none; padding: 0; cursor: pointer; width: 100%; height: 100%;">
                                        <!-- Empty button to make the image clickable -->
                                    </button>
                                    <div style="position: absolute; left: 20px; top: 10px; color: #3B2B1C; font-family: GoudyOldStyle; font-weight: bold; z-index: 1;">
                                        1. MAKE AN ACCOUNT
                                    </div>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse">
                                    <div class="accordion-body" style="background-color: #DDAC72; padding: 20px; color: #3B2B1C; font-family: GoudyOldStyle;font-size: 16px;">
                                        a) Open our website (<a href="http://neo.mybnec.org" target="_blank" style="color: #3B2B1C;">neo.mybnec.org</a>) and click the “Register” button at the top right of your screen.<br>
                                        b) Fill in the form as required.<br>
                                        c) Verify your account by checking your e-mail.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item b-0" style="border: none; margin-bottom: 10px;">
                                <div class="accordion-header" style="position: relative; padding: 0; margin: 0;">
                                    <img src="/storage/assets/accordionbtn.png" alt="Accordion Button" class="accordion-image" style="width: 100%; height: auto; display: block;">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" style="position: absolute; left: 0; top: 0; background-color: transparent; border: none; padding: 0; cursor: pointer; width: 100%; height: 100%;">
                                        <!-- Empty button to make the image clickable -->
                                    </button>
                                    <div style="position: absolute; left: 20px; top: 10px; color: #522C22; font-weight: bold; z-index: 1; font-family: GoudyOldStyle;font-size: 14px;">
                                        2. REGISTER FOR THE COMPETITION
                                    </div>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse">
                                    <div class="accordion-body" style="background-color: #DDAC72; padding: 20px; color: #522C22; font-family: GoudyOldStyle;font-size: 16px;">
                                        a) Login to your account by clicking the “Login” button at the top right of your screen.<br>
                                        b) Once you have logged in, select the competition field that you want to register.<br>
                                        c) Fill in the form as required, and click the “Confirm” button.<br>
                                        d) In the Payment Page, fill the required data correctly, and click the “Submit” button.<br>
                                        e) Wait for the admin to confirm your payment.<br>
                                        <div class="fst-italic" style="text-indent: 12px">  *To check your registration status, click your profile picture and then click “My Registration”. If the status is “Accepted”, then you are officially registered as a participant of The 2024 NEO.</div><br>
                                        f) After payment, you will receive an invoice and participant account in your e-mail.<br>
                                        <div class="fst-italic" style="text-indent: 12px">*If you haven’t got the invoice, make sure to contact NEO’s LINE Official Account directly.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>











        {{-- Testimoni --}}
        <section id="testimony" class="py-5">
            <div data-aos="fade-left" class="container mt-5"  >
                <div class="row">
                    <div class="container py-5 text-center">
                        <p class="fs-1 font-acme m-0 neoHeader">
                            TESTIMONIES
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="woodContainer behind d-flex justify-content-center align-items-center mb-3 p-3 pt-3 rounded-5">
                            <div id="111" class="message-container col-12 position-relative"
                                style="padding:20px;  ">
                                <div class="row align-items-center">
                                    <div
                                        class="col-lg-5 col-sm-12 col-12 order-lg-0 order-sm-0 order-0 mb-4 mb-sm-4 mb-lg-0 d-flex justify-content-start justify-content-sm-start justify-content-lg-center">
                                        <img src="{{ url('./storage/assets/Speech_Kenneth Juan Fernando.jpg') }}" alt=""
                                            class="img-fluid"
                                            style="border-radius:180px; object-fit:cover;height:300px;width:300px;border-style:solid;border-color: #522c22">
                                    </div>
                                    <div class="col-lg-7 col-sm-12 col-12 order-lg-1 order-sm-1 order-1 justify-content-center neoContent">
                                        <div class="mb-2">
                                            This competition changed my life. New friends? Checked. New SENIOR friends? Checked. New experiences? Checked. New achievements? Checked. New trophies? Checked. New college opportunities? Checked. I can't summarize just how precious this competition has changed my life in a simple paragraph. You won't know how I feel until you actually try out NEO yourself. I dare you ;)
                                        </div>
                                        <p class="mb-0 fs-3 neoHeader">
                                            KENNETH JUAN FERNANDO
                                        </p>
                                        <p class="mb-2 fs-3 neocontent">
                                            Speech Champion of NEO 2023
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div id="222" class="message-container col-12 position-relative"
                                style="padding:20px; display:none">
                                <div class="row align-items-center">
                                    <div
                                        class="col-lg-5 col-sm-12 col-12 order-lg-0 order-sm-0 order-0 mb-4 mb-sm-4 mb-lg-0 d-flex justify-content-start justify-content-sm-start justify-content-lg-center">
                                        <img src="{{ url('./storage/assets/Debate_Fayola Maulida.jpg') }}" alt=""
                                            class="img-fluid"
                                            style="border-radius:180px; object-fit:cover;height:300px;width:300px;border-style:solid;border-color: #522c22">
                                    </div>
                                    <div class="col-lg-7 col-sm-12 col-12 order-lg-1 order-sm-1 order-1 justify-content-center neoContent">
                                        <div class="mb-2">
                                            NEO 2023 was an incredible experience! The debate competition was challenging yet so much fun—everything you'd expect from a well-prepared competition. The event ran smoothly, thanks to the prompt and responsive event committee, who ensured everything was in order from start to finish. It was a perfect blend of intense competition and engaging moments, making it an unforgettable journey for all participants!
                                        </div>
                                        <p class="mb-0 fs-3 neoHeader">
                                            FAYOLA MAULIDA
                                        </p>
                                        <p class="mb-2 fs-3 neocontent">
                                            Debate Champion of NEO 2023
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div id="333" class="message-container col-12 position-relative"
                                style="padding:20px; display:none">
                                <div class="row align-items-center">
                                    <div
                                        class="col-lg-5 col-sm-12 col-12 order-lg-0 order-sm-0 order-0 mb-4 mb-sm-4 mb-lg-0 d-flex justify-content-start justify-content-sm-start justify-content-lg-center">
                                        <img src="{{ url('./storage/assets/STORYTELLING 1st winner_Trishamara Jasmine Kirana.png') }}" alt=""
                                            class="img-fluid"
                                            style="border-radius:180px; object-fit:cover;height:300px;width:300px;border-style:solid;border-color: #522c22">
                                    </div>
                                    <div class="col-lg-7 col-sm-12 col-12 order-lg-1 order-sm-1 order-1 justify-content-center neoContent">
                                        <div class="mb-2">
                                            If there’s one word to describe my experience in the NEO 2023 held by BNEC it would be “unexpected”. However, it’s the type of unexpected that would change my perspective on storytelling competitions and see it all in a brand new light. In a short amount of time, I felt like we all bonded throughout the elimination rounds and shared many stories to each other that made me forget we were supposed to be competing at all. Not to mention how sweet and wonderful the committee were as well who stayed by our side until the end! NEO will always have a special place in my heart not only as a competition to put your skills to the test but to build strong friendships and connections in the moment.
                                        </div>
                                        <p class="mb-0 fs-3 neoHeader">
                                            TRISHAMARA JASMINE KIRANA
                                        </p>
                                        <p class="mb-2 fs-3 neocontent">
                                            Storytelling Champion of NEO 2023
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div id="444" class="message-container col-12 position-relative"
                                style="padding:20px; display:none">
                                <div class="row align-items-center">
                                    <div
                                        class="col-lg-5 col-sm-12 col-12 order-lg-0 order-sm-0 order-0 mb-4 mb-sm-4 mb-lg-0 d-flex justify-content-start justify-content-sm-start justify-content-lg-center">
                                        <img src="{{ url('./storage/assets/NEWSCAST Testimony_Kimberly.jpg') }}" alt=""
                                            class="img-fluid"
                                            style="border-radius:180px; object-fit:cover;height:300px;width:300px;border-style:solid;border-color: #522c22">
                                    </div>
                                    <div class="col-lg-7 col-sm-12 col-12 order-lg-1 order-sm-1 order-1 justify-content-center neoContent">
                                        <div class="mb-2">
                                            Winning the BNEC NEO 2023 Newscasting was an amazing journey! I loved crafting my own news piece and the thrill of live reporting—it boosted my confidence and creativity. I made great friends and unforgettable memories. Here’s to BNEC NEO 2024:  Let’s grab this chance to showcase our talents and make it an unforgettable experience together!
                                        </div>
                                        <p class="mb-0 fs-3 neoHeader">
                                            KIMBERLY KAYLA DEWI
                                        </p>
                                        <p class="mb-2 fs-3 neocontent">
                                            Newscasting Champion of NEO 2023
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Untuk web --}}
                        <div class="infront d-none d-lg-flex">
                            <ul class="nav nav-tabs border-0">
                                <li class="nav-item">
                                    <div class="space" style="border-radius: 60px; ">
                                        <a class="nav-link" onclick="showContent('111');" style="border: none;">
                                            <img src="{{ url('./storage/assets/Speech_Kenneth Juan Fernando.jpg') }}" alt="" class="img-fluid"
                                            style="border-radius: 100%; height: 80px; width:80px; object-fit:cover;  border: none;">
                                        </a>
                                    </div>

                                </li>
                                <li class="nav-item">
                                    <div class="space" style="border-radius: 60px;">

                                            <a class="nav-link" onclick="showContent('222');" style="border: none;">
                                                <img src="{{ url('./storage/assets/Debate_Fayola Maulida.jpg') }}"
                                                    alt="" class="img-fluid"
                                                    style="border-radius: 100%; height: 80px; width:80px; object-fit:cover;  border: none;">
                                            </a>

                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="space" style="border-radius: 60px;">

                                            <a class="nav-link" onclick="showContent('333');" style="border: none;">
                                                <img src="{{ url('./storage/assets/STORYTELLING 1st winner_Trishamara Jasmine Kirana.png') }}"
                                                    alt="" class="img-fluid"
                                                    style="border-radius: 100%; height: 80px; width: 80px; object-fit:cover; border: none;">
                                            </a>

                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="space" style="border-radius: 60px;">
                                            <a class="nav-link" onclick="showContent('444');" style="border: none;">
                                                <img src="{{ url('./storage/assets/NEWSCAST Testimony_Kimberly.jpg') }}"
                                                    alt="" class="img-fluid"
                                                    style="border-radius: 100%; height: 80px; width: 80px; object-fit:cover; border: none;">
                                            </a>

                                    </div>
                                </li>
                            </ul>
                        </div>
                        {{-- Untuk HP --}}
                        <div class="infront-hp d-flex d-lg-none">
                            <ul class="nav nav-tabs border-0">
                                <li class="nav-item">
                                    <div class="space" style="border-radius:60px; ">
                                        <div class="SC-button">
                                            <a class="nav-link" onclick="showContent('111');">
                                                <img src="{{ url('./storage/assets/Speech_Kenneth Juan Fernando.jpg') }}"
                                                    alt="" class="img-fluid"
                                                    style="border-radius: 100%; height: 80px; width: 80px;">
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="space" style="border-radius:60px;  ">
                                        <div class="SC-button">
                                            <a class="nav-link" onclick="showContent('222');">
                                                <img src="{{ url('./storage/assets/Debate_Fayola Maulida.jpg') }}"
                                                    alt="" class="img-fluid"
                                                    style="border-radius: 100%; height: 80px; width: 80px;">
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="space" style="border-radius:60px;  ">
                                        <div class="SC-button">
                                            <a class="nav-link" onclick="showContent('333');">
                                                <img src="{{ url('./storage/assets/STORYTELLING 1st winner_Trishamara Jasmine Kirana.png') }}"
                                                    alt="" class="img-fluid"
                                                    style="border-radius: 100%; height: 80px; width: 80px; object-fit:cover">
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="space" style="border-radius:60px;">
                                        <div class="SC-button">
                                            <a class="nav-link" onclick="showContent('444');">
                                                <img src="{{ url('./storage/assets/NEWSCAST Testimony_Kimberly.jpg') }}"
                                                    alt="" class="img-fluid"
                                                    style="border-radius: 100%; height: 80px; width: 80px;">
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END HERE --}}
        {{-- Judges --}}
        {{-- <section class="py-5" id="judge">
            <div class="container mt-5">
                <div class="row">
                    <div class="container py-5 text-center">
                        <p class="fs-1 font-acme text-light m-0" style="font-family: Buffalo-Inline">JUDGES</p>
                        <img src="/storage/landing_page/faq/stylePreviousNeo.svg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items">
                    <div class="d-flex align-items">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide d-flex flex-column align-items-center gradient-div"
                                    style="width: 400px; height:550;">
                                    <img class="img-fluid" src="{{ url('./storage/assets/Judges/Debate-Muhammad_Batara_Mulya.png') }}"
                                        style="height: 400px; width:auto;" />
                                    <p style="font-size: 24px; color: white; font-weight: bold; text-align: center;">Debate</p>
                                    <p style="font-size: 18px; color: white; font-weight: bold;  text-align: center;">Muhammad Batara Multa</p>
                                </div>
                                <div class="swiper-slide d-flex flex-column align-items-center gradient-div"
                                    style="width: 400px; height:550;">
                                    <img class="img-fluid" src="{{ url('./storage/assets/Judges/Speech-Sabrina_Fitria.png') }}"
                                        style="height: 400px; width:auto;" />
                                        <p style="font-size: 24px; color: white; font-weight: bold;  text-align: center;">Speech</p>
                                    <p style="font-size: 18px; color: white; font-weight: bold;  text-align: center;">Sabrina Fitria</p>
                                </div>
                                <div class="swiper-slide d-flex flex-column align-items-center gradient-div"
                                    style="width: 400px; height:550;">
                                    <img class="img-fluid" src="{{ url('./storage/assets/Judges/Speech-Sahil_Kumar.png') }}"
                                        style="height: 400px; width:auto;" />
                                        <p style="font-size: 24px; color: white; font-weight: bold;text-align: center;">Speech</p>
                                    <p style="font-size: 18px; color: white; font-weight: bold;  text-align: center;">Sahil Kumar</p>
                                </div>
                                <div class="swiper-slide d-flex flex-column align-items-center gradient-div"
                                    style="width: 400px; height:550;">
                                    <img class="img-fluid" src="{{ url('./storage/assets/Judges/news-Karina_Aprilia.png') }}"
                                        style="height: 400px; width:auto;" />
                                        <p style="font-size: 24px; color: white; font-weight: bold;text-align: center;">Newscasting</p>
                                    <p style="font-size: 18px; color: white; font-weight: bold;  text-align: center;">Karina Aprilia</p>
                                </div>
                                <div class="swiper-slide d-flex flex-column align-items-center gradient-div"
                                    style="width: 400px; height:550;">
                                    <img class="img-fluid" src="{{ url('./storage/assets/Judges/news-Widya_Rahmadini.png') }}"
                                        style="height: 400px; width:auto;" />
                                        <p style="font-size: 24px; color: white; font-weight: bold; text-align: center;">Newscasting</p>
                                    <p style="font-size: 18px; color: white; font-weight: bold;  text-align: center;">Widya Rahmadini</p>
                                </div>
                                    <div class="swiper-slide d-flex flex-column align-items-center gradient-div"
                                    style="width: 400px; height:550;">
                                    <img class="img-fluid" src="{{ url('./storage/assets/Boy.svg') }}"
                                        style="height: 500px; width:auto;" />
                                    <p style="font-size: 24px; color: white; font-weight: bold; margin-top: 10px; text-align: center;">TBA</p>
                                </div>
                                <!-- Add more swiper-slide elements similarly -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}




        {{-- Merchandise --}}
        {{-- <section  class="py-5" id="merchandise">
            <div class=" container mt-5">
                <div class="row">
                    <div class="container py-5 text-center">
                        <p class="fs-1 font-acme text-light m-0" style="font-family: Buffalo-Inline">OUR MERCHANDISE</p>
                        <img src="/storage/landing_page/faq/stylePreviousNeo.svg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-xl-5 col-md-12 col-sm-12 mb-5 mb-md-5 mb-xl-0" data-aos="flip-down">
                        <div class="d-flex align-item-center">
                            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="4000">
                                        <img src="{{ url('./storage/assets/mer1.png') }}" class="d-block w-100 img-fluid " alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="4000">
                                        <img src="{{ url('./storage/assets/mer2.png') }}" class="d-block w-100 img-fluid " alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="4000">
                                        <img src="{{ url('./storage/assets/mer3.png') }}" class="d-block w-100 img-fluid " alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="4000">
                                        <img src="{{ url('./storage/assets/mer4.png') }}" class="d-block w-100 img-fluid " alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="4000">
                                        <img src="{{ url('./storage/assets/mer5.png') }}" class="d-block w-100 img-fluid " alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up"  class="col-12 col-xl-7 col-md-12 col-sm-12 text-light ps-xl-5 ps-md-3 ps-3">
                        <div class="fs-4">
                            Enhance your NEO journey with our exclusive merchandise, carefully crafted to reflect the spirit of linguistic excellence. Dive into a world of style and comfort while supporting the NEO competition – your purchase not only adds flair to your wardrobe but also contributes to the success of the event. Don't miss out on this opportunity to showcase your NEO pride and elevate your competition experience                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </section> --}}


        {{-- FAQ --}}
        <section class="py-5" id="faq" style="background-color:#44C4DB">
            <div class="container mt-5">
                <div class="col-12">
                    <div class="row">
                        <div class="container py-5 text-center">
                            <p class="fs-1 font-acme m-0 neoHeader" >FREQUENTLY ASKED QUESTIONS</p>
                            {{-- <img src="/storage/landing_page/faq/stylePreviousNeo.svg" class="img-fluid" alt=""> --}}
                        </div>
                    </div>
                    {{-- <div class="col-12 row justify-content-center"> --}}
                    <div data-aos="fade-up" class="col-12 row justify-content-center accordion accordion-flush" id="accordion-example-faq"
                        style="border:none;">
                        <div class="accordion-item col-12 col-lg-6 mb-4" style="background-color: #44C4DB; color: #522C22;">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold;"
                                    style="background-color: #DDAC72;border-radius:15px !important; color: #522C22;" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne">
                                    <span class="pe-4">What is The National English Olympics (NEO)?</span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse glacialReg"
                                data-bs-parent="#accordion-example-faq" style="background-color: #44C4DB;">
                                <div class="accordion-body">
                                    <p style="color: #522C22">
                                        The National English Olympics (NEO) is an annual event conducted by the BINUS English Club (BNEC)
                                        to be a platform to gather extraordinary talents around Indonesia to compete.
                                        This year, NEO has 4 fields, which are Debate, Speech, Storytelling, and Essay Writing. </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item col-12 col-lg-6 mb-4" style="background-color: #44C4DB; color: #522C22">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold;"
                                    style="background-color: #DDAC72;border-radius:15px !important; color: #522C22" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <span class="pe-4">When and where will The 2024 NEO be held?</span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse glacialReg"
                                data-bs-parent="#accordion-example-faq" style="background-color: #44C4DB;">
                                <div class="accordion-body neoContent" style="color: #522C22">
                                    <p style="color: #522C22">
                                        The 2024 NEO will be held on November 27 – December 1. For on-site events, it will be held in BINUS @Alam Sutera.
                                    <ul>
                                        <li>November 27: Technical Meeting & Coaching Clinic (except Essay Writing) – ONLINE.</li>
                                        <li>November 30: Competition Day 1 – HYBRID</li>
                                        <li>December 1: Competition Day 2 and Closing Ceremony – HYBRID</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item col-12 col-lg-6 mb-4" style="background-color: #44C4DB; color: #522C22">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold;"
                                    style="background-color: #DDAC72;border-radius:15px !important; color: #522C22" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <span class="pe-4">Will all the competition fields be held on-site?</span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse glacialReg"
                                data-bs-parent="#accordion-example-faq" style="background-color: #44C4DB;">
                                <div class="accordion-body">
                                    <p>
                                        No, not all the competition fields are held on-site.
                                        The Debate, Speech, and Storytelling competitions are held on-site at BINUS @Alam Sutera,
                                        meanwhile the Essay Writing competition is held online.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item col-12 col-lg-6 mb-4" style="background-color: #44C4DB; color: #522C22">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold;"
                                    style="background-color:#DDAC72;border-radius:15px !important; color: #522C22" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="pe-4">Can international students studying in Indonesia participate
                                        in The 2024 National English
                                        Olympics?</span>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse glacialReg"
                                data-bs-parent="#accordion-example-faq" style="background-color: #44C4DB;">
                                <div class="accordion-body">
                                    <p>
                                        Yes, international students who are currently studying in Indonesia are welcome
                                        to participate in The 2024 National English Olympics.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item col-12 col-lg-6 mb-4" style="background-color: #44C4DB; color: #522C22">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold;"
                                    style="background-color:#DDAC72; border-radius:15px !important; color: #522C22" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    <span class="pe-4">Are there any specific materials or resources participants
                                        should bring for each
                                        competition?</span>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse glacialReg"
                                data-bs-parent="#accordion-example-faq" style="background-color: #44C4DB;">
                                <div class="accordion-body">
                                    <p>
                                        There are no specific tools to bring, participants can bring general items such
                                        as water bottle or stationery.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item col-12 col-lg-6 mb-4" style="background-color: #44C4DB; color: #522C22">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold;"
                                    style="background-color:#DDAC72; border-radius:15px !important; color: #522C22" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">
                                    <span class="pe-4">Can participants request any special arrangements or
                                        considerations for religious
                                        observances or dietary restrictions during the event?</span>
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse glacialReg"
                                data-bs-parent="#accordion-example-faq" style="background-color: #44C4DB;">
                                <div class="accordion-body">
                                    <p>
                                        Yes, The 2024 NEO committee <span class="fw-semibold">will provide</span> religious hour and also dietary restrictions
                                        related food that will be asked by our committee.
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{--
                        <div class="accordion-item col-12 col-lg-6 mb-4" style="background-color: #44C4DB">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold"
                                    style="background-color: #DDAC72;border-radius:15px !important; color: #522C22" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">
                                    <span class="pe-4">Can participants request any special arrangements or
                                        considerations for religious
                                        observances or dietary restrictions during the event?</span>
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse glacialReg"
                                data-bs-parent="#accordionExample" style="background-color: #44C4DB;">
                                <div class="accordion-body" style="color: #522C22">
                                    <p>
                                        Yes, The 2024 NEO committee <span class="fw-semibold">will provide</span> religious hour and also dietary restrictions
                                        related food that will be asked by our committee.
                                    </p>
                                </div>
                            </div>
                        </div>
                         --}}
                    </div>


                </div>
            </div>
        </section>

        {{-- Sponsor --}}
        <section class="py-5" id="sponsor">
            <div class="container mt-5">
                <div class="row">
                    <div class="container py-5 text-center">
                        <p class="fs-1 font-acme m-0 neoHeader" >THANK YOU TO OUR SPONSORS</p>
                        {{-- <img src="/storage/landing_page/faq/stylePreviousNeo.svg" class="img-fluid" alt=""> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col m-40 container pt-3 d-flex justify-content-center">
                        <div class="col-12 pt-5 m-1 gradient-div d-flex flex-wrap justify-content-center" style="height:;object-fit:cover">
                            <img src="{{ url('./storage/assets/tfisc.png') }}" alt="" class="img-fluid" style="width:200px; height:auto; object-fit:contain">
                            <img src="{{ url('./storage/assets/tfisc.png') }}" alt="" class="img-fluid" style="width:200px; height:auto; object-fit:contain">
                            <img src="{{ url('./storage/assets/tfisc.png') }}" alt="" class="img-fluid" style="width:200px; height:auto; object-fit:contain">
                            <img src="{{ url('./storage/assets/tfisc.png') }}" alt="" class="img-fluid" style="width:200px; height:auto; object-fit:contain">
                            <img src="{{ url('./storage/assets/tfisc.png') }}" alt="" class="img-fluid" style="width:200px; height:auto; object-fit:contain">
                            <img src="{{ url('./storage/assets/tfisc.png') }}" alt="" class="img-fluid" style="width:200px; height:auto; object-fit:contain">
                            <img src="{{ url('./storage/assets/tfisc.png') }}" alt="" class="img-fluid" style="width:200px; height:auto; object-fit:contain">
                            <img src="{{ url('./storage/assets/tfisc.png') }}" alt="" class="img-fluid" style="width:200px; height:auto; object-fit:contain">
                            <img src="{{ url('./storage/assets/tfisc.png') }}" alt="" class="img-fluid" style="width:200px; height:auto; object-fit:contain">
                            <img src="{{ url('./storage/assets/tfisc.png') }}" alt="" class="img-fluid" style="width:200px; height:auto; object-fit:contain">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Media partner --}}
        <section id="media_partner" class="margintop py-5 mb-5">
            <div class="container mt-3 position-relative mb-5">
                <div class="row">
                    <div class="container py-5 text-center">
                        <p class="fs-1 font-acme m-0 neoHeader">MEDIA PARTNERS</p>
                        {{-- <img src="/storage/landing_page/faq/stylePreviousNeo.svg" class="img-fluid" alt=""> --}}
                    </div>
                </div>
                <div class="row align-items-start p-0 text-center logos ">
                    <div class="logos-slide pb-2">
                        <img src="{{ url('./storage/assets/med.png') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">
                        <img src="{{ url('./storage/assets/med1.jpg') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">
                        <img src="{{ url('./storage/assets/med2.jpg') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">
                        <img src="{{ url('./storage/assets/med3.png') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">
                        <img src="{{ url('./storage/assets/med4.png') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">
                        <img src="{{ url('./storage/assets/med5.PNG') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">
                        <img src="{{ url('./storage/assets/med6.png') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">
                        <img src="{{ url('./storage/assets/med7.jpg') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">                    </div>
                </div>

                <div class="row align-items-start p-0 text-center logos ">
                    <div class="logos-slide2">
                        <img src="{{ url('./storage/assets/med8.png') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">
                        <img src="{{ url('./storage/assets/med9.png') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">
                        <img src="{{ url('./storage/assets/med10.png') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">
                        <img src="{{ url('./storage/assets/med11.png') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">
                        <img src="{{ url('./storage/assets/med12.PNG') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">
                        <img src="{{ url('./storage/assets/med13.png') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">
                        <img src="{{ url('./storage/assets/med14.png') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">
                        <img src="{{ url('./storage/assets/med15.jpg') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">
                        <img src="{{ url('./storage/assets/med16.png') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">
                        <img src="{{ url('./storage/assets/med17.png') }}" alt="" class="img-fluid" style="width:150px; height:auto; object-fit:contain">                    </div>
                </div>

            </div>
        </section>


    </div>
    <x-footer></x-footer>
</x-app>

{{-- swiper --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
{{-- aos --}}
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration:1000,
        });
    });
</script>
{{-- jquery --}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>

<script>

    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });

    function showContent(tabId) {
        // Hide all content containers
        document.getElementById('111').style.display = 'none';
        document.getElementById('222').style.display = 'none';
        document.getElementById('333').style.display = 'none';
        document.getElementById('444').style.display = 'none';

        // Show the selected content container
        document.getElementById(tabId).style.display = 'block';
    }
</script>


