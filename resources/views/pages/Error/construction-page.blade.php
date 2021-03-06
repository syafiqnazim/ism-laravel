@extends('../layout/' . $layout)

@section('subhead')
<title>Error Page | MyISM</title>
@endsection

@section('subcontent')
<div class="container">
    <!-- BEGIN: Error Page -->
    <div class="flex items-center justify-center h-screen text-center">
        <div class="w-6/12 h-6/12">
            <img src="https://www.seekpng.com/png/detail/10-105423_under-construction-warning-sign-png-clipart-under-construction.png"
                alt="under construction">
            <div class="intro-x text-xl lg:text-3xl font-medium mt-5">Oops. This page still under construction</div>
        </div>
    </div>
    <!-- END: Error Page -->
</div>
@endsection