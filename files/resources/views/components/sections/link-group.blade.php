@props([
    'links' => [],
    'heading' => 'Elsewhere',
    'note' => '',
])
{{-- The grouped link list, borrowed from the way a personal site used to
     end: a heading and a short column of underlined words, one per line, so
     each one is a decision rather than an item in a toolbar. Every link
     carries the same underline that comes alive on hover. --}}
<section class="py-14 sm:py-16">

    <h2 class="display-section font-display font-medium text-ink" data-reveal>{{ $heading }}</h2>

    <ul role="list" class="stagger mt-6 flex flex-col gap-2.5">
        @foreach ($links as $link)
        <li class="text-base" data-reveal>
            <a href="{{ $link->url }}" class="ruled-link text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">{{ $link->text }}</a>
        </li>
        @endforeach
    </ul>

    @if ($note != '')
    <p class="mt-8 max-w-[56ch] text-base text-muted text-pretty sm:text-sm" data-reveal>{{ $note }}</p>
    @endif

</section>
