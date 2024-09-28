<?php

namespace App\Controllers;

use App\Models\ActivitiesModel;

class ActivitiesController extends BaseController
{
    public function index()
    {
        $ActivitiesModel = new ActivitiesModel();
        $data['atividades'] = $ActivitiesModel->where('user_id', session()->get('user_id'))->findAll();
        return view('atividades/index', $data);
    }

    // Método para exibir o formulário de criação de uma nova atividade
    public function create()
    {
        return view('atividades/create'); 
    }

    // Método para salvar a nova atividade
    public function store()
    {
        $ActivitiesModel = new ActivitiesModel();
        $data = [
            'user_id' => session()->get('user_id'), // Associa a atividade ao usuário logado
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'start_datetime' => $this->request->getPost('start_datetime'),
            'end_datetime' => $this->request->getPost('end_datetime'),
            'status' => 'pendente', // Define o status inicial como "pendente"
        ];

        // Insere a atividade no banco de dados
        if ($ActivitiesModel->insert($data)) {
            return redirect()->to('/atividades'); // Redireciona para a lista de atividades
        } else {
            return redirect()->back()->with('error', 'Erro ao criar atividade.');
        }
    }

    

    public function edit($id) {
        $model = new ActivitiesModel();
        $data['atividade'] = $model->find($id);
        return view('atividades/edit', $data);
    }
    
    
    
    public function update($id) {
        $model = new ActivitiesModel();
        
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'start_datetime' => $this->request->getPost('start_datetime'),
            'end_datetime' => $this->request->getPost('end_datetime'),
        ];
    
        $model->update($id, $data);
        return redirect()->to('/atividades');
    }
    
    
    public function view($id) {
        $model = new ActivitiesModel();
        $data['atividade'] = $model->find($id); // Busca a atividade pelo ID
        return view('atividades/view', $data); // Retorna a view com os detalhes da atividade
    }
    


    public function delete($id)
    {
        $ActivitiesModel = new ActivitiesModel();
        $ActivitiesModel->delete($id);
        return redirect()->to('/atividades');
    }

    public function alterarStatus($id)
    {
        $ActivitiesModel = new ActivitiesModel();
        $status = $this->request->getPost('status');
        $ActivitiesModel->update($id, ['status' => $status]);
        return redirect()->to('/atividades');
    }

    public function logout() {
        session()->destroy(); // Destrói a sessão do usuário
        return redirect()->to('/login'); // Redireciona para a tela de login
    }

    public function getEvents() {
        $model = new ActivitiesModel();
        $activities = $model->findAll();
        $events = [];
    
        foreach ($activities as $activity) {
            $events[] = [
                'id' => $activity['id'],
                'title' => $activity['name'],
                'start' => $activity['start_datetime'],
                'end' => $activity['end_datetime'],
                'description' => $activity['description']
            ];
        }
    
        return $this->response->setJSON($events);
    }

    public function verAtividadesPorData($date) {
        $model = new ActivitiesModel();
        
        $dateStart = $date . ' 00:00:00';
        $dateEnd = $date . ' 23:59:59';
    
        // Busca as atividades que caem na data selecionada
        $activities = $model->where('start_datetime >=', $dateStart)
                            ->where('end_datetime <=', $dateEnd)
                            ->findAll();
    
        return view('atividades/atividadesPorData', ['activities' => $activities, 'selectedDate' => $date]);
    }
    
    
    
}
