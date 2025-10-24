@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        button {
            cursor: pointer;
        }

        .stroke {

            -webkit-text-stroke: 2px #533705;
        }

        .lesson-btn {
            position: relative;
            z-index: -1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 250px;
            height: 80px;
            cursor: pointer;
            border-radius: 30px;
            background-color: #fb923c;

            outline: 1px solid #a16207;
            box-shadow:
                3px 4px 7.8px rgba(0, 0, 0, 0.25),
                inset 3px -4px 4px rgba(0, 0, 0, 0.25);
        }

        .lesson-btn-vector {
            position: absolute;
            top: 2px;
            left: 6px;
            width: 14.5rem;
        }

        .lesson-btn-shape {
            position: absolute;
            top: 6px;
            left: 14px;
            width: 12px;
            height: 8px;
            background: white;
            border-radius: 30px 19px 20px 10px;
        }

        .lesson-btn-text {
            position: relative;
            z-index: 30;
            text-align: center;
            font-size: 60px;
            color: white;
        }

        .note {
            font-size: 24px;
            font-weight: 400;
            color: white;
        }

        a {
            cursor: pointer;

        }
    </style>
@endpush



@section('content')


    <div class=" flex items-center flex-col justify-center text-center z-[99] w-full">
        <h2 class="text-[50px] text-[#F7B94A] stroke">Final Project</h2>
        <div class="flex items-center gap-[15rem]">

            {{-- Lesson Button --}}
            <a href="{{ route('final2Lesson') }}" id="Lesson" class="flex flex-col gap-0">
                <img src="/assets/images/pptimages/lesson-btn.png" />
                 
            </a>
            {{-- Teacher Button --}}
            <a href="{{ route('final2Teacher') }}" id="Lesson" class="flex flex-col gap-0">
                <img src="/assets/images/pptimages/teacher-btn.png" />

                 
            </a>
        </div>
    </div>



 <div id="buttons" class="absolute  flex flex-row gap-6 ">

        <!-- Return Button -->
        <a href="{{ route('final2') }}"
         
    id="returnButton">

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
           
<img  src="{{ asset('assets/images/pptimages/cancel.png') }}" />
   
        </button>
    </div>
@endsection
