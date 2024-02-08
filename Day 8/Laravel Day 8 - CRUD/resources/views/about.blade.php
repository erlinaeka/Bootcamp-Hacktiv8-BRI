@extends('layouts.sub-index-layout')

@section('judulHeader', 'About Us')
@section('descJudulHeader', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, fuga. Itaque, nisi!')

@section('header-style', 'header-about')

@section('konten')

<section class="section-padding">
    <div class="container container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12">
                {{-- <img src="{{ asset('images/'.@yield('imageHeader')) }}" class="img-about d-block mx-auto" > --}}
                <img src="{{ asset('images/bg-about.webp') }}" class="img-about d-block mx-auto" >
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <h5 class="text-dark fw-bold fs-4 mb-4">About <span class="about-logo-oke">OKE</span><span>Plant</span></h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero obcaecati itaque voluptates culpa nesciunt? Reprehenderit magni repellat ullam facere minus. Iure vitae ad optio voluptates maxime dolor tempore sapiente quisquam?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quisquam aperiam vitae inventore fugit asperiores exercitationem deserunt. Eius magnam, facere expedita, eum ipsam maxime rem reprehenderit natus ut dolores consequuntur sapiente fugiat praesentium eveniet repellendus similique? Facilis maiores est quae?</p>
            </div>
        </div>
    </div>
</section>

<section class="section-padding section-about-point text-white">
    <div class="container container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-start pb-5">
                            <h2 class="fw-bold">Advantages of Choosing Our Plants</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint natus assumenda adipisci. Qui!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="{{ asset('images/Icon/icon_laef.webp') }}" alt="" width="50px" class="d-block mb-3">
                        <h5 class="fw-bold">Varied Selection</h5>
                        <p style="font-size: 14px; display: inline-block; width: 250px; font-weight: lighter;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas perspiciatis vitae ullam rerum sequi.</p>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="{{ asset('images/Icon/icon_idea.webp') }}" alt="" width="50px" class="d-block mb-3">
                        <h5 class="fw-bold">Expert Guidance</h5>
                        <p style="font-size: 14px; display: inline-block; width: 250px; font-weight: lighter;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="{{ asset('images/Icon/icon_rainbow.webp') }}" alt="" width="50px" class="d-block mb-3">
                        <h5 class="fw-bold">Lively Space</h5>
                        <p style="font-size: 14px; display: inline-block; width: 250px; font-weight: lighter;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic totam nihil labore, nesciunt excepturi porro!</p>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="{{ asset('images/Icon/icon_world.webp')}}" alt="" width="50px" class="d-block mb-3">
                        <h5 class="fw-bold">Eco Commitment</h5>
                        <p style="font-size: 14px; display: inline-block; width: 250px; font-weight: lighter;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem iusto nobis ipsa placeat atque odit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="{{ asset('images/bg-about-point.webp') }}" class="img-about d-block mx-auto" style="height: 600px; width: 500px;" >
            </div>
        </div>          
    </div>

</section>
@endsection