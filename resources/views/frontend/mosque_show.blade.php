@extends('frontend.layouts.app')
@section('title','Mosque Show')
@section('content')
    <div class="container-fluid my-5">
        <div class="container py-5">
            <div class="row py-5">
                <div class=" col-md-12">
                    <div class="d-flex">
                        <div class="card mb-3" style="width: 50%;">
                            <img style="height: 400px;" src="{{ asset($mosque->attachments->first()->file) }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card mb-3" style="width: 50%;">
                            <div class="card-body">
                                <h3 style="color:#12233d" class="card-title py-3 px-2">{{ $mosque->name }}</h3>
                                <div class="fs-6">
                                    <div class="py-2">
                                        <i class="fa fa-address-book px-2"></i>
                                        <span>{{ $mosque->address }}</span>
                                    </div>
                                    <div class="py-2">
                                        <i class="fa fa-building px-2"></i>
                                        <span>Establisted: {{ \Carbon\Carbon::parse($mosque->establist_year)->format('d, M, y'); }}</span>
                                    </div>
                                    <div class="py-2">
                                        <i class="fa fa-users px-2"></i>
                                        <span>Total Commitee Member: {{ $mosque->total_commitee_members }}</span>
                                    </div>
                                    <div class="py-2">
                                        <i class="fa fa-map-marker-alt px-2"></i>
                                        <a target="_blank" href="{{ $mosque->google_map_url }}">{{ $mosque->google_map_url }}</a>
                                    </div>
                                </div>

                                <p class="card-text p-2"><small class="text-body-secondary">Last updated {{ $mosque->updated_at->diffForHumans() }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
