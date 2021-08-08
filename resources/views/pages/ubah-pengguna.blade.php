@extends('../layout/' . $layout)

@section('subhead')
<title>Ubah Pengguna | MyISM</title>
@endsection

@section('subcontent')
<!-- BEGIN: Register Form -->
{{-- {{dd($user)}} --}}
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Ubah Pengguna</h2>
<div class="h-auto py-5 xl:py-0 my-10 xl:my-0">
    <div
        class="bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-1/2 mx-auto">
        <div class="intro-x mt-2 text-gray-500 text-center">Sila daftar akaun anda untuk meneruskan <br /> penggunaan
            system MyISM</div>
        <div class="intro-x mt-8">
            <form action="{{url('users/'. $user->id)}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="PUT">
                <div class="input-form">
                    <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                        Nama Penuh <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">*Perlu,
                            sekurang-kurangnya
                            3 huruf.</span>
                    </label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Ahmad Abu" minlength="2"
                        required data-pristine-required-message="Ruangan ini perlu di isi." value="{{ $user->name }}">
                </div>
                <div class="input-form mt-3">
                    <label for="register-form-2" class="form-label w-full flex flex-col sm:flex-row">
                        E-mel <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">*Perlu, mengikut format alamat
                            e-mel.</span>
                    </label>
                    <input id="email" name="email" type="email" class="form-control" placeholder="example@email.com"
                        required
                        data-pristine-required-message="Ruangan ini perlu di isi dengan format e-mel yang betul."
                        value="{{ $user->email }}">
                </div>
                <div class="input-form mt-3">
                    <label for="register-form-3" class="form-label w-full flex flex-col sm:flex-row">
                        Kata Laluan <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">*Perlu,
                            sekurang-kurangnya 6 patah perkataan/digit.</span>
                    </label>
                    <input id="password" name="password" type="password" class="form-control" minlength="6" required
                        data-pristine-required-message="Ruangan ini perlu di isi." value="{{ $user->password }}">
                </div>
                <div class="input-form mt-3">
                    <label for="register-form-3" class="form-label w-full flex flex-col sm:flex-row">
                        Pengesahan Kata Laluan <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">*Perlu,
                            sekurang-kurangnya 6 patah perkataan/digit.</span>
                    </label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control"
                        minlength="6" required data-pristine-required-message="Ruangan ini perlu di isi."
                        value="{{ $user->password }}">
                </div>
                <div class="input-form mt-3">
                    <label for="register-form-4" class="form-label w-full flex flex-col sm:flex-row">
                        Nombor K.P. <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">*Perlu,
                            sekurang-kurangnya 12 digit.</span>
                    </label>
                    <input id="ic_number" name="ic_number" type="text" class="form-control"
                        placeholder="contoh: 123456121234" minlength="12" required
                        data-pristine-required-message="Ruangan ini perlu di isi." value="{{ $user->ic_number }}">
                </div>
                <div class="input-form mt-3">
                    <label for="register-form-5" class="form-label w-full flex flex-col sm:flex-row">
                        No. Telefon <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">*Perlu,
                            sekurang-kurangnya 10 digit.</span>
                    </label>
                    <input id="phone_number" name="phone_number" type="text" class="form-control"
                        placeholder="0123456789" minlength="10" required
                        data-pristine-required-message="Ruangan ini perlu di isi." value="{{ $user->phone_number }}">
                </div>
                <div class="input-form mt-3">
                    <label for="register-form-6" class="form-label w-full flex flex-col sm:flex-row">
                        Jawatan <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">*Perlu.</span>
                    </label>
                    <input id="position" name="position" type="text" class="form-control" placeholder="Pengurus"
                        required data-pristine-required-message="Ruangan ini perlu di isi."
                        value="{{ $user->position }}">
                </div>
                <div class="input-form mt-3">
                    <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                        Bahagian <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">*Perlu.</span>
                    </label>
                    <input id="department" name="department" type="text" class="form-control" placeholder="Awam"
                        required data-pristine-required-message="Ruangan ini perlu di isi."
                        value="{{ $user->department }}">
                </div>
                <div class="input-form mt-3">
                    <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                        Peranan Pengguna <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">*Perlu.</span>
                    </label>
                    <select id="user_role" name="user_role"
                        class="sm:ml-auto mt-1 sm:w-full form-select box border-gray-300 py-3">
                        <option value="0">Pilih Satu</option>
                        @foreach ($roles as $role)
                        <option value="{{$role->id}}" @if($user->role_id == $role->id) selected @endif>{{$role->name}}
                        </option>
                        @endforeach
                    </select>
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