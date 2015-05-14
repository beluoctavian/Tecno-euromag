@extends('default')

@section('includes')
@stop

@section('content')
    <div class="row page-title">
        <h1>Promotii</h1>
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
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <h4>Promotie actuala</h4>
            <div class="thumbnail last">
                <img src="./img/products/powermax105.jpg" alt="Powermax 105">
                <div class="caption">
                    <h3>Powermax 105</h3>
                    <p>Aducem un nou varf al gamei Hypertherm! Powermax 105 ofera productivitate ridicata, costuri de operare reduse, taiere de calitate superioara si fiabilitate de neegalat Hypertherm. Powermax 105 este utilizat frecvent pe sisteme mecanizate de taiere, masini CNC de taiere sau aplicatii robotizate de taiere.</p>
                    <p><a href="./produse?category=Plasme_pentru_taiere_manuala&item=Powermax_105" class="btn btn-success" role="button">Click aici pentru detalii</a></p>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
@stop


    