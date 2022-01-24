<div>

    <div class="flex flex-wrap justify-center w-screen p-4 mx-auto sadown-mdh-screen ontent-center ">

        <div class="w-full px-2">
            <div class="w-96"><livewire:climate.select-city></div>
                

            <div wire:loading class="flex items-center content-center justify-center w-full p-3 bg-white border rounded-md shadow-md" style="height:330px;">
                <div class="flex items-center content-center h-full">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-24 h-24" style="margin: auto;  shape-rendering: auto;" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <circle cx="50" cy="50" fill="none" stroke="#5b71a4" stroke-width="7" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
                            <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                        </circle>
                    </svg>
                </div>
            </div>
            <div wire:loading.remove class="relative w-full min-w-0 my-2 mb-4 overflow-hidden text-white break-words bg-white bg-gray-900 rounded-lg shadow-sm dark:bg-gray-600">
                
                <div class="relative px-6 py-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h5 class="mb-0 text-xl font-medium">{{ $city}}/{{ $uf }}</h5>
                            <h6 class="mb-0">{{$date}}</h6><small > {{$statusClimate }}</small>
                        </div>
                        <div class="text-right">
                            <h3 class="mb-0 text-4xl font-bold"><span>{{ $temperature =="Dados não encontrado" ?'Dados não encontrado': $temperature.'°' }}</span></h3>
                        </div>
                    </div>
                    <div class="flex-wrap items-center justify-between block sm:flex">
                        <div class="w-full sm:w-1/2">
                            <div class="flex items-center justify-between mb-2"><span>Temperatura</span><small
                                    class="inline-block px-2">{{ $temperature.'°' ??'Dados não encontrado'}}</small></div>
                        </div>
                        <div class="w-full sm:w-1/2">
                            <div class="flex items-center justify-between mb-2"><span>Sesação Térmica</span><small
                                    class="inline-block px-2">{{ $feelsLike =="Dados não encontrado" ?'Dados não encontrado':$feelsLike.'°'}}</small></div>
                        </div>
                        <div class="w-full sm:w-1/2">
                            <div class="flex items-center justify-between mb-2"><span>Temperatura minima</span><small
                                    class="inline-block px-2">{{ $temperatureMin =="Dados não encontrado" ?'Dados não encontrado':$temperatureMin.'°'}}</small></div>
                        </div>
                        <div class="w-full sm:w-1/2">
                            <div class="flex items-center justify-between mb-2"><span>Temperatura maxima</span><small
                                    class="inline-block px-2">{{ $temperatureMax=="Dados não encontrado" ?'Dados não encontrado':$temperatureMax.'°'}}</small></div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>