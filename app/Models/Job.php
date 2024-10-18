<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Job extends Model {
    use HasFactory;

    protected $table = 'job_listings';

    protected $guarded = []; //Використовується $guarded, коли ви хочете вказати поля, які мають бути захищені від масового призначення, а всі інші поля дозволені.

//    protected $fillable = ['employer_id', 'title', 'salary']; //Використовується $fillable, коли ви хочете явно вказати, які поля дозволені для масового призначення.

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }


}
