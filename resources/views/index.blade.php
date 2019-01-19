@extends('layouts.main_body')

    @section('content') 
        <main id="mainContent" class="main-content">
            <div class="page-container ptb-10">
                <div class="container">

                @include('layouts.top_body')

                @include('layouts.small_adv')

                @include('posts.first_adv')    

                @include('posts.smallslider')
                
                @include('brand.branding')


                    {{-- NEWS INCLUSION --}}
                @include('posts.news_show')  

                </div>
            </div>


        </main>


    <div id="backTop" class="back-top is-hidden-sm-down">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    @endsection