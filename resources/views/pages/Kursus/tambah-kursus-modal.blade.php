<!-- BEGIN: Tambah Kursus Modal -->
<div id="tambah-kursus-baru" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog w-1/2 mt-36">
        <div class="modal-content">
            <form action="{{url('kursus/')}}" method="post">
                @csrf
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Tambah Kursus Baru</h5>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Nama Kursus
                                </label>
                                <input id="nama_kursus" name="nama_kursus" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Kapasiti
                                </label>
                                <input id="kapasiti" name="kapasiti" type="number" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Kluster
                                </label>
                                <select id="kluster" class="w-full form-select box border-gray-300" required
                                    name="kluster">
                                    <option value="">Pilih Satu</option>
                                    <option value="1">Professional Development</option>
                                    <option value="2">Social Development</option>
                                    <option value="3">Volunteerism & Social Entrepreneurship</option>
                                    <option value="4">Capacity & Gender Development</option>
                                    <option value="5">Research & Development</option>
                                    <option value="6">Administration and Human Resources Units</option>
                                    <option value="7">Finance Units</option>
                                    <option value="8">Domestic and Maintenance Units</option>
                                    <option value="9">Library and Documentation Centre</option>
                                    <option value="10">Information Technology Units</option>
                                </select>
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Peruntukan (RM)
                                </label>
                                <input id="peruntukan" name="peruntukan" type="number" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button id="tambah-kursus" type="submit" class="btn btn-primary mr-1">
                            Tambah Kursus
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END: Tambah Kursus Modal -->