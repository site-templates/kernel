@props([
    'heading' => 'A post',
    'dateline' => '',
    'body' => '<p>Write here.</p>',
])
{{-- The reading page. The title is set in the same serif as the body it
     introduces, at a size that belongs to a page rather than a poster, and
     the dateline sits under it in the working grotesque so the two never
     compete. This is the only place in the design where a heading and its
     text share a family, and it is the whole reason the family exists. --}}
<article class="pt-2">

    <header class="pb-10 sm:pb-12" data-reveal>
        <h1 class="display-page max-w-[30ch] font-display font-normal text-ink text-pretty">{{ $heading }}</h1>

        @if ($dateline != '')
        <p class="mt-4 text-base text-muted sm:text-sm">{{ $dateline }}</p>
        @endif
    </header>

    <div class="prose max-w-[64ch]" data-reveal>{!! $body !!}</div>

</article>
