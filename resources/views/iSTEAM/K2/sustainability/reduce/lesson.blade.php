@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
       
        <div class="title stroke">
            <h2>Children, let’s recap on what we have
learned about pollution.</h2><br><br><br>
<p class="note">Note: Encourage children to share.</p>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r1.png') }}" />
        </div>
        <h2 class="title stroke">Look at these pictures.
These are pictures of the different types of pollution.</h2><br>
<p class="note">Note: Encourage children to recap and share what they know.</p>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50%] ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r1.png') }}" />
        </div>
        <h2 class="title stroke text-center"> <span class="text-white"> Pollution </span> is when gases, <span class="text-white">  chemicals </span>, oil spills and trash are
introduced into the environment in large amounts that is
harmful or poisonous to humans, animals and plants.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/pollution/p2.png') }}" />
        </div>
        <h2 class="title stroke text-center">Harmful smoke and chemicals are also released when such
fuels are burnt, causing air pollution.</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r2.png') }}" />
        </div>
        <h2 class="title stroke">The sea is polluted with oil spill.
Oil spill are harmful to the environment and animals.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/pollution/p9.png') }}" />
        </div>
        <h2 class="title stroke">The sea is also polluted with rubbish.</h2>
    </div>



    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/pollution/p20.png') }}" />
        </div>
        <h2 class="title stroke">Children, how did these rubbish end up in the sea?</h2>
        <p class="text-center note">Note: Encourage children to guess.</p>
    </div>

    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r3.png') }}" />
        </div>
        <h2 class="title stroke">Plastic bags, food wrappers and straws are common items
 that we throw in our bins.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r4.png') }}" />
        </div>
        <h2 class="title stroke">When rubbish is being transported, rubbish that's made of
