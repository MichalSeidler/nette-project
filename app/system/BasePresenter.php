<?php
namespace App;

use Nette;
use Saja\AssetsLoader\Assets;
use Saja\AssetsLoader\TAssetsLoader;

class BasePresenter extends Nette\Application\UI\Presenter
{
    use TAssetsLoader;

    protected $db = null;

    public function __construct(Nette\Database\Context $database)
    {
        parent::__construct();
        $this->db = $database;
    }

    public function startup(){
        parent::startup();
        $this->assetsLoader->load(Assets::BOOTSTRAP);
    }
}
