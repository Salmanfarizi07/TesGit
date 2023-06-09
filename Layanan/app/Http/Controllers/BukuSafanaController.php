<?php
  
namespace App\Http\Controllers;
  
use App\Models\bukusafana;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class BukuSafanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index(): View
    {
        
        $bukusafana = Bukusafana::latest()->paginate(5);
        
        return view('bukusafana.index',compact('bukusafana'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('bukusafana.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'IDBuku' => 'required',
            'Judul' => 'required',
            'Penulis' => 'required',
            'Penerbit' => 'required',
            'TahunTerbit' => 'required',
            'JumlahStok' => 'required',
            'DendaBuku' => 'required',
        ]);
    
        $input = $request->all();

      
        BukuSafana::create($input);
       
        return redirect()->route('bukusafana.index')
                        ->with('success','bukusafana created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(BukuSafana $bukusafana): View
    {
        return view('bukusafana.show',compact('bukusafana'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bukusafana $bukusafana): View
    {
        return view('bukusafana.edit',compact('bukusafana'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BukuSafana $bukusafana): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);
    
        $input = $request->all();
    
          
        $bukusafanazs->update($input);
      
        return redirect()->route('bukusafana.index')
                        ->with('success','bukusafana updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BukuSafana $bukusafana): RedirectResponse
    {
        $bukusafana->delete();
         
        return redirect()->route('bukusafana.index')
                        ->with('success','bukusafana deleted successfully');
    }
}