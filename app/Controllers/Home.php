<?php

namespace App\Controllers;

class Home extends BaseController
{
    /**
     * index
     *
     * @return string
     */
    public function index(): string
    {
        return view('index');
    }
    /**
     * quemsomos
     *
     * @return void
     */
    public function quemsomos()
    {
        return view("quemsomos");
    }

    /**
     * contato
     *
     * @return void
     */
    public function contato()
    {
        $data['dados'] = [];
        return view("contato", $data);
    }

    /**
	 * Carrega a view Contato
	 *
	 * @return void
	 */
	public function contatoEnviaEmail()
	{
		$email = \Config\Services::email();
		$email->initialize(CONFIG_EMAIL);

		$post = $this->request->getPost();

        $rules = [
            'nome' => 'required|max_length[60]',
            'celular' => 'required|max_length[11]|min_length[10]',
            'email'    => 'required|max_length[100]|valid_email',
            'assunto' => 'required|max_length[255]',
            'mensagem' => 'required|min_length[10]'
        ];

        if ($this->validate($rules)) {

            //
            $email->setFrom($post['email'], $post['nome']);				// Quem está enviando o e-mail
            $email->setTo("contatofoody@gmail.com");					// Define o (s) endereço (s) de e-mail do (s) destinatário (s).
    //		$email->setCC('another@another-example.com');				// Define o (s) endereço (s) de e-mail CC (cópia)

            $email->setSubject($post['assunto']);						// Define o assunto do e-mail.
            $email->setMessage($post['mensagem']);						// Define o corpo da mensagem de e-mail:
            
            if ($email->send()) {
                return redirect()->to("/contato")->with("msgSucesso", "E-mail enviado com sucesso, aguarde em breve entraremos em contato.");
            } else {
                return redirect()->back()->with("msgError", $email->printDebugger('header'))->withInput();
            }

        } else {

            session()->setFlashdata('msgError', $email->printDebugger('header'));

            return view("contato", [
                "data"      => $post,
                'errors'    => $this->validator->getErrors()
            ]);
        }
	}

    /**
     * produtoDetalhes
     *
     * @param mixed $produto_id 
     * @return void
     */
    public function produtoDetalhes($produto_id)
    {
        return view("produto-detalhes");
    }

    /**
     * login
     *
     * @return void
     */
    public function login()
    {
        if (isset(session()->isLoggedIn)) {
            return redirect()->to('/Sistema/home');
        } else {
            return view("login");
        }
    }

    /**
     * criarNovaConta
     *
     * @return void
     */
    public function criarNovaConta()
    {
        return view("criarnovaconta");
    }

    /**
     * carrinhoCompras
     *
     * @return void
     */
    public function carrinhoCompras()
    {
        return view("carrinho-compras");
    }

    /**
     * carrinhoPagamento
     *
     * @return void
     */
    public function carrinhoPagamento()
    {
        return view("carrinho-pagamento");
    }
}
