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
                    <form class="formPerfil">   
                     
                   
                  
                   <br>
                   <p><b>Nombre de usuario:</b><input type="text" value="{{Auth::user()->name}}"></p>
                   <br>
                   <p><b>Email:</b><input type="text" value="{{Auth::user()->email}}"></p>
                   <br>
                   <p><b>Telefono:</b><input type="text" value="{{Auth::user()->telefono}}"></p>
                   <br>
                   <p><b>Sobre mi:</b><input type="text" value="{{Auth::user()->bio}}"></p>
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

