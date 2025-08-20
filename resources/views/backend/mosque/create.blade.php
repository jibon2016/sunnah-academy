@extends('backend.layouts.app')
@section('title', 'Create Mosque')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Create Mosque</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="#">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('mosque.index') }}">Mosques</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Create Mosques</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">মসজিদের তথ্য </div>
                        </div>

                        <form method="POST" action="{{ route('mosque.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row px-3">
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} row">
                                        <label for="name" class="col-sm-2 col-form-label">মসজিদের নাম <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="name" placeholder="মসজিদের নাম লিখুন ">
                                            <span id="name-error" class="help-block text-danger">{{ $errors->first('name') }}</span>
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }} row">
                                        <label for="address" class="col-sm-2 col-form-label">মসজিদের ঠিকানা  <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ old('address') }}" name="address" class="form-control" id="address" placeholder="মসজিদের ঠিকানা লিখুন ">
                                            <span id="address-error" class="help-block text-danger">{{ $errors->first('address') }}</span>
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('google_map_url') ? 'has-error' : '' }} row">
                                        <label for="google_map_url" class="col-sm-2 col-form-label">গুগল ম্যাপ লিংক <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ old('google_map_url') }}" name="google_map_url" class="form-control" id="google_map_url" placeholder="গুগল মাপের শেয়ার লিংক পেস্ট করুন ">
                                            <span id="google_map_url-error" class="help-block text-danger">{{ $errors->first('google_map_url') }}</span>
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('establist_year') ? 'has-error' : '' }} row">
                                        <label for="establist_year" class="col-sm-2 col-form-label">প্রতিষ্ঠার তারিখ <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="date" value="{{ old('establist_year') }}" name="establist_year" class="form-control" id="establist_year" placeholder="প্রতিষ্ঠার তারিখ লিখুন">
                                            <span id="establist_year-error" class="help-block text-danger">{{ $errors->first('establist_year') }}</span>
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('total_commitee_members') ? 'has-error' : '' }} row">
                                        <label for="total_commitee_members" class="col-sm-2 col-form-label">মোট কমিটির সদস্য <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="number" value="{{ old('total_commitee_members') }}" name="total_commitee_members" class="form-control" id="total_commitee_members" placeholder="মোট কমিটির সদস্য লিখুন">
                                            <span id="total_commitee_members-error" class="help-block text-danger">{{ $errors->first('total_commitee_members') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <a href="{{ route('mosque.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
