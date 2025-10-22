@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="title stroke">
            <h2>Children, what is global warming?
Why are we concerned about global warming?
What causes global warming?</h2>
        </div>
        <p class="note">Note: Encourage children to share what they have leart.</p>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s2.png') }}" />
        </div>
        <h2 class="title stroke">Global warming is the process of Earth getting warmer.
It is the gradual rise in the Earth's temperature.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/ab.png') }}" />
        </div>
        <h2 class="title stroke text-center">With the increased temperature, it causes extreme and
unpredictable weather that affects the living environment
of people, animals and plants.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
 <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s10.png') }}" />
        </div>
        <h2 class="title stroke text-center">Global warming is caused by an increase in greenhouse gases
trapped in the atmosphere.</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
       <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/Globalwarming/s4.png') }}" />
        </div>
        <h2 class="title stroke">Greenhouse gases are produced when fuels such as wood, coal,
oil and gas are used in factories and vehicles.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
         <div class="flex items-end gap-2 justify-center">
              <img src="{{ asset('assets/images/K2/sustain/carbon/c1.png') }}" />
                <img src="{{ asset('assets/images/K2/sustain/carbon/c1a.png') }}" />
                           <img src="{{ asset('assets/images/K2/sustain/carbon/c1a.png') }}" />

        </div>
        <h2 class="title stroke">All of us produce carbon dioxide, one of the greenhouse
