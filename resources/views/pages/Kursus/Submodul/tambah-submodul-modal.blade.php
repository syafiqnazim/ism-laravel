<!-- BEGIN: Tambah Submodul Modal -->
<div id="tambah-submodul-baru" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog w-1/2 mt-36">
        <div class="modal-content">
            <form action="{{url('submodul-kursus/')}}" method="post">
                @csrf
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Tambah Submodul Baru</h5>
                        <div class="grid-cols-1 input-form">
                            <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                Nama Submodul
                            </label>
                            <input id="nama_submodul" name="nama_submodul" type="text" class="form-control" required
                                data-pristine-required-message="Ruangan ini perlu di isi.">
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button id="tambah-submodul" type="submit" class="btn btn-primary mr-1">
                            Tambah Submodul
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END: Tambah Submodul Modal -->