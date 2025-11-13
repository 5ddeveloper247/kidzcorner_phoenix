@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Clean Energy 2</h2>

    {{-- slide 1 --}}
    <div class="slide t-slide flex !text-white flex-col justify-start text-start">
        <div>
            <h2 class="t-title">Children will be able to:</h2>
            <ol class="list-decimal">
                <li>Understand more about clean energy</li>
                <li>Learn that wind and water can generate energy</li>
                <li>Develop awareness of environmental issues</li>
                <li>Develop curiosity and understanding through inquiry</li>
            </ol>
        </div>

        <div class="flex flex-col items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <ol class="list-decimal">
                <li>Clean Energy</li>
                <li>Solar Energy</li>
                <li>Turbine</li>
                <li>Windmill</li>
                <li>Dams</li>
                <li>Pollution</li>
                <li>Hydropower</li>
                <li>Electricity</li>
            </ol>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 2 --}}
    <div class="slide t-slide flex !text-white flex-col justify-start text-start">
        <h2 class="t-title">Preparations class activity 1</h2>
        <ol class="list-decimal">
            <li>You can bring children outdoors for the activity.</li>
            <li>If the wind is not strong enough, you may get children to think of ways to generate
                wind or find a source for wind (e.g. they can blow at it or use a hair dryer).</li>
        </ol>

        <h2 class=" t-title">Preparations class activity 2</h2>
        <ol class="list-decimal">
            <li>Collect recyclable materials to create a waterfall.</li>
            <li>You may get children to observe how the turbine works under running taps so that they
                know which way the water should flow.</li>
        </ol>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 3 --}}
    <div class="slide t-slide flex !text-white flex-col items-center justify-center text-start">
        <h2 class=" t-title">Useful information:</h2>
        <p class="note">A windmill generates mechanical energy from wind power, while a wind turbine generates electricity
            from wind power. Windmills have been around for centuries. They have developed throughout the years to keep up
            with new technology, but overall, they maintain the same principle: converting wind into mechanical energy.</p>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 4 --}}
    <div class="slide t-slide flex text-2xl !text-white flex-col items-center justify-start gap-y-10 text-start">
        <h2 class=" t-title">Notes:</h2>
        <ol class="list-decimal">
            <li class=" flex items-center whitespace-nowrap">
                If you see
                <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s27.png') }}" class="!max-w-[2.5vw] mx-2" />
                next to a picture, click on the picture to watch the video.
            </li>
            <li>Always ask questions to encourage children to think and share their ideas first before
                giving out any information.</li>
            <li>Emphasise and use the keywords during hands-on sessions.</li>
            <li>Print out the Learning Journal (if any) for every child to complete at the end of the
                lesson.</li>
            <li class=" flex items-center whitespace-nowrap">
                Click on this shortcut icon
                <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s28.png') }}" class="!max-w-[2.5vw] mx-2" />
                if you need to go to some parts of the lesson quickly.
            </li>
        </ol>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 5 --}}
    <div class="slide t-slide flex text-2xl !text-white flex-col items-center justify-center gap-y-10 text-start">
        <h2 class="title stroke justify-center">Learning Centre Idea</h2>
        <div class="text-start">

            <h2 class=" t-title">Create A Windmill</h2>
            <p class="note">What and how to set up: Place art materials for children to use to create their own windmills.
                Print out different examples of windmills and encourage children to make.</p>
        </div>
        <div class="text-start">

            <h2 class="t-title">What to do:</h2>
            <ol class="list-decimal">
                <li>Guide children to make the windmills.</li>
                <li>Get children to compare if different shape/materials of the windmills move at different speed.</li>
            </ol>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- Controls --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row gap-6 z-90">
        <a id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>
    </div>

    <div class="down-btn-container">
        <button class="nextButton">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
        </button>
    </div>

@endsection

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide.t-slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    if (currentSlide === 0) {
                        window.location.href = "{{ route('energy2Selection') }}";
                    } else {
                        currentSlide--;
                        showSlide(currentSlide);
                    }
                });
            }

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2sustainability') }}";
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush
