@extends('main0182')
@section('badan')
<a href="/pasien/tambah"><button>Tambah Pasien</button></a>
    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>   
            </tr>
        </thead>
        <tbody>
            @foreach($pasien as $Pasien)
            <tr>
                <td style= "text-align:center;">{{$Pasien->id}}</td>
                <td>{{$Pasien->nama}}</td>
                <td>{{$Pasien->alamat}}</td>
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection