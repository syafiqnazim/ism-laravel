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
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Nama Kursus
                                </label>
                                <input id="edit_nama_kursus" name="nama_kursus" type="text" class="form-control"
                                    required data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $kursus['nama_kursus'] }}">
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Kapasiti
                                </label>
                                <input id="edit_kapasiti" name="kapasiti" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $kursus['kapasiti'] }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Kluster
                                </label>
                                <select id="edit_kluster" class="w-full form-select box border-gray-300" name="kluster">
                                    <option value="0" {{ $kursus['kluster'] == null ? 'selected' : '' }}>Pilih Satu
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
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Peruntukan (RM)
                                </label>
                                <input id="edit_peruntukan" name="peruntukan" type="number" class="form-control"
                                    required data-pristine-required-message="Ruangan ini perlu di isi."
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