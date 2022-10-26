@extends('base')

@section('contenido')
<style>
    h1{
        color: rgb(96, 141, 46);
        font-family: Arial, Helvetica, sans-serif;
        font-size:45px; 
            }
    h2{
        color: rgb(231, 181, 73);
        font-family: inherit;
        font-size: 17px;
    }

</style>
<h1 class=" text-center mb-5 mt-5 fw-bold">CONSULTA DE RECORDATORIOS</h1>
    <div class="container mt-7 col-md-7" >

        <div class="card text-center mb-5">
            <div class="card-header fw-bold">
               <h2> ¡¡¡Anticipate y confia!!!</h2>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Lunes</th>
                        <th scope="col">Martes</th>
                        <th scope="col">Miercoles</th>
                        <th scope="col">Jueves</th>
                        <th scope="col">Viernes</th>
                        <th scope="col">Sabado</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>--</td>
                        <td>!Dentista¡</td>
                        <td>!Oftamologia</td>
                        <td>--</td>
                        <td>!Atletismo</td>
                        <td>!Domotica</td>
                      </tr>
                      <tr>
                      <th scope="row">2</th>
                      <td>--</td>
                      <td>!-¡</td>
                      <td>!Psicologo</td>
                      <td>--</td>
                      <td>!Atletismo¡</td>
                      <td>!Programación¡</td>
                    </tr>
                    </tbody>
                  </table>
            </div>



            

            <div class="card-footer">

            </div>

        </div>
    </div>

@endsection