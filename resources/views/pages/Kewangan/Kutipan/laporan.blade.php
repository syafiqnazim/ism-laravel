@extends('../layout/' . $layout)

@section('subhead')
<title>Kutipan Yuran | MyISM</title>
<style>
    @media screen {
        #print {
            display: none;
        }
    }

    @media print {
        #print {
            display: block;
        }

        body>div:not(#printable) {
            display: none;
        }

        #print {
            width: 21cm;
            position: absolute;
            left: 0;
            top: 0;
        }
    }
</style>
@endsection

@section('subcontent')
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Kewangan</h2>
<div class="grid grid-cols-12 gap-5 mt-5">
    <!-- BEGIN: Calendar Side Menu -->
    <div class="col-span-12">
        <div class="box p-5 intro-y">
            <!-- BEGIN: Show Modal Toggle -->
            <div class="text-center">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Kutipan Yuran</h2>
            </div>

            <div class="input-form mb-6">
                <label for="" class="form-label w-full flex flex-col sm:flex-row">
                    Nama Kluster
                </label>
                <select id="kluster" name="kluster" class="w-full form-select box border-gray-300" data-pristine-required="">
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
                <select id="program" name="program" class="w-full form-select box border-gray-300" data-pristine-required=""></select>
            </div>

            <div class="hidden" id="report-div">
                <div class="input-form mb-6">
                    <label for="" class="form-label w-full flex flex-col sm:flex-row">
                        Yuran Program (RM)
                    </label>
                    <input type="text" class="form-control py-1 px-2 border-gray-300 block" id="fee" value="" readonly>

                <div class="flex flex-row items-center">
                    <input type="checkbox" id="is_free_b40" name="" value="1" disabled>
                    <label for="is_free_b40" class="ml-2">Kategori B40 dikecualikan</label><br>
                </div>

                <!-- END: Show Modal Toggle -->
                <div class="border-t border-b border-gray-200 mt-6 mb-5 py-3">
                    {{-- @include('../pages/Kursus/datepicker-modal') --}}
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">
                        SENARAI NAMA PESERTA YANG TELAH MEMBUAT BAYARAN YURAN KURSUS BAGI <span id="reportHeader"></span>
                    </h2>
                    <h2 class="intro-x font-bold text-xl xl:text-3xl text-center mt-5">
                        PADA <span id="tarikhProgramSpan"></span>
                    </h2>
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">
                        ANJURAN KLUSTER : <span id="klusterName"></span>
                    </h2>
                    <div class="font-bold">Maklumat Bayaran Yuran Program</div>
                    <table class="table-fixed w-full">
                        <thead>
                            <tr class="bg-gray-300">
                                <th class="w-1/12 py-3 border-2 border-gray-400">#</th>
                                <th class="w-3/12 py-3 border-2 border-gray-400">Nama</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">No Kad Pengenalan</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Tarikh Bayaran</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">No Resit</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Kategori</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Kadar Yuran (RM)</th>
                            </tr>
                        </thead>
                        <tbody id="paidTableBody">
                        </tbody>
                    </table>
                    <div class="font-bold mt-2">Maklumat Tanpa Bayaran Yuran Program</div>
                    <table class="table-fixed w-full">
                        <thead>
                            <tr class="bg-gray-300">
                                <th class="w-1/12 py-3 border-2 border-gray-400">#</th>
                                <th class="w-3/12 py-3 border-2 border-gray-400">Nama</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">No Kad Pengenalan</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Kategori</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Kadar Yuran (RM)</th>
                            </tr>
                        </thead>
                        <tbody id="freeTableBody">
                        </tbody>
                    </table>
                    <div class="flex flex-row justify-center py-2">
                        <a href="#" id="kemasKiniBtn" class="btn btn-primary"><i data-feather="edit"></i>&nbsp;&nbsp;Kemas Kini</a>
                        <a href="#" id="cetakBtn" class="btn" target="_blank"><i data-feather="printer"></i>&nbsp;&nbsp;Cetak</a>
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
        <div class="font-medium">Success!</div>
        <div class="text-gray-600 mt-1">
            Maklumat Kutipan Yuran Telah Disimpan
        </div>
    </div>
</div>
<!-- END: Success Notification Content -->
<!-- BEGIN: Failed Notification Content -->
<div id="failed-notification-content" class="toastify-content hidden flex">
    <i class="text-theme-24" data-feather="x-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">Failed!</div>
        <div class="text-gray-600 mt-1">
            Maklumat Kutipan Yuran Gagal Disimpan. Hubungi Pentadbir Sistem Jika Berterusan.
        </div>
    </div>
</div>
<!-- END: Failed Notification Content -->

{{-- @include('../pages/Kursus/datepicker-modal') --}}
@endsection

