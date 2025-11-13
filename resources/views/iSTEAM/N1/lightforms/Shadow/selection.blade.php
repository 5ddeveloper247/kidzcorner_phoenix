@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')


    <div class="Selection flex items-center flex-col justify-center relative h-full text-center z-[99] w-full">
        <h2 class="text-[#F7B94A] stroke">Light and Shadow</h2>
        <div class="flex items-center gap-[10vw]">

            {{-- Lesson Button --}}
            <a href="{{ route('ShadowLesson') }}" id="Lesson" class="flex flex-col gap-0">
                <img src="/assets/images/pptimages/lesson-btn.png" />

            </a>

            {{-- Teacher Button --}}
            <a href="{{ route('Shadowteacher') }}" id="Lesson" class="flex flex-col gap-0">
                <img src="/assets/images/pptimages/teacher-btn.png" />
            </a>
        </div>
    </div>



    <div id="buttons" class="absolute  flex flex-row ">

        <!-- Return Button -->
        <a href="{{ route('shadows') }}" id="returnButton">

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
