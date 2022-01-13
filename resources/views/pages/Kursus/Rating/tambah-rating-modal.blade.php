<style>
    @media(min-width: 300px) {
        div#rating-program .modal-dialog {
            width: 50vw;
        }
    }
</style>

<div id="rating-program" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mt-10">
        <div class="modal-content">
            <form action="{{url('rating-kursus/')}}" method="post" id="rate-kursus-form">
                @csrf
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Rate Kursus</h5>
                        <div class="input-form mb-6">
                            <label for="rate_kursus_kluster" class="form-label w-full flex flex-col sm:flex-row">
                                Nama Kluster
                            </label>
                            <select id="rate_kursus_kluster" name="kluster" class="w-full form-select box border-gray-300" data-pristine-required>
                                <option value="">Pilih Satu</option>
                                @foreach ($klusters as $kluster)
                                    <option value="{{$kluster->id}}">{{$kluster->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-form mb-6">
                            <label for="rate_kursus_program" class="form-label w-full flex flex-col sm:flex-row">
                                Tajuk Program
                            </label>
                            <select id="rate_kursus_program" name="program" class="w-full form-select box border-gray-300" data-pristine-required>
                                <option value="">Pilih Satu</option>
                            </select>
                        </div>
                        <div class="mb-6 text-left">
                            <p class="text-blue-700 font-bold">1. Sejauh manakah objektif program telah dicapai?</p>
                            <table class="table-fixed w-full text-center">
                                <thead>
                                    <tr class="bg-gray-300">
                                        <th class="w-1/6 py-3 border-2 border-gray-400">Bil</th>
                                        <th class="w-1/2 py-3 border-2 border-gray-400">Objektif</th>
                                        <th class="w-1/3 py-3 border-2 border-gray-400">Nilai</th>
                                    </tr>
                                </thead>
                                <tbody id="rate_kursus_objektif_rate_section">
                                </tbody>
                            </table>
                        </div>
                        <div class="mb-6 text-left">
                            <p class="text-blue-700 font-bold">2. Keberkesanan isi kandungan?</p>
                            <table class="table-fixed w-full text-center">
                                <thead>
                                    <tr class="bg-gray-300">
                                        <th class="w-1/6 py-3 border-2 border-gray-400">Bil</th>
                                        <th class="w-1/2 py-3 border-2 border-gray-400">Kandungan</th>
                                        <th class="w-1/3 py-3 border-2 border-gray-400">Nilai</th>
                                    </tr>
                                </thead>
                                <tbody id="rate_kursus_modul_rate_section">
                                </tbody>
                            </table>
                        </div>
                        <div class="mb-6 text-left">
                            <p class="text-blue-700 font-bold">3. Pengurusan Bengkel</p>
                            <table class="table-fixed w-full text-center">
                                <tr class="bg-gray-300">
                                    <th class="w-1/6 py-3 border-2 border-gray-400">Bil</th>
                                    <th class="w-1/2 py-3 border-2 border-gray-400">Objektif</th>
                                    <th class="w-1/3 py-3 border-2 border-gray-400">Nilai</th>
                                </tr>
                                <tr>
                                    <td class="py-3 border-2 border-gray-400">1</td>
                                    <td class="py-3 border-2 border-gray-400">Tempoh Bengkel</td>
                                    <td class="py-3 border-2 border-gray-400">
                                        <div class="col-span-1 input-form">
                                            <div class="flex flex-row items-start justify-center md:space-x-3">
                                                @for ($i=1; $i<8; $i++)
                                                <div>
                                                    <input type="radio" id="rate_1_{{$i}}" name="rate_1" value="{{$i}}" data-pristine-required>
                                                    <label for="rate_1_{{$i}}">{{$i}}</label><br>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-gray-300">
                                    <td class="py-3 border-2 border-gray-400">2</td>
                                    <td class="py-3 border-2 border-gray-400">Nota-nota Bengkel</td>
                                    <td class="py-3 border-2 border-gray-400">
                                        <div class="col-span-1 input-form">
                                            <div class="flex flex-row items-start justify-center md:space-x-3">
                                                @for ($i=1; $i<8; $i++)
                                                <div>
                                                    <input type="radio" id="rate_2_{{$i}}" name="rate_2" value="{{$i}}" data-pristine-required>
                                                    <label for="rate_2_{{$i}}">{{$i}}</label><br>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="mb-6 text-left">
                            <p class="text-blue-700 font-bold">4. Faedah Bengkel</p>
                            <table class="table-fixed w-full text-center">
                                <tr>
                                    <td class="w-1/6 py-3 border-2 border-gray-400">1</td>
                                    <td class="w-1/2 py-3 border-2 border-gray-400">Adakah anda telah mendapat faedah daripada kursus ini?</td>
                                    <td class="w-1/3 py-3 border-2 border-gray-400">
                                        <div class="col-span-1 input-form">
                                            <div class="flex flex-row items-start justify-center md:space-x-3">
                                                <div>
                                                    <input type="radio" id="rate_4_1" name="rate_3" value="1" data-pristine-required>
                                                    <label for="rate_4_1">Ya</label><br>
                                                </div>
                                                <div>
                                                    <input type="radio" id="rate_4_2" name="rate_3" value="0" data-pristine-required>
                                                    <label for="rate_4_2">Tidak</label><br>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="mb-6 text-left">
                            <p class="text-blue-700 font-bold">5. Cadangan Kursus</p>
                            <textarea id="suggestion" name="suggestion" type="text" class="form-control"></textarea>
                        </div>
                        <div class="mb-6 text-left">
                            <p class="text-blue-700 font-bold">6. Makanan</p>
                            <table class="table-fixed w-full text-center">
                                <tr class="bg-gray-300">
                                    <th class="w-1/6 py-3 border-2 border-gray-400">Bil</th>
                                    <th class="w-1/2 py-3 border-2 border-gray-400">Objektif</th>
                                    <th class="w-1/3 py-3 border-2 border-gray-400">Nilai</th>
                                </tr>
                                <tr>
                                    <td class="py-3 border-2 border-gray-400">1</td>
                                    <td class="py-3 border-2 border-gray-400">Menu Makanan</td>
                                    <td class="py-3 border-2 border-gray-400">
                                        <div class="col-span-1 input-form">
                                            <div class="flex flex-row items-start justify-center md:space-x-3">
                                                @for ($i=1; $i<8; $i++)
                                                <div>
                                                    <input type="radio" id="rate_food_1_{{$i}}" name="rate_food_1" value="{{$i}}" data-pristine-required>
                                                    <label for="rate_food_1_{{$i}}">{{$i}}</label><br>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-gray-300">
                                    <td class="py-3 border-2 border-gray-400">2</td>
                                    <td class="py-3 border-2 border-gray-400">Makanan Mencukupi</td>
                                    <td class="py-3 border-2 border-gray-400">
                                        <div class="col-span-1 input-form">
                                            <div class="flex flex-row items-start justify-center md:space-x-3">
                                                @for ($i=1; $i<8; $i++)
                                                <div>
                                                    <input type="radio" id="rate_food_2_{{$i}}" name="rate_food_2" value="{{$i}}" data-pristine-required>
                                                    <label for="rate_food_2_{{$i}}">{{$i}}</label><br>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 border-2 border-gray-400">3</td>
                                    <td class="py-3 border-2 border-gray-400">Hidangan Makanan Menepati Masa</td>
                                    <td class="py-3 border-2 border-gray-400">
                                        <div class="col-span-1 input-form">
                                            <div class="flex flex-row items-start justify-center md:space-x-3">
                                                @for ($i=1; $i<8; $i++)
                                                <div>
                                                    <input type="radio" id="rate_food_3_{{$i}}" name="rate_food_3" value="{{$i}}" data-pristine-required>
                                                    <label for="rate_food_3_{{$i}}">{{$i}}</label><br>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-gray-300">
                                    <td class="py-3 border-2 border-gray-400">4</td>
                                    <td class="py-3 border-2 border-gray-400">Kebersihan Makanan</td>
                                    <td class="py-3 border-2 border-gray-400">
                                        <div class="col-span-1 input-form">
                                            <div class="flex flex-row items-start justify-center md:space-x-3">
                                                @for ($i=1; $i<8; $i++)
                                                <div>
                                                    <input type="radio" id="rate_food_4_{{$i}}" name="rate_food_4" value="{{$i}}" data-pristine-required>
                                                    <label for="rate_food_4_{{$i}}">{{$i}}</label><br>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 border-2 border-gray-400">5</td>
                                    <td class="py-3 border-2 border-gray-400">Kebersihan Dewan Makan</td>
                                    <td class="py-3 border-2 border-gray-400">
                                        <div class="col-span-1 input-form">
                                            <div class="flex flex-row items-start justify-center md:space-x-3">
                                                @for ($i=1; $i<8; $i++)
                                                <div>
                                                    <input type="radio" id="rate_food_5_{{$i}}" name="rate_food_5" value="{{$i}}" data-pristine-required>
                                                    <label for="rate_food_5_{{$i}}">{{$i}}</label><br>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-gray-300">
                                    <td class="py-3 border-2 border-gray-400">6</td>
                                    <td class="py-3 border-2 border-gray-400">Mengemas Selepas Setiap Sajian</td>
                                    <td class="py-3 border-2 border-gray-400">
                                        <div class="col-span-1 input-form">
                                            <div class="flex flex-row items-start justify-center md:space-x-3">
                                                @for ($i=1; $i<8; $i++)
                                                <div>
                                                    <input type="radio" id="rate_food_6_{{$i}}" name="rate_food_6" value="{{$i}}" data-pristine-required>
                                                    <label for="rate_food_6_{{$i}}">{{$i}}</label><br>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="py-3 border-2 border-gray-400">7</td>
                                    <td class="py-3 border-2 border-gray-400">Layanan Pramusaji</td>
                                    <td class="py-3 border-2 border-gray-400">
                                        <div class="col-span-1 input-form">
                                            <div class="flex flex-row items-start justify-center md:space-x-3">
                                                @for ($i=1; $i<8; $i++)
                                                <div>
                                                    <input type="radio" id="rate_food_7_{{$i}}" name="rate_food_7" value="{{$i}}" data-pristine-required>
                                                    <label for="rate_food_7_{{$i}}">{{$i}}</label><br>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-gray-300">
                                    <td class="py-3 border-2 border-gray-400">8</td>
                                    <td class="py-3 border-2 border-gray-400">Komen/Cadangan Lain</td>
                                    <td class="py-3 border-2 border-gray-400">
                                        <div class="px-3 input-form">
                                            <textarea id="food_suggestion" name="food_suggestion" type="text" class="form-control"></textarea>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button id="rate-kursus" type="submit" class="btn btn-primary mr-1">
                            Rate Program
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
