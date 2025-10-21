@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        button {
            cursor: pointer;
        }

        .stroke {

            -webkit-text-stroke: 2px #533705;
        }

        .note {
            font-size: 24px;
            font-weight: 400;
            color: white;
        }

        a {
            cursor: pointer;

        }

    </style>
@endpush



@section('content')

    <div id="topDiv" class="flex flex-col  h-[90%] items-center ">
        <div class="indexTitle  text-[55px]  stroke">What is light?</div>
        <div
            class="text-2xl sm:text-3xl lg:text-6xl text-white max-w-5xl leading-snug flex flex-col items-center space-x-[30px]">
            Explorenatural and man-made lights<br />
            Develop awareness and knowledge<br />
            of different light forms

     <button class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
        outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" /> </div>
            <span class="flex items-center  text-white text-5xl font-bold stroke">NEXT
            </span>
        </button>

        </div>
    </div>





 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

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
            window.location.href = "{{ route('PlaneSelection') }}";
        });
    }
});
</script>
@endpush