@extends('layouts.adminLayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{--Success Msg--}}
            @if (session('msg_success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('msg_success')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="text-center">
                <h1 class="display-4">Users Count</h1>
                <h1 class="display-3">{{$users_count}}</h1>
            </div>
        </div>
    </div>
</div>
@endsection
