<!-- BEGIN: Tambah Objektif Kursus Modal -->
<div id="edit-objektif-kursus-{{ $loop->index }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog w-1/2 mt-36">
        <div class="modal-content">
            <form action="{{url('objektif-kursus/'. $objektif_kursus->id)}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="PUT">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Tukar Objektif Kursus</h5>
                        <div class="grid-cols-1 input-form">
                            <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                Objektif Kursus
                            </label>
                            <input id="objektif_kursus" name="objektif_kursus" type="text" class="form-control" required
                                value="{{ $objektif_kursus['objektif_kursus']}}"">
                        </div>
                    </div>
                    <div class=" px-5 pb-8 text-center">
                            <button id="tambah-submodul" type="submit" class="btn btn-primary mr-1">
                                Tukar Objektif Kursus
                            </button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
<!-- END: Tambah Objektif Kursus Modal -->