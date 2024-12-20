<div class="grid">
    {{-- Cigarettes --}}
    @forelse($cigarettes as $cigarette)
        <livewire:cigarette-card :cigarette="$cigarette"/>
    @empty
        <div class="no-items-message">
            No cigarette records found
        </div>
    @endforelse

    {{-- Liquids --}}
    @forelse($liquids as $liquid)
        <livewire:liquid-card :liquid="$liquid"/>
    @empty
        <div class="no-items-message">
            No liquids records found
        </div>
    @endforelse
</div>
