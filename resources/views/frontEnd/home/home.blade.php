@extends('frontEnd.master')

@section('title')
    Home Page
@endsection

@section('content')
<main>
    <section>
        <div class="mx-auto my-5" style="height:200px ;width:700px">
            <img class="border shadow bg-body-dark rounded" src="{{asset('/')}}frontEnd/assets/images/home-page-image.jpeg" alt="" height="200px" width="700px">

        </div>
    </section>
    <section>
        <div class="container my-5  bg-secondary shadow">
            <div class="row">
                <div class="col-md-6 mx-auto ">
                    <h1 class="text-center fw-bold">LET'S READ</h1>
                    <p class="fs-6">To develop a love of reading, we need books.Here a huge collection of books under one rooftop.Students don't need to worry about guideline or preferd books..Here they can choose a playlist where they can get all knowledge and guideline related that topic.So,don't waste time to find books .Let's just read and explore..</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mx-auto my-5">
            <div class="row mb-3 justify-content-center">
                <div class="col-4 bg-secondary lh-base pt-4">
                    <h2 class="text-center fw-bold">Skill building</h2>
                    <p class="badge text-wrap text-dark fs-5">Let’s Read advances the professional skills and opportunities of new and experienced authors, illustrators, translators and publishers to grow thriving book markets that support children, their families and their communities.</p>
                </div>
                <div class="col-4">
                    <img src="{{asset('/')}}frontEnd/assets/images/reading-on-laptop.jpg" alt="" height="300px"  width="250px">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <img src="{{asset('/')}}frontEnd/assets/images/group-study-on-laptop.jpg" alt="" height="300px" width="350px">
                </div>
                <div class="col-4 bg-secondary lh-base pt-4">
                    <h2 class="text-center fw-bold text-dark">Group studing</h2>
                    <p class="badge text-wrap text-dark fs-5">Let’s Read nurtures reading habits that enable to reach important developmental milestones;sharing knowledge will explore new idea of invention..</p>
                </div>
            </div>
        </div>
    </section>
    
</main>
@endsection