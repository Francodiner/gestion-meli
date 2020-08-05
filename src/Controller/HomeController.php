<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class HomeController extends AppController
    {
        public function initialize()
    {
        $this->loadModel('Vendedor');
        $this->loadModel('Producto');
        $this->loadModel('ProductoVendedor');
    }

    public function home()
    {
       
    }
    public function buscar(){
        $search = null;
        if (!empty($this->getRequest()->getQuery('search'))) {
            $search = $this->getRequest()->getQuery('search');
            $search = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $search);
            $terms = explode(' ', trim($search));

            foreach ($terms as $term) {
                $terms1[] = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $term);
                $conditions[] = array(
                    'OR' => array(
                        array(
                            'Vendedor.id' => $term,
                        ),
                    )
                );
            }
            $vendedor = $this->Vendedor->find('all', array('recursive' => -1, 'conditions' => $conditions))->contain(['Site', 'Producto'])->first();
            $vendedorProducto = $this->ProductoVendedor->find('all')->contain(['Producto.Categorias', 'Vendedor.Site'])->where(['Vendedor.id' => $search ])->all();
            $this->set(compact('vendedor', 'vendedorProducto'));
        }

        $this->set(compact('search'));
    }

       
    }
