@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')
    {{-- sldie 1  --}}
    <div class=" slide flex text-2xl text-white flex-col justify-start gap-y-10 text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Understand the meaning of carbon footprint</li>
                <li>Learn how to protect Earth by reducing our carbon footprint</li>
                <li>Learn about the future of food</li>
                <li>Develop awareness of environmental issues/li>
                <li>Develop curiosity and understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title font-bold">Keywords:</h2>
            <div >
                <ul class="list-disc ">
                    <li>Earth</li>
                    <li>Global warming</li>
                    <li>Greenhouse-gases</li>
                    <li>Carbon dioxide</li>
                      <li>Carbon Footprint</li>
                        <li>Sustainable Future</li>
                          <li>Population Growth</li>
                            <li>Future Food</li>
                              <li>Plant-Based Meat</li>
                               <li>Lab-Grown Meat/Cultured Meat</li>
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
                   If you have no idea what carbon footprint is, go through this video 
     <span class="title stroke">(https://www.youtube.com/watch?v=8q7_aV8eLUE )</span>.
                </li>
                <li>Go through the online carbon footprint calculator 
      <span class="title stroke"> (https://mycarbonfootprint.spgroup.com.sg/ or your desired website)</span> to
     know what information is needed for the demo in class.</li>
                <li>
                    For class activity 1, you need to prepare and send parents a notice that
     includes the link as mentioned above to get them assist their children to
     calculate their carbon footprint at home; record the result and share in the
     class.
                </li>
                <li>Papers and drawing tools (for plotting graph)</li>
                <li>
                   Go through the video about Singapore's plan in building future farms
       <span class="title stroke"> (https://www.youtube.com/watch?v=2ueVw83Plec ) </span> know how you can
     explain it to children in simple terms.
                </li>
                <li>
                   Go through the vegan ground beef recipe and video
        <span class="title stroke"> (https://passtheplants.com/vegan-ground-beef/) </span> help you visually
     understand the steps of making plant-based meat in Class Activity 2.
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-center gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Preparations:</h2>
            <ul class="list-disc">
                <li>For class activity 2, you need cauliflowers, eggplants, carrots, onion, garlic, basil, 
                    crushed pumpkin seeds, cinnamon powder and cumin (refer to the vegan ground beef recipe 
                    to decide the quantity needed for each ingredient).</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/sustain/carbon/c21.png') }}" />
         <ul class="list-disc">
                <li>Crushed the pumpkin seeds and clean the ingredients beforehand.</li>
            </ul>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul class="list-decimal">
                <li>(A) Use a pencil to make a patch of dark mark on a paper. [ Have all the A do the step. Advise A to
                    darken the patch by shading the patch again and again. ]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f3.png') }}" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>If you want, you may choose other recipes for Class Activity 2. Just remember to use natural
                     ingredients to make up the taste of the plant- based meat; avoid ingredients that may trigger 
                     food allergy and food intolerance.</li>
            </ul>
            <br>
             <h2 class="font-bold t-title">Support:</h2>
            <ul class="list-disc ">
                <li>In case you encounter difficulty in accessing the online video about carbon footprint, click here to view.</li>
                 <li>In case you encounter difficulty in accessing the online video about Singapore's plan in building future farms,
                     click here to view.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">Notes</h2>
             <ul class="list-disc ">
                <li>If you see <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s27.png') }}" /> next to a picture, click on the picture to watch the video
                </li>
                    <li>Always ask questions to encourage children to think and share their ideas first 
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
            <h2 class="font-bold t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li>4. (C) Carefully remove the tape from the fingertip (of B) and paste it on the learning journal (of B).
                    [Have all the C do the step. Remind C to paste the tape in the correct place of B's fingerprint record.]
                </li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f6.png') }}" class="w-[600px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher"
            class="absolute teacher-img1" />
    </div>

    {{-- sldie 8 --}}
    <div class=" slide flex text-2xl text-white flex-col items-center justify-start gap-y-10 text-start">
        <div>
            <h2 class="font-bold t-title">How to make own set of fingerprints and things to consider:</h2>
            <ul>
                <li>5. (A) Use a wet towel to clean the fingertip (of B). [ Have all the A do the step. Explain to children
                    that this is to avoid possible messiness when taking prints of other fingers. ]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f7.png') }}" class="w-[600px]" />
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
                    window.location.href = "{{ route('k2sustainability') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
