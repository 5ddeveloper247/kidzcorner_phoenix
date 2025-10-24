@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')




    {{-- sldie 1 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Explore and learn about a domino effect (chain reaction)</li>
                <li>Learn about the basic concept of force (push)</li>
                <li>Learn to form some basic domino arrangements</li>
                <li>Create a domino pattern that includes some of the basic domino arrangements together with friends</li>
            </ul>
        </div>
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title font-bold">Keywords:</h2>
                <ul class="list-disc ">
                    <li>Domino Effect</li>
                    <li>Chain Reaction</li>
                    <li>Force (Push)</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start w-[75%]">
        <div>
            <h2 class="font-bold t-title">Preparations for Class Activity I:</h2>
            <ul class="list-disc ">
                <li>Each child: 25 dominoes</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <img src="/assets/images/K1/cm/cm20.png" />
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />
        </div>
    </div>


    {{-- slide 3 --}}
    <div class=" slide flex text-2xl text-white justify-start gap-y-10 text-start ">
        <div>
            <h2 class="font-bold t-title">Preparations for Class Activity I:</h2>
            <ul class="list-disc ">
                <li> Domino toppling game requires a lot of patience, hard work, dedication, and perseverance.
                    Always praise children for their effort. When they fail, compliment the work they did and
                    then guide them to figure out how they can improve for next time, such as trying a different
                    strategy or practicing more.</li>
                <li>Domino toppling is best carried out on a very flat and hard surface.
                    Avoid doing it on carpets and rugs because you will find it very difficult
                    to set up and topple the dominoes. </li>
                <li> While children are working in a small group, remind them to respect each
                    other's ideas. </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />
    </div>





    {{-- slide 4 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li>
                        If you see
                        <span
                            class="info-btn">
    
                          <img src="{{ asset('assets/images/pptimages/video.png') }}"
                             />
                        </span>
                        next to a picture, click on the picture to watch the video.
                    </li>
                    <li>Always ask questions to encourage children to think and share their
                        ideas first before giving out any information.</li>
                    <li>Emphasise and use the keywords during hands-on sessions.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.</li>
                    <li>
                        Click on this <span class="font-bold t-title">shortcut icon</span>
                        <span
                            ><img src="{{ asset('assets/images/pptimages/home-btn.png') }}"
                                class="home-btn" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />
        </div>
    </div>


    {{--  slide 5 --}}
    <div class="text-white flex flex-col items-center justify-center gap-y-10 text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex">
            <div>
                <h2 class="!text-white title stroke">Domino Toppling</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <ul class="list-disc">
                    <li>Place dominoes and pictures of basic domino arrangements here.</li>
                </ul>

                <h2 class="t-title">What to do:</h2>
                <ul class="list-decimal">
                    <li>Arrange some dominoes to form a pattern that you like.</li>
                    <li>Push the first domino and enjoy watching all the dominoes fall one after another.</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt=""class="h-[350px] object-contain absolute right-[250px] bottom-[150px] teacher-img1" />
        </div>
    </div>



    {{-- ================================================================================== --}}
    <div class="down-btn-container">
        <button
            class=" doneButton ">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
            <span class="absolute left-[80px] top-[18px] flex items-center text-white text-5xl font-bold stroke">DONE</span>
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
        <button
            
            id="closeButton">
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

              //   Return button - redirect if on first slide, otherwise go back
        returnButton.addEventListener("click", () => {
            if (currentSlide === 0) {
                //   First slide pe hai →  
                window.location.href = "{{ route('YourRouteNameHere') }}";
            } else {
                //   Previous slide pe jao
                currentSlide--;
                showSlide(currentSlide);
            }
        });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('K1CompoundMachines') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
