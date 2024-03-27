<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;
class Developer extends Model
{
    use HasFactory;

    protected $guard = [];

    static public function getRecord($request)
    {
        $return = self::select('developers.*')->orderBy('id', 'desc');

        if (!empty(Request::get('id'))) {
            $return = $return->where('developers.id', '=', Request::get('id') . '%');
        }
        if (!empty(Request::get('name'))) {
            $return = $return->where('developers.name', 'like', '%' . Request::get('name'));
        }
        if (!empty(Request::get('designation'))) {
            $return = $return->where('developers.designation', 'like', '%' . Request::get('designation'));
        }
        $return = $return->paginate(5);
        return $return;
    }
}
