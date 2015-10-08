<?php
namespace App;

use Nette;

class BasePresenter extends Nette\Application\UI\Presenter
{
    protected $db = null;

    public function __construct(Nette\Database\Context $database)
    {
        $this->db = $database;
    }
}
