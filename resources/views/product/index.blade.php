@extends('layouts.main')

@section('konten')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Produk</h1>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Price</th>
                            <th>Sale Price</th>
                            <th>Brand</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection


