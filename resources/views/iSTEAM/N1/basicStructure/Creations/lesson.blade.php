@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')

    {{-- slide 0 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title"><span class="text-white">Lines</span> are put together to make <span
                class="text-white">shapes</span> like<br /><span class="text-white">squares, triangles</span> and<span
                class="text-white"> rectangles</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/shape4.png') }}" />
    </div>


    {{-- slide 1 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/pptimages/r18.png') }}" />
        <h2 class="stroke title">Look at this <span class="text-white">house</span>! What <span
                class="text-white">shapes</span> does it look like?</h2>
        <p class="note">Note: Encourage the children to share answers.</p>
    </div>

    {{-- slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">The <span class="text-white">top</span> looks like a <span
                class="text-white">triangle</span> and the<span class="text-white"> bottom<br /></span>looks like a <span
                class="text-white">square</span>.</h2>
        <img src="{{ asset('assets/images/pptimages/B-house3.png') }}" />
        <p class="note">Note: Point out the shape to the children.</p>
    </div>


    {{-- slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">Shapes can be put together to form an image.</h2>
        <img src="{{ asset('assets/images/pptimages/B-house3.png') }}" />
        <p class="note">Note: Point out the shape to the children.</p>
    </div>

    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">This is how an image of a house can be made.</h2>
        <img src="{{ asset('assets/images/pptimages/s2.png') }}" />
        <p class="note">Note: Point out the shape to the children.</p>
    </div>



    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">Shapes are put together to make images like a van or a flower.</h2>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/pptimages/s6.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
            <img src="{{ asset('assets/images/pptimages/s4.png') }}"
                class="max-w-[500px] sm:max-w-[600px] lg:max-w-[536px]" />
        </div>
        <p class="note">Note: Point out the shape to the children.</p>
    </div>


    {{-- slide 6 --}}

    <div class="flex flex-col justify-center gap-20  slide hidden">

        <h2 class="title !text-white stroke">individual Activity 1</h2>
        <h2 class="title stroke text-start !text-[48px]">Let’s use the shapes and create an image of a toy.</h2>
        <p class="note">Note: Teacher to pack 6 pieces of square tiles for each child and work in small groups.</p>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Go around the class and pick one of your favorite toy.</li>
                <li>Look at the toy and see what shape does the toy look like.</li>

            </ul>
        </div>
        <p class="note  text-center">Note: Teacher may guide the children to look at the toy from the front view.</p>
    </div>



    {{-- slide 8 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class=" list-inside ">
                <li>3. Look at the toy in parts. For example if it is a teddy bear. look at its head, body then the legs.
                </li>
                <li>4. For each part, guide children to verbalize the shape or find a similar shaped paper to create the
                    image.</li>
            </ul>
        </div>
        <p class="note  text-center">Note: Teacher to guide and assist children if they are unable to make out the shapes.
            Some toys such as teddy bear may not have a regular shape, guide and encourage
            children to work on the shapes part by part. e.g. the head looks like a circle and the
            ears are like semi circle etc.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class=" list-inside ">
                <li>5.Guide children to form the image using the paper shapes before pasting the paper on their
                    learning journals.</li>
            </ul>
        </div>
        <div class="w-[736px] h-[336px] bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>My Creations</p>
            <div class="flex w-full">
                <div class="border-2 border-black h-[313px] w-[39%]">
                    <p>Place the photo of the toy on this side</p>
                </div>
                <div class="border-2 border-black h-[313px] w-[62%]">
                    <p>Look at the toy and create the shape template here. </p>
                </div>
            </div>
        </div>
        <p class="note  text-center">Note: Teacher to guide the children and assist them.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li> Look at this part of the toy, what shape does it look like?</li>
                <li>Is it a rectangle or a square?</li>
                <li>Would you like to try using a bigger/small shape?</li>
                <li> How can we make a bigger square/triangle for this part?</li>

            </ul>
        </div>
        <p class="note  text-center">Note: Teacher can show children the paper shapes and encourage them to
            choose for each part.</p>
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">The image of a house is <span class="text-white">flat </span>but it can be made<br />into
            these dimensional <span class="text-white">structure.</span></h2>
        <img src="{{ asset('assets/images/pptimages/s2.png') }}" />
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">The three dimensional structure of a house can be created by putting the shape structure of
            each side together.</h2>
        <div class="flex flex-wrap items-center justify-center gap-10">
            <img src="{{ asset('assets/images/pptimages/r47.png') }}" class="w-[236px]" />
            <img src="{{ asset('assets/images/pptimages/r50.png') }}" class="w-[236px]" />
            <img src="{{ asset('assets/images/pptimages/r51.png') }}" class="w-[236px]" />
            <img src="{{ asset('assets/images/pptimages/r25.png') }}" class="w-[236px]" />
            <img src="{{ asset('assets/images/pptimages/r27.png') }}" class="w-[236px]" />
            <img src="{{ asset('assets/images/pptimages/r29.png') }}" class="w-[236px]" />
        </div>
        <p class="note  text-center">Note: Teacher show children using the house structure created the previous lesson</p>
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="stroke title">Similarly, a three dimensional structure of the toy can be created too!</h2>
        <img src="{{ asset('assets/images/pptimages/r29.png') }}" />
    </div>


    {{-- slide 20 --}}
    <div class="flex flex-col justify-center gap-20  slide hidden">

        <h2 class="title !text-white stroke">individual Activity 1</h2>
        <h2 class="title stroke text-start !text-[48px]">Create structures of toys!.</h2>
    </div>

    {{-- slide 21 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-decimal list-inside ">
                <li>Look at the shape template which was done for Activity 1.</li>
                <li>Pick out similar shape magnetic tiles and create the image of your toy,</li>
            </ul>
        </div>
        <p class="note  text-center">Note: Encourage children the shapes of the magnetic tiles needed in the template image.
            If no such shapes are availabe, teacher can guide child to use a similar one.</p>
    </div>

    {{-- slide 22 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class=" list-inside ">
                <li>3. The structure is flat now. Look at the side of the toy, what shape is it in?</li>
                <li>4. Take the magnetic shapes and add it onto your structure.</li>
                <li>5. Now look at the bottom of the toy, what shape is it? Continue to build on the structure.</li>

            </ul>
        </div>
        <p class="note  text-center">Note: Encourage children to identify the shapes on the side. Teacher to guide and
            assist the children to work on it part by part, e.g. work on the head of the bear first.</p>
    </div>

    {{-- slide 23 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>let's do:</h2>
            <ul class="list-inside ">
                <li>6. Add magnetic tiles to the other side and the top to complete your toy structure.</li>
                <li>7. Share your creation when you have completed your toy structure.</li>
            </ul>
        </div>
        <p class="note  text-center">Note: If child is unable to make out the shapes, encourage child to explore adding
            shapes to the side
            and how he/she can make the structure into a three dimensional one. Teacher can guide and assist child on this
            as the tiles may fall apart while working on it. Do encourage child to persevere on working on the structure.
        </p>
    </div>


    {{-- slide 24 --}}
    <div class="flex flex-col  slide hidden">
        <div class="title stroke text-start">
            <h2>Suggested questions for show and tell:</h2>
            <ul class="list-inside list-decimal">
                <li>What did you make.</li>
                <li>What shapes did you use?</li>
                <li>Which part did you start building first?</li>
            </ul>
        </div>
        <p class="note  text-center">Note: Guided questions to help the children with their show and tell.</p>
    </div>



    {{-- slide 25 --}}
    <div class="flex flex-col justify-center  slide hidden">

        <h2 class="stroke title">Many images can be created using <span class="text-white">shapes</span>.</h2>
        <div class="flex gap-10 items-center">
            <img src="{{ asset('assets/images/pptimages/s6.png') }}" class="w-[336px]" />
            <img src="{{ asset('assets/images/pptimages/s4.png') }}" class="w-[336px]" />
        </div>
        <p class="note  text-center">Note: Guide the children to identify the shapes.</p>
    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <h2 class="title">Different shapes can be combined to form three dimensional structures.</h2>


        <img src="{{ asset('assets/images/pptimages/r440.png') }}" />
    </div>


    {{-- slide 27 --}}
    <div class="flex flex-col  slide hidden">
        <div class="w-[736px] h-[336px] bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <p>Learning Journal</p>
            <div class="flex w-full">
                <div class="border-2 border-black h-[313px] w-[39%]">
                    <p>Place the photo of the toy on this side</p>
                </div>
                <div class="border-2 border-black h-[313px] w-[62%]">
                    <p>Look at the toy and create the shape template here. </p>
                </div>
            </div>
        </div>
        <p class="note  text-center">Look at the toy and create the shape template here. </p>
    </div>




    {{-- Complete/Done Butttom --}}
    <div class="absolute bottom-[80px]">
        <button
            class="cursor-pointer doneButton w-66 h-[80px] relative bg-[#F8A23A] rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
                    outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">DONE</span>
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute top-[24px] right-[60px] flex flex-row gap-6 z-40">

        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <button
            class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-icon.png') }}" />
        </button>

        <!-- Close Button -->
        <button class="relative w-24 h-24 button-fade-in cursor-pointer" id="closeButton">
            <div
                class="absolute inset-0 bg-red-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-red-900">
            </div>
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <div id="closeButtonText"
                class="absolute top-[16px] left-[30px] w-11 h-16 text-white text-6xl font-normal font-['Jua']">X
            </div>
        </button>

    </div>

    {{-- next Button --}}
    <div class="absolute bottom-[80px]">

        <button
            class="cursor-pointer nextButton w-66 h-[80px] relative bg-[#F8A23A]  rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
        outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" /> </div>
            <span class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">NEXT
            </span>
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
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            //  NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            //  Return button
            returnButton.addEventListener("click", () => {
                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('CreationsSelection') }}";
                });
            }

            //  Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
