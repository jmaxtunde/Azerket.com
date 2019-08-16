@extends('layouts.admin')
@section('content')

<div style="background-color:#e9ebee;">
    
    <div class="container" style="background-color:white;">
       <br/>
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
               
                    <h2 class="widget-header user"><center> Boosters une annonce</center></h2>        
                    
                                        {!! Form::open(['route' => ['boosters.update',$booster->id], 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                                    
                                    <div class="form-group">
                                        {{ Form::label('budget', 'Budget') }}
                                        {{ Form::text('budget', $booster->budget, array('class' => 'form-control','required'=>'','placeholder'=>'Quelle est votre budget ?')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('dateDebut', 'Date Debut') }}
                                        {{ Form::text('dateDebut', $booster->dateDebut, array('class' => 'form-control','required'=>'','placeholder'=>'Quelle est la date de debut ?')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('dateFin', 'Date Fin') }}
                                        {{ Form::text('dateFin', $booster->dateFin, array('class' => 'form-control','required'=>'','placeholder'=>'Quelle est la date de fin ?')) }}
                                    </div>
                                   <div class="form-group">
                                        {{ Form::hidden('statut','Active') }}
                                    </div>

                                    <center><div class="form-group">
                                     {{ Form::submit('Modifier', array('class' => 'btn btn-transparent')) }}
                                    {!! Form::close() !!}
                                        </div></center>
                   </div>
                    </div>
        
		<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				@include('include/sidebarAdmin')
			</div>
        </div>
            </div>
        </center>
    </div>
@endsection