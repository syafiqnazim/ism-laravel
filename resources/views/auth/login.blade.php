@extends('../layout/base')

@section('head')
    <title>Login | MyISM</title>
@endsection

@section('body')
    <body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
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
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Log Masuk</h2>
                    <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">Sila daftar akaun anda untuk meneruskan <br /> penggunaan system MyISM</div>
                    <div class="intro-x mt-8">
                        <form id="login-form">
                            <input id="email" type="text" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Email">
                            <div id="error-email" class="login__input-error w-5/6 text-theme-6 mt-2"></div>
                            <input id="password" type="password" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Kata Laluan">
                            <div id="error-password" class="login__input-error w-5/6 text-theme-6 mt-2"></div>
                        </form>
                    </div>
                    <a href="/register">Belum mendaftar? Daftar sekarang.</a>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button id="btn-login" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Log Masuk</button>
                    </div>
                </div>
            </div>
            <!-- END: login Form -->
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
            async function login() {
                // Reset state
                cash('#login-form').find('.login__input').removeClass('border-theme-6')
                cash('#login-form').find('.login__input-error').html('')

                // Post form
                let email = cash('#email').val()
                let password = cash('#password').val()
                
                // Loading state
                cash('#btn-login').html('<i data-loading-icon="oval" data-color="white" class="w-5 h-5 mx-auto"></i>').svgLoader()
                await helper.delay(1500)

                axios.post(`login`, {
                    email,
                    password,
                }).then(res => {
                    location.href = '/pendaftaran-pengguna'
                }).catch(err => {
                    cash('#btn-login').html('Daftar')
                    if (err) {
                        for (const [key, val] of Object.entries(err.response.data.errors)) {
                            cash(`#${key}`).addClass('border-theme-6')
                            cash(`#error-${key}`).html(val)
                        }
                    } else {
                        cash(`#password`).addClass('border-theme-6')
                        cash(`#error-password`).html(err.response.data.message)
                    }
                })
            }

            cash('#login-form').on('keyup', function(e) {
                if (e.keyCode === 13) {
                    login()
                }
            })
            
            cash('#btn-login').on('click', function() {
                login()
            })
        })
    </script>
    </body>
@endsection