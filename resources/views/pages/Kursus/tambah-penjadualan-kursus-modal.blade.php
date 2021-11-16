<!-- BEGIN: Tambah Kursus Modal -->
<div id="tambah-penjadualan-kursus-baru" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog w-1/2 mt-36">
        <div class="modal-content">
            <form action="{{url('kursus/')}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="PUT">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Tambah Kursus Baru</h5>
                        <div class="mb-6 input-form">
                            <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                Kluster
                            </label>
                            <select id="kluster" class="w-full form-select box border-gray-300" required name="kluster">
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
                        <div class="mb-6 input-form">
                            <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                Program
                            </label>
                            <select class="w-full form-select box border-gray-300" required name="kursus_id">
                                <option value="">Pilih Satu</option>
                                @foreach ($kursuses as $kursus)
                                <option value="{{ $kursus->id }}">{{$kursus->nama_kursus}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="grid grid-cols-3 gap-2 mb-6">
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Tarikh
                                </label>
                                <input id="peruntukan" name="peruntukan" type="number" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Kapasiti
                                </label>
                                <input id="peruntukan" name="peruntukan" type="number" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Yuran
                                </label>
                                <input id="peruntukan" name="peruntukan" type="number" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                        </div>
                        <div for="register-form-1" class="font-bold form-label text-left">
                            Keperluan Kursus
                        </div>
                        <div class="grid-cols-1 input-form flex items-center">
                            <div class="mr-10">Peperiksaan : </div>
                            <div class="flex items-center justify-around w-3/12">
                                <div class="flex items-center">
                                    <input type="radio" id="lelaki" name="gender" value="Lelaki" class="mr-2">
                                    <label for="lelaki">Ya</label><br>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="perempuan" name="gender" value="Perempuan" class="mr-2">
                                    <label for="perempuan">Tidak</label><br>
                                </div>
                            </div>
                        </div>
                        <div class="grid-cols-1 input-form flex items-center">
                            <div class="mr-10">Asrama : </div>
                            <div class="flex items-center justify-around w-3/12">
                                <div class="flex items-center">
                                    <input type="radio" id="lelaki" name="gender" value="Lelaki" class="mr-2">
                                    <label for="lelaki">Ya</label><br>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="perempuan" name="gender" value="Perempuan" class="mr-2">
                                    <label for="perempuan">Tidak</label><br>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-2 mb-6">

                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button id="tambah-kursus" type="submit" class="btn btn-primary mr-1">
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END: Tambah Kursus Modal -->