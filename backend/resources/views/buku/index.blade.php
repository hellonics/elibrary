@extends('app')

@section('title', 'buku -talnest')

@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Buku Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">buku</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ url('/buku/tambah') }}" class="btn btn-primary mb-3">tambah data</a>
                    <div class="card">
                        <div class="card-body">

                            <!-- Table with hoverable rows -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">judul</th>
                                        <th scope="col">penulis</th>
                                        <th scope="col">katagori</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($bukus as $buku)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $buku->judul }}</td>
                                            <td>{{ $buku->penulis }}</td>
                                            <td>{{ $buku->kategori }}</td>
                                            <td>
                                                <a href="/buku/edit/{{ $buku->id }}" class="btn btn-info rounded-pill">edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with hoverable rows -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
