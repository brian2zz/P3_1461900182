@extends('main0182')
@section('badan')
<form method="post" action="/dokter/filter">
    @csrf
<label >Filter dokter : </label>
<select name="jabatan">
    @foreach(DB::table('dokter')->select('jabatan')->groupby('jabatan')->get() as $jabatan)
        <option value="{{$jabatan->jabatan}}">{{$jabatan->jabatan}}</option>
    @endforeach
</select>
<button name="submit">Tampilkan</button>
</form>
<br>
    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Dokter</th>
                <th scope="col">Jabatan</th>   
            </tr>
        </thead>
        <tbody>
            @foreach($dokter as $dr)
            <tr>
                <td style= "text-align:center;">{{$dr->id}}</td>
                <td>{{$dr->nama}}</td>
                <td>{{$dr->jabatan}}</td>
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection