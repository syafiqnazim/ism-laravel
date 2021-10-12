<!-- BEGIN: Tambah Pemandu Modal -->
<div id="tambah-kenderaan-baru" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog w-1/2 mt-36">
        <div class="modal-content">
            <form action="{{url('senarai-kenderaan/')}}" method="post">
                @csrf
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Tambah Pemandu Baru</h5>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    No. Pendaftaran
                                </label>
                                <input id="no_pendaftaran" name="no_pendaftaran" type="text" class="form-control"
                                    required data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Jenama
                                </label>
                                <input id="jenama" name="jenama" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                        </div>
                        <div class="grid-cols-1 input-form">
                            <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                Jenis Kenderaan
                            </label>
                            <select id="jenis_kenderaan" class="w-full form-select box border-gray-300" required
                                name="jenis_kenderaan">
                                <option value="">Pilih Satu</option>
                                <option value="Kereta">Kereta</option>
                                <option value="Van">Van</option>
                                <option value="Bas">Bas</option>
                            </select>
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button id="tambah-kenderaan" type="submit" class="btn btn-primary mr-1">
                            Tambah Kenderaan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END: Tambah Pemandu Modal -->