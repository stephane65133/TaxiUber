@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Request') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('create_request') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="depart" class="col-md-4 col-form-label text-md-end">{{ __('Depart Point') }}</label>

                            <div class="col-md-6">
                                <input id="depart" type="text" class="form-control @error('depart') is-invalid @enderror" name="depart" value="{{ old('depart') }}" required autocomplete="depart" autofocus>

                                @error('depart')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="arrive" class="col-md-4 col-form-label text-md-end">{{ __('Arrived Point') }}</label>

                            <div class="col-md-6">
                                <input id="arrive" type="text" class="form-control @error('arrive') is-invalid @enderror" name="arrive" value="{{ old('arrive') }}" required autocomplete="arrive" autofocus>

                                @error('arrive')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="prix" class="col-md-4 col-form-label text-md-end">{{ __('Prix') }}</label>

                            <div class="col-md-6">
                                <input id="prix" type="number" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix') }}" required autocomplete="prix">

                                @error('prix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="type_vehicule" class="col-md-4 col-form-label text-md-end">{{ __('type_vehicule ') }}</label>

                            <div class="col-md-6">
                                <input id="type_vehicule" type="text" class="form-control @error('type_vehicule') is-invalid @enderror" name="type_vehicule" value="{{ old('type_vehicule') }}" required autocomplete="type_vehicule">

                                @error('type_vehicule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="etat" class="col-md-4 col-form-label text-md-end">{{ __('State') }}</label>

                            <div class="col-md-6">
                                <input id="etat" type="text" class="form-control @error('etat') is-invalid @enderror" name="etat" value="{{ old('etat') }}" required autocomplete="etat">

                                @error('etat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send') }}
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
