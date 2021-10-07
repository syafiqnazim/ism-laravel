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
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Nama Kursus
                                </label>
                                <input type="text" class="form-control" readonly value="{{ $kursus['nama_kursus'] }}">
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Kapasiti
                                </label>
                                <input type="text" class="form-control" readonly value="{{ $kursus['kapasiti'] }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Kluster
                                </label>
                                <select class="w-full form-select box border-gray-300" disabled="true">
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
                                <input type="number" class="form-control" readonly value="{{ $kursus['peruntukan'] }}">
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
<!-- END: View Kursus Modal -->