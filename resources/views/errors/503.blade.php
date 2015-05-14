@extends('default')

@section('content')
    <div class="row page-title">
        <h1>Ooops! A avut loc o eroare.</h1>
    </div>
    <div class="row">
        <aside class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <h4>Produse</h4>
            <div class="sidebar">
            <?php $products = DB::table('products')->get(); ?>
            @foreach ($products as $product)
                <a href="./produse?category={{$product->prod_link}}">{{$product->prod_name}}</a>
            @endforeach
            </div>
        </aside>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 text-center">
		<h1>Eroare 503 - Serviciu indisponibil</h1>
		<h4>Serverul este momentan indisponibil (deoarece este supraincarcat sau inchis intretinere).</h4>
        </div>
    </div>
@stop