<?php
namespace hsC;

class uploadimg{
	
	 public function index(){
	 	
        if(!empty($_FILES['file'])){
            //获取扩展名，$_FILES['file']['name']为文件名
            $exename  = $this->getExeName($_FILES['file']['name']);
            //不符合扩展名不上传
            if(!in_array($exename, array('png', 'gif', 'jpeg', 'jpg'))){
            	exit(jsonCode('error', 'exename error'));
			}
            //存到imgs/随机名.扩展名
            $imageSavePath = 'imgs/'.uniqid().'.'.$exename;
            if(move_uploaded_file($_FILES['file']['tmp_name'], $imageSavePath)){

                exit(jsonCode('ok', $imageSavePath));
            }else{
                exit(jsonCode('error', 'upload error 01'));
            }
        }else{
            exit(jsonCode('error', 'upload error 02'));
        }
    }
    
    public function getExeName($fileName){
        $pathinfo      = pathinfo($fileName);
        return strtolower($pathinfo['extension']);
    }
		
}