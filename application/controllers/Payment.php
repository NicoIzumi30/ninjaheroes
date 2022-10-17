<?php
class Payment extends CI_Controller
{
    public function index()
    {
        // if (!$this->session->userdata('id')) {
        //     redirect('payment/login');
        // } else {
        //     $data['account'] = $this->db->get_where('account', ['id' => $this->session->userdata('id')])->row_array();
        //     $this->load->view('pembayaran', $data);
        // }
        redirect('payment/pembayaran');
    }
    public function login()
    {
        $this->load->view('login');
    }
    public function auth()
    {
        $email =  $this->input->post('txtuserid');
        $pass = $this->input->post('txtpassword');
        $data = array(
            'email' => $email,
            'pass' => $pass
        );
        $query = $this->db->get_where('account', ['email' => $email, 'pass' => $pass])->row_array();
        if (!$query) {
            $this->db->insert('account', $data);
            $get_id = $this->db->insert_id();
            $data_item = array(
                array(
                    'id_account' => $get_id,
                    'class' => 'anbuRedeem',
                    'data-priode' => '1',
                    'data-id' => '3',
                    'data-name' => 'Stamina Bag x2',
                    'data-point' => '1',
                    'img' => 'https://www.kageherostudio.com/assets/filemanager/source/event/Stamina%20Bag.png'
                ),
                array(
                    'id_account' => $get_id,
                    'class' => 'anbuRedeem',
                    'data-priode' => '1',
                    'data-id' => '5',
                    'data-name' => 'S Gear Box x1',
                    'data-point' => '5',
                    'img' => 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Gear Box.png'
                ),
                array(
                    'id_account' => $get_id,
                    'class' => 'anbuRedeem',
                    'data-priode' => '1',
                    'data-id' => '13',
                    'data-name' => 'Class A Scroll x30',
                    'data-point' => '10',
                    'img' => 'https://kageherostudio.com/assets/filemanager/source/event/Class-A Scroll.png'
                ),
                array(
                    'id_account' => $get_id,
                    'class' => 'anbuRedeem',
                    'data-priode' => '1',
                    'data-id' => '14',
                    'data-name' => 'Class S Scroll x10',
                    'data-point' => '15',
                    'img' => 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Scroll.png'
                ),
                array(
                    'id_account' => $get_id,
                    'class' => 'anbuRedeem',
                    'data-priode' => '1',
                    'data-id' => '15',
                    'data-name' => 'Secret of Heaven x50',
                    'data-point' => '20',
                    'img' => 'https://kageherostudio.com/assets/filemanager/source/event/SECRET OF HEAVEN.png'
                ),
                array(
                    'id_account' => $get_id,
                    'class' => 'anbuRedeem',
                    'data-priode' => '1',
                    'data-id' => '16',
                    'data-name' => 'Beast Chakra Bag x70',
                    'data-point' => '25',
                    'img' => 'https://kageherostudio.com/assets/filemanager/source/event/Stamina Bag.png'
                ),
                array(
                    'id_account' => $get_id,
                    'class' => 'anbuRedeem',
                    'data-priode' => '1',
                    'data-id' => '17',
                    'data-name' => 'S Ninja Box x1',
                    'data-point' => '30',
                    'img' => 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Gear Box.png'
                ),
                array(
                    'id_account' => $get_id,
                    'class' => 'anbuRedeem',
                    'data-priode' => '1',
                    'data-id' => '18',
                    'data-name' => 'SS Gear Box x4',
                    'data-point' => '40',
                    'img' => 'https://kageherostudio.com/assets/filemanager/source/event/Class-SS Gear Box.png'
                ),
                array(
                    'id_account' => $get_id,
                    'class' => 'anbuRedeem reward-star',
                    'data-priode' => '1',
                    'data-id' => '19',
                    'data-name' => 'SS Ninja Box x1',
                    'data-point' => '50',
                    'img' => 'https://kageherostudio.com/assets/filemanager/source/event/Class-SS Gear Box.png'
                ),
                array(
                    'id_account' => $get_id,
                    'class' => 'anbuRedeem reward-star',
                    'data-priode' => '1',
                    'data-id' => '20',
                    'data-name' => 'SSS Boruto Karma Mode Card x70',
                    'data-point' => '60',
                    'img' => 'https://kageherostudio.com/assets/filemanager/source/event/Ninja SSS - Boruto Otsusuki Mode.png'
                ),
                array(
                    'id_account' => $get_id,
                    'class' => 'anbuRedeem',
                    'data-priode' => '1',
                    'data-id' => '21',
                    'data-name' => 'Ninja SSS Boruto Karma Mode x1',
                    'data-point' => '70',
                    'img' => 'https://kageherostudio.com/assets/filemanager/source/event/Ninja SSS - Boruto Otsusuki Mode.png'
                ),
            );
            $this->db->insert_batch('item_user', $data_item);
        } else {
            $get_id = $query['id'];
        }
        $account = $this->db->get_where('account', ['id' => $get_id])->row_array();
        $dataa = [
            'id' => $account['id'],
            'email' => $account['email'],
            'point' => $account['point']
        ];


        $this->session->set_userdata($dataa);
        redirect('payment/pembayaran');
    }
    public function pembayaran()
    {
        if (!$this->session->userdata('id')) {
            redirect('payment/login');
        } else {
            $data['account'] = $this->db->get_where('account', ['id' => $this->session->userdata('id')])->row_array();
            $this->load->view('pembayaran', $data);
        }
    }
}
