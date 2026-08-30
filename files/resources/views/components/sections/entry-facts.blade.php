@props([
    'role' => '',
    'year' => '',
    'stack' => '',
    'status' => '',
    'roleLabel' => 'Role',
    'yearLabel' => 'Year',
    'stackLabel' => 'Built with',
    'statusLabel' => 'Status',
])
{{-- A project's own facts, bound from its entry. Four fixed pairs rather
     than a list, because a project that needs a fifth needs a paragraph. --}}
<section class="pt-12" data-reveal>
    <dl class="flex flex-col border-t border-line">

        @if ($role != '')
        <div class="flex flex-col gap-1 border-b border-line py-3 sm:flex-row sm:gap-x-8">
            <dt class="text-base font-medium text-ink sm:w-32 sm:shrink-0 sm:text-sm">{{ $roleLabel }}</dt>
            <dd class="text-base text-muted text-pretty sm:text-sm">{{ $role }}</dd>
        </div>
        @endif

        @if ($year != '')
        <div class="flex flex-col gap-1 border-b border-line py-3 sm:flex-row sm:gap-x-8">
            <dt class="text-base font-medium text-ink sm:w-32 sm:shrink-0 sm:text-sm">{{ $yearLabel }}</dt>
            <dd class="text-base text-muted sm:text-sm">{{ $year }}</dd>
        </div>
        @endif

        @if ($stack != '')
        <div class="flex flex-col gap-1 border-b border-line py-3 sm:flex-row sm:gap-x-8">
            <dt class="text-base font-medium text-ink sm:w-32 sm:shrink-0 sm:text-sm">{{ $stackLabel }}</dt>
            <dd class="text-base text-muted text-pretty sm:text-sm">{{ $stack }}</dd>
        </div>
        @endif

        @if ($status != '')
        <div class="flex flex-col gap-1 border-b border-line py-3 sm:flex-row sm:gap-x-8">
            <dt class="text-base font-medium text-ink sm:w-32 sm:shrink-0 sm:text-sm">{{ $statusLabel }}</dt>
            <dd class="text-base text-muted text-pretty sm:text-sm">{{ $status }}</dd>
        </div>
        @endif

    </dl>
</section>
