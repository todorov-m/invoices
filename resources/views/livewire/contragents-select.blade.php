<div class="relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen = false">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Контрагент</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" wire:model.debounce.200ms="search">
    </div>

     <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>

    @if (strlen($search) >= 2)
        <div class="list-group">
            @if ($searchResults->count() > 0)

                    @foreach ($searchResults as $result)

                            <a href="/forminvoice/{{ $result['id'] }}" class="list-group-item list-group-item-action" aria-current="true">
                                {{ $result['contr_name'] }}
                            </a>

                    @endforeach


            @else
                <div class="px-3 py-3">Няма намерено за "{{ $search }}"</div>
            @endif
        </div>
    @endif
</div>
