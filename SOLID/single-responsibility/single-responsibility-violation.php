<?php

class Document
{
    protected $title;
    protected $content;

    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string{
        return $this->content;
    }

    public function exportHtml(): void
    {
        echo 'Exporting HTML';
    }

    public function exportPdf(): void
    {
        echo 'Exporting PDF';
    }
}
