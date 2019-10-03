@extends('layouts.AdminLayout')

@section('content')
<div class="container">
        <div class="row">
            <table class="table text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">User Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Permission</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Controls</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($roles as $role)
                    <tr style="backgroundColor:#fff">
                        <td>{{$role->name}}</td>
                        <td>{{$role->role}}</td>
                        <td>{{$role->permission}}</td>
                        <td>{{$role->created_at}}</td>
                        <td>{{$role->updated_at}}</td>  
                        <td class="justify-content-center"> 
                            <a href={{"users/".$role->user_id}} class="btn btn-info btn-sm text-light">View</a>
                            <a href={{"users/edit/".$role->user_id}} class="btn btn-success btn-sm text-light">Edit</a>
                            <form action="{{url('users/'.$role->user_id)}}" method="POST" style="display:inline-block">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-light" value="Delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <div class="display-3 text-center">No Roles Available</div>
                @endforelse
                </tbody>
            </table>
            
        </div>
            {{ $roles->links() }}
        </div>
@endsection