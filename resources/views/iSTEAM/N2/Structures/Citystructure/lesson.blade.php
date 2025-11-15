@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Structures in a City</h2>


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-between h-[30vh]">
        <h2 class="title stroke">Children, do you remember the different types of structures
            that we have learnt?</h2>
        <p class="note">Note: Encourage children to recall what they have learnt.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s1.png') }}" class="img-lg" />
        <h2 class="title stroke">We learnt that buildings are structures.
            They are put together with many small parts.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s2.png') }}" class="img-lg" />
        <h2 class="title stroke">There are many different types of buildings. They have
            different designs and shapes.</h2>
    </div>


    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s3.png') }}" class="img-lg" />
        <h2 class="title stroke">We also looked at structures that looked like triangles
            such as the Eiffel Tower and Pyramid.</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex gap-[1vw]">
            <img src="{{ asset('assets/images/N2/structure/ci-str/s4.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/N2/structure/ci-str/s5.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">Lastly, we learnt that vehicles are structures too.
            Different vehicles have different shapes
            and their structures look different.</h2>
    </div>


    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[30vh]">
        <h2 class="title stroke">Structures can be found everywhere in the world.
            What structures have you seen in Singapore?</h2>
        <p class="note">Note: Encourage children to brainstorm as a class on what they want to have in their city.</p>
    </div>


    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let's look at some photographs of famous structures 
            around Singapore! </h2>
        <h2 class="title stroke"> Stop the different structures and name the shapes of 
            these structures.</h2>
    </div>


    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s6.png') }}" class="img-xl" />
        <h2 class="title stroke">This unique structure is called the Esplanade.</h2>
    </div>


    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s7.png') }}" class="img-xl" />
        <h2 class="title stroke">What structures do you see here?</h2>
        <p class="note">Note: Teacher to encourage children to share what they see and describe the shapes of the
            structures.</p>
    </div>


    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s8.png') }}" class="img-xl" />
        <h2 class="title stroke">The giant wheel is called the Singapore Flyer.</h2>
    </div>


    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s9.png') }}" class="img-lg" />
        <h2 class="title stroke">These two buildings are called Marina Bay Sands Hotel
            and The ArtScience Museum.</h2>
    </div>


    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s10.png') }}" class="img-lg" />
        <h2 class="title stroke">What structures do you see here?</h2>
        <p class="note">Note: Teacher to encourage children to share what they see and describe the shapes of the
            structures.</p>
    </div>


    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s11.png') }}" class="img-lg" />
        <h2 class="title stroke">These are the Supertrees found in Gardens by the Bay.</h2>
    </div>


    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s11.png') }}" class="img-lg" />
        <h2 class="title stroke">What structures do you see here?</h2>
        <p class="note">Note: Teacher to encourage children to share what they see and describe the shapes of the
            structures.</p>
    </div>


    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s12.png') }}" class="img-lg" />
        <h2 class="title stroke">This is a pavilion found in the Singapore Botanic Gardens.</h2>
    </div>


    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s12.png') }}" class="img-lg" />
        <h2 class="title stroke">What structures do you see here?</h2>
        <p class="note">Note: Teacher to encourage children to share what they see and describe the shapes of the
            structures.</p>
    </div>


    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s13.png') }}" class="img-lg" />
        <h2 class="title stroke">These are apartment buildings.</h2>
    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s13.png') }}" class="img-lg" />
        <h2 class="title stroke">What structures do you see here?</h2>
        <p class="note">Note: Teacher to encourage children to share what they see and describe the shapes of the
            structures.</p>
    </div>


    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s14.png') }}" class="img-lg" />
        <h2 class="title stroke">What structures do you see here?</h2>
        <p class="note">Note: Teacher to encourage children to share what they see and describe the shapes of the
            structures.</p>
    </div>


    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s15.png') }}" class="img-lg" />
        <h2 class="title stroke">This is the Sentosa Express monorail.</h2>
    </div>


    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/ci-str/s15.png') }}" class="img-lg" />
        <h2 class="title stroke">What structures do you see here?</h2>
        <p class="note">Note: Teacher to encourage children to share what they see and describe the shapes of the
            structures.</p>
    </div>


    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50vh]">
        <h2 class="title stroke !text-white">Class Activity</h2>
        <h2 class="title stroke !text-start">Mission: <br>
            Let's build a city using the construction set.</h2>
        <p class="note">Note: Teacher can lead the discussion as a class to draw out the plan before dividing them into
            groups
            to work on the different parts of the city. Teachers can add in other materials to make the other parts
            of the city such as the roads, trees etc.</p>
    </div>


    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Discuss as a class what you would like to have in your city.</li>
                <li>Draw the structure that you would like to build in your learning journal.</li>
            </ol>
        </div>
        <div class="w-[40vw] h-[30vh] border-2 border-white text-start flex flex-col justify-between">
            <p class="note">Draw the structure that you would like to <br>
                create in the city.</p>
            <p class="note">This is____________________________</p>
        </div>
        <p class="note">Note: Tell the children that they can build buildings, vehicles or any other structures for the
            city</p>
    </div>


    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50vh]">
        <div class="text-start">
            <h2 class="title stroke">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Identify the shapes in your structure.</li>
                <li>Pick out the pieces/blocks and arrange them into the shape for your structure.</li>
                <li>Use connectors to connect them together.</li>
            </ol>
        </div>
        <p class="note">Note: Tell the children that they can build buildings, vehicles or any other structures for the
            city.</p>
    </div>


    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[28vw]">
        <div class="text-start">
            <h2 class="title stroke">Guided Questions During Group Activity</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>What do you see in your neighborhood? (e.g shopping mall, schools, fire station, hospital)</li>
                <li>What do you see on the roads? (e.g bus, bus stop, cars, taxis cement truck)</li>
                <li>What are the places in Singapore that you like? Are there any special structures? (e.g. Airport tower,
                    Jewel etc )</li>
            </ol>
        </div>
        <p class="note">Note: Teacher can encourage children to build a bigger structure of their vehicle
            by using more pieces of the contraction set.</p>
    </div>


    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw h-[25vw] drawable border-2 border-white !text-white flex flex-col justify-between items-start">
            <p>Draw the structure that you would like to create in the city.</p>
            <p>This is -----------------------------</p>
        </div>
    </div>



    {{-- ================= --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row">
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

    {{-- Next Button --}}
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

            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    window.location.href = "{{ route('CitystructureSelection') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('Structures') }}";
                });
            }

            showSlide(currentSlide);
        });
    </script>
@endpush
