<div class="col-span-12 xl:col-span-6">
    <!-- BEGIN: Submodul -->
    <p class="text-2xl font-bold text-center bg-white py-2 rounded">Submodul</p>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Top Header -->
        <div class="-intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 justify-between">
            <button class="btn btn-success shadow-md mr-2">
                <a href="javascript:;" data-toggle="modal" data-target="#tambah-submodul-baru">
                    Tambah Submodul
                </a>
            </button>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-gray-700 dark:text-gray-300">
                    <form>
                        <input id='carian' type="text" class="form-control w-56 box pr-10 placeholder-theme-8"
                            placeholder="Carian..." value="{{ $submodul_kursuses_query }}" name="nama_submodul">
                        <button type="submit" class="w-4 h-4 absolute mb-auto mt-2 inset-y-0 mr-3 right-0">
                            <i data-feather="search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- END: Top Header -->

        <!-- BEGIN: Users Layout -->
        <div class="col-span-12">
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-300">
                        <th class="w-1/12 py-3 border-2 border-gray-400">#</th>
                        {{-- <th class="w-1/12 py-3 border-2 border-gray-400">Slot</th> --}}
                        <th class="w-9/12 py-3 border-2 border-gray-400">Nama Sub Modul</th>
                        <th class="w-2/12 py-3 border-2 border-gray-400">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($submodul_kursuses as $submodul_kursus)
                    {{-- {{dd($submodul_kursus)}} --}}
                    <tr class={{$loop->index % 2!=0 ? 'bg-gray-300' : 'bg-none' }}>
                        <td class="text-center py-3 border-2 border-gray-400">{{ $loop->index + 1 }}</td>
                        {{-- <td class="text-center py-3 border-2 border-gray-400">
                            <i data-feather="arrow-up" class="w-3 h-3"></i>
                        </td> --}}
                        <td class="text-center py-3 border-2 border-gray-400">{{ $submodul_kursus['nama_submodul']
                            }}</td>
                        <td class="text-center py-3 border-2 border-gray-400">
                            <a title="Edit" class="btn btn-success p-1" href="javascript:;" data-toggle="modal"
                                data-target="#edit-submodul-{{ $loop->index }}">
                                <i data-feather="edit" class="w-3 h-3 text-white"></i>
                            </a>
                            <a title="Delete" class="btn btn-danger p-1 delete-submodul-kursus"
                                id="{{ $submodul_kursus['id'] }}">
                                <i data-feather="trash-2" class="w-3 h-3 text-white"></i>
                            </a>
                        </td>
                    </tr>
                    @include('../pages/Kursus/Submodul/edit-submodul-modal', [$loop->index, $submodul_kursus])
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Users Layout -->
    </div>
    <!-- END: Submodul -->

    <!-- BEGIN: Objektif Kursus -->
    <p class="text-2xl font-bold mt-5 text-center bg-white py-2 rounded">Objektif Kursus</p>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Top Header -->
        <div class="-intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 justify-between">
            <button class="btn btn-success shadow-md mr-2">
                <a href="javascript:;" data-toggle="modal" data-target="#tambah-objektif-baru">
                    Tambah Objektif
                </a>
            </button>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-gray-700 dark:text-gray-300">
                    <form>
                        <input id='carian' type="text" class="form-control w-56 box pr-10 placeholder-theme-8"
                            placeholder="Carian..." value="{{ $objektif_kursuses_query }}" name="objektif_kursus">
                        <button type="submit" class="w-4 h-4 absolute mb-auto mt-2 inset-y-0 mr-3 right-0">
                            <i data-feather="search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- END: Top Header -->

        <!-- BEGIN: Users Layout -->
        <div class="col-span-12">
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-300">
                        <th class="w-1/12 py-3 border-2 border-gray-400">#</th>
                        <th class="w-9/12 py-3 border-2 border-gray-400">Objektif</th>
                        <th class="w-2/12 py-3 border-2 border-gray-400">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objektif_kursuses as $objektif_kursus)
                    <tr class={{$loop->index % 2!=0 ? 'bg-gray-300' : 'bg-none' }}>
                        <td class="text-center py-3 border-2 border-gray-400">{{ $loop->index + 1 }}</td>
                        <td class="text-center py-3 border-2 border-gray-400">{{ $objektif_kursus['objektif_kursus']
                            }}
                        </td>
                        <td class="text-center py-3 border-2 border-gray-400">
                            <a title="Edit" class="btn btn-success p-1" href="javascript:;" data-toggle="modal"
                                data-target="#edit-objektif-kursus-{{ $loop->index }}">
                                <i data-feather="edit" class="w-3 h-3 text-white"></i>
                            </a>
                            <a title="Delete" class="btn btn-danger p-1 delete-objektif-kursus"
                                id="{{ $objektif_kursus['id'] }}">
                                <i data-feather="trash-2" class="w-3 h-3 text-white"></i>
                            </a>
                        </td>
                    </tr>
                    @include('../pages/Kursus/Objektif/edit-objektif-modal', [$loop->index, $objektif_kursus])
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Users Layout -->
    </div>
    <!-- END: Objektif Kursus -->

</div>