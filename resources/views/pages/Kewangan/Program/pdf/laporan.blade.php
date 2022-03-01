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
        * {
            font-size: 14px;
        }
    </style>

</head>
<!-- END: Head -->

<body>
    <div class="border-t border-b border-gray-200 mt-6 mb-5 py-3">
        {{-- @include('../pages/Kursus/datepicker-modal') --}}
        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">
            SENARAI PROGRAM<br>KLUSTER <span class="text-2xl xl:text-3xl">{{strtoupper($kluster->name)}}</span>
        </h2>
        <h2 class="intro-x font-bold text-xl xl:text-3xl text-center mt-5">
            PADA {{Carbon\Carbon::parse($tarikh_mula)->format('d/m/Y')}} HINGGA {{Carbon\Carbon::parse($tarikh_akhir)->format('d/m/Y')}}
        </h2>
        <table class="w-full">
            <thead>
                <tr class="bg-gray-300">
                    <th width="5%" class="py-3 border border-gray-400">#</th>
                    <th class="py-3 border border-gray-400">Nama Kluster</th>
                    <th class="py-3 border border-gray-400">Nama Program</th>
                    <th class="py-3 border border-gray-400">Tarikh Program</th>
                    <th class="py-3 border border-gray-400">Lokasi Program</th>
                    <th class="py-3 border border-gray-400">Jumlah Peserta</th>
                    <th class="py-3 border border-gray-400">Jumlah Penceramah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kursuses as $kursus)
                <tr class="{{$loop->odd?'bg-none':'bg-gray-300'}}">
                    <td class="text-center py-3 border border-gray-400">{{$loop->iteration}}</td>
                    <td class="text-center py-3 border border-gray-400">{{$kluster->name}}</td>
                    <td class="text-center py-3 border border-gray-400">{{$kursus->nama_kursus}}</td>
                    <td class="text-center py-3 border border-gray-400">{{Carbon\Carbon::parse($kursus->tarikh_mula)->format('d/m/Y')}}</td>
                    <td class="text-center py-3 border border-gray-400">{{$kursus->bilik}}</td>
                    <td class="text-center py-3 border border-gray-400">{{$kursus->totalParticipants}}</td>
                    <td class="text-center py-3 border border-gray-400">{{$kursus->totalPenceramah}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
    
