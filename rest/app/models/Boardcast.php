<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $eventid
 * @property integer $userid
 * @property integer $emailid
 * @property string $updated_at
 * @property string $created_at
 * @property Event $event
 * @property User $user
 * @property Email $email
 */
class Boardcast extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'boardcast';

    /**
     * @var array
     */
    protected $fillable = ['eventid', 'userid', 'emailid'];

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function email()
    {
        return $this->belongsTo('App\Email', 'emailid');
    }
}
