@extends('../layout/' . $layout)

@section('subhead')
<title>Laporan Tempahan Makanan & Minuman | MyISM</title>
@endsection

@section('subcontent')
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Kewangan</h2>
<div class="grid grid-cols-12 gap-5 mt-5">
    <!-- BEGIN: Calendar Side Menu -->
    <div class="col-span-12">
        <div class="box p-5 intro-y">
            <!-- BEGIN: Show Modal Toggle -->
            <div class="text-center">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Laporan Tempahan Makanan & Minuman</h2>
            </div>

            <div class="input-form mb-6">
                <label for="" class="form-label w-full flex flex-col sm:flex-row">
                    Nama Kluster
                </label>
                <select id="" name="kluster" class="w-full form-select box border-gray-300" data-pristine-required="">
                    <option value="">Pilih Satu</option>
                    @foreach ($klusters as $item)
                        <option value="{{ $item->id  }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-form mb-6">
                <label for="" class="form-label w-full flex flex-col sm:flex-row">
                    Nama Program
                </label>
                <select id="" name="program" class="w-full form-select box border-gray-300" data-pristine-required=""
                    onchange="document.getElementById('report-div').classList.remove('hidden')"
                >
                    <option value="">Pilih Satu</option>
                    <option value="">Semua</option>
                    @foreach ($kursuses as $item)
                        <option value="{{ $item->id  }}">{{ $item->nama_kursus }}</option>
                    @endforeach
                </select>
            </div>
            <div class="hidden" id="report-div">
                <div class="input-form mb-6">
                    <label for="" class="form-label w-full flex flex-col sm:flex-row">
                        Lokasi Program
                    </label>
                    <input type="text" class="form-control py-1 px-2 border-gray-300 block" value="Bilik Kuliah 1" readonly>
                </div>
    
                <div class="input-form mb-6">
                    <label for="" class="form-label w-full flex flex-col sm:flex-row">
                        Jumlah Peserta
                    </label>
                    <input type="text" class="form-control py-1 px-2 border-gray-300 block" value="30 orang" readonly>
                </div>
    
                <!-- END: Show Modal Toggle -->
                <div class="border-t border-b border-gray-200 mt-6 mb-5 py-3">
                    {{-- @include('../pages/Kursus/datepicker-modal') --}}
                    <table class="table-fixed w-full">
                        <thead>
                            <tr class="bg-gray-300">
                                <th class="w-1/12 py-3 border-2 border-gray-400">#</th>
                                <th class="w-3/12 py-3 border-2 border-gray-400">Tarikh</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Makan Pagi</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Minum Pagi</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Makan Tengah Hari</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Minum Petang</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Makan Malam</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Minum Malam</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-none">
                                <td class="text-center py-3 border-2 border-gray-400">1</td>
                                <td class="text-center py-3 border-2 border-gray-400">15/12/2021</td>
                                <td class="text-center py-3 border-2 border-gray-400">Hidang</td>
                                <td class="text-center py-3 border-2 border-gray-400">Hidang</td>
                                <td class="text-center py-3 border-2 border-gray-400">Hidang</td>
                                <td class="text-center py-3 border-2 border-gray-400">Hidang</td>
                                <td class="text-center py-3 border-2 border-gray-400">Tidak</td>
                                <td class="text-center py-3 border-2 border-gray-400">Tidak</td>
                            </tr>
                            <tr class="bg-gray-300">
                                <td class="text-center py-3 border-2 border-gray-400">2</td>
                                <td class="text-center py-3 border-2 border-gray-400">16/12/2021</td>
                                <td class="text-center py-3 border-2 border-gray-400">Buffet</td>
                                <td class="text-center py-3 border-2 border-gray-400">Buffet</td>
                                <td class="text-center py-3 border-2 border-gray-400">Buffet</td>
                                <td class="text-center py-3 border-2 border-gray-400">Packed Food</td>
                                <td class="text-center py-3 border-2 border-gray-400">Tidak</td>
                                <td class="text-center py-3 border-2 border-gray-400">Tidak</td>
                            </tr>
                            <tr class="bg-none">
                                <td class="text-center py-3 border-2 border-gray-400">3</td>
                                <td class="text-center py-3 border-2 border-gray-400">17/12/2021</td>
                                <td class="text-center py-3 border-2 border-gray-400">Buffet</td>
                                <td class="text-center py-3 border-2 border-gray-400">Buffet</td>
                                <td class="text-center py-3 border-2 border-gray-400">Buffet</td>
                                <td class="text-center py-3 border-2 border-gray-400">Packed Food</td>
                                <td class="text-center py-3 border-2 border-gray-400">Tidak</td>
                                <td class="text-center py-3 border-2 border-gray-400">Tidak</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex flex-row justify-center py-2">
                        <button type="button" class="btn"><i data-feather="printer"></i>&nbsp;&nbsp;Cetak</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
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

{{-- @include('../pages/Kursus/datepicker-modal') --}}
@endsection