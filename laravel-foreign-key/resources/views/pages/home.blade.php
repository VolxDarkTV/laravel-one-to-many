@extends('layouts.main-layouts')

@section('title')
    <title>Home</title>
@endsection

@section('main')
    <h1>Home</h1>

    <section>

        <div class="container">

            @foreach ($people as $person)
                <div class="d-flex flex-column gap-2 py-5">

                    <div class="card pt-1">
                        {{-- Profile name --}}
                        <div class="d-flex flex-column align-items-center gap-2">
                            <h6 class="bg-success rounded-pill p-2">{{$person -> name}}</h6>
                        </div>
    
                        <div class="p-5">
                            <h5>Post</h5>
                            @foreach ($person -> posts as $post)
                                <div>
                                    <h5 class="fw-bold">{{$post -> title}}</h5>
    
                                    <p>
                                        {{$post -> body}}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">

                        {{-- Profile Number --}}
                        <div>
                            <span>Phone </span>
                            <span class="bg-warning rounded-pill p-2">
                               {{$person -> personDetail -> phone}}
                            </span>
                        </div>

                         {{-- Profile mail --}}
                         <div>
                            <span>Mail</span>
                            <span class="bg-danger p-2 rounded-pill">
                                {{$person -> mail}}
                            </span>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>

    </section>
@endsection