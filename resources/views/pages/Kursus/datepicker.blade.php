	<form action="{{url('update-kursus')}}" method="post">
	@csrf
	 
	<div class="content mt-3">

		<div class="input-form mb-6">
			<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
				Tajuk Program
			</label>
			<input id="tajuk_program" name="tajuk_program" type="text" class="form-control" required
				data-pristine-required-message="Ruangan ini perlu di isi." value="{{$kursus->tajuk_program}}">
		</div>

		<div class="input-form mb-6">
			<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
				Objektif Program
			</label>
			<input id="objektif_program" name="objektif_program" type="text" class="form-control" required
				data-pristine-required-message="Ruangan ini perlu di isi." value="{{$kursus->objektif_program}}">
		</div>


		<div class="header">
			<h2 class="font-medium text-base mr-auto">Sila pilih tarikh</h2>
			<div class="dropdown sm:hidden">
				<a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false">
					<i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-600"></i>
				</a>
			</div>
		</div>

		


		<div class="body">
			<div class="grid grid-cols-12 gap-4 gap-y-3">
				<div class="col-span-12 sm:col-span-6">
					<label for="datepicker-1" class="form-label">Dari</label>
					@if($kursus->tarikh_mula)
					<input id="datepicker-1" class="datepicker form-control" data-single-mode="true"
						name="tarikh_mula" value="{{ date(" j M Y", strtotime($kursus->tarikh_mula)) }}">
					@else
					<input id="datepicker-1" class="datepicker form-control" data-single-mode="true"
						name="tarikh_mula">
					@endif

				</div>
				<div class="col-span-12 sm:col-span-6">
					<label for="datepicker-2" class="form-label">Sehingga</label>
					@if($kursus->tarikh_akhir)
					<input id="datepicker-1" class="datepicker form-control" data-single-mode="true"
						name="tarikh_akhir" value="{{ date(" j M Y", strtotime($kursus->tarikh_akhir
					. ' -1 day')) }}">
					@else
					<input id="datepicker-1" class="datepicker form-control" data-single-mode="true"
						name="tarikh_akhir">
					@endif
				</div>
			</div>

			<div class="grid grid-cols-12 gap-4 gap-y-3 mt-3">
				<div class="col-span-12 sm:col-span-6">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Kapasiti Peserta
					</label>
					{{-- <input id="peruntukan" name="peruntukan" type="number" class="form-control" required
						data-pristine-required-message="Ruangan ini perlu di isi."> --}}
					<input type="number" class="form-control" required name="kapasiti_peserta" required
						data-pristine-required-message="Ruangan ini perlu di isi." value="{{$kursus->kapasiti_peserta}}">

				</div>
				<div class="col-span-12 sm:col-span-6">
					<div for="register-form-1" class="font-bold form-label text-left">
						Keperluan Program
					</div>

					<input type="hidden" id="lelaki" name="ispeperiksaan" value="0"  >
					<input type="hidden" id="lelaki" name="isasrama" value="0" >
					<input type="hidden" id="lelaki" name="ispraktikal" value="0" >

					<div class="col-span-1 input-form">
						 
						<div class="flex flex-col items-start">
							<div>
								<input type="checkbox" id="lelaki" name="ispeperiksaan" value="1" {{ ($kursus->ispeperiksaan == 1) ? 'checked' : ''}}>
								<label for="lelaki">Peperiksaan</label><br>
							</div>
							<div>
								<input type="checkbox" id="perempuan" name="isasrama" value="1" {{ ($kursus->isasrama == 1) ? 'checked' : ''}}>
								<label for="perempuan">Asrama</label><br>
							</div>

							<div>
								<input type="checkbox" id="perempuan" name="ispraktikal" value="1" {{ ($kursus->ispraktikal == 1) ? 'checked' : ''}}>
								<label for="perempuan">Praktikal</label><br>
							</div>

						</div>
					</div>

				</div>
			</div>


			<div class="col-span-12 sm:col-span-6">
				 

 

				 

				<div class="footer text-right">
					<input type="hidden" name="id" value="{{$kursus->id}}">
					<button type="" class="btn btn-primary w-20">Simpan</button> 
				</div>
			</div>
			</form>
				
			 
				<div class="col-span-12">

					<div for="register-form-1" class="font-bold form-label text-left">
						SENARAI MODUL
					</div>

					<div class="footer mt-3">
			 
					 
							<a href="#" class="btn btn-primary shadow-md mr-2" data-toggle="modal" data-target="#tambah-modul-modal-{{$kursus->id}}">
								Tambah Modul
							</a>
			 
					</div>
					@include('../pages/Kursus/tambah-modul-modal')

					<table class="table-fixed w-full  mt-3">
						<thead>
							<tr class="bg-gray-300">
								<th class="w-1/12 py-3 border-2 border-gray-400">Slot</th>
								<th class="w-4/12 py-3 border-2 border-gray-400">Masa</th>
								<th class="w-1/12 py-3 border-2 border-gray-400">Tempoh (Jam)</th>
								<th class="w-1/12 py-3 border-2 border-gray-400">Tarikh</th>
								<th class="w-2/12 py-3 border-2 border-gray-400">Nama Modul</th>
								<th class="w-1/12 py-3 border-2 border-gray-400">Nama Pensyarah</th> 
							</tr>
						</thead>
						<tbody>
							@php
							$submodulKursuses = \App\Models\SubmodulKursus::where(['kursus_id' => $kursus->id])->get();
							$bil=1;
							@endphp
							@foreach($submodulKursuses as $submodulKursus)
							
							@php
							$startTime = \Carbon\Carbon::parse($submodulKursus->masa_mula);
							$finishTime = \Carbon\Carbon::parse($submodulKursus->masa_akhir);
							
							$totalDuration = $finishTime->diffInHours($startTime);
							//dd($totalDuration);
							@endphp
							<tr class={{ $submodulKursus['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none' }}>
								<td class="text-center py-3 border-2 border-gray-400">{{ $bil++ }}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{ $submodulKursus->masa_mula }} - {{ $submodulKursus->masa_akhir }}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{ $totalDuration }}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{ \Carbon\Carbon::parse($submodulKursus->created_at)->format('d/m/Y')}}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{ $submodulKursus->nama_submodul }}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{ $submodulKursus->penceramah->name }}</td>
								 
							</tr>
							 
							@endforeach
						</tbody>
					</table>
				</div>




				<div class="col-span-12">

					<div for="register-form-1" class="font-bold form-label text-left">
						LOKASI PROGRAM
					</div>

					<form action="{{url('store-program-kursus')}}" method="post">
						@csrf

					<div class="grid grid-cols-12 gap-4 gap-y-3">
						<div class="col-span-12 sm:col-span-6">
							<label for="datepicker-1" class="form-label">Tarikh</label>
							 
							<input id="datepicker-1" class="datepicker form-control" data-single-mode="true"
								name="tarikh" value="" required>
							 
						</div>
						<div class="col-span-12 sm:col-span-6">
							<label for="datepicker-2" class="form-label">Lokasi</label>							
							<input  class="form-control" 
								name="lokasi" value="" required>
							
						</div>

						<div class="footer">
							<input type="hidden" name="kursus_id" value="{{$kursus->id}}">
							<button type="" class="btn btn-primary w-20">Simpan</button>
						</div>

					</div>
					</form>
					
					<table class="table-fixed w-full mt-3">
						<thead>
							<tr class="bg-gray-300">
								<th class="w-1/12 py-3 border-2 border-gray-400">No</th>
								<th class="w-4/12 py-3 border-2 border-gray-400">Lokasi</th>
								<th class="w-1/12 py-3 border-2 border-gray-400">Tarikh </th> 
							</tr>
						</thead>
						<tbody>
							@php
							$programKursuses = \App\Models\ProgramKursus::where(['kursus_id' => $kursus->id])->get();
							$bilLokasi=1;
							@endphp
							@foreach($programKursuses as $programKursus)						
							 
							<tr class={{ $programKursus['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none' }}>
								<td class="text-center py-3 border-2 border-gray-400">{{ $bilLokasi++ }}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{ $programKursus->lokasi }}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{ \Carbon\Carbon::parse($programKursus->tarikh)->format('d/m/Y')}}</td> 
								 
							</tr>
							@endforeach
							
						</tbody>
					</table>
				</div>








				<div class="col-span-12">

					<div for="register-form-1" class="font-bold form-label text-left">
						PRAKTIKAL
					</div>
					<form action="{{url('store-praktikal-kursus')}}" method="post">
						@csrf

					<div class="grid grid-cols-12 gap-4 gap-y-3">
						<div class="col-span-12 sm:col-span-6">
							<label for="datepicker-1" class="form-label">Tarikh</label>
							 
							<input id="datepicker-1" class="datepicker form-control" data-single-mode="true"
								name="tarikh" value="" required>
							 
		
						</div>
						<div class="col-span-12 sm:col-span-6">
							<label for="datepicker-2" class="form-label">Lokasi Praktikal</label>
							
							<input class="form-control" data-single-mode="true"
								name="lokasi" value="" required>
							
						</div>

						<div class="footer">
							<input type="hidden" name="kursus_id" value="{{$kursus->id}}">
							<button type="" class="btn btn-primary w-20">Simpan</button>
						</div>
					</form>

					</div>
					
					<table class="table-fixed w-full mt-3">
						<thead>
							<tr class="bg-gray-300">
								<th class="w-1/12 py-3 border-2 border-gray-400">No</th>
								<th class="w-4/12 py-3 border-2 border-gray-400">Lokasi Praktikal</th>
								<th class="w-1/12 py-3 border-2 border-gray-400">Tarikh</th> 
							</tr>
						</thead>
						<tbody>
							
							@php
							$praktikalKursuses = \App\Models\PraktikalKursus::where(['kursus_id' => $kursus->id])->get();
							$bilPraktikal=1;
							@endphp
							@foreach($praktikalKursuses as $praktikalKursus)						
							 
							<tr class={{ $praktikalKursus['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none' }}>
								<td class="text-center py-3 border-2 border-gray-400">{{ $bilPraktikal++ }}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{ $praktikalKursus->lokasi }}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{ \Carbon\Carbon::parse($praktikalKursus->tarikh)->format('d/m/Y')}}</td> 
								 
							</tr>
							@endforeach
							 
							
						</tbody>
					</table>
				</div>



		
		</div>
		<div class="footer text-right mt-3"> 
			 
			@if($kursus->ishantar == 1)
			
			<button  type="button" class="btn btn-primary w-20" disabled >Hantar</button>
			@else
			<a href="{{url('hantar-kursus/'. $kursus->id)}}" class="btn btn-primary w-20" >Hantar </a>
			@endif
		</div>
	</div>


