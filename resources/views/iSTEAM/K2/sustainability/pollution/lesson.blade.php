@extends('layout.master')
@section('title', 'Dynamic Presentation')
 
@section('content')


    {{-- Slide 1 --}}
    <div class="slide flex flex-col items-center justify-center gap-5 ">
        <div class="title stroke">
            <h2>Children, what do you remember<br>
what clean energy is?</h2><br><br>
<p class="note">Note: Encourage children to share.</p>
        </div>
    </div>



    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e13.png') }}" />
        </div>
        <h2 class="title stroke">Solar energy, wind power and hydropower are
three types of clean energy.</h2>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e1.png') }}" />
        </div>
        <h2 class="title stroke">The sun, wind and water are natural sources that help to
generate clean energy.</h2>
    </div>
     {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
            <img src="{{ asset('assets/images/K2/sustain/energy2/e1.png') }}" />
        </div>
        <h2 class="title stroke">Clean energy is energy generated from natural resources
which do not cause pollution.</h2>
    </div>
     {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
     <img src="{{ asset('assets/images/K2/sustain/energy2/e13.png') }}" />
        </div>
        <h2 class="title stroke">Using clean energy will help natural resources to be sustainable
and protect our Earth from global warming and pollution.</h2>
    </div>


    {{-- Slide 3 --}}
    <div class="slide hidden  flex flex-col items-center justify-between h-[50%] ">
        <h2 class="title stroke text-center">Let's have a better understanding of what pollution is and
how pollution affects Earth.</h2>
    </div>

    {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
    <img src="{{ asset('assets/images/K2/sustain/pollution/p1.png') }}" />
        <h2 class="title stroke text-center">Look at these pictures.
These are pictures of the different types of pollution.</h2>
<p class="note">Note: Encourage children to share what they see and guess how will pollution affect us.</p>
    </div>
     {{-- slide 4 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
    <img src="{{ asset('assets/images/K2/sustain/pollution/p1.png') }}" />
        <h2 class="title stroke text-center"><span class="text-white">Pollution </span>is when gases,<span class="text-white"> chemicals,</span> oil spills and trash are
introduced into the environment in large amounts that is
harmful or poisonous to humans, animals and plants.</h2>
    </div>


    {{-- Slide 5 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
      <img src="{{ asset('assets/images/K2/sustain/pollution/p2.png') }}" />
        <h2 class="title stroke">As seen previously, greenhouse gases are produced when fuels
such as wood and coal are burned in factories and vehicles.</h2>
    </div>


    {{-- slide 6 --}}
    <div class="slide hidden flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/K2/sustain/pollution/p2.png') }}" />
        <h2 class="title stroke">Harmful smoke and chemicals are also released when such
fuels are burnt, causing air pollution.</h2>
    </div>
 {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p3.png') }}" />
        </div>
        <h2 class="title stroke"> Prolonged exposure to the harmful smoke and <span class="text-white">chemicals</span>leads
to many health problems, especially for young children.</h2>
    </div>
{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p3.png') }}" />
        </div>
        <h2 class="title stroke"> <span class="text-white">Air pollution </span>can cause serious damages to
lungs, heart and brains.</h2>
    </div>
{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p4.png') }}" />
        </div>
        <h2 class="title stroke"> Can you guess what this is?</h2><br>
            <p class="note">Note: Encourage children to share their answers.</p>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p4.png') }}" />
        </div>
        <h2 class="title stroke"> This is a picture of oil spill in the sea. Oil spills are hard to
clean up and it is harmful to the environment.</h2>
    </div>
     {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p5.png') }}" />
        </div>
        <h2 class="title stroke"> Oil spills are caused by ship accidents or during the process of
drilling oil rigs to gather oil from the sea bed.</h2>
    </div>
{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p6.png') }}" />
        </div>
        <h2 class="title stroke"> Sea creatures and marine birds are often killed by oil spills.</h2><br>
            <p class="note">Note: Teacher can <span class="title stroke"> click here </span>to share how oil spills are harmful to the animals.</p>
    </div>

{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p6.png') }}" />
        </div>
        <h2 class="title stroke"> Oil spills are sticky.
It sticks onto animal fur and the bird feathers.</h2>
    </div>
{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p6.png') }}" />
        </div>
        <h2 class="title stroke">When the fur or feathers are covered with oil, the animals
and birds are unable to keep warm.</h2>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p6.png') }}" />
        </div>
        <h2 class="title stroke">Animals and birds may die because they are
unable to keep warm.</h2>
    </div>
     {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p7.png') }}" />
        </div>
        <h2 class="title stroke">Other animals such as turtles and fishes may mistaken the oil
spill as food. Some fall sick or die after eating them.</h2>
    </div>
{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p8.png') }}" />
        </div>
        <h2 class="title stroke">Besides oil spills, the sea is also polluted with chemical waste
from inconsiderate factories.</h2>
    </div>
{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p8.png') }}" />
        </div>
        <h2 class="title stroke">When these <span class="text-white"> chemical </span> waste flows into the sea, it poisons the
sea creatures and makes the sea water dirty.</h2>
    </div>
{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p9.png') }}" />
        </div>
        <h2 class="title stroke">The sea is also polluted with rubbish.</h2>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p9.png') }}" />
        </div>
        <h2 class="title stroke">Look at this, what is in the sea? Can the sea be cleaned?</h2>
        <p class="note">Note: Encourage children to share what they see or share their thoughts</p>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="note"> Brainstorming Session </h2><br><br>
        <div class="title stroke">
            <ul>
                <li> How can we clean the polluted sea? How can the rubbish be
     removed from the sea?</li>
<li> What can be used to clean the water?</li>
<li> What are the possible ways to make dirty water clean?</li>

</div>
        <p class="note">Note: Teacher to ask these questions and jot down children's answers on a large piece paper to be<br>
displayed in the class. Teacher can guide and prompt children to think of removing the bigger pieces<br>
of rubbish first then think of other ways to remove the smaller ones.</p>
    </div>
  {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p10.png') }}" />
        </div>
        <h2 class="title stroke">Children, do you know what these are?</h2>
        <p class="note">Note: Encourage children to share what they see or share their thoughts.</p>
    </div>
{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p10.png') }}" />
        </div>
        <h2 class="title stroke">These are different types of <span class="text-white"> filters!
Filters </span> help to remove unwanted substances and only allow
certain substances to pass through them.</h2>
    </div>
    {{-- picturenull --}}
{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p11a.png') }}" />
        </div>
        <h2 class="title stroke">This is a sieve. A sieve acts as a filter to remove
unwanted lumps from the flour.</h2>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p11a.png') }}" />
        </div>
        <h2 class="title stroke">The smooth flour will pass through the sieve
and be used in baking.</h2>
    </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p11.png') }}" />
        </div>
        <h2 class="title stroke">This is a coffee <span class="text-white"> filter </span>paper.
The <span class="text-white"> filter </span> helps to trap coffee grounds on the paper.</h2>
    </div>
{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p11.png') }}" />
        </div>
        <h2 class="title stroke"> Only liquid coffee will be able to flow through
the coffee filter paper.</h2>
        </div>
{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p12.png') }}" />
        </div>
        <h2 class="title stroke">This is a water filter for tap water. This filter helps remove
impurities from the tap water as it flows out of the tap.</h2>
        </div>
{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke items-center">Let’s make a water filter!</h2>
        </div>
        {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="text-white">Class Activity 1 </h2> <br>
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p13.png') }}" />
        </div>
        <h2 class="title stroke">Let's find out:<br>
How can we clean dirty water? Which filter materials are
good for cleaning dirty water?</h2>
        </div>
    {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke">Let's do:<br>
1. Make dirty water by mixing paint, straws, soil, leaves, small
     pieces of rubbish like tissue paper, food wrapper, eraser
     rubbings, coffee, oil, egg shells etc. Ensure it is enough for
     all groups to use.</h2>
     <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p14.png') }}" />
        </div>
        </div>
         {{-- Slide 2 --}}
<div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke">Let's do:<br>
2. Look at the dirty water mixture. Discuss as a class about
     what can be seen in the mixture.<br>
3. How can we remove the rubbish in the mixture? Which
     rubbish is the easiest to remove?<br>
4. Look at the filter materials. Discuss and guess which filter
     materials will help in cleaning the mixture.</h2><br><br>
     <p class="note">Note: Teacher may get children to share why they think certain filter material is good for cleaning up the 
water. You may include children's suggestion in the activity for them to verify if that material does
help in cleaning up. Teacher can continue to jot down children's views on the large paper.</p>
        </div>
 {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="text-white">Class Activity 1 </h2> <br>
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p15.png') }}" />
        </div>
        <h2 class="title stroke">Let's do:<br>
5. In each small groups, choose the filter materials for your
     water filter (choose up to 5 types).<br>
6. Place the bottles as shown.</h2>
        </div>
  {{-- Slide 2 --}}
<div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke">Let's do:<br>
7. Think of the sequence of the filter materials to be placed
     in the bottles. Which is at the bottom and which is at the
     top?<br>
8. Fill up the bottles with the filter materials layer by layer
      as planned.</h2><br><br>
     <p class="note">Note: Engage children in thinking by asking them these questions. Teacher can guide children in scooping 
the filter materials and placing them in the bottles. Ensure that children do not mix them materials.</p>
        </div>
         {{-- Slide 2 --}}
<div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke">Guiding Questions:<br>
. Do you think this material will help to remove the dirt?
. What should be done to remove the bigger pieces of
     rubbish?<br>
. Look at the sizes of the filter materials. Are they the
     same? How can they be placed in order?<br>
. Do you think the order of the filter materials will affect
     how clean the water will be?<br>
. Is the water cleaner after passing through the filter? Is
    the result similar to other groups?<br>
        </h2>
        </div>
 {{-- Slide 2 --}}
<div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke">Let's do:<br>
9. Place the all bottles in a row (including the bottles that
       teacher had prepared).<br>
10. Pour equal amount of dirty water into each filter and wait
       for the water to seep through.<br>
11. Let it sit for a few hours as it may take a long time to
       filter.<br>
12. Compare the water collected from each water filter and
       discuss the results.</h2><br><br>
     <p class="note"> Note: Teacher to remind children that although the water may look cleaner, it has not
gone through cleaning of bacteria so it is still unsafe to drink.</p>
        </div>
         {{-- Slide 2 --}}
<div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke">Let's do:<br>
13. Which water filter works best?<br>
14. What filter materials were used in the bottle that
       produced the cleanest water?<br>
15. Compare the water collected from the teacher's bottles.
       One has activated charcoal and one does not. How is the
       water collected different and what does that show?</h2><br><br>
     <p class="note">Note: Teacher can share that the activated charcoal is used to remove harmful chemicals, smell
and taste in many water filtering machines.</p>
        </div>
 {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p16.png') }}" />
        </div>
        <h2 class="title stroke">Dirty water will need to go through many layers of
filters to get clean.</h2>
        </div>
{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p17.png') }}" />
        </div>
        <h2 class="title stroke">Bigger pieces of rubbish such as straws and food wrapper are
trapped on the top layer filled with large pebbles.</h2>
        </div>
        {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p17.png') }}" />
        </div>
        <h2 class="title stroke">Bigger pieces of rubbish such as straws and food wrapper are
trapped on the top layer filled with large pebbles.</h2>
        </div>
         {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p16.png') }}" />
        </div>
        <h2 class="title stroke">Liquid flows through the different layers of filter materials.
Unwanted substances are trapped in the layers accordingly.</h2>
        </div>
         {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p16.png') }}" />
        </div>
        <h2 class="title stroke">Clean liquid is collected at the bottom of the container.</h2>
        </div>
         {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p18.png') }}" />
        </div>
        <h2 class="title stroke"> The <span class="text-white">liquid</span> was brown and filled with rubbish before going
through the <span class="text-white">filter </span>. The  <span class="text-white">liquid</span> is colourless and clean after
going through the <span class="text-white">filter </span>.</h2>
        </div>
  {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p19.png') }}" />
        </div>
        <h2 class="title stroke"> Do you think this liquid is now safe for us to drink?</h2>
        <p class="note">Note: Encourage children to share their thoughts.</p>
        </div>
        {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p19.png') }}" />
        </div>
        <h2 class="title stroke">No! The liquid still needs to go through cleaning to get rid of
bacteria before it can be safe for drinking.</h2>
        </div>
         {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p9.png') }}" />
        </div>
        <h2 class="title stroke">Similarly, water filters are needed to clean up and remove the
rubbish in the polluted sea water.</h2>
        </div>
        {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p9.png') }}" />
        </div>
        <h2 class="title stroke">The process to clean up the sea is not easy and it is expensive
to have such water filters to make water clean.</h2>
        </div>
        {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p9.png') }}" />
        </div>
        <h2 class="title stroke">However, if everyone does their part and not throw so much
rubbish, the sea can be cleaner!</h2>
        </div>
        {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p20.png') }}" />
        </div>
        <h2 class="title stroke">Let’s take closer look at the rubbish.</h2>
        </div>
        {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p20.png') }}" />
        </div>
        <h2 class="title stroke">What type of rubbish do you see?</h2>
       <p class="note"> Note: Encourage children to share their answers.</p>
        </div>
        {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p20.png') }}" />
        </div>
        <h2 class="title stroke">There are plastic bags, food wrappers, straws, ropes and
plastic baskets.</h2>
        </div>
        {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p20.png') }}" />
        </div>
        <h2 class="title stroke">In fact, most of the rubbish you see here
are made of plastics.</h2>
        </div>
        {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p20.png') }}" />
        </div>
        <h2 class="title stroke"><span class="text-white"> Plastics </span> are harmful  to the environment because
they are <span class="text-white"> non-biodegradable </span>.</h2>
        </div>
        {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p20.png') }}" />
        </div>
        <h2 class="title stroke"><span class="text-white"> Non-biodegradable </span> materials cannot be broken down naturally.
Therefore, they are a form of pollution to Earth.</h2>
        </div>
         {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p21.png') }}" />
        </div>
        <h2 class="title stroke"><span class="text-white"> Biodegradable </span> materials are materials from nature.
These materials will break down naturally over time.</h2>
        </div>
         {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p22.png') }}" />
        </div>
        <h2 class="title stroke">Wood and cotton are examples
of biodegradable materials.</h2>
        </div>
         {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p23.png') }}" />
        </div>
        <h2 class="title stroke">Furniture and papers products such as newspaper and
books are made from wood.</h2>
        </div>
         {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p24.png') }}" />
        </div>
        <h2 class="title stroke">Clothes, bed sheets and bags can be made from biodegradable
materials such as cotton.</h2>
        </div>
        {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke">Let's observe what happens to
<span class="text-white"> non-biodegradable </span> materials and <span class="text-white"> biodegradable</span>
materials in the sea over time.</h2>
        </div>
        {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="text-white">Class Activity 2 </h2>
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p9.png') }}" />
        </div>
        <h2 class="title stroke">Let’s find out:<br>
What happens to paper and plastics in the sea?</h2>
        </div>
  {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke">Let's do:<br>
1. Fill water in the two bottles until they are 3/4 full. 
   Pretend that the water is the sea.</h2>
    <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p25.png') }}" />
        </div>
        </div>
     {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="text-white">Class Activity 2 </h2>
        <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p26.png') }}" />
        </div>
        <h2 class="title stroke">Let's do:<br>
2. Prepare a square piece of plastic sheet cut out from a
     plastic bag and one piece of toilet paper. Ensure both are
     of the same size.<br>
3. Ask children to touch and compare the items.</h2><br>
<p class="note">Note: Teacher tocan take a photo of the items in the bottles for future comparisons.</p>
        </div>
         {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke">Let's do:<br>
4. Put the newspaper in to bottle A and put the plastic sheet
     in to bottle B.</h2>
    <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p27.png') }}" />
        </div>
        </div>
        {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
        <h2 class="title stroke">Let's do:<br>
5. Close the cap and shake the bottles to pretend that there
     are waves in the bottles.<br>
6. Encourage children to compare and discuss on the changes
     they observe after shaking.</h2>
    <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p28.png') }}" />
        </div>
        <p class="note">Note: Teacher can keep the bottles and get children to shake it daily. Observe the changes after on
 week. Get children to compare and observe if there are any changes for the plastic sheet.</p>
        </div>
         {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p29.png') }}" /> 
        </div>
          <h2 class="title stroke">Look at the plastic sheet in the bottle. What do you see?</h2>
        <p class="note">Note: Encourage children to share what theysee.</p>
        </div>
  {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p29.png') }}" /> 
        </div>
        <h2 class="title stroke">Plastic is non-biodegradable.
This means that it cannot be broken down.</h2>
        </div>
{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p29.png') }}" /> 
        </div>
        <h2 class="title stroke">The plastic doesn't change no matter how hard you shake the
bottle. Similarly, it will not break down when it is in the sea.</h2>
        </div>
{{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p30.png') }}" /> 
        </div>
         <h2 class="title stroke">Let’s look at the paper in the bottle.</h2>
        <p class="note">Note: Encourage children to share what they see.</p>
        </div>
        {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
into pieces when the water bottle was shaken.</h2>
    <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p30.png') }}" /> 
        </div>
          <h2 class="title stroke">The toilet paper became smaller. The water broke the paper
        </div>
  {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p30.png') }}" /> 
        </div>
         <h2 class="title stroke">The toilet paper is biodegradable. This means that it can be
broken down into smaller pieces naturally.</h2>
        </div>
        {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p30.png') }}" /> 
        </div>
         <h2 class="title stroke">Things that are biodegradable break down in the environment
and do not cause pollution.</h2>
        </div>
         {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p9.png') }}" /> 
        </div>
         <h2 class="title stroke">But things made of plastic do not break down.
It will harm the animals and our environment.</h2>
        </div>
         {{-- Slide 2 --}}
    <div class="slide hidden flex flex-col items-center">
    <div class="flex items-end gap-2 justify-center">
   <img src="{{ asset('assets/images/K2/sustain/pollution/p1.png') }}" /> 
        </div>
         <h2 class="title stroke">Pollution is harmful.<br>
It harms the animals, the environment and us.</h2>
        </div>



    {{-- slide 7 --}}
    <div class="slide hidden  flex flex-col items-center justify-start  ">
        <h2 class="!text-white title stroke">Small Group Activity</h2>
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
                        window.location.href = "{{ route('pollutionSelection') }}";
                    }
                });
            }

            // Start with first slide
            showSlide(currentSlide);
        });
    </script>
@endpush
