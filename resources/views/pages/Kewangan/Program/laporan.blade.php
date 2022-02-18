@extends('../layout/' . $layout)

@section('subhead')
<title>Laporan Program | MyISM</title>
@endsection

@section('subcontent')
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Kewangan</h2>
<div class="grid grid-cols-12 gap-5 mt-5">
    <!-- BEGIN: Calendar Side Menu -->
    <div class="col-span-12">
        <div class="box p-5 intro-y">
            <!-- BEGIN: Show Modal Toggle -->
            <div class="text-center">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Laporan Program</h2>
            </div>

            <div class="input-form mb-6 px-2">
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
            <div class="flex flex-row w-full">
                <div class="input-form mb-6 w-1/2 px-2">
                    <label for="" class="form-label w-full flex flex-col sm:flex-row">
                        Tarikh Mula
                    </label>
                    <input class="datepicker form-control" data-single-mode="true"
                                    name="tarikh_mula">
                </div>
    
                <div class="input-form mb-6 w-1/2 px-2">
                    <label for="" class="form-label w-full flex flex-col sm:flex-row">
                        Tarikh Akhir
                    </label>
                    <input class="datepicker form-control" data-single-mode="true"
                                    name="tarikh_akhir">
                </div>
            </div>
            <div class="flex flex-row justify-center py-2">
                <button type="button" class="btn btn-primary"
                    onclick="document.getElementById('report-div').classList.remove('hidden')"
                ><i data-feather="mouse-pointer"></i>&nbsp;&nbsp;Jana</button>
            </div>
            

            <!-- END: Show Modal Toggle -->
            <div class="hidden border-t border-b border-gray-200 mt-6 mb-5 py-3" id="report-div">
                {{-- @include('../pages/Kursus/datepicker-modal') --}}
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-300">
                            <th class="w-1/12 py-3 border-2 border-gray-400">#</th>
                            <th class="w-3/12 py-3 border-2 border-gray-400">Nama Kluster</th>
                            <th class="w-2/12 py-3 border-2 border-gray-400">Nama Program</th>
                            <th class="w-2/12 py-3 border-2 border-gray-400">Tarikh Program</th>
                            <th class="w-2/12 py-3 border-2 border-gray-400">Lokasi Program</th>
                            <th class="w-2/12 py-3 border-2 border-gray-400">Jumlah Peserta</th>
                            <th class="w-2/12 py-3 border-2 border-gray-400">Jumlah Penceramah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-none">
                            <td class="text-center py-3 border-2 border-gray-400">1</td>
                            <td class="text-center py-3 border-2 border-gray-400">Social Development</td>
                            <td class="text-center py-3 border-2 border-gray-400">Kewangan Siri 1</td>
                            <td class="text-center py-3 border-2 border-gray-400">15/12/2021</td>
                            <td class="text-center py-3 border-2 border-gray-400">Dewan Kuliah</td>
                            <td class="text-center py-3 border-2 border-gray-400">20</td>
                            <td class="text-center py-3 border-2 border-gray-400">2</td>
                        </tr>
                        <tr class="bg-gray-300">
                            <td class="text-center py-3 border-2 border-gray-400">1</td>
                            <td class="text-center py-3 border-2 border-gray-400">Social Development</td>
                            <td class="text-center py-3 border-2 border-gray-400">Kewangan Siri 2</td>
                            <td class="text-center py-3 border-2 border-gray-400">15/12/2021</td>
                            <td class="text-center py-3 border-2 border-gray-400">Dewan Kuliah</td>
                            <td class="text-center py-3 border-2 border-gray-400">20</td>
                            <td class="text-center py-3 border-2 border-gray-400">2</td>
                        </tr>
                        <tr class="bg-none">
                            <td class="text-center py-3 border-2 border-gray-400">1</td>
                            <td class="text-center py-3 border-2 border-gray-400">Social Development</td>
                            <td class="text-center py-3 border-2 border-gray-400">Kewangan Siri 3</td>
                            <td class="text-center py-3 border-2 border-gray-400">15/12/2021</td>
                            <td class="text-center py-3 border-2 border-gray-400">Dewan Kuliah</td>
                            <td class="text-center py-3 border-2 border-gray-400">20</td>
                            <td class="text-center py-3 border-2 border-gray-400">2</td>
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