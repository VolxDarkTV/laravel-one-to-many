@extends('layouts.main-layouts')

@section('title')
    <title>Home</title>
@endsection

@section('main')
    <h1>Home</h1>

    <section>
        <div class="container">
            
            @foreach ($people as $person)
                <div class="card">
                    <h6>Name: {{$person -> name}}</h6>
                    <div>
                        <span>
                            {{$person -> personDetail -> phone}}
                        </span>
                    </div>
                    <div>
                        <span>
                            {{$person -> mail}}
                        </span>
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
            @endforeach

        </div>
    </section>
@endsection