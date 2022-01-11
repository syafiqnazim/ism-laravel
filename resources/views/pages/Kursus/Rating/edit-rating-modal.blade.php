<!-- BEGIN: Edit Penceramah Modal -->
<style>
    @media(min-width: 300px) {
        div#edit-rating-{{ $loop->index }} .modal-dialog {
            width: 50vw;
        }
    }
</style>

<div id="edit-rating-{{ $loop->index }}" class="modal" tabindex="-1" aria-hidden="divue">
    <div class="modal-dialog mt-10">
        <div class="modal-content">
            <form class="edit-kursus-form" action="{{url('rating-kursus')}}" data-id="{{ $rating->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Kemaskini Rating Kursus</h5>
                        <div class="mb-6">
                            <label for="nama_kluster" class="form-label w-full flex flex-col sm:flex-row">
                                Nama Kluster
                            </label>
                            <input class="form-control" readonly value="{{ $rating->kursus->kursusKluster->name }}">
                        </div>
                        <div class="input-form mb-6">
                            <label class="form-label w-full flex flex-col sm:flex-row">
                                Tajuk Program
                            </label>
                            <input class="form-control" readonly value="{{ $rating->kursus->nama_kursus }}">
                        </div>
                        <div class="mb-6 text-left">
                            <p class="text-blue-700 font-bold">1. Sejauh manakah objektif program telah dicapai?</p>
                            <div class="grid grid-cols-6 text-center gap-0 bg-gray-300 font-bold">
                                <div class="py-3 border-2 border-r-0 border-gray-400">Bil</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-gray-400">Objektif</div>
                                <div class="col-span-3 py-3 border-2 border-gray-400">Nilai</div>
                            </div>
                            @foreach ($rating->ratingObjektif as $objektif)
                            <div class="grid grid-cols-6 text-center gap-0 {{ $loop->even?'bg-gray-300':'' }}">
                                <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">{{ $loop->iteration }}</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-t-0 border-gray-400">{{ $objektif->objektifKursus->objektif_kursus }}</div>
                                <div class="col-span-3 py-3 border-2 border-t-0 border-gray-400">
                                    <div class="flex flex-row items-start justify-center space-x-3">
                                        @for ($i=1; $i<8; $i++)
                                        <div>
                                            <input type="radio" name="rate_objektif_{{ $loop->iteration }}" value="{{ $i }}" {{$objektif->rate == $i ? 'checked' : ''}} data-pristine-required>
                                            <label>{{ $i }}</label><br>
                                        </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="mb-6 text-left">
                            <p class="text-blue-700 font-bold">2. Keberkesanan isi kandungan?</p>
                            <div class="grid grid-cols-6 text-center gap-0 bg-gray-300 font-bold">
                                <div class="py-3 border-2 border-r-0 border-gray-400">Bil</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-gray-400">Objektif</div>
                                <div class="col-span-3 py-3 border-2 border-gray-400">Nilai</div>
                            </div>
                            @foreach ($rating->ratingSubmodul as $submodul)
                            <div class="grid grid-cols-6 text-center gap-0 {{ $loop->even?'bg-gray-300':'' }}">
                                <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">{{ $loop->iteration }}</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-t-0 border-gray-400">{{ $submodul->submodulKursus->nama_submodul }}</div>
                                <div class="col-span-3 py-3 border-2 border-t-0 border-gray-400">
                                    <div class="flex flex-row items-start justify-center space-x-3">
                                        @for ($i=1; $i<8; $i++)
                                        <div>
                                            <input type="radio" name="rate_modul_{{ $loop->iteration }}" value="{{ $i }}" {{$submodul->rate == $i ? 'checked' : ''}} data-pristine-required>
                                            <label>{{ $i }}</label><br>
                                        </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="mb-6 text-left">
                            <p class="text-blue-700 font-bold">3. Pengurusan Bengkel</p>
                            <div class="grid grid-cols-6 text-center gap-0 bg-gray-300 font-bold">
                                <div class="py-3 border-2 border-r-0 border-gray-400">Bil</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-gray-400">Objektif</div>
                                <div class="col-span-3 py-3 border-2 border-gray-400">Nilai</div>
                            </div>
                            <div class="grid grid-cols-6 text-center gap-0">
                                <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">1</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-t-0 border-gray-400">Tempoh Bengkel</div>
                                <div class="col-span-3 py-3 border-2 border-t-0 border-gray-400">
                                    <div class="col-span-1 input-form">
                                        <div class="flex flex-row items-start justify-center md:space-x-3">
                                            @for ($i=1; $i<8; $i++)
                                            <div>
                                                <input type="radio" id="rate_1_{{$i}}" name="rate_1" value="{{$i}}" {{$rating->rate_1 == $i ? 'checked' : ''}} data-pristine-required>
                                                <label for="rate_1_{{$i}}">{{$i}}</label><br>
                                            </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 text-center gap-0 bg-gray-300">
                                <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">2</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-t-0 border-gray-400">Nota-nota Bengkel</div>
                                <div class="col-span-3 py-3 border-2 border-t-0 border-gray-400">
                                    <div class="col-span-1 input-form">
                                        <div class="flex flex-row items-start justify-center md:space-x-3">
                                            @for ($i=1; $i<8; $i++)
                                            <div>
                                                <input type="radio" id="rate_2_{{$i}}" name="rate_2" value="{{$i}}" {{$rating->rate_2 == $i ? 'checked' : ''}} data-pristine-required>
                                                <label for="rate_2_{{$i}}">{{$i}}</label><br>
                                            </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6 text-left">
                            <p class="text-blue-700 font-bold">4. Faedah Bengkel</p>
                            <div class="grid grid-cols-6 text-center gap-0">
                                <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">1</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-t-0 border-gray-400">Adakah anda telah mendapat faedah daripada kursus ini?</div>
                                <div class="col-span-3 py-3 border-2 border-t-0 border-gray-400">
                                    <div class="col-span-1 input-form">
                                        <div class="flex flex-row items-start justify-center md:space-x-3">
                                            <div>
                                                <input type="radio" id="rate_4_1" name="rate_3" value="1" {{$rating->rate_3 == 1 ? 'checked' : ''}} data-pristine-required>
                                                <label for="rate_4_1">Ya</label><br>
                                            </div>
                                            <div>
                                                <input type="radio" id="rate_4_2" name="rate_3" value="0" {{$rating->rate_1 == 0 ? 'checked' : ''}} data-pristine-required>
                                                <label for="rate_4_2">Tidak</label><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6 text-left">
                            <p class="text-blue-700 font-bold">5. Cadangan Kursus</p>
                            <textarea id="suggestion" name="suggestion" type="text" class="form-control">{{$rating->suggestion}}</textarea>
                        </div>
                        <div class="mb-6 text-left">
                            <p class="text-blue-700 font-bold">6. Makanan</p>
                            <div class="grid grid-cols-6 text-center gap-0 bg-gray-300 font-bold">
                                <div class="py-3 border-2 border-r-0 border-gray-400">Bil</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-gray-400">Objektif</div>
                                <div class="col-span-3 py-3 border-2 border-gray-400">Nilai</div>
                            </div>
                            <div class="grid grid-cols-6 text-center gap-0">
                                <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">1</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-t-0 border-gray-400">Menu Makanan</div>
                                <div class="col-span-3 py-3 border-2 border-t-0 border-gray-400">
                                    <div class="col-span-1 input-form">
                                        <div class="flex flex-row items-start justify-center md:space-x-3">
                                            @for ($i=1; $i<8; $i++)
                                            <div>
                                                <input type="radio" id="rate_food_1_{{$i}}" name="rate_food_1" value="{{$i}}" {{$rating->rate_food_1 == $i ? 'checked' : ''}} data-pristine-required>
                                                <label for="rate_food_1_{{$i}}">{{$i}}</label><br>
                                            </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 text-center gap-0 bg-gray-300">
                                <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">2</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-t-0 border-gray-400">Makanan Mencukupi</div>
                                <div class="col-span-3 py-3 border-2 border-t-0 border-gray-400">
                                    <div class="col-span-1 input-form">
                                        <div class="flex flex-row items-start justify-center md:space-x-3">
                                            @for ($i=1; $i<8; $i++)
                                            <div>
                                                <input type="radio" id="rate_food_2_{{$i}}" name="rate_food_2" value="{{$i}}" {{$rating->rate_food_2 == $i ? 'checked' : ''}} data-pristine-required>
                                                <label for="rate_food_2_{{$i}}">{{$i}}</label><br>
                                            </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 text-center gap-0">
                                <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">3</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-t-0 border-gray-400">Hidangan Makanan Menepati Masa</div>
                                <div class="col-span-3 py-3 border-2 border-t-0 border-gray-400">
                                    <div class="col-span-1 input-form">
                                        <div class="flex flex-row items-start justify-center md:space-x-3">
                                            @for ($i=1; $i<8; $i++)
                                            <div>
                                                <input type="radio" id="rate_food_3_{{$i}}" name="rate_food_3" value="{{$i}}" {{$rating->rate_food_3 == $i ? 'checked' : ''}} data-pristine-required>
                                                <label for="rate_food_3_{{$i}}">{{$i}}</label><br>
                                            </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 text-center gap-0 bg-gray-300">
                                <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">4</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-t-0 border-gray-400">Kebersihan Makanan</div>
                                <div class="col-span-3 py-3 border-2 border-t-0 border-gray-400">
                                    <div class="col-span-1 input-form">
                                        <div class="flex flex-row items-start justify-center md:space-x-3">
                                            @for ($i=1; $i<8; $i++)
                                            <div>
                                                <input type="radio" id="rate_food_4_{{$i}}" name="rate_food_4" value="{{$i}}" {{$rating->rate_food_4 == $i ? 'checked' : ''}} data-pristine-required>
                                                <label for="rate_food_4_{{$i}}">{{$i}}</label><br>
                                            </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 text-center gap-0">
                                <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">5</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-t-0 border-gray-400">Kebersihan Dewan Makan</div>
                                <div class="col-span-3 py-3 border-2 border-t-0 border-gray-400">
                                    <div class="col-span-1 input-form">
                                        <div class="flex flex-row items-start justify-center md:space-x-3">
                                            @for ($i=1; $i<8; $i++)
                                            <div>
                                                <input type="radio" id="rate_food_5_{{$i}}" name="rate_food_5" value="{{$i}}" {{$rating->rate_food_5 == $i ? 'checked' : ''}} data-pristine-required>
                                                <label for="rate_food_5_{{$i}}">{{$i}}</label><br>
                                            </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 text-center gap-0 bg-gray-300">
                                <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">6</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-t-0 border-gray-400">Mengemas Selepas Setiap Sajian</div>
                                <div class="col-span-3 py-3 border-2 border-t-0 border-gray-400">
                                    <div class="col-span-1 input-form">
                                        <div class="flex flex-row items-start justify-center md:space-x-3">
                                            @for ($i=1; $i<8; $i++)
                                            <div>
                                                <input type="radio" id="rate_food_6_{{$i}}" name="rate_food_6" value="{{$i}}" {{$rating->rate_food_6 == $i ? 'checked' : ''}} data-pristine-required>
                                                <label for="rate_food_6_{{$i}}">{{$i}}</label><br>
                                            </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 text-center gap-0 bg-gray-300">
                                <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">7</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-t-0 border-gray-400">Layanan Pramusaji</div>
                                <div class="col-span-3 py-3 border-2 border-t-0 border-gray-400">
                                    <div class="col-span-1 input-form">
                                        <div class="flex flex-row items-start justify-center md:space-x-3">
                                            @for ($i=1; $i<8; $i++)
                                            <div>
                                                <input type="radio" id="rate_food_7_{{$i}}" name="rate_food_7" value="{{$i}}" {{$rating->rate_food_7 == $i ? 'checked' : ''}} data-pristine-required>
                                                <label for="rate_food_7_{{$i}}">{{$i}}</label><br>
                                            </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 text-center gap-0 bg-gray-300">
                                <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">8</div>
                                <div class="col-span-2 py-3 border-2 border-r-0 border-t-0 border-gray-400">Komen/Cadangan Lain</div>
                                <div class="col-span-3 py-3 border-2 border-t-0 border-gray-400">
                                    <div class="px-3 input-form">
                                        <textarea id="food_suggestion" name="food_suggestion" type="text" class="form-control">{{$rating->food_suggestion}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        {{-- <button id="tambah-penceramah" type="button" class="btn btn-outline-secondary mr-1">
                            Simpan
                        </button> --}}
                        <button type="submit" class="update-rating-kursus btn btn-primary mr-1">
                            Tukar Maklumat
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END: Edit Penceramah Modal -->