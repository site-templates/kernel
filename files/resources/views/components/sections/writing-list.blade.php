@props([
    'writings' => [],
    'heading' => 'Writing',
    'showDescriptions' => '0',
    'viewAllText' => '',
    'viewAllHref' => '/writing',
])
{{-- THE LEADER ROW — the one idea this template is known for.

     A title, a hairline that grows to fill whatever space is left, and a
     date: the row of a book's contents page. At rest the leader is a
     hairline; on hover an accent rule is drawn across it from the left and
     the date steps from muted up to ink. On a phone the rule is dropped and
     the row stacks, because a leader with nothing to lead is just noise.

     The rows come from resources/data/collections/writings.json, so adding
     a post to the collection adds it here and to the archive at once. --}}
<section class="pb-14 sm:pb-16">

    @if ($heading != '')
    <h2 class="display-section pt-14 font-display font-medium text-ink sm:pt-16" data-reveal>{{ $heading }}</h2>
    @endif

    <ul role="list" class="stagger mt-8 flex flex-col">
        @foreach ($writings as $writing)
        <li class="border-b border-line last:border-b-0" data-reveal>
            <a href="{{ $writing->link }}" class="entry group flex flex-col gap-1 py-4.5 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent sm:flex-row sm:flex-wrap sm:items-baseline sm:gap-x-3">
                <span class="min-w-0 font-display text-lg font-medium text-ink">{{ $writing->title }}</span>
                <span class="leader max-sm:hidden" aria-hidden="true"></span>
                <span class="shrink-0 text-base text-muted group-hover:text-ink sm:text-sm">{{ $writing->dateFormatted }}</span>
                @if ($showDescriptions == '1')
                <span class="max-w-[62ch] basis-full text-base text-muted text-pretty sm:text-sm">{{ $writing->description }}</span>
                @endif
            </a>
        </li>
        @endforeach
    </ul>

    @if ($viewAllText != '')
    <p class="mt-8 text-base sm:text-sm" data-reveal>
        <a href="{{ $viewAllHref }}" class="ruled-link text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">{{ $viewAllText }}</a>
    </p>
    @endif

</section>
