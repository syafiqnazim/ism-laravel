@extends('../layout/base')

@section('body')
    <body class="main">
        @yield('content')

        <!-- BEGIN: JS Assets-->
        <script src="{{ mix('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->

        @yield('script')
        <div id="print">

        </div>
    </body>
@endsection
