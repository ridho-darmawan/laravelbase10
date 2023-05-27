<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory, SoftDeletes, Uuids;

    protected $table = 'barangs';
    protected $primaryKey = 'id';
    protected $fillable=['nama_barang','kode_barang'];
}
