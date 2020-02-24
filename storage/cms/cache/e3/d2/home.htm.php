<?php 
class Cms5e54045e5290c584746340_1944259ae7aa0d27918e6d1573df4631Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
