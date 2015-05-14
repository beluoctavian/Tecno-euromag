@extends('default')

@section('includes')
@stop

@section('content')
    <div class="row no-padding">
        <img src="./img/map.jpg" alt="Harta adresa de lucru">
    </div>

    @if(!$errors->isEmpty())
        <div class="row no-padding margin-top">
            <div class="col-xs-12">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                    {{ $error }}
                </div>
            @endforeach
            </div>
        </div>
    @endif

    @if(Session::has('message'))
        <div class="row no-padding margin-top">
            <div class="col-xs-12">
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                    {{Session::get('message')}}
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h4>Trimiteti-ne un mesaj</h4>
            {!! Form::open(array('route' => 'contact_store', 'class' => 'contactform')) !!}
            <div class="row no-padding">
                <div class="form-group col-xs-6">
                    {!! Form::text('name', null,
                    array('required',
                    'class' => 'form-control',
                    'placeholder'=>'Nume*'))
                    !!}
                </div>
                <div class="form-group col-xs-6">
                    {!! Form::text('subject', null,
                    array('required',
                    'class' => 'form-control',
                    'placeholder'=>'Subiect*'))
                    !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::text('email', null,
                array('required',
                'class' => 'form-control',
                'placeholder'=>'E-mail*'))
                !!}
            </div>

            <div class="form-group">
                {!! Form::text('phone', null,
                array('required',
                'class' => 'form-control',
                'placeholder'=>'Telefon'))
                !!}
            </div>

            <div class="form-group">
                {!! Form::textarea('message', null,
                array('required',
                'class' => 'form-control',
                'placeholder'=>'Scrieti aici mesajul dvs...'))
                !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Trimiteti mesajul',array('class'=>'btn btn-success')) !!}
            </div>

            {!! Form::close() !!}

        </div>
        <div class="divider hidden-sm hidden-md hidden-lg"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h4>Date de contact</h4>
            <p>
                <ul class="default">
                    <li><i class="fa fa-home"></i> Sediul Central: Strada Morilor, Nr. 39, Galati</li>
                    <li><i class="fa fa-map-marker"></i> Punct de lucru: Buzau, Str. Aleea Industriilor, Nr.5</li>
                    <li><i class="fa fa-phone"></i> Tel-Fax: +40 238 719734</li>
                    <li><i class="fa fa-envelope-o"></i> E-mail: office@tecnoeuromag.ro</li>
                </ul>
            </p>
            <h4>Director general</h4>
            <p>
                <ul class="default">
                    <li><b>Toader Ion Mihail</b></li>
                    <li><i class="fa fa-phone"></i> Telefon: 0744 363 987</li>
                    <li><i class="fa fa-envelope-o"></i> E-mail: mihai.toader@tecnoeuromag.ro</li>
                </ul>
            </p>
            <h4>Departamentul tehnic</h4>
            <p>
                <ul class="default">
                    <li><b>Toader Ion Mihail</b></li>
                    <li><i class="fa fa-phone"></i> Telefon: 0744 363 987</li>
                    <li><i class="fa fa-envelope-o"></i> E-mail: mihai.toader@tecnoeuromag.ro</li>
                </ul>
            </p>
            <p>
                <ul class="default">
                    <li><b>Dinu Sorin</b></li>
                    <li><i class="fa fa-phone"></i> Telefon: 0735 885 727</li>
                    <li><i class="fa fa-envelope-o"></i> E-mail: sorin.dinu@tecnoeuromag.ro</li>
                </ul>
            </p>
            <p>
                <ul class="default">
                    <li><b>Damian Mihai</b></li>
                    <li><i class="fa fa-phone"></i> Telefon: 0724 148 440</li>
                    <li><i class="fa fa-envelope-o"></i> E-mail: mihai.damian@tecnoeuromag.ro</li>
                </ul>
            </p>
            <h4>Reprezentant SOITAAB Romania</h4>
            <p>
                <ul class="default">
                    <li><b>Lorento Iacob</b></li>
                    <li><i class="fa fa-phone"></i> Telefon 1: +40741 639 762</li>
                    <li><i class="fa fa-phone"></i> Telefon 2: +39320 749 0153</li>
                    <li><i class="fa fa-envelope-o"></i> E-mail: lorento.iacob@soitaab.it</li>
                </ul>
            </p>
            <h4>Departamentul marketing</h4>
            <p>
                <ul class="default">
                    <li><b>Alina Costache</b></li>
                    <li><i class="fa fa-phone"></i> Telefon: +40238 719 734</li>
                    <li><i class="fa fa-envelope-o"></i> E-mail: office@tecnoeuromag.ro</li>
                </ul>
            </p>
            <h4>Secretariat</h4>
            <p>
                <ul class="default">
                    <li><b>Marchidan Vivi</b></li>
                    <li><i class="fa fa-phone"></i> Telefon: +40238 719 734</li>
                    <li><i class="fa fa-envelope-o"></i> E-mail: office@tecnoeuromag.ro</li>
                </ul>
            </p>
        </div>
    </div>
@stop

@section('scripts')
@stop


    