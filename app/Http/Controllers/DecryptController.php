<?php

namespace App\Http\Controllers;

use App\Http\Requests\DecryptRequest;
use App\Models\Decrypt;
use Illuminate\Http\Request;

class DecryptController extends Controller
{
    public function index() {
        return view('decrypt.index', [
            'decrypt' => Decrypt::orderBy('id', 'asc')->get()
        ]);
    }
    
    public function create() {
        return view('decrypt.create', [
            'decrypt' => new Decrypt
        ]);
    }

    public function store(DecryptRequest $request) {
        $attr = $request->validated();
        $encrypter = app('Illuminate\Contracts\Encryption\Encrypter');

        $attr['decrypted'] = $encrypter->decrypt(request('original'));
        Decrypt::create($attr);
        return redirect()->route('decrypt.index')->with('decrypt', 'The message was decrypted');
    }

    public function destroy(Decrypt $decrypt) {
        $decrypt->delete();
        return redirect()->route('decrypt.index')->with('decrypt', 'The message was deleted');
    }
}