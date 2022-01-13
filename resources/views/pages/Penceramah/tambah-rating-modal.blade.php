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
            <form action="{{url('penceramah/')}}" method="post" id="rate-penceramah-form">
                @csrf
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Rate Penceramah</h5>
                        <div class="input-form mb-6">
                            <label for="rate_penceramah_kluster" class="form-label w-full flex flex-col sm:flex-row">
                                Nama Kluster
                            </label>
                            <select id="rate_penceramah_kluster" name="kluster" class="w-full form-select box border-gray-300" data-pristine-required>
                                <option value="">Pilih Satu</option>
                                @foreach ($klusters as $kluster)
                                    <option value="{{$kluster->id}}">{{$kluster->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-form mb-6">
                            <label for="rate_penceramah_program" class="form-label w-full flex flex-col sm:flex-row">
                                Tajuk Program
                            </label>
                            <select id="rate_penceramah_program" name="program" class="w-full form-select box border-gray-300" data-pristine-required>
                                <option value="">Pilih Satu</option>
                            </select>
                        </div>
                        <div class="input-form mb-6">
                            <label for="rate_penceramah_penceramah" class="form-label w-full flex flex-col sm:flex-row">
                                Nama Penceramah
                            </label>
                            <select id="rate_penceramah_penceramah" name="penceramah" class="w-full form-select box border-gray-300" data-pristine-required>
                                <option selected>Pilih Satu</option>
                            </select>
                        </div>
                        <div class="mb-6 text-left">
                            <p class="text-blue-700 font-bold">1. Keberkesanan Penyampaian Penceramah?</p>
                            <table class="table-fixed w-full text-center">
                                <thead>
                                    <tr class="bg-gray-300">
                                        <th class="w-1/6 py-3 border-2 border-gray-400">Slot</th>
                                        <th class="w-1/2 py-3 border-2 border-gray-400">Nama Modul</th>
                                        <th class="w-1/3 py-3 border-2 border-gray-400">Nilai</th>
                                    </tr>
                                </thead>
                                <tbody id="rate_penceramah_modul_rate_section">
                                </tbody>
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
                                                    <input type="radio" id="rate_teknik_1_{{$i}}" name="rate_teknik_1" value="{{$i}}" data-pristine-required>
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
                                                    <input type="radio" id="rate_teknik_2_{{$i}}" name="rate_teknik_2" value="{{$i}}" data-pristine-required>
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
                                                    <input type="radio" id="rate_teknik_3_{{$i}}" name="rate_teknik_3" value="{{$i}}" data-pristine-required>
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