@section('script')
<script>

    document.addEventListener("DOMContentLoaded", function(event) {

        document.getElementById('kluster').addEventListener("change", (event) => {
            var klusterId = event.target.value;
            axios.get('rating-penceramah/list-program/' + klusterId)
            .then(response => {
                var html = `<option value="-1">Pilih Satu</option>`;
                response.data.forEach(element => {
                    html += `<option value="${element.id}">${element.nama_kursus}</option>`;
                });
                document.getElementById('program').innerHTML = html;
            });
        });

        document.getElementById('program').addEventListener('change', event => {

            axios.get('kursus/'+ event.target.value)
            .then(response => {
                document.getElementById('fee').value = response.data.fee;
                if(response.data.is_free_b40 == '1') {
                    document.getElementById('is_free_b40').checked = true;
                } else {
                    document.getElementById('is_free_b40').checked = false;
                }
                document.getElementById('kemasKiniBtn').href = 'kutipan-yuran/kemas-kini/' + response.data.id;
                document.getElementById('cetakBtn').href = 'kutipan-yuran/cetak/' + response.data.id;
            });

            axios.get('peserta/program/' + event.target.value)
            .then(response => {
                var html1 = '', html2 = '';
                var countPaid = 0, countFree = 0, totalYuran = 0, totalYuranDiterima = 0;
                response.data.forEach(data => {
                    
                    document.getElementById('reportHeader').innerHTML = data.nama_kursus.toUpperCase();;
                    document.getElementById('klusterName').innerHTML = data.program.kursus_kluster.name.toUpperCase();
                    document.getElementById('tarikhProgramSpan').innerHTML = new Date(data.program.tarikh_mula).toLocaleDateString();
                    if((data.program.is_free_b40 == '1') && (data.kumpulan_isi_rumah == 'B40')) {
                        countFree++;
                        html1 +=  `
                            <tr class="${ countFree % 2 ? 'bg-none' : 'bg-gray-300' }">
                                <td class="text-center py-3 border-2 border-gray-400">${countFree}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${data.name}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${data.ic_number}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${data.kumpulan_isi_rumah}</td>
                                <td class="text-center py-3 border-2 border-gray-400 program-fee">PERCUMA</td>
                            </tr>
                            `;
                    } else {
                        countPaid++;
                        totalYuran = totalYuran + data.program.fee;
                        if(data.bayaran_yuran.length > 0) {
                            totalYuranDiterima = totalYuranDiterima + data.program.fee;
                        }
                        html2 +=  `
                            <tr class="${ countPaid % 2 ? 'bg-none' : 'bg-gray-300' }">
                                <td class="text-center py-3 border-2 border-gray-400">${countPaid}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${data.name}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${data.ic_number}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${(data.bayaran_yuran.length > 0) && data.bayaran_yuran[0].tarikh_bayaran?(new Date(data.bayaran_yuran[0].tarikh_bayaran).toLocaleDateString('fr')):''}</td>
                                <td class="text-center py-3 border-2 border-gray-400">
                                    <input type="text" class="form-control py-1 px-2 border-gray-300 block" placeholder="No Resit" value="${data.bayaran_yuran.length > 0?data.bayaran_yuran[0].no_resit:''}" readonly>
                                </td>
                                <td class="text-center py-3 border-2 border-gray-400 program-fee">${data.kumpulan_isi_rumah}</td>
                                <td class="text-center py-3 border-2 border-gray-400 program-fee">RM${data.program.fee}</td>
                            </tr>
                            `;
                    }
                });
                if(response.data.length == 0) {
                    document.getElementById('reportHeader').innerHTML = document.querySelector('#program option:checked').text.toUpperCase();
                    document.getElementById('klusterName').innerHTML = document.querySelector('#kluster option:checked').text.toUpperCase();
                    document.getElementById('tarikhProgramSpan').innerHTML = '';
                }
                document.getElementById('report-div').classList.remove('hidden');
                document.getElementById('freeTableBody').innerHTML = html1;
                html2 +=  `
                            <tr class="${ (countPaid+1) % 2 ? 'bg-none' : 'bg-gray-300' }">
                                <td colspan="6" class="text-right py-3 px-2 border-2 border-gray-400">Jumlah</td>
                                <td colspan="6" class="text-center py-3 border-2 border-gray-400">RM${totalYuran}</td>
                            </tr>
                            <tr class="${ (countPaid+2) % 2 ? 'bg-none' : 'bg-gray-300' }">
                                <td colspan="6" class="text-right py-3 px-2 border-2 border-gray-400">Jumlah Diterima</td>
                                <td colspan="6" class="text-center py-3 border-2 border-gray-400">RM${totalYuranDiterima}</td>
                            </tr>
                            `;
                document.getElementById('paidTableBody').innerHTML = html2;

            });
        });
    });

</script>
@endsection
