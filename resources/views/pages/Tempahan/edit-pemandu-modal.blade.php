<!-- BEGIN: Edit Kursus Modal -->
<div id="edit-pemandu-{{ $loop->index }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog w-1/2 mt-36">
        <div class="modal-content">
            <form action="{{url('senarai-pemandu/'. $senarai_pemandu->id)}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="PUT">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Tukar Maklumat Pemandu</h5>
                        <div class="grid-cols-1 input-form mb-5">
                            <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                Nama Pemandu
                            </label>
                            <input id="nama_pemandu" name="nama_pemandu" type="text" class="form-control" required
                                data-pristine-required-message="Ruangan ini perlu di isi."
                                value="{{ $senarai_pemandu['nama_pemandu'] }}">
                        </div>
                        <div class="grid-cols-1 input-form mb-5">
                            <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                No. Kad Pengenalan
                            </label>
                            <input id="ic_pemandu" name="ic_pemandu" type="text" class="form-control" minlength="12"
                                required data-pristine-required-message="Ruangan ini perlu di isi."
                                value="{{ $senarai_pemandu['ic_pemandu'] }}">
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button id="tambah-pemandu" type="submit" class="btn btn-primary mr-1">
                            Tukar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END: Edit Kursus Modal -->