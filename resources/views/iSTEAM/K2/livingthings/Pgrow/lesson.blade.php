@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('styles')
    <style>
        /* Base Styles */
        button {
            cursor: pointer !important;
        }

        a {
            cursor: pointer;
        }

        /* Container Responsive Sizing */
        .slide {
            max-width: 1267px;
            margin: 0 auto;
            padding: 1rem 2rem;
        }

        /* Responsive Images */
        .slide img {
            max-width: 100%;
            height: auto;
            object-fit: contain;
        }

        /* Typography Scaling */
        .title {
            font-size: clamp(1.5rem, 4vw, 3rem);
            line-height: 1.3;
            text-align: center;
            padding: 0 1rem;
        }

        .note {
            font-size: clamp(0.875rem, 2vw, 1.125rem);
            padding: 0 1rem;
            text-align: center;
        }

        /* Ordered List Responsive */
        .slide ol {
            font-size: clamp(1.25rem, 3vw, 2.5rem);
            padding-left: 1rem;
        }

        .slide ol li {
            margin-bottom: 0.5rem;
        }

        /* Button Container Responsive */
        .absolute.bottom-\[85px\] {
            left: 50%;
            transform: translateX(-50%);
        }

        /* Top Buttons Responsive */
        #buttons {
            gap: clamp(0.75rem, 2vw, 1.5rem);
        }

        #buttons a,
        #buttons button {
            width: clamp(4rem, 8vw, 6rem);
            height: clamp(4rem, 8vw, 6rem);
        }

        /* Done/Next Button Responsive */
        .nextButton,
        .doneButton {
            width: clamp(200px, 25vw, 264px);
            height: clamp(55px, 8vw, 75px);
        }

        .nextButton span,
        .doneButton span {
            font-size: clamp(2rem, 4vw, 3rem);
            left: clamp(50px, 8vw, 80px);
            top: 50%;
            transform: translateY(-50%);
        }

        /* Learning Journal Image Container */
        .slide .w-\[836px\] {
            max-width: 836px;
            width: 100%;
            height: auto;
            aspect-ratio: 836 / 536;
        }

        /* Tablet Breakpoint */
        @media (max-width: 1024px) {
            .slide {
                padding: 1rem 1.5rem;
            }

            .absolute.bottom-\[85px\] {
                bottom: 60px;
            }

            #buttons {
                right: 30px;
                top: 16px;
            }
        }

        /* Mobile Breakpoint */
        @media (max-width: 768px) {
            .slide {
                padding: 0.75rem 1rem;
                gap: 0.75rem !important;
            }

            .title {
                padding: 0 0.5rem;
            }

            .note {
                padding: 0 0.5rem;
                font-size: 0.875rem;
            }

            .slide ol {
                padding-left: 0.5rem;
            }

            .absolute.bottom-\[85px\] {
                bottom: 40px;
            }

            #buttons {
                right: 15px;
                top: 12px;
                gap: 0.5rem;
            }

            #buttons a,
            #buttons button {
                width: 3.5rem;
                height: 3.5rem;
            }

            #buttons img {
                transform: scale(0.8);
            }

            #closeButtonText {
                font-size: 2.5rem !important;
            }

            .nextButton,
            .doneButton {
                width: 180px;
                height: 50px;
            }

            .nextButton .bg-white,
            .doneButton .bg-white {
                width: 20px;
                height: 14px;
                top: 7px;
                left: 14px;
            }

            .nextButton img,
            .doneButton img {
                transform: scale(0.8);
            }
        }

        /* Small Mobile */
        @media (max-width: 480px) {
            .slide {
                padding: 0.5rem;
            }

            .title {
                font-size: 1.25rem;
            }

            .note {
                font-size: 0.75rem;
            }

            .slide ol {
                font-size: 1rem;
            }

            .text-\[45px\] {
                font-size: clamp(1.5rem, 6vw, 2.5rem) !important;
            }
        }

        /* Utility Classes Override for Responsiveness */
        @media (max-width: 768px) {
            .gap-5 {
                gap: 0.75rem !important;
            }

            .gap-y-2 {
                gap: 0.5rem !important;
            }

            .gap-y-4 {
                gap: 1rem !important;
            }
        }
    </style>
