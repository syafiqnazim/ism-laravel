@extends('../layout/' . $layout)

@section('subhead')
<title>Error Page | MyISM</title>
@endsection

@section('subcontent')
<div class="container">
    <!-- BEGIN: Error Page -->
    <div class="flex items-center justify-center h-screen text-center">
        <div>
            <img src="https://www.seekpng.com/png/detail/66-668689_page-under-construction-icon.png"
                alt="under construction" srcset="">
            <div class="intro-x text-xl lg:text-3xl font-medium mt-5">Oops. This page still under construction</div>
        </div>
    </div>
    <!-- END: Error Page -->
</div>
@endsection