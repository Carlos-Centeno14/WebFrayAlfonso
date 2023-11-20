<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * Class Producto
 *
 * @property $id
 * @property $Descripcion
 * @property $Precio
 * @property $RutaImg
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{

    static $rules = [
		'Descripcion' => 'required',
		'Precio' => 'required|numeric',
		'RutaImg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    protected $perPage = 10;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Descripcion','Precio','RutaImg'];

    public function storeImage($image)
    {
        $imageName = $image->getClientOriginalName();
        $image->storeAs('public/img', $imageName);
        $this->update(['RutaImg' => 'storage/img/' . $imageName]);
    }
}
