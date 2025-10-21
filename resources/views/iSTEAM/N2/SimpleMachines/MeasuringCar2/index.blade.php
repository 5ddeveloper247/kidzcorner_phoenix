@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    <div id="topDiv" class="flex flex-col items-center ">
        <div class="indexTitle  text-[55px]  stroke">A Measuring Car (2)</div>
        <h2
            class="text-2xl sm:text-3xl lg:text-6xl text-white max-w-5xl leading-snug flex flex-col items-center space-x-[30px]">
            Explore and learn about the characteristics of
            inclined planes - a sample machine. </h2>
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

            if (nextButton) {
                nextButton.addEventListener("click", () => {
                    window.location.href = "{{ route('MeasuringCar2Selection') }}";
                });
            }
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('SimpleMachines') }}";
                });
            }
        });
    </script>
@endpush
