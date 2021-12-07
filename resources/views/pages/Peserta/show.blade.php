<!-- BEGIN: View Kursus Modal -->
<div id="view-peserta-{{ $loop->index }}" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog w-1/2 mt-10">
		<div class="modal-content">
			{{-- <form class="tambah-peserta-form"> --}}
			<div class="modal-body p-0">
				<div class="p-5 text-center">
					<h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Lihat Peserta</h5>
					<div class="grid grid-cols-4 gap-2 mb-6">
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								Sektor
							</label>
							<input id="sector" class="form-control" readonly value="{{ $peserta['sector'] }}">
						</div>
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								Gelaran
							</label>
							<input id="title" class="form-control" readonly value="{{ $peserta['title'] }}">
						</div>
						<div class="col-span-2 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								Nama
							</label>
							<input id="name" class="form-control" readonly value="{{ $peserta['name'] }}">
						</div>
					</div>
					<div class="grid grid-cols-2 gap-2 mb-6">
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								No. Kad Pengenalan
							</label>
							<input id="ic_number" class="form-control" readonly value="{{ $peserta['ic_number'] }}">
						</div>
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								Jantina
							</label>
							<div class="flex flex-col items-start">
								<div>
									<input type="radio" id="lelaki"
										{{ $peserta['gender'] == "Lelaki" ? 'checked' : '' }}>
									<label for="lelaki">Lelaki</label><br>
								</div>
								<div>
									<input type="radio" id="perempuan"
										{{ $peserta['gender'] == "Perempuan" ? 'checked' : '' }}>
									<label for="perempuan">Perempuan</label><br>
								</div>
							</div>
						</div>
					</div>
					<div class="grid grid-cols-2 gap-2 mb-6">
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								No. Akaun Bank
							</label>
							<input id="bank_number" class="form-control" readonly
								value="{{ $peserta['bank_number'] }}">
						</div>
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								Nama Bank
							</label>
							<input id="bank_name" class="form-control" readonly value="{{ $peserta['bank_name'] }}">
						</div>
					</div>
					<div class="input-form mb-6">
						<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
							Alamat Bank
						</label>
						<input id="bank_address" class="form-control" readonly
							value="{{ $peserta['bank_address'] }}">
					</div>
					<div class="input-form mb-6">
						<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
							Alamat Tempat Bertugas
						</label>
						<input id="working_address" class="form-control" readonly
							value="{{ $peserta['working_address'] }}">
					</div>
					<div class="input-form mb-6">
						<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
							Alamat Rumah
						</label>
						<input id="home_address" class="form-control" readonly
							value="{{ $peserta['home_address'] }}">
					</div>
					<div class="grid grid-cols-2 gap-2 mb-6">
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								No. Tel. Pejabat
							</label>
							<input id="working_number" class="form-control" readonly
								value="{{ $peserta['working_number'] }}">
						</div>
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								No. Tel. Rumah
							</label>
							<input id="home_number" class="form-control" readonly
								value="{{ $peserta['home_number'] }}">
						</div>
					</div>
					<div class="grid grid-cols-2 gap-2 mb-6">
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								No. Fax
							</label>
							<input id="fax_number" class="form-control" readonly
								value="{{ $peserta['fax_number'] }}">
						</div>
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								No. Tel. Bimbit
							</label>
							<input id="phone_number" class="form-control" readonly
								value="{{ $peserta['phone_number'] }}">
						</div>
					</div>
					<div class="grid grid-cols-2 gap-2 mb-6">
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								Email
							</label>
							<input id="email" class="form-control" readonly value="{{ $peserta['email'] }}">
						</div>
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								Klasifikasi Perkhidmatan
							</label>
							<input id="service_classified" class="form-control" readonly
								value="{{ $peserta['service_classified'] }}">
						</div>
					</div>
					<div class="grid grid-cols-2 gap-2 mb-6">
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								Jawatan
							</label>
							<input id="position" class="form-control" readonly value="{{ $peserta['position'] }}">
						</div>
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								Gred
							</label>
							<input id="grade" class="form-control" readonly value="{{ $peserta['grade'] }}">
						</div>
					</div>
					<div class="input-form mb-6">
						<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
							Kelulusan Akademik Tertinggi
						</label>
						<div class="flex flex-col items-start">
							<div>
								<input type="radio" id="pmr"
									{{ $peserta['highest_academic'] == "pmr" ? 'checked' : '' }}>
								<label for="pmr">PMR</label><br>
							</div>
							<div>
								<input type="radio" id="spm"
									{{ $peserta['highest_academic'] == "spm" ? 'checked' : '' }}>
								<label for="spm">SPM</label><br>
							</div>
							<div>
								<input type="radio" id="stpm"
									{{ $peserta['highest_academic'] == "stpm" ? 'checked' : '' }}>
								<label for="stpm">STPM</label><br>
							</div>
							<div>
								<input type="radio" id="diploma"
									{{ $peserta['highest_academic'] == "diploma" ? 'checked' : '' }}>
								<label for="diploma">Diploma</label><br>
							</div>
							<div>
								<input type="radio" id="ijazah_sarjana_muda"
									{{ $peserta['highest_academic'] == "ijazah sarjana muda" ? 'checked' : '' }}>
								<label for="ijazah_sarjana_muda">Ijazah Sarjana Muda</label><br>
							</div>
							<div>
								<input type="radio" id="ijazah sarjana"
									{{ $peserta['highest_academic'] == "ijazah sarjana" ? 'checked' : '' }}>
								<label for="ijazah sarjana">Ijazah Sarjana</label><br>
							</div>
							<div>
								<input type="radio" id="ijazah_kedoktoran"
									{{ $peserta['highest_academic'] == "ijazah kedoktoran" ? 'checked' : '' }}>
								<label for="ijazah_kedoktoran">Ijazah Kedoktoran</label><br>
							</div>
						</div>
					</div>
					<div class="grid grid-cols-2 gap-2 mb-6">
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								Kelulusan Akademik
							</label>
							<textarea id="academic_qualification" class="form-control"
								readonly>{{ $peserta['academic_qualification'] }}</textarea>
						</div>
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								Kelulusan Berniaga
							</label>
							<textarea id="business_qualification" class="form-control"
								readonly>{{ $peserta['business_qualification'] }}</textarea>
						</div>
					</div>
					<div class="grid grid-cols-2 gap-2 mb-6">
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								Bidang Kepakaran / Kemahiran
							</label>
							<textarea id="specialisation" class="form-control"
								readonly>{{ $peserta['specialisation'] }}</textarea>
						</div>
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								Pengalaman Kerja Dalam Kepakaran / Kemahiran
							</label>
							<textarea id="experience" class="form-control"
								readonly>{{ $peserta['experience'] }}</textarea>
						</div>
					</div>
					<div class="grid grid-cols-2 gap-2 mb-6">
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								Keahlian Badan Profesional / Pertubuhan
							</label>
							<textarea id="professional_member" class="form-control"
								readonly>{{ $peserta['professional_member'] }}</textarea>
						</div>
						<div class="col-span-1 input-form">
							<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
								Penerbitan (Buku / Kertas Kerja)
							</label>
							<textarea id="distribution" class="form-control"
								readonly>{{ $peserta['distribution'] }}</textarea>
						</div>
					</div>
				</div>
			</div>
			{{-- </form> --}}
		</div>
	</div>
</div>
<!-- END: View Kursus Modal -->