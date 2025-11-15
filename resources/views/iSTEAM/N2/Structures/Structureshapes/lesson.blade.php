@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{-- title --}}
    <h2 class="top-title stroke">Shapes in Strcutures</h2>

    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center">
        <div class="flex flex-col gap-1 justify-center items-center">
            <img src="{{ asset('/assets/images/N2/structure/str2/s1.png') }}" class="img-md" />
            <img src="{{ asset('/assets/images/N2/structure/str2/s2.png') }}" class="img-md" />
        </div>
        <h2 class="title stroke">Children, do you remember what these are?</h2>
        <p class="note">Note: Guide children to share their answers.</p>
    </div>

    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex flex-col gap-1 justify-center items-center">
            <img src="{{ asset('/assets/images/N2/structure/str2/s1.png') }}" class="img-md" />
            <img src="{{ asset('/assets/images/N2/structure/str2/s2.png') }}" class="img-md" />
        </div>
        <h2 class="title stroke">These are different <span class="!text-white">structures</span> with different <span
                class="text-white">shapes</span>.</h2>
        <p class="note">Note: Guide children to point out the shapes they see.</p>
    </div>

    {{-- Slide 3 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex flex-col gap-1 justify-center items-center">
            <img src="{{ asset('/assets/images/N2/structure/str2/s1.png') }}" class="img-md" />
            <img src="{{ asset('/assets/images/N2/structure/str2/s2.png') }}" class="img-md" />
        </div>
        <h2 class="title stroke">The <span class="!text-white">structures</span> have a base that helps them
            stand firmly on the ground.</h2>
    </div>

    {{-- Slide 4 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex justify-center items-center">
            <img src="{{ asset('/assets/images/N2/structure/str2/s3.png') }}" class="img-sm" />
            <img src="{{ asset('/assets/images/N2/structure/str2/s4.png') }}" class="img-sm" />
        </div>
        <h2 class="title stroke">Children, do you remember the two <span class="!text-white">structures</span> you
            had made in the last lesson?</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <div class="flex gap-3 justify-center items-center">
            <img src="{{ asset('/assets/images/N2/structure/str2/s5.png') }}" class="large-img4" />
            <img src="{{ asset('/assets/images/N2/structure/str2/s6.png') }}" class="large-img3" />
        </div>
        <h2 class="title stroke">We learned that the <span class="!text-white">structure</span> with a <span
                class="text-white">thin base</span>
            cannot stand on its own.</h2>
    </div>

    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str2/s7.png') }}" class="img-xl" />
        <h2 class="title stroke">But the <span class="!text-white">structure</span> with a <span class="!text-white">wider
                base</span> can support its
            structure and is able to stand on its own.</h2>
    </div>

    {{-- Slide 7 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str2/s8.png') }}" class="img-lg" />
        <h2 class="title stroke">Similarly, there are also parts in this construction set
            that can stand on their own.</h2>
    </div>

    {{-- Slide 8 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str2/s9.png') }}" class="img-md" />
        <h2 class="title stroke">These are blocks. These blocks can stand on their own.</h2>
    </div>

    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str2/s10.png') }}" class="img-md" />
        <h2 class="title stroke">In fact, these blocks are <span class="!text-white">structures</span> made
            from the smaller pieces.</h2>
    </div>

    {{-- Slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str2/s11.png') }}" class="img-xl" />
        <h2 class="title stroke">The <span class="!text-white">square</span> pieces forms a <span
                class="text-white">square</span> block.
            This shape is known as a cube.</h2>
    </div>

    {{-- Slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str2/s12.png') }}" class="img-lg" />
        <h2 class="title stroke">Similarly, these pieces form a <span class="!text-white"> triangular shaped</span>
            block, called prism.</h2>
    </div>

    {{-- Slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str2/s13.png') }}" class="img-xl" />
        <h2 class="title stroke">These pieces forms a <span class="!text-white"> rectangular</span> block.
            It is call a cuboid.</h2>
    </div>

    {{-- Slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50vh]">
        <h2 class="title stroke !text-white">Individual Activity 1</h2>
        <h2 class="title stroke">Create a block structure using the <br>
            parts from the construction set.</h2>
        <p class="note">Note: Give each child a set of materials to carry out the activity.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-between !h-[30vw]">
        <div class="text-start">
            <h2 class="title stroke">Let's do:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>Choose one of the following blocks that you would like to make.</li>
            </ol>
        </div>
        <img src="{{ asset('/assets/images//N2/structure/str2/s14.png') }}" class="img-xl" />
        <p class="note">Note: Give the children the set of materials according to their choices. Encourage the children
            to try on their own first before showing them how the pieces can be fixed together.
            Teacher can click on the labels to view the steps.</p>
    </div>

    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str2/s15.png') }}" class="img-lg" />
        <h2 class="title stroke">Besides using the pieces to create the block
            structures, what other shapes can you create?</h2>
        <p class="note">Note: Encourage children to share their answers.</p>
    </div>

    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str2/s16.png') }}" class="img-lg" />
        <h2 class="title stroke">In the last lesson, the square structure created is
            similar to a picture frame.</h2>
        <p class="note">Note: Encourage children to identify the similarities.</p>
    </div>

    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str2/s17.png') }}" class="img-lg" />
        <h2 class="title stroke">The clothes hanger is in the shape of a triangle. Three
            rectangle pieces can be put together to create a
            triangular structure that looks like it.</h2>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str2/s18.png') }}" class="img-lg" />
        <h2 class="title stroke">Using more rectangle pieces, a rectangular structure
            can be created to look like a wooden crate.</h2>
        <p class="note">Note: Encourage children to identify the similarities.</p>
    </div>

    {{-- Slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str2/s19.png') }}" class="img-xl" />
        <h2 class="title stroke">Different shaped <span class="!text-white">structures</span> can be made with the
            different pieces in the construction set.</h2>
    </div>

    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str2/s20.png') }}" class="img-lg" />
        <h2 class="title stroke">Special shapes and designs can be created using
            the construction set too.</h2>
    </div>

    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str2/s21.png') }}" class="img-xl" />
        <h2 class="title stroke">Many different shapes can be created using
            the construction set.</h2>
        <p class="note">Note: Encourage children to identify the shapes.</p>
    </div>

    {{-- Slide 22 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50vh]">
        <h2 class="title stroke !text-white">Class Activity</h2>
        <h2 class="title stroke">Design a structure using the different shapes.
            Build it with the construction set.</h2>
        <p class="note">Note: Group 3-4 children in a group and encourage them to create a structure that they like.</p>
    </div>

    {{-- Slide 23 --}}
    <div class="slide hidden flex flex-col items-center justify-start gap-[7rem]">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>In your group, discuss how your structure will look.</li>
                <li>Draw your design in your learning journal.</li>
            </ol>
        </div>
        <img src="{{ asset('/assets/images/N2/structure/str2/s22.png') }}" class="img-md" />
    </div>

    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[50vh]">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="3">
                <li>Work together as a group to create the shape of the structure you have drawn.</li>
                <li>Present your creation as a group. Tell your friends how you created each part.</li>
            </ol>
        </div>
        <p class="note">Note: Teachers to ask guiding questions to help children with their presentations.</p>
    </div>

    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <div class="text-start">
            <h2 class="title stroke text-start">Steps:</h2>
            <ol class="lesson-ul list-decimal title stroke" start="5">
                <li>Take a photo and taste it on the learning journal.</li>
                <li>Showcase your work.</li>
            </ol>
        </div>
        <div class="h-[25vw] w-[55vw] drawable border border-2 border-white justify-center items-start">
            <p class="note mt-2">Paste a photo of the structure you have created.</p>
        </div>
        <p class="note">Note: Teachers to help to take photos of the group and the structure.</p>
    </div>

    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-between h-[55vh]">
        <div class="text-start">
            <h2 class="title stroke text-start">Possible questions during hands-on:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>What shapes can be found in your design?</li>
                <li>Which pieces/blocks can you use to make the shape you want?</li>
            </ol>
        </div>
        <div class="text-start">
            <h2 class="title stroke text-start">Possible questions during presentation:</h2>
            <ol class="lesson-ul list-decimal title stroke">
                <li>What is the shape of your structure?</li>
                <li>Which part did you make? Was it hard to make?</li>
                <li>Share how you made the structure.</li>
            </ol>
        </div>
        <p class="note">Note: Have children share their ideas with the class. Do point out how each team had form the
            shapes.</p>
    </div>

    {{-- Slide 27 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str2/s23.png') }}" class="img-xl" />
        <h2 class="title stroke">Different shaped structures can be created by putting
            smaller parts together.</h2>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('/assets/images/N2/structure/str2/s24.png') }}" class="img-xl" />
        <h2 class="title stroke">There are shapes in all structures around us.</h2>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden flex flex-col items-center justify-start gap-[1rem]">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable border border-2 border-white justify-center items-start">
            <p class="note mt-2">Use shapes to design the structure that you would like to create.</p>
        </div>
    </div>

    {{-- Slide 30 --}}
    <div class="slide hidden flex flex-col items-center justify-start gap-[1rem]">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[55vw] h-[25vw] drawable border border-2 border-white justify-center items-start">
            <p class="note mt-2">Paste a photo of the structure you have created.</p>
        </div>
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
                    window.location.href = "{{ route('StructureshapesSelection') }}";
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
