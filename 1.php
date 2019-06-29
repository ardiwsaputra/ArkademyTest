<?php
    function biodata(){
            
      $data->name = "Ardi Widyanto Saputra";
      $data->age = 21;
      $data->address = "Jalan Adhiyaksa, Kabupaten Bandung, Kecamatan Dayeuhkolot. Jawa Barat";
      $data->hobbies = array("Traveling", "Photography");
      $data->is_married = FALSE;
      
      $college->name = "Telkom University";
      $college->year_in = 2016;
      $college->year_out = "Now";
      $college->major = "D3 Sistem Informasi";
      $highSchool->name = "SMA Negeri 1 Tanjung Selor";
      $highSchool->year_in = 2013;
      $highSchool->year_out = 2016;
      $highSchool->major = "IPS";
      $juniorHighschool->name = "SMP Negeri 1 Tanjung Selor";
      $juniorHighschool->year_in = 2010;
      $juniorHighschool->year_out = 2013;
      $juniorHighschool->major = NULL;
      $elementarySchool->name = "SD Negeri 1 Tanjung Selor";
      $elementarySchool->year_in = 2004;
      $elementarySchool->year_out = 2010;
      $elementarySchool->major = NULL;
      $data->list_school = array($college ,$highSchool, $juniorHighschool, $elementarySchool);

      $skillPertama->skill_name = "Pemrograman PHP";
      $skillPertama->level = "Beginner";
      $skillKedua->skill_name = "Framework CodeIgniter atau Laravel";
      $skillKedua->level = "Beginner";
      $skillKetiga->skill_name = "HTML";
      $skillKetiga->level = "Beginner";
      $skillKeempat->skill_name = "CSS";
      $skillKeempat->level = "Beginner";
      $data->skills = array($skillPertama, $skillKedua, $skillKetiga, $skillKeempat);

      $interest_in_coding  = TRUE;
      
      echo json_encode($name, $age);
    }
    biodata();
?>