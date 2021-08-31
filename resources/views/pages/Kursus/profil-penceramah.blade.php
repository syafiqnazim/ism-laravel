@extends('../layout/' . $layout)

@section('subhead')
<title>Senarai penceramah | MyISM</title>
@endsection

@section('subcontent')
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Senarai Penceramah</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: Top Header -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 justify-between">
        <button class="btn btn-primary shadow-md mr-2">
            <a href="javascript:;" data-toggle="modal" data-target="#tambah-penceramah-baru">
                Tambah Penceramah
            </a>
        </button>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                <form>
                    <input id='carian' type="text" class="form-control w-56 box pr-10 placeholder-theme-8"
                        placeholder="Carian..." value="{{ $query }}" name="nama_penceramah">
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
                    <th class="w-4/12 py-3 border-2 border-gray-400">Nama Penceramah</th>
                    <th class="w-1/12 py-3 border-2 border-gray-400">I.C. Penceramah</th>
                    <th class="w-1/12 py-3 border-2 border-gray-400">No. Telefon</th>
                    <th class="w-2/12 py-3 border-2 border-gray-400">Email</th>
                    <th class="w-1/12 py-3 border-2 border-gray-400">Sektor</th>
                    <th class="w-2/12 py-3 border-2 border-gray-400">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penceramahs as $penceramah)
                <tr class={{$penceramah['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none'}}>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $penceramah['id'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $penceramah['name'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $penceramah['ic_number'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $penceramah['phone_number'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $penceramah['email'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $penceramah['sector'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400 flex justify-around">
                        <a class="btn btn-primary py-1 px-2" href="/ubah-pengguna/{{ $penceramah['id'] }}">
                            Tukar Maklumat
                        </a>
                        <button id="{{ $penceramah['id'] }}"
                            class="btn btn-danger py-1 px-2 delete-button">Padam</button>
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