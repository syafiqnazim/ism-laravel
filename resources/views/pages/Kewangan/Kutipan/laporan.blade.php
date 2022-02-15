@extends('../layout/' . $layout)

@section('subhead')
<title>Kutipan Yuran | MyISM</title>
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
                        Yuran Program
                    </label>
                    <input type="text" class="form-control py-1 px-2 border-gray-300 block" value="RM30" readonly>
                    {{-- <select id="" name="yuran_program" class="w-full form-select box border-gray-300" data-pristine-required="">
                        <input type="text" class="form-control py-1 px-2 border-gray-300 block" value="Professional Development">
                        <option value="">Pilih Satu</option>
                        <option value="50">RM   50</option>
                        <option value="30">RM30</option>
                        <option value="PERCUMA">PERCUMA</option>
                    </select> --}}
                </div>

                <div class="flex flex-row items-center">
                    <input type="checkbox" id="lelaki" name="" value="1" checked disabled>
                    <label for="lelaki" class="ml-2">Kategori B40 dikecualikan</label><br>
                </div>

                <!-- END: Show Modal Toggle -->
                <div class="border-t border-b border-gray-200 mt-6 mb-5 py-3">
                    {{-- @include('../pages/Kursus/datepicker-modal') --}}
                    <div class="font-bold">Maklumat Bayaran Yuran Program</div>
                    <table class="table-fixed w-full">
                        <thead>
                            <tr class="bg-gray-300">
                                <th class="w-1/12 py-3 border-2 border-gray-400">#</th>
                                <th class="w-3/12 py-3 border-2 border-gray-400">Nama</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Nama Program</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Tarikh</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">No Resit</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Kategori</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Bayaran</th>
                            </tr>
                        </thead>
                        <tbody id="paidTableBody">
                            <tr class="bg-none">
                                <td class="text-center py-3 border-2 border-gray-400">1</td>
                                <td class="text-center py-3 border-2 border-gray-400">Amirul</td>
                                <td class="text-center py-3 border-2 border-gray-400">Keusahawanan</td>
                                <td class="text-center py-3 border-2 border-gray-400">15/12/2021</td>
                                <td class="text-center py-3 border-2 border-gray-400">
                                    <input type="text" class="form-control py-1 px-2 border-gray-300 block" placeholder="No Resit" readonly>
                                </td>
                                <td class="text-center py-3 border-2 border-gray-400">M40</td>
                                <td class="text-center py-3 border-2 border-gray-400">RM30</td>
                            </tr>
                            <tr class="bg-gray-300">
                                <td class="text-center py-3 border-2 border-gray-400">2</td>
                                <td class="text-center py-3 border-2 border-gray-400">Khairul</td>
                                <td class="text-center py-3 border-2 border-gray-400">Keusahawanan</td>
                                <td class="text-center py-3 border-2 border-gray-400">15/12/2021</td>
                                <td class="text-center py-3 border-2 border-gray-400">
                                    <input type="text" class="form-control py-1 px-2 border-gray-300 block" placeholder="No Resit" value="01121" readonly>
                                </td>
                                <td class="text-center py-3 border-2 border-gray-400">M40</td>
                                <td class="text-center py-3 border-2 border-gray-400">RM30</td>
                            </tr>
                            <tr class="bg-none">
                                <td class="text-center py-3 border-2 border-gray-400">3</td>
                                <td class="text-center py-3 border-2 border-gray-400">Amira</td>
                                <td class="text-center py-3 border-2 border-gray-400">Keusahawanan</td>
                                <td class="text-center py-3 border-2 border-gray-400">15/12/2021</td>
                                <td class="text-center py-3 border-2 border-gray-400">
                                    <input type="text" class="form-control py-1 px-2 border-gray-300 block" placeholder="No Resit" value="01122" readonly>
                                </td>
                                <td class="text-center py-3 border-2 border-gray-400">M40</td>
                                <td class="text-center py-3 border-2 border-gray-400">RM30</td>
                            </tr>
                            <tr class="">
                                <td colspan="6" class="text-right px-2 py-3 border-2 border-gray-400 font-bold">
                                    JUMLAH
                                </td>
                                <td class="text-center px-2 py-3 border-2 border-gray-400 font-bold">
                                    RM60
                                </td>
                            </tr>
                            {{-- @foreach ($kursuses as $kursus)
                            <tr class={{$kursus['id'] % 2==0 ? 'bg-gray-300' : 'bg-none' }}>
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
                            @endforeach --}}
                        </tbody>
                    </table>
                    <div class="font-bold mt-2">Maklumat Tanpa Bayaran Yuran Program</div>
                    <table class="table-fixed w-full">
                        <thead>
                            <tr class="bg-gray-300">
                                <th class="w-1/12 py-3 border-2 border-gray-400">#</th>
                                <th class="w-3/12 py-3 border-2 border-gray-400">Nama</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Nama Program</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Tarikh</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">No Resit</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Kategori</th>
                                <th class="w-2/12 py-3 border-2 border-gray-400">Bayaran</th>
                            </tr>
                        </thead>
                        <tbody id="freeTableBody">
                            <tr class="bg-none">
                                <td class="text-center py-3 border-2 border-gray-400">1</td>
                                <td class="text-center py-3 border-2 border-gray-400">Abu</td>
                                <td class="text-center py-3 border-2 border-gray-400">Keusahawanan</td>
                                <td class="text-center py-3 border-2 border-gray-400">15/12/2021</td>
                                <td class="text-center py-3 border-2 border-gray-400">
                                    <input type="text" class="form-control py-1 px-2 border-gray-300 block" placeholder="No Resit" readonly>
                                </td>
                                <td class="text-center py-3 border-2 border-gray-400">B40</td>
                                <td class="text-center py-3 border-2 border-gray-400">Percuma</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex flex-row justify-center py-2">
                        <a href="{{route('kutipan-yuran.edit')}}" class="btn btn-primary"><i data-feather="edit"></i>&nbsp;&nbsp;Kemas Kini</a>
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
            axios.get('peserta/program/' + event.target.value)
            .then(response => {
                var html1 = '', html2 = '';
                var count = 0;

                response.data.forEach(data => {
                    count++;
                    if(data.kumpulan_isi_rumah == 'B40') {
                        html1 +=  `
                            <tr class="${ count % 2 ? 'bg-none' : 'bg-gray-300' }">
                                <td class="text-center py-3 border-2 border-gray-400">${count}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${data.name}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${data.nama_kursus}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${(new Date(data.program.tarikh_mula).toLocaleDateString())}</td>
                                <td class="text-center py-3 border-2 border-gray-400">
                                    <input type="text" class="form-control py-1 px-2 border-gray-300 block" placeholder="No Resit" value="" readonly>
                                </td>
                                <td class="text-center py-3 border-2 border-gray-400">${data.kumpulan_isi_rumah}</td>
                                <td class="text-center py-3 border-2 border-gray-400 program-fee">PERCUMA</td>
                            </tr>
                            `;
                    } else {
                        html2 +=  `
                            <tr class="${ count % 2 ? 'bg-none' : 'bg-gray-300' }">
                                <td class="text-center py-3 border-2 border-gray-400">${count}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${data.name}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${data.nama_kursus}</td>
                                <td class="text-center py-3 border-2 border-gray-400">${(new Date(data.program.tarikh_mula).toLocaleDateString())}</td>
                                <td class="text-center py-3 border-2 border-gray-400">
                                    <input type="text" class="form-control py-1 px-2 border-gray-300 block" placeholder="No Resit" value="" readonly>
                                </td>
                                <td class="text-center py-3 border-2 border-gray-400">${data.kumpulan_isi_rumah}</td>
                                <td class="text-center py-3 border-2 border-gray-400 program-fee">RM30</td>
                            </tr>
                            `;
                    }


                });

                document.getElementById('report-div').classList.remove('hidden');
                document.getElementById('freeTableBody').innerHTML = html1;
                document.getElementById('paidTableBody').innerHTML = html2;
                console.log(response.data);
            });
        });
    });

</script>
@endsection
