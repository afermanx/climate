<div class="grid grid-cols-1 gap-2">
    <x-select
    label="Selecione a cidade"
    placeholder="Selecione uma cidade"
    wire:model.defer="cityId"
    wire:keydown.enter='searchCity'
  
>

@foreach ($cities as $city )
<x-select.option label="{{ $city->name }}-{{ $city->state->uf }}" value="{{ $city->id }}" />   
@endforeach
    
   
</x-select>
<x-button wire:click="searchCity" spinner primary label="Ver a previsão do tempo" />

  


</div>
