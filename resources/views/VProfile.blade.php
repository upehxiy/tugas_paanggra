@extends('layout')
@section('container')

<a href="#"class="btn btn-success"> + Add New Data</a>


<table class="table table-bordered">
    <tr>
        <th>kode profile</th>
        <th>Nama profile</th>
        <th>Opsi</th>
    </tr>
    @foreach($profile as $data)
    <tr>
        <td>{{ $data->kd_profile }}</td>
        <td>{{ $data->nama_profile }}</td>
        <td>
            <a href="/controller/edit/{{ $data->kd_profile }}"class="btn btn-info">Update</a>
            |
            <a href="/controller/hapus/{{ $data->kd_profile}}"class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
    
@endsection