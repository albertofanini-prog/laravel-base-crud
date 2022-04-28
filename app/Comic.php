<?php

    namespace App;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;
    class Comic extends Model{
        use SoftDeletes;

        protected $fillable = [
            'title',
            'description',
            'price',
            'series',
            'sale_date',
            'type'
        ];

    };
?>