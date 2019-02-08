<?php namespace Lacasita\Acciones\Models;

use Model;

/**
 * Model
 */
class Colaborador extends Model
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
    public $table = 'lacasita_acciones_colaboradores';

    /* Relations */

    public $attachOne = [

      'colaborador' => "System\Models\File"

    ];


    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
