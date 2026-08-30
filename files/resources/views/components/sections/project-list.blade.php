@props([
    'projects' => [],
    'heading' => 'Projects',
    'showStatus' => '1',
    'viewAllText' => '',
    'viewAllHref' => '/projects',
])
{{-- The projects deliberately break the leader rhythm. A project needs a
     sentence to make sense of it, so each row gives the title its own line
     and hangs the description underneath — the same hairlines, a different
     shape, which is what stops the homepage reading as one long list. --}}
<section class="py-14 sm:py-16">

    @if ($heading != '')
    <h2 class="display-section font-display font-medium text-ink" data-reveal>{{ $heading }}</h2>
    @endif

    <ul role="list" class="stagger mt-8 flex flex-col">
        @foreach ($projects as $project)
        <li class="border-b border-line last:border-b-0" data-reveal>
            <a href="{{ $project->link }}" class="entry group flex flex-col gap-2 py-5 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
                <span class="flex flex-col gap-1 sm:flex-row sm:items-baseline sm:gap-x-3">
                    <span class="min-w-0 font-display text-lg font-medium text-ink">{{ $project->title }}</span>
                    <span class="leader max-sm:hidden" aria-hidden="true"></span>
                    @if ($showStatus == '1')
                    <span class="shrink-0 text-base text-muted group-hover:text-ink sm:text-sm">{{ $project->year }} · {{ $project->status }}</span>
                    @endif
                </span>
                <span class="max-w-[62ch] text-base text-muted text-pretty sm:text-sm">{{ $project->description }}</span>
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
