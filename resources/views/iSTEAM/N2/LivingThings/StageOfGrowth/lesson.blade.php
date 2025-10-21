@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <h2 class="stroke title">Children, do you still remember what the
            stages of growth of a person are?
            What happens when you grow?</h2>
        <p class="note">Note: Encourage children to share what they know about the stages of growth.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Baby</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Young/child</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an29.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Adult</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an33.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Elderly Person</h2>
            </div>
        </div>
        <h2 class="stroke title">These are the stages of growth of a girl.</h2>
        <p class="note">Note: Explain to children that every girl goes through these stages of growth.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" class="h-[200px]" />
                <h2 class="text-white text-[30px]">Baby</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" class="h-[200px]" />
                <h2 class="text-white text-[30px]">Young/child</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an29.png') }}" class="h-[200px]" />
                <h2 class="text-white text-[30px]">Adult</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an33.png') }}" class="h-[200px]" />
                <h2 class="text-white text-[30px]">Elderly Person</h2>
            </div>
        </div>
        <div class="flex items-center">
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an25.png') }}" class="w-[200px]" />
                <h2 class="text-white text-[30px]">Baby</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an26.png') }}" class="w-[200px]" />
                <h2 class="text-white text-[30px]">Young/puppy</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an27.png') }}" class="w-[200px]" />
                <h2 class="text-white text-[30px]">Adult</h2>
            </div>
        </div>
        <h2 class="title stroke">Note: Invite children take turns to share their changes over time.</h2>

    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an51.png') }}" />
        <h2 class="stroke title">This is a <span class="text-white">butterfly</span>.<br />Let’s look at the <span
                class="text-white">stages of growth</span> of a <span class="text-white">butterfly</span>.</h2>

    </div>

    {{-- slide 5 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">First Stage</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/an43.png') }}" />
        <h2 class="stroke title">The butterfly starts off as an egg.</span>.
        </h2>
    </div>

    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an44.png') }}" />
        <h2 class="stroke title">Watch how the caterpillar hatches from the egg.</h2>
    </div>

    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Second Stage</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/an45.png') }}" />
        <h2 class="stroke title">Once the caterpillar hatches,
            it is in the second stage of growth.</span>.
        </h2>
    </div>



    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an46.png') }}" />
        <h2 class="stroke title">The caterpillar eats a lot and it can grow
            100 times its size during this stage!</h2>
    </div>



    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an47.png') }}" />
        <h2 class="stroke title">The caterpillar eats a lot and it can grow
            100 times its size during this stage!</h2>
    </div>


    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Third Stage</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/an48.png') }}" />
        <h2 class="stroke title">As the caterpillar grows, it sheds its skin.</h2>
    </div>



    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Forth Stage</h2>
        <img src="{{ asset('assets/images/N2/LivingThings/an49.png') }}" />
        <h2 class="stroke title">Inside the pupa, the caterpillar is changing.
            When it is ready, it comes out of the pupa as a butterfly.</h2>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an51.png') }}" />
        <h2 class="stroke title">After drying its wings, the butterfly will fly off
            to look for food.</h2>
    </div>




    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an50.png') }}" />
        <h2 class="stroke title">The butterfly drinks nectar from flowers using its
            proboscis. The proboscis is like a straw.</h2>
    </div>


    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">Class Activity</h2>

        <h2 class="stroke title">Let’s take care of a caterpillar and see how
            it grows.</h2>
        <p class="note">Note: Display the caterpillar and let children observe it.</p>
    </div>


    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>1. Prepare a clean piece of paper cut to the size
                    of the container and an empty container.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an63.png') }}" />
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>

                <li>2. Remove the cover of the caterpillar’s container.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an52.png') }}" />
    </div>

    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>3. Transfer the caterpillar to an empty container
                    with teacher’s help.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an53.png') }}" />
        <p class="note">Note: If the caterpillar is not on the leaves, you can place a leaf/stick near to it to let it
            crawl onto it. Be gentle if you plan to transfer it by holding the caterpillar.</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>4. Throw the dirty paper away and use a tissue to
                    clean the container if it is dirty.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an54.png') }}" />

    </div>



    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>5. Put the clean paper flat at the bottom
                    of the container.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an55.png') }}" />

    </div>


    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>6. Remove the leaf from the water holder and place the
                    leaf with the caterpillar in the container.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an56.png') }}" />

    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>7. Wash and change the water in the water holder. Fill
                    the water to the brim of the water holder and cover it</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an57.png') }}" />

    </div>


    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>8. Pluck a leaf from the bunch of leaves in the fridge.
                    Ensure that the stalk is intact.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an58.png') }}" />

    </div>


    {{-- slide 23 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>9. Put the stalk of the leaf into the hole on the cover.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an59.png') }}" />

    </div>


    {{-- slide 24 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>10. Put the leaf back in the container.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an60.png') }}" />

    </div>


    {{-- slide 25 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>11. Transfer the caterpillar back into the container.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an61.png') }}" />

    </div>

    {{-- slide 26 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>12. Close the container.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an62.png') }}" />

    </div>

    {{-- slide 27 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>13.
                    See how the caterpillar grow overtime. Record
                    (draw or paste a photo) when there are changes.</li>
            </ul>
        </div>
        <img src="{{ asset('assets/images/N2/LivingThings/an57.png') }}" />
        <p class="note">Note: Guide children to record their observations in the learning journal.</p>
    </div>


    {{-- slide 28 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">Children, how did the caterpillar grew.</h2>


        <p class="note">Note: At the end of the activity, have children display their learning journal
            and share what they have observed.</p>
    </div>

    {{-- slide 29 --}}
    <div class="flex flex-col  slide hidden">
        <div class="flex items-center justify-center">
            <div class="w-[200px]">
                <img src="{{ asset('assets/images/N2/LivingThings/an43.png') }}" class="object-cover" />
                <h2 class="text-white text-[30px]">Egg</h2>
            </div>

            <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />

            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an45.png') }}" class="w-[200px]" />
                <h2 class="text-white text-[30px]">Catepillar</h2>
            </div>
            <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />

            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an64.png') }}" class="w-[200px]" />
                <h2 class="text-white text-[30px]">Pupa</h2>
            </div>
            <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />

            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an51.png') }}" class="w-[200px]" />
                <h2 class="text-white text-[30px]">Butterfly</h2>
            </div>
        </div>

        <h2 class="stroke title">These are the stages of growth of a butterfly.</h2>
    </div>

    {{-- slide 20 --}}
    <div class="flex flex-col  slide hidden">
        <div class=" flex flex-col items-center justify-center">
            <div class="flex items-center">
                <div>
                    <img src="{{ asset('assets/images/N2/LivingThings/an20.png') }}" class="w-[100px]" />
                    <h2 class="text-white text-[30px]">Baby</h2>
                </div>
                <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />

                <div>
                    <img src="{{ asset('assets/images/N2/LivingThings/an24.png') }}" class="w-[100px]" />
                    <h2 class="text-white text-[30px]">Young/child</h2>
                </div>
                <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />

                <div>
                    <img src="{{ asset('assets/images/N2/LivingThings/an30.png') }}" class="w-[100px]" />
                    <h2 class="text-white text-[30px]">Adult</h2>
                </div>
                <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />

                <div>
                    <img src="{{ asset('assets/images/N2/LivingThings/an34.png') }}" class="w-[100px]" />
                    <h2 class="text-white text-[30px]">Elderly Person</h2>
                </div>
            </div>

            <div class="flex items-center justify-center">
                <div class="w-[200px]">
                    <img src="{{ asset('assets/images/N2/LivingThings/an43.png') }}" class="object-cover" />
                    <h2 class="text-white text-[30px]">Egg</h2>
                </div>

                <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />

                <div>
                    <img src="{{ asset('assets/images/N2/LivingThings/an45.png') }}" class="w-[100px]" />
                    <h2 class="text-white text-[30px]">Catepillar</h2>
                </div>
                <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />

                <div>
                    <img src="{{ asset('assets/images/N2/LivingThings/an64.png') }}" class="w-[100px]" />
                    <h2 class="text-white text-[30px]">Pupa</h2>
                </div>
                <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />

                <div>
                    <img src="{{ asset('assets/images/N2/LivingThings/an51.png') }}" class="w-[100px]" />
                    <h2 class="text-white text-[30px]">Butterfly</h2>
                </div>
            </div>
        </div>
        <h2 class="stroke title">Similar to you, the caterpillar also goes through the stages
            of growth. It gets bigger as it grows and its look changes.</h2>
    </div>



    {{-- slide 31 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" class="h-[200px]" />
                <h2 class="text-white text-[30px]">Baby</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" class="h-[200px]" />
                <h2 class="text-white text-[30px]">Young/child</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an29.png') }}" class="h-[200px]" />
                <h2 class="text-white text-[30px]">Adult</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an33.png') }}" class="h-[200px]" />
                <h2 class="text-white text-[30px]">Elderly Person</h2>
            </div>
        </div>
        <div class="flex items-center">
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an25.png') }}" class="w-[200px]" />
                <h2 class="text-white text-[30px]">Baby</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an26.png') }}" class="w-[200px]" />
                <h2 class="text-white text-[30px]">Young/puppy</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an27.png') }}" class="w-[200px]" />
                <h2 class="text-white text-[30px]">Adult</h2>
            </div>
        </div>
        <h2 class="title stroke">Note: Invite children take turns to share their changes over time.</h2>

    </div>


    {{-- slde 32 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Individual Activity</h2>
    
            <img src="{{ asset('assets/images/pptimages/dark4.png') }}"/>

        <h2 class="title stroke text-start">Let’s do: <br>
            How has the caterpillar grown? Put the photos in the correct order.</h2>
            <p class="note">Note: Give children the photos and guide children to paste them in their learning journals..</p>
    </div>

      {{-- slde 33 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Individual Activity</h2>
    
            <img src="{{ asset('assets/images/pptimages/dark4.png') }}"/>

    </div>


      {{-- slde 34 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Individual Activity</h2>
    
            <img src="{{ asset('assets/images/pptimages/dark4.png') }}"/>
    </div>





    {{-- Complete button --}}
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>

    {{-- Buttons --}}
 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

        <!-- Return Button -->
        <a id="returnButton">
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
                    window.location.href = "{{ route('StageOfGrowthSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
