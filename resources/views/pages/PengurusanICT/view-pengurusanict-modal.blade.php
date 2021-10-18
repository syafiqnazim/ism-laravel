<div id="view-pengurusanict-{{ $loop->index }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog w-1/2 mt-10">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="p-5 text-center">
                    <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Lihat Tempahan</h5>
                    <div class="grid grid-cols-2 gap-2 mb-6">
                        <div class="col-span-1 input-form">
                            <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                Nama Kursus
                            </label>
                            <select id="nama_kursus" class="w-full form-select box border-gray-300" disabled="true">
                                <option value="0">Pilih Satu</option>
                                @foreach ($kursuses as $kursus)
                                <option value="{{$kursus->nama_kursus}}" {{
                                    $pengurusanict['nama_kursus']==$kursus['nama_kursus'] ? 'selected' : '' }}>
                                    {{$kursus->nama_kursus}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-1 input-form">
                            <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                Peralatan
                            </label>
                            <select id="peralatan" class="w-full form-select box border-gray-300" disabled="true">
                                <option value="0">Pilih Satu</option>
                                <option value="Laptop" {{ $pengurusanict['peralatan']=="Laptop" ? 'selected' : '' }}>
                                    Laptop
                                </option>
                                <option value="Projector" {{ $pengurusanict['peralatan']=="Projector" ? 'selected' : ''
                                    }}>Projector</option>
                                <option value="Monitor" {{ $pengurusanict['peralatan']=="Monitor" ? 'selected' : '' }}>
                                    Monitor</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2 mb-6">
                        <div class="col-span-1 input-form">
                            <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                Jumlah
                            </label>
                            <input type="number" class="form-control" readonly value="{{ $pengurusanict['jumlah'] }}">
                        </div>
                        <div class="col-span-1 input-form">
                            <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                Nama Penempah
                            </label>
                            <input type="text" class="form-control" readonly
                                value="{{ $pengurusanict['nama_penempah'] }}">
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2 mb-6">
                        <div class="col-span-1">
                            <label for="modal-datepicker-1"
                                class="form-label w-full flex flex-col sm:flex-row">Dari</label>
                            <input class="form-control" readonly value="{{ date(" j M Y",
                                strtotime($pengurusanict->tarikh_mula)) }}">

                        </div>
                        <div class="col-span-1">
                            <label for="modal-datepicker-2"
                                class="form-label w-full flex flex-col sm:flex-row">Sehingga</label>
                            <input class="form-control" readonly value="{{ date(" j M Y",
                                strtotime($pengurusanict->tarikh_akhir)) }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>