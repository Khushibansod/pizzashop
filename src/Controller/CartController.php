<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cart Controller
 *
 * @property \App\Model\Table\CartTable $Cart
 * @method \App\Model\Entity\Cart[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CartController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

     public function checkout(){
    
        $cartItems = json_decode($this->request->getData('cart_items'), true);
        //pr($cartItems);die();
    
       
        //$this->set('cartItems', $cartItems);
    
    
        $cartItems = json_decode($this->request->getData('cart_items'), true);
        
        // Encode cartItems as a JSON string for the URL
        $cartItemsJson = json_encode($cartItems);
        
        // Redirect to the next action with cartItems as a query parameter
        return $this->redirect(['action' => 'nextAction', '?' => ['cartItems' => $cartItemsJson]]);
    
        
        
    }
    public function nextAction() {
        // Retrieve cartItems from query parameter and decode it
        $cartItemsJson = $this->request->getQuery('cartItems');
        $cartItems = json_decode($cartItemsJson, true);
        //pr($cartItems);die();

    
        // Assuming $this->Cart is the Cart model
        $this->loadModel('Cart');
    
        // Assuming your Cart model has fields like 'product_id', 'quantity', etc.
        $errors = [];
        foreach ($cartItems as $item) {
            $cartData = [
                'product_id' => $item['id'],
                'name' => $item['name'],
                'description' => $item['description'],
                'size' => $item['size'],
                'crust' => $item['crust'],
                'quantity' => $item['quantity'],
                'image' => $item['image'],
                // 'user_id' => $this->Auth->user('id'), // Assuming you're storing the user ID as well
            ];
    
            // Create a new entity and patch in the data
            $cartEntity = $this->Cart->newEntity($cartData);
    
            // Save each cart item to the database
            if ($this->Cart->save($cartEntity)) {
                // Data saved successfully
                $this->Flash->success('Product added to cart!');
            } else {
                // Failed to save data, collect error messages
                $errors[] = 'Failed to add product ' . $item['name'] . ' to cart. Please try again.';
            }
        }
    
        if (!empty($errors)) {
            // Display error messages if there are any
            foreach ($errors as $error) {
                $this->Flash->error($error);
            }
        } else {
            // Redirect to checkout if all items are saved successfully
            return $this->redirect(['controller' => 'Cart', 'action' => 'display']);
        }
    
        // Optionally, you can set the cartItems variable to the view
        $this->set('cartItems', $cartItems);
    }

    public function display(){
        $query=$this->Cart->find('all');
        $this->set('cartItems',$query);

    }
    
    
    
    
    
    // public function checkout()
    // {
    //     if ($this->request->is('post')) {
    //         // Load the Cart model
    //         $this->loadModel('Cart');
    
    //         // Get form data
    //         $products = $this->request->getData();
    //         //pr($products);die();
           
    //         // Calculate total price
    //         $totalPrice = $products['crust'] +$products['size'];
    
    //         // Prepare cart data
    //         $cartData = [
    //             'id' => $products['id'],
    //             'image' => $products['image'],
    //             'name' => $products['name'],
    //             'size' => $products['size'],
    //             'crust' => $products['crust'],
    //             'description' => $products['description'],
    //             'price' => $totalPrice,
    //         ];
    
    //         //Create a new entity
    //         $cart = $this->Cart->newEntity($cartData);
    
    //         // Save the entity to the database
    //         // if ($this->Cart->save($cart)) {
    //         //     // Data saved successfully
    //         //     $this->Flash->success('Product added to cart!');
    //         //     return $this->redirect(['controller' => 'Cart', 'action' => 'checkout']);
    //         // } else {
    //         //     // Failed to save data
    //         //     $this->Flash->error('Failed to add product to cart. Please try again.');
    //         // }
    //     }
    //     $query=$this->Cart->find('all');
    //     $this->set('cartItems',$query);
    // }
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products'],
        ];
        $cart = $this->paginate($this->Cart);

        $this->set(compact('cart'));
    }

    /**
     * View method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cart = $this->Cart->get($id, [
            'contain' => ['Products'],
        ]);

        $this->set(compact('cart'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cart = $this->Cart->newEmptyEntity();
        if ($this->request->is('post')) {
            $cart = $this->Cart->patchEntity($cart, $this->request->getData());
            if ($this->Cart->save($cart)) {
                $this->Flash->success(__('The cart has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cart could not be saved. Please, try again.'));
        }
        $products = $this->Cart->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('cart', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cart = $this->Cart->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cart = $this->Cart->patchEntity($cart, $this->request->getData());
            if ($this->Cart->save($cart)) {
                $this->Flash->success(__('The cart has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cart could not be saved. Please, try again.'));
        }
        $products = $this->Cart->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('cart', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cart = $this->Cart->get($id);
        if ($this->Cart->delete($cart)) {
            $this->Flash->success(__('The cart has been deleted.'));
        } else {
            $this->Flash->error(__('The cart could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
