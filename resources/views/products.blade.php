@extends('layout')
 
@section('title', 'Products')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as Buyer!
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container products">
 
        <div class="row">
 
            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $product->photo }}" width="300" height="300">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ str_limit(strtolower($product->description), 50) }}</p>
                            <p><strong>Harga: </strong> Rp{{ $product->price }}</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Masukkan ke troli</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach
 
        </div>
 
    </div>
 
@endsection