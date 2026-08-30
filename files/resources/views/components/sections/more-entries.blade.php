@props([
    'items' => [],
    'current' => '',
    'heading' => 'More writing',
    'allText' => '',
    'allHref' => '/writing',
])
{{-- The foot of a reading page. It is the same leader row as the index,
     over the whole collection with the entry you are already reading left
     out — so the end of a post is a way back into the site rather than a
     dead stop. The rows arrive through a bound attribute because inside a
     detail page the collection's own name holds only the matched entry. --}}
<section class="border-t border-line pt-10 sm:pt-12" data-reveal>

    <h2 class="display-section font-display font-medium text-ink">{{ $heading }}</h2>

    <ul role="list" class="mt-6 flex flex-col">
        @foreach ($items as $item)
        @if ($item->slug != $current)
        <li class="border-b border-line last:border-b-0">
            <a href="{{ $item->link }}" class="entry group flex flex-col gap-1 py-3.5 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent sm:flex-row sm:items-baseline sm:gap-x-3">
                <span class="min-w-0 font-display text-lg font-medium text-ink">{{ $item->title }}</span>
                <span class="leader max-sm:hidden" aria-hidden="true"></span>
                <span class="shrink-0 text-base text-muted group-hover:text-ink sm:text-sm">{{ $item->meta }}</span>
            </a>
        </li>
        @endif
        @endforeach
    </ul>

    @if ($allText != '')
    <p class="mt-8 text-base sm:text-sm">
        <a href="{{ $allHref }}" class="ruled-link text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">{{ $allText }}</a>
    </p>
    @endif

</section>
