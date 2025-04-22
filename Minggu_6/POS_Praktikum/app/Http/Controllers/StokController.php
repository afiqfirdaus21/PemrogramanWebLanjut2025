namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index()
    {
        $page = (object)[
            'title' => 'Data Stok Barang'
        ];
        $barang = \App\Models\Barang::all(); // kalau kamu butuh data barang buat filter

        return view('stok.index', compact('page', 'barang'));
    }
}