plastics are often blown away because it's so lightweight.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r5.png') }}" />
        </div>
        <h2 class="title stroke">The collected rubbish are placed into landfills..</h2>
    </div>
     {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r6.png') }}" />
        </div>
        <h2 class="title stroke">Storms may wash these plastics from landfills into drains or
rivers. These plastics will then end up in the sea.</h2>
    </div>
    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r7.png') }}" />
        </div>
        <h2 class="title stroke">Fish and animals in the sea get stuck or
choked by the rubbish they found in the sea.</h2>
    </div>
{{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r8.png') }}" />
        </div>
        <h2 class="title stroke">How can we help?</h2><br>
        <p class="text-center note">Note: Encourage children to share their answers.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" />
        </div>
        <h2 class="title stroke">We can do our part by practicing the three 'R's -
<span class="text-white"> Reduce, Reuse and Recycle </span>. Do you know what it means?</h2><br>
        <p class="text-center note">Note: Encourage children to share their understanding on the terms and examples of what they can 
do to protect our environment. Teacher can write down their points on a mahjong paper.</p>
    </div>
 {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r9.png') }}" />
        </div>
        <h2 class="title stroke">Let’s look at how waste can be <span class="text-white"> reduced </span>.</h2>
    </div>
{{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r3.png') }}" />
        </div>
        <h2 class="title stroke">The most direct way to help is to <span class="text-white"> reduced </span> waste!</h2>
    </div>
{{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r3.png') }}" />
        </div>
        <h2 class="title stroke">When we throw less rubbish, there will be less rubbish.
Less rubbish will end up in the sea.</h2>
    </div>
{{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r10.png') }}" />
        </div>
        <h2 class="title stroke">We can use less plastic bags or bring our own bags
when we go shopping.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r11.png') }}" />
        </div>
        <h2 class="title stroke">Buy items with less packaging. This will help to reduce the
amount of rubbish being thrown away.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r12.png') }}" />
        </div>
        <h2 class="title stroke"> Use reusable food containers and utensils
instead of disposable ones.</h2>
    </div>
      {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r13.png') }}" />
        </div>
        <h2 class="title stroke">Using reusable masks also helps to reduce the
amount of waste created.</h2>
    </div>
     {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r14.png') }}" />
        </div>
        <h2 class="title stroke">Walking, riding a bicycle and taking the public transport
instead of driving our cars help to reduce air pollution too!</h2>
    </div>
     {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r15.png') }}" />
        </div>
        <h2 class="title stroke">We should ask for a smaller portion of food if we think the
serving is too much. This helps to reduce food waste.</h2>
    </div>
     {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r16.png') }}" />
        </div>
        <h2 class="title stroke">Let's do:<br>
Fill up the activity sheet with challenges that will <span class="text-white">reduce </span> waste!</h2>
    </div>




    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do:<br>
1. Discuss as a class on things you can do to help to reduce
    waste.<br>
2. Try to have a different challenge from each other.<br>
3. Help each other keep track of their challenges and
    encourage each other to overcome their challenges.</h2>
        </div>
    </div>
    
    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <div class="self-start text-start">
            <h2 class="title stroke">Some examples:<br>
Say 'No' to plastic bags/straws<br>
Empty bowls (Finish all the food/drinks served)<br>
Switch lights off when not in use<br>
Use reusable bags<br>
Save paper (use two sides of the paper)<br>
Walk or ride a bicycle<br>
Use reusable mask/water bottles/shower bags.</h2><br>
<p class="note">Note: There can be other ideas from the children. </p>

        </div>
    </div>
 {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r17.png') }}" />
        </div>
        <h2 class="title stroke">Let’s look at how waste can be <span class="text-white"> reused </span>.</h2>
    </div>
{{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r17.png') }}" />
        </div>
        <h2 class="title stroke">Reusing is about looking for ways to use the item again.</h2>
    </div>
{{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r18.png') }}" />
        </div>
        <h2 class="title stroke">Glass and plastic containers can be reused to store items
such as food or stationery.</h2>
    </div>

    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r19.png') }}" />
        </div>
        <h2 class="title stroke">Old clothes can be passed on to others who need them or be
transformed into bags.</h2>
    </div>
     {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r20.png') }}" />
        </div>
        <h2 class="title stroke">Artist reuse unwanted materials to create artwork.</h2>
        <p class="note">Note: Encourage children to share what materials were used for the art work.</p>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r21.png') }}" />
        </div>
        <h2 class="title stroke">Some artists use artwork to send messages to people.</h2>
        <p class="note">Note: Ask children what materials do they see and what message do they think the artist is trying to say.</p>
    </div>
 {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r21.png') }}" />
        </div>
        <h2 class="title stroke">The message 'Stop cluttering the Baltic Sea' in polish is also
displayed below the sculpture.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r21.png') }}" />
        </div>
        <h2 class="title stroke">The artist wanted to show people that the rubbish they threw
into the Baltic sea end up inside the fishes' stomachs.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r21.png') }}" />
        </div>
        <h2 class="title stroke">Using this artwork, the artist reminds people to be responsible
and take charge of reducing pollution.</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-white text-center">Class Activity 2</h2><br>
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r21.png') }}" />
        </div>
        <h2 class="title stroke">Let's find out:<br>
Create an artwork that can remind people to do their part in
helping Earth.</h2>
    </div>
     {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="text-white text-center">Brainstorming Session</h2><br>
        <h2 class="title stroke"> (1) What have you learned about climate change, global
warming and pollution?<br>
(2) What messages do you want to share with others about
protecting Earth?<br>
(3) What kind of artwork would you like to create?<br>
(4) What materials have you collected and how will you use
them in your artwork?</h2><br><br>
 <p class="note">Note: Teacher to write children's sharing on a large mahjong paper.Teacher to guide children in their thoughts for
their message about protecting earth. Assist children in planning the type of artwork they want to create. It 
can be a 2D or 3D artwork. Encourage children to be creative in using the recycle materials collected.</p>
    </div>
 {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke"> Let's do:<br>
1. Discuss as a class the main message of your artwork.<br>
2. Sketch and design how your artwork will look like.<br>
3. Divide the tasks among groups to work on different parts of
the artwork.<br>
4. Display the artwork. Spread awareness of your message
with peers and visitors. </h2>
    </div>
 {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r22.png') }}" />
        </div>
        <h2 class="title stroke">There will be less pollution when we do our part in reducing
waste and reusing unwanted items.</h2>
    </div>
{{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r24.png') }}" />
        </div>
        <h2 class="title stroke">The three 'R's are the key points to protecting
our Earth!</h2>
    </div>
    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
         <h2 class="text-white">Learning Journal</h2><br>
 <div class="flex items-end gap-2 justify-center">
         <img src="{{ asset('assets/images/K2/sustain/reduce/r23.png') }}" />
        </div>
    </div>


        <!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
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
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
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
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
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
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
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
            class="absolute top-1/2 right-[-10vw] z-30 -translate-y-1/2 video-btn">
      <img src="/assets/images/pptimages/video.png" />
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
    <div class="down-btn-container">
        <button
         class="doneButton">
 <img src="{{ asset('assets/images/pptimages/done.png') }}" />
        </button>
    </div>


 <div id="buttons" class="absolute  flex flex-row gap-6 ">

        <!-- Return Button -->
        <a id="returnButton">
 <img
    src="{{ asset('assets/images/pptimages/return.png') }}" />
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

    {{-- next Button --}}
    <div class="down-btn-container">

        <button
            class="nextButton">
 <img src="{{ asset('assets/images/pptimages/next-btn.png') }}" />
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
                        window.location.href = "{{ route('reduceSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
