<?php
declare(strict_types=1);

namespace App\Controller;

use Exception;
use Throwable;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */

class OrdersController extends AppController
{

    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     * 
     */
    
     public function confirmOrder(){
        $totalPrice = $this->request->getData('totalPrice');
        $this->set('totalPrice', $totalPrice);
    
        if ($this->Authentication->getResult()->isValid()) {
            // Redirect to the confirm action with the total price as a parameter
            return $this->redirect(['controller' => 'Orders', 'action' => 'confirm', '?' => ['totalPrice' => $totalPrice]]);
        } else {
            // Redirect to the signup action if authentication fails
            return $this->redirect(['controller' => 'Users', 'action' => 'signup']);
        }

      } 
    
      //return $this->redirect(['controller' => 'Orders', 'action' => 'confirm', '?' => ['totalPrice' => $totalPrice]]);

     


     public function successful()
     { 
        
     
     }
     
     public function unsuccessful()
     {
         // Redirect to the signup page
         
     }

     public function confirm(){
        $totalPrice = $this->request->getQuery('totalPrice');
        // pr($totalPrice);die();
    
        // Get the authenticated user's ID
        $user = $this->Authentication->getIdentity();
        $userId = $user->id;
    
        // Prepare data to save into the orders table
        $orderData = [
            'user_id' => $userId,
            'amount' => $totalPrice,
            // Add other fields as needed
        ];
    
        // Save the order
        $order = $this->Orders->newEntity($orderData);
        if ($this->Orders->save($order)) {
            // Order saved successfully, now clear the cart
            $this->clearCart($userId);
    
            // Redirect to the bill action after successful order placement
            $this->Flash->success(__('Your order has been placed successfully.'));
            return $this->redirect(['action' => 'bill']);
        } else {
            // Handle failed save
            $this->Flash->error(__('Unable to place your order. Please try again.'));
            return $this->redirect(['controller' => 'Cart', 'action' => 'checkout']);
        }
    }
    
    private function clearCart($userId) {
        // Assuming you have a Cart model and it's properly associated
        $this->loadModel('Carts');
    
        // Delete all cart items for the authenticated user
        $this->Carts->deleteAll(['user_id' => $userId]);
    }
    
     
    //  public function confirm(){
    //     $totalPrice = $this->request->getQuery('totalPrice');
    //     //pr($totalPrice);die();

    //     // Get the authenticated user's ID
    //     $user = $this->Authentication->getIdentity();
    //     $userId = $user->id;
    
    //     // Prepare data to save into the orders table
    //     $orderData = [
    //         'user_id' => $userId,
    //         'amount' => $totalPrice,
    //         // Add other fields as needed
    //     ];
    
    //     // Save the order
    //     $order = $this->Orders->newEntity($orderData);
    //     if ($this->Orders->save($order)) {
    //         // Redirect to the bill action after successful order placement
    //         $this->Flash->success(__('Your order has been placed successfully.'));
    //         return $this->redirect(['action' => 'bill']);
    //     } else {
    //         // Handle failed save
    //         $this->Flash->error(__('Unable to place your order. Please try again.'));
    //         return $this->redirect(['controller' => 'Cart', 'action' => 'checkout']);
    //     }
    //  }
         
     
    //      public function confirm(){
            
           
    // {
    //     $totalPrice = $this->request->getData('totalPrice');
    //     //pr($totalPrice);die();
    //     $this->set('totalPrice', $totalPrice);
        
        
        
    //    // $cartItems = unserialize($this->request->getData('cartItems'));
       
        
        
    //     // Get user ID

    //     $this->loadModel('Orders');

    //     $user=$this->Authentication->getIdentity();
    //     $userId=$user->id;
        

    //     //$userIds = $this->Auth->user('id'); // Assuming you are using authentication
       
        
    //     // Prepare data to save into the orders table
    //     $orderData = [
    //         'user_id' => $userId,
    //         'amount' => $totalPrice,
    //         // Add other fields as needed
    //     ];

        
    //     // Save the order
    //     $order = $this->Orders->newEntity($orderData);
    //     // pr($order);die;
    //     if ($this->Orders->save($order)) {
    //         // Save order items
    //         // foreach ($cartItems as $item) {
    //         //     $orderItemData = [
    //         //         'order_id' => $order->id,
    //         //         'name' => $item['name'],
                    
    //         //         // Add other fields as needed
    //         //     ];
    //         //     $orderItem = $this->Orders->OrderItems->newEntity($orderItemData);
    //         //     $this->Orders->OrderItems->save($orderItem);
    //         // }
            
    //         // Redirect or perform other actions after successful order placement
    //         $this->Flash->success(__('Your order has been placed successfully.'));
    //         return $this->redirect(['action' => 'bill']);
    //     } else {
    //         // Handle failed save
    //         $this->Flash->error(__('Unable to place your order. Please try again.'));
    //         return $this->redirect(['controller' => 'Cart', 'action' => 'checkout']);// Redirect back to the cart page or handle as needed
    //     }
    // }
    //      }
         public function bill(){
            //pr('Saved');die();
            $latestOrder = $this->Orders->find()
            ->contain(['Users' => function ($q) {
                return $q->select(['name', 'lastname', 'address', 'email', 'phone_number', 'city', 'state', 'zip']);
            }])
            ->select(['id', 'user_id', 'amount', 'date'])
            ->order(['Orders.date' => 'DESC'])
            ->first();
    
        $this->set('latestOrder', $latestOrder);

         }


// public function confirmOrder() {
//     $formData = $this->request->getData();
//     //pr($formData['cartItems']);die;
//     // Unserialize the value of cartItems field
//     $cartItems = ($formData['cartItems']);
//     // pr($cartItems);die;
//     $this->request->getSession()->write('cartItems', $cartItems);


//     if ($this->Authentication->getResult()->isValid()) {
//         // User is logged in, redirect to successful page
        
        
//         return $this->redirect(['action' => 'successful']);
       
    
//     } else {
//         // User is not logged in, redirect to unsuccessful page
       
//         return $this->redirect(['action' => 'unsuccessful']);
       
//     }

//      // Retrieve cart items from form data
//     // Perform any other necessary actions
//     $this->set(compact('cartItems'));

    
// }

// public function successful()
//     {
//        pr('Succesfull');die;

//     }

//     public function unsuccessful()
//     {
//         pr('UnSuccesfull');die;
        

//     }














    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $orders = $this->paginate($this->Orders);

        $this->set(compact('orders'));
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('order'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $order = $this->Orders->newEmptyEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $users = $this->Orders->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('order', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $users = $this->Orders->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('order', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order has been deleted.'));
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
