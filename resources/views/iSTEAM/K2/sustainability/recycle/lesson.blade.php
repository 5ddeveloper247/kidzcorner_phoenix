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
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" />
        </div>
        <div class="title stroke">
            <h2>Children, do you remember the three ‘R’s?</h2>
            <p class="note">Note: Encourage children to share what they know about reduce and reuse.</p>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r24.png') }}" />
        </div>
        <h2 class="title stroke">Reduce is about throwing less waste!</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50%] ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r3.png') }}" class="w-130" />
        </div>
        <h2 class="title stroke text-center">When we throw lesser rubbish, there will be lesser rubbish.
Less rubbish will end up in the sea.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
       <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r17.png') }}" />
        </div>
        <h2 class="title stroke text-center">Reusing is about looking for ways to use the item again.</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
     <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/recycle/s1.png') }}" />
        </div>
        <h2 class="title stroke">We can reuse old bottles or make new bag out of old clothes.
Artists reuse old items to create new artworks.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" />
        </div>
        <h2 class="title stroke">What about recycle? What does that mean?</h2><br>
        <p class="note">Note: Encourage children to share what they know about recycle.</p>
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" />
        </div>
        <h2 class="title stroke"> <span class="text-white"> Recycle </span> using rubbish to make new things that
can be used again.</h2>
    </div>

 {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke"> Do you know the
process of recycling?</h2><br><br>
<p class="note"> Note: Encourage children to share their answers.</p>
    </div>
{{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/reduce/s2a.png') }}" />
        </div>
        <h2 class="title stroke">Recyclable items such as bottles should be washed and cleaned
before being discarded at the recycling bins.</h2><br>
        <p class="note">Note: Teacher can explain it is important to wash before throwing the bottles. 
 <h4 class="title stroke">Click here </h4>  more information.</p>
    </div>
 {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="title stroke"> Additional information about washing recyclable rubbish:<br>

What happens if I don't wash my recycling?<br>

Food residue is a form of contamination. It gives off bad smell and may attract pests to the recycling bin. 
The recycling facility will not be able to recycle the items filled with pests.<br>

Food residue from one container may also contaminate all the other rubbish in the track. <br>
The recycling facility will not be able to process the contaminate rubbish too. All the rubbish will then be send to the landfill.
    </div>

{{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/recycle/s2.png') }}" />
        </div>
        <h2 class="title stroke"> <span class="text-white" >Recyclable </span> items should be sorted out by types. </h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/recycle/s2.png') }}" />
        </div>
        <h2 class="title stroke"> <span class="text-white" >Metal,</span> paper, <span class="text-white" >plastic </span> and glass are some
examples of <span class="text-white" >recyclable </span></h2>
    </div>
{{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-center gap-5">
         <img src="{{ asset('assets/images/K2/sustain/recycle/s3.png') }}" />
        </div>
        <h2 class="title stroke">Recyclable items are then discarded in recycling bins.</h2><br>
        <p class="note"> Note: Ask children if they have seen or used these bins before.</p>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-center gap-5">
         <img src="{{ asset('assets/images/K2/sustain/recycle/s4.png') }}" />
        </div>
        <h2 class="title stroke">Recycling trucks collect the different types of recyclables and
send them to the recycling factories accordingly.</h2>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/recycle/s2.png') }}" />
        </div>
        <h2 class="title stroke"> The recyclables are sorted, checked and washed before being
processed to make into new products.</h2>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/recycle/s5.png') }}" />
        </div>
        <h2 class="title stroke">Glass items are crashed and melted. The molten glass are
then placed into molds to make new glass bottles and jars.</h2>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/recycle/s6.png') }}" />
        </div>
        <h2 class="title stroke">Old tins and cans are melted to make new cans and tins.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/recycle/s7.png') }}" />
        </div>
        <h2 class="title stroke"> <span class="text-white" >Plastics </span> are squashed and shredded in factories.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/recycle/s8.png') }}" />
        </div>
        <h2 class="title stroke"> Shredded plastics are moulded into new containers or made
into products such as clothes, toys and other items.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/recycle/s9.png') }}" />
        </div>
        <h2 class="title stroke"> Paper products are mixed and soaked in chemicals. The
mixture is then dried and rolled out as new sheets of paper.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/recycle/s10.png') }}" />
        </div>
        <h2 class="title stroke"> Boxes, books, newspaper and toilet rolls are some examples
made from recycled paper.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <h2 class="!text-white title stroke">Class Activity</h2>
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/recycle/s11.png') }}" />
        </div>
        <h2 class="title stroke"> Let’s find out:
How do we recycle paper?</h2>
    </div>

 {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <h2 class="title stroke"> Let’s do:<br>
1. Prepare the materials needed for the activity.</h2>
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/recycle/s12.png') }}" />
        </div>
    </div>
{{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <h2 class="title stroke"> Let's do:<br>
2. Tear used paper into small pieces and soak them in water
     for 30 minutes.</h2>
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/recycle/s13.png') }}" />
        </div>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <h2 class="title stroke"> Let's do:<br>
3. Blend the soaked paper in the blender.</h2>
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/recycle/s14.png') }}" />
        </div>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <h2 class="title stroke"> Let's do:<br>
4. Set up the tray as seen in the video below and prepare the
     pulp mixture.</h2>
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/recycle/s15.png') }}" />
        </div>
    </div>
{{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <h2 class="title stroke">Let's do:<br>
5. Pour the pulp mixture in the frame. Move the frame to let
    the pulp settle. Arrange the flowers and leaves as desired.</h2>
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/recycle/s16.png') }}" />
        </div>
    </div>
{{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <h2 class="title stroke">Let's do:<br>
6. After one hour, follow the steps in the video on drying the
     pulp mixture.</h2>
         <div class="flex items-center gap-5">
           <img src="{{ asset('assets/images/K2/sustain/recycle/s17.png') }}" />
        </div>
    </div>
    
    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" />
        </div>
        <div class="title stroke">
            <h2>Recycling helps to create new things from old items.
This reduces the usage of natural resources!</h2>
        </div>
    </div>
    
    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" />
        </div>
        <div class="title stroke">
            <h2>If everyone practices the three 'R's, there will
be lesser pollution on Earth! </h2>
        </div>
    </div>
    
    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="flex items-center gap-5">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" />
        </div>
        <div class="title stroke">
            <h2>Earth will be a better environment for everyone to live in!
Let's do our parts together!
        </div>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="!text-white title stroke">Class Activity</h2>
        <img src="{{ asset('assets/images/K2/livingthings/fingerprints/f2.png') }}" />
        <h2 class="title stroke">Let's find out: <br>
            How to make our own set of fingerprints?
            Do we have the same fingerprints?</h2>
        <p class="text-center note">Note: Organise children into groups of 3 to do the activity (role A, B & C).
            Have them clean and dry their hands first.</p>
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
                        window.location.href = "{{ route('recycleSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
