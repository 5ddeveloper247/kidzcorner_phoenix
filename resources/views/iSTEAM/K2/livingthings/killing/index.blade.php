@extends('layout.master')
@section('title', 'Dynamic Presentation')




@section('content')

    <div id="topDiv" class="flex flex-col items-center gap-[7rem] ">
        <div class="title stroke">Do they Kill Bacteria?</div>
        <div class="text-white">
            Learn to take sample bacteria from ourselves and
            test if hand sanitizers, hand soaps and toothpastes
            help to kill bacteria

            <div class="down-btn-container">
                <button class="nextButton">
                    <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
                </button>
            </div>
        </div>
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

            if (nextButton) {
                nextButton.addEventListener("click", () => {
                    window.location.href = "{{ route('killingSelection') }}";
                });
            }
        });
    </script>
@endpush
