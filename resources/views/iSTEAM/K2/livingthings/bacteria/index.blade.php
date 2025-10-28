@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    <div id="topDiv" class="flex flex-col items-center ">
        <div class="  title stroke">What are Bacteria?</div>
        <h2 class="text-2xl sm:text-3xl lg:text-5xl text-white stroke ">Learn about the characteristics of bacteria;
            learn to use scientific method for growing bacteria
            and test if disinfectant sprays
            help to kill bacteria</h2>
        {{-- next Button --}}
        <div class="down-btn-container">
            <button class="nextButton">
                <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
            </button>
        </div>
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

            if (nextButton) {
                nextButton.addEventListener("click", () => {
                    window.location.href = "{{ route('bacteriaSelection') }}";
                });
            }
        });
    </script>
@endpush
