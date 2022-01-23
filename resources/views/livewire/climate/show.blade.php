<div>

    <div class="flex flex-wrap justify-center w-screen p-4 mx-auto sadown-mdh-screen ontent-center ">

        <div class="w-full px-2">
            <label for="price" class="block text-sm font-medium text-gray-700">Pesquise a cidade</label>
            <div class="relative mt-1 rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="text-gray-500 sm:text-sm">

                    </span>
                </div>
                <input wire:model.defer="city" type="text" name="price" id="price"
                    class="block w-full pr-12 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm">
                <div class="absolute inset-y-0 right-0 flex items-center">
                  <button wire:click="search">Pequisar</button>

                </div>
            </div>
            <div
                class="relative w-full min-w-0 mb-4 overflow-hidden text-white break-words bg-white bg-gray-900 rounded-lg shadow-sm dark:bg-gray-600">
                <div class="relative px-6 py-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h5 class="mb-0 text-xl font-medium">{{ $city}}/{{ $uf }}</h5>
                            <h6 class="mb-0">April 04 2021</h6><small ><i icon="{{ $iconStatus }}"></i> {{$statusClimate }}</small>
                        </div>
                        <div class="text-right">
                            <h3 class="mb-0 text-4xl font-bold"><span>{{ $temperature.'°' }}</span></h3>
                        </div>
                    </div>
                    <div class="flex-wrap items-center justify-between block sm:flex">
                        <div class="w-full sm:w-1/2">
                            <div class="flex items-center justify-between mb-2"><span>Temperatura</span><small
                                    class="inline-block px-2">{{ $temperature.'°'}}</small></div>
                        </div>
                        <div class="w-full sm:w-1/2">
                            <div class="flex items-center justify-between mb-2"><span>Sesação Térmica</span><small
                                    class="inline-block px-2">{{ $feelsLike.'°'}}</small></div>
                        </div>
                        <div class="w-full sm:w-1/2">
                            <div class="flex items-center justify-between mb-2"><span>Temperatura minima</span><small
                                    class="inline-block px-2">{{ $temperatureMin}}</small></div>
                        </div>
                        <div class="w-full sm:w-1/2">
                            <div class="flex items-center justify-between mb-2"><span>Temperatura maxima</span><small
                                    class="inline-block px-2">{{ $temperatureMax.'°'}}</small></div>
                        </div>
                    </div>
                </div>
                <div class="table mx-2 text-center bg-transparent divider whitespace-nowrap"><span
                        class="inline-block px-3"><small>Previsão</small></span></div>
                <div class="relative px-6 py-6">
                    <div class="flex items-center justify-between text-center" style="flex-flow: initial;">
                        <div class="flex flex-col items-center justify-center mb-0 text-center"><span
                                class="block my-1">Sun</span><img src="https://i.imgur.com/ffgW9JQ.png"
                                class="block w-8 h-8"><span class="block my-1">38.3°</span></div>
                        <div class="flex flex-col items-center justify-center mb-0 text-center"><span
                                class="block my-1">Mon</span><img src="https://i.imgur.com/BQbzoKt.png"
                                class="block w-8 h-8"><span class="block my-1">39.9°</span></div>
                        <div class="flex flex-col items-center justify-center mb-0 text-center"><span
                                class="block my-1">Mon</span><img src="https://i.imgur.com/BQbzoKt.png"
                                class="block w-8 h-8"><span class="block my-1">40.1°</span></div>
                        <div class="flex flex-col items-center justify-center mb-0 text-center"><span
                                class="block my-1">Mon</span><img src="https://i.imgur.com/ffgW9JQ.png"
                                class="block w-8 h-8"><span class="block my-1">41.5°</span></div>
                        <div class="flex flex-col items-center justify-center mb-0 text-center"><span
                                class="block my-1">Mon</span><img src="https://i.imgur.com/ffgW9JQ.png"
                                class="block w-8 h-8"><span class="block my-1">40.1°</span></div>
                        <div class="flex flex-col items-center justify-center mb-0 text-center"><span
                                class="block my-1">Mon</span><img src="https://i.imgur.com/BQbzoKt.png"
                                class="block w-8 h-8"><span class="block my-1">38°</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>