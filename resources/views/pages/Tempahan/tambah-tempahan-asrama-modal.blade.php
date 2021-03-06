<!-- BEGIN: Tambah Pemandu Modal -->

@if(empty($tarikh_masuk) && empty($tarikh_keluar))
<div id="tambah-tempahan-asrama-baru" class="modal" tabindex="-1" >
@else
<div id="tambah-tempahan-asrama-baru" class="modal overflow-y-auto show" tabindex="-1" aria-hidden="false" style="margin-top: 0px; margin-left: 0px; padding-left: 0px; z-index: 10000;">    
@endif
    <div class="modal-dialog w-1/2 mt-36">
        <div class="modal-content">
            <form action="{{url('tempahan-asrama')}}" method="post">
                @csrf
                <div class="modal-body p-0">
                    <div class="p-5 text-center">

                        @if(Session::has('msg_error'))
                        <div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{Session::get('msg_error')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i data-feather="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        @endif
                       


                        <h5 class="intro-x font-bold text-2xl xl:text-3xl text-center mb-6">Tempahan Baru</h5>
                        <div class="grid grid-cols-2 gap-2 mb-6">

                            
                            @if($step==0)

                            
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Tarikh Masuk
                                </label>
                                @php
                                    if(empty($tarikh_masuk)){
                                        $tarikh_masuk  = date('Y-m-d');
                                    }

                                    if(empty($tarikh_keluar)){
                                        $tarikh_keluar = date('Y-m-d');
                                    }
                                @endphp
                                <input id="modal-datepicker-1" name="tarikh_masuk" type="text" class="datepicker form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi." data-single-mode="true" value="{{ date(" j M Y", strtotime($tarikh_masuk)) }}">
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Tarikh Keluar
                                </label>
                                <input id="modal-datepicker-2" name="tarikh_keluar" type="text" class="datepicker form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi." data-single-mode="true" value="{{ date(" j M Y", strtotime($tarikh_keluar)) }}">
                            </div>

                            @endif

                            @if($step==1)

                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Tarikh Masuk
                                </label>
                                @php
                                    if(empty($tarikh_masuk)){
                                        $tarikh_masuk  = date('Y-m-d');
                                    }

                                    if(empty($tarikh_keluar)){
                                        $tarikh_keluar = date('Y-m-d');
                                    }
                                @endphp
                                <input id="modal-datepicker-1" name="tarikh_masuk" type="text" class="datepicker form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi." data-single-mode="true" value="{{ date(" j M Y", strtotime($tarikh_masuk)) }}" >
                            </div>
                            <div class="grid-cols-1 input-form">
                                <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Tarikh Keluar
                                </label>
                                <input id="modal-datepicker-2" name="tarikh_keluar" type="text" class="datepicker form-control" required
                                    data-pristine-required-message="Ruangan ini perlu di isi." data-single-mode="true" value="{{ date(" j M Y", strtotime($tarikh_keluar)) }}" >
                            </div>
                          
                                <div class="grid-cols-1 input-form">
                                    <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                        Asrama(Bilik) Available
                                    </label>
                                    <select id="id_asrama" class="w-full form-select box border-gray-300" required
                                        name="id_asrama" onchange="this.form.submit()">
                                        <option value="">Pilih Satu</option>
                                        @foreach ($asramas as $asrama)
                                        <option value="{{ $asrama['id'] }}">
                                            {{ $asrama['kod_asrama'] }} - Kapasiti {{ $asrama['kapasiti'] }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                                 
                         

                                @endif


                                @if($step==2)

                                <div class="grid-cols-1 input-form">
                                    <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                        Tarikh Masuk
                                    </label>
                                    @php
                                        if(empty($tarikh_masuk)){
                                            $tarikh_masuk  = date('Y-m-d');
                                        }
    
                                        if(empty($tarikh_keluar)){
                                            $tarikh_keluar = date('Y-m-d');
                                        }
                                    @endphp
                                    <input id="modal-datepicker-1" name="tarikh_masuk" type="text" class="form-control" required
                                        data-pristine-required-message="Ruangan ini perlu di isi." data-single-mode="true" value="{{ date(" j M Y", strtotime($tarikh_masuk)) }}" readonly>
                                </div>
                                <div class="grid-cols-1 input-form">
                                    <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                        Tarikh Keluar
                                    </label>
                                    <input id="modal-datepicker-2" name="tarikh_keluar" type="text" class="form-control" required
                                        data-pristine-required-message="Ruangan ini perlu di isi." data-single-mode="true" value="{{ date(" j M Y", strtotime($tarikh_keluar)) }}" readonly>
                                </div>
                          
                                <div class="grid-cols-1 input-form">
                                    <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                        Asrama(Bilik) Available
                                    </label>
                                    <select id="id_asrama" class="w-full form-select box border-gray-300" required
                                        name="id_asrama" onchange="this.form.submit()">
                                        <option value="">Pilih Satu</option>
                                        @foreach ($asramas as $asrama)
                                        <option value="{{ $asrama['id'] }}" {{ $asrama['id'] == $id_asrama ? 'selected' : '' }}>
                                            {{ $asrama['kod_asrama'] }} - Kapasiti {{ $asrama['kapasiti'] }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                                <div class="grid-cols-1 input-form">
                                    <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                        Peserta
                                    </label>
                                    
                                   
                                    <select name="peserta[]" data-placeholder="Pilih <?php echo $kapasiti_asrama->kapasiti; ?> peserta sahaja" class="tom-select w-full" multiple="multiple" required>
                                        <option value="">Pilih Satu</option>
                                        @foreach ($pesertas as $peserta)
                                        <option value="{{ $peserta['id'] }}">
                                            {{ $peserta['name'] }} - {{ $peserta['ic_number'] }}
                                        </option>
                                        @endforeach
                                    </select>

                                    
                                
                            
                                </div>

                                <div class="grid-cols-1 input-form">
                                    <label for="register-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                        Nama Kursus
                                    </label>
                                    
                                    
                                    <select id="nama_kursus" class="w-full form-select box border-gray-300" required
                                    name="kursus_id">
                                    <option value="">Pilih Satu</option>
                                    @foreach ($kursuses as $kursus)
                                    <option value="{{$kursus->id}}">{{$kursus->nama_kursus}} ( {{$kursus->start_date}} - {{$kursus->end_date}} )</option>
                                    @endforeach
                                </select>
                                
                            
                                </div>

                                
                               
                         

                                @endif

                        </div>
                         
                         

                    </div>
                    <div class="px-5 pb-8 text-center">
                        @if($step==1)
                        <a id="tambah-pemandu" href="{{url('tempahan-asrama')}}" class="btn btn-primary mr-1">
                            Batal
                        </a>
                        @elseif($step==2)
                        
                        <input id='tempah' type='submit' name='tempah'    class="btn btn-primary mr-1" value='Tempah'>
                        <a id="tambah-pemandu" href="{{url('tempahan-asrama')}}" class="btn btn-primary mr-1">
                            Batal
                        </a>
                        @else
                        <button id="tambah-pemandu" type="submit" class="btn btn-primary mr-1">
                            Pilih Bilik
                        </button>

                        <a id="tambah-pemandu" href="{{url('tempahan-asrama')}}" class="btn btn-primary mr-1">
                            Batal
                        </a>

                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

 

    <script type="text/javascript">


        var verified = [];
        document.querySelector('#userRequest_activity').onchange = function(e) {
          if (this.querySelectorAll('option:checked').length <= 1) {
              verified = Array.apply(null, this.querySelectorAll('option:checked'));
          } else {
            Array.apply(null, this.querySelectorAll('option')).forEach(function(e) {
                e.selected = verified.indexOf(e) > -1;
            });
          }
        }
        </script>
<!-- END: Tambah Pemandu Modal -->

 