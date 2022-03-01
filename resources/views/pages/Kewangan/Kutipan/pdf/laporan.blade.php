<!DOCTYPE html>
<html>
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MyISM is a management system.">

    <!-- BEGIN: CSS Assets-->
    <link href="{{ public_path('dist/css/app.css') }}" rel="stylesheet">
    <!-- END: CSS Assets-->
    <style>
        
    </style>

</head>
<!-- END: Head -->

<body>
    <div class="border-t border-b border-gray-200 mt-6 mb-5 py-3">
        {{-- @include('../pages/Kursus/datepicker-modal') --}}
        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">
            SENARAI NAMA PESERTA YANG TELAH MEMBUAT BAYARAN YURAN KURSUS BAGI <span>{{strtoupper($kursus->nama_kursus)}}</span>
        </h2>
        <h2 class="intro-x font-bold text-xl xl:text-3xl text-center mt-5">
            PADA {{Carbon\Carbon::parse($kursus->tarikh_mula)->format('d/m/Y')}}
        </h2>
        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">
            ANJURAN KLUSTER : {{strtoupper($kursus->kursusKluster->name)}}
        </h2>
        <div class="font-bold mt-4">Maklumat Bayaran Yuran Program</div>
        <table class="w-full">
            <thead>
                <tr class="bg-gray-300">
                    <th class="py-3 border border-gray-400">#</th>
                    <th class="py-3 border border-gray-400">Nama</th>
                    <th class="py-3 border border-gray-400">No Kad Pengenalan</th>
                    <th class="py-3 border border-gray-400">Tarikh Bayaran</th>
                    <th class="py-3 border border-gray-400">No Resit</th>
                    <th class="py-3 border border-gray-400">Kategori</th>
                    <th class="py-3 border border-gray-400">Kadar Yuran (RM)</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $jumlahYuran = 0;
                    $jumlahYuranDiterima = 0;
                @endphp
                @forelse ($paidParticipants as $item)
                    @php
                        $bayaranYuran = $item->bayaranYuran()->where('kursus_id', $kursus->id)->first();
                        if($bayaranYuran) {
                            $tarikhBayaran = $bayaranYuran->tarikh_bayaran;
                            $noResit = $bayaranYuran->no_resit;
                            $jumlahYuranDiterima += $kursus->fee;
                        }
                        $jumlahYuran = $jumlahYuran + $kursus->fee;
                    @endphp
                    <tr class="{{ $loop->odd ? 'bg-none' : 'bg-gray-300' }}">
                        <td class="text-center py-3 border border-gray-400">{{$loop->iteration}}</td>
                        <td class="text-center py-3 border border-gray-400">{{$item->name}}</td>
                        <td class="text-center py-3 border border-gray-400">{{$item->ic_number}}</td>
                        <td class="text-center py-3 border border-gray-400">{{$bayaranYuran?$tarikhBayaran:''}}</td>
                        <td class="text-center py-3 border border-gray-400">{{$bayaranYuran?$noResit:''}}</td>
                        <td class="text-center py-3 border border-gray-400 program-fee">{{$item->kumpulan_isi_rumah}}</td>
                        <td class="text-center py-3 border border-gray-400 program-fee">{{$kursus->fee}}</td>
                    </tr>
                    @if($loop->last)
                        <tr class="{{ $loop->odd ? 'bg-gray-300' : 'bg-none' }}">
                            <td colspan="6" class="text-right py-3 px-2 border border-gray-400">Jumlah</td>
                            <td class="text-center py-3 border border-gray-400">RM{{$jumlahYuran}}</td>
                        </tr>
                        <tr class="{{ $loop->odd ? 'bg-gray-300' : 'bg-none' }}">
                            <td colspan="6" class="text-right py-3 px-2 border border-gray-400">Jumlah Diterima</td>
                            <td class="text-center py-3 border border-gray-400">RM{{$jumlahYuranDiterima}}</td>
                        </tr>
                    @endif
                @empty
                <tr class="bg-none">
                    <td colspan="7" class="text-center py-3 border border-gray-400">No Data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        @if (count($freeParticipants))
        <div class="font-bold mt-4">Maklumat Tanpa Bayaran Yuran Program</div>
        <table class="w-full">
            <thead>
                <tr class="bg-gray-300">
                    <th class="py-3 border border-gray-400">#</th>
                    <th class="py-3 border border-gray-400">Nama</th>
                    <th class="py-3 border border-gray-400">No Kad Pengenalan</th>
                    <th class="py-3 border border-gray-400">Kategori</th>
                    <th class="py-3 border border-gray-400">Kadar Yuran (RM)</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($freeParticipants as $item)
                <tr class="{{ $loop->odd ? 'bg-none' : 'bg-gray-300' }}">
                    <td class="text-center py-3 border border-gray-400">{{$loop->iteration}}</td>
                    <td class="text-center py-3 border border-gray-400">{{$item->name}}</td>
                    <td class="text-center py-3 border border-gray-400">{{$item->ic_number}}</td>
                    <td class="text-center py-3 border border-gray-400">{{$item->kumpulan_isi_rumah}}</td>
                    <td class="text-center py-3 border border-gray-400 program-fee">PERCUMA</td>
                </tr>
                @empty
                <tr class="bg-none">
                    <td colspan="5" class="text-center py-3 border border-gray-400">No Data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        @endif
    </div>
</body>

</html>
    
