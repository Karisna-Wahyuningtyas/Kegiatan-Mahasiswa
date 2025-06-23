<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
	protected $table = 'barang';
	
	protected $fillable = [
		'nama_barang',
		'gambar',
		'deskripsi',
		'updated_at',
		'created_at',
		
		
		
	];

public function sewa():BelongsTo
	{
		return $this->hasMany(Sewa::class, 'id_barang');
	}
}
