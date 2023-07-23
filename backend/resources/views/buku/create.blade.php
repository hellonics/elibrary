@extends('app')

@section('title', 'Tambah Buku')

@section('main')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/bank') }}">Buku</a></li>
                <li class="breadcrumb-item">tambah</li>

            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form class='row g-3' action="{{ url('/buku/store') }}" method="POST">
                            @csrf
                            <div class="col-12">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" name="judul" id="judul" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="penulis" class="form-label">Penulis</label>
                                <input type="text" name="penulis" id="penulis" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="kategori" class="form-label">Kategori</label>
                                <input type="text" name="kategori" id="kategori" class="form-control">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-pill">save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection