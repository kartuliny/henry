@extends('layouts.app')
@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                        <div class="col-lg-10 col-md-10 col-md-offset-1 col-lg-offset-1 text-center">
                            <div class="panel-head">
                                PRODUCTOS
                            </div>
                            <div class="content card" style="padding: 1%;">
                                <a href="{{ route('product.register') }}" type="button" name="button" class="btn btn-info position-button">Agregar</a>
                            <div class="panel-content">
                            <table id="example" class="table table-striped" cellspacing="0" width="100%">
                                <thead >
                                    <tr class="info">
                                        <th>Nombre</th>
                                        <th>Stock</th>
                                        <th>Precio Compra</th>
                                        <th>Marca</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>{{ $product->precio_compra }}</td>
                                        <td>{{ $product->brand->name }}</td>
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
