@extends('frontend.layouts.app')

@section('content')
    <!-- Page Content -->
    <section class="mb-4 bg-white">
        <div class="container ">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-md-12">
                    <h2 class="new_title">{{$post->name}}</h2>
                    <div class="post-description d-none">
                        <p>{{$post->description}}</p>
                    </div>
                    <div class="post-content">
                        <p>{!! $post->content !!}</p>
                    </div>
                    
                </div>
            </div>
            <!-- Project One -->
        </div>
    </section>
@endsection

