<?php


class bildiri extends Model
{


    public function abstract_save($abstract_no,$register_id,$abstract_site,$main_author,$other_author,$alt_contact,$abstract_type,$title,$contant,$keywords,$comments)
    {

        $abstract_save = $this->db->prepare("INSERT INTO abstracts SET abstract_site=?, register_id=?, abstract_category=?, main_author=?, other_author=?, alt_contact=?, abstract_type=?, title=?,contact=?, keywords=?, comments=?");
        $abstract_result = $abstract_save->execute([$abstract_site,$register_id,$abstract_category,$main_author,$other_author,$alt_contact,$abstract_type,$title,$contant,$keywords,$comments]);

        if(isset($abstract_result)){

            return $abstract_result;

        }
        else{

            return NULL;
            
        }



    }



    public function abstract_update($abstract_no,$register_id,$abstract_site,$abstract_category,$main_author,$other_author,$alt_contact,$abstract_type,$title,$contant,$keywords,$comments)
    {

        $abstract_update = $this->db->prepare("UPDATE abstracts SET abstract_site=?, register_id=?, abstract_category=?, main_author=?, other_author=?, alt_contact=?, abstract_type=?, title=?,contact=?, keywords=?, comments=? WHERE abstract_no=? ");
        $abstract_result = $abstract_update->execute([$abstract_site,$register_id,$abstract_category,$main_author,$other_author,$alt_contact,$abstract_type,$title,$contant,$keywords,$comments,$abstract_no]);

        if(isset($abstract_result)){

            return $abstract_result;

        }
        else{

            return NULL;
            
        }



    }


    public function abstract_delete($abstract_no)
    {
        $abstract_no = $_POST["abstract_no"];
        $abstract_delete = $this->db->prepare("DELETE FROM abstracts WHERE abstract_no=?");
        $abstract_result = $abstract_delete->execute([$abstract_no]);

        if(isset($abstract_result)){

            return $abstract_result;

        }
        else{

            return NULL;
            
        }



    }


}