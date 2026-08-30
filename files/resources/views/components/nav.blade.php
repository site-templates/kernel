@props([
    'links' => [],
    'current' => '/',
    'avatar' => '/images/avatar.jpg',
    'avatarAlt' => 'Theo Marsh',
])
{{-- The header is one row of type on bare paper: the avatar, which is this
     site's only mark, and the four places you can go. No bar, no border, no
     backdrop — the page's own margin does the separating. Every link stays
     visible at every width, wrapping under the avatar on a narrow phone, so
     there is nothing to disclose and no menu to open. --}}
<header class="flex flex-wrap items-center gap-x-6 gap-y-4 pt-8 pb-14 sm:pt-10 sm:pb-20">

    <a href="/" aria-label="Homepage" class="group shrink-0 rounded-full focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
        <img src="{{ $avatar }}" alt="{{ $avatarAlt }}" width="36" height="36" class="size-9 rounded-full object-cover outline-1 -outline-offset-1 outline-ink/10">
    </a>

    <nav aria-label="Main" class="min-w-0">
        <ul role="list" class="flex flex-wrap items-center gap-x-5 gap-y-2 text-base sm:text-sm">
            @foreach ($links as $link)
            <li>
                @if ($link->url == $current)
                <a href="{{ $link->url }}" aria-current="page" class="ruled-link text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">{{ $link->text }}</a>
                @endif
                @if ($link->url != $current)
                <a href="{{ $link->url }}" class="text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">{{ $link->text }}</a>
                @endif
            </li>
            @endforeach
        </ul>
    </nav>

</header>
