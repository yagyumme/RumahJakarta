<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;
    
    protected $guarded = [
        'id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query)
    {
        if(request('search')) {
            $query  ->where('title', 'like', '%' . request('search') . '%')
                    ->orWhere('area', 'like', '%' . request('search') . '%')
                    ->orWhere('daerah', 'like', '%' . request('search') . '%')
                    /* ->orWhere('deskripsi', 'like', '%' . request('search') . '%') */
                    ;
        }
        
    }    

    public function scopeFilter2($query)
    {
        if(request('area')) {
            $query  ->where('area', 'like', '%' . request('area') . '%'); /* ini bagian query yang diterapin ke all post atau... posts.blade */
        }
        if(request('category')){
            $query->where('category_id', 'like', '%'.request('category'). '%'); /* klo lu liat, ini di bagian query... ada.. where category_id like '% <<< ini query normalnya */
            /* di laravel klo mau panggil si request... itu jd .request('id') */
        }
        if(request('hmax')){
            $query  ->where('harga', '<=', request('hmax'));
        }
        if(request('hmin')){
            $query  ->where('harga', '>=', request('hmin'));
        }
        if(request('ltmax')){
            $query  ->where('luastanah', '<=', request('ltmax'));
        }
        if(request('ltmin')){
            $query  ->where('luastanah', '>=', request('ltmin'));
        }
        if(request('lbmax')){
            $query  ->where('luasbangunan', '<=', request('lbmax'));
        }
        if(request('lbmin')){
            $query  ->where('luasbangunan', '>=', request('lbmin'));
        }
        if(request('jkmrtidur')){
            $query->where('jktidur', '>=', request('jkmrtidur'));
        }
        if(request('jkmrmandi')){
            $query->where('jkmandi', '>=', request('jkmrmandi'));
        }
    }
     
    public function scopeFilter3($query)
    {
        $query->where('slug', 'like', '%' . request('test1') . '%');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
