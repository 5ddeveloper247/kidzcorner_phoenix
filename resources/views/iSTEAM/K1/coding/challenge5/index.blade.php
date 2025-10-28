@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')

    <div id="topDiv" class="flex flex-col   items-center ">
        <div class="  text-[#F7B94A] text-[50px]  stroke">Coding Challenge (5)</div>
        <h2 class=" text-white stroke ">
            Plan a route for a purpose; programme a 
            robot to move according to the planned routes; 
            test to decide the most efficient route 
            for a robot to complete a mission</h2>

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
                    window.location.href = "{{ route('challenge5Selection') }}";
                });
            }
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('coding') }}";
                });
            }
        });
    </script>
@endpush
