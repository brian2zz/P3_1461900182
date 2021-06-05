@extends('main0182')
@section('badan')
<form method="post" action="/kamar/filter">
    @csrf
<label >Filter Alamat : </label>
<select name="alamat">
    @foreach(DB::table('pasien')->select('alamat')->groupby('alamat')->get() as $alamat)
        <option value="{{$alamat->alamat}}">{{$alamat->alamat}}</option>
    @endforeach
</select>
<button name="submit">Tampilkan</button>
</form>
    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Dokter</th>  
                <th scope="col">Nama Pasien</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kamar as $Kamar)
            <tr>
                <td style= "text-align:center;">{{$Kamar->id}}</td>
                <td>{{$Kamar->nama_dokter}}</td>
                <td>{{$Kamar->nama_pasien}}</td>
                <td>{{$Kamar->alamat}}</td>
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection