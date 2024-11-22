@extends('layouts.app')

@section('template_title')
    Navieras
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Navieras') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('navieras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Id Naviera</th>
									<th >Nombre</th>
									<th >Contacto</th>
									<th >Ubicacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($navieras as $naviera)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $naviera->id_naviera }}</td>
										<td >{{ $naviera->nombre }}</td>
										<td >{{ $naviera->contacto }}</td>
										<td >{{ $naviera->ubicacion }}</td>

                                            <td>
                                                <form action="{{ route('navieras.destroy', $naviera->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('navieras.show', $naviera->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('navieras.edit', $naviera->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $navieras->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
