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
                <label for="kluster" class="form-label w-full flex flex-col sm:flex-row">
                    Nama Kluster
                </label>
                <input type="text" class="form-control py-1 px-2 border-gray-300 block" id="kluster" name="" value="{{$kursus->kursusKluster->name}}" disabled>
            </div>

            <div class="input-form mb-6">
                <label for="" class="form-label w-full flex flex-col sm:flex-row">
                    Nama Program
                </label>
                <input type="text" class="form-control py-1 px-2 border-gray-300 block" id="kluster" name="" value="{{$kursus->nama_kursus}}" disabled>
                <input type="hidden" name="kursus_id" value="{{$kursus->id}}">
            </div>

            <div class="input-form mb-6">
                <label for="" class="form-label w-full flex flex-col sm:flex-row">
                    Yuran Program
                </label>
                <select id="" name="yuran_program" class="w-full form-select box border-gray-300" data-pristine-required="">
                    <option value="-1">Pilih Satu</option>
                    <option {{$kursus->fee == '50' ? 'selected' : '' }} value="50">RM50</option>
                    <option {{$kursus->fee == '30' ? 'selected' : '' }} value="30">RM30</option>
                    <option {{$kursus->fee == 'PERCUMA' ? 'selected' : '' }} value="PERCUMA">PERCUMA</option>
                </select>
            </div>

            <div class="flex flex-row items-center">
                <input type="checkbox" id="is_free_b40" name="is_free_b40" {{ $kursus->is_free_b40 ? 'checked' : '' }} value="1">
                <label for="is_free_b40" class="ml-2">Kategori B40 dikecualikan</label><br>
            </div>

            <!-- END: Show Modal Toggle -->
            <div class="border-t border-b border-gray-200 mt-6 mb-5 py-3">
                {{-- @include('../pages/Kursus/datepicker-modal') --}}
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-300">
                            <th class="w-1/12 py-3 border-2 border-gray-400">#</th>
                            <th class="w-3/12 py-3 border-2 border-gray-400">Nama</th>
                            <th class="w-2/12 py-3 border-2 border-gray-400">Nama Program</th>
                            <th class="w-2/12 py-3 border-2 border-gray-400">Tarikh Bayaran</th>
                            <th class="w-2/12 py-3 border-2 border-gray-400">No Resit</th>
                            <th class="w-2/12 py-3 border-2 border-gray-400">Kategori</th>
                            <th class="w-2/12 py-3 border-2 border-gray-400">Bayaran (RM)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($participants as $participant)
                            @php
                                $bayaranYuran = $participant->bayaranYuran()->where('kursus_id', $kursus->id)->first();
                                if($bayaranYuran) {
                                    $tarikhBayaran = $bayaranYuran->tarikh_bayaran;
                                    $noResit = $bayaranYuran->no_resit;
                                }
                            @endphp
                            <tr class="{{$loop->odd?'bg-none':'bg-gray-300'}}">
                                <td class="text-center py-3 border-2 border-gray-400">{{$loop->iteration}}</td>
                                <td class="text-center py-3 border-2 border-gray-400">{{$participant->name}}</td>
                                <td class="text-center py-3 border-2 border-gray-400">{{$kursus->nama_kursus}}</td>
                                <td class="text-center py-3 border-2 border-gray-400">
                                    <input type="date" class="form-control py-1 px-2 border-gray-300 block tarikh-bayaran" data-id="{{$participant->id}}" placeholder="" value="{{$bayaranYuran?$tarikhBayaran:''}}">
                                </td>
                                <td class="text-center py-3 border-2 border-gray-400">
                                    <input type="text" class="form-control py-1 px-2 border-gray-300 block no-resit" data-id="{{$participant->id}}" placeholder="No Resit" value="{{$bayaranYuran?$noResit:''}}" >
                                </td>
                                <td class="text-center py-3 border-2 border-gray-400">{{$participant->kumpulan_isi_rumah}}</td>
                                <td class="text-center py-3 border-2 border-gray-400 {{$participant->kumpulan_isi_rumah == 'B40' ? 'bayaran-b40' : 'bayaran'}}">{{($participant->kumpulan_isi_rumah == 'B40' && $kursus->is_free_b40)?'PERCUMA':$kursus->fee}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex flex-row justify-center py-2">
                    <button type="button" class="btn btn-primary" id="save-kutipan-yuran" data-id="{{$kursus->id}}"><i data-feather="save"></i>&nbsp;&nbsp;Simpan</button>
                    <button type="button" class="btn btn-danger mx-1" onclick="history.back();"><i data-feather="x"></i>&nbsp;&nbsp;Batal</button>
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
        <div class="text-gray-600 mt-1 toast-text">
            Please check your e-mail for further info!
        </div>
    </div>
</div>
<!-- END: Success Notification Content -->
<!-- BEGIN: Failed Notification Content -->
<div id="failed-notification-content" class="toastify-content hidden flex">
    <i class="text-theme-24" data-feather="x-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">Failed!</div>
        <div class="text-gray-600 mt-1 toast-text">
            Please check the fileld form.
        </div>
    </div>
</div>
<!-- END: Failed Notification Content -->

{{-- @include('../pages/Kursus/datepicker-modal') --}}
@endsection

@section('script')
<script>
    
</script>
@endsection
