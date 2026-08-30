<x-layouts.main :title="$projects->title" :description="$projects->description" current="/projects">
    <x-sections.article :heading="$projects->title" :dateline="$projects->dateline" :body="$projects->content" />
    <x-sections.entry-facts :role="$projects->role" :year="$projects->year" :stack="$projects->stack" :status="$projects->status" />
    <x-sections.more-entries :items="$entries" :current="$projects->slug" heading="Other projects" allText="All five projects" allHref="/projects" />
</x-layouts.main>
