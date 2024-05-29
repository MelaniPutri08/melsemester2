// app/Http/Controllers/UnitKerjaController.php
namespace App\Http\Controllers;

use App\Models\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function index()
    {
        $list_unit_kerja = UnitKerja::all();
        return view('unit-kerja.index', ['list_unit_kerja' => $list_unit_kerja]);
    }
}
