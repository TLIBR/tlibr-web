@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    {!! Form::open([
                        'route' => 'login',
                        'class' => 'needs-validation',
                        'method' => 'POST',
                    ]) !!}
                        <div class="form-group row">
                            {!! Form::label('username', 'Username',[
                                'class' => 'col-sm-4 col-form-label text-md-right',
                            ]) !!}
                            <div class="col-md-6">
                                {!! Form::text('username', old('username'), [
                                    'id' => 'username',
                                    'class' => 'form-control'.($errors->has('username') ? ' is-invalid' : ''),
                                    'placeholder' => 'Username',
                                ]) !!}

                                @if ($errors->has('username'))
                                    <div class="invalid-feedback">{!! $errors->first('username') !!}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', 'Password',[
                                'class' => 'col-sm-4 col-form-label text-md-right',
                            ]) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', [
                                    'id' => 'password',
                                    'class' => 'form-control'.($errors->has('password') ? ' is-invalid' : ''),
                                    'placeholder' => 'Password',
                                ]) !!}

                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">{!! $errors->first('password') !!}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    {!! Form::checkbox('remember', null, false, [
                                        'id' => 'remember',
                                        'class' => 'form-check-input',
                                    ]) !!}
                                    {!! Form::label('remember', 'Remember me',[
                                        'class' => 'form-check-label',
                                    ]) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::submit('Sign In', [
                                    'class' => 'btn btn-primary btn-lg',
                                ]) !!}

                                <a href="{{ route('password.request') }}" class="btn btn-secondary btn-lg">Forgot password</a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
