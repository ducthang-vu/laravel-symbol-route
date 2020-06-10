@extends('layout.main')

@section('content')
    <main>
        <div class="container">
            <h2> Welcome to my website homepage!</h2>

            <p>Today is {{$date}} </p>
            <p>The info page is: /info</p>
        </div>
    </main> 
@endsection