@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        button {
            cursor: pointer;
        }

        .stroke {

            -webkit-text-stroke: 2px #533705;
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

    <div id="topDiv" class="flex flex-col   items-center ">
        <div class="  text-[#F7B94A] text-[50px] font-extrabold stroke">Domino Fun</div>
        <h2 class="text-2xl sm:text-3xl lg:text-5xl text-white stroke ">
            Explore domino effects and basic domino
            arrangements that create domino effects </h2>

        <button
                class="nextButton"  >     <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

        </button>
    </div>





 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

        <!-- Return Button -->
        <button
        id="returnButton">
            <img 
                src="{{ asset('assets/images/pptimages/return.png') }}" />
        </button>

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

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const nextButton = document.querySelector(".nextButton");

            if (nextButton) {
                nextButton.addEventListener("click", () => {
                    window.location.href = "{{ route('DominoFunSelection') }}";
                });
            }
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('K1CompoundMachines') }}";
                });
            }
        });
    </script>
@endpush
