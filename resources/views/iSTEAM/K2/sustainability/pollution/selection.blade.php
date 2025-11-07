@extends('layout.master')
@section('title', 'Dynamic Presentation')





@section('content')
    <div class=" flex items-center flex-col justify-center text-center z-[999]  max-w-[1000px]  m-auto">
        <h2 class="text-[50px] text-[#F7B94A]"> Pollution and its Effects</h2>
        <div class="flex items-center justify-between gap-[10vw]">
            {{-- Lesson Button --}}
            <a href="{{ route('pollutionLesson') }}" id="Lesson" class="flex flex-col gap-0">
                <img src="/assets/images/pptimages/lesson-btn.png" />
            </a>

            {{-- Teacher Button --}}
            <a href="{{ route('pollutionTeacher') }}" id="Lesson" class="flex flex-col gap-0">
                <img src="/assets/images/pptimages/teacher-btn.png" />
            </a>
        </div>
    </div>



    <div id="buttons" class="absolute  flex flex-row gap-6 ">

        <!-- Return Button -->
        <a href="{{ route('pollution') }}" id="returnButton">

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


@endsection
