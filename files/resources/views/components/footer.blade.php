@props([
    'links' => [],
    'note' => 'Set in Spectral and Schibsted Grotesk.',
    'copyright' => '© 2026 Wren Halliday',
])
{{-- The close: a hairline on the column's own edge — the same register as
     every other rule on the site — then the four links and a line about how
     the page is made. It ends where everything else ends, which is the
     whole argument of the layout. --}}
<footer class="mt-10 sm:mt-14">

    <div class="border-t border-line"></div>

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
