<?php


namespace KochRezept;

class ServerWrapper
{
    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function getGetValue(string $key)
    {
        $value = $_GET[$key];
        if (!empty($value))
        {
            return $value;
        }
        return null;
    }

    public function getPostValue(string $key)
    {
        $value = $_POST[$key];
        if (!empty($value))
        {
            return $value;
        }
        return null;
    }

    public function getRequest()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}