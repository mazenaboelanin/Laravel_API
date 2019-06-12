<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request); //return all attributes

       return [
           'id'      => $this->id,
           'title'   => $this->title ,
            'body'   => $this->body 
       ];//return only the attributes mentioned here 
    }
    public function with($request){
        return [
            'version'  => '1.0.0',
            'author_url' => url('https://laravel.com/docs/5.5/eloquent-resources#generating-resources')
        ];
    }
}
