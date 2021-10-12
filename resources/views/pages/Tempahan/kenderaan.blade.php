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
                        <div class="flex justify-between items-center">
                            <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center">Senarai Tempahan</h2>
                            <a class="btn btn-primary shadow-md mr-2" href="javascript:;" data-toggle="modal"
                                data-target="#tambah-tempahan-baru">
                                Tempahan Baru
                            </a>
                        </div>
                        <!-- END: Show Modal Toggle -->
                        <div class="border-t border-b border-gray-200 mt-6 mb-5 py-3" id="calendar-events">
                            <table class="table-fixed w-full">
                                <thead>
                                    <tr class="bg-gray-300">
                                        <th class="w-1/12 py-3 border-2 border-gray-400">#</th>
                                        <th class="w-4/12 py-3 border-2 border-gray-400">No Pendaftaran & Jenama/Model
                                        </th>
                                        <th class="w-2/12 py-3 border-2 border-gray-400">Pemandu</th>
                                        <th class="w-2/12 py-3 border-2 border-gray-400">Jenis Kenderaan</th>
                                        <th class="w-2/12 py-3 border-2 border-gray-400">Tarikh</th>
                                        <th class="w-1/12 py-3 border-2 border-gray-400">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tempahan_kenderaans as $tempahan_kenderaan)
                                    <tr class={{$tempahan_kenderaan['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none'}}>
                                        <td class="text-center py-3 border-2 border-gray-400">{{ $loop->index + 1 }}
                                        </td>
                                        <td class="text-center py-3 border-2 border-gray-400">
                                            <div>{{ $tempahan_kenderaan['jenis_kenderaan'] }}</div>
                                            <div>{{ $tempahan_kenderaan['nama_penempah'] }}</div>
                                            <div>{{ $tempahan_kenderaan['ic_penempah'] }}</div>
                                            <div>{{ $tempahan_kenderaan['destinasi'] }}</div>
                                            <div>{{ $tempahan_kenderaan['tujuan'] }}</div>
                                        </td>
                                        <td class="text-center py-3 border-2 border-gray-400">Syamsul Anizam</td>
                                        <td class="text-center py-3 border-2 border-gray-400">Bas</td>
                                        <td class="text-center py-3 border-2 border-gray-400">
                                            <div>Tarikh Mula:</div>
                                            <div>{{ $tempahan_kenderaan['tarikh_mula'] }}</div>
                                            <br />
                                            <div>Tarikh Akhir:</div>
                                            <div>{{ $tempahan_kenderaan['tarikh_akhir'] }}</div>
                                            <br />
                                            <div>Tarikh Tempahan:</div>
                                            <div>{{ date("Y-m-d",strtotime($tempahan_kenderaan['created_at'])) }}</div>
                                        </td>
                                        <td class="text-center py-3 border-2 border-gray-400">
                                            <a title="Pilih Tarikh" class="btn btn-primary p-1" href="javascript:;"
                                                data-toggle="modal"
                                                data-target="#datepicker-modal-kenderaan-{{ $loop->index }}">
                                                <i data-feather="calendar" class="w-3 h-3 text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @include('../pages/Tempahan/datepicker-modal-kenderaan', [$loop->index,
                                    $tempahan_kenderaan])
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
            <div class="mt-10 flex justify-end">
                <a class="btn btn-primary shadow-md mr-2" href="javascript:;" data-toggle="modal"
                    data-target="#tambah-kenderaan-baru">
                    Tambah Kenderaan
                </a>
            </div>
            <table class="table-fixed w-full mt-5">
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
                    @foreach ($senarai_kenderaans as $senarai_kenderaan)
                    <tr class={{ $senarai_kenderaan['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none'}}>
                        <td class="text-center py-3 border-2 border-gray-400">{{ $loop->index + 1 }}</td>
                        <td class="text-center py-3 border-2 border-gray-400">{{ $senarai_kenderaan['no_pendaftaran'] }}
                        </td>
                        <td class="text-center py-3 border-2 border-gray-400">{{ $senarai_kenderaan['jenama'] }}</td>
                        <td class="text-center py-3 border-2 border-gray-400">
                            {{ $senarai_kenderaan['jenis_kenderaan'] }}</td>
                        <td class="text-center py-3 border-2 border-gray-400">
                            <a title="Edit" class="btn btn-success p-1" href="javascript:;" data-toggle="modal"
                                data-target="#edit-kenderaan-{{ $loop->index }}">
                                <i data-feather="edit" class="w-3 h-3 text-white"></i>
                            </a>
                            <a title="Delete" class="btn btn-danger p-1 delete-kenderaan"
                                id="{{ $senarai_kenderaan['id'] }}">
                                <i data-feather="trash-2" class="w-3 h-3 text-white"></i>
                            </a>
                        </td>
                    </tr>
                    @include('../pages/Tempahan/edit-kenderaan-modal', [$loop->index, $senarai_kenderaan])
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="profile" class="tab-pane" role="tabpanel" aria-labelledby="profile-tab">
            <div class="mt-10 flex justify-end">
                <a class="btn btn-primary shadow-md mr-2" href="javascript:;" data-toggle="modal"
                    data-target="#tambah-pemandu-baru">
                    Tambah Pemandu
                </a>
            </div>
            <table class="table-fixed w-full mt-5">
                <thead>
                    <tr class="bg-gray-300">
                        <th class="w-1/5 py-3 border-2 border-gray-400">#</th>
                        <th class="w-2/5 py-3 border-2 border-gray-400">Nama Pemandu</th>
                        <th class="w-1/5 py-3 border-2 border-gray-400">No. Kad Pengenalan</th>
                        <th class="w-1/5 py-3 border-2 border-gray-400">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($senarai_pemandus as $senarai_pemandu)
                    <tr class={{$senarai_pemandu['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none'}}>
                        <td class="text-center py-3 border-2 border-gray-400">{{ $loop->index + 1 }}</td>
                        <td class="text-center py-3 border-2 border-gray-400">{{ $senarai_pemandu['nama_pemandu'] }}
                        </td>
                        <td class="text-center py-3 border-2 border-gray-400">{{ $senarai_pemandu['ic_pemandu'] }}</td>
                        <td class="text-center py-3 border-2 border-gray-400">
                            <a title="Edit" class="btn btn-success p-1" href="javascript:;" data-toggle="modal"
                                data-target="#edit-pemandu-{{ $loop->index }}">
                                <i data-feather="edit" class="w-3 h-3 text-white"></i>
                            </a>
                            <a title="Delete" class="btn btn-danger p-1 delete-pemandu"
                                id="{{ $senarai_pemandu['id'] }}">
                                <i data-feather="trash-2" class="w-3 h-3 text-white"></i>
                            </a>
                        </td>
                    </tr>
                    @include('../pages/Tempahan/edit-pemandu-modal', [$loop->index, $senarai_pemandu])
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
@include('../pages/Tempahan/tambah-pemandu-modal')
@include('../pages/Tempahan/tambah-kenderaan-modal')
@include('../pages/Tempahan/tambah-tempahan-modal', [$senarai_kenderaan, $senarai_pemandu])
@endsection