<div>

    <div class="flex flex-wrap justify-center w-screen p-4 mx-auto sadown-mdh-screen ontent-center ">

        <div class="w-full px-2">
            <div class="w-96"><livewire:climate.select-city></div>
            <div
            
                class="relative w-full min-w-0 my-2 mb-4 overflow-hidden text-white break-words bg-white bg-gray-900 rounded-lg shadow-sm dark:bg-gray-600">
                <div class="relative px-6 py-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h5 class="mb-0 text-xl font-medium">{{ $city}}/{{ $uf }}</h5>
                            <h6 class="mb-0">{{date('d-m-Y')}}</h6><small > {{$statusClimate }}</small>
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
               
            </div>
        </div>
    </div>
</div>