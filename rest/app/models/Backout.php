<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $eventid
 * @property integer $userid
 * @property string $description
 * @property string $updated_at
 * @property string $created_at
 * @property Event $event
 * @property User $user
 */
class Backout extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'backout';

    /**
     * @var array
     */
    protected $fillable = ['eventid', 'userid', 'description'];

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
