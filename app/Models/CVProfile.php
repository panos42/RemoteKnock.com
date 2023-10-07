<?php

// app/Models/CVProfile.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class CVProfile extends Model
{
    use HasFactory;

    protected $table = 'cv_profiles'; // Specify the correct table name

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    


    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'Job_Experience',
        'Education',
        'Skills',
        'Languages',
        'Objective',
        // Add other fields here
    ];

    



    // Define relationships or other model methods here
}

