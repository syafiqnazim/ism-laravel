<!-- BEGIN: Tambah Kursus Modal -->
<div id="tambah-modul-modal-{{$kursus->id}}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog w-1/2 mt-36">
        <div class="modal-content">
            <form action="{{url('store-modul-kursus')}}" method="post">
                @csrf
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Tambah Modul Baru</h5>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Dari
                                </label>
                                <input id="masa_mula" name="masa_mula" type="time" class="form-control timepicker" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Sehingga
                                </label>
                                <input id="masa_akhir" name="masa_akhir"  type="time" class="form-control timepicker" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Nama Modul
                                </label>
                                <input id="nama_submodul" name="nama_submodul" type="text" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi.">
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Nama Pensyarah
                                </label>
                                <select id="kluster" class="w-full form-select box border-gray-300" required
                                    name="penceramah_id" required>
                                    <option value="">Pilih Satu</option>
                                    @foreach ($penceramahs as $penceramah)
                                    <option value="1">{{ $penceramah['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <input type="hidden" name="kursus_id" value="{{$kursus->id}}">
                        <button id="tambah-kursus" type="submit" class="btn btn-primary mr-1">
                            Tambah Modul
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END: Tambah Kursus Modal -->