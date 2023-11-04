<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $title = "Index";
        return view('pages/index', compact('title'));
    }
    public function about() {
        $data = array(
            'title' => 'About',
            'partners' => ['Vk', 'Facebook', 'Mail.ru']
        );
        return view('pages/about')->with($data);
    }
    public function services() {
        $data = array(
            'title' => 'About',
            'services' => ['apache2', 'nginx', 'mysql']
        );
        return view('pages/services')->with($data);
    }
}
