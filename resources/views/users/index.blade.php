@extends('layouts.adminLayout')

@section('content')
<div class="container">
    <div class="row">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Birth Date</th>
                <th scope="col">Country</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Controls</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($users as $user)
                <tr style="backgroundColor:#fff">
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->gender}}</td>
                    <td>{{($user->birth_date)? $user->birth_date : 'empty'}}</td>
                    <td>{{($user->country)? $user->country : 'empty'}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>  
                    <td class="justify-content-center"> 
                        <a href={{"users/".$user->id}} class="btn btn-info btn-sm text-light">View</a>
                        <a href={{"users/edit/".$user->id}} class="btn btn-success btn-sm text-light">Edit</a>
                        <form action="{{url('users/'.$user->id)}}" method="POST" style="display:inline-block">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-light" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <div class="display-3 text-center">No Users Available</div>
            @endforelse
            </tbody>
        </table>
        
    </div>
        {{ $users->links() }}
    </div>
@endsection