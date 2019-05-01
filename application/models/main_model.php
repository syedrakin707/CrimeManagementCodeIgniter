<?php
 class Main_model extends CI_Model
 {
      function can_login($username, $password)
      {
           $this->db->where('username', $username);
           $this->db->where('password', $password);
           $query = $this->db->get('users');
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'
           if($query->num_rows() > 0)
           {
                return true;
           }
           else
           {
                return false;
           }
      }

      function insert_data_complaint($data)
      {
           $this->db->insert("complaint", $data);
      }
      function insert_data_cop($data)
      {
           $this->db->insert("cop", $data);
      }
      function insert_data_criminal($data)
      {
           $this->db->insert("criminal", $data);
      }
      function insert_data_fir($data)
      {
           $this->db->insert("fir", $data);
      }
      function insert_data_station($data)
      {
           $this->db->insert("station", $data);
      }

      function fetch_data_complaint()
      {
           $this->db->select("*");
           $this->db->from("complaint");
           $query = $this->db->get();
           return $query;
      }
      function fetch_data_cop()
      {
           $this->db->select("*");
           $this->db->from("cop");
           $query = $this->db->get();
           return $query;
      }
      function fetch_data_criminal()
      {
           $this->db->select("*");
           $this->db->from("criminal");
           $query = $this->db->get();
           return $query;
      }
      function fetch_data_fir()
      {
           $this->db->select("*");
           $this->db->from("fir");
           $query = $this->db->get();
           return $query;
      }
      function fetch_data_station()
      {
           $this->db->select("*");
           $this->db->from("station");
           $query = $this->db->get();
           return $query;
      }

      function delete_data_complaint($id){
           $this->db->where("id", $id);
           $this->db->delete("complaint");
           //DELETE FROM tbl_user WHERE id = $id
      }
      function delete_data_cop($id){
           $this->db->where("id", $id);
           $this->db->delete("cop");
           //DELETE FROM tbl_user WHERE id = $id
      }
      function delete_data_criminal($id){
           $this->db->where("id", $id);
           $this->db->delete("criminal");
           //DELETE FROM tbl_user WHERE id = $id
      }
      function delete_data_fir($id){
           $this->db->where("id", $id);
           $this->db->delete("fir");
           //DELETE FROM tbl_user WHERE id = $id
      }
      function delete_data_station($id){
           $this->db->where("id", $id);
           $this->db->delete("station");
           //DELETE FROM tbl_user WHERE id = $id
      }

      function fetch_single_data_complaint($id)
      {
           $this->db->where("id", $id);
           $query = $this->db->get("complaint");
           return $query;
           //Select * FROM tbl_user where id = '$id'
      }
      function fetch_single_data_cop($id)
      {
           $this->db->where("id", $id);
           $query = $this->db->get("cop");
           return $query;
           //Select * FROM tbl_user where id = '$id'
      }
      function fetch_single_data_criminal($id)
      {
           $this->db->where("id", $id);
           $query = $this->db->get("criminal");
           return $query;
           //Select * FROM tbl_user where id = '$id'
      }
      function fetch_single_data_fir($id)
      {
           $this->db->where("id", $id);
           $query = $this->db->get("fir");
           return $query;
           //Select * FROM tbl_user where id = '$id'
      }
      function fetch_single_data_station($id)
      {
           $this->db->where("id", $id);
           $query = $this->db->get("station");
           return $query;
           //Select * FROM tbl_user where id = '$id'
      }

      function update_data_complaint($data, $id)
      {
           $this->db->where("id", $id);
           $this->db->update("complaint", $data);
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'
      }
      function update_data_cop($data, $id)
      {
           $this->db->where("id", $id);
           $this->db->update("cop", $data);
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'
      }
      function update_data_criminal($data, $id)
      {
           $this->db->where("id", $id);
           $this->db->update("criminal", $data);
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'
      }
      function update_data_fir($data, $id)
      {
           $this->db->where("id", $id);
           $this->db->update("fir", $data);
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'
      }
      function update_data_station($data, $id)
      {
           $this->db->where("id", $id);
           $this->db->update("station", $data);
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'
      }
 }
