@extends('layouts.app')
@section('content')
    <header class="header text-light">
        <div class="container">
            @include('layouts.navbar')
            <div class="showcase py-6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h1 class="display-3 text-capitalize fw-semibold">Manage your budget and financial future</h1>
                            <p class="lead py-2">
                                Irure irure exercitation minim magna consequat adipisicing duis veniam fugiat id et.
                            </p>
                            <a href="#steps" class="btn btn-warning text-white px-5"> About 7 Steps</a>
                        </div>
                        <div class="col-md-5">
                            <div class="container mb-5 px-4">
                                <img src="/img/showCase.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @include('layouts.appView.about')

    @include('layouts.appView.steps')

@include('layouts.footer')
@endsection

@section('css')
@parent
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    html,body{
        font-family: 'Montserrat', sans-serif;
    }

    /* Bootstrap Styles */
    .bg-primary{
        background: #380d62 !important;
    }

    .bg-secondary{
        background: #fdf9ff !important;
    }
    /* Utility Classes */
    .py-6{
        padding: 120px 0;
    }

    .py-7{
        padding: 80px 0;
    }


    header{
        background-image: linear-gradient(to right,#380d62,#10054a);
    }

    /* Mobile */
    @media (max-width:768px){
        .py-6{
            padding: 50px 0,
        }

        .py-7{
            padding: 60px 0,
        }

        .steps .pb-4{
            padding-right: 80px !important;
        }
    }
</style>
@endsection