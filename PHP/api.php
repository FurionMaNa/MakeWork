<?php
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

    class Orders{
        var $error=false;
        var $orders=array();

        function __construct($error,$orders){
            $this->error=$error;
            $this->orders=$orders;
        }
    } 

    class OrdersElem{
        var $id;
        var $profession_id;
        var $industry_id;
        var $name;
        var $description;
        var $price;
        var $userName;
        var $userSurname;

        function __construct($id,$profession_id,$industry_id,$name,$description,$price,$userName,$userSurname){
            $this->id=$id;
            $this->profession_id=$profession_id;
            $this->industry_id=$industry_id;
            $this->name=$name;
            $this->description=$description;
            $this->price=$price;
            $this->userName=$userName;
            $this->userSurname=$userSurname;
        }

    }

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
        var $patronymic;
        var $inn;
        var $phone_num;
        var $email;
        var $industry;
        var $professions;
        var $sex;
        var $age;
        var $self_employment;
        var $skills;
        var $name_company;
        var $legal_address;
        var $fact_address;
        var $city;
        var $ogrn;
        var $site;
        var $message;

        function __construct(
        	$error,
        	$typeUser,
        	$id,
        	$name,
        	$surname,
        	$patronymic,
        	$inn,
        	$phone_num,
        	$email,
        	$industry,
        	$professions,
        	$sex,
        	$age,
        	$self_employment,
        	$skills,
        	$name_company,
        	$legal_address,
        	$fact_address,
        	$city,
			$ogrn,
			$site,
			$message){
            $this->error=$error;
            $this->typeUser=$typeUser;
            $this->id=$id;
            $this->name=$name;
            $this->surname=$surname;
			$this->patronymic=$patronymic;
			$this->inn=$inn;
			$this->phone_num=$phone_num;
			$this->email=$email;
			$this->industry=$industry;
			$this->professions=$professions;
			$this->sex=$sex;
			$this->age=$age;
			$this->self_employment=$self_employment;
			$this->skills=$skills;
			$this->name_company=$name_company;
			$this->legal_address=$legal_address;
			$this->fact_address=$fact_address;
			$this->city=$city;
			$this->ogrn=$ogrn;
			$this->site=$site;
            $this->message=$message;
        }
    }

    class ArrayUser{
    	var $error=false;
    	var $userArr;
    	var $message;
        function __construct($error,$userArr,$message){
            $this->error=$error;
            $this->userArr=$userArr;
            $this->message=$message;
        }
    }

    class ArrayRegion{
        var $error=false;
        var $arrayRegion;
        var $message;
        function __construct($error,$arrayRegion,$message){
            $this->error=$error;
            $this->arrayRegion=$arrayRegion;
            $this->message=$message;
        }
    }

    class Region{
        var $idRegion;
        var $name;
        function __construct($idRegion,$name){
            $this->idRegion=$idRegion;
            $this->name=$name;
        }
    }


    class ArrayCity{
        var $error=false;
        var $arrayCity;
        var $message;
        function __construct($error,$arrayCity,$message){
            $this->error=$error;
            $this->arrayCity=$arrayCity;
            $this->message=$message;
        }
    }

    class City{
        var $idCity;
        var $name;
        function __construct($idCity,$name){
            $this->idCity=$idCity;
            $this->name=$name;
        }
    }

    class OneUser{
        var $typeUser;
        var $id;
        var $name;
        var $surname;
        var $patronymic;
        var $inn;
        var $phone_num;
        var $email;
        var $industry;
        var $professions;
        var $sex;
        var $age;
        var $self_employment;
        var $skills;
        var $name_company;
        var $legal_address;
        var $fact_address;
        var $city;
        var $ogrn;
        var $site;

        function __construct(
        	$typeUser,
        	$id,
        	$name,
        	$surname,
        	$patronymic,
        	$inn,
        	$phone_num,
        	$email,
        	$industry,
        	$professions,
        	$sex,
        	$age,
        	$self_employment,
        	$skills,
        	$name_company,
        	$legal_address,
        	$fact_address,
        	$city,
			$ogrn,
			$site){
            $this->typeUser=$typeUser;
            $this->id=$id;
            $this->name=$name;
            $this->surname=$surname;
			$this->patronymic=$patronymic;
			$this->inn=$inn;
			$this->phone_num=$phone_num;
			$this->email=$email;
			$this->industry=$industry;
			$this->professions=$professions;
			$this->sex=$sex;
			$this->age=$age;
			$this->self_employment=$self_employment;
			$this->skills=$skills;
			$this->name_company=$name_company;
			$this->legal_address=$legal_address;
			$this->fact_address=$fact_address;
			$this->city=$city;
			$this->ogrn=$ogrn;
			$this->site=$site;
        }
    }

    class Message{

    	var $error=false;
    	var $message;

    	function __construct($error,$message){
    		$this->error=$error;
    		$this->message=$message;
    	}

    }

    class api extends apiBaseClass {
    
        function getRegion(){
            $retJSON = $this->createDefaultJson();
            $sql=new apiBaseClass("andreymana_id121","localhost","andreymana_id121","&MS=$)zA07=J}dG2");//""$sql=new apiBaseClass("MakeWorkBase","localhost","mysql","mysql");
            $result=$sql->mySQLWorker->connectLink->query("SELECT `id`,`name` FROM `region` WHERE(`country_id` =0)");
            $i=0;
            while ($obj = $result->fetch_object()) {
                $mass[$i]=new Region($obj->id,$obj->name);
                $i++;
            }
            $retJSON=new ArrayRegion(false,$mass,null);
            
            return $retJSON;
        }

        function getCity($apiMethodParams){
            $retJSON = $this->createDefaultJson();
            if (isset($apiMethodParams->id)){
            $sql=new apiBaseClass("andreymana_id121","localhost","andreymana_id121","&MS=$)zA07=J}dG2");//""$sql=new apiBaseClass("MakeWorkBase","localhost","mysql","mysql");
            $result=$sql->mySQLWorker->connectLink->query("SELECT * FROM `city` WHERE(`region_id` =".$apiMethodParams->id.")");
            $i=0;
            while ($obj = $result->fetch_object()) {
                $mass[$i]=new City($obj->id,$obj->name);
                $i++;
            }
            $retJSON=new ArrayCity(false,$mass,null);
            }else{

            }
            return $retJSON;
        }

        function authentication($apiMethodParams) {
            $retJSON = $this->createDefaultJson();
            if ((isset($apiMethodParams->login))&&(isset($apiMethodParams->password))){
                $sql=new apiBaseClass("andreymana_id121","localhost","andreymana_id121","&MS=$)zA07=J}dG2");//""$sql=new apiBaseClass("MakeWorkBase","localhost","mysql","mysql");
                $result=$sql->mySQLWorker->connectLink->query("SELECT * FROM Users WHERE((login='".$apiMethodParams->login."')&&(password='".$apiMethodParams->password."'))");
                if($result->num_rows==1){
                    $obj = $result->fetch_object();
                    $retJSON=new User(false,$obj->TypeUser,$obj->id,$obj->Name,$obj->Surname,$obj->Patronymic,$obj->inn,$obj->phone_num,$obj->email,$obj->industry,$obj->professions,$obj->sex,$obj->age,$obj->self_employment,$obj->skills,$obj->name_company,$obj->legal_address,$obj->fact_address,$obj->city,$obj->ogrn,$obj->site,null);
                }else{
                    $retJSON=new User(true,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,"Неверный логин или пароль!");
                }
            }else{
                $retJSON=new User(true,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,"Указаны не все параметры");
            }
            return $retJSON;
        }   

        function getUserUnReg(){
            $mass=array();
            $i=0;
            $retJSON = $this->createDefaultJson();
            $sql=new apiBaseClass("andreymana_id121","localhost","andreymana_id121","&MS=$)zA07=J}dG2");//""$sql=new apiBaseClass("MakeWorkBase","localhost","mysql","mysql");
            $result=$sql->mySQLWorker->connectLink->query("SELECT * FROM Users WHERE((login='null')&&(password='null'))");
            if($result->num_rows>=1){
                while ($obj = $result->fetch_object()) {
                    $mass[$i]=new OneUser($obj->TypeUser,$obj->id,$obj->Name,$obj->Surname,$obj->Patronymic,$obj->inn,$obj->phone_num,$obj->email,$obj->industry,$obj->professions,$obj->sex,$obj->age,$obj->self_employment,$obj->skills,$obj->name_company,$obj->legal_address,$obj->fact_address,$obj->city,$obj->ogrn,$obj->site);
                    $i++;
                }
            	$retJSON=new ArrayUser(false,$mass,null);
        	}else{
                $retJSON=new ArrayUser(true,null,"Нет пользователей ожидающих регистрации!");
        	}
            return $retJSON;
        }

        private function strornull($s){
        	if(($s!=NULL)&&($s!='NULL')){
        		return "'".strval($s)."'";
        	}
        	return NULL;
        }

        function delUser($apiMethodParams){
            $retJSON = $this->createDefaultJson();
            if(isset($apiMethodParams->id)){
            	$sql=new apiBaseClass("andreymana_id121","localhost","andreymana_id121","&MS=$)zA07=J}dG2");
            	try {
            		$result=$sql->mySQLWorker->connectLink->query("SELECT `email` FROM `Users` WHERE(`id`=".$apiMethodParams->id.")");
            		$obj = $result->fetch_object();
            		$result=$sql->mySQLWorker->connectLink->query("DELETE FROM `Users` WHERE (`id`=".$apiMethodParams->id.")");
            		$root = $_SERVER['DOCUMENT_ROOT'];
            		require($root.'/PHP/PHPMailer/PHPMailerAutoload.php');
  					$mail = new PHPMailer;
  					$mail->addAddress($obj->email);//Почту менять ТУТ 
  					$mail->CharSet = "utf-8";
  					$mail->Subject = 'MakeWork';
  					$mail->msgHTML("От: сайта MakeWork <br> К сожалению вам отказано в регистрации.");
  					$r = $mail->send();
            	} catch (Exception $e) {
            		$retJSON=new Message(true,"Ошибка");
            	}
            	$retJSON=new Message(false,"Пользователь удалён");
           	}else{
                $retJSON=new Message(true,"Указаны не все параметры");
           	}
            return $retJSON;
        }

        function regUser($apiMethodParams){
            $retJSON = $this->createDefaultJson();
            if((isset($apiMethodParams->id))&&(isset($apiMethodParams->login))&&(isset($apiMethodParams->password))){
            	$sql=new apiBaseClass("andreymana_id121","localhost","andreymana_id121","&MS=$)zA07=J}dG2");
            	$result=$sql->mySQLWorker->connectLink->query("SELECT `Login` FROM `Users` WHERE (`Login`='".$apiMethodParams->login."')");
            	if($result->num_rows==0){
            		try {
            			$result=$sql->mySQLWorker->connectLink->query("UPDATE `Users` SET `Login`='".$apiMethodParams->login."',`Password`='".$apiMethodParams->password."' WHERE(`id`=".$apiMethodParams->id.")");
            		} catch (Exception $e) {
            			$retJSON=new Message(true,"Ошибка");
            		}
            		$result=$sql->mySQLWorker->connectLink->query("SELECT `email` FROM `Users` WHERE(`id`=".$apiMethodParams->id.")");
            		$obj = $result->fetch_object();
  					$root = $_SERVER['DOCUMENT_ROOT'];
            		require($root.'/PHP/PHPMailer/PHPMailerAutoload.php');
  					$mail = new PHPMailer;
  					$mail->addAddress($obj->email);//Почту менять ТУТ 
  					$mail->CharSet = "utf-8";
  					$mail->Subject = 'MakeWork';
  					$mail->msgHTML("От: сайта MakeWork <br> Ваша заявка на регистрацию успешно рассмотрена!!!<br>  Ваш логин : ".$apiMethodParams->login."<br>  Ваш пароль : ".$apiMethodParams->password);
  					$r = $mail->send();
            		$retJSON=new Message(false,"Пользователь зарегистрирован");
            	}else{
                	$retJSON=new Message(true,"Такой логин уже существует!");
            	}
            }else{
                $retJSON=new Message(true,"Указаны не все параметры");
            }
            return $retJSON;
        }

        function registration($apiMethodParams){
            $retJSON = $this->createDefaultJson();
            if (((($apiMethodParams->name!='null')&&($apiMethodParams->surname!='null')&&($apiMethodParams->typeUser!='null'))||($apiMethodParams->name_company!='null'))&&($apiMethodParams->email!='null')){
                $sql=new apiBaseClass("andreymana_id121","localhost","andreymana_id121","&MS=$)zA07=J}dG2");
                //$result=$sql->mySQLWorker->connectLink->query("SELECT * FROM Users WHERE(login='".$apiMethodParams->login."')");
                //if($result->num_rows==0){
                    $result=$sql->mySQLWorker->connectLink->query("INSERT INTO `Users`(`id`, `Name`, `Surname`, `Login`, `Password`, `TypeUser`, `Patronymic`, `inn`, `phone_num`, `email`, `industry`, `professions`, `sex`, `age`, `self_employment`, `skills`, `name_company`, `legal_address`, `fact_address`, `city`, `ogrn`, `site`) VALUES (null,".$this->strornull($apiMethodParams->name).",".$this->strornull($apiMethodParams->surname).",".$this->strornull($apiMethodParams->login).",".$this->strornull($apiMethodParams->password).",".$apiMethodParams->typeUser.",".$this->strornull($apiMethodParams->patronymic).",".$this->strornull($apiMethodParams->inn).",".$this->strornull($apiMethodParams->phone_num).",".$this->strornull($apiMethodParams->email).",".$this->strornull($apiMethodParams->industry).",".$this->strornull($apiMethodParams->professions).",".$apiMethodParams->sex.",".$apiMethodParams->age.",".$this->strornull($apiMethodParams->self_employment).",".$this->strornull($apiMethodParams->skills).",".$this->strornull($apiMethodParams->name_company).",".$this->strornull($apiMethodParams->legal_address).",".$this->strornull($apiMethodParams->fact_address).",".$this->strornull($apiMethodParams->city).",".$this->strornull($apiMethodParams->ogrn).",".$this->strornull($apiMethodParams->site).")");
                    $retJSON=new Message(false,"Пользователь зарегистрирован");
                //}else{
                  //  $retJSON=new Message(true,"Логин занят!");
                //}
            }else{
                $retJSON=new Message(true,"Указаны не все параметры");
            }
            return $retJSON;
        }

        function createOrder($apiMethodParams){
            $retJSON = $this->createDefaultJson();
            $sql=new apiBaseClass("andreymana_id121","localhost","andreymana_id121","&MS=$)zA07=J}dG2");
            
            $result=$sql->mySQLWorker->connectLink->query("INSERT INTO `Orders`(`id`, `name`, `description`, `user_id`, `industry_id`, `region_id`, `city_id`, `address`, `start_data`, `end_data`, `scope_of_services`, `count_worker`, `count_hour`, `sex`, `age`, `citizenship`, `med_book`, `driver_license`, `other_right`, `experience`, `training`, `schedule`, `shift_nd`, `form`, `housing`, `many_description`, `approved`) VALUES (null,".$this->strornull($apiMethodParams->name).",".$this->strornull($apiMethodParams->description).",".$apiMethodParams->user_id.",".$apiMethodParams->industry.",".$apiMethodParams->region.",".$apiMethodParams->city.",".$this->strornull($apiMethodParams->legal_address).",".$this->strornull($apiMethodParams->start_date).",".$this->strornull($apiMethodParams->end_date).",".$this->strornull($apiMethodParams->scope_of_services).",".$apiMethodParams->count_worker.",".$apiMethodParams->count_hour.",".$apiMethodParams->sex.",".$apiMethodParams->age.",".$this->strornull($apiMethodParams->citizenship).",".$apiMethodParams->med_book.",".$apiMethodParams->driver_license.",".$this->strornull($apiMethodParams->other_right).",".$apiMethodParams->experience.",".$apiMethodParams->training.",".$apiMethodParams->schedule.",".$apiMethodParams->shift_nd.",".$apiMethodParams->form.",".$apiMethodParams->housing.",".$this->strornull($apiMethodParams->many_description).",0)");
            $retJSON=new Message(false,"");
            return $retJSON;
        }

        function getIndustry(){
            $retJSON = $this->createDefaultJson();
            try{
                $mass=array();
                $sql=new apiBaseClass("andreymana_id121","localhost","andreymana_id121","&MS=$)zA07=J}dG2");
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
                	$sql=new apiBaseClass("andreymana_id121","localhost","andreymana_id121","&MS=$)zA07=J}dG2");
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


        function getOrders($apiMethodParams){
            $retJSON = $this->createDefaultJson();
            if(isset($apiMethodParams->industry_id)){
                try{
                    $mass=array();
                	$sql=new apiBaseClass("andreymana_id121","localhost","andreymana_id121","&MS=$)zA07=J}dG2");
                    $result=$sql->mySQLWorker->connectLink->query("
                        SELECT `Orders`.id,`Orders`.`profession_id`,`Orders`.`industry_id`,`Orders`.`name`,`Orders`.`description`,`Orders`.`price`,`Users`.`Name` as 'userN' ,`Users`.`Surname` as 'userS' FROM `Orders` inner join `Users`on(`Orders`.`user_id`=`Users`.`id`)WHERE (`Orders`.industry_id=".$apiMethodParams->industry_id.")"); 
                    $i=0;
                    while ($obj = $result->fetch_object()) {
                        $mass[$i]=new OrdersElem($obj->id,$obj->profession_id,$obj->industry_id,$obj->name,$obj->description,$obj->price,$obj->userN,$obj->userS);
                        $i++;
                    }
                    $retJSON=new Orders(false,$mass);
                }catch(Exception $ex){
                    $retJSON=new Orders(true,null);
                }
            }else{
                if(isset($apiMethodParams->profession_id)){
                    try{
                        $mass=array();
                		$sql=new apiBaseClass("andreymana_id121","localhost","andreymana_id121","&MS=$)zA07=J}dG2");
                        $result=$sql->mySQLWorker->connectLink->query("
                            SELECT `Orders`.id,`Orders`.`profession_id`,`Orders`.`industry_id`,`Orders`.`name`,`Orders`.`description`,`Orders`.`price`,`Users`.`Name` as 'userN' ,`Users`.`Surname` as 'userS' FROM `Orders` inner join `Users`on(`Orders`.`user_id`=`Users`.`id`)WHERE (`Orders`.profession_id=".$apiMethodParams->profession_id.")"); 
                            $i=0;
                        while ($obj = $result->fetch_object()) {
                            $mass[$i]=new OrdersElem($obj->id,$obj->profession_id,$obj->industry_id,$obj->name,$obj->description,$obj->price,$obj->userN,$obj->userS);
                            $i++;
                        }
                        $retJSON=new Orders(false,$mass);
                    }catch(Exception $ex){
                        $retJSON=new Orders(true,null);
                    }
                }else{
                    $retJSON=new Orders(true,null);
                }

            }
            return $retJSON;
        }

        function getAdvert($apiMethodParams){
            $retJSON = $this->createDefaultJson();
            if(isset($apiMethodParams->industry_id)){
                try{
                    $mass=array();
                	$sql=new apiBaseClass("andreymana_id121","localhost","andreymana_id121","&MS=$)zA07=J}dG2");
                    $result=$sql->mySQLWorker->connectLink->query("
                        SELECT `Advert`.id,`Advert`.`profession_id`,`Advert`.`industry_id`,`Advert`.`name`,`Advert`.`description`,`Advert`.`price`,`Users`.`Name` as 'userN' ,`Users`.`Surname` as 'userS' FROM `Advert` inner join `Users`on(`Advert`.`user_id`=`Users`.`id`)WHERE (`Advert`.industry_id=".$apiMethodParams->industry_id.")"); 
                    $i=0;
                    while ($obj = $result->fetch_object()) {
                        $mass[$i]=new OrdersElem($obj->id,$obj->profession_id,$obj->industry_id,$obj->name,$obj->description,$obj->price,$obj->userN,$obj->userS);
                        $i++;
                    }
                    $retJSON=new Orders(false,$mass);
                }catch(Exception $ex){
                    $retJSON=new Orders(true,null);
                }
            }else{
                if(isset($apiMethodParams->profession_id)){
                    try{
                        $mass=array();
                		$sql=new apiBaseClass("andreymana_id121","localhost","andreymana_id121","&MS=$)zA07=J}dG2");
                        $result=$sql->mySQLWorker->connectLink->query("
                            SELECT `Advert`.id,`Advert`.`profession_id`,`Advert`.`industry_id`,`Advert`.`name`,`Advert`.`description`,`Advert`.`price`,`Users`.`Name` as 'userN' ,`Users`.`Surname` as 'userS' FROM `Advert` inner join `Users`on(`Advert`.`user_id`=`Users`.`id`)WHERE (`Advert`.profession_id=".$apiMethodParams->profession_id.")"); 
                            $i=0;
                        while ($obj = $result->fetch_object()) {
                            $mass[$i]=new OrdersElem($obj->id,$obj->profession_id,$obj->industry_id,$obj->name,$obj->description,$obj->price,$obj->userN,$obj->userS);
                            $i++;
                        }
                        $retJSON=new Orders(false,$mass);
                    }catch(Exception $ex){
                        $retJSON=new Orders(true,null);
                    }
                }else{
                    $retJSON=new Orders(true,null);
                }

            }
            return $retJSON;
        }

    }

?>