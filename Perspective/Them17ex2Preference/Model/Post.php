<?php
namespace Perspective\Them17ex2Preference\Model;

class Post extends \Perspective\DbScripts\Model\Post
{
    public function getPrefName()
    {
        return 'magento2_' . $this->getData('name');
    }

    public function getShortUrl()
    {
        $str = (strlen($this->getUrlKey()) > 30) ? 
        substr($this->getUrlKey(),0,30) . substr($this->getUrlKey(),45,6) : $this->getUrlKey();
        
        return $str;
    }
}
