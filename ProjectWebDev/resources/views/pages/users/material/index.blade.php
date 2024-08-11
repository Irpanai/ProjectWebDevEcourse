@extends('layouts.app')

@section('title', 'Material')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>All Materials</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="home">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="course">Material</a></div>
                    <div class="breadcrumb-item">All Material</div>
                </div>
            </div>
            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Materials</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('material.create') }}" class="btn btn-primary">Create New Material</a>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="float-right">
                                    <form method="GET", action="{{ route('material.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="course_name'">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>

                                            <th>Material Name</th>
                                            <th>Material Title</th>
                                            <th>Description</th>
                                            <th>Material Link</th>
                                            <th>Action</th> 

                                        </tr>
                                        @foreach ($materials as $material)
                                        <tr>
                                            <td>
                                                {{ $material->course_name }}
                                            </td>
                                            <td>
                                                {{ $material->title }}
                                            </td>
                                            <td>
                                                {{ $material->description }}
                                            </td>
                                            <td>
                                                <a href="{{ $material->material_link }}">LINK</a>
                                            </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('material.edit', $material->id) }}'
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>

                                                        <form action="{{ route('material.destroy', $material->id) }}" method="POST"
                                                            class="ml-2">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}" />
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete" onclick="return confirm('Are you sure you want to delete this user?')">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $materials->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
