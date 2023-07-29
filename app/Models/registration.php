<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Registration extends Model implements Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'CName',
        'CCode',
        'Location',
        'GPSAddress',
        'District',
        'password',
        'Area',
    ];

    public function getAuthIdentifierName()
    {
        return 'id'; // Replace 'id' with the actual primary key column name in your table
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

}
