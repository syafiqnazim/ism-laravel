@extends('../layout/' . $layout)

@section('subhead')
<title>Senarai penceramah | MyISM</title>
@endsection

@section('subcontent')
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Tempahan Khusus</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: Top Header -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 justify-between">
        <button class="btn btn-primary shadow-md mr-2">
            <a href="javascript:;" data-toggle="modal" data-target="#tambah-penceramah-baru">
                Tambah Tempahan
            </a>
        </button>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                <form>
                    <input id='carian' type="text" class="form-control w-56 box pr-10 placeholder-theme-8"
                        placeholder="Carian..." value="{{ $query }}" name="kod_asrama">
                    <button type="submit" class="w-4 h-4 absolute mb-auto mt-2 inset-y-0 mr-3 right-0">
                        <i data-feather="search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- END: Top Header -->

    <!-- BEGIN: Users Layout -->

    <div class="col-span-12">
        <table class="table-fixed w-full">
            <thead>
                <tr class="bg-gray-300">
                    <th class="w-1/12 py-3 border-2 border-gray-400">#</th>
                    <th class="w-3/12 py-3 border-2 border-gray-400">Butiran Pemohon</th>
                    <th class="w-2/12 py-3 border-2 border-gray-400">Bilik</th>
                    <th class="w-2/12 py-3 border-2 border-gray-400">Tarikh Mula</th>
                    <th class="w-2/12 py-3 border-2 border-gray-400">Tarikh Tamat</th>
                    <th class="w-1/12 py-3 border-2 border-gray-400">Daftar</th>
                    <th class="w-1/12 py-3 border-2 border-gray-400">
                        <i data-feather="trash-2" class="font-bold"></i>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asramas as $asrama)
                <tr class={{$asrama['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none'}}>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $asrama['id'] }}</td>
                    <td class="text-left py-3 border-2 border-gray-400">
                        <div class="col-span-12 flex">
                            <i data-feather="user" class="w-3/12"></i>
                            <p class="w-9/12">Juzaili Bin Ahmad Sabri</p>
                        </div>
                        <div class="col-span-12 flex">
                            <i data-feather="phone" class="w-3/12"></i>
                            <p class="w-9/12">0192669420</p>
                        </div>
                        <div class="col-span-12 flex">
                            <i data-feather="mail" class="w-3/12"></i>
                            <p class="w-9/12">juzaili.sabri@gmail.com</p>
                        </div>
                        <div class="col-span-12 flex">
                            <i data-feather="credit-card" class="w-3/12"></i>
                            <p class="w-9/12">880820295421</p>
                        </div>
                    </td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $asrama['kod_asrama'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $asrama['tarikh_mula'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $asrama['tarikh_tamat'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">
                        <button class="btn btn-success px-10">IN</button>
                    </td>
                    <td class="w-2/12 py-3 border-2 border-gray-400 text-center">
                        <button class="btn btn-danger"><i data-feather="trash-2" class="font-bold"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- BEGIN: Users Layout -->
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

@include('../pages/Kursus/penceramah-modal')
@endsection