<?php
namespace  framework\library;

class CliHelp
{
    public function newCtrl($file)
    {
        return "<?php
namespace ".MODULE."\\ctrl;

class ".$file." extends \\Calfbb
{
    public function index()
    {
        //put some
    }
}
";
    }
}