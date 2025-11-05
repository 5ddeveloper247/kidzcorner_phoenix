<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title', 'Syndash - Bootstrap5 Admin Template')</title>
    <!--favicon-->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/pptimages/teacher1.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/pptimages/teacher1.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/pptimages/teacher1.png') }}">
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
    {{-- Icons --}}
    <link href='https://cdn.boxicons.com/3.0.3/fonts/basic/boxicons.min.css' rel='stylesheet'>


    <!-- CSRF Token for AJAX -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        /* Upward float */
        @keyframes leafUp {
            from {
                transform: translateY(0px);
            }

            to {
                transform: translateY(-8px);
            }
        }

        /* Downward float */
        @keyframes leafDown {
            from {
                transform: translateY(0px);
            }

            to {
                transform: translateY(8px);
            }
        }

        /* Odd leaves go up, even leaves go down */
        #leafs-outside img:nth-child(odd) {
            animation: leafUp 1s ease-in-out infinite alternate;
        }

        #leafs-outside img:nth-child(even) {
            animation: leafDown 1s ease-in-out infinite alternate;
        }

        .hidden {
            display: none;
        }

        /* Optional: if you want to hide the whole page until JS is ready */
        .js-loading body {
            visibility: hidden;
        }
    </style>

    <script>
        // Prevent flash by marking document before styles apply
        document.documentElement.classList.add('js-loading');
    </script>


</head>

<body>
    <section class="w-full h-screen relative flex items-center justify-center bg-[#FBF0D0] overflow-hidden">

        <div id="ajax-section"
            class="flex items-center justify-center relative text-center w-full px-[8vw] py-[3vw] md:min-h-[70vh] max-w-[70vw] md:bg-size-[60vw] bg-no-repeat bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/stoneboard.png') }}');">
            @yield('content')
        </div>

        <!-- Leafs outside board -->
        <div id="leafs-outside">
            <img class="absolute top-0 left-0 md:w-[14vw] z-30 transition-opacity cursor-none"
                src="{{ asset('assets/images/pptimages/bg-leaf-1.png') }}" />

            <img class="absolute top-[-1vw] left-[17vw] w-[13vw] rotate-[11deg] z-30 transition-opacity cursor-none"
                src="{{ asset('assets/images/pptimages/leaf8.png') }}" />

            <img class="absolute top-0 left-[35vw] md:w-[10vw] z-30 transition-opacity cursor-none"
                src="{{ asset('assets/images/pptimages/bg-leaf-2.png') }}" />

            <img class="absolute top-[-1vw] left-[60vw] md:w-[10vw] z-30 transition-opacity cursor-none"
                src="{{ asset('assets/images/pptimages/leaf15.png') }}" />

            <img class="absolute top-0 left-[75vw] md:w-[10vw] z-30 transition-opacity cursor-none"
                src="{{ asset('assets/images/pptimages/leaf3.png') }}" />

            <img class="absolute bottom-0 left-0 md:w-[8vw] z-30 transition-opacity cursor-none"
                src="{{ asset('assets/images/pptimages/leaf1.png') }}" />

            <img class="absolute !bottom-0 left-[35vw] rotate-180 md:w-[10vw] z-30 transition-opacity cursor-none"
                src="{{ asset('assets/images/pptimages/leaf15.png') }}" />

            <img class="absolute bottom-0 right-0 md:w-[10vw] z-50 transition-opacity cursor-none"
                src="{{ asset('assets/images/pptimages/leaf10.png') }}" />
        </div>



        <!-- Vectors - conditionally shown -->
        <div id="vectors">
            <img class="absolute left-0 top-0 h-screen hidden md:block"
                src="{{ asset('assets/images/pptimages/Vector2.png') }}" style="pointer-events: none" />
            <img id="vector1" class="absolute right-0 bottom-0 w-[150px] sm:w-[200px] md:w-[40vw] z-30"
                style="display: none" src="{{ asset('assets/images/pptimages/Vector3.png') }}" />
            <img class="absolute right-0 bottom-0 w-[150px] sm:w-[200px] md:w-[40vw] z-30"
                src="{{ asset('assets/images/pptimages/Vector5.png') }}" />
        </div>
    </section>

    <!-- Universal Exit Popup (Added once in master layout) -->
    <div id="exitPopup"
        class="fixed inset-0 z-[1000] hidden items-center justify-center bg-[#0000002e]  backdrop-blur-sm">
        <div class="w-[60vw] relative h-[40vw] bg-contain bg-no-repeat bg-center flex flex-col justify-center items-center rounded-lg "
            style="background-image: url('{{ asset('assets/images/K2/exit.png') }}');">
            <p class="text-[2vw] text-white stroke font-bold">Are you sure you want to exit?</p>
            <div class="flex justify-around items-center w-[30vw] mt-[2vw]">
                <a href="#" id="exitNo"
                    class="text-[#59967D] text-[3vw] font-bold stroke hover:scale-110 transition-transform cursor-pointer">No</a>
                <a href="#" id="exitYes"
                    class="text-[#F8473A] text-[3vw] font-bold stroke hover:scale-110 transition-transform cursor-pointer">Yes</a>
            </div>
            <img src="{{ asset('assets/images/K2/by.png') }}" class="absolute bottom-[3vw] right-[2vw] !w-[17vw]"
                alt="">
        </div>
    </div>

    <!-- Universal Exit Popup Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Remove the loading class now that JS is ready
            document.documentElement.classList.remove('js-loading');

            // Optionally make sure only the first slide is visible initially
            const slides = document.querySelectorAll(".slide");
            if (slides.length > 0) {
                slides.forEach((slide, i) => {
                    slide.classList.add("hidden");
                });
                slides[0].classList.remove("hidden");
            }
        });

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
                    window.location.href = "{{ route('admin.dashboard') }}";
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
