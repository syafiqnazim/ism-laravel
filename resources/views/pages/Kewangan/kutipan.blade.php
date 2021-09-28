@extends('../layout/' . $layout)

@section('subhead')
<title>Penjadualan Kursus | MyISM</title>
@endsection

@section('subcontent')
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Kutipan</h2>
<div class="grid grid-cols-12 gap-5 mt-5">
    <!-- BEGIN: Calendar Side Menu -->
    <div class="col-span-12 xl:col-span-6">
        <div class="box p-5 intro-y">
            <!-- BEGIN: Show Modal Toggle -->
            <div class="text-center">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Senarai Kutipan Kursus</h2>
            </div>
            <!-- END: Show Modal Toggle -->
            <div class="border-t border-b border-gray-200 mt-6 mb-5 py-3" id="calendar-events">
                {{-- @include('../pages/Kursus/datepicker-modal') --}}
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-300">
                            <th class="w-1/12 py-3 border-2 border-gray-400">#</th>
                            <th class="w-3/12 py-3 border-2 border-gray-400">Nama Kursus</th>
                            <th class="w-2/12 py-3 border-2 border-gray-400">Bilik</th>
                            <th class="w-2/12 py-3 border-2 border-gray-400">Tarikh Mula</th>
                            <th class="w-2/12 py-3 border-2 border-gray-400">Tarikh Akhir</th>
                            <th class="w-2/12 py-3 border-2 border-gray-400">Bayaran</th>
                            <th class="w-2/12 py-3 border-2 border-gray-400">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kursuses as $kursus)
                        <tr class={{$kursus['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none'}}>
                            <td class="text-center py-3 border-2 border-gray-400">{{ $kursus['id'] }}</td>
                            <td class="text-left pl-5 py-3 border-2 border-gray-400">
                                <a href="#" class="text-blue-700 font-bold">{{ $kursus['nama_kursus'] }}</a>
                                <br />
                                {{ $kursus['kluster'] }}
                            </td>
                            <td class="text-center py-3 border-2 border-gray-400">{{ $kursus['bilik'] }}</td>
                            <td class="text-center py-3 border-2 border-gray-400">{{ $kursus['tarikh_mula'] }}</td>
                            <td class="text-center py-3 border-2 border-gray-400">{{ $kursus['tarikh_akhir'] }}</td>
                            <td class="text-center py-3 border-2 border-gray-400">RM 100</td>
                            <td class="text-center py-3 border-2 border-gray-400">
                                <button title="View" class="btn btn-primary p-1" href="#" id="edit">
                                    <i data-feather="eye" class="w-3 h-3 text-white"></i>
                                </button>
                                <button title="Edit" class="btn btn-success p-1" href="#" id="edit">
                                    <i data-feather="edit" class="w-3 h-3 text-white"></i>
                                </button>
                                <button title="Buka" class="btn btn-warning p-1" href="#" id="schedule" key="0">
                                    <i data-feather="calendar" class="w-3 h-3 text-white"></i>
                                </button>
                                <button title="Delete" class="btn btn-danger p-1" href="#" id="schedule" key="0">
                                    <i data-feather="trash-2" class="w-3 h-3 text-white"></i>
                                </button>
                            </td>
                        </tr>
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

@include('../pages/Kursus/datepicker-modal')
@endsection