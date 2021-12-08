@extends('plantillas.plantilla')
@section('titulo', 'Alumno')
@section('contenido')

<h1> Detalles de {{$alumno->Nombres}} {{$alumno->PrimerApellido}}
<a class="btn btn-warning" href="{{route ('alumno.edit', ['id'=>$alumno->id])}}"> Editar </a>
</h1>
<br>
<table class="table">
    <thead class="table-secondary">
        <tr>
            <th scope="col">Campos</th>
            <th scope="col">Valor</th>
        </tr>  
    </thead>
    <tbody>
        <tr>
            <th scope="row">Grado Id</th>
            <td scope="col">{{ $alumno->grado_id }} </td>
        </tr>
        <tr>
            <th scope="row">Nombres</th>
            <td scope="col">{{ $alumno->Nombres}} </td>
        </tr>
        <tr>
            <th scope="row">Primer Apellido</th>
            <td scope="col">{{ $alumno->PrimerApellido }} </td>
        </tr>
        <tr>
            <th scope="row">Segundo Apellido</th>
            <td scope="col">{{ $alumno->SegundoApellido }} </td>
        </tr>
        <tr>
            <th scope="row">Año de Ingreso</th>
            <td scope="col">{{ $alumno->AñoIngreso}} </td>
        </tr>
        <tr>
            <th scope="row">Correo Electronico</th>
            <td scope="col">{{ $alumno->CorreoElectronico }} </td>
        </tr>
        <tr>
            <th scope="row">Edad</th>
            <td scope="col">{{ $alumno->Edad}} </td>
        </tr>
        <tr>
            <th scope="row">Fecha de Nacimiento</th>
            <td scope="col">{{ $alumno->FechaNacimiento}} </td>
        </tr>
    </tbody>
</table>

<a class="btn btn-primary" href="{{route('alumno.index')}}"> Volver </a>
@section('footer', 'Esta pagina pertenece a: Belsy Mairena, Estefani Herrera y Karla Sierra')
@endsection