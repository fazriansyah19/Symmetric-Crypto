@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Encrypt
                    <div class="float-right">
                        <a href="{{route('encrypt.create')}}" class="btn btn-primary btn-small">Create</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Original Message</th>
                                        <th>Encrypted Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($encrypt as $v)
                                        <tr>
                                            <td>
                                                <form method="POST" action="{{route('encrypt.delete', $v->id)}}">
                                                    @csrf
                                                    @method('delete')
                                                    <button onclick="return confirm('Anda yakin ingin menghapusnya?');" class="btn btn-danger btn-sm d-block" type="submit">Delete</button>
                                                </form>
                                            </td>
                                            <td>{{$v->original}}</td>
                                            <td>{{$v->encrypted}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    @if (count($encrypt) == 0)
                                        <tr class="text-center">
                                            <td colspan="3">Nothing encrypted data here, create encryption <a href="{{route('encrypt.create')}}">here</a></td>
                                        </tr>
                                    @endif
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
