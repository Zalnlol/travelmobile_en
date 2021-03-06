@extends('layouts.app')
@section('title', 'Edit personal info')
@section('content')
<div class="container">
    <form action="{{url('user/profile/'.$user->user_id.'/update')}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit personal info</h1>
                </div>

                <hr>

                <div class="form-group row">
                    <div class="col-md-6 col-form-label">
                        <label for="name">Fullname</label>
                        <input id="name" type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" value="{{ old('name' ) ?? $user->name }}" autofocus>

                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-form-label">
                        <label for="image">Profile image</label>
    
                        <input type="file" class="form-control-file" id="image" name="avatar_image">
    
                        @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 col-form-label">
                        <label for="mobile">Mobile</label>
                        <input id="mobile" type="text" class="form-control {{ $errors->has('mobile') ? 'is-invalid' : ''}}" name="mobile" value="{{ old('mobile' ) ?? $user->mobile}}">
                        
                        @if ($errors->has('mobile'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('mobile') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-form-label">
                        <label class="labels">Date of birth</label>
                        <input type="date" class="form-control {{ $errors->has('date') ? 'is-invalid' : ''}}" name="dob" value="{{ old('date' ) ?? $user->dob}}" >

                        @if ($errors->has('dob'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('dob') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gender" class="col-md-3">Gender: </label>
                    @if ($user->gender == 1)
                    <div class="px-2"> <label class="radio"> <input type="radio" name="gender" value="1" checked> <span>M</span> </label> </div>
                    <div class="px-2"> <label class="radio"> <input type="radio" name="gender" value="0"> <span>F</span> </label> </div>
                    @else
                    <div class="px-2"> <label class="radio"> <input type="radio" name="gender" value="1" > <span>M</span> </label> </div>
                    <div class="px-2"> <label class="radio"> <input type="radio" name="gender" value="0" checked> <span>F</span> </label> </div>
                    @endif
                </div>

                <div class="form-group row">
                    <div class="col-md-6 col-form-label">
                        <label for="email">Email address: </label>
                        <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" name="email" value="{{ old('email' ) ?? $user->email }}" autocomplete="email" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 col-form-label">
                        <label for="driver_id">Driver license</label>
                        <input id="driver_id" type="text" class="form-control {{ $errors->has('driver_id') ? 'is-invalid' : ''}}" name="driver_id" value="{{ old('driver_id' ) ?? $user->driver_id }}" >

                        @if ($errors->has('driver_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('driver_id') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-form-label">
                        <label for="driver_id_image">License image</label>
    
                        <input type="file" class="form-control-file" id="image" name="driver_id_image">
    
                        @if ($errors->has('driver_id_image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('driver_id_image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-md-6 col-form-label">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
                

            </div>
        </div>
    </form>
</div>
@endsection