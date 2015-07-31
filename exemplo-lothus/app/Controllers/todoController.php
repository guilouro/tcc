<?php
	class todo extends Controller
	{
		public function init($params = null)
		{
            $this->bd = new Todo_Model();
            $this->redir = new RedirectHelper();
        }

        public function index_action($params = null)
        {
            $dados['to_do'] = $this->bd->read();
			$this->view('index', $dados);
		}

        public function inserir($params = null)
        {
            if($_POST) {

                $this -> bd -> insert($_POST);
                $this -> redir -> goToAction('index');
            }

            $this->view('inserir');
        }

        public function editar($params = null)
        {
            if($_POST) {

                $this -> bd -> update($_POST, "id_todo = {$params[0]}", true);
                $this -> redir -> goToAction('index');
            }

            $todo = $this -> bd -> readLine("id_todo = {$params[0]}");
            $this->view('editar', $todo);
        }

        public function excluir($params = null)
        {

            $this -> bd -> delete("id_todo = {$params[0]}");
            $this -> redir -> goToAction('index');
        }
	}