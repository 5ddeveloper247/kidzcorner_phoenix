@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')

    <div id="topDiv" class="flex flex-col items-center h-full justify-between ">
        <div class="indexTitle  text-[55px]  stroke">A Spinning Top</div>
        <h2
            class="text-2xl sm:text-3xl lg:text-6xl text-white    flex flex-col items-center space-x-[30px]">
            Explore the characteristics and uses of wheel and axles - a simple machine; build a pinwheel based on a
            pictorial guide.</h2>
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
                    window.location.href = "{{ route('spinningTopSelection') }}";
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
