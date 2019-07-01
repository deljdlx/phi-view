<?php

namespace Phi\View;


use Phi\HTML\Page;
use Phi\Routing\Response;

class View
{

    /**
     * @var Page
     */
    private $page;


    /**
     * @var Response
     */
    private $response;


    public function __construct()
    {
        $this->page = new Page();
    }

    public function setResponse(Response $response)
    {
        $this->response = $response;
        return $this;
    }


    public function html($html, $parse = false)
    {
        $this->page->setHTML($html, $parse);
        return $this;
    }


    /**
     * @return Page
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return \Phi\HTML\Element
     */
    public function getDom()
    {
        return $this->page->dom;
    }


    /**
     * @param $query
     * @return \Phi\HTML\Collection
     */
    public function find($query)
    {
        return $this->getDom()->find($query);
    }



    /**
     * @return mixed|\Phi\HTML\Element
     */
    public function getBody()
    {
        return $this->getDom()->body;
    }


    public function setTitle($title)
    {
        $this->page->dom->head->title->html($title);
        return $this;
    }

    public function setMainContent($content)
    {
        $this->page->setMainContent($content);
        return $this;
    }


    public function render()
    {
        return $this->page->render();
    }



}


