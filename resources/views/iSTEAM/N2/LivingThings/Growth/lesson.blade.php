@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    <h2 class="top-title stroke">How do Animal Grow</h2>

    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-between self-end h-[20vw] slide hidden">
        <h2 class="stroke title">Children, do you still remember what a <span class="!text-white">living things<br /></span>is
            and what a <span class="!text-white">non-living things</span> is?</h2>
        <p class="note">Note: Encourage children to share what they know about living things and non-living things.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">

        <img src="{{ asset('assets/images/N2/LivingThings/an2.png') }}" class="img-md" />
        <h2 class="stroke title">Between you and a doll, which is a <span class="!text-white">living thing</span>?<br />Which
            is a <span class="!text-white">non-living thing</span>?</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an2.png') }}" class="img-md" />
        <h2 class="stroke title">Which are <span class="!text-white">living things</span>? Which are <span
                class="text-white">non-living things</span>?</h2>
        <p class="note">Note: Have children recall and point out the answers.</p>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">A person, a dog and a fish move on its own, drink, eat,breathe and grow. So they are
            <span class="!text-white">living things</span>.
        </h2>
        <img src="{{ asset('assets/images/N2/LivingThings/g9.png') }}" class="img-lg" />
    </div>

    {{-- slide 5 --}}
    <div class="flex items-center  slide hidden">
        <div class=" text-start max-w-[33vw]">
            <h2 class="title stroke">All <span class="!text-white">animals</span>....</h2>
            <ul class="!text-white title stroke">
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!w-[3vw]" />
                    <p> Move on their own</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!w-[3vw]" />
                    <p> Drink</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!w-[3vw]" />
                    <p>Eat</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!w-[3vw]" />
                    <p> Breath (need air)</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" class="!w-[3vw]" />
                    <p> Grow (get bigger)</p>
                </li>
            </ul>
            <h2 class="title stroke">So <span class="!text-white">animals</span> are <span class="!text-white">living things</span></h2>

        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/g11.png') }}" class="img-sm" />
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How do animals grow? Let’s find out together!</h2>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/gl1.png') }}" class="img-xl" />
        <h2 class="title stroke">This is Emma. <br>
            See how she has grown and changed over time.</h2>
        <p class="note">Note: Encourage children to describe the difference the see in the pictures.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl2.png') }}" class="img-xl" />

        <h2 class="title stroke">This is the photo of Emma when she was a baby.</h2>
        <p class="note">Note: Introduce the stages of growth to children. Have them name each stage.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl3.png') }}" class="img-xl" />

        <h2 class="stroke title">This is the photo of Emma when she was <span class="!text-white">young</span>.<br />A young
            person is also called a <span class="!text-white">child</span>.</h2>
        <p class="note">Note: Introduce the stages of growth to children. Have them name each stage.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl4.png') }}" class="img-xl" />

        <h2 class="title stroke">This is the photo of Emma when she became an adult.</h2>
        <p class="note">Note: Introduce the stages of growth to children. Have them name each stage.</p>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl5.png') }}" class="img-xl" />

        <h2 class="stroke title">This is the photo of Emma now.<br />She has grown much <span
                class="text-white">older</span>. She is now an elderly <span class="!text-white">person</span>.</h2>
        <p class="note">Note: Introduce the stages of growth to children. Have them name each stage.</p>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl6.png') }}" class="img-xl" />
        <h2 class="stroke title">These are the stages of growth of a girl.</h2>
        <p class="note">Note: Explain to children that every girl goes through these stages of growth.</p>
    </div>



    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/bl1.png') }}" class="img-xl" />
        <h2 class="title stroke">This is Oliver. <br>
            See how he has grown and changed over time.</h2>
        <p class="note">Note: Encourage children to describe the difference the see in the pictures.</p>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/bl2.png') }}" class="img-xl" />
        <h2 class="title stroke">This is the photo of Oliver when he was a baby.</h2>
        <p class="note">Note: Explain to children that every boy goes through these stages of growth.</p>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/bl3.png') }}" class="img-xl" />
        <h2 class="stroke title">This is the photo of Oliver when he was <span class="!text-white">young</span>.<br />A
            young person is also called a <span class="!text-white">child</span>.</h2>
        <p class="note">Note: Explain to children that every boy goes through these stages of growth.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/bl4.png') }}" class="img-xl" />
        <h2 class="title stroke">This is the photo of Oliver when he became an adult.</h2>
        <p class="note">Note: Explain to children that every boy goes through these stages of growth.</p>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/bl5.png') }}" class="img-xl" />
        <h2 class="stroke title">This is the photo of Oliver now.
            He has grown much older. He is now an elderly person.</h2>
        <p class="note">Note: Explain to children that every boy goes through these stages of growth.</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/bl6.png') }}" class="img-xl" />
        <h2 class="stroke title">These are the stages of growth of a boy.</h2>
        <p class="note">Note: Explain to children that every boy goes through these stages of growth.</p>
    </div>



    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Class Activity</h2>
        <p class="note">Paste your photos in the correct order to show how you have grown over time.</p>
        <img src="{{ asset('assets/images/N2/LivingThings/bl7.png') }}" class="img-lg" />
        <h2 class="title stroke text-start">Let’s find out: <br>
            How have you grown and changed over time?</h2>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Class Activity</h2>
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>1. Arrange your photos to show how you have grown.</li>
            </ul>
        </div>
        <p class="note">Paste your photos in the correct order to show how you have grown over time.</p>
        <img src="{{ asset('assets/images/N2/LivingThings/bl8.png') }}" class="img-lg" />
        <p class="note">Note: Guide children to arrange and paste their photos in the learning journal.</p>
    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Class Activity</h2>
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>2. Show and tell how you have grown overtime.</li>
            </ul>
        </div>
        <p class="note">Paste your photos in the correct order to show how you have grown over time.</p>
        <img src="{{ asset('assets/images/N2/LivingThings/bl8.png') }}" class="img-lg" />
        <p class="note">Note: Invite children take turns to share their changes over time.</p>
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl7.png') }}" class="img-lg" />
        <p class="note">Note: Invite children take turns to share their changes over time.</p>

    </div>



    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center gap-[1vw]">
            <img src="{{ asset('assets/images/N2/LivingThings/an70.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/N2/LivingThings/an71.png') }}" class="img-sm" />
        </div>
        <h2 class="stroke title">As we <span class="!text-white">grow</span>, we <span class="!text-white">eat</span> and
            <span class="!text-white">drink</span>. Food has all <br />the <span class="!text-white">nutrients</span> our
            body needs to live and <span class="!text-white">grow</span>.
        </h2>
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/an25.png') }}" class="img-lg" />

        <h2 class="stroke title">This is a baby dog.</h2>
        <p class="note">Note: Encourage children to share what they see in the picture.</p>
    </div>


    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/an26.png') }}" class="img-lg" />

        <h2 class="stroke title">This is a young dog. You can call it a puppy..</h2>

        <p class="note">Note: Encourage children to share what they see in the picture.</p>
    </div>

    {{-- slide 23 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/an27.png') }}" class="img-lg" />

        <h2 class="stroke title">When a puppy grows up, it becomes an adult dog.</h2>
        <p class="note">Note: Encourage children to share what they see in the picture.</p>
    </div>

    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center gap-[1vw]">
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an25.png') }}" class="!w-[18vw]" />
                <p class="text-white text-[1.4vw]">Baby</p>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an26.png') }}" class="!w-[18vw]" />
                <p class="text-white text-[1.4vw]">Young/puppy</p>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an27.png') }}" class="!w-[18vw]" />
                <p class="text-white text-[1.4vw]">Adult</p>
            </div>

        </div>
        <h2 class="stroke title">Similar to you, these are the <span class="!text-white">stages of growth</span> of a
            dog.As a dog<span class="!text-white"> grows</span>, it becomes bigger in size and its look changes.</h2>
        <p class="note">Note: Encourage children to share what they see in the picture.</p>
    </div>


    {{-- slide 25 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center gap-[1vw]">
            <img src="{{ asset('assets/images/N2/LivingThings/an32.png') }}" class="img-sm" />
            <img src="{{ asset('assets/images/N2/LivingThings/an28.png') }}" class="img-sm" />
        </div>
        <h2 class="stroke title">Similar to you, dogs <span class="!text-white">eat</span> and <span
                class="text-white">drink</span> as they <span class="!text-white">grow</span>.<br />Food has the <span
                class="text-white">nutrients</span> that dogs need to live and <span class="!text-white">grow</span>.</h2>
    </div>


    {{-- slide 26 --}}
    <div class="flex flex-col items-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/g10.png') }}" class="img-xl" />
        <h2 class="stroke title">We know that people and dogs are <span class="!text-white">animals</span>.<br />We also
            know that <span class="!text-white">animals</span> are <span class="!text-white">living things</span>.</h2>
    </div>


    {{-- slide 27 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/gl8.png') }}" class="img-lg" />
        <h2 class="title stroke">Note: Invite children take turns to share their changes over time.</h2>

    </div>




    {{-- slde 28 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Learning Journal</h2>
        <p class="note">Paste your photos in the correct order to show how you have grown over time.</p>
        <img src="{{ asset('assets/images/N2/LivingThings/bl7.png') }}" class="img-lg" />
    </div>




    {{-- Complete button --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute  flex flex-row gap-6 ">

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
        <button class="nextButton ">
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

            // ✅ Return button - redirect if on first slide
            returnButton.addEventListener("click", () => {
                if (currentSlide === 0) {
                    // Redirect to route when on first slide
                    window.location.href = "{{ route('GrowthSelection') }}";
                } else if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('LivingThings') }}";
                });
            }

            //   Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
