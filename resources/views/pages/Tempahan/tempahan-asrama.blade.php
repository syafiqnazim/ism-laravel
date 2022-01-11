@extends('../layout/' . $layout)

@section('subhead')
<title>Penjadualan Kursus | MyISM</title>


@endsection

@section('subcontent')
  

<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Tempahan Asrama</h2>
<div class="grid grid-cols-12 gap-5 mt-5">
    <!-- BEGIN: Calendar Side Menu -->
    <div class="col-span-12 xl:col-span-6">
        <div class="box p-5 intro-y">
            <!-- BEGIN: Show Modal Toggle -->
            <div class="flex justify-between items-center">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center">Senarai Tempahan Asrama</h2>
                <a class="btn btn-primary shadow-md mr-2" href="javascript:;" data-toggle="modal"
                    data-target="#tambah-tempahan-asrama-baru"  >
                    Tempahan Baru
                </a>
            </div>

 
            <!-- END: Show Modal Toggle -->
            <div class="border-t border-b border-gray-200 mt-6 mb-5 py-3" id="calendar-events">
                {{-- @include('../pages/Kursus/datepicker-modal') --}}
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-300">
                            <th class="w-1/5 py-3 border-2 border-gray-400">#</th>
                            <th class="w-2/5 py-3 border-2 border-gray-400">Butiran Pemohon</th>
                            <th class="w-1/5 py-3 border-2 border-gray-400">Bilik</th>
                            <th class="w-1/5 py-3 border-2 border-gray-400">Tarikh Masuk</th>
                            <th class="w-1/5 py-3 border-2 border-gray-400">Tarikh Keluar</th>
                            <th class="w-1/5 py-3 border-2 border-gray-400">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tempahanAsramas as $tempahanAsrama)
                        <tr class={{$tempahanAsrama['id'] % 2==0 ? 'bg-gray-300' : 'bg-none' }}>
                            <td class="text-center py-3 border-2 border-gray-400">{{ $tempahanAsrama['id'] }}</td>
                            <td class="text-center py-3 border-2 border-gray-400">
                               
                                @php
                                $pesertaTempahanAsramas = \App\Models\TempahanPesertaAsrama::join('pesertas', 'pesertas.id', '=', 'tempahan_peserta_asramas.peserta_id')
                                ->where(['tempahan_asrama_id' => $tempahanAsrama->id])->select('name','ic_number')->get();

                                    //echo $tempahanPesertaAsramas->pesertas->name."==";  
                                    foreach ($pesertaTempahanAsramas  AS $pesertaTempahanAsrama ) 
                                    {

                                        echo $pesertaTempahanAsrama->name."-".$pesertaTempahanAsrama->ic_number."<br>";  
                                        //dd($pesertas);
                                    }  

                                    //dump($tempahanPesertaAsramas->pesertas);
                                  
                                @endphp
                                   
                                    </td>
                            <td class="text-center py-3 border-2 border-gray-400">{{ $tempahanAsrama->asrama->kod_asrama }}</td>
                            <td class="text-center py-3 border-2 border-gray-400">{{ date("d/m/Y", strtotime($tempahanAsrama->tarikh_masuk)) }}</td>
                            <td class="text-center py-3 border-2 border-gray-400">{{ date("d/m/Y", strtotime($tempahanAsrama->tarikh_keluar)) }}</td>
                            <td class="text-center py-3 border-2 border-gray-400">
                                 
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

{{-- @include('../pages/Kursus/datepicker-modal') --}}
@include('../pages/Tempahan/tambah-tempahan-asrama-modal')
 

@endsection