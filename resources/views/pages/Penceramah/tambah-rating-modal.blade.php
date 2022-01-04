<style>
    @media(min-width: 300px) {
        div#rating-penceramah .modal-dialog {
            width: 50vw;
        }
    }
</style>

<div id="rating-penceramah" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mt-10">
        <div class="modal-content">
            <form action="{{url('penceramah/')}}" method="post">
                @csrf
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Rate Penceramah</h5>
                        <div class="input-form mb-6">
                            <label for="nama_kluster" class="form-label w-full flex flex-col sm:flex-row">
                                Nama Kluster
                            </label>
                            <select id="nama_kluster" name="nama_kluster" class="w-full form-select box border-gray-300" required>
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
                        <div class="input-form mb-6">
                            <label for="tajuk_program" class="form-label w-full flex flex-col sm:flex-row">
                                Tajuk Program
                            </label>
                            <select id="tajuk_program" name="tajuk_program" class="w-full form-select box border-gray-300" required>
                                <option value="">Pilih Satu</option>
                            </select>
                        </div>
                        <div class="input-form mb-6">
                            <label for="nama_penceramah" class="form-label w-full flex flex-col sm:flex-row">
                                Nama Penceramah
                            </label>
                            <select id="nama_penceramah" name="nama_penceramah" class="w-full form-select box border-gray-300" required>
                                <option selected>Pilih Satu</option>
                            </select>
                        </div>
                        <div class="mb-6 text-left">
                            <p class="text-blue-700 font-bold">1. Keberkesanan Penyampaian Penceramah?</p>
                            <table class="table-fixed w-full text-center">
                                <tr class="bg-gray-300">
                                    <th class="w-1/6 py-3 border-2 border-gray-400">Slot</th>
                                    <th class="w-1/2 py-3 border-2 border-gray-400">Nama Modul</th>
                                    <th class="w-1/3 py-3 border-2 border-gray-400">Nilai</th>
                                </tr>
                                <tr>
                                    <td class="py-3 border-2 border-gray-400">1</td>
                                    <td class="py-3 border-2 border-gray-400">Nama Modul</td>
                                    <td class="py-3 border-2 border-gray-400">
                                        <div class="col-span-1 input-form">
                                            <div class="flex flex-row items-start justify-center space-x-3">
                                                <div>
                                                    <input type="radio" id="rate_modul_1_1" name="rate_modul_1" value="1">
                                                    <label for="rate_modul_1_1">1</label><br>
                                                </div>
                                                <div>
                                                    <input type="radio" id="rate_modul_1_2" name="rate_modul_1" value="2">
                                                    <label for="rate_modul_1_2">2</label><br>
                                                </div>
                                                <div>
                                                    <input type="radio" id="rate_modul_1_3" name="rate_modul_1" value="3">
                                                    <label for="rate_modul_1_3">3</label><br>
                                                </div>
                                                <div>
                                                    <input type="radio" id="rate_modul_1_4" name="rate_modul_1" value="4">
                                                    <label for="rate_modul_1_4">4</label><br>
                                                </div>
                                                <div>
                                                    <input type="radio" id="rate_modul_1_5" name="rate_modul_1" value="5">
                                                    <label for="rate_modul_1_5">5</label><br>
                                                </div>
                                                <div>
                                                    <input type="radio" id="rate_modul_1_6" name="rate_modul_1" value="6">
                                                    <label for="rate_modul_1_6">6</label><br>
                                                </div>
                                                <div>
                                                    <input type="radio" id="rate_modul_1_7" name="rate_modul_1" value="7">
                                                    <label for="rate_modul_1_7">7</label><br>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="mb-6 text-left">
                            <p class="text-blue-700 font-bold">2. Teknik Latihan</p>
                            <table class="table-fixed w-full text-center">
                                <tr class="bg-gray-300">
                                    <th class="w-1/6 py-3 border-2 border-gray-400">BIL</th>
                                    <th class="w-1/2 py-3 border-2 border-gray-400">Objektif</th>
                                    <th class="w-1/3 py-3 border-2 border-gray-400">Nilai</th>
                                </tr>
                                <tr>
                                    <td class="py-3 border-2 border-gray-400">1</td>
                                    <td class="py-3 border-2 border-gray-400">Ceramah / Syarahan / Taklimat</td>
                                    <td class="py-3 border-2 border-gray-400">
                                        <div class="col-span-1 input-form">
                                            <div class="flex flex-row items-start justify-center space-x-3">
                                                @for ($i=1; $i<8; $i++)
                                                <div>
                                                    <input type="radio" id="rate_teknik_1_{{$i}}" name="rate_teknik_1" value="{{$i}}">
                                                    <label for="rate_teknik_1_{{$i}}">{{$i}}</label><br>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-gray-300">
                                    <td class="py-3 border-2 border-gray-400">2</td>
                                    <td class="py-3 border-2 border-gray-400">Perbincangan dan Latih Amal</td>
                                    <td class="py-3 border-2 border-gray-400">
                                        <div class="col-span-1 input-form">
                                            <div class="flex flex-row items-start justify-center space-x-3">
                                                @for ($i=1; $i<8; $i++)
                                                <div>
                                                    <input type="radio" id="rate_teknik_2_{{$i}}" name="rate_teknik_2" value="{{$i}}">
                                                    <label for="rate_teknik_2_{{$i}}">{{$i}}</label><br>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 border-2 border-gray-400">1</td>
                                    <td class="py-3 border-2 border-gray-400">Pembentangan dan Penilaian</td>
                                    <td class="py-3 border-2 border-gray-400">
                                        <div class="col-span-1 input-form">
                                            <div class="flex flex-row items-start justify-center space-x-3">
                                                @for ($i=1; $i<8; $i++)
                                                <div>
                                                    <input type="radio" id="rate_teknik_3_{{$i}}" name="rate_teknik_3" value="{{$i}}">
                                                    <label for="rate_teknik_3_{{$i}}">{{$i}}</label><br>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
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
