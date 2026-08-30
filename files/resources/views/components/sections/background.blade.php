@props([
    'background' => [],
    'heading' => '',
])
{{-- Term and detail pairs set as a real description list, so a screen
     reader reads the pairing rather than ten loose words. Hairlines between
     the rows: never a table, never a card. The rows come from
     resources/data/collections/background.json. --}}
<section class="pt-6 pb-10 sm:pt-10">

    @if ($heading != '')
    <h2 class="display-section font-display font-medium text-ink" data-reveal>{{ $heading }}</h2>
    @endif

    <dl class="stagger mt-8 flex flex-col">
        @foreach ($background as $fact)
        <div class="flex flex-col gap-1 border-b border-line py-4 first:border-t sm:flex-row sm:gap-x-8" data-reveal>
            <dt class="text-base font-medium text-ink sm:w-40 sm:shrink-0 sm:text-sm">{{ $fact->term }}</dt>
            <dd class="max-w-[52ch] text-base text-muted text-pretty sm:text-sm">{{ $fact->detail }}</dd>
        </div>
        @endforeach
    </dl>

</section>
