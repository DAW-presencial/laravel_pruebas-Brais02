@extends('Curso.layout')
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
                   
                    <br/>
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
                                        <a href="{{ url('/personas/' . $curso->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> @lang('formulario.ver')</button></a>

                                       
                                        
                                       
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
