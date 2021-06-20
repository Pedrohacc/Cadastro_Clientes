<?php

class Home_model extends CI_Model{

    public function index(){

    return $this->db->get("cliente")->result_array();
   }

    public function inserir($dadospost){
    $this->db->insert("cliente",$dadospost);

   } 

   public function alterar($idcliente){
    return $this->db->get_where("cliente",array(
        "idcliente" => $idcliente
         ))->row_array();
   } 

   public function update($idcliente, $dado){
       $this->db->where("idcliente", $idcliente);
       return $this->db->update("cliente",$dado);
   }

   public function delete($idcliente){
       $this->db->where("idcliente", $idcliente);
       return $this->db->delete("cliente");

   }

}