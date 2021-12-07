<form action="{{url('kursus/'. $kursus->id)}}" method="post">
	@csrf
	<input name="_method" type="hidden" value="PUT">
	<div class="content">
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
						Yuran
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
					<div class="mr-10">Peperiksaan : </div>
					<div class="flex items-center justify-around w-3/12">
						<div class="flex items-center">
							{{-- <input type="radio" id="ya" name="peperiksaan" value="ya" class="mr-2"> --}}
							<input type="radio" class="mr-2">
							<label for="ya">Ya</label><br>
						</div>
						<div class="flex items-center">
							{{-- <input type="radio" id="tidak" name="peperiksaan" value="tidak" class="mr-2">
							--}}
							<input type="radio" class="mr-2">
							<label for="tidak">Tidak</label><br>
						</div>
					</div>
					<div class="mr-10">Asrama : </div>
					<div class="flex items-center justify-around w-3/12">
						<div class="flex items-center">
							{{-- <input type="radio" id="ya" name="asrama" value="ya" class="mr-2"> --}}
							<input type="radio" class="mr-2">
							<label for="ya">Ya</label><br>
						</div>
						<div class="flex items-center">
							{{-- <input type="radio" id="tidak" name="asrama" value="tidak" class="mr-2"> --}}
							<input type="radio" class="mr-2">
							<label for="tidak">Tidak</label><br>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer text-right">
			<button type="button" data-dismiss="
				class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
			<button type="submit" class="btn btn-primary w-20">Submit</button>
		</div>
	</div>
</form>