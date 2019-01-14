@extends('layouts.mainud6')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="formPerfil" action="{{ route('update') }}" method="post">
                     
                   @csrf
                  
                   <br>
                   <p><b>Nombre de usuario:</b><input type="text" name="nombre" value="{{Auth::user()->name}}"></p>
                   <br>
                   <p><b>Email:</b><input type="email" name="email" value="{{Auth::user()->email}}"></p>
                   <br>
                   <p><b>Telefono:</b><input type="text" name="telefono" value="{{Auth::user()->telefono}}"></p>
                   <br>
                   <p><b>Sobre mi:</b><input type="text" name="bio" value="{{Auth::user()->bio}}"></p>
                   <br>
                   <p><b>Fecha de registro:</b>{{Auth::user()->created_at}}</p>
                   <br>
                   

                      <input type="submit" value="Cambiar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

