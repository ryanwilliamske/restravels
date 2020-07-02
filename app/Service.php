<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Laravel\Scout\Searchable;

class Service extends Model
{
    use SearchableTrait, Searchable;


    protected $guarded = [];
    
    protected $searchable = [
    /**
     * Columns and their priority in search results
     * Columns with higher values are more important
     * Columns with equal values have equal importance
     */


        'columns' => [
          'services.service_name' => 10,
          'services.service_descript' => 5  
        ],
    ];

    /**
     * This allows for algolia to easily identify the indice created
     * on the algolia platfrom and sends your database fields
     * to this algolia indice
     */
    public function searchableAs()
    {
      return 'service';
    }
}
