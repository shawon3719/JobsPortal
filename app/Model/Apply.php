<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Apply extends Model
{
    public $fillable =[
        'user_id',
        'job_id',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function job(){
        return $this->belongsTo(Job::class);
    }

    /*
     * Total Applies
     * @return Integer total apply model
     */
    public static function totalJobs(){
        if (Auth::check()){
            $applies = Apply::where('user_id', Auth::id())
                ->orWhere('ip_address', request()->ip())
                ->where('job_id', NULL)
                ->get();
        }else{
            $applies = Apply::where('ip_address',request()->ip())
                ->where('job_id', NULL)
                ->get();
        }
        return $applies;
    }
    /*
     * Total Items in the Apply
     * @return Integer
     */
    public static function totalItems(){
        $applies = Apply::totalJobs();
        $total_item =0;
        foreach ($applies as $apply){
            $total_item += $apply->job_quantity;
        }
        return $total_item;
    }
}
