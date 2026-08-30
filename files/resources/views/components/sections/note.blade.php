@props([
    'stamp' => 'Updated 22 July 2026',
    'body' => 'A now page is a snapshot, not a CV. This one is accurate on the day it says it is, and almost certainly out of date by the time you read it.',
])
{{-- The only filled surface in the design, and the only place the green
     becomes a shape rather than a line: a small disc dating the page, on a
     recessed plane. It exists so the Now page can say when it was true
     without a heading and a paragraph doing the same job twice. --}}
<section class="pb-12" data-reveal>
    <div class="rounded-sm bg-surface p-6">

        <p class="flex items-center gap-3 text-base text-ink sm:text-sm">
            <span class="now-marker size-1.5 shrink-0 rounded-full bg-accent" aria-hidden="true"></span>
            {{ $stamp }}
        </p>

        <p class="mt-3 max-w-[62ch] text-base text-muted text-pretty sm:text-sm">{{ $body }}</p>

    </div>
</section>
