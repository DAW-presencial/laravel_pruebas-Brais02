@extends('Curso.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Contacts</div>
                <div class="card-body">

                    <a href="{{ url('/es/formulario/create') }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> @lang('formulario.crear')</button></a>
                    <br/>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>Dificultad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cursos as $curso)
                                <tr>
                                    <td>{{ $curso->id }}</td>
                                    <td>{{ $curso->nombre }}</td>
                                    <td>{{ $curso->fecha }}</td>
                                    <td>{{ $curso->dificultad }}</td>

                                    <td>
                                        <a href="{{ url('/es/formulario/' . $curso->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> @lang('formulario.ver')</button></a>
                                        
                                        <a href="{{ url('/es/formulario/' . $curso->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> @lang('editar')</button></a>
                                        
                                        <form method="POST" action="{{ url('/es/formulario/' . $curso->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Borrar" onclick="return confirm( & quot; Confirm delete? & quot; )"><i class="fa fa-trash-o" aria-hidden="true"></i> @lang('borrar')</button>
                                        </form>



                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
