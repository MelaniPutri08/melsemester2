// app/Http/Controllers/UserController.php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_user = User::all();
        return view('user.index', ['list_user' => $list_user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tampilkan form untuk membuat user baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi dan simpan data user baru
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // Tampilkan detail user tertentu
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // Tampilkan form untuk mengedit user
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Validasi dan perbarui data user
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Hapus data user
    }
}
