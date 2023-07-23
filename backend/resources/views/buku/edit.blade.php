@extends('app')

@section('title', 'buku-elibrary')

@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>buku</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">buku</li>
                    <li class="breadcrumb-item">tambah</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">               
                            <form class="row g-3" action="{{ route('buku.update', $buku->id) }}" method="POST">
                                @csrf
                                <div class="col-12">
                                    <label for="buku_id" class="form-lable">buku</label>
                                    <select name="buku_id" id="buku_id" class="form-control">
                                        @foreach ($bukus as $buku)
                                        <option value="{{ $buku->id}}">{{$buku->name}}</option>
                                            
                                        @endforeach
                                    </select>
                                <div class="col-12">
                                    <label for="name" class="form-lable">judul</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="address" class="form-lable">penulis</label>
                                    <input type="text" name="address" id="address" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="about" class="form-lable">kategori</label>
                                    <input type="text" name="about" id="about" class="form-control">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-pill">edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection
