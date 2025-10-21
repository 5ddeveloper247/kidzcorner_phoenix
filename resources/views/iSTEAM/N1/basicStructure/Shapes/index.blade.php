@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    <div id="topDiv" class="flex flex-col items-center h-full justify-between">
        <h2 class=" title !text-[50px] font-extrabold stroke">Forming Shapes</h2>
        <h2 class="!text-white title"> Exploring with lines; learn that shapes are form by lines </h2>

        <button class="nextButton">
            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

        </button>

    </div>

    <div id="buttons" class="absolute  flex flex-row ">

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
                    window.location.href = "{{ route('shapesSelection') }}";
                });
            }
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('basicStructure') }}";
                });
            }
        });
    </script>
@endpush
