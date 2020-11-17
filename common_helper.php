<?php

/*
* This helpers store collections of standalone functions which views requires
*/


/*
* This define tooltip along with payment information
*/
if (!function_exists('get_payment_details_on_tooltip')) {
	function get_payment_details_on_tooltip($taxdata_id, $county_name, $tax_id, $tax_year, $unique_div_id)
	{
		return '<div id="' . $taxdata_id . '" class="tooltip_custom" onMouseover="paidby(\'' . $county_name . '\',\'' . $tax_id . '\',' . $tax_year . ',' . $taxdata_id . ',' . $unique_div_id . ')">PAID<div class="payment_status_box"><span id="' . $unique_div_id . '"></span></div></div>';
	}
}
