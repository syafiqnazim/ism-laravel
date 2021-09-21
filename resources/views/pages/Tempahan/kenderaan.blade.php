@extends('../layout/' . $layout)

@section('subhead')
<title>Penjadualan Kursus | MyISM</title>
@endsection

@section('subcontent')
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center my-5">Tempahan Kenderaan</h2>
<!-- BEGIN: Chat Side Menu -->
<div class="col-span-12 lg:col-span-4 2xl:col-span-3">
    <div class="intro-y pr-1">
        <div class="box p-2">
            <div class="chat__tabs nav nav-tabs justify-center" role="tablist">
                <a id="chats-tab" data-toggle="tab" data-target="#chats" href="javascript:;"
                    class="flex-1 py-2 rounded-md text-center active" role="tab" aria-controls="chats"
                    aria-selected="true">Tempahan Kenderaan</a>
                <a id="friends-tab" data-toggle="tab" data-target="#friends" href="javascript:;"
                    class="flex-1 py-2 rounded-md text-center" role="tab" aria-controls="friends"
                    aria-selected="false">Senarai Kenderaan</a>
                <a id="profile-tab" data-toggle="tab" data-target="#profile" href="javascript:;"
                    class="flex-1 py-2 rounded-md text-center" role="tab" aria-controls="profile"
                    aria-selected="false">Senarai Pemandu</a>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div id="chats" class="tab-pane active" role="tabpanel" aria-labelledby="chats-tab">
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
                                        <th class="w-2/5 py-3 border-2 border-gray-400">No Pendaftaran & Jenama/Model
                                        </th>
                                        <th class="w-1/5 py-3 border-2 border-gray-400">Pemandu</th>
                                        <th class="w-1/5 py-3 border-2 border-gray-400">Jenis Kenderaan</th>
                                        <th class="w-1/5 py-3 border-2 border-gray-400">Tarikh Mula</th>
                                        <th class="w-1/5 py-3 border-2 border-gray-400">Tarikh Tamat</th>
                                        <th class="w-1/5 py-3 border-2 border-gray-400">Tarikh Tempahan</th>
                                        <th class="w-1/5 py-3 border-2 border-gray-400">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kursuses as $kursus)
                                    <tr class={{$kursus['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none'}}>
                                        <td class="text-center py-3 border-2 border-gray-400">{{ $kursus['id'] }}</td>
                                        <td class="text-center py-3 border-2 border-gray-400">
                                            <div>WKL 7793 (HINO)</div>
                                            <div><i data-feather="user" class="w-3/12"></i>Rohani Kassim</div>
                                            <div>[720610015652]</div>
                                            <div><i data-feather="map-pin" class="w-3/12"></i>KPWKM dan Sungai Besi, KL
                                            </div>
                                            <div><i data-feather="bookmark" class="w-3/12"></i>Menghantar Surat ke
                                                Putrajaya dan Sungai Besi</div>
                                        </td>
                                        <td class="text-center py-3 border-2 border-gray-400">Syamsul Anizam</td>
                                        <td class="text-center py-3 border-2 border-gray-400">Bas</td>
                                        <td class="text-center py-3 border-2 border-gray-400">26-01-2021</td>
                                        <td class="text-center py-3 border-2 border-gray-400">27-01-2021</td>
                                        <td class="text-center py-3 border-2 border-gray-400">26-01-2021</td>
                                        <td class="text-center py-3 border-2 border-gray-400">
                                            <a href="javascript:;" data-toggle="modal"
                                                data-target="#datepicker-modal-preview"
                                                class="btn btn-primary pilih-tarikh" id="{{ $kursus->id }}">
                                                Pilih Tarikh
                                            </a>
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
        </div>
        <div id="friends" class="tab-pane" role="tabpanel" aria-labelledby="friends-tab">
            <table class="table-fixed w-full mt-20">
                <thead>
                    <tr class="bg-gray-300">
                        <th class="w-1/5 py-3 border-2 border-gray-400">#</th>
                        <th class="w-2/5 py-3 border-2 border-gray-400">No Pendaftaran</th>
                        <th class="w-1/5 py-3 border-2 border-gray-400">Jenama / Model</th>
                        <th class="w-1/5 py-3 border-2 border-gray-400">Jenis Kenderaan</th>
                        <th class="w-1/5 py-3 border-2 border-gray-400">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kursuses as $kursus)
                    <tr class={{$kursus['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none'}}>
                        <td class="text-center py-3 border-2 border-gray-400">{{ $kursus['id'] }}</td>
                        <td class="text-center py-3 border-2 border-gray-400">WKL 7793</td>
                        <td class="text-center py-3 border-2 border-gray-400">HINO</td>
                        <td class="text-center py-3 border-2 border-gray-400">Bas</td>
                        <td class="text-center py-3 border-2 border-gray-400">
                            <a href="javascript:;" data-toggle="modal" data-target="#datepicker-modal-preview"
                                class="btn btn-primary pilih-tarikh" id="{{ $kursus->id }}">
                                Edit
                            </a>
                            <a href="javascript:;" data-toggle="modal" data-target="#datepicker-modal-preview"
                                class="btn btn-primary pilih-tarikh" id="{{ $kursus->id }}">
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="profile" class="tab-pane" role="tabpanel" aria-labelledby="profile-tab">
            <table class="table-fixed w-full mt-20">
                <thead>
                    <tr class="bg-gray-300">
                        <th class="w-1/5 py-3 border-2 border-gray-400">#</th>
                        <th class="w-2/5 py-3 border-2 border-gray-400">Nama Pemandu</th>
                        <th class="w-1/5 py-3 border-2 border-gray-400">No. Kad Pengenalan</th>
                        <th class="w-1/5 py-3 border-2 border-gray-400">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kursuses as $kursus)
                    <tr class={{$kursus['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none'}}>
                        <td class="text-center py-3 border-2 border-gray-400">{{ $kursus['id'] }}</td>
                        <td class="text-center py-3 border-2 border-gray-400">Syamsul Aznizam</td>
                        <td class="text-center py-3 border-2 border-gray-400">820304105297</td>
                        <td class="text-center py-3 border-2 border-gray-400">
                            <a href="javascript:;" data-toggle="modal" data-target="#datepicker-modal-preview"
                                class="btn btn-primary pilih-tarikh" id="{{ $kursus->id }}">
                                Edit
                            </a>
                            <a href="javascript:;" data-toggle="modal" data-target="#datepicker-modal-preview"
                                class="btn btn-primary pilih-tarikh" id="{{ $kursus->id }}">
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- END: Chat Side Menu -->

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