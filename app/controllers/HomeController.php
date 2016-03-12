<?php
use SisInd\Repositories\TypeRepo;
class HomeController extends BaseController {

    

    protected $typeRepo;

    public function __construct(TypeRepo $typeRepo) {
        $this->typeRepo = $typeRepo;
    }

    public function index() {
        $types = $this->typeRepo->getList();
        
        return View::make('home',  compact('types'));
    }

    public function loginAdm() {
        return View::make('admin/admin');
    }

}
