@extends('../layout/' . $layout)

@section('subhead')
<title>Peralatan ICT | MyISM</title>
@endsection

@section('subcontent')
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Senarai Tempahan Peralatan ICT</h2>
<div class="grid grid-cols-12 gap-5 mt-5">
    <!-- BEGIN: Calendar Side Menu -->
    <div class="col-span-12 xl:col-span-6">
        <div class="box p-5 intro-y">
            <!-- BEGIN: Show Modal Toggle -->
            <div class="text-left">
                <a class="btn btn-primary shadow-md mr-2" href="javascript:;" data-toggle="modal"
                    data-target="#tambah-pengurusanict-baru">
                    Tempahan Baru
                </a>
            </div>
            <!-- END: Show Modal Toggle -->
            <div class="border-t border-b border-gray-200 mt-6 mb-5 py-3" id="calendar-events">
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-300">
                            <th class="w-1/12 py-3 border-2 border-gray-400">#</th>
                            <th class="w-4/12 py-3 border-2 border-gray-400">Nama Kursus</th>
                            <th class="w-1/12 py-3 border-2 border-gray-400">Peralatan</th>
                            <th class="w-1/12 py-3 border-2 border-gray-400">Jumlah</th>
                            <th class="w-2/12 py-3 border-2 border-gray-400">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengurusanicts as $pengurusanict)
                        <tr class={{$pengurusanict['id'] % 2==0 ? 'bg-gray-300' : 'bg-none' }}>
                            <td class="text-center py-3 border-2 border-gray-400">{{ $loop->index + 1 }}</td>
                            <td class="text-center py-3 border-2 border-gray-400">{{ $pengurusanict['nama_kursus'] }}
                            </td>
                            <td class="text-center py-3 border-2 border-gray-400">{{ $pengurusanict['peralatan'] }}</td>
                            <td class="text-center py-3 border-2 border-gray-400">{{ $pengurusanict['jumlah'] }}</td>
                            <td class="text-center py-3 border-2 border-gray-400">
                                <a title="Lihat" class="btn btn-primary p-1" href="javascript:;" data-toggle="modal"
                                    data-target="#view-pengurusanict-{{ $loop->index }}">
                                    <i data-feather="eye" class="w-3 h-3 text-white"></i>
                                </a>
                                <a title="Edit" class="btn btn-success p-1" href="javascript:;" data-toggle="modal"
                                    data-target="#edit-pengurusanict-{{ $loop->index }}">
                                    <i data-feather="edit" class="w-3 h-3 text-white"></i>
                                </a>
                                {{-- <a title="Buka" class="btn btn-warning p-1">
                                    <i data-feather="calendar" class="w-3 h-3 text-white"></i>
                                </a> --}}
                                <a title="Delete" class="btn btn-danger p-1 delete-pengurusanict"
                                    id="{{ $pengurusanict['id'] }}">
                                    <i data-feather="trash-2" class="w-3 h-3 text-white"></i>
                                </a>
                            </td>
                        </tr>
                        @include('../pages/PengurusanICT/edit-pengurusanict-modal', [$loop->index,
                        $pengurusanict])
                        @include('../pages/PengurusanICT/view-pengurusanict-modal', [$loop->index, $pengurusanict])
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END: Calendar Side Menu -->
    <!-- BEGIN: Calendar Content -->
    <div class="col-span-12 xl:col-span-6">
        <div class="box p-5">
            <div class="full-calendar" id="calendar-peralatan-ict"></div>
        </div>
    </div>
    <!-- END: Calendar Content -->
</div>


<!-- BEGIN: Success Notification Content -->
<div id="success-notification-content" class="toastify-content hidden flex">
    <i class="text-theme-10" data-feather="check-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">Berjaya!</div>
        {{-- <div class="text-gray-600 mt-1">
            Please check your e-mail for further info!
        </div> --}}
    </div>
</div>
<!-- END: Success Notification Content -->
<!-- BEGIN: Failed Notification Content -->
<div id="failed-notification-content" class="toastify-content hidden flex">
    <i class="text-theme-24" data-feather="x-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">Gagal!</div>
        {{-- <div class="text-gray-600 mt-1">
            Please check the fileld form.
        </div> --}}
    </div>
</div>
<!-- END: Failed Notification Content -->

@include('../pages/PengurusanICT/tambah-pengurusanict-modal', [$kursuses])
@endsection