<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $details
 * @property integer $organizer_id
 * @property string $startdate
 * @property string $enddate
 * @property User[] $users
 */
class Event extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'details', 'organizer_id', 'startdate', 'enddate'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