@endpush

@section('content')
    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/pgrow/p1.png" alt="Plants Introduction" />
        <h2 class="title stroke">Children, what are these?</h2>
    </div>



    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/pgrow/pp.png" alt="Different Plants" />
        <h2 class="title stroke">These are different <span class="text-white">plants</span>.</h2>
    </div>

    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <img src="/assets/images/K2/livingthings/pgrow/p2.png" alt="Growing Plants" />
        <h2 class="title stroke">Have you ever <span class="text-white">grown</span> a <span
                class="text-white">plant?</span> How does it change?</h2>
        <p class="note">Note: Encourage children to share their knowledge and experience.</p>
    </div>


    {{-- Slide 4 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <h2 class="title stroke">Today, we are going to learn how to <span class="text-white">grow</span> a <span
                class="text-white">plant</span> from a <span class="text-white">seed</span>!</h2>
    </div>


    {{-- Slide5 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Individual Activity</h2>
        <img src="/assets/images/K2/livingthings/pgrow/p3.png" alt="Activity Materials" />
        <h2 class="text-start title stroke"> <span class="text-white">Let's find out</span>: <br>
            How to grow a plant from a seed? <br> How does a seed grow in a bag?</h2>
        <p class="note">Note: Display all the things needed and have children name each. Introduce the chosen seeds, have
            children observe their colour, shape and size. At last, give each child a set of things needed.</p>
    </div>


    {{-- Slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <ol class="text-start title stroke">
            <h2>Let's do:</h2>
            <li>1. Write the name of the seed, today's date and your name on a label.</li>
        </ol>
        <img src="/assets/images/K2/livingthings/pgrow/p4.png" alt="Step 1" />
        <p class="note text-center">Note: Help to apply 2 dots of glue with a gap in between roughly at the middle of
            the paper towel for each child.</p>
    </div>



    {{-- Slide 7  --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <ol class="text-start title stroke">
            <h2>Let's do:</h2>
            <li>2. Put a seed on each of the glue dot on the paper towel and allow the glue dry.</li>
        </ol>
        <img src="/assets/images/K2/livingthings/pgrow/p5.png" alt="Step 2" />
    </div>


    {{-- Slide 8  --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <ol class="text-start title stroke">
            <h2>Let's do:</h2>
            <li>3. Put the paper towel into a zipper storage bag and spray water to wet the paper towel.</li>
        </ol>
        <img src="/assets/images/K2/livingthings/pgrow/p6.png" alt="Step 3" />
    </div>


    {{-- Slide 9 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <ol class="text-start title stroke">
            <h2>Let's do:</h2>
            <li>4. Leave about 1cm extra water at the bottom of the bag and seal the bag.</li>
        </ol>
        <img src="/assets/images/K2/livingthings/pgrow/p7.png" alt="Step 4" />
    </div>


    {{-- slide 10 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <ol class="text-start title stroke">
            <h2>Let's do:</h2>
            <li>5. Label the bag and tape it to a sunny window.</li>
        </ol>
        <img src="/assets/images/K2/livingthings/pgrow/p8.png" alt="Step 5" />
    </div>

    {{-- slide 11 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <ol class="text-start title stroke">
            <h2>Let's do:</h2>
            <li>6. Use the learning journal to record your observations.</li>
        </ol>
        <img src="/assets/images/K2/livingthings/pgrow/p9.png" alt="Step 6" />
        <p class="note">Note: Have children draw the current look of the seeds and write down today's date.
            Remind them to check on the seeds every day for at least a week and record their observations.</p>
    </div>


    {{-- slide 12 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <h2 class="title stroke">Now, we are going to learn how to <br>
            regrow green onions together!</h2>
    </div>


    {{-- slide 13 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="text-center justify-start text-[45px] text-white stroke">Class Activity</h2>
        <img src="/assets/images/K2/livingthings/pgrow/p10.png" alt="Green Onions" />
        <h2 class="text-start title stroke">Let's find out: <br>
            How to regrow green onions? How tall do they grow after a week?</h2>
        <p class="note">Note: Display a bunch of green onions, have children name the parts.</p>
    </div>

    {{-- Slide 14 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <ol class="text-start title stroke">
            <h2>Let's do:</h2>
            <li>1. Cut off the green leaves of the green onions.</li>
        </ol>
        <img src="/assets/images/K2/livingthings/pgrow/p11.png" alt="Cut Onions" />
        <p class="note text-center">Note: Tell children that the green leaves will be used to garnish their food today.</p>
    </div>


    {{-- Slide 15 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <ol class="text-start title stroke">
            <h2>Let's do:</h2>
            <li>2. Place the remaining green onions with roots in a transparent
                container filled with some water.</li>
        </ol>
        <img src="/assets/images/K2/livingthings/pgrow/p12.png" alt="Place in Water" />
        <p class="note text-center">Note: Be sure that only roots and partial of the white stems are in the water.</p>
    </div>


    {{-- Slide 16 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <ol class="text-start title stroke">
            <h2>Let's do:</h2>
            <li>3. Place the container near a sunny window.</li>
        </ol>
        <img src="/assets/images/K2/livingthings/pgrow/p12.png" alt="Sunny Window" />
    </div>



    {{-- Slide 17 --}}
    <div class="slide hidden flex flex-col items-center justify-start">
        <ol class="text-start title stroke">
            <h2>Let's do:</h2>
            <li>4. Use the learning journal to record your observations.</li>
        </ol>
        <img src="/assets/images/K2/livingthings/pgrow/p13.png" alt="Record Observations" />
        <p class="note text-center">Note: Have children draw the current look of the green onions and write down today's
            date. <br>
            Remind them to check on the green onions every day for a week and record their observations after a week <br>
            (encourage them to measure and record the heights).</p>
    </div>


    {{-- slide 18 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] flex flex-col justify-center items-center">
            <img src="/assets/images/K2/livingthings/pgrow/p14.png" alt="Learning Journal Page 1" />
        </div>
    </div>

    {{-- slide 19 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class="title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-[536px] flex flex-col justify-center items-center">
            <img src="/assets/images/K2/livingthings/pgrow/p15.png" alt="Learning Journal Page 2" />
        </div>
    </div>



    {{-- ====================================== --}}
    {{-- Buttons --}}
    <div class="absolute bottom-[85px]">
        <button
            class="cursor-pointer doneButton hidden w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px] shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
                    outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px]"> <img src="/assets/images/pptimages/Vector4.png" alt="Button BG" />
            </div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center text-white text-5xl font-bold stroke">DONE</span>
        </button>
    </div>


 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/pptimages/Vector4.png') }}" alt="Return BG" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" alt="Return Icon" />
        </a>

        <!-- Home Button -->
        <button
            class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/pptimages/Vector4.png') }}" alt="Home BG" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-icon.png') }}" alt="Home Icon" />
        </button>

        <!-- Close Button -->
        <button class="relative w-24 h-24 button-fade-in cursor-pointer" id="closeButton">
            <div
                class="absolute inset-0 bg-red-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-red-900">
            </div>
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" alt="Close BG" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <div id="closeButtonText"
                class="absolute top-[16px] left-[30px] w-11 h-16 text-white text-6xl font-normal font-['Jua']">X
            </div>
        </button>

    </div>

    {{-- next Button --}}
    <div class="absolute bottom-[85px]">

        <button
            class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px] shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
        outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px]"> <img src="/assets/images/pptimages/Vector4.png" alt="Next BG" /> </div>
            <span class="absolute left-[80px] top-[18px] flex items-center text-white text-5xl font-bold stroke">NEXT
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
            const doneButton = document.querySelector(".doneButton");

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // If last slide → hide NEXT button, show DONE
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // Return button
            returnButton.addEventListener("click", () => {
                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('PgrowSelection') }}";
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush