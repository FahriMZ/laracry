@extends('layouts.app')

@section('css')
<style type="text/css">
    .img-fluid {
        width: 100%;
        height: 171px;
    }
</style>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-12 my-2" id="ulah">
            <div class="card">
                <!-- Card image -->
                <div class="view">
                    <img src="img/photo/ulah.png" alt="cardimage" class="img-fluid">
                    <a href="#">
                        <div class="mask"></div>
                    </a>
                </div>

                <div class="card-body">
                    <h4 class="card-title"><span class="fa fa-graduation-cap"></span> U-LAH</h4>
                    <p class="card-text">Online Exam Application for <i>UJIKOM</i>.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 my-2">
            <div class="card">
                <!-- Card image -->
                <div class="view">
                    <img src="img/photo/photo1.jpg" alt="cardimage" class="img-fluid">
                    <a href="#">
                        <div class="mask"></div>
                    </a>
                </div>

                <div class="card-body">
                    <h4 class="card-title">Menu 2</h4>
                    <p class="card-text">Just a paragraph for the card text example.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 my-2">
            <div class="card">
                <!-- Card image -->
                <div class="view">
                    <img src="img/photo/photo1.jpg" alt="cardimage" class="img-fluid">
                    <a href="#">
                        <div class="mask"></div>
                    </a>
                </div>

                <div class="card-body">
                    <h4 class="card-title">Menu 3</h4>
                    <p class="card-text">Just a paragraph for the card text example.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12 my-2">
            <div class="card">
                <!-- Card image -->
                <div class="view">
                    <img src="img/photo/photo1.jpg" alt="cardimage" class="img-fluid">
                    <a href="#">
                        <div class="mask"></div>
                    </a>
                </div>

                <div class="card-body">
                    <h4 class="card-title">Menu 4</h4>
                    <p class="card-text">Just a paragraph for the card text example.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 my-2">
            <div class="card">
                <!-- Card image -->
                <div class="view">
                    <img src="img/photo/photo1.jpg" alt="cardimage" class="img-fluid">
                    <a href="#">
                        <div class="mask"></div>
                    </a>
                </div>

                <div class="card-body">
                    <h4 class="card-title">Menu 5</h4>
                    <p class="card-text">Just a paragraph for the card text example.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 my-2">
            <div class="card">
                <!-- Card image -->
                <div class="view">
                    <img src="img/photo/photo1.jpg" alt="cardimage" class="img-fluid">
                    <a href="#">
                        <div class="mask"></div>
                    </a>
                </div>

                <div class="card-body">
                    <h4 class="card-title">Menu 6</h4>
                    <p class="card-text">Just a paragraph for the card text example.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $('#ulah').click(function() {
        window.location = '{{ route('ulah') }}';
        // alert('U-LAH, Ujian Sekolah :D');
    });
</script>
@stop