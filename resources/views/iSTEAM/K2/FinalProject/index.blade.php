@extends('layout.master')
@section('title', 'Dynamic Presentation')


@section('content')
    {{--  First Slide --}}
    <div class="board3  flex flex-col justify-center items-center">
        <h2 class="text-[#F7B94A] stroke board-title">Final Project</h2>
        <div class="flex flex-wrap justify-center items-center " >
            <!-- Card 1-->
            <a href="{{ route('final2') }}"
                style="background-image: url('{{ asset('/assets/images/pptimages/Property1.png') }}');"
                class=" bg-no-repeat bg-contain bg-center   w-[17.5vw] h-[14.375vw] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-[1.51vw] text-[#7D6F71]">Final Project</h2>
                <span class="text-[2vw] text-[#AF6E39] absolute  top-[1.4vw] right-[1vw]">1</span>
            </a>
        </div>
    </div>

    {{--  Top Buttons --}}
    <div id="buttons" class="absolute  flex flex-row gap-6 z-90">

        <!-- Return Button (hidden initially) -->
        <a id="returnButton" href="{{route('K2')}}">

            <img src="{{ asset('assets/images/pptimages/return.png') }}" />
        </a>
        <!-- Home Button -->
        <button id="homeButton">
            <img src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
            <img src="{{ asset('assets/images/pptimages/cancel.png') }}" />
        </button>
    </div>
    </div>
@endsection

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const returnButton = document.getElementById("returnButton");

            //  RETURN button → go back to 1st slide
            returnButton.addEventListener("click", () => {
                window.location.href = "{{ route('K2') }}";
            });
        });
    </script>
@endpush
