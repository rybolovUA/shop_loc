<?php

namespace shop\repositories\Shop;

use shop\repositories\NotFoundException;
use shop\entities\Shop\Tag;


class TagRepository
{
    public function get($id)
    {
        if (!$tag = Tag::findOne($id)){
            throw new NotFoundException('Tag is not found.');
        }
        return $tag;
    }

    public function save(Tag $tag): void
    {
        if (!$tag->save()){
            throw new \RuntimeException('Saving error.');
        }
    }

    public function remove(Tag $tag): void
    {
        if (!$tag->delete()){
            throw new \RuntimeException('Removing error.');
        }
    }
}