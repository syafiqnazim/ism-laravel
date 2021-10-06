@extends('../layout/' . $layout)

@section('subhead')
<title>Senarai Kursus | MyISM</title>
@endsection

@section('subcontent')
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center mt-5">Senarai Kursus</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: Top Header -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 justify-between">
        <button class="btn btn-primary shadow-md mr-2">
            <a href="javascript:;" data-toggle="modal" data-target="#tambah-kursus-baru">
                Tambah Kursus
            </a>
        </button>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                <form>
                    <input id='carian' type="text" class="form-control w-56 box pr-10 placeholder-theme-8"
                        placeholder="Carian..." value="{{ $query }}" name="nama_kursus">
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
                    <th class="w-1/5 py-3 border-2 border-gray-400">#</th>
                    <th class="w-2/5 py-3 border-2 border-gray-400">Nama Kursus / Kluster</th>
                    <th class="w-1/5 py-3 border-2 border-gray-400">Kapasiti</th>
                    <th class="w-1/5 py-3 border-2 border-gray-400">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kursuses as $kursus)
                <tr class={{$kursus['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none'}}>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $loop->index + 1 }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $kursus['nama_kursus'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $kursus['kapasiti'] }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">
                        <a title="Lihat" class="btn btn-primary p-1" href="javascript:;" data-toggle="modal"
                            data-target="#view-kursus-baru-{{ $loop->index }}">
                            <i data-feather="eye" class="w-3 h-3 text-white"></i>
                        </a>
                        <a title="Edit" class="btn btn-success p-1" href="javascript:;" data-toggle="modal"
                            data-target="#edit-kursus-baru-{{ $loop->index }}">
                            <i data-feather="edit" class="w-3 h-3 text-white"></i>
                        </a>
                        {{-- <a title="Buka" class="btn btn-warning p-1">
                            <i data-feather="calendar" class="w-3 h-3 text-white"></i>
                        </a> --}}
                        <a title="Delete" class="btn btn-danger p-1 delete-kursus" id="{{ $kursus['id'] }}">
                            <i data-feather="trash-2" class="w-3 h-3 text-white"></i>
                        </a>
                    </td>
                </tr>
                <!-- BEGIN: Edit Kursus Modal -->
                <div id="edit-kursus-baru-{{ $loop->index }}" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog w-1/2 mt-36">
                        <div class="modal-content">
                            <form action="{{url('kursus/'. $kursus->id)}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="PUT">
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">
                                            Tukar Maklumat Kursus</h5>
                                        <div class="grid grid-cols-2 gap-2 mb-6">
                                            <div class="grid-cols-1 input-form">
                                                <label for="register-form-1"
                                                    class="form-label w-full flex flex-col sm:flex-row">
                                                    Nama Kursus
                                                </label>
                                                <input id="edit_nama_kursus" name="nama_kursus" type="text"
                                                    class="form-control" required
                                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                                    value="{{ $kursus['nama_kursus'] }}">
                                            </div>
                                            <div class="grid-cols-1 input-form">
                                                <label for="register-form-1"
                                                    class="form-label w-full flex flex-col sm:flex-row">
                                                    Kapasiti
                                                </label>
                                                <input id="edit_kapasiti" name="kapasiti" type="text"
                                                    class="form-control" required
                                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                                    value="{{ $kursus['kapasiti'] }}">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 gap-2 mb-6">
                                            <div class="grid-cols-1 input-form">
                                                <label for="register-form-1"
                                                    class="form-label w-full flex flex-col sm:flex-row">
                                                    Kluster
                                                </label>
                                                <select id="edit_kluster" class="w-full form-select box border-gray-300"
                                                    name="kluster">
                                                    <option value="0"
                                                        {{ $kursus['kluster'] == null ? 'selected' : '' }}>Pilih Satu
                                                    </option>
                                                    <option value="1" {{ $kursus['kluster'] == "1" ? 'selected' : '' }}>
                                                        Pembangunan Kerja Sosial
                                                    </option>
                                                    <option value="2" {{ $kursus['kluster'] == "2" ? 'selected' : '' }}>
                                                        Pembangunan Rundingan Sosial
                                                    </option>
                                                    <option value="3" {{ $kursus['kluster'] == "3" ? 'selected' : '' }}>
                                                        Repositori & Dokumentasi
                                                    </option>
                                                    <option value="4" {{ $kursus['kluster'] == "4" ? 'selected' : '' }}>
                                                        Penyelidikan & Pembangunan
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="grid-cols-1 input-form">
                                                <label for="register-form-1"
                                                    class="form-label w-full flex flex-col sm:flex-row">
                                                    Peruntukan (RM)
                                                </label>
                                                <input id="edit_peruntukan" name="peruntukan" type="number"
                                                    class="form-control" required
                                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                                    value="{{ $kursus['peruntukan'] }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <button id="edit-kursus" type="submit" class="btn btn-primary mr-1">
                                            Tukar Maklumat
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END: Edit Kursus Modal -->

                <!-- BEGIN: View Kursus Modal -->
                <div id="view-kursus-baru-{{ $loop->index }}" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog w-1/2 mt-36">
                        <div class="modal-content">
                            <form>
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">
                                            Lihat Kursus
                                        </h5>
                                        <div class="grid grid-cols-2 gap-2 mb-6">
                                            <div class="grid-cols-1 input-form">
                                                <label for="register-form-1"
                                                    class="form-label w-full flex flex-col sm:flex-row">
                                                    Nama Kursus
                                                </label>
                                                <input type="text" class="form-control" readonly
                                                    value="{{ $kursus['nama_kursus'] }}">
                                            </div>
                                            <div class="grid-cols-1 input-form">
                                                <label for="register-form-1"
                                                    class="form-label w-full flex flex-col sm:flex-row">
                                                    Kapasiti
                                                </label>
                                                <input type="text" class="form-control" readonly
                                                    value="{{ $kursus['kapasiti'] }}">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 gap-2 mb-6">
                                            <div class="grid-cols-1 input-form">
                                                <label for="register-form-1"
                                                    class="form-label w-full flex flex-col sm:flex-row">
                                                    Kluster
                                                </label>
                                                <select class="w-full form-select box border-gray-300" disabled="true">
                                                    <option value="0"
                                                        {{ $kursus['kluster'] == null ? 'selected' : '' }}>Pilih Satu
                                                    </option>
                                                    <option value="1" {{ $kursus['kluster'] == "1" ? 'selected' : '' }}>
                                                        Pembangunan Kerja Sosial
                                                    </option>
                                                    <option value="2" {{ $kursus['kluster'] == "2" ? 'selected' : '' }}>
                                                        Pembangunan Rundingan Sosial
                                                    </option>
                                                    <option value="3" {{ $kursus['kluster'] == "3" ? 'selected' : '' }}>
                                                        Repositori & Dokumentasi
                                                    </option>
                                                    <option value="4" {{ $kursus['kluster'] == "4" ? 'selected' : '' }}>
                                                        Penyelidikan & Pembangunan
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="grid-cols-1 input-form">
                                                <label for="register-form-1"
                                                    class="form-label w-full flex flex-col sm:flex-row">
                                                    Peruntukan (RM)
                                                </label>
                                                <input type="number" class="form-control" readonly
                                                    value="{{ $kursus['peruntukan'] }}">
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END: View Kursus Modal -->
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
        <div class="font-medium">Berjaya!</div>
        {{-- <div class="text-gray-600 mt-1">
            Please check your e-mail for further info!
        </div> --}}
    </div>
