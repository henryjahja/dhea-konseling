<?php
define('ROOT', dirname(__FILE__) . '/');
define('SITE_ROOT', '/' . basename(dirname(__FILE__)) . '/');
 
function element($tag_name, $content = '', $attributes = NULL) {
 if ($attributes) {
 $html_string = "<$tag_name";
 foreach ($attributes as $key => $value) {
 $html_string .= " {$key}="{$value}"";
 }
 $html_string .= ">";
 } else {
 $html_string = "<$tag_name>";
 }
 $html_string .= $content;
 $html_string .= "</$tag_name>";
 return $html_string;
}
 
?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
 
<head>
 <title>Calendar</title>
 <link rel="stylesheet" type="text/css" href="global.css" />
</head>
 
<body>
<div id="wrap">
 
<h1><a href="<?php echo SITE_ROOT; ?>">Simple PHP Calendar</a></h1>
 
<div id="bd">
 
 <?php
 
 $number_of_months = 2;
 
 $current_month = date('n');
 $first_of_the_month = mktime(0, 0, 0, date('n'), 1, date('Y'));
 $date_start = mktime(0, 0, 0, date('n'), 1-date('w', $first_of_the_month), date('Y'));
 $end_date = mktime(0, 0, 0, date('n') + $number_of_months, 0, date('Y'));
 
 $theadrow_contents = '';
 foreach (array('Su', 'M', 'T', 'W', 'Th', 'F', 'Sa') as $day) {
 $theadrow_contents .= element('th', $day);
 }
 $thead_contents = element('tr', $theadrow_contents);
 
 $tbody_contents = '';
 $current_date = $date_start;
 $i = 0;
 while ($current_date < $end_date) {
 
 $tr_contents = '';
 
 for ($j = 0; $j < 7; $j++) {
 $current_date = strtotime('+' . (($i*7)+$j) . 'days', $date_start);
 
 $td_classes = array();
 $month_difference = date('n', $current_date) - date('n');
 switch ($month_difference) {
 case 0:
 $td_classes[] = 'current-month';
 break;
 case 1:
 $td_classes[] = 'next-month';
 break;
 }
 if (date('w', $current_date) == 0 || date('w', $current_date) == 6) {
 $td_classes[] = 'weekend';
 }
 
 $tr_contents .= element('td', ((date('j', $current_date) == 1)?date('n', $current_date).'.':'') . date('j', $current_date), array('class' => implode(' ', $td_classes)));
 }
 
 $tbody_contents .= element('tr', $tr_contents);
 $i++;
 }
 
 echo element('table', element('thead', $thead_contents) . element('tbody', $tbody_contents), array('id' => 'calendar', 'cellpadding' => 0, 'cellspacing' => 0));
 
 //pr($current_month, date('m/d/y', $first_of_the_month), date('m/d/y', $date_start));
 ?>
 </div>
</div>