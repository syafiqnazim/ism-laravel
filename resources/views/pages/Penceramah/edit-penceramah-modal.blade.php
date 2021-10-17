<!-- BEGIN: Edit Penceramah Modal -->
<div id="edit-penceramah-{{ $loop->index }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog w-1/2 mt-10">
        <div class="modal-content">
            <form action="{{url('penceramah/'. $penceramah->id)}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="PUT">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Tambah Penceramah Baru</h5>
                        <div class="grid grid-cols-4 gap-2 mb-6">
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Sektor
                                </label>
                                <input id="sector" name="sector" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['sector'] }}">
                            </div>
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Gelaran
                                </label>
                                <input id="title" name="title" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['title'] }}">
                            </div>
                            <div class="col-span-2 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Nama
                                </label>
                                <input id="name" name="name" type="text" class="form-control w-full" required
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['name'] }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    No. Kad Pengenalan
                                </label>
                                <input id="ic_number" name="ic_number" type="number" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['ic_number'] }}">
                            </div>
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Jantina
                                </label>
                                <div class="flex flex-col items-start">
                                    <div>
                                        <input type="radio" id="lelaki" name="gender"
                                            {{ $penceramah['gender'] == "Lelaki" ? 'checked' : '' }} value="Lelaki">
                                        <label for="lelaki">Lelaki</label><br>
                                    </div>
                                    <div>
                                        <input type="radio" id="perempuan" name="gender"
                                            {{ $penceramah['gender'] == "Perempuan" ? 'checked' : '' }}
                                            value="Perempuan">
                                        <label for="perempuan">Perempuan</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    No. Akaun Bank
                                </label>
                                <input id="bank_number" name="bank_number" type="number" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['bank_number'] }}">
                            </div>
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Nama Bank
                                </label>
                                <input id="bank_name" name="bank_name" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['bank_name'] }}">
                            </div>
                        </div>
                        <div class="input-form mb-6">
                            <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                Alamat Bank
                            </label>
                            <input id="bank_address" name="bank_address" type="text" class="form-control" required
                                data-pristine-required-message="Ruangan ini perlu di isi."
                                value="{{ $penceramah['bank_address'] }}">
                        </div>
                        <div class="input-form mb-6">
                            <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                Alamat Tempat Bertugas
                            </label>
                            <input id="working_address" name="working_address" type="text" class="form-control" required
                                data-pristine-required-message="Ruangan ini perlu di isi."
                                value="{{ $penceramah['working_address'] }}">
                        </div>
                        <div class="input-form mb-6">
                            <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                Alamat Rumah
                            </label>
                            <input id="home_address" name="home_address" type="text" class="form-control" required
                                data-pristine-required-message="Ruangan ini perlu di isi."
                                value="{{ $penceramah['home_address'] }}">
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    No. Tel. Pejabat
                                </label>
                                <input id="working_number" name="working_number" type="number" class="form-control"
                                    required data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['working_number'] }}">
                            </div>
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    No. Tel. Rumah
                                </label>
                                <input id="home_number" name="home_number" type="number" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['home_number'] }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    No. Fax
                                </label>
                                <input id="fax_number" name="fax_number" type="number" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['fax_number'] }}">
                            </div>
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    No. Tel. Bimbit
                                </label>
                                <input id="phone_number" name="phone_number" type="number" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['phone_number'] }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Email
                                </label>
                                <input id="email" name="email" type="email" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['email'] }}">
                            </div>
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Klasifikasi Perkhidmatan
                                </label>
                                <input id="service_classified" name="service_classified" type="text"
                                    class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['service_classified'] }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Jawatan
                                </label>
                                <input id="position" name="position" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['position'] }}">
                            </div>
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Gred
                                </label>
                                <input id="grade" name="grade" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['grade'] }}">
                            </div>
                        </div>
                        <div class="input-form mb-6">
                            <label for="register-form-2" class="form-label w-full flex flex-col sm:flex-row">
                                Kelulusan Akademik Tertinggi
                            </label>
                            <div class="flex flex-col items-start">
                                <div>
                                    <input type="radio" id="pmr" name="highest_academic"
                                        {{ $penceramah['highest_academic'] == "pmr" ? 'checked' : '' }} value="pmr">
                                    <label for="pmr">PMR</label><br>
                                </div>
                                <div>
                                    <input type="radio" id="spm" name="highest_academic"
                                        {{ $penceramah['highest_academic'] == "spm" ? 'checked' : '' }} value="spm">
                                    <label for="spm">SPM</label><br>
                                </div>
                                <div>
                                    <input type="radio" id="stpm" name="highest_academic"
                                        {{ $penceramah['highest_academic'] == "stpm" ? 'checked' : '' }} value="stpm">
                                    <label for="stpm">STPM</label><br>
                                </div>
                                <div>
                                    <input type="radio" id="diploma" name="highest_academic"
                                        {{ $penceramah['highest_academic'] == "diploma" ? 'checked' : '' }}
                                        value="diploma">
                                    <label for="diploma">Diploma</label><br>
                                </div>
                                <div>
                                    <input type="radio" id="ijazah_sarjana_muda" name="highest_academic"
                                        {{ $penceramah['highest_academic'] == "ijazah sarjana muda" ? 'checked' : 'ijazah sarjana muda' }}
                                        value="ijazah sarjana muda">
                                    <label for="ijazah_sarjana_muda">Ijazah Sarjana Muda</label><br>
                                </div>
                                <div>
                                    <input type="radio" id="ijazah_sarjana" name="highest_academic"
                                        {{ $penceramah['highest_academic'] == "ijazah sarjana" ? 'checked' : 'ijazah sarjana' }}
                                        value="ijazah sarjana">
                                    <label for="ijazah sarjana">Ijazah Sarjana</label><br>
                                </div>
                                <div>
                                    <input type="radio" id="ijazah_kedoktoran" name="highest_academic"
                                        {{ $penceramah['highest_academic'] == "ijazah kedoktoran" ? 'checked' : 'ijazah kedoktoran' }}
                                        value="ijazah kedoktoran">
                                    <label for="ijazah_kedoktoran">Ijazah Kedoktoran</label><br>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Kelulusan Akademik
                                </label>
                                <textarea id="academic_qualification" name="academic_qualification" type="text"
                                    class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">{{ $penceramah['academic_qualification'] }}</textarea>
                            </div>
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Kelulusan Berniaga
                                </label>
                                <textarea id="business_qualification" name="business_qualification" type="text"
                                    class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">{{ $penceramah['business_qualification'] }}</textarea>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Bidang Kepakaran / Kemahiran
                                </label>
                                <textarea id="specialisation" name="specialisation" type="text" class="form-control"
                                    required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">{{ $penceramah['specialisation'] }}</textarea>
                            </div>
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Pengalaman Kerja Dalam Kepakaran / Kemahiran
                                </label>
                                <textarea id="experience" name="experience" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">{{ $penceramah['experience'] }}</textarea>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Keahlian Badan Profesional / Pertubuhan
                                </label>
                                <textarea id="professional_member" name="professional_member" type="text"
                                    class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">{{ $penceramah['professional_member'] }}</textarea>
                            </div>
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Penerbitan (Buku / Kertas Kerja)
                                </label>
                                <textarea id="distribution" name="distribution" type="text" class="form-control"
                                    required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">{{ $penceramah['distribution'] }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        {{-- <button id="tambah-penceramah" type="button" class="btn btn-outline-secondary mr-1">
                            Simpan
                        </button> --}}
                        <button id="tambah-penceramah" type="submit" class="btn btn-primary mr-1">
                            Tukar Maklumat
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END: Edit Penceramah Modal -->