@extends('layouts.master')

@section('title', 'Game Detail')

@section('content')
<style>
    .game-detail {
        margin-top: 100px;
    }

    .game-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .game-image {
        max-height: 400px; /* Atur tinggi maksimal gambar */
        object-fit: cover; /* Pastikan gambar tetap proporsional dan mencakup seluruh area */
        width: 100%;
    }

    .game-title {
        font-size: 24px; /* Ukuran font judul */
        margin-bottom: 15px;
    }

    .game-price {
        font-size: 18px; /* Ukuran font harga */
        color: #4CAF50; /* Warna hijau pada harga untuk menarik perhatian */
    }

    .game-description {
        line-height: 1.5; /* Atur ketinggian baris untuk membaca dengan nyaman */
        margin-bottom: 20px;
    }
</style>

<div class="container game-detail">
    <div class="row">
        <div class="col-md-6">
            <div class="game-card">
                <img src="{{ asset('img/' . $data->image) }}" class="img-fluid rounded shadow game-image" alt="{{ $data->title }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="game-card p-4">
                <h2 class="text-primary game-title">{{ $data->title }}</h2>
                <p class="font-weight-bold game-price">$ {{ $data->price }}</p>
                <p class="text-muted game-description">{{ $data->deskripsi }}</p>

                <!-- Form for Purchase -->
                <form action="{{ route('purchaseGame', ['id' => $data->game_id]) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Purchase Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
