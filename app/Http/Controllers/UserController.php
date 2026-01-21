<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas;

class UserController extends Controller
{
    protected $userModel;
    protected $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        $users = UserModel::with('kelas')->get();
        $title = 'test';

        foreach ($users as $user) {
            if ($user->kelas && !empty($user->kelas->nama_kelas)) {
                try {
                    $decryptedName = Crypt::decryptString($user->kelas->nama_kelas);
                    $user->kelas->nama_kelas = $decryptedName;
                } catch (DecryptException $e) {
                    Log::error(
                        'Gagal dekripsi nama_kelas (ID: ' . $user->kelas->id . ') untuk user: ' . $user->id,
                        ['error' => $e->getMessage()]
                    );
                    $user->kelas->nama_kelas = '[Data Kelas Rusak]';
                }
            }
        }

        return view('list_user', compact('users', 'title'));
    }

    public function create()
    {
        $kelas = Kelas::all();

        foreach ($kelas as $kelasItem) {
            if ($kelasItem && !empty($kelasItem->nama_kelas)) {
                try {
                    $decryptedName = Crypt::decryptString($kelasItem->nama_kelas);
                    $kelasItem->nama_kelas = $decryptedName;
                } catch (DecryptException $e) {
                    Log::error(
                        'Gagal dekripsi nama_kelas (ID: ' . $kelasItem->id . ') saat memuat form create user',
                        ['error' => $e->getMessage()]
                    );
                    $kelasItem->nama_kelas = '[Data Kelas Rusak]';
                }
            }
        }

        return view('create_user', ['kelas' => $kelas]);
    }

    public function store(Request $request)
    {
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user');
    }
}
