@extends('layouts.app')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="{{ asset('js/librarianpanel.js') }}" defer></script>
<link href="{{ asset('css/teacherprofilestyle.css') }}" rel="stylesheet">
@section('content')

<!-- Tresc strony -->
<!-- Sidebar -->
<div class="d-flex" id="wrapper">
@include('home.leftmenu')
<!-- /#sidebar-wrapper -->
<div id="page-content-wrapper">

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

        <button class="btn btn-primary" id="menu-toggle">Przełącz menu</button>
        <h2 class="col-md">Profil bibliotekarza</h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="./borrower">Panel wypożyczającego <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
    <?php 
    if(!isset($option))
    {
        $option = 0;
    }
    ?>
        @switch($option)
        @case('quickmenu')
            @include('home.quickmenu')
            @break
        @case('search')
            @include('home.search')
            @break
        @case('borrowing')
            @include('home.borrowing')
            @break
        @case('returns')
            @include('home.returns')
            @break
        @case('addstudent')
            @include('home.addstudent')
            @break
        @default
            @include('home.quickmenu')
    @endswitch
    </div>
    <!-- /#page-content-wrapper -->


</div>
<!-- /#wrapper -->
</div>
<!-- Menu Toggle Script -->
<script>
    window.onload = function f(){
        if(sessionStorage.getItem("showleftmenu")==false)
        {
            $("#wrapper").toggleClass("toggled");
        }
}
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        
        if (typeof(Storage) !== "undefined") {
            if(sessionStorage.getItem("showleftmenu")== 1 || typeof(sessionStorage.getItem("showleftmenu")) == 'undefined')
            {
                $("#wrapper").toggleClass("toggled");
                sessionStorage.setItem("showleftmenu", 0);
            }
            else
            {
                $("#wrapper").toggleClass("toggled");
                sessionStorage.setItem("showleftmenu", 1);
            }
        }
    });

</script>




@endsection