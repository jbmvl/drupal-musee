(function($) {

	$jq(document).ready(function()
	{

		$jq("#block-search-form").hide();
		var header_h = $jq("header").height();
		$jq("a#search_btn").on("click",
		
			function()
			{

			$jq('#block-search-form').show(
			    function(){

				$jq(this).animate({
					opacity: 1,
					top: header_h+25
				}, 300);

		    	});
		});

	});

})(jQuery);