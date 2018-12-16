@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creer nouvelle ligne</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('lines.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="numline" class="col-md-4 col-form-label text-md-right">Numeros ligne</label>

                            <div class="col-md-6">
                                <input id="numline" type="text" class="form-control{{ $errors->has('numline') ? ' is-invalid' : '' }}" name="numline" value="{{ old('numline') }}" required autofocus>

                                @if ($errors->has('numline'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numline') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group row">
                            <label for="numline" class="col-md-4 col-form-label text-md-right">Details</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="details"></textarea>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="numline" class="col-md-4 col-form-label text-md-right">Selectionnez la compagnie</label>

                            <div class="col-md-6">
                               <select name="companyID" class="form-control">
                               	@foreach($companies as $compagnie)
                               	<option value="{{$compagnie->id}}">{{$compagnie->name}}</option>
                               	@endforeach
                               </select>
                            </div>
                        </div>
<div class="form-group row">
                            <label for="numline" class="col-md-4 col-form-label text-md-right">Nombre arret</label>

                            <div class="col-md-6">
                                <input type="number" name="nbarret" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
