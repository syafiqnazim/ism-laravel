<!-- BEGIN: Edit Kursus Modal -->
<div id="edit-kenderaan-{{ $loop->index }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog w-1/2 mt-36">
        <div class="modal-content">
            <form action="{{url('senarai-kenderaan/'. $senarai_kenderaan->id)}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="PUT">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Tukar Maklumat Kenderaan
                        </h5>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    No. Pendaftaran
                                </label>
                                <input id="no_pendaftaran" name="no_pendaftaran" type="text" class="form-control"
                                    required data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $senarai_kenderaan['no_pendaftaran'] }}">
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Jenama
                                </label>
                                <input id="jenama" name="jenama" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $senarai_kenderaan['jenama'] }}">
                            </div>
                        </div>
                        <div class="grid-cols-1 input-form">
                            <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                Jenis Kenderaan
                            </label>
                            <select id="jenis_kenderaan" class="w-full form-select box border-gray-300" required
                                name="jenis_kenderaan" value="{{ $senarai_kenderaan['jenis_kenderaan'] }}">
                                <option value="" {{ $senarai_kenderaan['jenis_kenderaan'] == null ? 'selected' : '' }}>
                                    Pilih Satu</option>
                                <option value="Kereta"
                                    {{ $senarai_kenderaan['jenis_kenderaan'] == "Kereta" ? 'selected' : '' }}>Kereta
                                </option>
                                <option value="Van"
                                    {{ $senarai_kenderaan['jenis_kenderaan'] == "Van" ? 'selected' : '' }}>Van</option>
                                <option value="Bas"
                                    {{ $senarai_kenderaan['jenis_kenderaan'] == "Bas" ? 'selected' : '' }}>Bas</option>
                            </select>
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button id="tambah-kenderaan" type="submit" class="btn btn-primary mr-1">
                            Tukar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END: Edit Kursus Modal -->