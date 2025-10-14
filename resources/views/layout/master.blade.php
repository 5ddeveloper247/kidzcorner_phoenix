<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title', 'Syndash - Bootstrap5 Admin Template')</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">

    <!-- CSRF Token for AJAX -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        /* Responsive scaling for the board */
        .board-container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .board {
            width: min(1267px, 95vw);
            height: min(734px, 85vh);
            max-width: 1267px;
            max-height: 734px;
            aspect-ratio: 1267 / 734;
        }

        /* Scale content based on board size */
        @media (max-width: 1400px) {
            .board {
                width: 90vw;
                height: auto;
            }
        }

        @media (max-width: 1024px) {
            .board {
                width: 92vw;
                height: auto;
            }
        }

        @media (max-width: 768px) {
            .board {
                width: 95vw;
                height: auto;
            }
        }

        @media (max-width: 640px) {
            .board {
                width: 98vw;
                height: auto;
                min-height: 500px;
            }
        }

        /* Responsive text scaling */
        @media (max-width: 1024px) {
            .title {
                font-size: clamp(1.5rem, 3vw, 2.5rem) !important;
            }

            .note {
                font-size: clamp(0.875rem, 1.5vw, 1rem) !important;
            }
        }

        @media (max-width: 768px) {
            .title {
                font-size: clamp(1.25rem, 2.5vw, 2rem) !important;
            }
        }

        @media (max-width: 640px) {
            .title {
                font-size: clamp(1rem, 2vw, 1.5rem) !important;
            }
        }

        /* Responsive button sizing */
        @media (max-width: 1024px) {

            #buttons button,
            #buttons a {
                width: 5rem !important;
                height: 5rem !important;
            }

            #buttons img {
                transform: scale(0.8);
            }
        }

        @media (max-width: 768px) {
            #buttons {
                gap: 0.75rem !important;
            }

            #buttons button,
            #buttons a {
                width: 4rem !important;
                height: 4rem !important;
            }

            #buttons img {
                transform: scale(0.7);
            }
        }

        @media (max-width: 640px) {
            #buttons {
                top: 10px !important;
                right: 10px !important;
                gap: 0.5rem !important;
            }

            #buttons button,
            #buttons a {
                width: 3.5rem !important;
                height: 3.5rem !important;
            }

            #buttons img {
                transform: scale(0.6);
            }
        }

        /* Responsive navigation buttons */
        @media (max-width: 1024px) {

            .nextButton,
            .doneButton {
                width: 14rem !important;
                height: 4rem !important;
            }

            .nextButton span,
            .doneButton span {
                font-size: 2.5rem !important;
                left: 60px !important;
                top: 12px !important;
            }
        }

        @media (max-width: 768px) {

            .nextButton,
            .doneButton {
                width: 12rem !important;
                height: 3.5rem !important;
            }

            .nextButton span,
            .doneButton span {
                font-size: 2rem !important;
                left: 50px !important;
                top: 10px !important;
            }
        }

        @media (max-width: 640px) {

            .nextButton,
            .doneButton {
                width: 10rem !important;
                height: 3rem !important;
            }

            .nextButton span,
            .doneButton span {
                font-size: 1.5rem !important;
                left: 40px !important;
                top: 8px !important;
            }

            .absolute.bottom-\\[85px\\] {
                bottom: 40px !important;
            }
        }

        /* Responsive leaf decorations */
        @media (max-width: 1024px) {
            #leafs-outside img {
                opacity: 0.7;
            }
        }

        @media (max-width: 768px) {
            #leafs-outside img {
                opacity: 0.5;
            }
        }

        @media (max-width: 640px) {
            #leafs-outside img {
                display: none;
            }
        }

        /* Responsive images in slides */
        .slide img {
            max-width: 100%;
            height: auto;
        }

        @media (max-width: 768px) {
            .slide img {
                max-width: 90%;
            }
        }

        @media (max-width: 640px) {
            .slide img {
                max-width: 80%;
            }
        }

        /* Responsive table */
        @media (max-width: 1024px) {
            .slide table {
                font-size: 16px !important;
            }
        }

        @media (max-width: 768px) {
            .slide table {
                font-size: 14px !important;
            }

            .slide table td,
            .slide table th {
                padding: 0.5rem !important;
            }
        }

        @media (max-width: 640px) {
            .slide table {
                font-size: 12px !important;
            }

            .slide table td,
            .slide table th {
                padding: 0.25rem !important;
            }
        }

        /* Exit Popup Responsive */
        @media (max-width: 1200px) {
            #exitPopup>div {
                width: 90vw !important;
                height: auto !important;
                min-height: 500px;
            }
        }

        @media (max-width: 768px) {
            #exitPopup p {
                font-size: 28px !important;
            }

            #exitPopup a {
                font-size: 40px !important;
            }
        }

        @media (max-width: 640px) {
            #exitPopup p {
                font-size: 24px !important;
            }

            #exitPopup a {
                font-size: 32px !important;
            }
        }
    </style>

    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="w-screen h-screen relative flex items-center justify-center bg-orange-200 overflow-hidden">

        <div class="board-container">
            <div id="ajax-content"
                class="board flex flex-col justify-center items-center bg-[url('/assets/images/pptimages/stoneboard.png')] bg-no-repeat bg-cover bg-center rounded-lg">

                <!-- Dynamic slide content -->
                <div id="ajax-section"
                    class="flex items-center justify-center text-center px-2 sm:px-4 md:px-6 lg:px-8 row-gap-5 w-full h-[567px] max-w-[1100px] m-auto">
                    @yield('content')
                </div>

            </div>
        </div>

        <!-- Leafs outside board -->
        <div id="leafs-outside">
            <img class="absolute left-0 bottom-0 w-[60px] sm:w-[80px] md:w-[100px] lg:w-auto z-30 transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf1.png') }}" />
            <img class="absolute right-[5px] bottom-0 rotate-[-10.48deg] w-[60px] sm:w-[80px] md:w-[100px] lg:w-auto z-30 transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf10.png') }}" />
            <img class="absolute left-[10px] sm:left-[15px] lg:left-[20.86px] top-0 w-[40px] sm:w-[60px] md:w-[80px] lg:w-auto z-30 transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf4.png') }}" />
            <img class="absolute left-[200px] sm:left-[400px] md:left-[600px] lg:left-[900.29px] top-0 opacity-90 w-[60px] sm:w-[80px] md:w-[100px] lg:w-auto z-30 transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf6.png') }}" />
            <img class="absolute left-[250px] sm:left-[500px] md:left-[700px] lg:left-[1000.11px] top-0 w-[60px] sm:w-[80px] md:w-[120px] lg:w-[152.81px] transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf4.png') }}" />
            <img class="absolute left-[-10px] lg:left-[-19px] top-0 rotate-[-2.53deg] w-[40px] sm:w-[60px] md:w-[80px] lg:w-auto z-30 transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf2.png') }}" />
            <img class="absolute right-[10px] sm:right-[30px] md:right-[50px] lg:left-[1572px] top-0 opacity-80 w-[40px] sm:w-[60px] md:w-[80px] lg:w-auto z-30 transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf3.png') }}" />
            <img class="absolute h-[60px] sm:h-[80px] md:h-[120px] lg:h-[150px] left-[100px] sm:left-[200px] md:left-[300px] lg:left-[408.36px] bottom-0 transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf12.png') }}" />
            <img class="absolute left-[300px] sm:left-[600px] md:left-[800px] lg:left-[1195.72px] top-0 w-[40px] sm:w-[60px] md:w-[80px] lg:w-auto z-30 transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf13.png') }}" />
            <img class="absolute left-[80px] sm:left-[150px] md:left-[200px] lg:left-[278.45px] top-0 w-[40px] sm:w-[60px] md:w-[80px] lg:w-auto z-30 transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf8.png') }}" />
        </div>

        <!-- Vectors - conditionally shown -->
        <div id="vectors">
            <img class="absolute left-0 top-0 h-screen hidden md:block"
                src="{{ asset('assets/images/pptimages/Vector2.png') }}" style="pointer-events: none" />
            <img id="vector1" class="absolute right-0 bottom-0 w-[150px] sm:w-[200px] md:w-[300px] lg:w-auto z-30"
                style="display: none" src="{{ asset('assets/images/pptimages/Vector3.png') }}" />
            <img id="vector2" class="absolute right-0 bottom-0 w-[150px] sm:w-[200px] md:w-[300px] lg:w-auto z-30"
                style="display: none" src="{{ asset('assets/images/pptimages/Vector5.png') }}" />
        </div>
    </section>

    <!-- Universal Exit Popup (Added once in master layout) -->
    <div id="exitPopup"
        class="fixed inset-0 z-[1000] hidden items-center justify-center bg-[#0000002e]  backdrop-blur-sm">
        <div class="w-[1095px] relative h-[786px] bg-cover bg-no-repeat bg-center flex flex-col justify-center items-center rounded-lg "
            style="background-image: url('{{ asset('assets/images/K2/exit.png') }}');">
            <p class="text-[35px] text-white stroke font-bold">Are you sure you want to exit?</p>
            <div class="flex justify-around items-center w-[50%] mt-10">
                <a href="#" id="exitNo"
                    class="text-[#59967D] text-[50px] font-bold stroke hover:scale-110 transition-transform cursor-pointer">No</a>
                <a href="#" id="exitYes"
                    class="text-[#F8473A] text-[50px] font-bold stroke hover:scale-110 transition-transform cursor-pointer">Yes</a>
            </div>
            <img src="{{ asset('assets/images/K2/by.png') }}" class="absolute bottom-[70px] right-[30px]"
                alt="">
        </div>
    </div>

    <!-- Universal Exit Popup Script -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const closeButton = document.getElementById("closeButton");
            const homeButton = document.getElementById("homeButton");
            const exitPopup = document.getElementById("exitPopup");
            const exitNo = document.getElementById("exitNo");
            const exitYes = document.getElementById("exitYes");

            // Show popup when close button is clicked
            if (closeButton) {
                closeButton.addEventListener("click", (e) => {
                    e.preventDefault();
                    exitPopup.classList.remove("hidden");
                    exitPopup.classList.add("flex");
                });
            }

            // Also show popup for home button (optional - remove if not needed)
            if (homeButton) {
                homeButton.addEventListener("click", (e) => {
                    e.preventDefault();
                    window.location.href = "{{ route('isteam') }}";
                });
            }

            // Hide popup when "No" is clicked
            if (exitNo) {
                exitNo.addEventListener("click", (e) => {
                    e.preventDefault();
                    exitPopup.classList.remove("flex");
                    exitPopup.classList.add("hidden");
                });
            }

            // Redirect to home when "Yes" is clicked
            if (exitYes) {
                exitYes.addEventListener("click", (e) => {
                    e.preventDefault();
                    // Change 'home' to your actual home route name
                    window.location.href = "{{ route('isteam') }}";
                });
            }

            // Close popup when clicking outside the exit box
            exitPopup?.addEventListener("click", (e) => {
                if (e.target === exitPopup) {
                    exitPopup.classList.remove("flex");
                    exitPopup.classList.add("hidden");
                }
            });

            // Close popup on ESC key
            document.addEventListener("keydown", (e) => {
                if (e.key === "Escape" && exitPopup && !exitPopup.classList.contains("hidden")) {
                    exitPopup.classList.remove("flex");
                    exitPopup.classList.add("hidden");
                }
            });
        });
    </script>

    @stack('script')
</body>

</html>
