@extends('../layout/' . $layout)

@section('subhead')
<title>Tukar Kata Laluan Pengguna | MyISM</title>
@endsection

@section('subcontent')
<!-- BEGIN: Register Form -->
{{-- {{dd($user)}} --}}
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Ubah Kata Laluan</h2>
<div class="h-auto py-5 xl:py-0 my-10 xl:my-0">
    <div
        class="bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-1/2 mx-auto">
        <div class="intro-x mt-8">
            <form action="{{url('change-password/'. $user->id)}}" method="post">
                @csrf
                <div class="input-form">
                    <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                        Nama Penuh
                    </label>
                    <input id="name" type="text" class="form-control" readonly value="{{ $user->name }}">
                </div>
                <div class="input-form mt-3">
                    <label for="register-form-3" class="form-label w-full flex flex-col sm:flex-row">
                        Kata Laluan <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">*Perlu,
                            sekurang-kurangnya 6 patah perkataan/digit.</span>
                    </label>
                    <input id="password" name="password" type="password" class="form-control" minlength="6" required
                        data-pristine-required-message="Ruangan ini perlu di isi.">
                </div>
                <div class="input-form mt-3">
                    <label for="register-form-3" class="form-label w-full flex flex-col sm:flex-row">
                        Pengesahan Kata Laluan <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">*Perlu,
                            sekurang-kurangnya 6 patah perkataan/digit.</span>
                    </label>
                    <input id="password_confirmation" type="password" class="form-control" minlength="6" required
                        data-pristine-required-message="Ruangan ini perlu di isi.">
                </div>
                <div class="intro-y mt-2 xl:mt-8 text-center xl:text-left flex justify-center">
                    <button type="submit"
                        class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Daftar</button>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- END: Register Form -->

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