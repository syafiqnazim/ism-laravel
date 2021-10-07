@extends('../layout/' . $layout)

@section('subhead')
<title>Pendaftaran Kursus | MyISM</title>
@endsection

@section('subcontent')
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Senarai Kursus</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: Top Header -->
    <div class="-intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 justify-between">
        <button class="btn btn-primary shadow-md mr-2">
            <a href="javascript:;" data-toggle="modal" data-target="#tambah-kursus-baru">
                Tambah Kursus
            </a>
        </button>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                <form>
                    <input id='carian' type="text" class="form-control w-56 box pr-10 placeholder-theme-8"
                        placeholder="Carian..." value="{{ $query }}" name="nama_kursus">
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
                    <th class="w-1/5 py-3 border-2 border-gray-400">#</th>
                    <th class="w-2/5 py-3 border-2 border-gray-400">Nama Kursus / Kluster</th>
                    <th class="w-1/5 py-3 border-2 border-gray-400">Kapasiti</th>
                    <th class="w-1/5 py-3 border-2 border-gray-400">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kursuses as $kursus)
                <tr class={{$kursus['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none'}}>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $loop->index + 1 }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $kursus['nama_kursus'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $kursus['kapasiti'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">
                        <a title="Lihat" class="btn btn-primary p-1" href="javascript:;" data-toggle="modal"
                            data-target="#view-kursus-baru-{{ $loop->index }}">
                            <i data-feather="eye" class="w-3 h-3 text-white"></i>
                        </a>
                        <a title="Edit" class="btn btn-success p-1" href="javascript:;" data-toggle="modal"
                            data-target="#edit-kursus-baru-{{ $loop->index }}">
                            <i data-feather="edit" class="w-3 h-3 text-white"></i>
                        </a>
                        {{-- <a title="Buka" class="btn btn-warning p-1">
                            <i data-feather="calendar" class="w-3 h-3 text-white"></i>
                        </a> --}}
                        <a title="Delete" class="btn btn-danger p-1 delete-kursus" id="{{ $kursus['id'] }}">
                            <i data-feather="trash-2" class="w-3 h-3 text-white"></i>
                        </a>
                    </td>
                </tr>
                @include('../pages/Kursus/edit-kursus-modal', [$loop->index, $kursus])
                @include('../pages/Kursus/view-kursus-modal', [$loop->index, $kursus])
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- BEGIN: Users Layout -->
</div>
</div>

<!-- BEGIN: Success Notification Content -->
<div id="success-notification-content" class="toastify-content hidden flex">
    <i class="text-theme-10" data-feather="check-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">Berjaya!</div>
    </div>
</div>
<!-- END: Success Notification Content -->

<!-- BEGIN: Failed Notification Content -->
<div id="failed-notification-content" class="toastify-content hidden flex">
    <i class="text-theme-24" data-feather="x-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">Gagal!</div>
    </div>
</div>
<!-- END: Failed Notification Content -->

@include('../pages/Kursus/tambah-kursus-modal')
@endsection