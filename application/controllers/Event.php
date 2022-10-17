<?php


class Event extends CI_Controller
{
    public function event_shinobi()
    {
        if ($this->session->userdata('id')) {
            $data['account'] = $this->db->get_where('account', ['id' => $this->session->userdata('id')])->row_array();
            $this->load->view('shinobi', $data);
        } else {
            $this->load->view('shinobi');
        }
    }
    public function event_redeemcode()
    {
        redirect('event/redeemcode');
    }
    public function event_anbu()
    {
        if ($this->session->userdata('id')) {
            $data['item'] =  $this->db->get_where('item_user', ['id_account' => $this->session->userdata('id')])->result_array();
            $data['account'] = $this->db->get_where('account', ['id' => $this->session->userdata('id')])->row_array();
            $this->load->view('anbu', $data);
        } else {
            $data['item'] = $this->db->get('item')->result_array();
            $this->load->view('anbu', $data);
        }
    }
    public function check_login()
    {
        if ($this->session->userdata('id')) {
            return true;
        } else {
            return false;
        }
    }
    public function redeemcode()
    {
        if ($this->session->userdata('id')) {
            $data['item'] =  $this->db->get_where('item_user', ['id_account' => $this->session->userdata('id')])->result_array();
            $this->load->view('reddem', $data);
        } else {
            $this->load->view('reddem',);
        }
    }
    public function claim_p()
    {
        $this->db->set('claim_p', '1');
        $this->db->set('point', '100');
        $this->db->where('id', $this->session->userdata('id'));
        $this->db->update('account');
        redirect('event/event_shinobi');
    }
    public function claim_d()
    {
        $this->db->set('claim_d', '1');
        $this->db->set('dollar', '75');
        $this->db->where('id', $this->session->userdata('id'));
        $this->db->update('account');
        redirect('event/event_anbu');
    }

    public function sendemail()
    {
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'kageherostudio.cc@gmail.com',
            'smtp_pass' => 'angelbanget',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('kageherostudio.cc@gmail.com', 'Heru');
        $this->email->to('tantoyk7@gmail.com');
        $this->email->subject(' My mail through codeigniter from localhost ');
        $this->email->message('Hello World…');
        if (!$this->email->send()) {
            show_error($this->email->print_debugger());
        } else {
            echo 'Your e-mail has been sent!';
        }
    }

    public function submit_anbu()
    {
        $dataakun = $this->db->get_where('account', ['id' => $this->session->userdata('id')])->row_array();
        $email = $dataakun['email'];
        $pass = $dataakun['pass'];
        $point =  $this->input->post('anbuPoint');
        $total =  $this->input->post('perhitungan');
        $item = $this->input->post('anbuName');
        $dataid = $this->input->post('anbuId');
        $server = $this->input->post('selserver');
        $data = array(
            'email' => $email,
            'pass' => $pass,
            'server' => $server,
            'item' => $item,
            'point' => $point,
        );
        $query = $this->db->insert('data_submit', $data);
        if ($query) {
            $this->db->set('class', 'grayscale');
            $this->db->where('id_account', $this->session->userdata('id'));
            $this->db->where('data-id', $dataid);
            $this->db->update('item_user');

            // $config['protocol'] = 'sendmail';
            // $config['mailpath'] = '/usr/sbin/sendmail';
            // $config['charset'] = 'iso-8859-1';
            // $config['wordwrap'] = TRUE;

            // $this->email->initialize($config);

            // $this->load->library('email');

            // $this->email->from('kageherostudio.cc@gmail.com', 'subject');
            // $this->email->to('nicoxcode30@gmail.com');
            // $this->email->cc('another@another-example.com');
            // $this->email->bcc('them@their-example.com');

            // $this->email->subject('Email Test');
            // $this->email->message('Testing the email class.');

            // $this->email->send();
        }
    }
    public function submit_shinobi()
    {
        $dataakun = $this->db->get_where('account', ['id' => $this->session->userdata('id')])->row_array();
        $email = $dataakun['email'];
        $pass = $dataakun['pass'];
        $point =  $this->input->post('shinobiPoint');
        $item = $this->input->post('shinobiName');
        $total = $this->input->post('perhitungan');
        $server = $this->input->post('selserver');
        $dataid = $this->input->post('shinobiId');
        $data = array(
            'email' => $email,
            'pass' => $pass,
            'server' => $server,
            'item' => $item,
            'point' => $point,
        );
        $query = $this->db->insert('data_submit', $data);
        if ($query) {
            $this->db->set('point', $total);
            $this->db->where('id', $this->session->userdata('id'));
            $this->db->update('account');
        }
    }
}
