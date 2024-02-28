<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * これらの属性は、createやupdateメソッドで一括割り当てが可能です。
     * マスアサインメント脆弱性からアプリケーションを保護するために使用します。
     *
     * @var array<string>
     */
    protected $fillable = ['title', 'description'];
}
