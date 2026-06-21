@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                Edit Data Merek
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.merek.update', $merek->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label class="form-label">Nama Merek</label>
                        <input type="text" name="nama_merek" class="form-control" value="{{ $merek->nama_merek }}" required>
                    </div>

                    <button type="submit" class="btn btn-warning">Update Data</button>
                    <a href="{{ route('admin.merek.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection