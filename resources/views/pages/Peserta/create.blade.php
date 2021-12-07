@extends('../../layout/' . $layout)

@section('subhead')
<title>Pendaftaran Pengguna | MyISM</title>
@endsection

@section('subcontent')
<!-- BEGIN: Register Form -->
<form action="{{url('peserta/')}}" method="post">
	@csrf
	<div class="modal-body p-0">
		<div class="p-5 text-center">
			<h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Tambah Peserta Baru</h5>
			<div class="grid grid-cols-1 gap-1 mb-12">
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Nama Kursus
					</label>
					<select id="nama_kursus" class="w-full form-select box border-gray-300" required
						name="nama_kursus">
						<option value="0">Pilih Satu</option>
						@foreach ($kursuses as $kursus)
						<option value="{{$kursus->nama_kursus}}">{{$kursus->nama_kursus}} ( {{$kursus->start_date}} - {{$kursus->end_date}} )</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="grid grid-cols-4 gap-1 mb-6">
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Sektor
					</label>
					<input id="sector" name="sector" type="text" class="form-control" required
						data-pristine-required-message="Ruangan ini perlu di isi.">
				</div>
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Gelaran
					</label>
					<input id="title" name="title" type="text" class="form-control" required
						data-pristine-required-message="Ruangan ini perlu di isi.">
				</div>
				<div class="col-span-2 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Nama
					</label>
					<input id="name" name="name" type="text" class="form-control w-full" required
						data-pristine-required-message="Ruangan ini perlu di isi.">
				</div>
			</div>
			<div class="grid grid-cols-3 gap-1 mb-6">
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						No. Kad Pengenalan
					</label>
					<input id="ic_number" name="ic_number" type="number" class="form-control" required
						data-pristine-required-message="Ruangan ini perlu di isi.">
				</div>
				<div class="col-span-1 input-form">
					<label for="modal-datepicker-1" class="form-label">Tarikh Lahir</label>
					<input id="modal-datepicker-1" class="datepicker form-control" data-single-mode="true"
						name="tarikh_lahir">
				</div>
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Jantina
					</label>
					<div class="flex flex-col items-start">
						<div>
							<input type="radio" id="lelaki" name="gender" value="Lelaki">
							<label for="lelaki">Lelaki</label><br>
						</div>
						<div>
							<input type="radio" id="perempuan" name="gender" value="Perempuan">
							<label for="perempuan">Perempuan</label><br>
						</div>
					</div>
				</div>
			</div>
			<div class="grid grid-cols-3 gap-1 mb-6">
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Status Perkahwinan
					</label>
					<div class="flex flex-col items-start">
						<div>
							<input type="radio" id="bujang" name="status_perkahwinan" value="Bujang">
							<label for="bujang">Bujang</label><br>
						</div>
						<div>
							<input type="radio" id="berkahwin" name="status_perkahwinan" value="Berkahwin">
							<label for="berkahwin">Berkahwin</label><br>
						</div>
						<div>
							<input type="radio" id="janda" name="status_perkahwinan" value="Janda">
							<label for="janda">Janda</label><br>
						</div>
						<div>
							<input type="radio" id="duda" name="status_perkahwinan" value="Duda">
							<label for="duda">Duda</label><br>
						</div>
						<div>
							<input type="radio" id="ibu_tunggal" name="status_perkahwinan" value="Ibu tunggal">
							<label for="ibu_tunggal">Ibu tunggal</label><br>
						</div>
						<div>
							<input type="radio" id="bapa_tunggal" name="status_perkahwinan" value="Bapa tunggal">
							<label for="bapa_tunggal">Bapa tunggal</label><br>
						</div>
					</div>
				</div>
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Kumpulan Isi Rumah
					</label>
					<div class="flex flex-col items-start">
						<div>
							<input type="radio" id="b40" name="kumpulan_isi_rumah" value="B40">
							<label for="b40">B40</label><br>
						</div>
						<div>
							<input type="radio" id="m40" name="kumpulan_isi_rumah" value="M40">
							<label for="m40">M40</label><br>
						</div>
						<div>
							<input type="radio" id="t20" name="kumpulan_isi_rumah" value="T20">
							<label for="t20">T20</label><br>
						</div>
					</div>
				</div>
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Kategori OKU
					</label>
					<div class="flex flex-col items-start">
						<div>
							<input type="radio" id="pendengaran" name="kategori_oku" value="Pendengaran">
							<label for="pendengaran">Pendengaran</label><br>
						</div>
						<div>
							<input type="radio" id="penglihatan" name="kategori_oku" value="Penglihatan">
							<label for="penglihatan">Penglihatan</label><br>
						</div>
						<div>
							<input type="radio" id="pertuturan" name="kategori_oku" value="Pertuturan">
							<label for="pertuturan">Pertuturan</label><br>
						</div>
						<div>
							<input type="radio" id="fizikal" name="kategori_oku" value="Fizikal">
							<label for="fizikal">Fizikal</label><br>
						</div>
						<div>
							<input type="radio" id="pembelajaran" name="kategori_oku" value="Pembelajaran">
							<label for="pembelajaran">Pembelajaran</label><br>
						</div>
						<div>
							<input type="radio" id="mental" name="kategori_oku" value="Mental">
							<label for="mental">Mental</label><br>
						</div>
						<div>
							<input type="radio" id="pelbagai" name="kategori_oku" value="Pelbagai">
							<label for="pelbagai">Pelbagai</label><br>
						</div>
					</div>
				</div>
			</div>
			<div class="grid grid-cols-3 gap-1 mb-6">
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Jawatan / Pekerjaan
					</label>
					<input id="position" name="position" type="text" class="form-control" required
						data-pristine-required-message="Ruangan ini perlu di isi.">
				</div>
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Agensi
					</label>
					<div class="flex flex-col items-start">
						<div>
							<input type="radio" id="kerajaan" name="agensi" value="Kerajaan">
							<label for="kerajaan">Kerajaan</label><br>
						</div>
						<div>
							<input type="radio" id="swasta" name="agensi" value="Swasta">
							<label for="swasta">Swasta</label><br>
						</div>
						<div>
							<input type="radio" id="ngo" name="agensi" value="NGO">
							<label for="ngo">NGO</label><br>
						</div>
						<div>
							<input type="radio" id="sendiri" name="agensi" value="Sendiri">
							<label for="sendiri">Sendiri</label><br>
						</div>
					</div>
				</div>
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Alamat Emel
					</label>
					<input id="email" name="email" type="email" class="form-control" required
						data-pristine-required-message="Ruangan ini perlu di isi.">
				</div>
			</div>
			<div class="grid grid-cols-2 gap-1 mb-6">
				<div class="col-span-1 input-form">
					<label for="modal-datepicker-1" class="form-label">Tarikh Lantikan</label>
					<input id="modal-datepicker-1" class="datepicker form-control" data-single-mode="true"
						name="tarikh_lantikan">
				</div>
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Gred Jawatan (Kakitangan Kerajaan Sahaja)
					</label>
					<input id="gred_jawatan" name="gred_jawatan" type="text" class="form-control">
				</div>
			</div>
			<div class="input-form mb-6">
				<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
					Alamat Tempat Bertugas
				</label>
				<input id="working_address" name="working_address" type="text" class="form-control" required
					data-pristine-required-message="Ruangan ini perlu di isi.">
			</div>
			<div class="input-form mb-6">
				<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
					Alamat Rumah
				</label>
				<input id="home_address" name="home_address" type="text" class="form-control" required
					data-pristine-required-message="Ruangan ini perlu di isi.">
			</div>
			<div class="grid grid-cols-2 gap-2 mb-6">
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						No. Tel. Pejabat
					</label>
					<input id="working_number" name="working_number" type="number" class="form-control"
						required data-pristine-required-message="Ruangan ini perlu di isi.">
				</div>
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						No. Tel. Rumah
					</label>
					<input id="home_number" name="home_number" type="number" class="form-control" required
						data-pristine-required-message="Ruangan ini perlu di isi.">
				</div>
			</div>
			<div class="grid grid-cols-2 gap-2 mb-6">
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						No. Fax
					</label>
					<input id="fax_number" name="fax_number" type="number" class="form-control" required
						data-pristine-required-message="Ruangan ini perlu di isi.">
				</div>
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						No. Tel. Bimbit
					</label>
					<input id="phone_number" name="phone_number" type="number" class="form-control" required
						data-pristine-required-message="Ruangan ini perlu di isi.">
				</div>
			</div>
			<div class="input-form mb-6">
				<label for="register-form-2" class="form-label w-full flex flex-col sm:flex-row">
					Kelulusan Akademik Tertinggi
				</label>
				<div class="flex flex-col items-start">
					<div>
						<input type="radio" id="pmr" name="highest_academic" value="pmr">
						<label for="pmr">PMR</label><br>
					</div>
					<div>
						<input type="radio" id="spm" name="highest_academic" value="spm">
						<label for="spm">SPM</label><br>
					</div>
					<div>
						<input type="radio" id="stpm" name="highest_academic" value="stpm">
						<label for="stpm">STPM</label><br>
					</div>
					<div>
						<input type="radio" id="diploma" name="highest_academic" value="diploma">
						<label for="diploma">Diploma</label><br>
					</div>
					<div>
						<input type="radio" id="ijazah_sarjana_muda" name="highest_academic"
							value="ijazah sarjana muda">
						<label for="ijazah_sarjana_muda">Ijazah Sarjana Muda</label><br>
					</div>
					<div>
						<input type="radio" id="ijazah_sarjana" name="highest_academic"
							value="ijazah sarjana">
						<label for="ijazah sarjana">Ijazah Sarjana</label><br>
					</div>
					<div>
						<input type="radio" id="ijazah_kedoktoran" name="highest_academic"
							value="ijazah kedoktoran">
						<label for="ijazah_kedoktoran">Ijazah Kedoktoran</label><br>
					</div>
				</div>
			</div>
			<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
				Maklumat Kesihatan
			</label>
			<div class="grid grid-cols-2 gap-2 mb-6">
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Penyakit yang dihidapi (jika ada)
					</label>
					<input id="penyakit" name="penyakit" type="text" class="form-control">
				</div>
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Alahan Makanan (jika ada)
					</label>
					<input id="alahan" name="alahan" type="text" class="form-control">
				</div>
			</div>
			<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
				Maklumat Kecemasan (Keluarga terdekat untuk di hubungi)
			</label>
			<div class="grid grid-cols-2 gap-2 mb-6">
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Nama
					</label>
					<input id="relative_name" name="relative_name" type="text" class="form-control">
				</div>
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						Pertalian
					</label>
					<input id="pertalian" name="pertalian" type="text" class="form-control">
				</div>
			</div>
			<div class="input-form mb-6">
				<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
					Alamat
				</label>
				<input id="relative_address" name="relative_address" type="text" class="form-control" required
					data-pristine-required-message="Ruangan ini perlu di isi.">
			</div>
			<div class="grid grid-cols-2 gap-2 mb-6">
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						No. Tel
					</label>
					<input id="relative_home_number" name="relative_home_number" type="number" class="form-control" required
						data-pristine-required-message="Ruangan ini perlu di isi.">
				</div>
				<div class="col-span-1 input-form">
					<label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
						No. Tel. Bimbit
					</label>
					<input id="relative_phone_number" name="relative_phone_number" type="number" class="form-control" required
						data-pristine-required-message="Ruangan ini perlu di isi.">
				</div>
			</div>
		</div>
		<div class="px-5 pb-8 text-center">
			{{-- <button id="tambah-peserta" type="button" class="btn btn-outline-secondary mr-1">
				Simpan
			</button> --}}
			<button id="tambah-peserta" type="submit" class="btn btn-primary mr-1">
				Tambah Peserta
			</button>
		</div>
	</div>
</form>
<!-- END: Register Form -->

<!-- BEGIN: Success Notification Content -->
<div id="success-notification-content" class="toastify-content hidden flex">
	<i class="text-theme-10" data-feather="check-circle"></i>
	<div class="ml-4 mr-4">
		<div class="font-medium">Registration success!</div>
		<div class="text-gray-600 mt-1">
			Please check your e-mail for further info!
		</div>
	</div>
</div>
<!-- END: Success Notification Content -->

<!-- BEGIN: Failed Notification Content -->
<div id="failed-notification-content" class="toastify-content hidden flex">
	<i class="text-theme-24" data-feather="x-circle"></i>
	<div class="ml-4 mr-4">
		<div class="font-medium">Registration failed!</div>
		<div class="text-gray-600 mt-1">
			Please check the fileld form.
		</div>
	</div>
</div>
<!-- END: Failed Notification Content -->
@endsection