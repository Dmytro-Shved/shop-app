<div class="grid">
    {{-- Cigarettes --}}
    @forelse($cigarettes as $cigarette)
        <livewire:cigarette-card :cigarette="$cigarette"/>
    @empty
        <div class="#">
            No cigarettes in the database
        </div>
    @endforelse

    {{-- Liquids --}}
    @forelse($liquids as $liquid)
        <livewire:liquid-card :liquid="$liquid"/>
    @empty
        <div class="#">
            No liquids in the database
        </div>
    @endforelse
</div>
