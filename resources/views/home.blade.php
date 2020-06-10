@extends('layout.main')

@section('content')
    <main>
        <div class="container">
            <h2> Welcome to my website homepage!</h2>

            <p>Today is {{$date}} </p>
            <p>The info page is: /info</p>

            <canvas id="myCanvas" class="canvas m-auto" width="800" height="300"></canvas>
            
            <script  src="{{asset('js/app.js')}}"></script>
        </div>
    </main> 
@endsection