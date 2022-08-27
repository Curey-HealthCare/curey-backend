<?php

namespace App\Models;

use App\Bll\Lang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'calling_code',
        'latitude',
        'longitude',
        'active',
    ];
    protected $table = 'countries';

    public function Data(): HasMany
    {
        return $this->hasMany(CountryData::class, 'country_id', 'id');
    }

    public function translation(): HasOne
    {
        $value = $this->hasOne(CountryData::class, 'country_id', 'id')->where('lang_id', Lang::getLang());
        if (!$value) {
            $value = $this->hasOne(CountryData::class, 'country_id', 'id');
        }
        return $value;
    }
}
