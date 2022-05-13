@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Teman</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No Telepon</th>
                                <th>Alamat</th>
                            </tr>
                                @php $no=0; @endphp
                                @foreach($data_teman as $friend)
                                @php $no++; @endphp
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $friend['nama'] }}</td>
                                        <td>{{ $friend['no_tlp'] }}</td>
                                        <td>{{ $friend['alamat'] }}</td>
                                    </tr>
                                @endforeach
                        </table>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection