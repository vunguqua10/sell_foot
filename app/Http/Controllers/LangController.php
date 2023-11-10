<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LangController extends Controller
{
    public function changeLanguage($language)
    {
    $availableLanguages = ['en', 'vi'];

    
    if (in_array($language, $availableLanguages)) {
        App::setLocale($language);
        session()->put('locale', $language);
    }
    return  redirect('/home'); 
}
}
