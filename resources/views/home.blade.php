@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-light" style="background-color: rgb(10, 10, 87)">
                    <h3>Symmetric Crypto Encryption (SCE)</h3>
                </div>

                <div class="card-body text-justify">
                    This app using AES-256-CBS. AES is a symmetric key cipher. This means the same secret key is used for both encryption and decryption, and both the sender and receiver of the data need a copy of the key.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
