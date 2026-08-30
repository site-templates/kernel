<x-layouts.main title="Home" description="Theo Marsh is a designer and engineer in Bristol building small tools, and writing down what building them taught him." current="/">
    <x-sections.intro />
    <x-sections.writing-list heading="Writing" viewAllText="Everything I have written" viewAllHref="/writing" />
    <x-sections.project-list heading="Projects" viewAllText="All five projects" viewAllHref="/projects" />
    <x-sections.link-group :links="$site->elsewhere_links" heading="Elsewhere" note="The fastest way to reach me is email. I answer everything that is not a pitch." />
</x-layouts.main>
