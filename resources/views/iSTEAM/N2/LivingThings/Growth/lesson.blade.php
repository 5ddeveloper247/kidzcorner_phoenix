@extends('layout.master')
@section('title', 'Dynamic Presentation')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        button {
            cursor: pointer !important;
        }

        a {
            cursor: pointer;

        }
    </style>
@endpush



@section('content')


    {{-- Slide 1 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <h2 class="stroke title">Children, do you still remember what a <span class="text-white">living things<br /></span>is
            and what a <span class="text-white">non-living things</span> is?</h2>
        <p class="note">Note: Encourage children to share what they know about living things and non-living things.</p>
    </div>


    {{-- Slide 2 --}}
    <div class="slide flex flex-col items-center justify-center gap-10 ">

        <img src="{{ asset('assets/images/N2/LivingThings/an2.png') }}" class="w-[436px]" />
        <h2 class="stroke title">Between you and a doll, which is a <span class="text-white">living thing</span>?<br />Which
            is a <span class="text-white">non-living thing</span>?</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="flex flex-col items-center justify-center gap-10 slide hidden">
        <img src="{{ asset('assets/images/N2/LivingThings/an2.png') }}" class="w-[436px]" />
        <h2 class="stroke title">Which are <span class="text-white">living things</span>? Which are <span
                class="text-white">non-living things</span>?</h2>
        <p class="note">Note: Have children recall and point out the answers.</p>
    </div>


    {{-- slide 4 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="stroke title">A person, a dog and a fish move on its own, drink, eat,<br />breathe and grow. So they are
            <span class="text-white">living things</span>.
        </h2>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/LivingThings/an38.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" />
        </div>
    </div>

    {{-- slide 5 --}}
    <div class="flex items-center  slide hidden">
        <div class="title stroke text-start">
            <h2>All <span class="!text-white">animals</span>....</h2>
            <ul class="!text-white">
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                    <p> Move on their own</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                    <p> Drink</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                    <p>Eat</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                    <p> Breath (need air)</p>
                </li>
                <li class="flex items-center gap-5"> <img src="{{ asset('assets/images/N2/LivingThings/an65.png') }}" />
                    <p> Grow (get bigger)</p>
                </li>
            </ul>
            <h2>So <span class="!text-white">animals</span> are <span class="!text-white">living things</span></h2>

        </div>
        <div class="flex flex-wrap items-center justify-center">
            <img src="{{ asset('assets/images/N2/LivingThings/an39.png') }}" />
            <div>

                <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" />
                <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" />
            </div>
            <img src="{{ asset('assets/images/N2/LivingThings/an41.png') }}" />
        </div>
    </div>


    {{-- slide 6 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title stroke">How do animals grow? Let’s find out together!</h2>
    </div>


    {{-- slide 7 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an29.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an33.png') }}" class="h-[400px]" />
        </div>
        <h2 class="title stroke">This is Emma. <br>
            See how she has grown and changed over time.</h2>
        <p class="note">Note: Encourage children to describe the difference the see in the pictures.</p>
    </div>

    {{-- slide 8 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Baby</h2>
            </div>
            <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an29.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an33.png') }}" class="h-[400px]" />
        </div>
        <h2 class="title stroke">This is the photo of Emma when she was a baby.</h2>
        <p class="note">Note: Introduce the stages of growth to children. Have them name each stage.</p>
    </div>

    {{-- slide 9 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" class="h-[400px]" />
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Young/child</h2>
            </div>
            <img src="{{ asset('assets/images/N2/LivingThings/an29.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an33.png') }}" class="h-[400px]" />
        </div>
        <h2 class="stroke title">This is the photo of Emma when she was <span class="text-white">young</span>.<br />A young
            person is also called a <span class="text-white">child</span>.</h2>
        <p class="note">Note: Introduce the stages of growth to children. Have them name each stage.</p>
    </div>

    {{-- slide 10 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" class="h-[400px]" />
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an29.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Adult</h2>
            </div>
            <img src="{{ asset('assets/images/N2/LivingThings/an33.png') }}" class="h-[400px]" />
        </div>
        <h2 class="title stroke">This is the photo of Emma when she became an adult.</h2>
        <p class="note">Note: Introduce the stages of growth to children. Have them name each stage.</p>
    </div>


    {{-- slide 11 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an29.png') }}" class="h-[400px]" />
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an33.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Elderly Person</h2>
            </div>
        </div>
        <h2 class="stroke title">This is the photo of Emma now.<br />She has grown much <span
                class="text-white">older</span>. She is now an elderly <span class="text-white">person</span>.</h2>
        <p class="note">Note: Introduce the stages of growth to children. Have them name each stage.</p>
    </div>


    {{-- slide 12 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Baby</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Young/child</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an29.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Adult</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an33.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Elderly Person</h2>
            </div>
        </div>
        <h2 class="stroke title">These are the stages of growth of a girl.</h2>
        <p class="note">Note: Explain to children that every girl goes through these stages of growth.</p>
    </div>



    {{-- slide 13 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/LivingThings/an20.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an24.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an30.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an34.png') }}" class="h-[400px]" />
        </div>
        <h2 class="title stroke">This is Oliver. <br>
            See how he has grown and changed over time.</h2>
        <p class="note">Note: Encourage children to describe the difference the see in the pictures.</p>
    </div>

    {{-- slide 14 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an20.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Baby</h2>
            </div>
            <img src="{{ asset('assets/images/N2/LivingThings/an24.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an30.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an34.png') }}" class="h-[400px]" />
        </div>
        <h2 class="title stroke">This is the photo of Oliver when he was a baby.</h2>
        <p class="note">Note: Explain to children that every boy goes through these stages of growth.</p>
    </div>

    {{-- slide 15 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" class="h-[400px]" />
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Young/child</h2>
            </div>
            <img src="{{ asset('assets/images/N2/LivingThings/an29.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an33.png') }}" class="h-[400px]" />
        </div>
        <h2 class="stroke title">This is the photo of Oliver when he was <span class="text-white">young</span>.<br />A
            young person is also called a <span class="text-white">child</span>.</h2>
        <p class="note">Note: Explain to children that every boy goes through these stages of growth.</p>
    </div>

    {{-- slide 16 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" class="h-[400px]" />
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an29.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Adult</h2>
            </div>
            <img src="{{ asset('assets/images/N2/LivingThings/an33.png') }}" class="h-[400px]" />
        </div>
        <h2 class="title stroke">This is the photo of Oliver when he became an adult.</h2>
        <p class="note">Note: Explain to children that every boy goes through these stages of growth.</p>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an29.png') }}" class="h-[400px]" />
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an33.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Elderly Person</h2>
            </div>
        </div>
        <h2 class="stroke title">This is the photo of Oliver now.
            He has grown much older. He is now an elderly person.</h2>
        <p class="note">Note: Explain to children that every boy goes through these stages of growth.</p>
    </div>


    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Baby</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Young/child</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an29.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Adult</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an33.png') }}" class="h-[400px]" />
                <h2 class="text-white text-[30px]">Elderly Person</h2>
            </div>
        </div>
        <h2 class="stroke title">These are the stages of growth of a boy.</h2>
        <p class="note">Note: Explain to children that every boy goes through these stages of growth.</p>
    </div>



    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Class Activity</h2>
        <p class="note">Paste your photos in the correct order to show how you have grown over time.</p>
        <div class="flex items-center gap-10">
            <img src="{{ asset('assets/images/N2/LivingThings/an31.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an31.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an31.png') }}" class="h-[400px]" />
        </div>
        <h2 class="title stroke text-start">Let’s find out: <br>
            How have you grown and changed over time?</h2>
    </div>


    {{-- slide 17 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Class Activity</h2>
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>1. Arrange your photos to show how you have grown.</li>
            </ul>
        </div>
        <p class="note">Paste your photos in the correct order to show how you have grown over time.</p>
        <div class="flex items-center gap-10">
            <img src="{{ asset('assets/images/N2/LivingThings/an31.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an31.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an31.png') }}" class="h-[400px]" />
        </div>
        <p class="note">Note: Guide children to arrange and paste their photos in the learning journal.</p>
    </div>

    {{-- slide 18 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Class Activity</h2>
        <div class="title stroke text-start">
            <h2>Let’s do:</h2>
            <ul>
                <li>2. Show and tell how you have grown overtime.</li>
            </ul>
        </div>
        <p class="note">Paste your photos in the correct order to show how you have grown over time.</p>
        <div class="flex items-center gap-10">
            <img src="{{ asset('assets/images/N2/LivingThings/an31.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an31.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an31.png') }}" class="h-[400px]" />
        </div>
        <p class="note">Note: Invite children take turns to share their changes over time.</p>
    </div>


    {{-- slide 19 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" class="h-[200px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" class="h-[200px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an29.png') }}" class="h-[200px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an33.png') }}" class="h-[200px]" />
        </div>
        <div class="flex items-center">
            <img src="{{ asset('assets/images/N2/LivingThings/an20.png') }}" class="h-[200px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an24.png') }}" class="h-[200px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an30.png') }}" class="h-[200px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an34.png') }}" class="h-[200px]" />
        </div>
        <h2 class="title stroke">Note: Invite children take turns to share their changes over time.</h2>

    </div>



    {{-- slide 20 --}}
    <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center gap-10">
            <img src="{{ asset('assets/images/N2/LivingThings/an70.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an71.png') }}" />
        </div>
        <h2 class="stroke title">As we <span class="text-white">grow</span>, we <span class="text-white">eat</span> and
            <span class="text-white">drink</span>. Food has all <br />the <span class="text-white">nutrients</span> our
            body needs to live and <span class="text-white">grow</span>.</h2>
    </div>


    {{-- slide 21 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/an25.png') }}" />

        <h2 class="stroke title">This is a baby dog.</h2>
        <p class="note">Note: Encourage children to share what they see in the picture.</p>
    </div>


    {{-- slide 22 --}}
    <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/an26.png') }}" />

        <h2 class="stroke title">This is a young dog. You can call it a puppy..</h2>
        
    <p class="note">Note: Encourage children to share what they see in the picture.</p>
    </div>

    {{-- slide 23 --}}
 <div class="flex flex-col items-center justify-center slide hidden">

        <img src="{{ asset('assets/images/N2/LivingThings/an27.png') }}" />

        <h2 class="stroke title">When a puppy grows up, it becomes an adult dog.</h2>
          <p class="note">Note: Encourage children to share what they see in the picture.</p>
    </div>

    {{-- slide 24 --}}
   <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an25.png') }}" class="w-[200px]" />
                <h2 class="text-white text-[30px]">Baby</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an26.png') }}" class="w-[200px]" />
                <h2 class="text-white text-[30px]">Young/puppy</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an27.png') }}" class="w-[200px]" />
                <h2 class="text-white text-[30px]">Adult</h2>
            </div>

        </div>
       <h2 class="stroke title">Similar to you, these are the <span class="text-white">stages of growth</span> of a dog.<br/>As a dog<span class="text-white"> grows</span>, it becomes bigger in size and its look changes.</h2>
        <p class="note">Note: Encourage children to share what they see in the picture.</p>
    </div>




    {{-- slide 25 --}}
   <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center justify-center gap-10">
            <img src="{{ asset('assets/images/N2/LivingThings/an32.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an38.png') }}" />
        </div>
       <h2 class="stroke title">Similar to you, dogs <span class="text-white">eat</span> and <span class="text-white">drink</span> as they <span class="text-white">grow</span>.<br/>Food has the <span class="text-white">nutrients</span> that dogs need to live and <span class="text-white">grow</span>.</h2>
    </div>




    {{-- slide 26 --}}
       <div class="flex flex-col  slide hidden">
           
           <div class="flex items-center justify-center">
               <img src="{{ asset('assets/images/N2/LivingThings/an39.png') }}" />
               <div>
                   <img src="{{ asset('assets/images/N2/LivingThings/an35.png') }}" />
                   <img src="{{ asset('assets/images/N2/LivingThings/an41.png') }}" />
                </div>
                <img src="{{ asset('assets/images/N2/LivingThings/an37.png') }}" />
            </div>
            <h2 class="stroke title">We know that people and dogs are <span class="text-white">animals</span>.<br/>We also know that <span class="text-white">animals</span> are <span class="text-white">living things</span>.</h2>
    </div>



    {{-- slide 27 --}}
     <div class="flex flex-col items-center justify-center slide hidden">
        <div class="flex items-center">
                  <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an12.png') }}" class="h-[200px]" />
                <h2 class="text-white text-[30px]">Baby</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an23.png') }}" class="h-[200px]" />
                <h2 class="text-white text-[30px]">Young/child</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an29.png') }}" class="h-[200px]" />
                <h2 class="text-white text-[30px]">Adult</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an33.png') }}" class="h-[200px]" />
                <h2 class="text-white text-[30px]">Elderly Person</h2>
            </div>
        </div>
        <div class="flex items-center">
             <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an25.png') }}" class="w-[200px]" />
                <h2 class="text-white text-[30px]">Baby</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an26.png') }}" class="w-[200px]" />
                <h2 class="text-white text-[30px]">Young/puppy</h2>
            </div>
            <div>
                <img src="{{ asset('assets/images/N2/LivingThings/an27.png') }}" class="w-[200px]" />
                <h2 class="text-white text-[30px]">Adult</h2>
            </div>
        </div>
        <h2 class="title stroke">Note: Invite children take turns to share their changes over time.</h2>

    </div>




    {{-- slde 28 --}}
       <div class="flex flex-col items-center justify-center slide hidden">
        <h2 class="title !text-white stroke">Learning Journal</h2>
        <p class="note">Paste your photos in the correct order to show how you have grown over time.</p>
        <div class="flex items-center gap-10">
            <img src="{{ asset('assets/images/N2/LivingThings/an31.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an31.png') }}" class="h-[400px]" />
            <img src="{{ asset('assets/images/N2/LivingThings/an69.png') }}" />
            <img src="{{ asset('assets/images/N2/LivingThings/an31.png') }}" class="h-[400px]" />
        </div>
    </div>




    {{-- Complete button --}}
    <div class="absolute bottom-[85px]">
        <button
            class="cursor-pointer doneButton w-66 h-[75px] relative bg-[#F8A23A] rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
                    outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
            <span
                class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">DONE</span>
        </button>
    </div>

    {{-- Buttons --}}
    <div id="buttons" class="absolute top-[24px] right-[60px] flex flex-row gap-6 z-40">

        <!-- Return Button -->
        <a class="relative w-24 h-24 button-fade-in bg-slate-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="returnButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/reverse-icon.png') }}" />
        </a>

        <!-- Home Button -->
        <button
            class="relative w-24 h-24 button-fade-in bg-sky-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-teal-800 cursor-pointer"
            id="homeButton">
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] w-14 h-14"
                src="{{ asset('assets/images/pptimages/home-icon.png') }}" />
        </button>

        <!-- Close Button -->
        <button class="relative w-24 h-24 button-fade-in cursor-pointer" id="closeButton">
            <div
                class="absolute inset-0 bg-red-500 rounded-[30px] shadow-lg shadow-inner outline outline-1 outline-red-900">
            </div>
            <img class="absolute top-[6px] left-[8px] w-20 h-10"
                src="{{ asset('assets/images/pptimages/Vector4.png') }}" />
            <div class="absolute top-[10px] left-[19.74px] w-5 h-3.5 bg-white"></div>
            <div id="closeButtonText"
                class="absolute top-[16px] left-[30px] w-11 h-16 text-white text-6xl font-normal font-['Jua']">X
            </div>
        </button>

    </div>

    {{-- next Button --}}
    <div class="absolute bottom-[85px]">

        <button
            class="cursor-pointer nextButton w-66 h-[75px] relative bg-[#F8A23A]  rounded-[30px]  shadow-[3px_4px_7.8px_0px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_0px_rgba(0,0,0,0.25)] 
        outline outline-1 outline-yellow-700 overflow-hidden">
            <div class="bg-white w-[27px] h-[18px] absolute top-[9px] left-[19px]"></div>
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" />
            </div>
            <span class="absolute left-[80px] top-[18px] flex items-center  text-white text-5xl font-bold stroke">NEXT
            </span>
        </button>
    </div>
@endsection


@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(".slide");
            const nextButtons = document.querySelectorAll(".nextButton");
            const returnButton = document.getElementById("returnButton");
            const doneButton = document.querySelector(".doneButton"); // ✅ DONE button

            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // ✅ Agar last slide hai → NEXT button hide, DONE show
                if (index === slides.length - 1) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // ✅ NEXT buttons listener
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;
                        showSlide(currentSlide);
                    }
                });
            });

            // ✅ Return button
            returnButton.addEventListener("click", () => {
                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            });

            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    window.location.href = "{{ route('GrowthSelection') }}";
                });
            }

            // ✅ Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
