@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu del dia!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <a class="btn btn-primary" href="{{ route('notificarMenues') }}">
                                    {{ __('Notificar usuario') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @if(session('notificacion_correcta'))
        <div class="alert alert-success alert-dismissible fade show m-5 mx-auto" style="width: 50%;margin: 3% auto !important;" role="alert">
            {{ session('notificacion_correcta') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> 
    @endif
@endsection
