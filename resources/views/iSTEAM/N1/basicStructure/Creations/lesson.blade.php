@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">My Creations</h2>

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title"><span class="!text-white">Lines</span> are put together to make <span
                class="text-white">shapes</span> like<br /><span class="!text-white">squares, triangles</span> and<span
                class="text-white"> rectangles</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/shape4.png') }}" class="img-xl" />
    </div>


    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/pptimages/r18.png') }}" class="img-md" />
        <h2 class="stroke title">Look at this <span class="!text-white">house</span>! What <span
                class="text-white">shapes</span> does it look like?</h2>
        <p class="note">Note: Encourage the children to share answers.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">The <span class="!text-white">top</span> looks like a <span
                class="text-white">triangle</span> and the<span class="!text-white"> bottom<br /></span>looks like a <span
                class="text-white">square</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/gl14.png') }}" class="img-lg" />
        <p class="note">Note: Point out the shape to the children.</p>
    </div>


    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">Shapes can be put together to form an image.</h2>
        <img src="{{ asset('assets/images/pptimages/gl14.png') }}" class="img-lg" />
        <p class="note">Note: Point out the shape to the children.</p>
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">This is how an image of a house can be made.</h2>
        <img src="{{ asset('assets/images/pptimages/s2.png') }}" class="img-md" />
        <p class="note">Note: Point out the shape to the children.</p>
    </div>



    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title"><span class="!text-white">Shapes</span> are put together to make images like a van or a
            flower.</h2>
        <div class="flex items-center gap-[2vw]">
            <img src="{{ asset('assets/images/pptimages/s6.png') }}" class="img-normal-md" />
            <img src="{{ asset('assets/images/pptimages/s4.png') }}" class="img-normal-md" />
        </div>
        <p class="note">Note: Point out the shape to the children.</p>
    </div>


    {{-- slide 6 --}}

    <div class="flex flex-col justify-between !h-[55vh] slide hidden">

        <h2 class="title !text-white stroke">individual Activity 1</h2>
        <h2 class="title stroke text-start ">Let’s use the shapes and create an image of a toy.</h2>
        <p class="note">Note: Teacher to pack 6 pieces of square tiles for each child and work in small groups.</p>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col h-[55vh] justify-between slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal pl-8 space-y-3">
                <li>Go around the class and pick one of your favorite toy.</li>
                <li>Look at the toy and see what shape does the toy look like.</li>

            </ol>
        </div>
        <p class="note  text-center">Note: Teacher may guide the children to look at the toy from the front view.</p>
    </div>



    {{-- slide 8 --}}
    <div class="flex flex-col h-[55vh] justify-between slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal pl-8 space-y-3" start="3">
                <li> Look at the toy in parts. For example if it is a teddy bear. look at its head, body then the legs.
                </li>
                <li>For each part, guide children to verbalize the shape or find a similar shaped paper to create the
                    image.</li>
            </ol>
        </div>
        <p class="note  text-center">Note: Teacher to guide and assist children if they are unable to make out the shapes.
            Some toys such as teddy bear may not have a regolar shape, guide and encourage
            children to work on the shapes part by part. e.g. the head looks like a circle and the
            ears are like semi circle etc.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col justify-between items-center slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal pl-8" start="5">
                <li>Guide children to form the image using the paper shapes before pasting the paper on their
                    learning journals.</li>
            </ol>
        </div>
        <img src="{{ asset('assets/images/pptimages/gl17.png') }}" class="img-md" />

        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col h-[55vh] justify-between  slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">Suggested Questions:</h2>
            <ol class="list-decimal pl-8 space-y-3   ">
                <li> Look at this part of the toy, what shape does it look like?</li>
                <li>Is it a rectangle or a square?</li>
                <li>Woold you like to try using a bigger/small shape?</li>
                <li> How can we make a bigger square/triangle for this part?</li>

            </ol>
        </div>
        <p class="note  text-center">Note: Teacher can show children the paper shapes and encourage them to
            choose for each part.</p>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">The image of a house is <span class="!text-white">flat </span>but it can be made into
            these dimensional <span class="!text-white">structure.</span></h2>
        <img src="{{ asset('assets/images/pptimages/s2.png') }}" class="img-md" />
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">The three dimensional <span class="!text-white">structure</span> of a house can be created
            by putting the <span class="!text-white">shape structure</span> of
            each side together.</h2>

        <img src="{{ asset('assets/images/pptimages/gl15.png') }}" class="img-md" />
        <p class="note  text-center">Note: Teacher show children using the house structure created the previous lesson</p>
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">Similarly, a three dimensional structure of the toy can be created too!</h2>
        <img src="{{ asset('assets/images/pptimages/r29.png') }}"  />
    </div>


    {{-- slide 20 --}}
    <div class="flex flex-col slide hidden justify-between h-[30vh]">

        <h2 class="title !text-white stroke">individual Activity 2</h2>
        <h2 class="title stroke text-start ">Create structures of toys!.</h2>
    </div>

    {{-- slide 21 --}}
    <div class="flex flex-col h-[55vh] justify-between slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal pl-8 space-y-3   ">
                <li>Look at the shape template which was done for Activity 1.</li>
                <li>Pick out similar shape magnetic tiles and create the image of your toy,</li>
            </ol>
        </div>
        <p class="note  text-center">Note: Encourage children the shapes of the magnetic tiles needed in the template
            image.
            If no such shapes are availabe, teacher can guide child to use a similar one.</p>
    </div>

    {{-- slide 22 --}}
    <div class="flex flex-col h-[55vh] justify-between  slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="list-decimal pl-8 space-y-3" start="3">
                <li>The structure is flat now. Look at the side of the toy, what shape is it in?</li>
                <li>Take the magnetic shapes and add it onto your structure.</li>
                <li>Now look at the bottom of the toy, what shape is it? Continue to build on the structure.</li>

            </ol>
        </div>
        <p class="note  text-center">Note: Encourage children to identify the shapes on the side. Teacher to guide and
            assist the children to work on it part by part, e.g. work on the head of the bear first.</p>
    </div>

    {{-- slide 23 --}}
    <div class="flex flex-col h-[55vh] justify-between  slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">let's do:</h2>
            <ol class="  list-decimal pl-9 space-y-3" start="6">
                <li>Add magnetic tiles to the other side and the top to complete your toy structure.</li>
                <li>Share your creation when you have completed your toy structure.</li>
            </ol>
        </div>
        <p class="note  text-center">Note: If child is unable to make out the shapes, encourage child to explore adding
            shapes to the side
            and how he/she can make the structure into a three dimensional one. Teacher can guide and assist child on this
            as the tiles may fall apart while working on it. Do encourage child to persevere on working on the structure.
        </p>
    </div>


    {{-- slide 24 --}}
    <div class="flex flex-col  h-[55vh] justify-between slide hidden">
        <div class="title stroke text-start">
            <h2 class="!text-white">Suggested questions for show and tell:</h2>
            <ol class="list-decimal pl-8">
                <li>What did you make.</li>
                <li>What shapes did you use?</li>
                <li>Which part did you start building first?</li>
            </ol>
        </div>
        <p class="note text-center">Note: Guided questions to help the children with their show and tell.</p>
    </div>



    {{-- slide 25 --}}
    <div class="flex flex-col justify-center  slide hidden">
        <h2 class="stroke title">Many images can be created using <span class="!text-white">shapes</span>.</h2>
        <div class="flex gap-10 items-center">
            <img src="{{ asset('assets/images/pptimages/s6.png') }}" class="img-normal-md" />
            <img src="{{ asset('assets/images/pptimages/s4.png') }}" class="img-normal-md" />
        </div>
        <p class="note  text-center">Note: Guide the children to identify the shapes.</p>
    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title stroke">Different <span class="!text-white">shapes</span> can be combined to form three
            dimensional <span class="!text-white">structures</span>.</h2>


        <img src="{{ asset('assets/images/pptimages/r440.png') }}" class="img-md" />
    </div>


    {{-- slide 27 --}}
    <div class="flex flex-col  slide hidden">
        <div class="w-[52vw] h-[28vw] drawable bg-cover bg-center text-[1.26vw]"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Learning Journal</p>
            <div class="flex w-foll">
                <div class="border-2 border-black h-[26.5vw] w-[22vw]">
                    <p>Place the photo of the toy on this side</p>
                </div>
                <div class="border-2 border-black h-[26.5vw] w-[30vw]">
                    <p>Look at the toy and create the shape template here. </p>
                </div>
            </div>
        </div>
        <p class="note  text-center">Look at the toy and create the shape template here. </p>
    </div>



    {{-- ===================== --}}
    {{-- Complete/Done Butttom --}}
    <div class="down-btn-container">
        <button class="cursor-pointer doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row ">

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
        document.addEventListener("DOMContentLoaded", () => {
            // Get all elements
            const slides = document.querySelectorAll(".slide");
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
                    window.location.href = "{{ route('CreationsSelection') }}";
                } else {
                    // Not first slide: go back
                    showSlide(currentIndex - 1);
                }
            });

            // Done button
            doneBtn.addEventListener("click", () => {
                window.location.href = "{{ route('basicStructure') }}";
            });

            // Start at first slide
            showSlide(0);
        });
    </script>
@endpush
