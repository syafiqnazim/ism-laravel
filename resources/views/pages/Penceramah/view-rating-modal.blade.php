<!-- BEGIN: View Kursus Modal -->

<div id="view-rating-{{ $loop->index }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog w-1/2 mt-10">
        <div class="modal-content">
            {{-- <form class="tambah-penceramah-form"> --}}
            <div class="modal-body p-0">
                <div class="p-5 text-center">
                    <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Lihat Rating Penceramah</h5>
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
                    <div class="input-form mb-6">
                        <label class="form-label w-full flex flex-col sm:flex-row">
                            Nama Penceramah
                        </label>
                        <input class="form-control" readonly value="{{ $rating->penceramah->name }}">
                    </div>
                    <div class="mb-6 text-left">
                        <p class="text-blue-700 font-bold">1. Keberkesanan Penyampaian Penceramah?</p>
                        <div class="grid grid-cols-6 text-center gap-0 bg-gray-300 font-bold">
                            <div class="py-3 border-2 border-r-0 border-gray-400">Slot</div>
                            <div class="col-span-3 py-3 border-2 border-r-0 border-gray-400">Nama Modul</div>
                            <div class="col-span-2 py-3 border-2 border-gray-400">Nilai</div>
                        </div>
                        @foreach ($rating->modulRatings as $submodul)
                        <div class="grid grid-cols-6 text-center gap-0 {{ $loop->even?'bg-gray-300':'' }}">
                            <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">{{ $loop->iteration }}</div>
                            <div class="col-span-3 py-3 border-2 border-r-0 border-t-0 border-gray-400">{{ $submodul->subModul->nama_submodul }}</div>
                            <div class="col-span-2 py-3 border-2 border-t-0 border-gray-400 font-extrabold">{{ $submodul->rate }}</div>
                        </div>
                        @endforeach
                    </div>
                    <div class="mb-6 text-left">
                        <p class="text-blue-700 font-bold">2. Teknik Latihan</p>
                        <div class="grid grid-cols-6 text-center gap-0 bg-gray-300 font-bold">
                            <div class="py-3 border-2 border-r-0 border-gray-400">Bil</div>
                            <div class="col-span-3 py-3 border-2 border-r-0 border-gray-400">Objektif</div>
                            <div class="col-span-2 py-3 border-2 border-gray-400">Nilai</div>
                        </div>
                        <div class="grid grid-cols-6 text-center gap-0">
                            <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">1</div>
                            <div class="col-span-3 py-3 border-2 border-r-0 border-t-0 border-gray-400">Ceramah / Syarahan / Taklimat</div>
                            <div class="col-span-2 py-3 border-2 border-t-0 border-gray-400 font-extrabold">{{ $rating->rate_1 }}</div>
                        </div>
                        <div class="grid grid-cols-6 text-center gap-0 bg-gray-300">
                            <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">2</div>
                            <div class="col-span-3 py-3 border-2 border-r-0 border-t-0 border-gray-400">Perbincangan dan Latih Amal</div>
                            <div class="col-span-2 py-3 border-2 border-t-0 border-gray-400 font-extrabold">{{ $rating->rate_2 }}</div>
                        </div>
                        <div class="grid grid-cols-6 text-center gap-0">
                            <div class="py-3 border-2 border-r-0 border-t-0 border-gray-400">3</div>
                            <div class="col-span-3 py-3 border-2 border-r-0 border-t-0 border-gray-400">Pembentangan dan Penilaian</div>
                            <div class="col-span-2 py-3 border-2 border-t-0 border-gray-400 font-extrabold">{{ $rating->rate_3 }}</div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- </form> --}}
        </div>
    </div>
</div>
<!-- END: View Kursus Modal -->