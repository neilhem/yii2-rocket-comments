<?php
namespace rocketfirm\comments\widgets;
use yii\base\Widget;

use rocketfirm\comments\models\Comment;
use rocketfirm\comments\models\CommentForm;

/**
 * Created by PhpStorm.
 * User: rocketman
 * Date: 25.04.16
 * Time: 12:18
 */
class CommentWidget extends Widget
{
    public $model;

    public $form;

    public $comments;

    public function init()
    {
        parent::init();

        $this->form = new CommentForm();
        if (Comment::checkModel($this->model)) {
            $this->comments = $this->model->getComments();
        }

        // TODO: get comments and display
    }

    public function run()
    {
        return $this->render(
            'comments', [
                'model' => $this->model,
                'comments' => $this->comments
            ]
        );
    }
}