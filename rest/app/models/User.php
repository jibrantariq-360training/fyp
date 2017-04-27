<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $country
 * @property string $businessphone
 * @property string $homephone
 * @property string $mobilephone
 * @property string $companyname
 * @property string $website
 * @property string $address
 * @property string $city
 * @property boolean $zipcode
 * @property string $sendemail
 * @property string $cnic
 * @property string $username
 * @property string $password
 * @property string $updated_at
 * @property string $created_at
 * @property Approval[] $approvals
 * @property Approval[] $approvals
 * @property Backout[] $backouts
 * @property Boardcast[] $boardcasts
 * @property Category[] $categories
 * @property Event[] $events
 * @property Participate[] $participates
 * @property Peersapproval[] $peersapprovals
 * @property Peersapproval[] $peersapprovals
 * @property Tracker[] $trackers
 * @property Userdeficiency[] $userdeficiencies
 * @property Usersufficiency[] $usersufficiencies
 */
class User extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'user';

    /**
     * @var array
     */
    protected $fillable = ['firstname', 'lastname', 'email', 'country', 'businessphone', 'homephone', 'mobilephone', 'companyname', 'website', 'address', 'city', 'zipcode', 'sendemail', 'cnic', 'username', 'password'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function approvals()
    {
        return $this->hasMany('App\Approval', 'userid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function approvalsBy()
    {
        return $this->hasMany('App\Approval', 'approvalby');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function backouts()
    {
        return $this->hasMany('App\Backout', 'userid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function boardcasts()
    {
        return $this->hasMany('App\Boardcast', 'userid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany('App\Category', 'userid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events()
    {
        return $this->hasMany('App\Event', 'userid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function participates()
    {
        return $this->hasMany('App\Participate', 'userid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peersApprovalsUser1()
    {
        return $this->hasMany('App\Peersapproval', 'userid1');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peersApprovalsUser2()
    {
        return $this->hasMany('App\Peersapproval', 'userid2');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trackers()
    {
        return $this->hasMany('App\Tracker', 'userid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userdeficiencies()
    {
        return $this->hasMany('App\Userdeficiency', 'userid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usersufficiencies()
    {
        return $this->hasMany('App\Usersufficiency', 'userid');
    }
}
