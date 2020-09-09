<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'user_id',
        'company_id',
        'title',
        'slug',
        'description',
        'roles',
        'category_id',
        'position',
        'address',
        'number_of_vacancy',
        'experience',
        'gender',
        'salary',
        'type',
        'status',
        'last_date',
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function users()
    {
        // one job can be applied to by many users
        return $this->belongsToMany(User::class)->withTimeStamps();
    }

    public function checkApplication()
    {
        // checks if, in the job_user table, the user id == current user id, AND the job_id == current job id
        return \DB::table('job_user')->where('user_id', auth()->user()->id)->where('job_id', $this->id)->exists();
    }
}