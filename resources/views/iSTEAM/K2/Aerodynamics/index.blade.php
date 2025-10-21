@extends('layout.master')
@section('title', 'Dynamic Presentation')

@section('content')
    {{--  First Slide --}}
    <div class="board w-[1267px] h-[734px] flex flex-col justify-center  items-center slide">

        <h2 class="text-[45px] text-[#F7B94A] font-extrabold stroke ">Aerodynamics</h2>

        <div class="flex flex-wrap justify-center items-center w-[80%] ">
            <!-- Card 1-->
            <a href="{{ route('Aerodynamics1') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">What is <br> Aerodynamics? <br> 1</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">1</span>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('Aerodynamics2') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">What is <br> Aerodynamics? <br> 2</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">2</span>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('Hydrodynamics') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Hydrodynamics</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">3</span>
            </a>
<br>
            <!-- Card 4 -->
            <a href="{{ route('Evolution') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Evolution of <br> Aeroplanes</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">4</span>
            </a>

            <!-- Card 5 -->
            <a href="{{ route('Flying') }}"
                  style="background-image: url('{{asset('/assets/images/pptimages/Property1.png')}}');"
            class=" bg-no-repeat bg-contain bg-center w-[270px] h-[300px] relative flex justify-center items-center transition hover:brightness-110">
                <h2 class="text-2xl text-[#7D6F71]">Flying <br> Machines</h2>
                <span class="text-3xl text-[#AF6E39] absolute  top-[70px] right-[30px]">5</span>
            </a>

        </div>
    </div>

  

    {{--  Top Buttons --}}
    <div id="buttons" class="absolute top-[30px] right-[60px] flex flex-row gap-6 z-90">

        <!-- Return Button (hidden initially) -->
        <a class="relative w-24 h-24 button-fade-in bg-[#59967D] rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-[#22664A] flex justify-center items-center"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
               src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class=" w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <button
     id="homeButton">
            <img 
                src="{{ asset('assets/images/pptimages/home-btn.png') }}" />
        </button>

        <!-- Close Button -->
        <button id="closeButton">
           
            <img 
                src="{{ asset('assets/images/pptimages/cancel.png') }}" />
    
        </button>
    </div>

@endsection

@push('script')
<script>
    document.addEventListener("DOMContentLoaded", () => {
  if (returnButton) {
                returnButton.addEventListener("click", () => {
                    window.location.href = "{{ route('K2') }}";
                });
            }
    });
</script>
@endpush
