<?php
class Mainmodel extends CI_model
{
    public function regtr($a)
    {
     $this->db->insert("reg_stud",$a);
    }
    public function encpass($pass)
	{
		return password_hash($pass,PASSWORD_BCRYPT);
    }
    public function view1()
    {
        $this->db->select('*');
        $query=$this->db->get("reg_stud");
        return $query;
    }
    public function singledetails($id)
    {
        $this->db->select('*');
        $this->db->where("sid",$id);
        $qry=$this->db->get("reg_stud");
        return $qry;
    }
    public function singledata()
    {
        $qry=$this->db->get("reg_stud");
        return $qry;
    }
    public function update($a,$d)
    {
        $this->db->select('*');
        $qry=$this->db->where("sid",$d);
        $qry=$this->db->update("reg_stud",$a);
        return $qry;   
    }
    public function delete($d)
    {
        $this->db->where("sid",$d);
        $this->db->delete("reg_stud");
    }
    public function approve1($id)
    {
        $qry=$this->db->where("sid",$id);
        $qry=$this->db->set("status",'1');
        $qry=$this->db->update("reg_stud");
        return $qry;
    }
    public function reject1($id)
    {
        $qry=$this->db->where("sid",$id);
        $qry=$this->db->set("status",'2');
        $qry=$this->db->update("reg_stud");
        return $qry;
    }
    public function getuserid($email)
    {
        $this->db->select("sid");
        $this->db->from("reg_stud");
        $this->db->where("email",$email);
        return $this->db->get()->row('sid');
    }
    public function getuser($id)
    {
        $this->db->select('*');
        $this->db->from("reg_stud");
        $this->db->where("sid",$id);
        return $this->db->get()->row();
    }
    public function selectpass($email,$pass)
    {
        $this->db->select('password');
        $this->db->from('reg_stud');
        $this->db->where('email',$email);
        $qry=$this->db->get()->row('password');
        return $this->verifypass($pass,$qry);
    }
    public function verifypass($pass,$qry)
    {
        return password_verify($pass,$qry);
    }

    public function regt($a,$b)
    {
     
     $this->db->insert("logintb",$b);
     $loginid=$this->db->insert_id();
     $a['loginid']=$loginid;
     $this->db->insert("regist_table",$a);
     return $insert_id=$this->db->insert_id();
     
    }
    public function encpass2($pass)
	{
		return password_hash($pass,PASSWORD_BCRYPT);
    }
    
   
    public function view2()
    {
        $this->db->select('*');
        $this->db->join('logintb','logintb.loginid=regist_table.loginid','inner');
        $qry=$this->db->get("regist_table");
         return $qry;
    }
    public function approve2($id)
    {
        $qry=$this->db->where("loginid",$id);
        $qry=$this->db->set("status",'1');
        $qry=$this->db->update("logintb");
        return $qry;   
    }
    public function reject2($id)
    {
        $qry=$this->db->where("loginid",$id);
        $qry=$this->db->set("status",'2');
        $qry=$this->db->update("logintb");
        return $qry;   
    } 
    public function regt1($a,$b)
    {
     
     $this->db->insert("logintb",$b);
     $loginid=$this->db->insert_id();
     $a['loginid']=$loginid;
     $this->db->insert("teach_tb",$a);
    
     
    }
    
    public function encpass3($pass)
	{
		return password_hash($pass,PASSWORD_BCRYPT);
    }
    public function view3()
    {
        $this->db->select('*');
        $this->db->join('logintb','logintb.loginid=teach_tb.loginid','inner');
        $qry=$this->db->get("teach_tb");
         return $qry;
    }
    public function getuserid1($email)
    {
        $this->db->select("loginid");
        $this->db->from("logintb");
        $this->db->where("email",$email);
        return $this->db->get()->row('loginid');
    }
    public function getuser1($id)
    {
        $this->db->select('*');
        $this->db->from("logintb");
        $this->db->where("loginid",$id);
        return $this->db->get()->row();
    }
    public function selectpass1($email,$pass)
    {
        $this->db->select('password');
        $this->db->from('logintb');
        $this->db->where('email',$email);
        $qry=$this->db->get()->row('password');
        return $this->verifypass1($pass,$qry);
    }
    public function verifypass1($pass,$qry)
    {
        return password_verify($pass,$qry);
    }
    
    public function view4($id)
    {
        $this->db->select("*");
        $this->db->join('logintb','logintb.loginid=regist_table.loginid','inner');
        $qry=$this->db->where("logintb.loginid",$id);
        $qry=$this->db->get("regist_table");
        return $qry;   
    }
    public function updation($a,$b,$id)
    {
    $this->db->select('*');
    $this->db->join('logintb','logintb.loginid=regist_table.loginid','inner');
    $qry=$this->db->where("regist_table.loginid",$id);
    $qry=$this->db->update("regist_table",$a);
    $qry=$this->db->where("logintb.loginid",$id);
    $qry=$this->db->update("logintb",$b);
    return $qry;
    }

    public function regt3($a)
    {
     
     $this->db->insert("notif_tb",$a);
     
    }
    public function view5()
    {
        $this->db->select("*");
        $this->db->join('teach_tb','teach_tb.loginid=notif_tb.loginid','inner');
        $qry=$this->db->get("notif_tb");
        return $qry;   
              
    }
    public function delete1($d)
    {
        $this->db->where("loginid",$d);
        $this->db->delete("notif_tb");
    }
}
?>