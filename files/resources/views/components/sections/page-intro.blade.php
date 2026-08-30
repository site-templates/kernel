@props([
    'heading' => 'Writing',
    'lede' => '',
])
{{-- Every page but the homepage opens the same way: the title in Spectral
     at two thirds of the hero's size, and one optional sentence. The space
     above it is what tells you this is a different page. --}}
<section class="pt-2 pb-10 sm:pb-12">

    <h1 class="display-page max-w-[28ch] font-display font-normal text-ink text-balance" data-reveal>{{ $heading }}</h1>

    @if ($lede != '')
    <p class="mt-5 max-w-[58ch] text-base text-muted text-pretty" data-reveal>{{ $lede }}</p>
    @endif

</section>
