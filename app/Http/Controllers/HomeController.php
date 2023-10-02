<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarouselImage;

class HomeController extends Controller
{
    public function index()
    {
        $images = CarouselImage::all();
        return view('home.index', compact('images'));
    }

    public function create()
    {
        return view('home.create');
    }

    public function store(Request $request)
    {
        // Valide e salve a imagem no armazenamento
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Valide o tipo e tamanho da imagem
        ]);

        // Faça o upload da imagem para o diretório de armazenamento
        $imagePath = $request->file('image')->store('carousel_images', 'public');

        // Crie um novo registro no banco de dados
        CarouselImage::create([
            'image_name' => $request->file('image')->getClientOriginalName(),
            'image_path' => $imagePath,
        ]);

        return redirect()->route('home.index')
            ->with('success', 'Imagem adicionada com sucesso.');
    }

    public function destroy($id)
    {
        $image = CarouselImage::findOrFail($id);

        // Exclua o arquivo de imagem do armazenamento
        Storage::disk('public')->delete($image->image_path);

        // Exclua o registro do banco de dados
        $image->delete();

        return redirect()->route('home.index')
            ->with('success', 'Imagem excluída com sucesso.');
    }

}
