<?php

namespace App\Bll;

use App\Models\Language;

class Lang
{
    public static function getLanguages()
    {
        return Language::query()
            ->where('active', true)
            ->get();
    }

    public static function getLang()
    {
        $lang = session('lang');
        if (!$lang) {
            $lang = 1;
            session(['lang' => $lang]);
        }
        return $lang;
    }
}
