<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $IdClient
 * @property string $NomClient
 * @property string $PrenomClient
 * @property string $Adresse
 * @property string $DateNaissClient
 * @property string $ContactClient
 * @property string $EmailClient
 * @property string $updated_at
 * @property string $created_at
 * @property Reservation[] $reservations
 */
class Client extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'client';

    /**
    *    @var string 

    */

    protected $softDelete=true;

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'IdClient';

    /**
     * @var array
     */
    protected $fillable = ['NomClient', 'PrenomClient', 'Adresse', 'DateNaissClient', 'ContactClient', 'EmailClient', 'updated_at', 'created_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservations()
    {
        return $this->hasMany('App\Reservation', 'IdClient', 'IdClient');
    }
}
