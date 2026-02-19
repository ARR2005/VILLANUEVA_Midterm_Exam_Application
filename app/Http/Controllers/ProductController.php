<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function products()
    {
        $products = [
            'Naruto',
            'One Piece',
            'Attack on Titan',
            'My Hero Academia',
            'Demon Slayer',
            'Boku no Hero Academia',
            'Dragon Ball Z',
            'Fullmetal Alchemist',
            'Death Note',
            'Sword Art Online'
        ];

        return view('anime', ['products' => $products]);
    }

}
