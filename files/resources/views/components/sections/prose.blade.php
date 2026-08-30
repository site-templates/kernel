@props([
    'body' => '<p>Write here.</p>',
])
{{-- A block of long-form text. The measure is set in the markup rather than
     in the stylesheet, so a page can widen or narrow its own reading column
     without touching the prose rules. --}}
<section class="pb-8" data-reveal>
    <div class="prose max-w-[64ch]">{!! $body !!}</div>
</section>
