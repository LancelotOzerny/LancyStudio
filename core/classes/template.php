<?php

namespace Core\Classes;

use Core\Traits\Singleton;

class Template
{
    use Singleton;

    public function IncludeHeader(string $templateName)
    {
        $path = HOME_PATH . "/public/templates/$templateName/header.php";
        if (file_exists($path))
        {
            include $path;
        }
        else
        {
            echo "Header of template '$templateName' is not founded!";
        }
    }

    public function IncludeFooter(string $templateName)
    {
        $path = HOME_PATH . "/public/templates/$templateName/footer.php";
        if (file_exists($path))
        {
            include $path;
        }
        else
        {
            echo "Footer of template '$templateName' is not founded!";
        }
    }
}