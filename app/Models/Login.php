<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Login extends Authenticatable
    {
        use HasFactory, SoftDeletes;

        protected $fillable = [
            'email',
            'password',
        ];

    }
