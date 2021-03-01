<?php
class model1 extends CI_model
{
public function comp($a)
{
 $this->db->insert('tb_exam',$a);
} 
}
?>