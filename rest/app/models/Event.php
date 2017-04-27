<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $userid
 * @property string $name
 * @property boolean $visibilitystatus
 * @property string $registrationdate
 * @property float $price
 * @property string $info
 * @property string $registrationdeadline
 * @property string $startdate
 * @property string $enddate
 * @property boolean $starthour
 * @property boolean $startminute
 * @property boolean $endhour
 * @property boolean $endminute
 * @property string $description
 * @property string $location
 * @property string $address
 * @property string $city
 * @property integer $zipcode
 * @property string $wwwaddress
 * @property string $phone
 * @property string $email
 * @property string $eventType
 * @property boolean $guestsallowed
 * @property boolean $guestsinvitationallowed
 * @property boolean $guestbringalongs
 * @property integer $maxattendees
 * @property string $updated_at
 * @property string $created_at
 * @property User $user
 * @property Backout[] $backouts
 * @property Boardcast[] $boardcasts
 * @property Participate[] $participates
 * @property Peersapproval[] $peersapprovals
 * @property Tracker[] $trackers
 * @property Userdeficiency[] $userdeficiencies
 * @property Usersufficiency[] $usersufficiencies
 */
class Event extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'event';

    /**
     * @var array
     */
    protected $fillable = ['userid', 'name', 'visibilitystatus', 'registrationdate', 'price', 'info', 'registrationdeadline', 'startdate', 'enddate', 'starthour', 'startminute', 'endhour', 'endminute', 'description', 'location', 'address', 'city', 'zipcode', 'wwwaddress', 'phone', 'email', 'eventType', 'guestsallowed', 'guestsinvitationallowed', 'guestbringalongs', 'maxattendees'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'userid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function backouts()
    {
        return $this->hasMany('App\Backout', 'eventid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function boardcasts()
    {
        return $this->hasMany('App\Boardcast', 'eventid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function participates()
    {
        return $this->hasMany('App\Participate', 'eventid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peersapprovals()
    {
        return $this->hasMany('App\Peersapproval', 'eventid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trackers()
    {
        return $this->hasMany('App\Tracker', 'eventid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userdeficiencies()
    {
        return $this->hasMany('App\Userdeficiency', 'eventid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usersufficiencies()
    {
        return $this->hasMany('App\Usersufficiency', 'eventid');
    }
}
