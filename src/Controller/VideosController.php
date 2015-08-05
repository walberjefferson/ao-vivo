<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Query;
use Cake\ORM\TableRegistry;


/**
 * Videos Controller
 *
 * @property \App\Model\Table\VideosTable $Videos
 */
class VideosController extends AppController
{


    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        #$this->layout = 'santana';
        $this->set('videos', $this->paginate($this->Videos));
        $this->set('_serialize', ['videos']);
    }

    public function malta(){
        $this->layout = 'malta';
        $videos = TableRegistry::get('videos');

        $video = $videos->find()
            ->select(['id', 'titulo', 'url', 'inicio', 'fim', 'dia', 'mes'])
            ->order(['created' => 'DESC'])
            ->limit(1);

        $videoss = $this->paginate($this->Videos);
        $this->set(compact('videoss', 'video'));
    }

    public function lista(){
        $this->layout = 'santana';
        $videos = TableRegistry::get('videos');

        $video = $videos->find()
            ->select(['id', 'titulo', 'url', 'inicio', 'fim', 'dia', 'mes'])
            ->order(['created' => 'DESC'])
            ->limit(1);

        $videoss = $this->paginate($this->Videos);
        $this->set(compact('videoss', 'video'));
    }

    /**
     * View method
     *
     * @param string|null $id Video id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $video = $this->Videos->get($id, [
            'contain' => []
        ]);
        $this->set('video', $video);
        $this->set('_serialize', ['video']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $video = $this->Videos->newEntity();
        if ($this->request->is('post')) {
            $video = $this->Videos->patchEntity($video, $this->request->data);
            if ($this->Videos->save($video)) {
                $this->Flash->success('Vídeo adicionado com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Erro ao tentar adicionar vídeo. Tente novamente.');
            }
        }
        $this->set(compact('video'));
        $this->set('_serialize', ['video']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Video id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $video = $this->Videos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $video = $this->Videos->patchEntity($video, $this->request->data);
            if ($this->Videos->save($video)) {
                $this->Flash->success('Vídeo editado com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Erro ao tentar editar o vídeo. Tente novamente.');
            }
        }
        $this->set(compact('video'));
        $this->set('_serialize', ['video']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Video id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $video = $this->Videos->get($id);
        if ($this->Videos->delete($video)) {
            $this->Flash->success('Vídeo apagado com sucesso.');
        } else {
            $this->Flash->error('Erro ao tentar apagar o vídeo. Tente novamente.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
