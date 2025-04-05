<div>
    <section class="flex flex-col md:flex-row gap-5 items-end mb-5">
        <div class="flex flex-col w-full md:w-auto">
            <label for="perPage">Mostrar:</label>
            <x-select wire:model.change="perPage">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
            </x-select>
        </div>
        <div class="flex flex-col w-full md:w-auto">
            <label for="perEstatus">Estatus:</label>
            <x-select wire:model.change="perEstatus">
                <option value="">{{ __('All') }}</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </x-select>
        </div>
        <div class="flex flex-col w-full relative ">
            <label for="">{{ __('Search') }}:</label>
            <x-input wire:model.live.debounce.500ms="search" placeholder="({{ __('Name') }})" />
            <button type="button" class="absolute  right-3 -translate-y-1/2 top-2/3 p-1 text-white text-2xl"
                wire:click="resetSerch">x</button>
        </div>
        <div>
            <x-button-new wire:model="newRegister" />
        </div>
    </section>
    <x-table>
        <x-slot name="titles">
            <x-th-title>
                No.
            </x-th-title>
            <x-th-title>
                {{ __('Name') }}
            </x-th-title>
            <x-th-title>
                {{ __('Edit') }}
            </x-th-title>
            <x-th-title>
                {{ __('Delete') }}
            </x-th-title>
            <x-th-title>
                {{ __('Status') }}
            </x-th-title>
        </x-slot>
        <x-slot name="rows">
            <x-loading-spinner :colspan="5" wire:target="search,perPage,perEstatus," />
            @forelse ($collection as $item)
                <x-tr>
                    <x-td-row>
                        {{ $loop->index + 1 }}
                    </x-td-row>
                    <x-td-row>
                        {{ $item->nombre }}
                    </x-td-row>
                    <x-td-row>
                        <x-button-edit wire:click="editRegister({{ $item->estatus }})" />
                    </x-td-row>
                    <x-td-row>
                        <x-button-delete wire:click="editRegister({{ $item->estatus }})" />
                    </x-td-row>
                    <x-td-row>
                        <x-toggle-switch :id="$item->id" :checked="$item->estatus" :disabled="true"
                            wireClick="statusRegister({{ $item->id }})" />
                    </x-td-row>
                </x-tr>
            @empty
                <x-tr>
                    <x-td-row colspan="5" class="text-center">
                        Sin resultados
                    </x-td-row>
                </x-tr>
            @endforelse

        </x-slot>
    </x-table>
    <div>
        {{ $collection->onEachSide(1)->links() }}
    </div>
</div>
