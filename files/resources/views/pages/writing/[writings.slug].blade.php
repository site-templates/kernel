<x-layouts.main :title="$writings->title" :description="$writings->description" current="/writing">
    <x-sections.article :heading="$writings->title" :dateline="$writings->dateline" :body="$writings->content" />
    <x-sections.more-entries :items="$entries" :current="$writings->slug" heading="More writing" allText="Everything I have written" allHref="/writing" />
</x-layouts.main>
