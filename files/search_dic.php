<?php
session_start();

$var_value  = "བོད་ཡིག";
if(isset($_POST["dico"]))
{
    $var_value = $_POST["dico"];
}

$conn_index =new SQLite3('dictionarys/mldic_index.db') or die("Unable to open database!");
$conn=new SQLite3('dictionarys/mldic.db') or die("Unable to open database!");
$conn_En =new SQLite3('dictionarys/En_Tb_Dic_keys.db') or die("Unable to open database!");
//$conn_En_keys =new SQLite3('En_Tb_Dic_keys.db') or die("Unable to open database!");
$conn_Tn =new SQLite3('dictionarys/Tb_En_Dic_keys.db') or die("Unable to open database!");
$conn_TS =new SQLite3('dictionarys/Tb_En_Dic_keys.db') or die("Unable to open database!");


if(isset($_POST["quer"]))
{
    $keywords =$_POST["quer"];

    $keywords = preg_replace('/(?<!\\\)([%_])/', '',$keywords);
    $keywords = str_replace("'", '',$keywords);
    //$keywords = preg_replace('/[^\p{L}\p{N} ]+/', '', $keywords);
   // $keywords = preg_replace("/[\W_]+/u", '', $keywords);
    
    $output = '';
	
    if($var_value == "བོད་ཡིག")
    {
        $query=$conn_index->query("SELECT word FROM wordIndex WHERE  word GLOB  '$keywords*' LIMIT 10 ") or die("Failed to fetch row!");

        $output = '<ul id="list-dic" class="list-dic list-unstyle" style="font-size: 15px;line-height: 35px;">';
        
        if($query != null )
        {
            while ($row = $query->fetchArray()) {
                $data[] = $row;
            }
            
            if(!empty($data))
            {
                sort($data);
            foreach($data as $value){
                $output .='<li class="li-b">' .$value["word"].'</li>';

                
                
            }

            }else
            {
                $output = '';
            $output = '<div style="padding-left: 6px;"  class="list-unstyle">';
            $output .= '<p style="color: #dc8400;">བོད་ཡིག་ཚིག་མཛོད་ནང་<span style="color: red"><'.$keywords.'></span>འདི་འདྲ་ཞིག་རྙེད་ཐུབ་ཀྱིན་མི་འདུག བསྐྱར་དུ་འཚོལ་ཞིབ་གནང་རོགས།</p>';
            $output .= '</div>';
            }
            
            // while($row = $query->fetchArray()) {
            //     $output .='<li class="li-b">' .$row["word"].'</li>';
            // }
            $output .= '</ul>';
        }
        else
        {
            $output = '';
            $output = '<ul id="list-dic" class="list-unstyle">';
            $output .= '<li>Word Not Found</li>';
            $output .= '</ul>';

        }



 
  

        // $output = '<datalist Width="970px"style="font-family: Monlam !important;" id="datalistOptions">';
        
        // if($query != null )
        // {
        //     while ($row = $query->fetchArray()) {
        //         $data[] = $row;
        //     }
            
        //     if(!empty($data))
        //     {
        //         sort($data);
        //     foreach($data as $value){
        //         $output .='<option id="big" style="font-family: Monlam !important;" class="digrow" value="' .$value["word"].'">';
                
        //     }

        //     }else
        //     {
        //         $output = '';
        //     //$output = '<div style="padding-left: 6px;"  class="list-unstyle">';
        //     $output .= '<div class="text-center list-group-item list-group-item-action" id="dicList"><p style="color: #dc8400;">བོད་ཡིག་ཚིག་མཛོད་ནང་<span style="color: red"><'.$keywords.'></span>འདི་འདྲ་ཞིག་རྙེད་ཐུབ་ཀྱིན་མི་འདུག བསྐྱར་དུ་འཚོལ་ཞིབ་གནང་རོགས།</p></div>';
        //     //$output .= '<p style="color: #dc8400;">བོད་ཡིག་ཚིག་མཛོད་ནང་<span style="color: red"><'.$keywords.'></span>འདི་འདྲ་ཞིག་རྙེད་ཐུབ་ཀྱིན་མི་འདུག བསྐྱར་དུ་འཚོལ་ཞིབ་གནང་རོགས།</p>">';
        //     }
            
        //     // while($row = $query->fetchArray()) {
        //     //     $output .='<li class="li-b">' .$row["word"].'</li>';
        //     // }
        //     $output .= '</datalist>';
        // }
        // else
        // {
        //     $output = '';
        //     //$output = '<ul id="list-dic" class="list-unstyle">';
        //     //$output .= '<li>Word Not Found</li>';
        //     $output .= '<option value="Word Not Found">';

        // }

        
    
    }elseif($var_value == "དབྱིན་བོད།")
    {
        $query=$conn_En->query("SELECT EnWord FROM EnTb_keys WHERE  EnWord LIKE  '$keywords%' ORDER BY EnWord LIMIT 10 ") or die("Failed to fetch row!");

        $output = '<ul id="list-dic" class="list-unstyle" style="font-size: 15px;line-height: 35px;">';
        if($query != null )
        {
            while ($row = $query->fetchArray()) {
                $data[] = $row;
            }
            
            if(!empty($data))
            {
                sort($data);
            foreach($data as $value){
                $output .='<li  class="li-b">' .$value["EnWord"].'</li>';
                
            }

            }else
            {
                $output = '';
            $output = '<div style="padding-left: 6px;"  class="list-unstyle">';
            $output .= '<p style="color: #dc8400;">དབྱིན་བོད་ཚིག་མཛོད་ནང་<span style="color: red"> <'.$keywords.'> </span>འདི་འདྲ་ཞིག་རྙེད་ཐུབ་ཀྱིན་མི་འདུག བསྐྱར་དུ་འཚོལ་ཞིབ་གནང་རོགས།</p>';
            $output .= '</div>';
            }
            
            // while($row = $query->fetchArray()) {
            //     $output .='<li class="li-b">' .$row["word"].'</li>';
            // }
            $output .= '</ul>';
        }
        else
        {
            $output = '';
            $output = '<ul id="list-dic" class="list-unstyle">';
            $output .= '<li>Word Not Found</li>';
            $output .= '</ul>';

        }
    }elseif($var_value == "བོད་དབྱིན།")
    {
        $query=$conn_Tn->query("SELECT tb_word FROM tbEn_keys WHERE  tb_word GLOB  '$keywords*' ORDER BY tb_word LIMIT 10") or die("Failed to fetch row!");

        $output = '<ul id="list-dic" class="list-unstyle" style="font-size: 15px;line-height: 35px;">';
        if($query != null )
        {
            
            while ($row = $query->fetchArray()) {
                $data[] = $row;
            }
            
            if(!empty($data))
            {
                sort($data);
            foreach($data as $value){
                $output .='<li class="li-b">' .$value["tb_word"].'</li>';
                
            }

            }else
            {
                $output = '';
            $output = '<div style="padding-left: 6px;"  class="list-unstyle">';
            $output .= '<p style="color: #dc8400;">བོད་དབྱིན་ཚིག་མཛོད་ནང་<span style="color: red"> <'.$keywords.'> </span>འདི་འདྲ་ཞིག་རྙེད་ཐུབ་ཀྱིན་མི་འདུག བསྐྱར་དུ་འཚོལ་ཞིབ་གནང་རོགས།</p>';
            $output .= '</div>';
            }
            
            // while($row = $query->fetchArray()) {
            //     $output .='<li class="li-b">' .$row["word"].'</li>';
            // }
            $output .= '</ul>';
        }
        else
        {
            $output = '';
            $output = '<ul id="list-dic" class="list-unstyle">';
            $output .= '<li>Word Not Found</li>';
            $output .= '</ul>';

        }
    }elseif($var_value == "བོད་ལེཊ།")
    {
        $query=$conn_TS->query("SELECT tb_word FROM tbSk_keys WHERE  tb_word GLOB  '$keywords*' ORDER BY tb_word LIMIT 10") or die("Failed to fetch row!");

        $output = '<ul id="list-dic" class="list-unstyle" style="font-size: 15px;line-height: 35px;">';
        if($query != null )
        {
            
            while ($row = $query->fetchArray()) {
                $data[] = $row;
            }
            
            if(!empty($data))
            {
                sort($data);
            foreach($data as $value){
                $output .='<li class="li-b">' .$value["tb_word"].'</li>';
                
            }

            }else
            {
                $output = '';
            $output = '<div style="padding-left: 6px;"  class="list-unstyle">';
            $output .= '<p style="color: #dc8400;">བོད་ཡིག་ལེགས་སྦྱར་ཚིག་མཛོད་ནང་<span style="color: red"> <'.$keywords.'> </span>འདི་འདྲ་ཞིག་རྙེད་ཐུབ་ཀྱིན་མི་འདུག བསྐྱར་དུ་འཚོལ་ཞིབ་གནང་རོགས།</p>';
            $output .= '</div>';
            }
            
            // while($row = $query->fetchArray()) {
            //     $output .='<li class="li-b">' .$row["word"].'</li>';
            // }
            $output .= '</ul>';
        }
        else
        {
            $output = '';
            $output = '<ul id="list-dic" class="list-unstyle">';
            $output .= '<li>Word Not Found</li>';
            $output .= '</ul>';

        }
    }
    else
    {
        $output = '';
        $output = '<div style="padding-left: 6px;"  class="list-unstyle">';
        $output .= '<p style="color: #dc8400;">ཁྱེད་ཀྱིས་<span style="color: red"> སྐད་ཡིག་བདམས་སྟངས་འགྲིག་མི་འདུག </span>འདི་འདྲ་ཞིག་རྙེད་ཐུབ་ཀྱིན་མི་འདུག བསྐྱར་དུ་འཚོལ་ཞིབ་གནང་རོགས།</p>';
        $output .= '</div>';
    }
    
	 

    echo $output;
}
?>
