<?php
$today = date("D");
switch($today){
	case "Mon":
		echo "Today is Monday, wash dishes.";
		break;
	case "Tue":
		echo "Today is Tuesday, do laundry .";
		break;
	case "Wed":
		echo "Today is Wednesday, dust off ceiling.";
		break;
	case "Thu":
		echo "Today is Thursday, .";
		break;
	case "Fri":
		echo "Today is Friday.";
		break;
	case "Sat":
		echo "Today is Saturday.";
		break;
	case "Sun":
		echo "Today is Sunday.";
		break;
	default:
		echo "Invalid Day!";
		break;
}
?>
