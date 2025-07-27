<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterSignup extends Model
{
    use HasFactory;

    protected $table = 'newsletter_signup';

    protected $fillable =['email'];
    
}
