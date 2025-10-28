@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')

    <div id="topDiv" class="flex flex-col items-center justify-between h-full">
        <h2 class="indexTitle title  text-[55px] stroke">Glow in the Dark</h2>
        <h2 class="!text-white title">
            Explore glow-in-the-dark items; develop 
            awareness and curiosity of different things 
            that glow in the dark.
        </h2>

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
                    window.location.href = "{{ route('darkSelection') }}";
                });
            }
            if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('lightforms') }}";
                });
            }
        });
    </script>
@endpush
