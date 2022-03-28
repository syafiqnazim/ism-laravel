<input type="hidden" name="kursus_id" value="{{ $kursus->id }}">
<div class="input-form mb-6 p-2">
    <label for="" class="form-label w-full flex flex-col sm:flex-row">
        Lokasi Program
    </label>
    <input type="text" name="lokasi" class="form-control py-1 px-2 border-gray-300 block" value="">
</div>

<div class="input-form mb-6 p-2">
    <label for="" class="form-label w-full flex flex-col sm:flex-row">
        Nama Urusetia
    </label>
    <input type="text" name="urusetia" class="form-control py-1 px-2 border-gray-300 block" value="">
</div>

<div class="flex flex row">
    <div class="input-form mb-6 w-1/3 p-2">
        <label for="" class="form-label w-full flex flex-col sm:flex-row">
            Jumlah PAX
        </label>
        <div class="flex flex-row items-center">
            <input type="number" name="pax" class="form-control py-1 px-2 border-gray-300 block" style="max-width: 100px" value="">
            <p class="px-2">Orang</p>
        </div>
    </div>

    <div class="input-form mb-6 w-1/3 p-2">
        <label for="" class="form-label w-full flex flex-col sm:flex-row">
            Vegetarian
        </label>
        <div class="flex flex-row items-center">
            <input type="number" name="vegetarian" class="form-control py-1 px-2 border-gray-300 block" style="max-width: 100px" value="">
            <p class="px-2">Orang</p>
        </div>
    </div>

    <div class="input-form mb-6 w-1/3 p-2">
        <label for="" class="form-label w-full flex flex-col sm:flex-row">
            VIP
        </label>
        <div class="flex flex-row items-center">
            <input type="number" name="vip" id="vip" class="form-control py-1 px-2 border-gray-300 block" style="max-width: 100px" value="">
            <p class="px-2">Orang</p>
        </div>
    </div>
</div>


<!-- END: Show Modal Toggle -->
<div class="border-t border-b border-gray-200 mt-6 mb-5 py-3">
    {{-- @include('../pages/Kursus/datepicker-modal') --}}
    <div class="font-bold">Slot Tempahan</div>
    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-gray-300">
                <th class="w-1/12 py-3 border-2 border-gray-400">#</th>
                <th class="w-3/12 py-3 border-2 border-gray-400">Tarikh</th>
                <th class="w-2/12 py-3 border-2 border-gray-400">Makan Pagi</th>
                <th class="w-2/12 py-3 border-2 border-gray-400">Minum Pagi</th>
                <th class="w-2/12 py-3 border-2 border-gray-400">Makan Tengah Hari</th>
                <th class="w-2/12 py-3 border-2 border-gray-400">Minum Petang</th>
                <th class="w-2/12 py-3 border-2 border-gray-400">Makan Malam</th>
                <th class="w-2/12 py-3 border-2 border-gray-400">Minum Malam</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < $kursusDays; $i++)
                <tr class="{{ $i % 2 ? 'bg-gray-300' : 'bg-none' }}">
                    <td class="text-center py-3 border-2 border-gray-400">{{ $i + 1 }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">{{ $tarikhMula->copy()->addDays($i)->format('d/m/Y') }}</td>
                    <td class="text-center py-3 border-2 border-gray-400">
                        <select id="" name="dayslot-makanpagi-{{$i + 1}}" class="w-full form-select box border-gray-300" data-pristine-required="">
                            <option value="-1">Pilih Satu</option>
                            <option value="1">Hidang</option>
                            <option value="2">Buffet</option>
                            <option value="3">Packed Food</option>
                            <option value="4">Tiada</option>
                        </select>
                    </td>
                    <td class="text-center py-3 border-2 border-gray-400">
                        <select id="" name="dayslot-{{ $i + 1 }}-minumpagi"
                            class="w-full form-select box border-gray-300" data-pristine-required="">
                            <option value="-1">Pilih Satu</option>
                            <option value="1">Hidang</option>
                            <option value="2">Buffet</option>
                            <option value="3">Packed Food</option>
                            <option value="4">Tiada</option>
                        </select>
                    </td>
                    <td class="text-center py-3 border-2 border-gray-400">
                        <select id="" name="dayslot-{{ $i + 1 }}-mkntghhari"
                            class="w-full form-select box border-gray-300" data-pristine-required="">
                            <option value="-1">Pilih Satu</option>
                            <option value="1">Hidang</option>
                            <option value="2">Buffet</option>
                            <option value="3">Packed Food</option>
                            <option value="4">Tiada</option>
                        </select>
                    </td>
                    <td class="text-center py-3 border-2 border-gray-400">
                        <select id="" name="dayslot-{{ $i + 1 }}-minumptg"
                            class="w-full form-select box border-gray-300" data-pristine-required="">
                            <option value="-1">Pilih Satu</option>
                            <option value="1">Hidang</option>
                            <option value="2">Buffet</option>
                            <option value="3">Packed Food</option>
                            <option value="4">Tiada</option>
                        </select></td>
                    <td class="text-center py-3 border-2 border-gray-400">
                        <select id="" name="dayslot-{{ $i + 1 }}-mknmlm"
                            class="w-full form-select box border-gray-300" data-pristine-required="">
                            <option value="-1">Pilih Satu</option>
                            <option value="1">Hidang</option>
                            <option value="2">Buffet</option>
                            <option value="3">Packed Food</option>
                            <option value="4">Tiada</option>
                        </select>
                    </td>
                    <td class="text-center py-3 border-2 border-gray-400">
                        <select id="" name="dayslot-{{ $i + 1 }}-minummlm"
                            class="w-full form-select box border-gray-300" data-pristine-required="">
                            <option value="-1">Pilih Satu</option>
                            <option value="1">Hidang</option>
                            <option value="2">Buffet</option>
                            <option value="3">Packed Food</option>
                            <option value="4">Tiada</option>
                        </select>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
    <div class="flex flex-row justify-center py-2">
        <button type="submit" class="btn btn-primary"><i data-feather="save"></i>&nbsp;&nbsp;Simpan</button>
        <button type="button" class="btn"><i data-feather="printer"></i>&nbsp;&nbsp;Cetak</button>
    </div>
</div>
