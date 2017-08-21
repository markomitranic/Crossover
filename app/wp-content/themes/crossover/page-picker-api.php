<?php
header( 'Content-type: application/json' );
/*
Template Name: API: Technology Picker Page Template
*/

if (!isset($_POST['category'])) {
	die(json_encode([
		'error'     => 400,
		'message'   => "No category provided"
	]));
} else {
	$category = $_POST['category'];
	$posts = getCategoryPosts($category);
	$results = [];

	foreach ($posts as $post) {
		$timeslots = getTimeslotsFromCourse($post->post_title, get_permalink($post), get_field('schedule', $post->ID));
		$results = array_merge($results, $timeslots);
	}

	$results = sortArrayByKeyValue($results, 'timestamp');

	die(json_encode($results));
}

function getCategoryPosts ($categorySlug) {
	return get_posts([
		'category_name'     => $categorySlug,
		'posts_per_page'    => -1,
		'post_type'         => 'post'
	]);
}

function getTimeslotsFromCourse ($courseName, $permalink, $schedule) {
	$timeslots = [];
	foreach ($schedule as $timeSlot) {
		$startDate = DateTime::createFromFormat('d/m/Y H:i e', $timeSlot['start_date'] . ' 18:00 Europe/Belgrade');

		$formattedTimeslot = [
			'name'      => $courseName,
			'link'      => $permalink,
			'timestamp' => ($startDate) ? $startDate->getTimestamp() : null,
			'date'      => ($startDate) ? date('d. F Y', $startDate->getTimestamp()) : 'Po zahtevu',
		];

		array_push($timeslots, $formattedTimeslot);
	}

	return $timeslots;
}

function sortArrayByKeyValue($array, $key)
{
	function compareKeys($key) {
		return function ($a, $b) use ($key) {
			return strnatcmp($a[$key], $b[$key]);
		};
	}
	usort($array, compareKeys($key));
	return $array;
}








//
//{
//	"items": [
//		{
//			"name": "A0 Uvod u SWIFT programski jezik",
//			"link": "http://homullus.com",
//			"date": "22.05.2017",
//			"state": "Popunjen"
//		},
//		{
//			"name": "A1 Uvod u SWIFT programski jezik",
//			"link": "http://homullus.com",
//			"date": "22.05.2017",
//			"state": "Popunjen"
//		}
//	]
//}

?>