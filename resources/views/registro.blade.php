@extends('base')

@section('contenido')

@if (session()->has('echo'))
{!!"<script> Swal.fire(
    'Perfecto, Recordatorio anotado!',
    'Presiona para continuar!',
    'danger'
    )</script> "!!}    
@endif
<style>
    h1{
        color: blue;
        font-family: Arial, Helvetica, sans-serif;
        font-size:45px; 
            }
    h2{
        color: coral;
        font-family: inherit;
        font-size: 20px;
    }

</style>
<h1 class=" text-center mb-5 mt-5 fw-bold">REGISTRO DE RECORDATORIOS</h1>
    <div class="container mt-7 col-md-7" >

        <div class="card text-center mb-5">
            <div class="card-header fw-bold">
               <h2> ¡¡¡Acuerdate!!!</h2>
            </div>

            <div class="card-body">
                <form class="mb-2" method="POST" action="{{route('Recordatorios.UsaRecordatorio')}}">
                    @csrf 
                    

                <div class="mb-3">
                <label class="form-label fw-bold">Titulo</label>
                <input class="form-control" type="text" name="txtTitulo" value="{{old('txtTitulo')}}"></input>
                <p class="text-danger fst-italic">
                    {{$errors->first('txtTitulo')}}
                </p>
                
                    
                </div>
                <div class="mb-3">
                <label class="form-label fw-bold">Recordatorio</label>
                <input class="form-control" type="text" name="txtRecordatorio" value="{{old('txtRecordatorio')}}"></input>
                <p class="text-danger fst-italic">
                    {{$errors->first('txtRecordatorio')}}
                </p>
                
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Lugar</label>
                    <input class="form-control" type="text" name="txtLugar" value="{{old('txtLugar')}}"></input>
                    <p class="text-danger fst-italic">
                        {{$errors->first('txtLugar')}}
                    </p>
                    
                    
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text fw-bold" id="inputGroup-sizing-sm">Motivo</span>
                    <input type="text" name="txtMotivo" value="{{old('txtMotivo')}}"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    
                </div>
                <p class="text-danger fst-italic">
                    {{$errors->first('txtMotivo')}}
                </p>
            </div>



            

            <div class="card-footer">
                    <button type="submit" class="btn btn-danger">G U A R D A R</button>
                </form>
            </div>

        </div>
    </div>



@endsection