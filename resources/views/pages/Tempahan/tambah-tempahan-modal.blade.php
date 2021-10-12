<!-- BEGIN: Tambah Pemandu Modal -->
<div id="tambah-tempahan-baru" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog w-1/2 mt-36">
        <div class="modal-content">
            <form action="{{url('tempahan-kenderaan/')}}" method="post">
                @csrf
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Tempahan Baru</h5>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Nama
                                </label>
                                <input id="nama_penempah" name="nama_penempah" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    No. Kad Pengenalan
                                </label>
                                <input id="ic_penempah" name="ic_penempah" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Tujuan
                                </label>
                                <input id="tujuan" name="tujuan" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Destinasi
                                </label>
                                <input id="destinasi" name="destinasi" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Pemandu
                                </label>
                                <select id="pemandu" class="w-full form-select box border-gray-300" required
                                    name="pemandu">
                                    <option value="">Pilih Satu</option>
                                    @foreach ($senarai_pemandus as $senarai_pemandu)
                                    <option value="{{ $senarai_pemandu['nama_pemandu'] }}">
                                        {{ $senarai_pemandu['nama_pemandu'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Jenis Kenderaan
                                </label>
                                <select id="jenis_kenderaan" class="w-full form-select box border-gray-300" required
                                    name="jenis_kenderaan">
                                    <option value="">Pilih Satu</option>
                                    @foreach ($senarai_kenderaans as $senarai_kenderaan)
                                    <option
                                        value="{{ $senarai_kenderaan['no_pendaftaran'] }} ({{ $senarai_kenderaan['jenama'] }})">
                                        {{ $senarai_kenderaan['jenis_kenderaan'] }} -
                                        {{ $senarai_kenderaan['no_pendaftaran'] }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button id="tambah-pemandu" type="submit" class="btn btn-primary mr-1">
                            Tambah Tempahan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END: Tambah Pemandu Modal -->