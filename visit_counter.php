In plugin editor: advanced-page-visit-counter/public/class-advanced-page-visit-counter-public.php

//$allTimeCount = " | Total: ".($allTime+$existingAllCounts); changed to: 
			$allTimeCount = " ".($allTime+$existingAllCounts);

//echo $html = "<div class='avc_visit_counter_front' style='".$borderCSS.$bgColor.$borderRadius.$font_size.$font_style.$font_color."".$shWidth."'>".__($counter_label)." ".$pageCnt." ".$todaysCount." ".$allTimeCount."</div>"; changed to: 
		
		echo $html = "<div class='avc_visit_counter_front' style='".$borderCSS.$bgColor.$borderRadius.$font_size.$font_style.$font_color."".$shWidth."'>".__($counter_label)." ".$allTimeCount."</div>";
