@extends('layout.main')

@section('content')
    <main>
        <h2> Welcome to my website info page!</h2>
        <ul>
            <li>Phone: {{ $phone }}</li>
            <li>Address: {{ $address }}</li>
            <li>Email: {{ $email }}</li>
        </ul>
    </main> 
@endsection