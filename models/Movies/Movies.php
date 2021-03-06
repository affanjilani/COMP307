<?php

namespace app\models\Movies;

use yii\db\ActiveRecord;

class Movies extends ActiveRecord
{
    public function getDirector() {
        return $this->hasOne(get_class(new People),array('id'=>'director_id'));
    }

    public function getTags() {
        return $this->hasMany(get_class(new MoviesGenres),array('movies_id'=>'id'));
    }
}