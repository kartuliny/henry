@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                    <div class="col-lg-10 col-md-10 col-md-offset-1 col-lg-offset-1 text-center">
                        <div class="panel-head">
                            Nuevo Producto

                        </div>
                        <div class="content card" style="padding: 1%;">
                            <div class="row">
                                <form class="form-content" action="{{ route('product.store') }}" method="post">
                                     {{ csrf_field() }}
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Nombre</label>
                                        <input type="text" class="form-control border-input" name="name" aria-describedby="emailHelp" placeholder="Ingrese Nombre">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Stock</label>
                                        <input type="number" min="0" max="100" class="form-control border-input" name="stock" aria-describedby="emailHelp" placeholder="Ingrese Cantidad">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Precio compra</label>
                                        <input type="text" class="form-control border-input" name="precio_compra" aria-describedby="emailHelp" placeholder="Ingrese Precio Compra">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="exampleSelect1">Marca</label>
                                        <select class="form-control border-input" name="brand_id">
                                         @foreach ($brands as $brand )
                                             <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                         @endforeach
                                        </select>
                                     </div>
                                    <button class="btn btn-success" type="submit">Create</button>
                             </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
