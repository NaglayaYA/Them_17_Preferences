<?php

namespace Perspective\Them17ex1Preference\Model;

class Post extends \Perspective\DbWareHouse\Model\Post
{

    public function getProductById()
    {
        return $this->productRepository->getById($this->getIdProd() - 1);
    }

    public function getProdsPrice()
    {
        return $this->getProductById()->getPrice() * $this->getData('kol_prod') . '$';
    }
}
