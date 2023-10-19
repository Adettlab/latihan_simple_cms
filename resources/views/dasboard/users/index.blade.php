@extends('dasboard.layout.main')

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <h4>Daftar users</h4>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $users)
                        <tr>
                            <td> {{ $no++ }} </td>
                            <td> {{ $users->name }} </td>
                            <td> {{ $users->email }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
@endsection
