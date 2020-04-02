<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CoBasicInfo extends Model
{
    protected $table = 'co_basic_infos';


    public function allCoBasicInfo(){
        $query = DB::table('co_basic_infos as co')
            ->where('status','1')
            ->selectRaw('co.*,ci.name as city_name, ca.name AS category_name')
            ->leftJoin ('co_cities as ci', 'co.CoCityId','ci.id')
            ->leftJoin ('co_categories as ca', 'co.CoCategoryId','ca.id');
        return $query->get();


    }
}
