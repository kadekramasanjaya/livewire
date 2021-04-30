<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput1" placeholder="Isikan Nama" wire:model="nama">
                            @error('nama') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Nim:</label>
                            <input type="number"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput1" placeholder="Isikan Nim" wire:model="nim">
                            @error('nim') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Prodi:</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput1" placeholder="Isikan Nim" wire:model="prodi">
                            @error('prodi') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Jabatan:</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput1" placeholder="Isikan Nim" wire:model="jabatan">
                            @error('jabatan') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                            <input type="status"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput1" placeholder="Isikan Nim" wire:model="status">
                            @error('status') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        {{-- <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">
                                Prodi
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <select name="prodi" id="prodi"
                                    class="@error('prodi') border-red-600 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">Pilih Prodi</option>
                                    <option value="S1 Pendidikan Agama Hindu">S1 Pendidikan Agama Hindu</option>
                                    <option value="S1 Pendidikan Guru Sekolah Dasar">S1 Pendidikan Guru Sekolah Dasar
                                    </option>
                                    <option value="S1 Pendidikan Guru Pendidikan Guru Usia Dini">S1 Pendidikan Guru
                                        Pendidikan Guru Usia Dini</option>
                                    <option value="S1 Sastra Agama Dan Pendidikan Bahasa Bali">S1 Sastra Agama Dan
                                        Pendidikan Bahasa Bali</option>
                                    <option value="S1 Pariwisata Budaya Hindu">S1 Pariwisata Budaya Hindu</option>
                                    <option value="S1 Ilmu Komunikasi">S1 Ilmu Komunikasi</option>
                                    <option value="S1 Filsafat Hindu">S1 Filsafat Hindu</option>
                                    <option value="S1 Teologi Hindu">S1 Teologi Hindu</option>
                                    <option value="S1 Hukum Hindu">S1 Hukum Hindu</option>
                                    <option value="S2 Pendidikan Agama Hindu">S2 Pendidikan Agama Hindu</option>
                                </select>
                            </div>
                            <div class="text-xs text-red-500"> @error('prodi')
                                {{ $message }} @enderror</div>
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">
                                Jabatan
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <select name="jabatan" id="jabatan"
                                    class="@error('jabatan') border-red-600 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">Pilih Jabatan</option>
                                    <option value="Ketua">Ketua</option>
                                    <option value="Wakil Ketua">Wakil Ketua</option>
                                    <option value="Sekretaris 1">Sekretaris 1</option>
                                    <option value="Sekretaris 2">Sekretaris 2</option>
                                    <option value="Bendahara 1">Bendahara 1</option>
                                    <option value="Bendahara 2">Bendahara 2</option>
                                    <option value="Koorbidang 1">Koorbidang 1</option>
                                    <option value="Koorbidang 2">Koorbidang 2</option>
                                    <option value="Koorbidang 3">Koorbidang 3</option>
                                    <option value="Koorbidang 4">Koorbidang 4</option>
                                </select>
                            </div>
                            <div class="text-xs text-red-500"> @error('Jabatan')
                                {{ $message }} @enderror</div>
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">
                                Status
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <select name="status" id="status"
                                    class="@error('status') border-red-600 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">Pilih Status</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Non Aktif">Non Aktif</option>
                                    <option value="Demisioner">Demisioner</option>
                                </select>
                            </div>
                            <div class="text-xs text-red-500"> @error('status')
                                {{ $message }} @enderror</div>
                        </div> --}}
                        {{-- <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">
                                Gambar
                            </label>
                            <div
                                class="mt-1 flex justify-center px-6 pt-8 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    @if (isset($musik) && $musik->foto != '')
                                        <img src="{{ asset('storage/' . $musik->foto) }}"
                                            class="mx-auto h-12 w-12 text-gray-400 rounded" alt="">

                                    @else
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                    @endif


                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload"
                                            class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Upload a file</span>
                                            <input id="file-upload" name="gambar" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG, GIF up to 10MB
                                    </p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button"
                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Save
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModal()" type="button"
                            class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Cancel
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
