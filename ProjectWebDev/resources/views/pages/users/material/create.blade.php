@extends('layouts.app')

@section('title', 'New Material')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Material</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="home">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="material">Material</a></div>
                    <div class="breadcrumb-item">All Material</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('material.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>New Material</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Material Title</label>
                                <input type="text"
                                    class="form-control @error('title')
                                    is-invalid
                                @enderror"
                                    name="title">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <label>Description</label>
                                <textarea class="form-control" data-height="150" name="description"></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Material Link</label>
                                <input type="text"
                                    class="form-control @error('material_link')
                                    is-invalid
                                @enderror"
                                    name="material_link">
                                @error('material_link')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Course Id</label>
                                <input type="text"
                                    class="form-control @error('course_id')
                                    is-invalid
                                @enderror"
                                    name="course_id">
                                @error('course_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label>Description</label>
                                <input type="text"
                                    class="form-control @error('lecturer_id')
                                    is-invalid
                                @enderror"
                                    name="lecturer_id">
                                @error('lecturer_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}
                            {{-- <div class="form-group mb-0">
                                <label>Description</label>
                                <textarea class="form-control" data-height="150" name="description"></textarea>
                            </div> --}}
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
