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

    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="w-full h-screen relative flex items-center justify-center bg-[#FBF0D0] overflow-hidden">

        {{-- <div class="board-container">
            <div id="ajax-content"
                class="board flex flex-col justify-center items-center bg-no-repeat bg-cover bg-center rounded-lg"
                style="background-image: url('{{ asset('assets/images/pptimages/stoneboard.png') }}')">
            </div>
        </div> --}}

        <div id="ajax-section"
            class="flex items-center justify-center relative text-center w-full md:min-h-[70vh] max-w-[70vw] md:bg-size-[60vw] bg-no-repeat bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/stoneboard.png') }}');">
            @yield('content')
        </div>

        <!-- Leafs outside board -->
        <div id="leafs-outside">
            <img class="absolute top-0 left-0 md:w-[14vw] z-30 transition-opacity cursor-none"
                src="{{ asset('assets/images/pptimages/bg-leaf-1.png') }}" />

            <img class="absolute top-0 left-[17vw] md:w-[10vw] z-30 transition-opacity cursor-none"
                src="{{ asset('assets/images/pptimages/leaf8.png') }}" />

            <img class="absolute top-0 left-[35vw] md:w-[10vw] z-30 transition-opacity cursor-none"
                src="{{ asset('assets/images/pptimages/bg-leaf-2.png') }}" />

            <img class="absolute top-0 left-[60vw] md:w-[10vw] z-30 transition-opacity cursor-none"
                src="{{ asset('assets/images/pptimages/leaf15.png') }}" />

            <img class="absolute top-0 left-[75vw] md:w-[10vw] z-30 transition-opacity cursor-none"
                src="{{ asset('assets/images/pptimages/leaf3.png') }}" />

            <img class="absolute bottom-0 left-0 md:w-[8vw] z-30 transition-opacity cursor-none"
                src="{{ asset('assets/images/pptimages/leaf1.png') }}" />

            <img class="absolute bottom-0 left-[35vw] rotate-180 md:w-[10vw] z-30 transition-opacity cursor-none"
                src="{{ asset('assets/images/pptimages/leaf15.png') }}" />

            <img class="absolute bottom-0 right-0 md:w-[10vw] z-50 transition-opacity cursor-none"
                src="{{ asset('assets/images/pptimages/leaf10.png') }}" />

            {{-- <img class="absolute left-0 bottom-0 w-[60px] sm:w-[80px] md:w-[100px] lg:w-[6vw] lg:bottom-[0vw] lg:left-[0vw] z-30 transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf1.png') }}" />

            <img class="absolute right-[5px] bottom-0 rotate-[-10.48deg] w-[60px] sm:w-[80px] md:w-[100px] lg:w-[6vw] lg:right-[0.4vw] lg:bottom-[0vw] z-30 transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf10.png') }}" />

            <img class="absolute left-[10px] sm:left-[15px] top-0 w-[40px] sm:w-[60px] md:w-[80px] lg:w-[12vw] lg:left-[1.5vw] lg:top-[0vw] z-30 transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf4.png') }}" />

            <div
                class="absolute flex gap-0 left-[200px] sm:left-[400px] md:left-[600px] top-0 opacity-90 w-[60px] sm:w-[80px] md:w-[100px] lg:w-[8vw] lg:left-[38vw] lg:top-[0vw] z-30 transition-opacity">
                <img src="{{ asset('assets/images/pptimages/Leaf6.png') }}" />
                <img class="absolute left-20" src="{{ asset('assets/images/pptimages/Leaf4.png') }}" />
            </div>

            <img class="absolute left-[-10px] top-0 rotate-[-2.53deg] w-[40px] sm:w-[60px] md:w-[80px] lg:w-[7vw] lg:left-[-1.3vw] lg:top-[0vw] z-30 transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf2.png') }}" />

            <img class="absolute right-[10px] sm:right-[30px] md:right-[50px] top-0 opacity-80 w-[40px] sm:w-[60px] md:w-[80px] lg:w-[6vw] lg:right-[1vw] lg:top-[0vw] z-30 transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf3.png') }}" />

            <img class="absolute h-[60px] sm:h-[80px] md:h-[120px] lg:h-[8vw] left-[100px] sm:left-[200px] md:left-[300px] bottom-0 lg:left-[28vw] lg:bottom-[0vw] transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf12.png') }}" />

            <img class="absolute left-[300px] sm:left-[600px] md:left-[800px] top-0 w-[40px] sm:w-[60px] md:w-[80px] lg:w-[15vw] lg:left-[63vw] lg:top-[0vw] z-30 transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf15.png') }}" />

            <img class="absolute left-[80px] sm:left-[150px] md:left-[200px] top-0 w-[40px] sm:w-[60px] md:w-[80px] lg:w-[7vw] lg:left-[13vw] lg:top-[0vw] z-30 transition-opacity"
                src="{{ asset('assets/images/pptimages/Leaf8.png') }}" /> --}}
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
