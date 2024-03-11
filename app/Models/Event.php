<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'address',
        'available_seats',
        'category_id',
        'user_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function reservations()
    {
        return $this->belongsToMany(User::class, 'reservations')->withPivot('number_ticket');
    }
    public function user(){
        return $this->belongsTo(User::class);
     }
}
