@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-light" style="background-color: rgb(10, 10, 87)">
                    <h3>New Encrypt</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('encrypt.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label class="col-form-label">Original Message</label>
                            </div>
                            <div class="col-md-10">
                                <textarea name="original" id="original" class="form-control @error('original') is-invalid @enderror" value="{{ old('original') }}"></textarea>
                                @error('original')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i> Encrypt</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