</div>
<!-- END: Success Notification Content -->
<!-- BEGIN: Failed Notification Content -->
<div id="failed-notification-content" class="toastify-content hidden flex">
    <i class="text-theme-24" data-feather="x-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">Gagal!</div>
        {{-- <div class="text-gray-600 mt-1">
            Please check the fileld form.
        </div> --}}
    </div>
</div>
<!-- END: Failed Notification Content -->
<!-- BEGIN: Delete Confirmation Modal -->
<div id="tambah-kursus-baru" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog w-1/2 mt-36">
        <div class="modal-content">
            <form class="tambah-kursus-form">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Tambah Kursus Baru</h5>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Nama Kursus
                                </label>
                                {{-- {{dd($kursus['nama_kursus'])}} --}}
                                <input id="nama_kursus" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Kapasiti
                                </label>
                                <input id="kapasiti" type="number" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Kluster
                                </label>
                                <select id="kluster" class="w-full form-select box border-gray-300">
                                    <option value="0">Pilih Satu</option>
                                    <option value="1">Pembangunan Kerja Sosial</option>
                                    <option value="2">Pembangunan Rundingan Sosial</option>
                                    <option value="3">Repositori & Dokumentasi</option>
                                    <option value="4">Penyelidikan & Pembangunan</option>
                                </select>
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Peruntukan (RM)
                                </label>
                                <input id="peruntukan" type="number" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button id="tambah-kursus" type="button" class="btn btn-primary mr-1">
                            Tambah Kursus
                        </button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- END: Delete Confirmation Modal -->
@endsection