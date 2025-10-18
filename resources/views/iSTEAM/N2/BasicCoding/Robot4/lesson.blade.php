@extends('layout.master')
@section('title', 'Dynamic Presentation')

 

@section('content')


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center  slide hidden">
        <img src="{{ asset('assets/images/N2/BasicCoding/sb1.png') }}" alt="">
        <h2 class="stroke title">Children, what are these? Do you like them?</h2>
        <p class="note">Note: Encourage children to share their views.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb1.png') }}" />
        <h2 class="stroke title">Children, what are these? What do you use them for?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center justify-center gap-x-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/rb4.png') }}" />
            <img src="{{ asset('assets/images/N2/BasicCoding/rb5.png') }}" />
        </div>
        <h2 class="title stroke text-center">What about these? What do you use them for?</h2>
        <p class="note">Note: Have children recall and share what they have learnt.</p>
    </div>


    {{-- sldie 4 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center gap-x-10">
            <div class="flex flex-col items-center justify-center gap-y-10">
                <img src="{{ asset('assets/images/N2/BasicCoding/rb6.png') }}" class="w-[400px]" />
                <img src="{{ asset('assets/images/N2/BasicCoding/rb8.png') }}" class="w-[400px]" />
            </div>
            <div class="flex flex-col items-center justify-center gap-y-10">
                <img src="{{ asset('assets/images/N2/BasicCoding/rb7.png') }}" class="w-[400px]" />
                <img src="{{ asset('assets/images/N2/BasicCoding/rb9.png') }}" class="w-[400px]" />
            </div>
        </div>
        <h2 class="title stroke text-center">You can use these mats to form mazes and then
            programme a robot to go through the mazes.</h2>
    </div>


    {{-- sldie 5 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb10.png') }}" />
        <h2 class="stroke title text-center">When you place a <span class="text-white">robot</span> on one of the
            character<span class="text-white">mats</span>,
            the <span class="text-white">robot</span> turns into an animal character as shown.
        </h2>
        <p class="note">Note: Display the mats. Guide children to compare their shapes with other mats.</p>
    </div>

    {{-- sldie 6 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center gap-x-10">
            <div class="flex flex-col items-center justify-center gap-y-10">
                <img src="{{ asset('assets/images/N2/BasicCoding/rb6.png') }}" class="w-[400px]" />
                <img src="{{ asset('assets/images/N2/BasicCoding/rb8.png') }}" class="w-[400px]" />
            </div>
            <div class="flex flex-col items-center justify-center gap-y-10">
                <img src="{{ asset('assets/images/N2/BasicCoding/rb7.png') }}" class="w-[400px]" />
                <img src="{{ asset('assets/images/N2/BasicCoding/rb9.png') }}" class="w-[400px]" />
            </div>
        </div>
        <h2 class="stroke title text-center">When you <span class="text-white">programme</span> a <span
                class="text-white">robot</span> to move to these picture
            <span class="text-white">mats</span>, the <span class="text-white">robot</span> shows reactions of the
            character.
        </h2>
    </div>



    {{-- slide 7 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb12.png') }}" />
        <h2 class="title stroke text-center">So when you <span class="text-white">programme</span> an animal to find its
            favourite food, it shows happy reactions.</h2>
    </div>

    {{-- sldie 8 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb12.png') }}" />
        <h2 class="title stroke text-center">And when you <span class="text-white">programme</span> an animal to find food
            that it does
            not like, it shows unhappy reactions.</h2>
    </div>


    {{-- sldie 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb13.png') }}" />
        <h2 class="stroke title text-center"> These are the remaining picture <span class="text-white">mats</span>.<br />
            What do you see from each <span class="text-white">mat</span>?</h2>

    </div>


    {{-- slide 10 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <div class="flex items-center justify-center gap-x-10">
            <img src="{{ asset('assets/images/N2/BasicCoding/rb4.png') }}" />
            <img src="{{ asset('assets/images/N2/BasicCoding/rb13.png') }}" />
        </div>
        <h2 class="title stroke text-center">What will be the reactions of different animals when you
            programme them to move to these picture mats?</h2>
    </div>

    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 1</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission: <br>
                Let's lay out the sample maze and play a game. Use the
                programming cards to think and plan how to help a robot move
                from the starting point to the end point. After that, use the
                pen controller to record and play the programme to see how
                the robot moves according to the programme created. A surprise awaits you at the end!</h2>
        </div>
        <p class="note">Note: Divide children into groups. Have them work together to complete the mission.</p>
    </div>
    {{-- ==== --}}
    {{-- slide 12 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb14.png') }}" />
        <h2 class="stroke title text-center">Patchy Panda is having fun at somewhere now.
            Can you name the place?</h2>
    </div>


    {{-- sldie 13 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Patchy Panda wants to take pictures with the clown.
            Help him to get there.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb15.png') }}" />
        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps, record
            and play the
            programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- sldie 14 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Patchy Panda wants to take pictures with the clown.
            Help him to get there.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb15.png') }}" />
        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps, record
            and play the
            programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- slide 15 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Patchy Panda wants to take pictures with the clown.
            Help him to get there.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb15.png') }}" />
        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps, record
            and play the
            programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>



    {{-- slide 16 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Patchy Panda wants to take pictures with the clown.
            Help him to get there.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb15.png') }}" />
        <p class="note text-center">Note: Have children lay out the maze, use programming cards to plan the steps, record
            and play the
            programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>

    {{-- sldie 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 2</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission: <br>
                Let's lay out the sample maze and play a game. Use the
                programming cards to think and plan how to help a robot move
                from the starting point to the end point. After that, use the
                pen controller to record and play the programme to see how
                the robot moves according to the programme created. A
                surprise awaits you at the end!</h2>
        </div>
        <p class="note">Note: Divide children into groups. Have them work together to complete the mission.</p>
    </div>


    {{-- sldie 18 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <img src="{{ asset('assets/images/N2/BasicCoding/rb16.png') }}" />
        <h2 class="title stroke text-center">It’s a bright and sunny day.
            Patchy Panda is planning what to do in the afternoon.</h2>
    </div>


    {{-- slide 19 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">First, he is going to eat the leftover birthday cake.
            Help him to get the cake.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb17.png') }}" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>

    {{-- slide 20 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Next, he is going to play football with friends.
            Help him to get the ball.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb17.png') }}" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>

    {{-- sldie 21 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Then, he is going to shower.
            Help him to get to the bathroom.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb17.png') }}" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- sldie 22 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">He is also going to read a book.
            Help him to get to the book.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb17.png') }}" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- slide 23 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Finally, he is going to take a nap.
            Help him to get the bedroom.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb17.png') }}" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps, record and play
            the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>
    </div>


    {{-- ======== --}}
    {{-- slide 9 --}}
    <div class="slide flex flex-col items-center justify-center  ">
        <h2 class="title stroke text-center">Help the robot move from the mat with its picture
            to the mat with a <span class="text-white">fish</span>.</h2>
        <img src="{{ asset('assets/images/N2/BasicCoding/rb9.png') }}" />
        <p class="note">Note: Have children lay out the maze, use programming cards to plan the steps,
            record and play the programme to see how the robot move from the starting point to the end point.
            Ask them what happens to the robot.</p>

    </div>


    {{-- sldie 24 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="!text-white title stroke">Hands-on Time 3</h2>
        <div class="text-start">
            <h2 class="title stroke">Mission: <br>
                Change the animal character in each story and repeat
                the games!</h2>
        </div>
        <p class="note">Note: Guide children to replace the character mat in hands-on session 1 and 2 to repeat the
            games.</p>
    </div>


    {{-- =================================================================== --}}
    {{-- Complete button --}}
    <div class="absolute bottom-[85px]">
        <button
            class="cursor-pointer doneButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
                    outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">DONE</span>
        </button>
    </div>

    {{-- Buttons --}}
 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

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
    <div class="absolute bottom-[85px]">

        <button
            class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
        outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
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
                    window.location.href = "{{ route('Robot4Selection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
