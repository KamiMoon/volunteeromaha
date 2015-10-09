<?php


class LeaderboardHelper extends AppHelper {
	
	public function getBadgeForUser($hour){
		$html = "";
		
		$gold = Configure::read('Leaderboard.user.gold');
		$silver = Configure::read('Leaderboard.user.silver');
		$bronze = Configure::read('Leaderboard.user.bronze');
		
		if ($hour >= $gold){
			$html = "<img src='/volunteeromaha/img/gold.png'>";
		}else if ($hour >= $silver AND $hour < $gold){
			$html = "<img src='/volunteeromaha/img/silver.png'>";
		}else if ($hour >= $bronze AND $hour < $silver){
			$html = "<img src='/volunteeromaha/img/bronze.png'>";
		}
		
		return $html;
	}
	
	public function getBadgeForSchool($hour){
		$html = "";
	
		if ($hour >= 500){
			$html = "<img src='/volunteeromaha/img/gold.png'>";
		}else if ($hour >= 300 AND $hour < 500){
			$html = "<img src='/volunteeromaha/img/silver.png'>";
		}else if ($hour >= 100 AND $hour < 300){
			$html = "<img src='/volunteeromaha/img/bronze.png'>";
		}
	
		return $html;
	}
	
	public function getBadgeForOrganization($hour){
		$html = "";
	
		if ($hour >= 500){
			$html = "<img src='/volunteeromaha/img/gold.png'>";
		}else if ($hour >= 300 AND $hour < 500){
			$html = "<img src='/volunteeromaha/img/silver.png'>";
		}else if ($hour >= 100 AND $hour < 300){
			$html = "<img src='/volunteeromaha/img/bronze.png'>";
		}
	
		return $html;
	}
	
}