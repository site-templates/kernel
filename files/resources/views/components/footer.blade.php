@props([
    'links' => [],
    'note' => 'Set in Spectral and Schibsted Grotesk.',
    'copyright' => '© 2026 Wren Halliday',
])
{{-- The close: a full-bleed hairline that breaks the column and runs the
     whole width of the page, then the same four links and a line about how
     the site is made. The rule is the only element in the design allowed
     outside the column, which is what makes the ending feel like an ending. --}}
<footer class="mt-10 sm:mt-14">

    <div class="-mx-6 border-t border-line sm:-mx-8"></div>

    <div class="flex flex-col gap-6 py-10 sm:flex-row sm:items-baseline sm:justify-between">

        <nav aria-label="Footer" class="shrink-0">
            <ul role="list" class="flex flex-wrap items-center gap-x-5 gap-y-2 text-base sm:text-sm">
                @foreach ($links as $link)
                <li>
                    <a href="{{ $link->url }}" class="font-normal text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">{{ $link->text }}</a>
                </li>
                @endforeach
            </ul>
        </nav>

        <p class="max-w-[40ch] text-base text-muted text-pretty sm:max-w-[32ch] sm:text-right sm:text-sm">
            {{ $note }} {{ $copyright }}
        </p>

    </div>

</footer>
