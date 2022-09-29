<?php
namespace App\Controller;

class PostsController extends AppController{

	public function index()
	{
		$this->paginate = [
			'limit'=>'5'
		];
		// $posta = $this->paginate($this->Posts->find('all'));
			$posta = $this->paginate($this->Posts->find()->where([ 'status' => 0])->order(['fname' => 'DESC']));		
		$this->set('posts',$posta);
	}

	public function search()
	{
		$search = $this->request->getQuery('q');
		$this->paginate = [
			'limit'=>'5'
		];
		$posta = $this->paginate($this->Posts->find()->where(function($exp, $query) use($search){
			return $exp->like('detail','%'.$search.'%');
		}));
		$this->set('posts',$posta);
	}

	public function add()
	{
		$postx = $this->Posts->newEntity($this->request->getData());
		if ($this->request->is('post')) {
			$postx = $this->Posts->patchEntity($postx, $this->request->getData());
			$this->Posts->save($postx);
			return $this->redirect(['action'=>'index']);
		}
		$this->set('posts', $postx);
	}

	public function edit($id)
	{
		// $this->addBehavior('Timestamp');
		$posty = $this->Posts->get($id);
		if ($this->request->is(['post', 'put'])) {
			$posty = $this->Posts->patchEntity($posty, $this->request->getData());
			$posty->updated = date('Y-m-d H:i:s');
			$this->Posts->save($posty);
			return $this->redirect(['action'=>'index']);
		}
		$this->set('name', $posty->name);
		$this->set('detail', $posty->detail);
		$this->set('posts', $posty->posts);
		$this->set('fname', $posty->fname);
		$this->set('lname', $posty->lname);
		$this->set('mail', $posty->mail);
		$this->set('pass', $posty->pass);
		$this->set('cpass', $posty->cpass);
		$this->set('dob', $posty->dob);
		$this->set('phn', $posty->phn);
		$this->set('height', $posty->height);
		$this->set('weight', $posty->weight);
		$this->set('gender', $posty->gender);
		$this->set('image', $posty->image);
		// $this->set('modified', date('d/m/Y'));
		$this->set('posts', $posty);
	}

	public function delete($id)
	{
		//$this->request->allowMethod(['post','delete']);
		$postz = $this->Posts->get($id);
		$this->Posts->delete($postz);
		return $this->redirect(['action'=>'index']);
	}
	public function logout()
	{
		return $this->redirect($this->Auth->logout());
	}
}
