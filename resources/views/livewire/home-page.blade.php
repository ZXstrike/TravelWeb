<div>
    <div class="">
        <x-carousel />
        <div class="w-full py-6">
            <h1 class="text-3xl font-medium text-center">
                Discover Interesting Travel Options and Tourist Destinations
            </h1>
            <div class="w-full">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="size-10 items-center justify-center mx-auto my-4 animate-bounce" viewBox="0 0 512 512">
                    <path
                        d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                </svg>
            </div>
        </div>
    </div>
    <div class="flex flex-col py-3 mx-8 snap-both snap-mandatory" id="paginated-posts">
        <div
            class="w-full flex sm:flex-row flex-col align-middle items-center justify-end rounded-xl bg-slate-50 drop-shadow-md  py-4 px-5 ">
            <div class="relative flex w-full sm:max-w-xs flex-col gap-1 text-gray-900 drop-shadow-sm my-2 sm:m-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" aria-hidden="true"
                    class="absolute left-2.5 top-1/2 size-5 -translate-y-1/2 text-slate-700/50 ">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                <input type="search" wire:model="search" wire:keydown.enter="searchTravel"
                    class="w-full rounded-xl border border-slate-300 bg-white py-2 pl-10 pr-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 disabled:cursor-not-allowed disabled:opacity-75 "
                    name="search" placeholder="Search" aria-label="search" />
            </div>
            <div class="w-full flex flex-row align-middle items-baseline my-2 sm:m-0">
                <p class="text-slate-900  font-medium px-2">Provinsi</p>
                <x-combo-box x-data="combobox({
                    allOptions: [{
                            label: 'Acura',
                            value: 'Acura'
                        },
                        {
                            label: 'Alfa Romeo',
                            value: 'Alfa Romeo'
                        },
                        {
                            label: 'Aston Martin',
                            value: 'Aston Martin'
                        },
                        {
                            label: 'Audi',
                            value: 'Audi'
                        },
                        {
                            label: 'Bentley',
                            value: 'Bentley'
                        },
                        {
                            label: 'BMW',
                            value: 'BMW'
                        },
                        {
                            label: 'Bugatti',
                            value: 'Bugatti'
                        },
                        {
                            label: 'Buick',
                            value: 'Buick'
                        },
                        {
                            label: 'Cadillac',
                            value: 'Cadillac'
                        },
                        {
                            label: 'Chevrolet',
                            value: 'Chevrolet'
                        },
                        {
                            label: 'Chrysler',
                            value: 'Chrysler'
                        },
                        {
                            label: 'Citroën',
                            value: 'Citroën'
                        },
                        {
                            label: 'Dodge',
                            value: 'Dodge'
                        },
                        {
                            label: 'Ferrari',
                            value: 'Ferrari'
                        },
                        {
                            label: 'Fiat',
                            value: 'Fiat'
                        },
                        {
                            label: 'Ford',
                            value: 'Ford'
                        },
                        {
                            label: 'Genesis',
                            value: 'Genesis'
                        },
                        {
                            label: 'GMC',
                            value: 'GMC'
                        },
                        {
                            label: 'Honda',
                            value: 'Honda'
                        },
                        {
                            label: 'Hyundai',
                            value: 'Hyundai'
                        },
                        {
                            label: 'Infiniti',
                            value: 'Infiniti'
                        },
                        {
                            label: 'Jaguar',
                            value: 'Jaguar'
                        },
                        {
                            label: 'Jeep',
                            value: 'Jeep'
                        },
                        {
                            label: 'Kia',
                            value: 'Kia'
                        },
                        {
                            label: 'Lamborghini',
                            value: 'Lamborghini'
                        },
                        {
                            label: 'Land Rover',
                            value: 'Land Rover'
                        },
                        {
                            label: 'Lexus',
                            value: 'Lexus'
                        },
                        {
                            label: 'Lincoln',
                            value: 'Lincoln'
                        },
                        {
                            label: 'Maserati',
                            value: 'Maserati'
                        },
                        {
                            label: 'Mazda',
                            value: 'Mazda'
                        },
                        {
                            label: 'McLaren',
                            value: 'McLaren'
                        },
                        {
                            label: 'Mercedes-Benz',
                            value: 'Mercedes-Benz'
                        },
                        {
                            label: 'Mini',
                            value: 'Mini'
                        },
                        {
                            label: 'Mitsubishi',
                            value: 'Mitsubishi'
                        },
                        {
                            label: 'Nissan',
                            value: 'Nissan'
                        },
                        {
                            label: 'Peugeot',
                            value: 'Peugeot'
                        },
                        {
                            label: 'Porsche',
                            value: 'Porsche'
                        },
                        {
                            label: 'Ram',
                            value: 'Ram'
                        },
                        {
                            label: 'Renault',
                            value: 'Renault'
                        },
                        {
                            label: 'Rolls-Royce',
                            value: 'Rolls-Royce'
                        },
                        {
                            label: 'Subaru',
                            value: 'Subaru'
                        },
                        {
                            label: 'Suzuki',
                            value: 'Suzuki'
                        },
                        {
                            label: 'Tesla',
                            value: 'Tesla'
                        },
                        {
                            label: 'Toyota',
                            value: 'Toyota'
                        },
                        {
                            label: 'Volkswagen',
                            value: 'Volkswagen'
                        },
                        {
                            label: 'Volvo',
                            value: 'Volvo'
                        },
                    ],
                })" />
            </div>
        </div>
        <div class="w-full py-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-4 md:px-10">
                @foreach ($travels as $travel)
                    <a href="/spot-detail/{{ $travel->id }}/{{ $travel->slug }}" wire:key="{{ $travel->id }}">
                        <x-card-type1 img="{{ $travel->image }}"
                            title="{{ $travel->name }}" desc="Start From Rp. {{ number_format($travel->base_price, 2) }}.-" />
                    </a>
                @endforeach
            </div>
            <div class="w-full pd-4 md:px-10">
                {{ $travels->links('vendor.livewire.tailwind', data: ['scrollTo' => '#paginated-posts']) }}
            </div>
        </div>
    </div>
</div>
