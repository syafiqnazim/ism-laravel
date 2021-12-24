<!-- BEGIN: Edit Penceramah Modal -->
<div id="edit-penceramah-{{ $loop->index }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog w-1/2 mt-10">
        <div class="modal-content">
            <form action="credit-penceramah-update" method="post">
                @csrf
                
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Kemaskini Kredit Penceramah</h5>
                        <div class="grid grid-cols-2 gap-2 mb-6">
                             
                            <div class="col-span-2 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Nama
                                </label>
                                <input id="name" name="name" type="text" class="form-control w-full" readonly
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['name'] }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-12">
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    No. Kad Pengenalan
                                </label>
                                <input id="ic_number" name="ic_number" type="number" class="form-control" readonly
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['ic_number'] }}">
                            </div>
                            
                        </div>
                         
                         
                        <div class="grid grid-cols-2 gap-2 mb-6">
                             
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    No. Tel. Bimbit
                                </label>
                                <input id="phone_number" name="phone_number" type="number" class="form-control" readonly
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['phone_number'] }}">
                            </div>
                        </div>
                         


                        <div class="grid grid-cols-2 gap-2 mb-6">
                            <div class="col-span-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Credit
                                </label>
                                <input id="credit" name="credit" type="number" class="form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi."
                                    value="{{ $penceramah['credit'] }}">
                            </div>
                            
                        </div>
                        
                         
                    </div>
                    <div class="px-5 pb-8 text-center">
                        {{-- <button id="tambah-penceramah" type="button" class="btn btn-outline-secondary mr-1">
                            Simpan
                        </button> --}}
                        <input id="id" name="id" type="hidden"  
                        value="{{ $penceramah['id'] }}">
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