@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-20 ">
        <h2 class="title stroke">Children, how many types of structures have you learnt
            to build in the past few lessons?</h2>
        <p class="note">Note: Have children recall and name the structures that they built in the past few lessons.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col justify-center gap-20 items-center ">
        <h2 class="title stroke text-center">How confident are you in building different structures
            using the straws and pipe cleaners? <br>
            What are some of the points you have learned
            in building structures?</h2>
        <p class="note">Note: Encourage children to share their views and experiences.</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke">We are going to design and build an amazing city.
            What do you think an amazing city has? <br>
            Let's look at some cities around the world!</h2>
        <p class="note">Note: Have children think and name the different types of structures in a city.</p>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/str/c1.png" />
        <h2 class=" title stroke">What <span class="text-white">structures</span> do you see in this <span
                class="text-white">city</span>?</h2>
        <p class="note">Note: Guide children to talk about the different structures in the photo (London).</p>
    </div>


    {{-- Slide 5  --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/str/c2.png" />
        <h2 class=" title stroke">What <span class="text-white">structures</span> do you see in this <span
                class="text-white">city</span>?</h2>
        <p class="note">Note: Guide children to talk about the different structures in the photo (Portugal).</p>
    </div>



    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/str/c3.png" />
        <h2 class=" title stroke">What <span class="text-white">structures</span> do you see in this <span
                class="text-white">city</span>?</h2>
        <p class="note">Note: Guide children to talk about the different structures in the photo (Vienna).</p>
    </div>


    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/str/c4.png" />
        <h2 class=" title stroke">What <span class="text-white">structures</span> do you see in this <span
                class="text-white">city</span>?</h2>
        <p class="note">Note: Guide children to talk about the different structures in the photo (Shanghai).</p>
    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/str/c5.png" />
        <h2 class=" title stroke">What <span class="text-white">structures</span> do you see in this <span
                class="text-white">city</span>?</h2>
        <p class="note">Note: Guide children to talk about the different structures in the photo (Singapore).</p>
    </div>




    {{-- slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/str/c6.png" />
        <h2 class=" title stroke">A city has different types of structures
            that make it interesting and unique.</h2>
    </div>



    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-20">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Create an Amazing City </h2>
        <h2 class="text-start title stroke">Mission: <br>
            Let’s design and build an amazing city using the straws and pipe cleaners.</h2>
    </div>




    {{-- slide 11 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-20  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul class="list-decimal">
                <li>What structures do you want to have in your amazing city?
                    List them in the learning journal.</li>
                <li>Decide the structures that you are going to build. Circle
                    them on your list.</li>
            </ul>
        </div>
        <p class="note text-center">Note: Guide children to discuss as a class in deciding what structures to build.</p>
    </div>



    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-20  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>3. Design and build the different structures. Draw your
                    designs in the learning journals.</li>
            </ul>
        </div>
        <p class="note text-center">Note: Divide children into groups and have them work in groups to design
            and build the assigned structures.</p>
    </div>




    {{-- slide 13 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-20  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>4. Showcase the structures created.</li>
            </ul>
        </div>
        <p class="note text-center">Note: Have each group showcase their works and share their design ideas with the class.
            Allow them to make improvement to their works if they want to.</p>
    </div>





    {{-- slide 14 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-20  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul >
                <li>5. How do you put those structures together to form a city?
                    Draw your design in the learning journal.</li>
            </ul>
        </div>
        <p class="note text-center">Note: Guide children to discuss as a class in deciding how to put together all the
            structures
            created to form a city.</p>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start gap-20  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul>
                <li>6. Give your city a name and showcase your city.</li>
            </ul>
        </div>
        <p class="note text-center">Note: Have children name and label their city. Finally, have them showcase and share
            design ideas of their
            city with all the guests invited to the showcase.</p>
    </div>




    {{-- slide 16 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-start items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What do you want to have in your amazing city? List them. <br>
                Circle only those that you are going to build.</p>
        </div>
    </div>


    {{-- slide 17 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-start items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>What are you going to build? <br>
                How do you design it? Draw it.</p>
        </div>
    </div>

    {{-- slide 18 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>How do you design your amazing city? Draw it.</p>
            <p>What is the name of your ciity?___________________________________</p>
        </div>
    </div>








    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

        <!-- Return Button -->
        <a 
    id="returnButton">

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
            class="nextButton ">
                        <img src="{{ asset('assets/images/pptimages/return.png') }}" />

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
                    window.location.href = "{{ route('citySelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
