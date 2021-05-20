<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TestimonialResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        // return[
        //     'id'=> $this->id,
        //     'testimonial'=> $this->testimonial,
        //     'email_id'=> $this->email_id,
        //     'status'=> $this->status,
        //     'posting_date'=> $this->posting_date
        // ];
    }
    // public function with()
    // {
    //     return[
    //         'version'=> '1.0.0',
    //         'author_url'=> 'url(http://testapiurl.com)'
    //     ];
    // }
}
