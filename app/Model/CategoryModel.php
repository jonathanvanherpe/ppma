<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;


/**
 * @property string $name
 * @property string $slug
 * @property CategoryModel $parent
 */
class CategoryModel extends Model {

    protected $table = 'categories';

}