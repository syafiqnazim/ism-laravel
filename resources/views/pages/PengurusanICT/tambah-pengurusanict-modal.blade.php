<div id="tambah-pengurusanict-baru" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog w-1/2 mt-10">
        <div class="modal-content">
            <form action="{{url('pengurusanict/')}}" method="post">
                @csrf
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Tambah Tempahan Baru</h5>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Nama Kursus
                                </label>
                                <select id="nama_kursus" class="w-full form-select box border-gray-300" required
                                    name="nama_kursus">
                                    <option value="0">Pilih Satu</option>
                                    @foreach ($kursuses as $kursus)
                                    <option value="{{$kursus->nama_kursus}}">{{$kursus->nama_kursus}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Peralatan
                                </label>
                                <select id="peralatan" class="w-full form-select box border-gray-300" required
                                    name="peralatan">
                                    <option value="0">Pilih Satu</option>
                                    <option value="Laptop">Laptop</option>
                                    <option value="Projector">Projector</option>
                                    <option value="Monitor">Monitor</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Jumlah
                                </label>
                                <input id="jumlah" name="jumlah" type="number" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Nama Penempah
                                </label>
                                <input id="nama_penempah" name="nama_penempah" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="col-span-1">
                                <label for="modal-datepicker-1"
                                    class="form-label w-full flex flex-col sm:flex-row">Dari</label>
                                <input id="modal-datepicker-1" class="datepicker form-control" data-single-mode="true"
                                    name="tarikh_mula">
                            </div>
                            <div class="col-span-1">
                                <label for="modal-datepicker-2"
                                    class="form-label w-full flex flex-col sm:flex-row">Sehingga</label>
                                <input id="modal-datepicker-1" class="datepicker form-control" data-single-mode="true"
                                    name="tarikh_akhir">
                            </div>
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button id="tambah-penceramah" type="submit" class="btn btn-primary mr-1">
                            Tambah Tempahan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>