@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Structure of Big Vehicle</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/c-str/s1.png') }}" class="img-lg" />
        <h2 class="title stroke">In the last lesson, we learned that cars are structures
            made up by many small parts.</h2>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/N2/structure/c-str/s29.png') }}" class="img-lg" />
        <h2 class="title stroke">Cars, vans and trucks are structures with different designs.
            Therefore, they have different shapes.</h2>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <img src="{{ asset('assets/images/N2/structure/c-str/s29.png') }}" class="img-lg" />
        <h2 class="title stroke">In fact, all <span class="!text-white">vehicles</span> are structures.
            Cars, vans and pickup trucks are examples of small <span class="!text-white">vehicles</span> .</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Today, we are going to look at big vehicles! <br>
            Can you name some big vehicles?</h2>
        <p class="note">Note: Encourage children to brainstorm on the different types of vehicles.</p>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s1.png') }}" class="img-lg" />
        <h2 class="title stroke">Coaches and buses are big <span class="!text-white">vehicles</span>. <br>
            These <span class="!text-white">vehicles</span> can carry up to 40 people!</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s2.png') }}" class="img-lg" />
        <h2 class="title stroke">Double-decker buses are even bigger! <br>
            Can you see how big the bus us compared to the man?</h2>
        <p class="note">Note: Encourage children to compare the sizes of the bus and the man.</p>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s3.png') }}" class="img-lg" />
        <h2 class="title stroke">This is an open top double-decker bus.
            There are many people on the upper deck of the bus!</h2>
        <p class="note">Note: Point out to the children that there are people on the upper and lower deck of the bus.</p>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s4.png') }}" class="img-lg" />
        <h2 class="title stroke">This is a semi trailer. It can be attached to another part to
            <span class="!text-white">transport heavy</span> items from one place to another.
        </h2>
        <p class="note">Note: Ask children to guess what can be attached to it and what items can be transported.</p>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s5.png') }}" class="img-lg" />
        <h2 class="title stroke">The semi trailer truck can <span class="!text-white">transport</span> many cars at a time.
        </h2>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s6.png') }}" class="img-lg" />
        <h2 class="title stroke">The semi trailer truck <span class="!text-white">transports fuel</span> to petrol stations.
        </h2>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s7.png') }}" class="img-md" />
        <h2 class="title stroke">Some semi trailer trucks <span class="!text-white">transport</span> huge and
            <span class="!text-white">heavy</span> items in containers.
        </h2>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s8.png') }}" class="img-md" />
        <h2 class="title stroke">Look at the size of these semi trailer trucks and the cars.
        </h2>
        <p class="note">Note: Ask children to share about the sizes of these vehicles in the photo.</p>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s9.png') }}" class="img-xl" />
        <h2 class="title stroke">Fire engines are big vehicles too! Look at the <span class="!text-white">wheel</span>!
            Can you count how many <span class="!text-white">wheel</span> there are on each of them?
        </h2>
        <p class="note">Note: Ask children to think why are these so many wheels. <br>
            Encourage children to share if they have seen one before.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s9.png') }}" class="img-xl" />
        <h2 class="title stroke">Fire engines have many <span class="!text-white">wheels</span> because they are <span
                class="!text-white">heavy</span>. They
            carry many equipment that is needed to put out a fire.
        </h2>
        <p class="note">Note: Ask children to guess the items on the fire engines.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s9.png') }}"  class="img-xl"/>
        <h2 class="title stroke">Fire engines have many <span class="!text-white">wheels</span> because they are <span
                class="!text-white">heavy</span>. They
            carry many equipment that is needed to put out a fire.
        </h2>
        <p class="note">Note: Ask children to guess the items on the fire engines.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="flex gap-1 justify-center items-center">
            <div class="flex flex-col gap-1 justify-center items-center">
                <img src="{{ asset('assets/images/N2/structure/b-str/s10.png') }}" class="img-sm" />
                <h2 class="title stroke !text-white">front end loader</h2>
            </div>
            <div class="flex flex-col gap-1 justify-center items-center">
                <img src="{{ asset('assets/images/N2/structure/b-str/s11.png') }}" class="img-sm" />
                <h2 class="title stroke !text-white">dump truck</h2>
            </div>
        </div>
        <h2 class="title stroke">Construction <span class="!text-white">vehicles</span> are big vehicles too!</h2>
        <p class="note">Note: Ask children to name other types of construction vehicles that they know.</p>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s12.png') }}" class="img-md" />
        <h2 class="title stroke">Big <span class="!text-white">vehicles</span> are huge in size and carry <span
                class="!text-white">heavy</span> loads. <br>
            They also have big <span class="!text-white">wheels</span>!</h2>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s12.png') }}" class="img-md" />
        <h2 class="title stroke">Big <span class="!text-white">vehicles</span> have their own shape structures too!
            Can you spot the shapes on these <span class="!text-white">vehicles</span>?</h2>
        <p class="note">Note: Ask children to point out the shapes on these vehicles.</p>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s13.png') }}" class="img-md" />
        <h2 class="title stroke">They are made up of rectangles and circles!</h2>
        <p class="note">Note: Ask children to point out the shapes on these vehicles.</p>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s14.png') }}" class="img-md" />
        <h2 class="title stroke">Let's use these big <span class="!text-white">wheels</span> in the construction set to
            build some big <span class="!text-white">vehicles</span>!
        </h2>
        <p class="note">Note: Teacher you may let children compare the two different types of wheels.</p>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s15.png') }}" class="img-md" />
        <h2 class="title stroke">This is a <span class="!text-white">wheel</span> connector. It is different from the
            other
            connectors as this connector can turn!</h2>
        <p class="note">Note: Teacher you may let children play with it to see how it turns.</p>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <h2 class="title stroke !text-white">Class Activity 1</h2>
        <img src="{{ asset('assets/images/N2/structure/c-str/s14.png') }}" class="img-md" />
        <h2 class="title stroke !text-start">Mission: <br>
            Set up the big wheels.</h2>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col justify-between items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Take one wheel connector and a big wheel.</li>
                <li>Fix the connector on the inside of the big wheel.</li>
                <li>The big wheel is done.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/b-str/s16.png') }}" class="img-xl" />
        <p class="note">Note: Encourage all children to attach to attach the wheels and explore fixing
            them to the blocks.</p>
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col justify-around items-center">
        <h2 class="stroke title !text-start">Let's build a big vehicle!</h2>
        <p class="note">Note: Children can choose to build their own in pairs. Teachers do provide photos to assist them
            in <br>
            identifying the shapes on the vehicles. If the children are unable, they can always <br>
            follow the steps in the next activity.</p>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <h2 class="stroke title !text-white">Group Activity 1</h2>
        <img src="{{ asset('assets/images/N2/structure/b-str/s17.png') }}" class="img-md" />
        <h2 class="title stroke !text-start">Mission: <br>
            Build a fire truck with the construction set.</h2>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Gather the follow parts.</li>
            </ol>
        </div>
        <div class="flex gap-1 items-end">
            <img src="{{ asset('assets/images/N2/structure/b-str/s18.png') }}" class="img-md" />
            <p class="note !text-start">rectangle block X 5 <br>
                cube X 4 <br>
                long rectangle piece X 2<br>
                square piece X 1<br>
                two directions connectors X 3<br>
                wheel connector X 1<br>
                block connector X 9<br>
                big wheels (fixed with wheel<br>
                connectors) x 6
            </p>
        </div>
        <p class="note">Note: Encourage children to find the parts by themselves.</p>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col justify-between items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Take the following parts to build the rectangular body of the fire truck.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/b-str/s19.png') }}" class="img-xl" />
        <p class="note">Note: Encourage and guide the children to try to connect the pieces.</p>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col justify-between items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Start with a rectangle block and connect the blocks together using the block connectors.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/b-str/s20.png') }}" class="img-xl" />
        <p class="note">Note: The blocks are arranged such that when the wheels can be fixed on the square
            parts of the blocks later on.</p>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col justify-between items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="4">
                <li>Continue to add blocks to complete the rectangle shape for the fire engine's body.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/b-str/s21.png') }}" class="img-xl" />
        <p class="note">Note: The blocks are arranged such that when the wheels can be fixed on the square
            parts of the blocks.</p>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col justify-between items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>Connect 3 wheels on one side according to the positions as shown.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/b-str/s22.png') }}" class="img-md" />
        <p class="note">Note: Encourage and assist the children to connect the pieces as it may be
            hard for them to fix the pieces.</p>
    </div>

    {{-- Slide 31 --}}
    <div class="slide hidden flex flex-col justify-between items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="6">
                <li>Connect 3 wheels on the other side. Match the positions of the wheels to the other side.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/b-str/s23.png') }}" class="img-xl" />
        <p class="note">Note: Encourage and assist the children to match the positions of the wheels.</p>
    </div>

    {{-- Slide 32 --}}
    <div class="slide hidden flex flex-col justify-between items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="7">
                <li>Connect a wheel connector to a rectangle block. Connect it on top of the fire engine's body.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/b-str/s24.png') }}" class="img-lg" />
        <p class="note">Note: Explain that the wheel connector is used because it can turn.
            The ladder on the fire engines can turn.</p>
    </div>

    {{-- Slide 33 --}}
    <div class="slide hidden flex flex-col justify-between items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="8">
                <li>Take these parts and connect them together using the two directions connectors to form the ladder.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/b-str/s25.png') }}" class="img-xl" />
        <p class="note">Note: Teacher to point out the order of the pieces and assist children as it may
            be hard to connect parts.</p>
    </div>

    {{-- Slide 34 --}}
    <div class="slide hidden flex flex-col justify-between items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="9">
                <li>Connect the ladder to the rectangle block on the top.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/b-str/s26.png') }}" class="img-md" />
        <p class="note">Note: Encourage and assist the children to connect the pieces as it may
            be hard for them to fix the pieces.</p>
    </div>

    {{-- Slide 35 --}}
    <div class="slide hidden flex flex-col justify-between items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="10">
                <li>The fire engine is done! You can open up the ladder, turn it and fold it back when you are done!</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/b-str/s27.png') }}" class="img-xl" />
        <p class="note">Note: The fire engine's ladder is called a turntable ladder.</p>
    </div>

    {{-- Slide 36 --}}
    <div class="slide hidden flex flex-col justify-between h-[50vh] items-center">
        <h2 class="title stroke !text-white">Group Activity 2</h2>
        <h2 class="title stroke !text-start">Mission: <br>
            Make another big vehicle.</h2>
        <p class="note">Note: Children can choose any big vehicles they like.
            Assist children in identifying the shapes on the vehicles and picking out the parts for the shapes.</p>
    </div>

    {{-- Slide 37 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Draw the big vehicle that you and your friends would like to create in your learning journal.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/N2/structure/b-str/s28.png') }}" class="img-md" />
    </div>

    {{-- Slide 38 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <div class="text-start px-[4vw]">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="2">
                <li>Identify the shapes on the vehicle.</li>
                <li>Find the pieces/blocks needed to form the shapes.</li>
                <li>Combine the parts together.</li>
                <li>Take a photo of your creation.</li>
                <li>Paste it in your learning journal.</li>
            </ol>
        </div>
    </div>

    {{-- Slide 39 --}}
    <div class="slide hidden flex flex-col justify-between items-center">
        <div class="text-start">
            <h2 class="title stroke text-start">Guided Questions During Group Activity:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>What vehicle did you choose?</li>
                <li>What shapes do you see on the vehicle? Can you point out the shapes?</li>
                <li>Which parts can you use to create the shapes?</li>
            </ol>
        </div>
        <p class="note">Note: Teacher can encourage children to build a bigger structure of their vehicle
            by using more pieces of the contraction set.</p>
    </div>

    {{-- Slide 40 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s12.png') }}" class="img-lg" />
        <h2 class="title stroke">We learned that big <span class="!text-white">vehicles</span> have big wheels
            and they can carry <span class="!text-white">heavy</span> loads.</h2>
    </div>

    {{-- Slide 41 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <img src="{{ asset('assets/images/N2/structure/b-str/s12.png') }}" class="img-lg" />
        <h2 class="title stroke">Big <span class="!text-white">vehicle</span> are structures too.
            They have their own designs and shape structures.</h2>
    </div>

    {{-- Slide 42 --}}
    <div class="slide hidden flex flex-col justify-start items-center">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <img src="{{ asset('assets/images/N2/structure/b-str/s29.png') }}" class="img-lg" />
    </div>

    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute flex flex-row">
        <a id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>

        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>
    </div>

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
                    window.location.href = "{{ route('BigstructureSelection') }}";
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

            //   Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
