<?php

namespace App\Http\Controllers;

use Yajra\DataTables\DataTables;
use App\Models\LevelModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar User',
            'list' => ['Home', 'User']
        ];

        $page = (object) [
            'title' => 'Daftar user yang terdafatar dalam sistem'
        ];

        $activeMenu = 'user';

        $level = LevelModel::all();

        return view('user.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'level' => $level, 'activeMenu' => $activeMenu]);




        // $user = UserModel::with('level')->get();
        // return view('user', ['data' => $user]);

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        // $user = UserModel::create([
        //     'level_id' => 2,
        //     'username' => 'manager11',
        //     'nama' => 'Manager1',
        //     'password' => Hash::make('12345')
        // ]);

        // $user->username = 'manager12';
        // $user->save();

        // $user->wasChanged(); //true
        // $user->wasChanged('username'); //true
        // $user->wasChanged(['username', 'level_id']); //true
        // $user->wasChanged('nama'); //false
        // dd($user->wasChanged(['nama', 'username'])); //true

        // $user = UserModel::create([
        //     'level_id' => 2,
        //     'username' => 'manager55',
        //     'nama' => 'Manager55',
        //     'password' => Hash::make('12345')
        // ]);

        // $user->username = 'manager56';

        // $user->isDirty(); //true
        // $user->isDirty('username'); //true
        // $user->isDirty('nama'); //false
        // $user->isDirty(['nama', 'username']); //true

        // $user->isClean(); //false
        // $user->isClean('username'); //false
        // $user->isClean('nama'); //true
        // $user->isClean(['nama', 'username']); //false

        // $user->save();

        // $user->isDirty(); //false
        // $user->isClean(); //true
        // dd($user->isDirty());

        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ]
        // );
        // $user->save();
        // return view('user', ['data' => $user]);

        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager',
        //     ]
        // );
        // return view('user', ['data' => $user]);

        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ]
        // );
        // return view('user', ['data' => $user]);

        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager',
        //     ]
        // );
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('level_id', 2)->count();
        // // dd($user);
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        // return view('user', ['data' => $user]);

        // $user = UserModel::findOrFail(1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::findOr(20, ['username', 'nama'], function () {
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);

        // $user = UserModel::findOr(1, ['username', 'nama'], function () {
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);

        // $user = UserModel::firstwhere('level_id', 1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('level_id', 1)->first();
        // return view('user', ['data' => $user]);

        // $user = UserModel::find(1);
        // return view('user', ['data' => $user]);

        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_dua',
        //     'nama' => 'Manager 2',
        //     'password' => Hash::make('12345'),
        // ];

        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        // ];
        // UserModel::create($data);

        // $user = UserModel::all(); 
        // return view('user', ['data' => $user]);

        // tambah data user dengan Eloquent Model 
        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'Customer-1')->update($data); // update data user

        // tambah data user dengan Eloquent Model 
        // $data = [
        //     'username' => 'Customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4,
        // ];
        // UserModel::insert($data); // tambahkan data ke tabel m_user

        // coba akses model UserModel
        //     $user = UserModel::all(); // ambil semua data dari tabel m_user
        //     return view('user', ['data' => $user]);
        // }

        // public function tambah()
        // {
        //     return view('user_tambah');
        // }

        // public function tambah_simpan(Request $request)
        // {
        //     UserModel::create([
        //         'username' => $request->username,
        //         'nama' => $request->nama,
        //         'password' => Hash::make('$request->password'),
        //         'level_id' => $request->level_id
        //     ]);

        //     return redirect('/user');
        // }

        // public function ubah($id)
        // {
        //     $user = UserModel::find($id);
        //     return view('user_ubah', ['data' => $user]);
        // }

        // public function ubah_simpan($id, Request $request)
        // {
        //     $user = UserModel::find($id);

        //     $user->username = $request->username;
        //     $user->nama = $request->nama;
        //     $user->password = Hash::make('$request->password');
        //     $user->level_id = $request->level_id;

        //     $user->save();

        //     return redirect('/user');
        // }

        // public function hapus($id)
        // {
        //     $user = UserModel::find($id);
        //     $user->delete();

        //     return redirect('/user');
        // }
    }

    public function list(Request $request)
    {
        $users = UserModel::select('user_id', 'username', 'nama', 'level_id')->with('level');

        if ($request->level_id) {
            $users->where('level_id', $request->level_id);
        }

        return DataTables::of($users)
            ->addIndexColumn()
            ->addColumn('aksi', function ($user) {
                $detailBtn = '<a href="' . url('/user/' . $user->user_id) . '" class="btn btn-primary" style="width: 40px; height: 40px; margin-right: 5px;"><i class="fas fa-info-circle"></i></a>';
                $editBtn = '<a href="' . url('/user/' . $user->user_id . '/edit') . '" class="btn btn-warning" style="width: 40px; height: 40px; margin-right: 5px;"><i class="fas fa-edit"></i></a>';
                $deleteBtn = '<form class="d-inline-block" method="POST" action="' . url('/user/' . $user->user_id) . '">' . csrf_field() . method_field('DELETE') . '<button type="submit" class="btn btn-danger" style="width: 40px; height: 40px;" onclick="return confirm(\'Apakah Anda Yakin Menghapus Data Ini ? \');"><i class="fas fa-trash-alt"></i></button></form>';
                return $detailBtn . $editBtn . $deleteBtn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }


    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah User',
            'list' => ['Home', 'User', 'Tambah']
        ];

        $page = (object) [
            'title' => 'Tambah User Baru'
        ];

        $level = LevelModel::all();
        $activeMenu = 'user';

        return view('user.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'level' => $level, 'activeMenu' => $activeMenu]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:3|unique:m_user,username',
            'nama' => 'required|string|max:100',
            'password' => 'required|min:5',
            'level_id' => 'required|integer',
        ]);

        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => bcrypt($request->password),
            'level_id' => $request->level_id,
        ]);

        return redirect('/user')->with('success', 'Data user berhasil disimpan');
    }


    public function show(string $id)
    {
        $user = UserModel::with('level')->find($id);

        $breadcrumb = (object) [
            'title' => 'Detail User',
            'list' => ['Home', 'User', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail User',
        ];

        $activeMenu = 'User';

        return view('user.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'user' => $user, 'activeMenu' => $activeMenu]);
    }


    public function edit(string $id)
    {
        $user = UserModel::find($id);
        $level = LevelModel::all();

        $breadcrumb = (object) [
            'title' => 'Edit User',
            'list' => ['Home', 'User', 'Edit']
        ];

        $page = (object) [
            'title' => 'Edit user'
        ];

        $activeMenu = 'user';

        return view('user.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'user' => $user, 'level' => $level, 'activeMenu' => $activeMenu]);
    }



    public function update(Request $request, string $id)
    {
        $request->validate([
            'username' => 'required|string|min:3|unique:m_user,username,' . $id . ',user_id',
            'nama' => 'required|string|max:100',
            'password' => 'nullable|min:5',
            'level_id' => 'required|integer'
        ]);

        UserModel::find($id)->update([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => $request->password ? bcrypt($request->password) : UserModel::find($id)->password,
            'level_id' => $request->level_id
        ]);

        return redirect('/user')->with('success', 'Data user berhasil diubah');
    }


    public function destroy(string $id)
    {
        $user = UserModel::find($id);

        if (!$user) {
            return redirect('/user')->with('error', 'Data user tidak ditemukan');
        }

        try {
            $user->delete();
            return redirect('/user')->with('success', 'Data user berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/user')->with('error', 'Data user gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
        }
    }
}
