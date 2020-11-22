<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class ArticleResource extends JsonResource
{
    public static $wrap = 'article';
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'preview' => substr($this->body, 0, 100),
            'slug' => $this->slug,
            'tags' => json_decode($this->tags),
            'body' => $this->body,
            'author' => $this->user_id,
            'created_at' => date('jS F, Y', strtotime($this->created_at))
        ];
    }
}