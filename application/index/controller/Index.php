<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index(){
        return $this->display(
            $this->html($this->mdToHtml(file_get_contents(env('ROOT_PATH').'README.md')))
        );
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function apiHtmlDemo()
    {
        return $this->display(file_get_contents(env('ROOT_PATH').'api-doc.html'));

    }

    public function apiMdDemo()
    {
        return $this->display(
            $this->html($this->mdToHtml(file_get_contents(env('ROOT_PATH').'api-doc.md')))
        );

    }

    private function mdToHtml(string $content){
        $parser = new \Parsedown;
        return $parser->parse($content);
    }

    private function html(string $content){
        return "<html>
                        <header>
                            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                            <link href=\"https://cdn.bootcss.com/github-markdown-css/3.0.1/github-markdown.css\" rel=\"stylesheet\">
                            <style>
                                .markdown-body {
                                    box-sizing: border-box;
                                    min-width: 200px;
                                    max-width: 980px;
                                    margin: 0 auto;
                                    padding: 45px;
                                }
                            
                                @media (max-width: 767px) {
                                    .markdown-body {
                                        padding: 15px;
                                    }
                                }
                            </style>
                        </header>
                        <body class='markdown-body'>$content<body>
                     </html>";
    }
}
