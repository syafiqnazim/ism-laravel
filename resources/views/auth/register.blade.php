@extends('../layout/base')

@section('head')
    <title>Register | MyISM</title>
@endsection

@section('body')
    <body class="register">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Logo" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                    <span class="text-white text-lg ml-3">
                        My<span class="font-medium">ISM</span>
                    </span>
                </a>
                <div class="my-auto">
                    <img alt="Logo ISM" class="-intro-x w-1/2 -mt-16" src="{{ asset('dist/images/logoism.jpg') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">Sila daftar akaun anda <br> untuk meneruskan <br /> penggunaan system MyISM</div>
                    <!-- <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500">Manage all your e-commerce accounts in one place</div> -->
                </div>
            </div>
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Pendaftaran Pengguna</h2>
                    <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">Sila daftar akaun anda untuk meneruskan <br /> penggunaan system MyISM</div>
                    <div class="intro-x mt-8">
                        <form id="register-form">
                            <input id="name" type="text" class="intro-x register__input form-control py-3 px-4 border-gray-300 block" placeholder="Nama Penuh">
                            <div id="error-name" class="register__input-error w-5/6 text-theme-6 mt-2"></div>
                            <input id="email" type="text" class="intro-x register__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Email">
                            <div id="error-email" class="register__input-error w-5/6 text-theme-6 mt-2"></div>
                            <input id="password" type="password" class="intro-x register__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Kata Laluan">
                            <div id="error-password" class="register__input-error w-5/6 text-theme-6 mt-2"></div>
                            <input id="password_confirmation" type="password" class="intro-x register__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Pengesahan Kata Laluan">
                            <div id="error-password_confirmation" class="register__input-error w-5/6 text-theme-6 mt-2"></div>
                            <input id="ic_number" type="number" class="intro-x register__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="No. Kad Pengenalan">
                            <div id="error-ic_number" class="register__input-error w-5/6 text-theme-6 mt-2"></div>
                            <input id="phone_number" type="number" class="intro-x register__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="No. Telefon">
                            <div id="error-phone_number" class="register__input-error w-5/6 text-theme-6 mt-2"></div>
                            <input id="position" type="text" class="intro-x register__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Jawatan">
                            <div id="error-position" class="register__input-error w-5/6 text-theme-6 mt-2"></div>
                            <input id="department" type="text" class="intro-x register__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Bahagian">
                            <div id="error-department" class="register__input-error w-5/6 text-theme-6 mt-2"></div>
                            <input id="user_role" type="text" class="intro-x register__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Peranan Pengguna">
                            <div id="error-user_role" class="register__input-error w-5/6 text-theme-6 mt-2"></div>
                        </form>
                    </div>
                    <a href="/login">Sudah mendaftar? Log masuk.</a>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button id="btn-register" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Daftar</button>
                    </div>
                </div>
            </div>
            <!-- END: Register Form -->
        </div>
        <!-- BEGIN: Success Notification Content -->
        <div
                            id="success-notification-content"
                            class="toastify-content hidden flex"
                        >
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
                        <div
                            id="failed-notification-content"
                            class="toastify-content hidden flex"
                        >
                            <i class="text-theme-24" data-feather="x-circle"></i>
                            <div class="ml-4 mr-4">
                            <div class="font-medium">Registration failed!</div>
                            <div class="text-gray-600 mt-1">
                                Please check the fileld form.
                            </div>
                            </div>
                        </div>
                        <!-- END: Failed Notification Content -->
    </div>   

        <!-- BEGIN: JS Assets-->
        <script src="{{ mix('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->

        <script>
        cash(function () {
            async function register() {
                // Reset state
                cash('#register-form').find('.register__input').removeClass('border-theme-6')
                cash('#register-form').find('.register__input-error').html('')

                // Post form
                let name = cash('#name').val()
                let email = cash('#email').val()
                let password = cash('#password').val()
                let password_confirmation = cash('#password_confirmation').val()
                let ic_number = cash('#ic_number').val()
                let phone_number = cash('#phone_number').val()
                let position = cash('#position').val()
                let department = cash('#department').val()
                let user_role = cash('#user_role').val()
                
                // Loading state
                cash('#btn-register').html('<i data-loading-icon="oval" data-color="white" class="w-5 h-5 mx-auto"></i>').svgLoader()
                await helper.delay(1500)

                axios.post(`register`, {
                    name,
                    email,
                    password,
                    password_confirmation,
                    ic_number,
                    phone_number,
                    position,
                    department,
                    user_role,
                }).then(res => {
                    // location.href = '/'
                    console.log('done')
                }).catch(err => {
                    cash('#btn-register').html('Daftar')
                    if (err) {
                        for (const [key, val] of Object.entries(err.response.data.errors)) {
                            cash(`#${key}`).addClass('border-theme-6')
                            cash(`#error-${key}`).html(val)
                        }
                    }
                })
            }

            cash('#register-form').on('keyup', function(e) {
                if (e.keyCode === 13) {
                    register()
                }
            })
            
            cash('#btn-register').on('click', function() {
                register()
            })
        })
    </script>
    </body>
@endsection