gases, through our day-to-day activities.</h2>
    </div>
  {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c2.png') }}" />
        </div>
        <h2 class="title stroke text-center">A footprint is a mark you leave by walking.
The way you live also leaves a mark.</h2>
    </div>
      {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c2.png') }}" />
        </div>
        <h2 class="title stroke text-center">The amount of carbon dioxide you emit to the atmosphere is
your "carbon footprint".</h2>
    </div>


    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let's watch a video to help us understand more about
“”carbon footprint".</h2><br><br>
  <h2 class="title stroke">https://www.youtube.com/watch?v=8q7_aV8eLUE </h2> <br>

        <p class="text-center note">Note: Invite children to watch the video and then talk about what carbon footprint is.
You may replay and pause the video as needed during the discussion.</p>
    </div>
 {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c2.png') }}" />
        </div>
        <h2 class="title stroke text-center">In short, carbon footprint is an idea created to measure how
much carbon dioxide a person, event, organization, service,
place or product emitted to the atmosphere..</h2>
    </div>
  {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="title stroke">Let's see how a person's carbon footprint is calculated at the
following website!</h2><br><br>
  <h2 class="title stroke">https://mycarbonfootprint.spgroup.com.sg/ </h2> <br>

        <p class="text-center note">Note: Youmay use your own or a mock-up household information for this demo.
Explain to children that nowadays there are many carbon footprint calculators online;
for more accurate calculation, choose one that is more relevant to where you live.</p>
    </div>


    {{-- slide 8 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
           <h2 class="text-white">Class Activity 1 </h2>
        <div class="self-start text-start">
            <h2 class="title stroke">Let's do:<br>
Get your daddy or mummy to help you calculate your carbon
footprint. Record the result and then share with the class.</h2>
        </div>
        <p class="note text-center">Note: Send parents a notice that includes the link on the last page (or your desired website) to have them assist their
children to complete the task at home. Remind children to record their results on a paper and then share in the class.
Extend the activity by plotting a graph to show total, highest and lowest carbon footprint in the class.</p>
    </div>

 {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/reduce/r8.png') }}" />
        </div>
        <h2 class="title stroke text-center">We all know that there's only one Earth. So we should do our
part in protecting the Earth for a sustainable future!</h2>
    </div>

{{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c3.png') }}" />
        </div>
        <h2 class="title stroke text-center">One way everyone can do to protect our Earth is by
reducing our carbon footprint.
What do you think you can do to achieve the goal?</h2>
 <p class="note">Note: Encourage children to share their views.</p>
    </div>

{{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
        <h2 class="title stroke text-center">As a suggestion, you can reduce your carbon footprint by
<span class="text-white"> energy and natural resources </span>
in any way possible.</h2> <br><br>
 <p class="note">Note: For the following pages, guide children to discuss and understand how each example/action/habit
reduces our carbon footprint.</p>
    </div>

      {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex gap-2 items-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c4a.png') }}" />
             <img src="{{ asset('assets/images/K2/sustain/carbon/c4b.png') }}" />
        </div>
        <h2 class="title stroke text-center">Turn off lights and electronics when you are not using them to
save electricity and thus reduce your carbon footprint.</h2>
    </div>
{{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c6.png') }}" />
        </div>
        <h2 class="title stroke text-center">Turn off the faucet while brushing your teeth or washing
dishes to save water and thus reduce your carbon footprint.</h2>
    </div>

      {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex gap-2 items-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c7a.png') }}" />
             <img src="{{ asset('assets/images/K2/sustain/carbon/c7b.png') }}" />
        </div>
        <h2 class="title stroke text-center">Use energy-efficient lights and electronics to conserve energy
and thus reduce your carbon footprint.</h2>
 <p class="note">Note: Explain that every country has its own energy efficiency label.</p>
    </div>
{{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c8.png') }}" />
        </div>
        <h2 class="title stroke text-center">Share or borrow things like books and toys from friends
rather than buy new ones to conserve natural resources
and thus reduce your carbon footprint.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c9.png') }}" />
        </div>
        <h2 class="title stroke text-center">Practise the three 'R's on a regular basis to keep excess waste
out of landfills and thus reduce your carbon footprint.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
        <h2 class="title stroke text-center">You can also reduce your carbon footprint by
<span class="text-white">travelling wisely </span>.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c9.png') }}" />
        </div>
        <h2 class="title stroke text-center">Travelling on any fuel-powered vehicle results in greenhouse
gas emissions. Walk, ride a bicycle or take public
transportation instead of drive a car to conserve fuel
and thus reduce your carbon footprint.</h2>
    </div>
 {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
        <h2 class="title stroke text-center">You can reduce your carbon footprint by
<span class="text-white">being a responsible consumer </span> too.</h2><br><br>
<p class="note">Note: For the following pages, guide children to discuss and understand how each example/action/habit
reduces our carbon footprint.</p>
    </div>
{{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c11.png') }}" />
        </div>
        <h2 class="title stroke text-center">Growing, producing, processing, packaging, delivery and
distribution of food and products we consume
result in greenhouse gas emissions
from farms, factories, trucks, grocery stores and more.</h2>
    </div>
{{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c12.png') }}" />
        </div>
        <h2 class="title stroke text-center">Buying food and products produced locally will reduce your
carbon footprint.</h2>
    </div>
{{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c13.png') }}" />
        </div>
        <h2 class="title stroke text-center">Growing some food for your own use will also reduce
your carbon footprint.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c14.png') }}" />
        </div>
        <h2 class="title stroke text-center">Do you know that eating less meat will also reduce your carbon
footprint?</h2><br>
<p class="note">Note: Guide children to talk about meat (types, health benefits, nutrients) and how consuming less meat reduces our
carbon footprint; guide them to understand that protein can also be found in legumes (plants; healthier source).</p>
    </div>
{{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c15.png') }}" />
        </div>
        <h2 class="title stroke text-center">Besides global warming, out Earth is also facing the
problem of population growth,</h2>
    </div>
{{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c16.png') }}" />
        </div>
        <h2 class="title stroke text-center">By 2050, the global population is expected to hit 10 billion
people. More food needs to be produced to feed everyone.</h2>
    </div>
{{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c17.png') }}" />
        </div>
        <h2 class="title stroke text-center">Unfortunately, there is not enough land for us to grow food
now for future populations.</h2>
    </div>
 {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c18.png') }}" />
        </div>
        <h2 class="title stroke text-center">So in the years to come, people must look for alternative ways
to grow and produce food.</h2><br>
<p class="note">Note: Guide children to view and understand this video <span class="title stroke"> //www.youtube.com/watch?v=2ueVw83Plec)</span>.</p>
    </div>
{{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c19.png') }}" />
        </div>
        <h2 class="title stroke text-center">Our future food trend that has already started
is plant-based meat.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c20.png') }}" />
        </div>
        <h2 class="title stroke text-center">Substitutes like legumes (peas, beans, lentils), eggplants,
mushrooms and jackfruits are used to make plant-based meat.</h2>
    </div>
{{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
        <h2 class="text-white">Class Activity 2</h2><br>
        <h2 class="title stroke text-center">Let's do:<br>

Let's learn how to make a kind of plant-based meat and 
taste it.</h2><br><br>
<p class="note">Note: You may choose other recipes for this activity but remember to use natural ingredients to make 
up the taste of the meat; avoid ingredients that may trigger food allergy and food intolerance.</p>
    </div>
{{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
        <h2 class="title stroke text-center">Steps:<br>
1. Name the ingredients. Which ingredient is a source of
     protein?</h2>
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c21.png') }}" />
        </div>
<p class="note">Note: The ingredients in this recipe are cauliflowers, eggplants, carrots, onion, garlic, basil, crushed pumpkin 
seeds, cinnamon powder and cumin. Explain to children the nutrients that each ingredient contains.</p>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
        <h2 class="title stroke text-center">Steps:<br>
2. Cut all the main ingredients into smaller pieces.</h2>
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c21.png') }}" />
        </div>
<p class="note">Note: Guide children to do the step using the kid-safe knives.</p>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
        <h2 class="title stroke text-center">Steps:<br>
3. Use a food processor to process all the main ingredients
     until finely chopped.</h2>
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c21.png') }}" />
        </div>
<p class="note">Note: Assist children in handling the food processor.</p>
    </div>
     {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
        <h2 class="title stroke text-center">Steps:<br>
4. Transfer all the finely chopped ingredients into a mixing
     bowl.<br>
5. Add a bit of cumin and cinnamon powder into the mixing
     bowl and stir to combine the mixture.</h2>
<p class="note">Note: Guide children to do the steps.</p>
    </div>
     {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
        <h2 class="title stroke text-center">Steps:<br>
6. Pan fry the mixture over medium-high heat until the
     moisture has evaporated and the vegetables are cooked
     (about 6-8 minutes).<br>
7. Add the crushed pumpkin seeds into the pan to combine with
     the mixture.<br>
8. Pan fry for 1 minute and the meat is ready for cooking
     dishes.</h2>
<p class="note">Note: Adult will do the steps and explain to children. You may consider film these steps to show children.</p>
    </div>
 {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
        <h2 class="title stroke text-center">Steps:<br>
9. Shape the meat into meatballs or patties.<br>
10. Use them in soups, pasta or burgers.<br>
11. Taste the meat. Do you like it?</h2>
<p class="note">Note: Adult will do step 10 and explain to children.</p>
    </div>
{{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c22.png') }}" />
        </div>
        <h2 class="title stroke text-center">Besides plant-based meat, scientists use a small sample of
animal tissue to culture lab-grown meat,
which is also known as cultured meat.</h2>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c23.png') }}" />
        </div>
        <h2 class="title stroke text-center">There are many possibilities for the future of food.</h2><br>
<p class="note">Note: If time permit, guide children to search for related information online.</p>
    </div>
    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/carbon/c24.png') }}" />
        </div>
        <h2 class="title stroke text-center">Anyway, the food of the future will be sustainable (produced
with a smaller carbon footprint), healthier (nutritious, avoid
food intolerances and allergies) and in sufficient quantities
(prevent food shortages).</h2>
    </div>







<!-- Video Trigger Button -->
        <div data-property-1="Default"
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2">
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
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2">
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
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2">
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
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2">
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
            class="absolute top-1/2 right-[80px] z-30 h-24 w-24 -translate-y-1/2">
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


 <div id="buttons" class="absolute right-[60px] flex flex-row gap-6 ">

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
                        window.location.href = "{{ route('carbonSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
