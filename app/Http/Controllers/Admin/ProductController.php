<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.product', compact('products'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'kode' => 'required|unique:products,kode',
                'nama_produk' => 'required',
                'stok' => 'required|integer',
                'harga' => 'required|integer',
                'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
            ]);

            $gambar = null;
            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar')->store('produk', 'public');
            }

            Product::create([
                'kode' => $request->kode,
                'nama_produk' => $request->nama_produk,
                'stok' => $request->stok,
                'harga' => $request->harga,
                'gambar' => $gambar
            ]);

            return redirect()->route('product.index')->with('success', 'Produk berhasil disimpan');

        } catch (\Exception $e) {
            // jika gagal simpan
            return redirect()->back()->with('error', 'Gagal menyimpan produk: '.$e->getMessage())
                                    ->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($request->hasFile('gambar')) {
            if ($product->gambar) {
                Storage::disk('public')->delete($product->gambar);
            }
            $product->gambar = $request->file('gambar')->store('produk', 'public');
        }

        $product->update([
            'kode' => $request->kode,
            'nama_produk' => $request->nama_produk,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'gambar' => $product->gambar
        ]);

        return back()->with('success', 'Produk berhasil diupdate');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // hapus gambar jika ada
        if ($product->gambar) {
            Storage::disk('public')->delete($product->gambar);
        }

        $product->delete();

        return redirect()->route('product.index')
            ->with('success', 'Produk berhasil dihapus');
    }

}