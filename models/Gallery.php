<?php
/**
 * Created by PhpStorm.
 * User: ball
 * Date: 13.12.2017
 * Time: 18:43
 */

namespace models;

use components\Model;
class Gallery extends Model
{
    public function __construct()
    {
        $this->title = 'Галерея';
        $this->table = 'gallery';
    }
    public function getImages()
    {
        $qty=5;
        $more = false;

        $thumbnails = $this->select([
            'orderby' => 'views DESC',
            'limit' => '0, '.  $qty,
        ]);

        if($this->countAll() > $qty) $more = true;

        return [
            'thumbnails' => $thumbnails,
            'more' => $more,
            'title' => $this->title
        ];
    }

    public function getMore($start = 0, $qty = 5)
    {
        $more = false;

        $thumbnails = $this->select([
            'orderby' => 'views DESC',
            'limit' => $start .', '.  $qty,
        ]);

        if($this->countAll() > $qty + $start) $more = true;
        return [
            'thumbnails' => $thumbnails,
            'more' => $more
        ];
    }

    public function getSingleImage($id)
    {
        $this->update($id, 'views = views + 1');

        $img = $this->find('id', $id);

        return [
            'img' => $img,
            'title' => $this->title.' - '.$img['name']
        ];
    }
}