@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center text-light" style="background-color: rgb(10, 10, 87)">
                    <h3>Encrypt</h3>
                    <a href="{{route('encrypt.create')}}" class="btn btn-primary btn-small float-right">New</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col table-responsive">
                            @foreach ($encrypt as $v)
                                <table class="table table-bordered table-hover mb-4">
                                    <tbody>
                                            <tr>
                                                <td class="bg-primary text-light">Original Message</td>
                                                <td>{!! nl2br($v->original) !!}</td>
                                            </tr>
                                            <tr>
                                                <td class="bg-primary text-light">Encrypted Message</td>
                                                <td>{{$v->encrypted}}</td>
                                            </tr>
                                            <tr>
                                                <td class="bg-primary text-light">Action</td>
                                                <td>
                                                    <form method="POST" action="{{route('encrypt.delete', $v->id)}}">
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
                                @if (count($encrypt) == 0)
                                    <tr class="text-center">
                                        <td colspan="3">Nothing encrypted message here, encrypt new message <a href="{{route('encrypt.create')}}">here</a></td>
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