@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')




    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="  font-bold">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn about the stages of growth of animals</li>
                <li>Talk about the changes that occur between the different stages of growth of animals</li>
                <li>Learn that animals eat and drink to get nutrients to live and grow</li>
                <li>Know that all living things go through similar stages of growth</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="t-title font-bold">Keywords:</h2>
                <div class="flex  gap-10">

                    <ul class="list-disc ">
                        <li>Baby</li>
                        <li>Young</li>
                        <li>Adult</li>
                        <li>Elderly Person</li>
                        <li>Grow</li>

                    </ul>
                    <ul class="list-disc ">
                        <li>Stages of Growth</li>
                        <li>Living Thing</li>
                        <li>Non-Living Thing</li>
                        <li>Move</li>
                        <li>Eat</li>

                    </ul>
                    <ul class="list-disc ">
                        <li>Drink</li>
                        <li>Breathe</li>
                        <li>Nutrients</li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />
        </div>
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start w-[75%]">
        <div>
            <h2 class="font-bold">Preparations:</h2>
            <ul class="list-disc ">
                <li>Send out a letter to parents two weeks before the lesson. The letter is to request for parents to choose
                    3 photos of their child [1) When the child was a baby; 2) When the child was 1 or 2 years old; 3) The
                    current photo of the child]</li>
                <li>Sample Letter:</li>
            </ul>
        </div>
        <div class="flex flex-col gap-8 border-4 border-white border">
            <h2 class="text-[30px]">Dear Parents</h2>
            <p>In line with our iSTEAM Topic - Living Things, children will be learning
                about the stages of growth. To enable them to understand the meaning of growth, we seek your help in
                providing us with individual photos of your child at these stages:</p>
            <ul>

                <li> > Newborn / baby</li>
                <li> > 1- 2 years old</li>
                <li> > Current photo</li>

            </ul>
            <p>You may send us the soft copy of the photo via Commapp or email. Thephotos will be used in our class
                activity.</p>
        </div>
    </div>



    {{-- slide 3 --}}
    <div class=" slide flex text-2xl text-white justify-start gap-y-10 text-start w-[75%] relative">
        <div>
            <h2 class="font-bold">Things to consider during hands-on sessions:</h2>
            <ul class="list-disc ">
                <li>Teacher please print the children's photo based on the size as
                    provided in the resource - photo template.</li>
                <li> Cut out the photos before the lesson.</li>
                <li>Optional, 3 photos of a teacher (as a baby, child and adult) - as a
                    sample to show children the stages of growth of a teacher.</li>
            </ul>
        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="h-[300px]" />


    </div>


    {{-- slide 4 --}}
    <div class="text-white flex text-start text-2xl slide hidden">
        <div>
            <h2 class="font-bold underline">Things to consider during discussion:</h2>
            <ul class="list-disc">
                <li>
                    Prompt children to share how Emma/Oliver have changed over time.
                    Encourage children to describe the visible size and appearance of the person in each picture.
                </li>
                <li>
                    <span class="font-semibold">Some possible questions during Class Activity:</span>
                    How have you changed since you were born?Guide children in pointing out the changes in their sizes and
                    appearances. If there is indication of their ages (e.g. photos of them celebrating birthday), teacher
                    can point out
                    that their ages change too.
                </li>
            </ul>
            <br>
            <h2 class="font-bold underline">Additional information:</h2>
            <ul class="list-disc">
                <li>All living things go through similar stages of growth.
                    However, some start from an egg and some are born.</li>
            </ul>

        </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="h-[350px] object-contain absolute right-[250px] bottom-[150px] teacher-img1" />
    </div>


    {{-- slide 5 --}}

    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li>
                        If you see
                        <span
                            class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-sky-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <!-- Decorative Vector -->
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/play.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                        next to a picture, click on the picture to watch the video.
                    </li>
                    <li>
                        If you see
                        <span
                            class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-amber-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/info.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                        , click on it for additional information or activity.
                    </li>
                    <li>Always ask questions to encourage children to think and share their ideas first before giving
                        out
                        any information.</li>
                    <li>Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
                    <li>
                        Click on this <span class="font-bold">shortcut icon</span>
                        <span
                            class="relative inline-block h-16 w-16 cursor-pointer rounded-[20px] bg-sky-500 shadow-[2px_3px_5px_rgba(0,0,0,0.25)] shadow-[inset_2px_-3px_3px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
                            <img src="{{ asset('assets/images/pptimages/Vector4.png') }}"
                                class="absolute top-[4px] left-[6px] h-6 w-[80%]" />
                            <div class="absolute top-[7px] left-[12px] h-2.5 w-3.5 rounded-sm bg-white"></div>
                            <img src="{{ asset('assets/images/pptimages/home-icon.png') }}"
                                class="absolute top-[16px] left-[16px] h-8 w-8" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1"  />

        </div>

    </div>


    {{-- slide 6 --}}
    <div class="text-white flex text-start text-2xl slide hidden">
      <div>

          <h2 class="!text-white title stroke">Learning Centre Idea</h2>
          
          <div>
            <h2 class="!text-white title stroke">Stages of Growth of a Person</h2>
            <h2 class="font-bold underline">What and how to set up:</h2>
            <ul class="list-disc">
                <li>
                    Place pictures of the different stages of growth of a person (e.g.
                    teacher's photo) here - include baby, young and adult (current)
                    photos. Prepare text labels of the stages.
                </li>
            </ul>
            <br>
            <h2 class="font-bold underline">What to do:</h2>
            <ul class="list-decimal">
                <li>Invite children to arrange the photos in the correct order.</li>
                <li> Then, invite children to match each photo to its label.</li>
            </ul>

        </div>
    </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="h-[350px] object-contain absolute right-[250px] bottom-[150px] teacher-img1" />
    </div>

    {{-- slide 7 --}}
    <div class="text-white flex  text-start text-2xl slide hidden">
      <div>

          <h2 class="!text-white title stroke">Learning Centre Idea</h2>
          
          <div>
              <h2 class="!text-white title stroke">Stages of Growth of a Person</h2>
            <h2 class="font-bold underline">What and how to set up:</h2>
            <p>Place pictures of the different stages of growth of an animal (e.g.
                cat or chicken) here - include egg, baby, young and adult photos.
                Prepare text labels of the stages.
            </p>
            <br>
            <h2 class="font-bold underline">What to do:</h2>
            <ul class="list-decimal">
                <li>Invite children to arrange the photos in the correct order.</li>
                <li> Then, invite children to match each photo to its label.</li>
            </ul>
            
        </div>
    </div>

        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="" class="h-[350px] object-contain absolute right-[250px] bottom-[150px] teacher-img1 float-right" />
    </div>



    {{-- Done Button --}}
    <div class="down-btn-container">
        <button
            class=" doneButton ">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img
                    src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            </div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">DONE</span>
        </button>
    </div>


    {{-- Buttons --}}
    <div id="buttons" class="absolute top-0 right-[60px] flex flex-row gap-6 z-90">

        <!-- Return Button -->
        <a id="returnButton">
 <img
    src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <!-- Home Button -->
        <button
     id="homeButton">
            <img 
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
           
            <img 
                src="{{ asset('assets/images/pptimages/cancel.png') }}" />
    
        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button
            class="nextButton">
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
            const doneButton = document.querySelector(".doneButton"); // ✅ DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // ✅ Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // ✅ NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // ✅ Return button
            returnButton.addEventListener("click", () => {
                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('LivingThings') }}";
                });
            }


            showSlide(currentSlide);
        });
    </script>
@endpush
