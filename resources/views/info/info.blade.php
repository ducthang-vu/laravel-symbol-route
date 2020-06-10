@extends('layout.main')

@section('content')
    <main>
        <div class="container">
            <h2> Welcome to my website info page!</h2>
            <ul>
                <li>Phone: {{ $phone }}</li>
                <li>Address: {{ $address }}</li>
                <li>Email: {{ $email }}</li>
            </ul>
        </div>
    </main> 
@endsection