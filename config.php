<?php
session_start();
if (isset($_POST['btn'])) {
	$_SESSION ["new"] = $_POST;
}

///////////////////////////////
// All versions (first part) //
///////////////////////////////

$my_name = $_SESSION["new"]['firstname']." ".$_SESSION["new"]['name'] ;
$my_mail = $_SESSION["new"]['email'];
$age = $_SESSION["new"]['age'];
$tel = $_SESSION["new"]['tel'];
$secret = "mysecret";
$title = "$my_name | $my_mail";
$personnal_infos = array(
	"Mail : <a href=\"mailto:$my_mail\">$my_mail</a>");
$personnal_infos_full = array(
	"$age ans",
    "Mail : <a href=\"mailto:$my_mail\">$my_mail</a>",
	"Tel : $tel");
$profile_title = "Profile";
$profile_desc = $_SESSION["new"]["profildesc"];
$aim_title = "Objectif";
$aim_desc = $_SESSION["new"]["objdesc"];
$skills_name = "Compétences";
$first_skill = $_SESSION["new"]["comp1"];
$first_skill_desc = $_SESSION["new"]["comp1desc"];
$second_skill = $_SESSION["new"]["comp2"];
$second_skill_desc = $_SESSION["new"]["comp2desc"];
$third_skill = $_SESSION["new"]["comp3"];
$third_skill_desc = $_SESSION["new"]["comp1desc"];
$knowledges_title = "Connaissances";
$experience_title = "Expérience";
$all_jobs = array(
	array(
		$_SESSION["new"]["society_name1"],
		$_SESSION["new"]["poste1"],
		$_SESSION["new"]["start_year1"]."-".$_SESSION["new"]["finish_year1"],
		$_SESSION["new"]["expdesc1"]),
	array(
		$_SESSION["new"]["society_name2"],
		$_SESSION["new"]["poste2"],
		$_SESSION["new"]["start_year2"]."-".$_SESSION["new"]["finish_year2"],
		$_SESSION["new"]["expdesc2"]),
);
$education_title = "Formations";
$all_education = array(
	array(
		$_SESSION["new"]["formtitle1"],
		$_SESSION["new"]["formdesc1"]
	),
	array(
		$_SESSION["new"]["formtitle2"],
		$_SESSION["new"]["formdesc2"],
	),
);
$hobby_title = "Loisirs";
$hobby_list = array(
	$_SESSION["new"]["loi1"],
	$_SESSION["new"]["loi2"],
	$_SESSION["new"]["loi3"]
);
//////////////////////////////
// All versions (last part) //
//////////////////////////////

// Knowledges
$first_knowledges = array(
	$_SESSION["new"]["conn1"],
	$_SESSION["new"]["conn2"],
	$_SESSION["new"]["conn3"]
);
?>
