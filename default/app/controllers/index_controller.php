<?php

/**
 * Controller por defecto si no se usa el routes
 * 
 */
class IndexController extends AppController
{

    public function index()
    {
        $this->menu = "home";

        if (Input::hasPost("paste")){
            Load::model("paste");
            $paste = new Paste(Input::post("paste"));

            if ($paste->save()){
                Flash::success("KuPaste creado!");
                return Redirect::to("ver/" . $paste->id);
            }
        }
    }

    public function nueva_version($id){
        $this->menu = "nueva_version";

        Load::model("paste");
        
        if (Input::hasPost("paste")){
            $paste = new Paste(Input::post("paste"));

            if ($paste->save()){
                Flash::success("KuPaste creado!");
                return Redirect::to("ver/" . $paste->id);
            }
        }else{
            if ($id !== NULL){
                $paste = new Paste();       
                $this->paste = $paste->find($id);
            }else{
                return Redirect::to("/");
            }
        }
    }

    public function ver($id){
        $this->menu = "ver";

        Load::model("paste");
        $paste = new Paste();

        $this->paste = $paste->find($id);
    }
}
