<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;

class Categoria extends BaseController
{
    private $CategoriaModel;

    /**
     * construct
     */
    public function __construct()
    {
        $this->CategoriaModel = new CategoriaModel();

        helper('Crud');
    }

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view(
            "admin/listaCategoria",
            $this->CategoriaModel->orderBy("descricao")->findAll()
        );
    }

    /**
     * form
     *
     * @param string $action 
     * @param int $id 
     * @return void
     */
    public function form($action, $id)
    {
        $data['action'] = $action;
        $data['dados'] = [];
        $data['erros'] = [];

        if ($action != "insert") {
            $data['dados'] = $this->CategoriaModel->find($id);
        }

        return view("admin/formCategoria", $data);
    }

    /**
     * store
     *
     * @return void
     */
    public function store()
    {
        $post = $this->request->getPost();

        if ($this->CategoriaModel->save([
            'id' => $post['id'],
            'descricao'  =>$post["descricao"],
            'statusRegistro' =>$post["statusRegistro"]
        ])) {

            return redirect()
                    ->to('/Categoria')
                    ->with('msgSucesso', "Dados atualizados com sucesso !");
        
        } else {

            return view("admin/formCategoria", [
                "action"    => $post['action'],
                "dados"     => $post,
                "erros"     => $this->CategoriaModel->errors()
            ]);
        }
    }

    /**
     * delete
     *
     * @return void
     */
    public function delete()
    {
        if ($this->CategoriaModel->delete($this->request->getPost("id"))) {
            return redirect()->to('/Categoria')->with("msgSucesso", "Dados excluídos com sucesso !");
        } else {
            return redirect()->to('/Categoria')->with("msgError", "Error ao tentar excluir dados!");
        }
    }
}