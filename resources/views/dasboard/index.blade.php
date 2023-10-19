@extends('dasboard.layout.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <center>
                    <h1 class="m-6">hello, {{ auth()->user()->name }}</h1>
                </center>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <h4>Daftar post berita</h4>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">judul</th>
                        <th scope="col">slug</th>
                        <th scope="col">gambar</th>
                        <th scope="col">penulis</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">tanggal publikasi</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $row)
                        <tr>
                            <td> {{ $no++ }} </td>
                            <td> {{ $row->judul }} </td>
                            <td> {{ $row->slug}}</td>
                            <td> <img src="/assets/image/{{ $row->gambar }}" style="width: 100px;"> </td>
                            <td> {{ $row->penulis }} </td>
                            <td> {{ $row->category->nama}}</td>
                            <td> {{ $row->category->tgl_publikasi}}</td>
                            <td>
                                <form action="{{ route('edit', $row)}}" method="get"  class="d-inline">
                                    @csrf
                                    <button type="submit" class="badge bg-info border-0">edit</button>
                                </form>
                                <form action="{{ route('delete', $row)}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm ('are you sure')"><span class="fa-solid fa-trash"></span></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
@endsection
