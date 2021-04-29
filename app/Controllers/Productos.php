<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\producto;
class Productos extends Controller{
    
    public function index() {
        
        $producto=new Producto();
        $datos['productos']=$producto->orderBy('codigo','ASC')->findAll();

        $datos['cabecera']=view('templates/cabecera');
        $datos['pie']=view('templates/piedepagina');
        return view('mostrar', $datos);
    }

    public function ingresar(){
        $datos['cabecera']=view('templates/cabecera');
        $datos['pie']=view('templates/piedepagina');
        return view('ingresar', $datos);
    }

    public function guardar(){   
        
        $productos = new producto();

        $validacion = $this->validate([
            'Nombre'=>'required|min_length[3]',
            'Detalle'=>'required|min_length[3]',
            'Fecha_Ingreso'=>'required',
            'Precio'=>'required',
        ]);
        if(!$validacion){
            $session= session();
            $session->setFlashdata('mensaje', 'Todos los campos son requeridos');

            return redirect()->back()->withInput();
            
           
        }

        $datos=[
            
            'Nombre'=>$this->request->getVar('Nombre'),
            'Detalle'=>$this->request->getVar('Detalle'),
            'Fecha_Ingreso'=>$this->request->getVar('Fecha_Ingreso'),
            'Precio'=>$this->request->getVar('Precio')
        
         ];
        print_r($datos);  

        
        $productos->insert($datos);

        echo "Datos guardados";

        return $this->response->redirect(site_url('/mostrar'));
    }

    public function borrar($codigo=null){
        $productos = new producto();

        $datosProducto= $productos->where('codigo',$codigo)->first(); 
        
        $productos->where('codigo',$codigo)->delete($codigo); 
        return $this->response->redirect(site_url('/mostrar')); 

    }
    
    public function editar($codigo=null){
        $datos['cabecera']=view('templates/cabecera');
        $datos['pie']=view('templates/piedepagina');
        //print_r($codigo); 

        $producto=new producto(); 
        $datos['producto']=$producto->where('codigo',$codigo)->first();
        
       
        
        return view('modificar',$datos);

    }

    public function actualizar(){
        $producto= new producto();
        $datos=[
            'Nombre'=>$this->request->getVar('Nombre'),
            'Detalle'=>$this->request->getVar('Detalle'),
            'Fecha_Ingreso'=>$this->request->getVar('Fecha_Ingreso'), 
            'Precio'=>$this->request->getVar('Precio')

        ];
        $codigo=$this->request->getvar('codigo');

        $validacion = $this->validate([
            'Nombre'=>'required|min_length[3]',
            'Detalle'=>'required|min_length[3]',
            'Fecha_Ingreso'=>'required',
            'Precio'=>'required',
        ]);
        if(!$validacion){
            $session= session();
            $session->setFlashdata('mensaje', 'Todos los campos son requeridos');

            return redirect()->back()->withInput();
            
        }

        $producto->update($codigo,$datos);
        return $this->response->redirect(site_url('/ingresar')); 

    }

    public function login()
    {
        if(isset($_POST['password'])){    
        $this->load->model('producto');
        if($this->producto->inicio($_POST['usuario'],$_POST['password'])){
            redirect('index');
        }else
        {
            redirect('login');
        }
        }
        $this->load-> view('login#bad-password');
    }

 
    
    
    
}