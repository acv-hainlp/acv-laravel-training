<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
class Post extends Model
{
    protected $guarded =[] ;

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function scopeFilter($query,$filters) //scope -> local function, filter
    {

    	//filter by Month and Year
      if ($month = $filters['month']) {
        $query->whereMonth('created_at', Carbon::parse($month)->month ); // February = 2, January = 1
      }

      if ($year = $filters['year']){
        $query->whereYear('created_at',$year);
      }

    }
}
