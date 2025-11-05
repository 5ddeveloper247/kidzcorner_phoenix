@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    {{-- title --}}
    <h2 class="top-title stroke">Tomato DNA</h2>

    {{-- sldie 1  --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Children will be able to:</h2>
            <ul class="list-disc ">
                <li>Learn how to extract DNA from a tomato</li>
                <li>Know that the same chemicals can be used to extract DNA from different living things
                </li>
                <li>Know that a strand of DNA is a long string</li>
                <li>Know that all living things have DNA</li>
                <li>Develop understanding through inquiry</li>
            </ul>
        </div>

        <div class="flex flex-col  items-start justify-between">
            <h2 class="t-title ">Keywords:</h2>
            <div>
                <ul class="list-disc ">
                    <li>Living Thing</li>
                    <li>DNA</li>
                    <li>Cell</li>
                    <li>String</li>
                </ul>
                <ul class="list-disc ">
                    <li>Animals</li>
                    <li>Plants</li>
                    <li>Chemical</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>



    {{-- slide 2 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">Preparations:</h2>
            <ul class="list-disc ">
                <li>1 tomato</li>
                <li>1 snack-size zipper storage bag</li>
                <li>1 bottle of distilled water (normally sold in 500ml bottles; will use 100ml)</li>
                <li>Some salt</li>
                <li>2 clear plastic cups or glasses</li>
                <li>1 bottle of clear liquid dish soap</li>
                <li> 1 bottle of rubbing alcohol (for better results, try to find 90% isopropyl
                    alcohol; use 30ml ice-cold
                    alcohol — put the alcohol in the freezer one day before the activity)</li>
                <li>1 teaspoon</li>
                <li>1 strainer (can be replaced with a piece of coffee filter paper)</li>
                <li>1 measuring cup (at least 100ml)</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 3 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from a tomato and things to consider:</h2>
            <ul class="list-decimal">
                <li>Put a tomato into a zipper storage bag and seal it . [Invite a child to do the step.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td3.png') }}" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 4 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from a tomato and things to consider:</h2>
            <ul>
                <li>2.Smash and crush the tomato. [Invite children take turns to do so .]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td4.png') }}" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- slide 5 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from a tomato and things to consider:</h2>
            <ul>
                <li>3. Mix together 100ml distilled water, 10ml clear liquid dish soap and half a
                    teaspoon of salt in a
                    clear cup. [Guide children to measure and prepare the mixture with a measuring cup and a teaspoon; stir
                    gently until salt is dissolved but avoid making bubbles .]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td5.png') }}" class="w-[700px]" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 6 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from a tomato and things to consider:</h2>
            <ul>
                <li>4. Add 10ml of the mixture prepared into the bag with tomato . [Guide children to
                    measure with a
                    measuring cup and add the mixture into the bag .]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td6.png') }}" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 7 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from a tomato and things to consider:</h2>
            <ul>
                <li>5. Reseal the bag and gently smash for another minute . [Advise children try to
                    avoid making too many
                    soap bubbles .]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td4.png') }}" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 8 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from a tomato and things to consider:</h2>
            <ul>
                <li>6. Put a strainer on top of another clear up. [Invite a child to do the step.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td7.png') }}" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 9 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from a tomato and things to consider:</h2>
            <ul>
                <li>7. Pour the tomato liquid into the strainer to separate the liquid from the flesh .
                    [Guide children to
                    gently do so with a teaspoon .]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td8.png') }}" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 10 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from a tomato and things to consider:</h2>
            <ul>
                <li>8. Take 30ml of the filtrated liquid into another clear cup . [Guide children to do
                    the step. As the
                    final result will be displayed at the learning corner, you may consider using a clear plastic container
                    with lid instead.]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td9.png') }}" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>


    {{-- sldie 11 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from a tomato and things to consider:</h2>
            <ul>
                <li>9. Pour 30ml of cold rubbing alcohol from the side into the cup . [Teacher to do
                    the step; do not mix or
                    stir .]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td18.png') }}" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- sldie 12 --}}
    <div class=" slide t-slide flex  text-white flex-col justify-start  text-start">
        <div>
            <h2 class=" t-title">How to extract DNA from a tomato and things to consider:</h2>
            <ul>
                <li>10. Observe what happens in the cup . [Advise children to observe from the top
                    view . Take a photo of
                    the
                    result for comparison .]</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/dna/td11.png') }}" class="w-img" />
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" alt="Teacher" class="absolute teacher-img1" />
    </div>

    {{-- slide 13 --}}
    <div class="slide flex t-slide  flex-col justify-start  text-2xl text-start text-white">
        <div class="flex w-[100%] items-center justify-between">
            <div>
                <h2 class=" t-title">Notes:</h2>
                <ul class="list-disc leading-relaxed">
                    <li class=" flex whitespace-nowrap">
                        If you see
                        <span>
                            <!-- Decorative Vector -->
                            <img src="{{ asset('assets/images/pptimages/video.png') }}" class="w-[2.5vw]" />
                        </span>
                        next to a picture,click on the picture to watch the video.
                    </li>
                    <li>Emphasise and use the keywords during hands-on sessions.</li>
                    <li>Print out the Learning Journal (if any) for every child to complete at the end
                        of the lesson.
                    </li>
                    <li class=" flex whitespace-nowrap">
                        Click on this shortcut icon
                        <span>
                            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" class="w-[2.5vw]" />
                        </span>
                        if you need to go to some parts of the lesson quickly.
                    </li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" alt="Teacher" />
        </div>
    </div>


    {{-- slide 14 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div>
            <h2 class="!text-white title stroke">Tomato DNA</h2>
            <h2 class="t-title">What and how to set up:</h2>
            <ul>
                <li>Put the final result of the activity (the filtered liquid of tomato
                    mixture with alcohol) here as a display for children. Use cling wrap
                    to tightly seal the cup and fix the position of the cup. As long as
                    you don't shake the cup, the alcohol in the cup can keep the DNA
                    last for a period of time. Put up a label (DNA from tomato cells)
                    next to the cup.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>


    {{-- slide 15 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div>
            <ul class="list-disc">
                <h2 class="!text-white title stroke">Fun Facts</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <p>Use your creativity to design graphic fact sheet for every fun fact
                    below. Guide children to understand the facts.</p>
                <li>Your DNA is 60% identical to the DNA of tomatoes!</li>
                <li>Your DNA is 50% identical to the DNA of bananas!</li>
                <li>Your DNA is 40-50% identical to the DNA of cabbages!</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>


    {{-- slide 16 --}}
    <div class="text-white flex flex-col items-center justify-center  text-start t-slide slide hidden">
        <h2 class=" title stroke">Learning Centre Idea</h2>
        <div>
            <div>
                <h2 class="!text-white title stroke">Fun Facts</h2>
                <h2 class="t-title">What and how to set up:</h2>
                <p>Prepare things as listed in the preparations and other fruits or
                    vegetables like banana, kiwi, spinach or kale to carry out another
                    DNA extraction activity to further prove the results of the activity.</p>
            </div>

            <div>
                <h2 class="t-title">What to do:</h2>
                <p>Guide children to repeat the DNA extraction steps in the lesson for
                    the chosen subject. If you plan to choose vegetable as the subject,
                    use a blender instead of hands to crush and smash them.</p>
            </div>
        </div>
        <img src="{{ asset('assets/images/pptimages/teacher1.png') }}" class="absolute teacher-img1" />
    </div>


    {{-- ========================================================== --}}
    {{-- Buttons --}}
    <div class="down-btn-container">
        <button class="doneButton">
            <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    <div id="buttons" class="absolute  flex flex-row gap-6 z-90">

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
                    window.location.href = "{{ route('k2livingthings') }}";
                } else {
                    //   Previous slide pe jao
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2livingthings') }}";
                });
            }
            showSlide(currentSlide);
        });
    </script>
@endpush
