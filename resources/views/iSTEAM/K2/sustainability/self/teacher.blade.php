@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Being Self-Sufficient</h2>

    {{-- sldie 1  --}}
    <div class=" slide t-slide flex  !text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Understand the meaning of self-sufficient</li>
                <li>Learn about how being self-sufficient helps the environment</li>
                <li>Develop awareness of environmental issues</li>
                <li>Develop curiosity and understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <div class="flex gap-[4.5vw]">
                <ul class="list-disc ">
                    <li>Reduce</li>
                    <li>Reuse</li>
                    <li>Recycle</li>
                    <li>Pollution</li>
                    <li>Earth</li>
                </ul>
                <ul class="list-disc">
                    <li>Import</li>
                    <li>Export</li>
                    <li>self-sufficient</li>
                    <li>Greenhouse-gases</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide t-slide flex  !text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>
                    The vertical gardening system would have been set up already. If you do not have a
                    gardening system, set up a small indoor garden.
                </li>
                <li>An application - Smart Living, would have been downloaded on the school's phone.
                </li>
                <li>
                    Use the school phone to control the looping timer for the light and water.
                    Refer to the manual page 6 and 7 for the instructions.
                </li>
                <li>You need to get seeds and the growing cubes for the children to start planting</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide t-slide flex  !text-white flex-col items-center justify-center  text-start">
        <div>
            <h2 class=" t-title">Things to note in maintaining the vertical garden system:</h2><br>
            <h2 class=" t-title"> Mixing the plant nutrients</h2>
            <ul class="list-disc">
                <li>Mix one litre of water with the packet of nutrients A into bottle A.</li>
                <li>Mix one litre of water with the packet of nutrients B into bottle B.</li>
                <li>Upon set up, pour 75 litres of water into the system.</li>
                <li>Add 300 ml of A and 300 ml of B into the system.</li>
                <li>Adjust the green valve to set the speed of the water flow.</li>
            </ul>
        </div>
        <div class="flex gap-2 items-center">
            <img src="{{ asset('assets/images/K2/sustain/self/s18.png') }}" class="!max-w-[20vw]" />
            <p class="note !w-[13vw]">When the plants are small, set
                the flow to be slow.
                When the plants have grown
                bigger, change the flow to be
                faster.</p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide t-slide flex text-2xl !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Things to note in maintaining the vertical garden system:</h2>
            <ul class="list-decimal">
                <li>To attach the hose, push the hose into the centre of the vertical
                    system inside the water tank. Push up until you hear a click.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/self/s20.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide t-slide flex text-2xl !text-white flex-col items-center justify-start  text-start">
        <div>
            <h2 class=" t-title">Things to note in maintaining the vertical garden system:</h2>
            <ul>
                <li>To remove the hose, push the yellow part to release the catch.</li>

            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/self/s19.png') }}" class="w-img" />
        <ul>
            <li>Attach a green knob on the top of this hose to drain out water from the tank</li>
            <li>For more details on the maintenance of the vertical garden go to
                <a href="https://aerospinggardens.com" class="text-[#f7b94a]">https://aerospinggardens.com </a> faq and
                download the FAW guide.
            </li>
        </ul>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 7 --}}
    <div class=" slide t-slide flex text-2xl !text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <ul>
                <li class=" flex whitespace-nowrap">If you see
                    <span>
                        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s27.png') }}" class="!max-w-[2.5vw]" />
                    </span>
                    next to a picture, click on
                    the picture to watch the video
                </li>
                <li> Always ask questions to encourage children to think and share their ideas first
                    before giving out any information.</li>
                <li>Emphasise and use the keywords during hands-on sessions.
                </li>
                <li>Print out the Learning Journal (if any) for every
                    child to complete at the end of the lesson.
                </li>
                <li class=" flex whitespace-nowrap">Click on this shortcut icon
                    <span>
                        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s28.png') }}" class="!max-w-[2.5vw]" />
                    </span>
                    if you need to go to some
                    parts of the lesson quickly.
                </li>
                <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
                    class="absolute teacher-img1" />
        </div>
    </div>


    {{-- sldie 6 --}}
    <div class=" slide t-slide flex text-2xl !text-white flex-col items-center justify-start  text-start">
        <h2 class="title stroke text-center">Learning Centre Idea</h2>
        <div class="text-start">
            <div>
                <h2 class="title stroke !text-white">Diary Of Our Vegetable Garden</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <p>Provide papers and writing materials for children to draw and record down the growth of the plants.</p>
            </div>
            <div>
                <h2 class="t-title">What to do:</h2>
                <ol class="lesson-ul list-decimal">
                    <li>Guide children to write the date and measure the size of the leaves or count the number of leaves.
                    </li>
                    <li>Children can also observe and record down the changes in colour of the fruits or leaves.</li>
                </ol>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

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
            const doneButton = document.querySelector(".doneButton"); //   DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                //   Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            //   NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            //   Return button - redirect if on first slide
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    // Redirect to route when on first slide
                    window.location.href = "{{ route('selfSelection') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('selfSelection') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
