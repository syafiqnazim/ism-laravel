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
                <input type="text" class="form-control w-56 box pr-10 placeholder-theme-8" placeholder="Carian...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
            </div>
        </div>
    </div>
    <!-- END: Top Header -->

    <!-- BEGIN: Users Layout -->
    @foreach ($users as $user)
    <div class="intro-y col-span-12 md:col-span-6">
        <div class="box">
            <div class="flex flex-col lg:flex-row items-center p-5">
                <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                    <img alt="image" class="rounded-full" src="https://ui-avatars.com/api/?name={{$user['name']}}">
                </div>
                <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                    <a href="" class="font-medium">{{ $user['name'] }}</a>
                    <div class="text-gray-600 text-xs mt-0.5"><span class="text-black">Jawatan :</span>
                        {{ $user['position'] }}</div>
                </div>
                <div class="flex justify-between mt-4 lg:mt-0 lg:w-80">
                    <button class="btn btn-outline-secondary py-1 px-2">Tukar Maklumat</button>
                    <button class="btn btn-primary py-1 px-2">Tukar Kata Laluan</button>
                    <button id="{{ $user['id'] }}" class="btn btn-primary py-1 px-2 delete-button">Padam</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
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