@extends('layouts.sub-index-layout')

@section('judulHeader', 'Contact Us')
@section('descJudulHeader', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, fuga. Itaque, nisi!')

@section('header-style', 'header-contact-us')

@section('konten')

<section id="contact" class="contact section-padding">
    <div class="container mt-5 mb-5">
        <div class="row m-0">
            <div class="col-lg-7 col-md-12 px-4 pt-4 pb-4 w-50 text-light form-contact rounded-2 mx-auto">
                <form action="#" class="p-4 m-auto">
            <h3 class="text-center">Contact Us</h3>
            <p class="text-center">Lorem ipsum dolor sit amet.</p>
                            <div class="mb-3 mt-5">
                                <label for="name" class="mb-2">Name :</label>
                                <input class="form-control" placeholder="Full Name" required="" type="text" id="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="mb-2">Email :</label>
                                <input class="form-control" placeholder="Email" required="" type="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="mb-2">Message :</label>
                                <textarea class="form-control" placeholder="Message" required="" rows="3" id="message"></textarea>
                            </div>
                        <button class="btn text-light col-4 mt-4" type="button" style="background: #1B6A19;">Send Now</button>
                </form>
            </div>
            <div class="col-lg-5 col-md-12">
                <h5 class="text-dark fw-bold fs-4 mb-4">Contact <span class="about-logo-oke">OKE</span><span>Plant</span></h5>
                <img src="{{ asset('images/maps.PNG') }}" width="500px" alt="">
                <p class="inline-block mt-3 mb-0 fw-bold">Address : </p>
                <p style="font-size: 15px;">Jl. Kemang Selatan XII No. 02, Jakarta Selatan, Indonesia</p>
                <p class="inline-block mt-3 mb-0 fw-bold">Phone : </p>
                <p style="font-size: 15px;">+09 9827091112</p>
                <p class="inline-block mt-3 mb-0 fw-bold">Email : </p>
                <p style="font-size: 15px;">okeplant@yahoo.co.id</p>
            </div>
        </div>
    </div>
</section>
@endsection