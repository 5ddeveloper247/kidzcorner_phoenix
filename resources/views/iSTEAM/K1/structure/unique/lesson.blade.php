@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/u1.png" />
        <h2 class="title stroke">Children, buildings are common structures around us.
            Do you still remember who designs buildings?</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/u2.png" />
        <h2 class="title stroke">AChildren, buildings are common structures around us.
            Do you still remember who designs buildings?</h2>
        <p class="note">Note: Have children recall what do architects and engineers do.</p>
    </div>


    {{-- Slide3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K1/str/u3.png" />
        <h2 class="title stroke">Architects draw a plan to design
            the look and space of building.</h2>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center ">
        <img src="/assets/images/K1/str/u4.png" />
        <h2 class="title stroke">Engineers look through the plan to come out with
            ideas to bring the design to life.</h2>

    </div>


    {{-- Slide 5  --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/str/u3.png" />
        <h2 class="text-start title stroke">Engineers look through the plan to come out with
            ideas to bring the design to life.</h2>
    </div>



    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="/assets/images/K1/str/st2.png" />
        <h2 class="text-start title stroke">Some architects design interesting looking buildings to
            make the buildings unique and standout.</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-10">
            <p class="note w-[120px]">It is called
                the Basket
                Building.</p>
            <img src="/assets/images//K1/str/u5.png" />
        </div>
        <h2 class="text-start title stroke">The building in America is unique because it is designed
            based on the basket that the company produced.</h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-10">
            <p class="note w-[120px]">It is called
                the Burj
                Al Arab!</p>
            <img src="/assets/images//K1/str/u6.png" />
        </div>
        <h2 class="text-start title stroke">The building in Dubai is unique because it is designed
            to look like the sail of a ship.</h2>
    </div>




    {{-- slide 9 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-10">
            <p class="note w-[120px]">It is called
                the Dancing
                House!</p>
            <img src="/assets/images//K1/str/u7.png" />
        </div>
        <h2 class="text-start title stroke">The building in Prague is unique because it is designed
            to look like a pair of dancers.</h2>
    </div>


    {{-- slide 10 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-10">
            <p class="note w-[120px]">It is called
                the Dancing
                House!</p>
            <img src="/assets/images//K1/str/u7.png" />
        </div>
        <h2 class="text-start title stroke">The building in Prague is unique because it is designed
            to look like a pair of dancers.</h2>
    </div>


    {{-- slide 11 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-10">
            <p class="note w-[120px]">It is called
                the Elephant
                Building!</p>
            <img src="/assets/images//K1/str/u8.png" />
        </div>
        <h2 class="text-start title stroke">The building in Bangkok is unique because it is designed
            to look like an elephant.</h2>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-10">
            <p class="note w-[120px]">tt is called the
                capital Gate,
                known as the
                Leaning Tower
                of Abu Dhabi!</p>
            <img src="/assets/images//K1/str/u9.png" />
            <p class="note w-[120px]">It leans four
                times more than
                the Leaning
                Tower of Pisa!</p>
        </div>
        <h2 class="text-start title stroke">This building in Abu Dhabi is unique because it is designed
            to lean west.</h2>
    </div>




    {{-- slide 13 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-center gap-10">
            <p class="note w-[120px]">It is called
                the Hive!</p>
            <img src="/assets/images//K1/str/u10.png" />
        </div>
        <h2 class="text-start title stroke">The building in Singapore is unique because it looks like
            a cluster of elongated bee hives. </h2>
    </div>

    {{-- slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-20">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Small Group Activity </h2>
        <h2 class="text-start title stroke">Mission: <br>
            Let’s design and build a unique building using the straws and pipe cleaners.</h2>
        <p class="note">Note: Give each group a set of materials to work on.</p>
    </div>


    {{-- slide 15 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="title stroke text-start">
            <h2>Steps:</h2>
            <ul class="list-decimal">
                <li>Draw your design of a unique building in the learning journal.</li>
                <li>Build the structure of your building using the straws and pipe cleaners.</li>
                <li>Choose suitable materials to build the look of your building.</li>
                <li>Name and label your building.</li>
                <li>Showcase your work.</li>
            </ul>
        </div>
        <p class="note text-center">Note: Have children discuss in groups and draw out their design of a unique building in
            the leaming joumal.
            After that, have them work together in groups to construct the building according to their design ideas.
            During the showcase, have them share their design ideas to the class.</p>
    </div>


    {{-- slide 16 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] bg-cover bg-center flex flex-col justify-between items-start"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Design a unique building. Draw it.</p>
            <p>What is the name of your building?___________________________________________________</p>
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
           
<img  src="{{ asset('assets/images/pptimages/cancel.png') }}" />
   
        </button>

    </div>

    {{-- next Button --}}
    <div class="down-btn-container">

        <button
            class="nextButton ">
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
                    window.location.href = "{{ route('uniqueSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
