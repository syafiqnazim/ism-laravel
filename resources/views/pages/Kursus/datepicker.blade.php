<form action="{{url('kursus/'. $kursus->id)}}" method="post">
	@csrf
	<input name="_method" type="hidden" value="PUT">
	<div class="content mt-3">

		<div class="input-form mb-6">
			<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
				Tajuk Program
			</label>
			<input id="working_address" name="working_address" type="text" class="form-control" required
				data-pristine-required-message="Ruangan ini perlu di isi.">
		</div>

		<div class="input-form mb-6">
			<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
				Objektif Program
			</label>
			<input id="working_address" name="working_address" type="text" class="form-control" required
				data-pristine-required-message="Ruangan ini perlu di isi.">
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
			<div class="grid grid-cols-2 gap-4 gap-y-3 mt-5">
				<div class="grid-cols-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Kapasiti Peserta
					</label>
					{{-- <input id="peruntukan" name="peruntukan" type="number" class="form-control" required
						data-pristine-required-message="Ruangan ini perlu di isi."> --}}
					<input type="number" class="form-control" required
						data-pristine-required-message="Ruangan ini perlu di isi.">
				</div>

 

				<div class="grid-cols-1 input-form">
					<div for="register-form-1" class="font-bold form-label text-left">
						Keperluan Kursus
					</div>

					

					<div class="col-span-1 input-form">
						 
						<div class="flex flex-col items-start">
							<div>
								<input type="checkbox" id="lelaki" name="gender" value="Lelaki">
								<label for="lelaki">Peperiksaan</label><br>
							</div>
							<div>
								<input type="checkbox" id="perempuan" name="gender" value="Perempuan">
								<label for="perempuan">Asrama</label><br>
							</div>

							<div>
								<input type="checkbox" id="perempuan" name="gender" value="Perempuan">
								<label for="perempuan">Praktikal</label><br>
							</div>

						</div>
					</div>


					 
				 

				 


					
				</div>


				

				<div class="col-span-12">

					<div for="register-form-1" class="font-bold form-label text-left">
						SENARAI MODUL
					</div>

					<div class="footer mt-3">
			 
						<button class="btn btn-primary shadow-md mr-2">
							<a href="javascript:;" data-toggle="modal" data-target="#tambah-modul-modal-{{$kursus->id}}">
								Tambah Kursus
							</a>
						</button>
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
							
							<tr class={{-- $penceramah['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none' --}}>
								<td class="text-center py-3 border-2 border-gray-400">{{-- $penceramah['id'] --}}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{-- $penceramah['name'] --}}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{-- $penceramah['ic_number'] --}}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{-- $penceramah['phone_number'] --}}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{-- $penceramah['email'] --}}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{-- $penceramah['sector'] --}}</td>
								 
							</tr>
							 
							
						</tbody>
					</table>
				</div>




				<div class="col-span-12">

					<div for="register-form-1" class="font-bold form-label text-left">
						LOKASI PROGRAM
					</div>

					

					<div class="grid grid-cols-12 gap-4 gap-y-3">
						<div class="col-span-12 sm:col-span-6">
							<label for="datepicker-1" class="form-label">Tarikh</label>
							 
							<input id="datepicker-1" class="datepicker form-control" data-single-mode="true"
								name="tarikh_program" value="">
							 
						</div>
						<div class="col-span-12 sm:col-span-6">
							<label for="datepicker-2" class="form-label">Lokasi</label>							
							<input id="datepicker-1" class="form-control" data-single-mode="true"
								name="lokasi_program" value="">
							
						</div>

						<div class="footer">
			 
							<button type="" class="btn btn-primary w-20">Simpan</button>
						</div>

					</div>
					
					<table class="table-fixed w-full mt-3">
						<thead>
							<tr class="bg-gray-300">
								<th class="w-1/12 py-3 border-2 border-gray-400">No</th>
								<th class="w-4/12 py-3 border-2 border-gray-400">Lokasi</th>
								<th class="w-1/12 py-3 border-2 border-gray-400">Tarikh </th> 
							</tr>
						</thead>
						<tbody>
							
							<tr class={{-- $penceramah['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none' --}}>
								<td class="text-center py-3 border-2 border-gray-400">{{-- $penceramah['id'] --}}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{-- $penceramah['name'] --}}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{-- $penceramah['ic_number'] --}}</td> 
								 
							</tr>
							 
							
						</tbody>
					</table>
				</div>








				<div class="col-span-12">

					<div for="register-form-1" class="font-bold form-label text-left">
						PRAKTIKAL
					</div>

					<div class="grid grid-cols-12 gap-4 gap-y-3">
						<div class="col-span-12 sm:col-span-6">
							<label for="datepicker-1" class="form-label">Tarikh</label>
							 
							<input id="datepicker-1" class="datepicker form-control" data-single-mode="true"
								name="tarikh_praktikal" value="">
							 
		
						</div>
						<div class="col-span-12 sm:col-span-6">
							<label for="datepicker-2" class="form-label">Lokasi Praktikal</label>
							
							<input class="form-control" data-single-mode="true"
								name="lokasi_praktikal" value="">
							
						</div>

						<div class="footer">
			 
							<button type="" class="btn btn-primary w-20">Simpan</button>
						</div>

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
							
							<tr class={{-- $penceramah['id'] % 2 == 0 ? 'bg-gray-300' : 'bg-none' --}}>
								<td class="text-center py-3 border-2 border-gray-400">{{-- $penceramah['id'] --}}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{-- $penceramah['name'] --}}</td>
								<td class="text-center py-3 border-2 border-gray-400">{{-- $penceramah['ic_number'] --}}</td> 
								 
							</tr>
							 
							
						</tbody>
					</table>
				</div>



			</div>
		</div>
		<div class="footer text-right mt-3">
			<button type="" class="btn btn-primary w-20">Simpan</button>
			<button type="" class="btn btn-primary w-20">Hantar</button>
		</div>
	</div>
</form>

