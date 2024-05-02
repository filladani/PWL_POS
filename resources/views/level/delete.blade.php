@extends('layouts.app')

@section('subtitle', 'level')
@section('content_header_title', 'level')
@section('content_header_subtitle', 'delete')

@section('content')
    <div class="container">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">delete level</h3>
            </div>

            <div class="card-body">
                <p>Apakah Anda ingin menghapus level ini?</p>
            </div>

            <div class="card-footer">
                <form method="POST" action="{{ route('level.delete', $level->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection