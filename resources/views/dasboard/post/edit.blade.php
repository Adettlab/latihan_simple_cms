@extends('dasboard.layout.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <center>
                    <h1 class="m-6">Create New Post</h1>
                </center>
            </div>
            @if (session()->has('succsess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="col-lg-8">
                <form method="post" action="{{route('update',$berita)}}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Title</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                            name="judul" required autofocus value="{{ old('judul', $berita->judul) }}">
                        @error('judul')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">penulis</label>
                        <input type="text" class="form-control" id="penulis" required value="{{ old('penulis', $berita->penulis) }}"
                            name="penulis">
                        @error('penulis')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">slug</label>
                        <input type="text" class="form-control" id="slug" required value="{{ old('slug', $berita->slug) }}"
                            name="slug">
                        @error('slug')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">kategori</label>
                        <select class="form-select" name="id_categories">
                            @foreach ($categories as $category)
                                @if (old('id_categories', $berita->id_categories) == $category->id_categories)
                                    <option value="{{ $category->id_categories }}" selected>{{ $category->nama }}</option>
                                @else
                                    <option value="{{ $category->id_categories }}">{{ $category->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="isiPost" class="form-label">isi artikel</label>
                        <input id="isiPost" type="hidden" name="isiPost" value="{{ old('isiPost', $berita->isiPost) }}">
                        <trix-editor input="isiPost"></trix-editor>
                        @error('isiPost')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                </form>
            </div>
        </section>
    </div>
@endsection

