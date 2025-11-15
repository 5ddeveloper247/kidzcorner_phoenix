@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Push it up</h2>


    {{-- sldie 23  --}}
    <div class="flex !text-white flex-col t-slide justify-start  text-start">
        <div>
            <h2 class=" t-title ">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Build two cars and a launcher based on a pictorial guide</li>
                <li>Explore and learn about the characteristics and uses of inclined planes - a simple machine</li>
                <li>Learn how to test and get answers through comparison</li>
                <li>Answer some questions based on the hands-on experience</li>
                <li>Develop fine motor and eye-hand coordination skills</li>
                <li>Develop understanding through observation and inquiry</li>
            </ul>
        </div>

        <div>
            <h2 class="t-title ">Keywords:</h2>
            <ul class="list-disc ">
                <li>Simple Machine</li>
                <li>Ramp</li>
                <li>Inclined Plane</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class="flex !text-white flex-col t-slide justify-start items-center text-start ">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Each group 3 sets of building bricks (parts and quantity as shown)</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/N2/SimpleMachines/set1.png') }}" class="img-md" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>



    {{-- slide 3 --}}
    <div class="flex !text-white flex-col t-slide justify-start items-center text-start ">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Each group 3 sets of building bricks (parts and quantity as shown)</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/N2/SimpleMachines/set2.png') }}" class="img-md" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class="flex !text-white flex-col t-slide justify-start items-center text-start ">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>Each group 3 sets of building bricks (parts and quantity as shown)</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/N2/SimpleMachines/set3.png') }}" class="img-md" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class="flex !text-white flex-col t-slide justify-start items-center text-start ">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>An inclined plane for all children or each group (set up with any suitable items;
                    can form with a board or plank and 3 boxes of same heights)
                    [Note: it's not easy to push a car up a steep or long inclined plane, so try to
                    avoid such setting.]</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/N2/SimpleMachines/b29.png') }}" class="img-lg" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>

    {{-- slide 6 --}}
    <div class="flex !text-white flex-col t-slide justify-start items-center text-start ">
        <div>
            <h2 class=" t-title">What you need to know before the lesson:</h2>
            <ul class="list-disc ">
                <li>For more effective push, make sure that the hub (of the launcher) is placed
                    at the centre part of the back of the car.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/N2/SimpleMachines/b33.png') }}" class="img-md" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>


    {{-- slide 7 --}}
    <div class="text-white flex flex-col t-slide text-start hidden">
        <div>
            <h2 class=" t-title ">What you need to do before the lesson:</h2>
            <ul class="list-disc">
                <li>Be familiar with the name of the parts in the lego set.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/N2/SimpleMachines/at1.png') }}" class="drawable" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
    </div>




    {{-- slide 8 --}}
    <div class="text-white flex flex-col t-slide text-start hidden">
        <div>
            <h2 class=" t-title ">Things to note during hands-on sessions:</h2>
            <ul class="list-disc">
                <li>Encourage children to always discuss and make decisions as a group to complete the mission.</li>
                <li>Always encourage children to attempt on their own before prompting.</li>
                <li>Advise children to try finding the best way to use the launcher, so that they'll be able to use their
                    strongest push to make a car move up the inclined plane.</li>
                <li>If needed, advise children to use clear adhesive tape to secure parts of the cars that are loose and
                    have the tendency to fall off when the car is pushed.</li>
            </ul>
        </div>
        <div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="absolute teacher-img1" />
        </div>

    </div>

    {{-- slide 9 --}}
    <div class=" t-slide text-start !text-white !w-[53vw] flex items-center">
        <div>
            <h2 class="t-title ">Notes:</h2>
            <ul class="list-disc space-y-3">
                <li>
                    <span class="relative">
                        If you see <span class="opacity-0">---</span>next to a picture, click on the picture to watch the
                        video.
                        <img class="t-video-btn absolute top-[-1vw] left-[7.6vw]"
                            src="{{ asset('assets/images/pptimages/video.png') }}" />
                    </span>
                </li>

                <li>
                    <span class="relative">
                        If you see <span class="opacity-0">---</span> , click on it for additional information or activity.
                        <img src="{{ asset('assets/images/pptimages/info-btn.png') }}"
                            class="t-info-btn absolute top-[-1vw] left-[8vw]" />
                    </span>
                </li>

                <li>
                    Always ask questions to encourage children to think and share their ideas first before giving out
                    any information.
                </li>

                <li>Emphasise and use the keywords during hands-on sessions.</li>

                <li>
                    Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                </li>

                <li>
                    <span class="relative">
                        Click on this shortcut icon <span class="opacity-0">---</span> if you need to go to some parts of
                        the lesson quickly.
                        <img src="{{ asset('assets/images/pptimages/home-btn.png') }}"
                            class="t-home-btn absolute top-0 left-[19vw]" />
                    </span>
                </li>

            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>







    {{-- ============= --}}
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
        // click simple       
        document.addEventListener("DOMContentLoaded", () => {
            // Get all elements
            const slides = document.querySelectorAll(".t-slide");
            const nextBtn = document.querySelector(".nextButton");
            const returnBtn = document.getElementById("returnButton");
            const doneBtn = document.querySelector(".doneButton");

            // Current slide position
            let currentIndex = 0;

            // Show slide and update buttons
            function showSlide(index) {
                // Hide all slides
                slides.forEach(slide => slide.classList.add("hidden"));

                // Show current slide
                slides[index].classList.remove("hidden");

                // Update index
                currentIndex = index;

                // Check if last slide
                const isLastSlide = (index === slides.length - 1);

                if (isLastSlide) {
                    // Last slide: hide Next, show Done
                    nextBtn.style.display = "none";
                    doneBtn.style.display = "block";
                } else {
                    // Not last slide: show Next, hide Done
                    nextBtn.style.display = "block";
                    doneBtn.style.display = "none";
                }
            }

            // Next button
            nextBtn.addEventListener("click", () => {
                if (currentIndex < slides.length - 1) {
                    showSlide(currentIndex + 1);
                }
            });

            // Return button
            returnBtn.addEventListener("click", () => {
                if (currentIndex === 0) {
                    // On first slide: redirect to route
                    window.location.href = "{{ route('PushSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('PushSelection') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
