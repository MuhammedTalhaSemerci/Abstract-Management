<?php


class bildiri extends Controller {

    public function new_abstract(){
        $this->view("new_abstract",[]);
    }

    public function change_abstract(){
        $this->view("change_abstract",[]);
    }

    public function save()
    {
        if(isset($_POST["abstract_upload"]))
        {
            $register_id        = $_POST["register_id"]; 
            $abstract_site      = $_POST["abstract_site"];
            $abstract_category  = $_POST["abstract_category"];
            $main_author        = $_POST["main_author"];
            $other_author       = $_POST["other_author"];
            $alt_contact        = $_POST["alt_contact"];
            $abstract_type      = $_POST["abstract_type"];
            $title              = $_POST["title"];
            $contant            = $_POST["contant"];
            $keywords           = $_POST["keywords"];
            $comments           = $_POST["comments"];

            $mmodel = $this->model("bildiri");
            $bildiri_sorgu = $model->abstract_save($register_id,$abstract_site,$abstract_category,$main_author,$other_author,$alt_contact,$abstract_type,$title,$contant,$keywords,$comments);

            if($bildiri_sorgu){



            }
        }
    }

    public function update()
    {
        if(isset($_POST["abstract_update"]))
        {
            $abstract_no        = $_POST["abstract_no"];
            $register_id        = $_POST["register_id"]; 
            $abstract_site      = $_POST["abstract_site"];
            $abstract_category  = $_POST["abstract_category"];
            $main_author        = $_POST["main_author"];
            $other_author       = $_POST["other_author"];
            $alt_contact        = $_POST["alt_contact"];
            $abstract_type      = $_POST["abstract_type"];
            $title              = $_POST["title"];
            $contant            = $_POST["contant"];
            $keywords           = $_POST["keywords"];
            $comments           = $_POST["comments"];

            $mmodel = $this->model("bildiri");
            $bildiri_sorgu = $model->abstract_update($abstract_no,$register_id,$abstract_site,$abstract_category,$main_author,$other_author,$alt_contact,$abstract_type,$title,$contant,$keywords,$comments);
        }
    }

    public function delete()
    {
        if(isset($_POST["abstract_delete"]))
        {
            $abstract_no = $_POsT["abstract_no"]; 
         
            $mmodel = $this->model("bildiri");
            $bildiri_sorgu = $model->abstract_delete($abstract_no);

            if($bildiri_sorgu){



            }
        }
    }
}
