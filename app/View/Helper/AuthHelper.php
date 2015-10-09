<?php

App::uses('CakeSession', 'Model/Datasource');

class AuthHelper extends AppHelper {

	public function getUser(){
		return CakeSession::read('Auth.User');
	}
	
	function isLoggedIn(){
		$user = $this->getUser();
		return !empty($user);
	}
	
	public function getPrivileges(){
		return CakeSession::read('privileges');
	}
	
	public function isVoAdmin(){
		$privileges = $this->getPrivileges();
		return $privileges['isVoAdmin'];
	}
	
	public function isOrgAdmin($organizationId = false, $roleId = false){
		if($organizationId && $roleId){
			$privileges = $this->getPrivileges();
				
			$isAdmin = false;
				
			//do i have active org admin privileges of the desired kind?
			if(isset($privileges['orgAdmins']) && isset($privileges['orgAdmins'][$organizationId]) && isset($privileges['orgAdmins'][$organizationId][$roleId])){
				if($privileges['orgAdmins'][$organizationId][$roleId] == 2){
					return true;
				}
			}
				
			return $privileges['isVoAdmin'] || $isAdmin;
		}else{
			$privileges = $this->getPrivileges();
			return $privileges['isVoAdmin'] || $privileges['isOrgAdmin'];
		}
	}
	
	function isOrgAdminFor($organizationId){
		return $this->isOrgAdmin($organizationId, 2) || $this->isOrgAdmin($organizationId, 3);
	}
	
	public function isMyId($id){
		$user = $this->getUser();
		return $id === $user['id'];
	}

	public function isMine($id){
		return $this->isVoAdmin() || $this->isMyId($id);
	}
	
	
	
	
}