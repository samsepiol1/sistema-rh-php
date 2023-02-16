namespace App\Entity;

class vaga{
    public $id;

    public $titulo;

    public $descricao;

    public $ativo;

    public $data;


    public function cadastrar(){
        $this -> data = date('Y-m-d H:i:s');
        $obDatabase = new Database('rh');

    }
}