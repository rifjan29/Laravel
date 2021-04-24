{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.template')

{{-- start content --}}
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                <li><i class="fa fa-laptop"></i>Dashboard</li>
                </ol>
            </div>
            </div>
    
            <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box blue-bg">
                <i class="fa fa-cloud-download"></i>
                <div class="count">6.674</div>
                <div class="title">Download</div>
                </div>
                <!--/.info-box-->
            </div>
            <!--/.col-->
    
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box brown-bg">
                <i class="fa fa-shopping-cart"></i>
                <div class="count">7.538</div>
                <div class="title">Purchased</div>
                </div>
                <!--/.info-box-->
            </div>
            <!--/.col-->
    
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box dark-bg">
                <i class="fa fa-thumbs-o-up"></i>
                <div class="count">4.362</div>
                <div class="title">Order</div>
                </div>
                <!--/.info-box-->
            </div>
            <!--/.col-->
    
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box green-bg">
                <i class="fa fa-cubes"></i>
                <div class="count">1.426</div>
                <div class="title">Stock</div>
                </div>
                <!--/.info-box-->
            </div>
            <!--/.col-->
    
            </div>
            <!--/.row-->
            <!-- Today status end -->
        
        </section>
        <div class="text-center">
            <div class="credits">
            <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </section>
    <!--main content end-->
@endsection
{{-- end content --}}