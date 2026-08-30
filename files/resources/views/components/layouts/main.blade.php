@props(['title' => 'Home', 'description' => '', 'current' => '/'])
<!doctype html>
<html lang="en" class="scroll-smooth motion-reduce:scroll-auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} — {{ $site->name }}</title>
    <meta name="description" content="{{ $description }}">

    <meta property="og:title" content="{{ $title }} — {{ $site->name }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:type" content="website">

    <!-- The avatar, circle-cropped, is the mark. There is no logo. -->
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <!-- Spectral sets every heading; Schibsted Grotesk carries everything else. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Schibsted+Grotesk:wght@400;500&family=Spectral:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">

    <!-- Loads Tailwind, then the tokens, the leader row, the prose rules and the motion system -->
    @vite(['resources/css/site.css'])

    <!-- Flags JavaScript before first paint so scroll reveals never flash -->
    <script>document.documentElement.classList.add('js')</script>
    <script src="/js/main.js" defer></script>
</head>
<body class="min-h-dvh bg-canvas font-sans text-ink antialiased">
<!--
    THESIS: a person's site as their own index, not a landing page with a
    blog bolted on. It refuses the portfolio grid of cards: everything here
    is a row of type, a hairline, and a date.
    OWN-WORLD: grey-warm paper, near-black ink, one deep green used three
    times a page, a low-contrast reading serif against a working grotesque,
    one narrow column, hairlines instead of boxes, no fills but two.
    STORY: who this is, what they have been thinking about, what they have
    made, and where else to find them — in that order, once.
    FIRST VIEWPORT: an avatar and four links on a bare page, then a serif
    statement at 3.5rem, then two sentences of prose with the links live
    inside them.
    FORM: the contents page of a well-made book; leader rows throughout.
    FINISH: unreviewed and undocumented is unfinished; this build ends with
    the finish review, the verdict, and DESIGN.md.
-->

    <div class="mx-auto flex min-h-dvh max-w-[38rem] flex-col px-6 sm:px-8">

        <x-nav :links="$site->nav_links" :current="$current" />

        <main class="isolate grow">
            {{ $slot }}
        </main>

        <x-footer :links="$site->footer_links" />

    </div>

</body>
</html>
