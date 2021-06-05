@extends('main0182')
@section('badan')
    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Aksi</th>   
            </tr>
        </thead>
        <tbody>
            @foreach($user as $User)
            <tr>
                <td style= "text-align:center;">{{$User->id}}</td>
                <td>{{$User->nama}}</td>
                <td>{{$User->username}}</td>
                <td><a href="/user/edit/{{$User->id}}"><button>Edit</button></a></td>
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection