@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    <div id="topDiv" class="flex flex-col justify-center items-center ">
        <div class="indexTitle    stroke">Animate a Character (3)</div>
        <h2 class="text-2xl sm:text-3xl lg:text-4xl !text-white stroke ">
            Explore and learn how to create animated stories using
            ScratchJr; learn how to programme a character to have
            sound; try to time sounds to match the movements
            of a character</h2>

            <button class="nextButton">
                <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
            </button>
    </div>




    <div id="buttons" class="absolute flex flex-row gap-6 z-90">
        <!-- Return Button (hidden initially) -->
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
            const returnButton = document.querySelector("#returnButton");

            if (nextButton) {
                nextButton.addEventListener("click", () => {
                    window.location.href = "{{ route('animate3Selection') }}";
                });
            }
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('k2sustainability') }}";
                });
            }
        });
    </script>
@endpush
