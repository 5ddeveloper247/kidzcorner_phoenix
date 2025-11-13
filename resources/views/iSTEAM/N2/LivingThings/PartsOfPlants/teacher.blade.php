@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Parts of a Plant</h2>

    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl !text-white flex-col justify-start text-start t-slide">
        <div>
            <h2 class=" t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn the names of the different parts of a plant</li>
                <li>Learn the functionality of each part of the plant</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title ">Keywords:</h2>
                <ul class="list-disc ">
                    <li>Flower</li>
                    <li>Fruit</li>
                    <li>Stem</li>
                    <li>Leaf</li>
                    <li>Roots</li>
                    <li>Pods</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex flex-col text-2xl justify-center !text-white text-start t-slide ">
        <div>
            <h2 class=" t-title">Preparations for Individual Activity - Learning Journal:</h2>
            <ul class="list-disc ">
                <li>A set of text label for each child</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/lt53.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 3 --}}
    <div class=" slide flex flex-col text-2xl justify-center !text-white text-start t-slide ">
        <div>
            <h2 class=" t-title">Things to consider:</h2>
            <ul class="list-disc ">
                <li>Ask questions to prompt children share their prior knowledge and experiences.</li>
                <li>Encourage children to guess what each part of the plant do.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 4 --}}
    <div class="slide flex t-slide  flex-col  text-2xl text-start !text-white">
        <div>
            <h2 class="t-title">Notes:</h2>
            <ul class="list-disc">
                <li class="flex whitespace-nowrap">
                    If you see
                    <span class="info-btn">

                        <img src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                    next to a picture, click on the picture to watch the video.
                </li>
                <li class="flex whitespace-nowrap">
                    If you see
                    <span> <img src="{{ asset('assets/images/pptimages/info-btn.png') }}" class="video-btn" />
                    </span>
                    , click on it for additional information or activity.
                </li>
                <li>Always ask questions to encourage children to think and share their ideas first before giving
                    out
                    any information.</li>
                <li>Emphasise and use the keywords during hands-on sessions.</li>
                <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>
                <li class="flex whitespace-nowrap">
                    Click on this shortcut icon
                    <span> <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="home-btn" />
                    </span>
                    if you need to go to some parts of the lesson quickly.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 5 --}}
    <div class="text-white flex flex-col text-start t-slide items-center justify-center text-2xl slide hidden">
        <h2 class="title stroke">Learning Centre Idea</h2>
        <div>
            <h2 class="!text-white title stroke">Closer Look at a Flower</h2>
            <h2 class=" t-title">What and how to set up:</h2>
            <p>Prepare picture cards of the different parts of a flower e.g. daisy.
                Buy a real flower and cut it up in to the different parts of the
                flower - flower, leaf and stem.</p>
        </div>

        <div class="flex items-center  ">
            <ul class="list-decimal">
                <h2 class=" t-title">What to do:</h2>
                <li>Invite children to look at the picture and find the matching
                    part of the real flower from the tray.</li>
                <li>Encourage children to identify the name of the parts.</li>
            </ul>

            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>

    {{-- slide 6 --}}
    <div class="text-white flex flex-col text-start t-slide items-center justify-center text-2xl slide hidden">
        <h2 class="title stroke">Learning Centre Idea</h2>
        <div>
            <h2 class="!text-white title stroke">Let’s Make A Flower</h2>
            <h2 class=" t-title">What and how to set up:</h2>
            <p>Paper plates cut into shape of a flower. Green paper cut into shape of
                leaves. Brown string/yarn for roots and green straws as the stems.</p>
        </div>

        <div class="flex items-center  ">
            <ul class="list-decimal">
                <h2 class=" t-title">What to do:</h2>
                <li>Invite children to paint the paper plates with the
                    colours they like for their flowers.</li>
                <li>Teacher to guide children in making the craft by asking
                    them which materials they can use for each part of the
                    flower (stem, leaves and roots).</li>
                <li>Guide them to paste each part onto a piece of drawing
                    paper.</li>
            </ul>

            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>
    </div>

    {{-- Done Button --}}
    <div class="down-btn-container">
        <button class=" doneButton ">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row gap-6 z-90">

        <!-- Return Button -->
        <a id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <!-- Home Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button class="nextButton">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
        </button>
    </div>




@endsection


@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton");

            let currentSlide = 0;

            //   Show a given slide by index
            const showSlide = (index) => {
                slides.forEach((slide, i) => slide.classList.toggle("hidden", i !== index));

                const isLastSlide = index === slides.length - 1;

                // Toggle NEXT and DONE
                nextButtons.forEach(btn => btn.classList.toggle("hidden", isLastSlide));
                if (doneButton) doneButton.classList.toggle("hidden", !isLastSlide);
            };

            //   NEXT
            nextButtons.forEach(btn =>
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                })
            );

            //   RETURN
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    if (currentSlide > 0) {
                        currentSlide--;
                        showSlide(currentSlide);
                    }
                });
            }

            //   DONE → redirect
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('LivingThings') }}";
                });
            }

            //   Initialize first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
