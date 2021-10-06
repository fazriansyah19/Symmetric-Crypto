@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header text-center text-light" style="background-color: rgb(10, 10, 87)">
                    <h3>Decrypt</h3>
                    <div class="float-right">
                        <a href="{{route('decrypt.create')}}" class="btn btn-primary btn-small">New</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col table-responsive">
                            @foreach ($decrypt as $v)
                                <table class="table table-bordered mb-4">
                                    <tbody>
                                            <tr>
                                                <td class="bg-primary text-light">Encrypted Message</td>
                                                <td>{{ $v->original }}</td>
                                            </tr>
                                            <tr>
                                                <td class="bg-primary text-light">Decrypted Message</td>
                                                <td>{!! nl2br($v->decrypted) !!}</td>
                                            </tr>
                                            <tr>
                                                <td class="bg-primary text-light">Action</td>
                                                <td>
                                                    <form method="POST" action="{{route('decrypt.delete', $v->id)}}">
                                                        @csrf
                                                        @method('delete')
                                                        <button onclick="return confirm('Anda yakin ingin menghapusnya?');" class="btn btn-danger btn-sm d-block" type="submit">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            @endforeach
                            <p class="text-secondary">
                                @if (count($decrypt) == 0)
                                    <tr class="text-center">
                                        <td colspan="3">Nothing decrypted data here, create decryption <a href="{{route('decrypt.create')}}">here</a></td>
                                    </tr>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
