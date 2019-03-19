@extends('CVW::Layouts.default')

@section('title')
    <title>Admin Panel</title>
@endsection

@section('content')
    <h2>Admin Panel Is Here</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->username }}</td>
                    <td>{{ $admin->created_at }}</td>
                    <td>{{ $admin->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
