<div class="w-full">
    <div>
    </div>
    <div class="py-10" id="paginated-posts">
        <h1 class="text-3xl font-bold p-3">Riwayat Pemesanan</h1>
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Pemesan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No Telp.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Berangkat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Paket Travel
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah Peserta
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Tagihan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Detail</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userTravels as $userTravel)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $userTravel->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $userTravel->phone }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $userTravel->date }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $userTravel->travel->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $userTravel->participants }}
                            </td>
                            <td class="px-6 py-4">
                                Rp. {{ number_format($userTravel->total, 2) }}.-
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="/edit-order/{{ $userTravel->id }}"
                                    class="font-medium text-blue-600 hover:underline px-3">Detail</a>
                                <button wire:click="deleteOrder({{ $userTravel->id }})" wire:confirm="Apakah anda yakin?"
                                    class="font-medium text-red-600 hover:underline px-3">Hapus</button>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="w-full pd-4 md:px-10">
            {{ $userTravels->links('vendor.livewire.tailwind', data: ['scrollTo' => '#paginated-posts']) }}
        </div>
    </div>


</div>
