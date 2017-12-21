<?php
namespace controllers;

use components\Controller;
use models\Gallery;

class GalleryController extends Controller
{

    public function actionIndex()
    {
        $model = new Gallery();
        $data = $model->getImages();

        $this->render('gallery.tmpl', $data);
    }

    public function actionGet($start, $qty)
    {
        $start = intval($start);
        $qty = intval($qty);
        $model = new Gallery();
        $data = $model->getMore($start, $qty);

        $this->render('thumbnails.tmpl', $data);
    }

    public function actionShow($id)
    {
        $id = intval($id);
        $model = new Gallery();
        $data = $model->getSingleImage($id);

        $this->render('show.tmpl', $data);
    }

    public function render($view, $params = [])
    {
        $params['menu']['gallery']['class'] = 'active';
        parent::render($view, $params);
    }
}