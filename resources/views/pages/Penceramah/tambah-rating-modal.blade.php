<div id="tambah-penceramah-baru" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog w-1/2 mt-10">
        <div class="modal-content">
            <form action="{{url('penceramah/')}}" method="post">
                @csrf
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Rate Penceramah</h5>
                        <div class="grid grid-cols-4 gap-2 mb-6">
                            <div class="col-span-2 input-form">
                                <label for="" class="form-label w-full flex flex-col sm:flex-row">
                                    Nama Kluster
                                </label>
                                <select id="nama_kluster" name="nama_kluster" class="form-control appearance-none
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-small
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding bg-no-repeat
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Pilihan Nama Kluster">
                                    <option selected>Pilih Nama Kluster</option>
                                    @foreach ($klusters as $item)
                                        <option value="{{$item->id}}">{{$item->nama_kursus}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-span-2 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Tajuk Program
                                </label>
                                <select id="tajuk_program" name="tajuk_program" class="form-control appearance-none
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-small
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding bg-no-repeat
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Pilihan Nama Program">
                                    <option selected>Pilih Tajuk Program</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button id="rate-penceramah" type="submit" class="btn btn-primary mr-1">
                            Rate Penceramah
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
