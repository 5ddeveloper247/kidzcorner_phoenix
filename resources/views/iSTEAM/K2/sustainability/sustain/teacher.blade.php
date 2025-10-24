@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Understand the meaning of sustainability</li>
                <li>Learn about how sustainability can help earth</li>
                <li>Develop awareness of environmental issues</li>
                <li>Develop curiosity and understanding through inquiry</li>
                
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title font-bold">Keywords:</h2>
            <div >
                <ul class="list-disc ">
                    <li>Global Warming</li>
                    <li>Sustainability</li>
                    <li>Earth</li>
                    <li>Temperature</li>
                      <li>Greenhouse Gases</li>
                        <li>Coal</li>
                           <li>Natural Resoursce</li>
                              <li>Fuel</li>
                                 <li>Atmosphere</li>
                                  <li>Glacier</li> 
                                  <li>Oxygen</li>
                                    <li>Carbon Dioxide</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>
3 bottles of the same size - cut out one side of the bottle to create an<br>
     opening for all the 3 bottles (as shown)
                </li>
            </ul>
        </div>
           <img src="{{ asset('assets/images/K2/sustain/sustainability/a15.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-center gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>For bottle A, plant some seeds 2-3 weeks before the activity</li>
                <div class="flex gap-2 items-center">
                   <img src="{{ asset('assets/images/K2/sustain/sustainability/a16.png') }}" />
                      <img src="{{ asset('assets/images/K2/sustain/sustainability/a17.png') }}" />
                </div>
                       <li>For the example above, green beans and cat grass were planted about 1-2 weeks before the experiment.
                         Please soak seeds before planting for higher success rates.</li>
             <li>t is important that the plants grow from the soil so that the roots will hold onto the soil for the experiment to be successful.</li>
              <li>You may want to drill some holes for the excess water to sip out to avoid drowning your seeds/plants.</li>
                        </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Preparations:</h2>
            <ul class="list-decimal">
                <li>For bottle B, fill half the bottle with soil and add dried leaves and twigs on
     top of the soil (do not put too much such that water cannot reach the soil
     at all)</li>
            </ul>
        </div>
       <img src="{{ asset('assets/images/K2/sustain/sustainability/a18.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>
{{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Preparations:</h2>
            <ul class="list-decimal">
                <li>For bottle C, just fill half the bottle with soil.</li>
            </ul>
        </div>
       <img src="{{ asset('assets/images/K2/sustain/sustainability/a.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Things to take note prior the class activity:</h2>
            <ul>
                <li>If you have drilled holes in the first bottle for the plants, please tape it up with masking tapes to 
                    avoid water sipping through the holes during the experiment.</li>
                    <li>Place a block at end of the bottles to elevate so that the water can flow easily towards the mouth of the bottle.</li>
                    <li>Secure the cups below the mouth of the bottles to avoid spillage.</li>
                    <li>Do try pouring water into the first bottle first before showing the experiment to the children.<br>
                         This is to test if your plants have grown enough roots to hold onto the soil. In real life, trees<br>
                          grow over a long time and their roots will hold firmly to the ground. But our plants are small and <br>
                          the roots may not be as strong over such a short period of time.</li>
            <li>Do place cloth or paper towels under the first bottle as some leakage from the holes is<br>
                 expected even though masking tape has been used.</li>
                        </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Things to take note prior the class activity:</h2>
            <ul>
                <li>Do expect muddy coloured water to flow out from the first bottle.</li>
                  <li>When comparing, you will see that there are some soil/dirt that flows into cup 2.
                     Cup 3 has the most soil.</li>
                    <li>This can be used to conclude that the roots were able to hold on to most of the soil as compared
                         to the other two bottles.</li>
            </ul>
        </div>
       <img src="{{ asset('assets/images/K2/sustain/sustainability/a19.png') }}" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- sldie 7 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">How to make own set of fingerprints and things to consider:</h2>
           <ul>
                <li>If you see <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s27.png') }}" /> next to a picture, click on the picture to watch the video
Always ask questions to encourage children to think and share their ideas first 
     before giving out any information.
                </li>
  <li>Emphasise and use the keywords during hands-on sessions.
</li>
<li>Print out the Learning Journal (if any) for every 
     child to complete at the end of the lesson.
</li>
  <li>Click on this shortcut icon<img src="{{ asset('assets/images/K2/sustain/Globalwarming/s28.png') }}" />if you need to go to some 
     parts of the lesson quickly.
                </li>
     
      
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- sldie 7 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">When Glaciers Melt</h2><br>
           <p class="note">What and how to set up:<br>
Print out pictures of natural resources such as tree, coal, cow, fish,<br>
stone, iron etc. Print items that are not natural resources such as<br>
plastic bag, shoe, straws, toy, water bottles etc.<br>

What to do:<br>
Invite children to look at each picture and sort them out if the<br>
     item is from nature or not.<br>
Encourage children to think what can the natural resources be<br>
     made into.</p>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    

    {{-- slide 9 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li>6. (A, B & C) Repeat the steps for other fingers. [Have all the A, B & C repeat steps 1-5 to complete
                    the fingerprint record of B. After that, have them change their roles to help one another complete the
                    fingerprint record. ]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f8.png') }}" class="w-[700px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- slide 10 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li>7. Observe your fingerprints. [ Have children observe and compare their own set of fingerprints on the
                    record. Then have them share their views. ]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f2.png') }}" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- slide 11 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li>8. Compare your fingerprints with friends. [ Have children observe and compare their fingerprints with
                    friends. Then have them share their views. ]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f9.png') }}" class="w-[700px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>



    {{-- sldie 12 --}}
    <div class="slide flex  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class="font-bold t-title">Notes:</h2>
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
                        next to a picture, class="text-amber-400" click on the picture to watch the video.
                    </li>
                    <li>Emphasise and use the <strong>keywords</strong> during hands-on sessions.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end of the lesson.
                    </li>
                    <li>
                        Click on this <span class="font-bold t-title">shortcut icon</span>
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
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1"
                alt="Teacher" />
        </div>
    </div>


    {{-- slide 13 --}}
    <div class="text-white flex flex-col items-center justify-center gap-y-10 text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div class="flex flex-col gap-10">
            <ul>
                <h2 class="!text-white title stroke">Fingerprints Art</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <li>Put some paints, sponges, coloured pencils and drawing papers here.</li>
            </ul>

            <div>
                <h2 class="t-title">What to do:</h2>
                <ul class="list-decimal">
                    <li>Turn your fingerprints into art! Put your fingerprints on the
                        drawing paper.</li>
                    <li>Use your imagination to turn it into a creative drawing by adding
                        details with coloured pencils.</li>
                    <li>Show it to your teacher and friends!</li>
                </ul>

            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>


    {{-- slide 14 --}}
    <div class="text-white flex flex-col items-center justify-center gap-y-10 text-start text-2xl slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div>
            <ul class="list-disc">
                <h2 class="!text-white title stroke">Fun Facts</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <p>Use your creativity to design graphic fact sheet for every fun fact
                    below. Guide children to understand the facts.</p>
                <li>Fingerprints actually help you to grasp an object. Without them,
                    your fingers will be slippery and you will not be able to write or
                    paint properly.</li>
                <li>Adermatoglyphia is a genetic disease where people are born
                    without fingerprints.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>


  
    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute  flex flex-row gap-6 z-90">

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
        window.location.href = "{{ route('YourRouteName') }}";  
    } else if (currentSlide > 0) {
        currentSlide--;
        showSlide(currentSlide);
    }
});

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2sustainability') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
