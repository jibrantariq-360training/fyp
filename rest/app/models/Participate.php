<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $eventid
 * @property integer $userid
 * @property string $updated_at
 * @property string $created_at
 * @property Event $event
 * @property User $user
 */
class Participate extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['eventid', 'userid'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo('App\Event', 'eventid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'userid');
    }
}
