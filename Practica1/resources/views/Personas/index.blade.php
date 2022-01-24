@extends('Personas.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Contacts</div>
                <div class="card-body">
                    <?php /*
                     * Este ejemplo es como hacerlo usando un Gate que llama a
                     * una Policy 
                     * @can('crear-persona') 
                     * 
                     * Forma a través de la cual se llama directamente a la policy
                     * y al tipo de función de la misma, NO ME FUNCIONA.
                     * @can('create', new App\Persona)
                     */ ?>
                    @can('create', $policy)
                    <a href="{{ url('/personas/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                        <i class="fa fa-plus" aria-hidden="true"></i>Crear Persona
                    </a>
                    @else 
                    <a class="btn btn-success btn-sm" title="Add New Contact">
                        <i class="fa fa-plus" aria-hidden="true"></i>Crear Persona
                    </a>
                    @endcan
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($personas as $persona)
                                <tr>
                                    <td>{{ $persona->id }}</td>
                                    <td>{{ $persona->name }}</td>
                                    <td>{{ $persona->email }}</td>

                                    <td>
                                        <a href="{{ url('/personas/' . $persona->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> @lang('formulario.ver')</button></a>

                                        @can('update', $policy)
                                        <a href="{{ url('/personas/' . $persona->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                        @else
                                        <a title="No tienes permiso para editar"><button disabled class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                        @endcan
                                        
                                        @can('update', $policy)
                                        <form method="POST" action="{{ url('/personas' . '/' . $persona->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Borrar" onclick="return confirm( & quot; Confirm delete? & quot; )"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                                        </form>
                                        @else
                                        <form method="POST" action="{{ url('/personas' . '/' . $persona->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button disabled type="submit" class="btn btn-danger btn-sm" title="Borrar" onclick="return confirm( & quot; Confirm delete? & quot; )"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                                        </form>
                                        @endcan
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
