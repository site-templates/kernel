<x-layouts.main title="Not found" description="That page is not here." current="/">
    <x-sections.page-intro heading="That page is not here." lede="It may have moved, or it may never have existed. Both happen." />
    <x-sections.link-group :links="$site->nav_links" heading="Try one of these" note="Or head back to the homepage, which has everything on it." />
</x-layouts.main>
