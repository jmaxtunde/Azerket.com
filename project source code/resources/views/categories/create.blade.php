@extends('layouts.admin')
@section('content')
<div style="background-color:#e9ebee;">
    <div class="container" style="background-color:white;">
        <div class="row">

              
            <div class="col-md-8 col-md-offset-2">
                @if(count($errors)>0)
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="alert alert-danger">{{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif
                <div class="widget personal-info">
                <h4 class="widget-header user"><center>Ajouter une categorie</center></h4> 
                    
                

                    <div class="card-body">
                        {!! Form::open(['route' => 'categories.store', 'method' => 'post']) !!}
                                <div class="form-group">
                                    {{ Form::label('libelle', 'libelle') }}
                                    {{ Form::text('libelle', null, array('class' => 'form-control')) }}
                                </div>
                                <center>
                                    <div class="form-group">
                                        {{ Form::submit('Envoyer', array('class' => 'btn btn-transparent')) }}
                                       {!! Form::close() !!}
                                    </div>
                                </center>
                    </div>
                    
                    </div>
					
	    </div>
		<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
                     @include('include/sidebarAdmin')
			</div>
	    
            
		</div>
	</div>
</div>
 
@endsection

