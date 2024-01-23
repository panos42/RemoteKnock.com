<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];
    protected $fillable = [
        'title', 'company', 'location', 'website', 'email',
        'tags', 'min_salary', 'max_salary', 'description',
        'listing_views', 'applications_made', 'logo', 'user_id', 'company_id',
    ];
    

    // public function scopeFilter($query, $filters) {
    //     if ($filters['tag']?? false) {
    //         $query->where('tags', 'like', '%' . $filters['tag'] . '%');
    //     }

    //     if ($filters['search'] ?? false) {
    //         $query->where('title', 'like', '%' . $filters['search'] . '%');
    //     }

    //     if ($filters['min_salary'] ?? false) {
    //                 $minSalary = (int) str_replace(',', '', $filters['min_salary']); // Convert to integer
    //                 $query->where('min_salary', '>=', $minSalary);
    //             }

    //     if ($filters['location'] ?? false) {
    //         $query->where('location', 'like', '%' . $filters['location'] . '%');
    //     }

    //     if ($filters['job_position'] ?? false) {
    //         $query->where('title', 'like', '%' . $filters['job_position'] . '%');
    //     }

    //     return $query;
    // }





    public function scopeFilter($query, $filters) {
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . $filters['tag'] . '%');
        }
    
        if ($filters['search'] ?? false) {
            $query->where(function ($subquery) use ($filters) {
                $subquery->where('title', 'like', '%' . $filters['search'] . '%')
                    ->orWhere('description', 'like', '%' . $filters['search'] . '%')
                    ->orWhere('tags', 'like', '%' . $filters['search'] . '%');
            });
        }
    
        if ($filters['min_salary'] ?? false) {
            $minSalary = (int) str_replace(',', '', $filters['min_salary']); // Convert to integer
            $query->where('min_salary', '>=', $minSalary);
        }
    
        if ($filters['location'] ?? false) {
            $query->where('location', 'like', '%' . $filters['location'] . '%');
        }
    
        if ($filters['job_position'] ?? false) {
            $query->where('title', 'like', '%' . $filters['job_position'] . '%');
        }
    
        return $query;
    }
    
    

    // Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}