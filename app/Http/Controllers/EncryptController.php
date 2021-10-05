<?php

namespace App\Http\Controllers;

use App\Http\Requests\EncryptRequest;
use App\Models\Encrypt;
use Illuminate\Http\Request;

class EncryptController extends Controller
{
    public function index() {
        return view('encrypt.index', [
            'encrypt' => Encrypt::orderBy('id', 'asc')->get()
        ]);
    }
    
    public function create() {
        return view('encrypt.create', [
            'encrypt' => new Encrypt
        ]);
    }

    public function store(EncryptRequest $request) {
        $attr = $request->validated();
        $encrypter = app('Illuminate\Contracts\Encryption\Encrypter');

        $attr['encrypted'] = $encrypter->encrypt(request('original'));
        Encrypt::create($attr);
        session()->flash('success', 'teks enkripsi berhasil dibuat.');
        return redirect()->route('encrypt.index');
    }

    public function destroy(Encrypt $encrypt) {
        $encrypt->delete();
        return redirect()->route('encrypt.index');
    }
}
