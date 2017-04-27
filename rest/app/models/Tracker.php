<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $userid
 * @property integer $eventid
 * @property integer $hours
 * @property string $updated_at
 * @property string $created_at
 * @property User $user
 * @property Event $event
 * @property Trackerlog[] $trackerlogs
 */
class Tracker extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tracker';

    /**
     * @var array
     */
    protected $fillable = ['userid', 'eventid', 'hours'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'userid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo('App\Event', 'eventid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trackerlogs()
    {
        return $this->hasMany('App\Trackerlog', 'trackerid');
    }
}
