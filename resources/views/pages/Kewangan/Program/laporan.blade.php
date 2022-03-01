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
                <select id="klusterId" name="kluster" class="w-full form-select box border-gray-300" data-pristine-required="">
                    <option value="-1">Pilih Satu</option>
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
                                    name="tarikh_mula" id="tarikh_mula">
                </div>
    
                <div class="input-form mb-6 w-1/2 px-2">
                    <label for="" class="form-label w-full flex flex-col sm:flex-row">
                        Tarikh Akhir
                    </label>
                    <input class="datepicker form-control" data-single-mode="true"
                                    name="tarikh_akhir" id="tarikh_akhir">
                </div>
            </div>
            <div class="flex flex-row justify-center py-2">
                <button type="button" class="btn btn-primary"
                    onclick="getProgram();"
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
                    <tbody id="tbodyDiv">
                    </tbody>
                </table>
                <div class="flex flex-row justify-center py-2">
                    <a href="#/" type="button" id="cetakBtn" class="btn" target="_blank"><i data-feather="printer"></i>&nbsp;&nbsp;Cetak</a>
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

@section('script')

    <script>
        function getProgram() {
            let klusterId = document.getElementById('klusterId').value;
            if(klusterId == -1) return false;
            let tarikh_mula = document.getElementById('tarikh_mula').value;
            let tarikh_akhir = document.getElementById('tarikh_akhir').value;
            let klusterName = document.getElementById('klusterId').options[document.getElementById('klusterId').selectedIndex].text;
            let html = '';
            tarikh_mula = new Date(tarikh_mula);
            tarikh_akhir = new Date(tarikh_akhir);
            tarikh_mula = tarikh_mula.getFullYear() + '-' + (tarikh_mula.getMonth()+1) + '-' + tarikh_mula.getDate();
            tarikh_akhir = tarikh_akhir.getFullYear() + '-' + (tarikh_akhir.getMonth()+1) + '-' + tarikh_akhir.getDate();
            axios.get('kursus/tarikh/kluster/' + tarikh_mula + '/' + tarikh_akhir + '/' + klusterId)
            .then(function(response) {
                var count = 0;
                console.log(response);
                if(response.data.length > 0) {
                    response.data.forEach(function(data) {
                        count++;
                        html += `
                            <tr class="${count%2?'bg-none':'bg-gray-300'}">
                                <td class="text-center py-3 border-2 border-gray-400">${count}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${klusterName}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${data.nama_kursus}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${new Date(data.tarikh_mula).toLocaleDateString('fr')}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${data.bilik}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${data.totalParticipants}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${data.totalPenceramah}</td>
                            </tr>
                        `;
                    });
                } else {
                    html = `
                            <tr class="bg-none">
                                <td colspan="7" class="text-center py-3 border-2 border-gray-400">Rekod Tidak Dijumpai</td>
                            </tr>
                        `;
                }

                document.getElementById('report-div').classList.remove('hidden');
                document.getElementById('tbodyDiv').innerHTML = html;
                document.getElementById('cetakBtn').href = `laporan-program/cetak/${tarikh_mula}/${tarikh_akhir}/${klusterId}`;
            });
        }

        function cetakLaporanProgram() {
            let klusterId = document.getElementById('klusterId').value;
        }
    </script>

@endsection