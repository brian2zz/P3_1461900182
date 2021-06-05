@extends('main0182')
@section('badan')

<form method="post" action="/user/edit/update/">
    @foreach($user as $usr)
    @csrf
    <div>
        <input type="hidden" value="{{$usr->id}}" name="id">
        <label> username :</label>
        <br>
        <input type="text" name="username" value="{{$usr->username}}">
        <br>
        <br>
        <br>
        <label> Nama :</label>
        <br>
        <input type="text" name="nama" value="{{$usr->nama}}">
        <br>
        <br>
        <br>
        <label> password :</label>
        <br>
        <input type="password" name="password" >
        <br>
        <br><br>
        <td><input type="submit" name="submit"></td>
    </div>
    @endforeach
</form>

@endsection