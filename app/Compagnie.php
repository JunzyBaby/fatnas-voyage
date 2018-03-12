<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $IdCompagnie
 * @property string $CodeCompagnie
 * @property string $NomCompagbie
 * @property string $logo
 * @property string $updated_at
 * @property string $created_at
 * @property Vol[] $vols
 */
class Compagnie extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'compagnie';

    /**
    *    @var string 

    */

    protected $softDelete=true;

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'IdCompagnie';

    /**
     * @var array
     */
    protected $fillable = ['CodeCompagnie', 'NomCompagnie', 'logo', 'updated_at', 'created_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vols()
    {
        return $this->hasMany('App\Vol', 'IdCompagnie', 'IdCompagnie');
    }
}
