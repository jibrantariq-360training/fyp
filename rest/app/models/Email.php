<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $email
 * @property string $title
 * @property string $message
 * @property string $sendemail
 * @property boolean $success
 * @property string $updated_at
 * @property string $created_at
 * @property Boardcast[] $boardcasts
 */
class Email extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'email';

    /**
     * @var array
     */
    protected $fillable = ['email', 'title', 'message', 'sendemail', 'success'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function boardcasts()
    {
        return $this->hasMany('App\Boardcast', 'emailid');
    }
}
