<?php

    class Professions{
        var $error=false;
        var $professions=array();

        function __construct($error,$professions){
            $this->error=$error;
            $this->professions=$professions;
        }
    }  

    class ProfessionsElem{
        var $id;
        var $name;
        var $industry_id;

        function __construct($id,$name,$industry_id){
            $this->id=$id;
            $this->name=$name;
            $this->industry_id=$industry_id;
        }

    }

    class Industry{
        var $error=false;
        var $industry=array();

        function __construct($error,$industry){
            $this->error=$error;
            $this->industry=$industry;
        }

    }    

    class IndustryElem{
        var $id;
        var $name;

        function __construct($id,$name){
            $this->id=$id;
            $this->name=$name;
        }

    }

    class User{
        var $error=false;
        var $typeUser;
        var $id;
        var $name;
        var $surname;
        var $message;

        function __construct($error,$typeUser,$id,$name,$surname,$message){
            $this->error=$error;
            $this->typeUser=$typeUser;
            $this->id=$id;
            $this->name=$name;
            $this->surname=$surname;
            $this->message=$message;
        }

    }

    class api extends apiBaseClass {
    
        function authentication($apiMethodParams) {
            $retJSON = $this->createDefaultJson();
            if ((isset($apiMethodParams->login))&&(isset($apiMethodParams->login))){
                $sql=new apiBaseClass("id12150653_makeworkbase","localhost","id12150653_mysql","&MS=$)zA07=J}dG2");//""$sql=new apiBaseClass("MakeWorkBase","localhost","mysql","mysql");
                $result=$sql->mySQLWorker->connectLink->query("SELECT * FROM Users WHERE((login='".$apiMethodParams->login."')&&(password='".$apiMethodParams->password."'))");
                if($result->num_rows==1){
                    $obj = $result->fetch_object();
                    $retJSON=new User(false,$obj->TypeUser,$obj->id,$obj->Name,$obj->Surname,null);
                }else{
                    $retJSON=new User(true,null,null,null,null,"Неверный логин или пароль!");
                }
            }else{
                $retJSON=new User(true,null,null,null,null,"Указаны не все параметры");
            }
            return $retJSON;
        }   

        function registration($apiMethodParams){
            $retJSON = $this->createDefaultJson();
            if ((isset($apiMethodParams->login))&&(isset($apiMethodParams->login))&&(isset($apiMethodParams->name))&&(isset($apiMethodParams->surname))&&(isset($apiMethodParams->typeUser))){
                $sql=new apiBaseClass("id12150653_makeworkbase","localhost","id12150653_mysql","&MS=$)zA07=J}dG2");
                $result=$sql->mySQLWorker->connectLink->query("SELECT * FROM Users WHERE(login='".$apiMethodParams->login."')");
                if($result->num_rows==0){
                    $result=$sql->mySQLWorker->connectLink->query("INSERT INTO `Users`(`id`, `Name`, `Surname`, `Login`, `Password`, `TypeUser`) VALUES (null,'".$apiMethodParams->name."','".$apiMethodParams->surname."','".$apiMethodParams->login."','".$apiMethodParams->password."',".$apiMethodParams->typeUser.")");
                    $retJSON=new User(false,null,null,null,null,"Пользователь зарегистрирован");
                }else{
                    $retJSON=new User(true,null,null,null,null,"Логин занят!");
                }
            }else{
                $retJSON=new User(true,null,null,null,null,"Указаны не все параметры");
            }
            return $retJSON;
        }

        function getIndustry(){
            $retJSON = $this->createDefaultJson();
            try{
                $mass=array();
                $sql=new apiBaseClass("id12150653_makeworkbase","localhost","id12150653_mysql","&MS=$)zA07=J}dG2");
                $result=$sql->mySQLWorker->connectLink->query("SELECT * FROM Industry"); 
                $i=0;
                while ($obj = $result->fetch_object()) {
                    $mass[$i]=new IndustryElem($obj->id,$obj->Name);
                    $i++;
                }
                $retJSON=new Industry(false,$mass);
            }catch(Exception $ex){
                $retJSON=new Industry(true,null);

            }
            return $retJSON;
        }

        function getProfessions($apiMethodParams){
            $retJSON = $this->createDefaultJson();
            if(isset($apiMethodParams->id)){
                try{
                    $mass=array();
                    $sql=new apiBaseClass("id12150653_makeworkbase","localhost","id12150653_mysql","&MS=$)zA07=J}dG2");
                    $result=$sql->mySQLWorker->connectLink->query("SELECT * FROM Professions WHERE (industry_id=".$apiMethodParams->id.")"); 
                    $i=0;
                    while ($obj = $result->fetch_object()) {
                        $mass[$i]=new ProfessionsElem($obj->id,$obj->Name,$obj->industry_id);
                        $i++;
                    }
                    $retJSON=new Professions(false,$mass);
                }catch(Exception $ex){
                    $retJSON=new Professions(true,null);
                }
            }else{
                $retJSON=new Professions(true,null);
            }
            return $retJSON;
        }


    }

?>