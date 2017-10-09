<?php
namespace  Framework\library;

class cliHelp
{
    public function newCtrl($file)
    {
        return "<?php
namespace ".MODULE."\\ctrl;

class ".$file." extends \\niubaobao
{
    public function index()
    {
        //put some
    }
}
";
    }
}