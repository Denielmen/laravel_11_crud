@extends('layouts.app')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Product Information
                    </div>
                    <div class="float-end">
                        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row mb-3">
                                <div class="col-md-4 text-center">
                                    <strong>Code:</strong>
                                </div>
                                <div class="col-md-8 text-start">
                                    {{ $product->code }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 text-center">
                                    <strong>Name:</strong>
                                </div>
                                <div class="col-md-8 text-start">
                                    {{ $product->name }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 text-center">
                                    <strong>Quantity:</strong>
                                </div>
                                <div class="col-md-8 text-start">
                                    {{ $product->quantity }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 text-center">
                                    <strong>Price:</strong>
                                </div>
                                <div class="col-md-8 text-start">
                                    {{ $product->price }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 text-center">
                                    <strong>Description:</strong>
                                </div>
                                <div class="col-md-8 text-start">
                                    {{ $product->description }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            @if ($product->image)
                                <div class="text-center">
                                    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                                        class="img-fluid rounded" style="max-height: 300px;">
                                </div>
                            @else
                                <div class="text-center text-muted">
                                    <i class="bi bi-image" style="font-size: 5rem;"></i>
                                    <p>No image available</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
