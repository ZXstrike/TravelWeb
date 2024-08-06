<div>
    <div class="my-5">
        <img src="{{ $user_travel->travel->image }}" alt="" class="w-full h-[35svh] rounded-lg object-cover object-center">
    </div>
    <div class="mx-5">
        <div>
            <h1 class="text-3xl font-bold">{{ $user_travel->travel->name }}</h1>
            <p class="text-2xl text-gray-500">Jawa Tengah</p>
            <p class=" text-md text-justify mt-3">{{ $user_travel->travel->name }}</p>
        </div>
        <div class="relative flex py-5 items-center">
            <div class="flex-grow border-t border-gray-400"></div>
            <span class="flex-shrink mx-4 text-slate-700 font-bold text-xl">Form Pemesanan</span>
            <div class="flex-grow border-t border-gray-400"></div>
        </div>
        <div class="py-5 mb-10 sm:px-5 md:px-10 lg:px-14">
            <div class="flex w-full py-3 flex-col sm:flex-row gap-1 text-slate-700 sm:items-center">
                <label for="textInputDefault" class="sm:w-[30vh] pr-3 pl-0.5 text-l font-semibold">Nama Lengkap</label>
                <input id="textInputDefault" type="text" wire:model="name"
                    class="w-full rounded-xl border border-slate-300 bg-slate-100 px-2 py-2 text-l focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 disabled:cursor-not-allowed disabled:opacity-75"
                    name="name" placeholder="Enter your name" />
            </div>
            <div class="text-red-500">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="flex w-full py-3 flex-col sm:flex-row gap-1 text-slate-700 sm:items-center">
                <label for="textInputDefault" class="sm:w-[30vh] pr-3 pl-0.5 text-l font-semibold">Nomor Telp/HP</label>
                <input id="textInputDefault" type="text" wire:model="phone"
                    class="w-full rounded-xl border border-slate-300 bg-slate-100 px-2 py-2 text-l focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 disabled:cursor-not-allowed disabled:opacity-75"
                    name="phone" placeholder="+62 8xxx xxxx xxxx" />
            </div>
            <div class="text-red-500">
                @error('phone')
                    {{ $message }}
                @enderror
            </div>
            <div class="flex w-full py-3 flex-col sm:flex-row gap-1 text-slate-700 sm:items-center">
                <label for="textInputDefault" class="sm:w-[30vh] pr-3 pl-0.5 text-l font-semibold">Tanggal</label>
                <div class="w-full">
                    <x-date-picker wire:model='date' />
                </div>
            </div>
            <div class="text-red-500">
                @error('date')
                    {{ $message }}
                @enderror
            </div>

            <div class="w-full py-3">
                <label for="textInputDefault" class="sm:w-[30vh] pr-3 pl-0.5 text-l font-semibold">Opsional</label>
                <ul
                    class="flex min-w-[14rem] flex-col divide-y mt-2 divide-slate-300 overflow-clip rounded-xl border border-slate-300">
                    @foreach ($travel_options as $option)
                        <x-check-box-type1 label="{{ $option->name }}"
                            price="{{ number_format($option->option_price, 2) }}" list="selected_optionals"
                            itemid="{{ $option->id }}" />
                    @endforeach
                </ul>
            </div>
            <div class="flex w-full py-3 flex-col sm:flex-row gap-1 text-slate-700 sm:items-center">
                <label for="textInputDefault" class="sm:w-[30vh] pr-3 pl-0.5 text-l font-semibold">Jumlah
                    Peserta</label>
                <input type="number" wire:model.lazy="participants" wire:change="calculateTotal"
                    class="w-full rounded-xl border border-slate-300 bg-slate-100 px-2 py-2 text-l focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 disabled:cursor-not-allowed disabled:opacity-75"
                    name="participants" placeholder="" />
            </div>
            <div class="flex w-full py-3 flex-col sm:flex-row gap-1 text-slate-700 sm:items-baseline">
                <label for="textInputDefault" class="sm:w-[30vh] pr-3 pl-0.5 text-l font-semibold">Rincian Biaya</label>
                <div>
                    <p class="text-l font-semibold">
                        Rp. {{ number_format($user_travel->travel->base_price, 2) }}
                    </p>
                    @foreach ($optionals_price as $price)
                        <p class="text-l font-semibold">
                            Rp. {{ number_format($price, 2) }}
                        </p>
                    @endforeach
                </div>
            </div>
            <div class="flex w-full py-3 flex-row gap-1 text-slate-700 sm:items-center">
                <label for="textInputDefault" class="sm:w-[30vh] pr-3 pl-0.5 text-l font-semibold">Total Biaya</label>
                <p class="text-l font-semibold">
                    Rp. {{ number_format($total, 2) }}
                </p>
            </div>
            <div class="py-3">
                <button type="button" wire:click="updateTravel"
                    class="cursor-pointer whitespace-nowrap w-full my-2  sm:my-0  sm:w-fit rounded-xl bg-blue-700 px-10 py-2 text-base font-medium tracking-wide text-slate-100 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed">Update Pesanan</button>
                <a href="/booking-list"
                    class="cursor-pointer whitespace-nowrap w-full my-2  sm:my-0  sm:w-fit rounded-xl bg-red-600 px-10 py-2 text-base font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed">Kembali</a>
            </div>
        </div>
    </div>
</div>
