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
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
             <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" />
        </div>
        <div class="title stroke">
            <h2>Children, do you remember what global warming is?</h2>
            <p class="note">Note: Encourage children to share what their answers.</p>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
           <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" />
        </div>
        <h2 class="title stroke">Global warming is the process of Earth getting warmer
and the increase in temperature.</h2><br>
<p class="note">Note: Explain that climate means the weather over a longer period of time.</p>
    </div>


    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
           <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s10.png') }}" />
        <h2 class="title stroke text-center">Global warming is caused by the increase in greenhouse gases<br>
trapped in the atmosphere.</h2>
<p class="note">Note: Encourage children to share their thoughts with the class.</p>
    </div>
    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
           <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s10.png') }}" />
        <h2 class="title stroke text-center">This is known as global warming.
Make a guess - What causes Earth's temperature to rise?</h2>
 <p class="note">Note: Encourage children to share their thoughts with the class.</p>
    </div>
{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
           <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" />
        </div>
        <h2 class="title stroke">Global warming is the process of Earth getting warmer
and the increase in temperature.</h2><br>
<p class="note">Note: Explain that climate means the weather over a longer period of time.</p>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
           <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s16.png') }}" />
           <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s18.png') }}" />
           <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s23.png') }}" />
        </div>
        <h2 class="title stroke">With the increased temperature, it affects the land, animals
and plants. When glaciers melt, we will be affected too.</h2>
    </div>

    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" />
        <h2 class="title stroke">Do you know that besides the increasing greenhouse gases,
Earth is facing another major problem?</h2>
<p class="note">Note: Encourage children to brainstorm.</p>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
             <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" />
        <h2 class="title stroke">Earth’s natural resources are running out!</h2>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" />
        <h2 class="title stroke">Do you know what natural resources are?
Can you name some examples of natural resources?</h2>
<p class="note">Note: Encourage children to share their answers.</p>
    </div>



    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" />
        <h2 class="title stroke">Natural resources are things found in nature
which can be used by people.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" />
        <h2 class="title stroke">Trees, sun, coal, fish, water, plants and animals
are examples of natural resources.</h2>
    </div>

     {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a2.png') }}" />
        <h2 class="title stroke">People need natural resources to stay alive.</h2>
        <p class="note">Note: Teacher can share that people need air, water and food to stay alive.
Food comes from animals and plants.</p>
    </div>
 {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" />
        <h2 class="title stroke">However, natural resources are running out.
People are using them faster than they can recover.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" />
        <h2 class="title stroke">When all the natural resources run out,
no one can live on Earth anymore.</h2>
<p class="note">Note: Teacher can explain that the lives of animals, plants and humans will be affected due to
the lack of clean water, clean air and food.</p>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s1.png') }}" />
        <h2 class="title stroke">We need to make the natural resources sustainable..</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Do you know what is the meaning of
sustainable?.</h2><br>
        <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>
{{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a3.png') }}" />
        <h2 class="title stroke">Imagine that you have a jar of cookies in class.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a3.png') }}" />
        <h2 class="title stroke">Whenever children take cookies from the jar,
the cookie jar refills itself.</h2>
    </div>
 {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a3.png') }}" />
        <h2 class="title stroke">The cookies will never run out! It’s like magic!</h2>
    </div>
 {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a3.png') }}" />
        <h2 class="title stroke">In this case, the cookies are sustainable. This means that
there will still be cookies after a long time.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a4.png') }}" />
        <h2 class="title stroke">But in the real world, there isn't any magic cookie jars. The<br>
number of cookies in the jar will decrease when we take them.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a4.png') }}" />
        <h2 class="title stroke">The jar will be empty if we continue to take the<br>
cookies and no one refills it..</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" />
        <h2 class="title stroke">Just like the cookies, natural resources will run out
if we don’t do anything to ‘refill’ them.</h2>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a2.png') }}" />
        <h2 class="title stroke">We need to make natural resources sustainable
so that people can continue to live on Earth.</h2>
    </div>
      {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let’s find out why natural resources are important to us.</h2>
    </div>
  {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img class="w-140"src="{{ asset('assets/images/K2/sustain/sustainability/a5.png') }}" />
        <h2 class="title stroke">Let's look at one of the natural resources - trees. How will
Earth be affected when trees are being chopped down?</h2><br>
  <p class="note">Note: Encourage children to share their thoughts.</p>
    </div>
{{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="note">Class Activity 1</h2><br>
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a6.png') }}" />
        <h2 class="title stroke">Let's find out:
What do you think happens when trees are chopped down?</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
  <h2 class="title stroke">Let's do:<br>
1. Set up as shown. Label the bottles as A, B and C from left
to right.</h2>
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a6.png') }}" /><br>
             <p class="note">Note: Click on each bottle label to explain to children what each represents.</p>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke">Let's do:<br>
2. Prepare 3 cups of water.<br>
3. Observe the water which is being collected below each<br>
    bottle.<br>
4. Pour the cup of water at the end of bottle one by one.<br>
5. Observe the colour of the water collected and make<br>
    comparisons.<br>
6. Draw your observations in the learning journal.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img class="w-140"src="{{ asset('assets/images/K2/sustain/sustainability/a7.png') }}" />
        <h2 class="title stroke">As seen in the experiment, the water collect from bottle C is
dirtier compared to the water collected from bottle A.</h2><br>
  <p class="note">Note: Teacher can prompt children to think of reasons why the water collected is different and why.</p>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a8.png') }}" />
        <h2 class="title stroke">Trees and plants haves roots that hold onto the soil.</h2>
    </div>
        {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a8.png') }}" />
        <h2 class="title stroke">Whenever it’s raining, soil will not be washed away..</h2>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a9.png') }}" />
        <h2 class="title stroke">Similarly, for places with some trees,<br>
the roots of the trees hold on to the soil.</h2>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a9.png') }}" />
        <h2 class="title stroke">The fallen leaves and twigs also helps to reduce<br>
the amount of soil being washed away during rainy days.</h2>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a10.png') }}" />
        <h2 class="title stroke">When there are no trees,<br>
there is nothing to hold on to the soil.</h2>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a10.png') }}" />
        <h2 class="title stroke">When it rains, the rainwater carries the soil into the sea.<br>
This causes the sea to be dirty.</h2>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a11.png') }}" />
        <h2 class="title stroke">The lives of the sea creatures and animals<br>
will be affected by dirty water.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img class="w-140"src="{{ asset('assets/images/K2/sustain/sustainability/a2.png') }}" />
        <h2 class="title stroke">This will affect us as we need water and food to live.</h2><br>
  <p class="note">Note: Teacher can explain that the dirty water may cause the fishes and animals to be sick.<br>
Then it may cause a decrease in the amount of food available for us. Dirty water<br>
also affect our lives as we need water too.</p>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a12.png') }}" />
        <h2 class="title stroke">Trees also help to clean up the air.<br>
Trees take in the carbon dioxide, one of the greenhouse gases,<br>
and covert them into healthier air, oxygen.</h2>
    </div>
      {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a12.png') }}" />
        <h2 class="title stroke">Therefore, trees are important to Earth.</h2>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" />
        <h2 class="title stroke">Similarly, other natural resources also play important
roles on Earth.</h2>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a13.png') }}" />
        <h2 class="title stroke">Coal needs a very long time to be formed.<br>
If people keep using coal, it will run out very soon.</h2>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" />
        <h2 class="title stroke">Similarly, if people consume food faster than nature can
replenish, there will not be any food left in the future.</h2>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" />
        <h2 class="title stroke">It is important to use these natural resources carefully<br>
so that they will be sustainable and available<br>
even after a long time.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a1.png') }}" />
        <h2 class="title stroke">In the next lesson, we will look at how we can do our part in
making natural resources sustainable.</h2>
    </div>
      {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
           <h2 class="note">Learning Journal</h2><br>
            <img src="{{ asset('assets/images/K2/sustain/sustainability/a14.png') }}" />
    </div>
        {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                1. (A) Use a pencil to make a patch of dark mark on a paper.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f3.png') }}" />
        <p class="note text-center">Note: Advise A to darken the patch by shading the patch again and again.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 16 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                2. (B) Rub a fingertip over the pencil mark to stain it.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f4.png') }}" />
        <p class="note text-center">Note: Advise B to ensure that their fingertips have an even dark mark.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 17 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                3. (C) Cut and stick a piece of clear tape on the stained fingertip (of B).</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f5.png') }}" />
        <p class="note text-center">Note: Advise C to hold only an edge of the tape and stick the tape flat on the fingertip
            of B.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                4. (C) Carefully remove the tape from the fingertip (of B)
                and paste it on the learning journal (of B).</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f6.png') }}" />
        <p class="note text-center">Note: Remind C to paste the tape in the correct place of B's fingerprint record.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>


    {{-- Slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                5. (A) Use a wet towel to clean the fingertip (of B).</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f7.png') }}" />
        <p class="note text-center">Note: Explain to children that this is to avoid possible messiness when taking prints of
            other fingers.</p>
        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2 cursor-pointer rounded-[30px] bg-sky-500 shadow-[3px_4px_7.8px_rgba(0,0,0,0.25)] shadow-[inset_3px_-4px_4px_rgba(0,0,0,0.25)] outline outline-1 outline-cyan-900">
            <img src="/assets/images/pptimages/Vector4.png" class="absolute top-[6px] left-[8px] h-10 w-20" />
            <div class="absolute top-[10px] left-[19.74px] h-3.5 w-5 bg-white"></div>
            <img class="absolute top-[24px] left-[22px] h-14 w-14" src="/assets/images/pptimages/play.png" />
        </div>
    </div>

    {{-- Slide 18 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                6. (A, B & C) Repeat the steps for other fingers.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f8.png') }}" />
        <p class="note text-center">Note: Have children change their roles to help one another complete the fingerprint
            record.</p>
    </div>


    {{-- Slide 19 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                7. Observe your fingerprints.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f2.png') }}" />
        <p class="note text-center">Note: Have children observe and compare their own set of fingerprints on the record.
        </p>
    </div>




    {{-- Slide 20 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f2.png') }}" />
        <h2 class="title stroke">What do you observe: <br>
            Are there similarities between your fingerprints?</h2>
    </div>


    {{-- Slide 21 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f2.png') }}" />
        <h2 class="title stroke">What do you observe: <br>
            Do your left and right hands’ fingerprints look alike?</h2>
    </div>



    {{-- Slide 22 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do: <br>
                8. Observe your fingerprints with friends.</h2>
        </div>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f9.png') }}" />
        <p class="note">Note: Have children observe and compare their fingerprints with friends.</p>
    </div>


    {{-- Slide 24 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f9.png') }}" />
        <h2 class="title stroke text-start">What do you observe: <br>
            Do you find anyone with the same fingerprints as yours?</h2>
    </div>


    {{-- Slide 25 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="title stroke text-start">What do you learn: <br>
            What are the similarities between different fingerprints?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f9.png') }}" />
        <p class="note">Note: Explain to children that the lines on the tips of our fingers or thumbs are called ridges.
        </p>
    </div>


    {{-- Slide 26 --}}
    <div class="slide hidden flex flex-col items-center justify-center gap-y-2">
        <h2 class="title stroke text-start">What do you learn: <br>
            Do you find any two fingerprints are exactly same?</h2>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f9.png') }}" />
    </div>


    {{-- Slide 27 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f10.png') }}" />
        <h2 class="title stroke">Through the activity, we know that fingerprints
            are ridges on the tips of our fingers and thumbs.</h2>
    </div>

    {{-- Slide 28 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f11.png') }}" />
        <h2 class="title stroke">We also know that no two fingerprints are exactly alike.</h2>
    </div>

    {{-- Slide 29 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f11.png') }}" />
        <h2 class="title stroke">Therefore, individual fingerprints are unique
            and no two people have the same fingerprints.</h2>
    </div>

    {{-- slide 30 --}}
    <div class="slide  hidden flex flex-col items-center justify-center gap-y-4">
        <h2 class=" title stroke !text-white">Learning Journal</h2>
        <div class="w-[836px] h-fit bg-cover bg-center p-[20px] flex flex-col justify-center items-center"
            style="background-image: url('{{ asset('assets/images/pptimages/dark4.png') }}');">
            <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f12.png') }}" />
        </div>
    </div>


    {{-- ====================================== --}}
    {{-- Buttons --}}
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


 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

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
            <div class="absolute left-[8.22px] top-[3.17px] "> <img src="/assets/images/pptimages/Vector4.png" /> </div>
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
            const doneButton = document.querySelector(".doneButton");

            // Get all info/click buttons (info-btn1, info-btn2, click-btn1, click-btn2, etc.)
            const infoButtons = document.querySelectorAll("[class*='info-btn'], [class*='click-btn']");

            let currentSlide = 0;
            let parentSlideIndex = null;
            let isViewingInfoSlides = false;
            let currentInfoClass = null; // Track which info/click class we're viewing

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });

                // Check if last slide OR last info/click slide
                const isLastSlide = index === slides.length - 1;
                const isLastInfoSlide = isViewingInfoSlides && !hasNextInfoSlide(index);

                if (isLastSlide || isLastInfoSlide) {
                    nextButtons.forEach(btn => btn.classList.add("hidden"));
                    if (doneButton) doneButton.classList.remove("hidden");
                } else {
                    nextButtons.forEach(btn => btn.classList.remove("hidden"));
                    if (doneButton) doneButton.classList.add("hidden");
                }
            }

            // Check if there's another info/click slide with same class after current one
            function hasNextInfoSlide(currentIndex) {
                if (!currentInfoClass) return false;

                for (let i = currentIndex + 1; i < slides.length; i++) {
                    if (slides[i].classList.contains(currentInfoClass)) {
                        return true;
                    }
                }
                return false;
            }

            // Get info/click class from button (info-btn1 → , click-btn1 → click1)
            function getInfoClassFromButton(button) {
                const classList = Array.from(button.classList);

                // Check for info-btn pattern
                const infoBtnClass = classList.find(cls => cls.startsWith('info-btn'));
                if (infoBtnClass) {
                    const number = infoBtnClass.replace('info-btn', '');
                    return 'info-slide' + number;
                }

                // Check for click-btn pattern
                const clickBtnClass = classList.find(cls => cls.startsWith('click-btn'));
                if (clickBtnClass) {
                    const number = clickBtnClass.replace('click-btn', '');
                    return 'click' + number;
                }

                return null;
            }

            // Info/Click button handlers
            infoButtons.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault(); // Prevent default anchor behavior

                    parentSlideIndex = currentSlide;
                    isViewingInfoSlides = true;
                    currentInfoClass = getInfoClassFromButton(btn);

                    // Find the first slide with matching info/click class
                    for (let i = 0; i < slides.length; i++) {
                        if (slides[i].classList.contains(currentInfoClass)) {
                            currentSlide = i;
                            showSlide(currentSlide);
                            break;
                        }
                    }
                });
            });

            // NEXT button - skip info/click slides if not viewing them
            nextButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    if (currentSlide < slides.length - 1) {
                        currentSlide++;

                        // Skip info/click slides if not viewing them
                        while (!isViewingInfoSlides &&
                            currentSlide < slides.length &&
                            isInfoSlide(slides[currentSlide])) {
                            currentSlide++;
                        }

                        // If viewing info/click slides, only show slides with current class
                        if (isViewingInfoSlides) {
                            while (currentSlide < slides.length &&
                                !slides[currentSlide].classList.contains(currentInfoClass)) {
                                currentSlide++;
                            }
                        }

                        if (currentSlide < slides.length) {
                            showSlide(currentSlide);
                        }
                    }
                });
            });

            // Check if slide is any info/click slide (info-slide1, info-slide2, click1, click2, etc.)
            function isInfoSlide(slide) {
                return Array.from(slide.classList).some(cls =>
                    (cls.startsWith('info-slide') && cls.match(/^info-slide\d+$/)) ||
                    (cls.startsWith('click') && cls.match(/^click\d+$/))
                );
            }

            // Return button
            returnButton.addEventListener("click", () => {
                if (isViewingInfoSlides && currentSlide > 0) {
                    // Check if previous slide is also same info/click class
                    let prevSlide = currentSlide - 1;

                    // Find previous slide with same info/click class
                    while (prevSlide >= 0 && !slides[prevSlide].classList.contains(currentInfoClass)) {
                        prevSlide--;
                    }

                    if (prevSlide >= 0 && slides[prevSlide].classList.contains(currentInfoClass)) {
                        currentSlide = prevSlide;
                        showSlide(currentSlide);
                    } else {
                        // No more info/click slides, return to parent
                        currentSlide = parentSlideIndex;
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    }
                } else if (currentSlide > 0) {
                    currentSlide--;

                    // Skip info/click slides when going back
                    while (currentSlide > 0 && isInfoSlide(slides[currentSlide])) {
                        currentSlide--;
                    }

                    showSlide(currentSlide);
                }
            });

            // DONE button handler
            if (doneButton) {
                doneButton.addEventListener("click", () => {
                    if (isViewingInfoSlides && parentSlideIndex !== null) {
                        // Return to parent slide
                        currentSlide = parentSlideIndex;
                        isViewingInfoSlides = false;
                        currentInfoClass = null;
                        parentSlideIndex = null;
                        showSlide(currentSlide);
                    } else {
                        // Navigate to route
                        window.location.href = "{{ route('sustainSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
