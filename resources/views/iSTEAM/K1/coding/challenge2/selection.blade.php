@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')
    <div class=" flex items-center flex-col justify-center text-center z-[99]w-full ">
        <h2 class="text-[50px] text-[#F7B94A] stroke">Challenge 2</h2>
        <div class="flex items-center justify-around w-full">

            {{-- Lesson Button --}}
            <a href="{{ route('challenge2Lesson') }}" id="Lesson" class="flex flex-col gap-0">
                <img src="/assets/images/pptimages/Lesson1.png" class="h-auto w-[200px] sm:w-[250px] lg:w-[300px]" />

                <button id="nextButton" class="lesson-btn  !z-10 !bg-[#2D9CDB]">
                    <img src="/assets/images/pptimages/Vector4.png" class="lesson-btn-vector" />
                    <div class="lesson-btn-shape"></div>
                    <div class="lesson-btn-text stroke">Lesson </div>
                </button>

            </a>
            {{-- Teacher Button --}}
            <a href="{{ route('challenge2Teacher') }}" id="Lesson" class="flex flex-col gap-0">
                <img src="/assets/images/pptimages/teacher1.png" class="h-auto w-[200px] sm:w-[250px] lg:w-[300px]" />

                <button id="nextButton" class="lesson-btn  !z-10 !bg-[#0E502A]">
                    <img src="/assets/images/pptimages/Vector4.png" class="lesson-btn-vector" />
                    <div class="lesson-btn-shape"></div>
                    <div class="lesson-btn-text stroke">Teacher</div>
                </button>

            </a>
        </div>
    </div>



 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

        <!-- Return Button -->
        <a href="{{ route('challenge2') }}"
            class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <button
            class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-icon.png') }}" />
        </button>

        <!-- Close Button -->
        <button class="relative w-24 h-24 button-fade-in cursor-pointer" id="closeButton">
            <div
                class="absolute inset-0 bg-red-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-red-900">
            </div>
            <img class="absolute top-[6px] left-[8px] w-20 h-10" src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <div id="closeButtonText"
                class="absolute top-[16px] left-[30px] w-11 h-16 text-white text-6xl font-normal font-['Jua']">X
            </div>
        </button>

    </div>


@endsection
