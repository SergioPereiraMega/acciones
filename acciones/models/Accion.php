<?php namespace Lacasita\Acciones\Models;

use Model;
use Carbon;

/**
 * Model
 */
class Accion extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'lacasita_acciones_acciones';

    /* Relations */

    public $attachOne = [

      'foto' => "System\Models\File"

    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

}
