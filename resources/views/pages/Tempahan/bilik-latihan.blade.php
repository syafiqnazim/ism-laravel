@extends('../layout/' . $layout)

@section('subhead')
<title>Penjadualan Kursus | MyISM</title>
@endsection

@section('subcontent')
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Tempahan Bilik</h2>
<div class="grid grid-cols-12 gap-5 mt-5">
    <!-- BEGIN: Calendar Side Menu -->
    <div class="col-span-12 xl:col-span-6">
        <div class="box p-5 intro-y">
            <!-- BEGIN: Show Modal Toggle -->
            <div class="text-center">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Senarai Tempahan</h2>
            </div>
            <!-- END: Show Modal Toggle -->
            <div class="border-t border-b border-gray-200 mt-6 mb-5 py-3" id="calendar-events">
                {{-- @include('../pages/Kursus/datepicker-modal') --}}
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
                            <td class="text-center py-3 border-2 border-gray-400">{{ $kursus['id'] }}</td>
                            <td class="text-center py-3 border-2 border-gray-400">{{ $kursus['nama_kursus'] }}</td>
                            <td class="text-center py-3 border-2 border-gray-400">{{ $kursus['kapasiti'] }}</td>
                            <td class="text-center py-3 border-2 border-gray-400 flex justify-around">
                                {{-- <a class="btn btn-primary py-1 px-2" href="/ubah-pengguna/{{ $kursus['id'] }}">
                                Lihat
                                </a>
                                <a class="btn btn-success py-1 px-2" href="/ubah-kata-laluan/{{ $kursus['id'] }}">
                                    Objektif
                                </a>
                                <button id="{{ $kursus['id'] }}" class="btn btn-danger py-1 px-2 delete-kursus">
                                    Padam
                                </button> --}}
                                <a href="javascript:;" data-toggle="modal" data-target="#datepicker-modal-preview"
                                    class="btn btn-primary pilih-tarikh" id="{{ $kursus->id }}">
                                    Pilih Tarikh
                                </a>
                            </td>
                        </tr>
                        @include('../pages/Kursus/datepicker-modal', [$loop->index, $kursus])
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
            <div class="full-calendar" id="calendar"></div>
        </div>
    </div>
    <!-- END: Calendar Content -->
</div>



<!-- BEGIN: Success Notification Content -->
<div id="success-notification-content" class="toastify-content hidden flex">
    <i class="text-theme-10" data-feather="check-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">Registration success!</div>
        <div class="text-gray-600 mt-1">
            Please check your e-mail for further info!
        </div>
    </div>
</div>
<!-- END: Success Notification Content -->
<!-- BEGIN: Failed Notification Content -->
<div id="failed-notification-content" class="toastify-content hidden flex">
    <i class="text-theme-24" data-feather="x-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">Registration failed!</div>
        <div class="text-gray-600 mt-1">
            Please check the fileld form.
        </div>
    </div>
</div>
<!-- END: Failed Notification Content -->

@endsection