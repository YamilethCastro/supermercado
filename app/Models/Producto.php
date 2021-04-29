<?php 
namespace App\Models;

use CodeIgniter\Model;

class Producto extends Model{
    protected $table      = 'productos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'codigo';

    protected $allowedFields = ['Nombre','Detalle','Fecha_Ingreso','Precio'];
    

   /* public function login($usuarios){
       
        $sql="select * From usuarios where usuario ='".$usuarios['usuario']."' And
        password = '".$usuarios['password']."'";

        return ($this->ExecuteArrayResults($sql));
    }*/

    public function login($usuario, $password)
    {

        $this->db->where('usuario',$usuario);
        $this->db->where('password',$password); 

        $q= $this->db->get('usuarios');
        if($q->num_rows()>0)
         {
             return true;
         }else
         {
             return false; 
         }
    }
}