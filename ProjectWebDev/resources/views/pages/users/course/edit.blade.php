@extends('layouts.app')

@section('title', 'Edit Course')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Course</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="home">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="course">Course</a></div>
                    <div class="breadcrumb-item">Edit Course</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('course.update', $course) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Course</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Course Name</label>
                                <input type="text"
                                    class="form-control @error('course_name')
                                    is-invalid
                                @enderror"
                                    name="course_name" value="{{ $course->course_name }}">
                                @error('course_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <label>Description</label>
                                <textarea class="form-control" data-height="150" name="description">{{ $course->description }}</textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Duration</label>
                                <input type="text"
                                    class="form-control @error('duration')
                                    is-invalid
                                @enderror"
                                    name="duration" value="{{ $course->duration }}">
                                @error('duration')
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
