@extends('../layout/' . $layout)

@section('subhead')
<title>Senarai Pengguna | MyISM</title>
@endsection

@section('subcontent')
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Senarai Pengguna</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: Top Header -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 justify-between">
        <button class="btn btn-primary shadow-md mr-2"><a href="/pendaftaran-pengguna">Tambah Pengguna</a></button>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                <form>
                    <input id='carian' type="text" class="form-control w-56 box pr-10 placeholder-theme-8"
                        placeholder="Carian..." value="{{ $query }}" name="name">
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
                    <th class="w-2/12 py-3 border-2 border-gray-400">Nama</th>
                    <th class="w-1/12 py-3 border-2 border-gray-400">No. Kad Pengenalan</th>
                    <th class="w-2/12 py-3 border-2 border-gray-400">Nama Bahagian</th>
                    <th class="w-2/12 py-3 border-2 border-gray-400">Nama Unit</th>
                    <th class="w-1/12 py-3 border-2 border-gray-400">Peranan</th>
                    <th class="w-3/12 py-3 border-2 border-gray-400">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class={{$user['id'] % 2==0 ? 'bg-gray-300' : 'bg-none' }}>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $user['id'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $user['name'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $user['ic_number'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $user['department'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">-</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $user['position'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">
                        <a class="btn btn-primary p-1 mx-1" href="/ubah-pengguna/{{ $user['id'] }}">
                            <i data-feather="eye" class="w-3 h-3 text-white"></i>
                        </a>
                        <a title="Edit" class="btn btn-success p-1 mx-1" href="/ubah-kata-laluan/{{ $user['id'] }}">
                            <i data-feather="edit" class="w-3 h-3 text-white"></i>
                        </a>
                        <a title="Delete" class="btn btn-danger p-1 delete-kursus mx-1" id="{{ $user['id'] }}">
                            <i data-feather="trash-2" class="w-3 h-3 text-white"></i>
                        </a>
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
@endsection