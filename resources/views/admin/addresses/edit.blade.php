@extends('adminlte::page')

@section('title', __('cruds.address.title'))

@section('content_header')
<h1 class="m-0 text-dark">{{__('cruds.address.title')}}</h1>
@stop

@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{route('admin.address.update' , $data->id)}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">{{__('cruds.address.update')}}</h3>
                    </div>
                    <div class="card-body">

                        <div class="form-group ">
                            <label for="inputName">{{__('cruds.address.fields.user')}} </label>
                            <select class="form-control select2" name="user_id">
                                @foreach($users as $user)
                                <option value="{{$user->id}}" {{old('user_id' , $user->id) == $data->user_id ? 'selected' : ''}}>{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="inputName">{{__('cruds.address.fields.district')}} En</label>
                                <input type="text" placeholder="enter" value="{{old('district_en' , $data->translate('en')->district ?? '')}}" name="district_en" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="inputName">{{__('cruds.address.fields.district')}} Ar</label>
                                <input type="text" placeholder="enter" value="{{old('district_ar' , $data->translate('ar')->district ?? '')}}" name="district_ar" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="inputName">{{__('cruds.address.fields.street')}} En</label>
                                <input type="text" placeholder="enter" value="{{old('street_en' , $data->translate('en')->street ?? '')}}" name="street_en" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="inputName">{{__('cruds.address.fields.street')}} Ar</label>
                                <input type="text" placeholder="enter" value="{{old('street_ar' , $data->translate('ar')->street ?? '')}}" name="street_ar" class="form-control">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="inputName">{{__('cruds.address.fields.floor')}}</label>
                            <input type="text" placeholder="enter" value="{{old('floor' , $data->floor)}}" name="floor" class="form-control">
                        </div>
                        <div class="form-group ">
                            <label for="inputName">{{__('cruds.address.fields.building')}}</label>
                            <input type="text" placeholder="enter" value="{{old('building' , $data->building)}}" name="building" class="form-control">
                        </div>
                        <div class="form-group ">
                            <label for="inputName">{{__('cruds.address.fields.apartment_number')}}</label>
                            <input type="text" placeholder="enter" value="{{old('apartment_number' , $data->apartment_number)}}" name="apartment_number" class="form-control">
                        </div>
                        <div class="form-group ">
                            <label for="inputName">{{__('cruds.users.fields.type')}} </label>
                            <select class="form-control " name="type">
                                <option value="home" {{old('type' , $data->type) == 'home' ? 'selected' : ''}}>{{__('cruds.home')}}</option>
                                <option value="work" {{old('type' , $data->type) == 'work' ? 'selected' : ''}}>{{__('cruds.work')}}</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="row p-3">
                        <div class="col-12">
                            <input type="submit" value="{{__('cruds.edit')}}" class="btn btn-success float-right">
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </form>
        </div>
    </div>
</section>

@endsection