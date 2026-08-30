@props([
    'statement' => 'Design engineer, tool maker & writer',
    'body' => 'Based in Bristol. I spend my days on developer tooling and my evenings on things that fit in a single file. This is where the finished thoughts go — everything else stays in a text file called <a href="/writing/three-years-of-keeping-a-work-journal">journal.txt</a>.',
    'availability' => 'Currently at Foldwork, and not looking.',
])
{{-- The first viewport: a statement in Spectral at full size, then two
     sentences of prose with the links live inside them. Nothing is centred
     and nothing is boxed — the page's left edge is the only alignment the
     design has, and it holds all the way to the footer. --}}
<section class="pb-16 sm:pb-20">

    <h1 class="display-hero max-w-[18ch] font-display font-normal text-ink text-balance" data-reveal>{{ $statement }}</h1>

    <div class="prose mt-8 max-w-[58ch]" data-reveal>{!! $body !!}</div>

    @if ($availability != '')
    <p class="mt-7 flex items-center gap-3 text-base text-muted text-pretty sm:text-sm" data-reveal>
        <span class="now-marker size-1.5 shrink-0 rounded-full bg-accent" aria-hidden="true"></span>
        {{ $availability }}
    </p>
    @endif

</section>
