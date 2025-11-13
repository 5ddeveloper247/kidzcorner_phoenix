@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    <div id="topDiv" class="flex flex-col items-center ">
        <h2 class="  text-amber-300 text-[65px] stroke">Structure of a Car</h2>
        <h2 class="!text-white title">Plan and design a city; <br>
            create buildings and vehicles of various <br>
            structures.</h2>

        <button class="cursor-pointer nextButton  ">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

        </button>

    </div>




    <div id="buttons" class="absolute  flex flex-row gap-6 ">
        <!-- Return Button -->
        <button id="returnButton">
            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </button>
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

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const nextButton = document.querySelector(".nextButton");
            const returnButton = document.getElementById("returnButton");

            if (nextButton) {
                nextButton.addEventListener("click", () => {
                    window.location.href = "{{ route('CarstructureSelection') }}";
                });
            }
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('Structures') }}";
                });
            }
        });
    </script>
@endpush
