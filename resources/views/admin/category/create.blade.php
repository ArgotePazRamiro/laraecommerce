@extends('layouts.admin')

@section('content')
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Añadir Categoría
                        <a href="{{ url('admin/category') }}" class="btn btn-danger btn-sm text-white float-end">Atrás</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label>Nombre</label>
                                <input type="text" name="name" class="form-control">
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Slug</label>
                                <input type="text" name="slug" class="form-control">
                                @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Descripción</label>
                                <textarea name="description" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Imagen</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Estado</label><br/>
                                <input type="checkbox" name="status">
                            </div>

                            <div class="col-md-12">
                                <h4>Marcadores SEO</h4>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Título</label>
                                <input type="text" name="meta_title" class="form-control">
                                @error('meta_title') <small class="text-danger">{{ $message }}</small> @enderror
                                
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Palabra Clave</label>
                                <textarea name="meta_keyword" class="form-control" rows="3"></textarea>
                                @error('meta_keyword') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Descripción Meta</label>
                                <textarea name="meta_description" class="form-control" rows="3"></textarea>
                                @error('meta_description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary float-end">Guardar</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection