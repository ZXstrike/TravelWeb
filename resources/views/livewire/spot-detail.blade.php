<div>
    <div class="my-5">
        <img src="{{ $travel->image }}"
            alt="" class="w-full h-[35svh] rounded-lg object-cover object-center">
    </div>
    <div class="mx-5">
        <div>
            <h1 class="text-3xl font-bold">{{ $travel->name }}</h1>
            <p class="text-2xl text-gray-500">Jawa Tengah</p>
            <p class=" text-md text-justify mt-3">{{$travel->description}}</p>
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
            <div class="flex w-full py-3 flex-col sm:flex-row gap-1 text-slate-700 sm:items-center">
                <label for="textInputDefault" class="sm:w-[30vh] pr-3 pl-0.5 text-l font-semibold">Nomor Telp/HP</label>
                <input id="textInputDefault" type="text" wire:model="phone"
                    class="w-full rounded-xl border border-slate-300 bg-slate-100 px-2 py-2 text-l focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 disabled:cursor-not-allowed disabled:opacity-75"
                    name="phone" placeholder="+62 8xxx xxxx xxxx" />
            </div>
            <div class="flex w-full py-3 flex-col sm:flex-row gap-1 text-slate-700 sm:items-center">
                <label for="textInputDefault" class="sm:w-[30vh] pr-3 pl-0.5 text-l font-semibold">Tanggal</label>
                <div class="w-full">
                    <x-date-picker wire:model='date' />
                </div>
            </div>
            <div class="w-full py-3">
                <label for="textInputDefault" class="sm:w-[30vh] pr-3 pl-0.5 text-l font-semibold">Opsional</label>
                <ul
                    class="flex min-w-[14rem] flex-col divide-y mt-2 divide-slate-300 overflow-clip rounded-xl border border-slate-300">
                    <x-check-box-type1 label="Email" />
                    <x-check-box-type1 label="SMS" />
                    <x-check-box-type1 label="WhatsApp" />
                </ul>
            </div>
            <div class="flex w-full py-3 flex-col sm:flex-row gap-1 text-slate-700 sm:items-center">
                <label for="textInputDefault" class="sm:w-[30vh] pr-3 pl-0.5 text-l font-semibold">Jumlah
                    Peserta</label>
                <input id="textInputDefault" type="text" value="{{ $participans }}" wire:.live.debounce.250ms="participants"
                    class="w-full rounded-xl border border-slate-300 bg-slate-100 px-2 py-2 text-l focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 disabled:cursor-not-allowed disabled:opacity-75"
                    name="participants" placeholder="" />
            </div>
            <div class="flex w-full py-3 flex-col sm:flex-row gap-1 text-slate-700 sm:items-baseline">
                <label for="textInputDefault" class="sm:w-[30vh] pr-3 pl-0.5 text-l font-semibold">Rincian Biaya</label>
                <div>
                    <p class="text-l font-semibold">
                        Rp. {{ $travel->base_price }}
                    </p>
                    <p class="text-l font-semibold">
                        Rp. 100.000
                    </p>
                </div>
            </div>
            <div class="flex w-full py-3 flex-row gap-1 text-slate-700 sm:items-center">
                <label for="textInputDefault" class="sm:w-[30vh] pr-3 pl-0.5 text-l font-semibold">Total Biaya</label>
                <p class="text-l font-semibold">
                    Rp. {{ $total }}
                </p>
            </div>
            <div class="py-3">
                <button type="button"
                    class="cursor-pointer whitespace-nowrap w-full my-2  sm:my-0  sm:w-fit rounded-xl bg-blue-700 px-10 py-2 text-base font-medium tracking-wide text-slate-100 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed">Pesan</button>
                <a href="/"
                    class="cursor-pointer whitespace-nowrap w-full my-2  sm:my-0  sm:w-fit rounded-xl bg-red-600 px-10 py-2 text-base font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed">Kembali</a>
            </div>
        </div>
    </div>
</div>
