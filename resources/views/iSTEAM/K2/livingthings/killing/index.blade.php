@extends('layout.master')
@section('title', 'Dynamic Presentation')




@section('content')

    <div id="topDiv" class="flex flex-col   items-center gap-[7rem] ">
        <div class="  title !text-[55px]  stroke">Do they Kill Bacteria?</div>
        <div
            class="text-white">
            Learn to take sample bacteria from ourselves and <br>
            test if hand sanitizers, hand soaps and toothpastes <br>
            help to kill bacteria <br><br>

            <button
                class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
        outline outline-1 outline-yellow-700 overflow-hidden">
                            <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />

            </button>

        </div>
    </div>





    <div id="buttons" class="absolute  flex flex-row gap-6 ">

        <!-- Return Button -->
        <button
        id="returnButton">
            <img 
                src="{{ asset('assets/images/pptimages/return.png') }}" />
        </button>

        <!-- Home Button -->
        <button
          id="homeButton">
            <img 
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
           
<img  src="{{ asset('assets/images/pptimages/cancel.png') }}" />
   
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
