(function($) {

	$jq(document).ready(function()
	{

		var header_h = $jq("#header").height();
		
		$jq("a#search_btn").on("click",
		
		function()
		{
			$jq("#header").css("margin-top", "60px");
			$jq("#block-search-form").css("height","60px");
			$jq(this).toggleClass('hide');
			$jq("a#close_btn").toggleClass('hide');
			return false;
		});
		
		$jq("a#close_btn").on("click",
		
		function()
		{
			$jq("#header").css("margin-top", "0");
			$jq("#block-search-form").css("height","0");
			$jq(this).toggleClass('hide');
			$jq("a#search_btn").toggleClass('hide');
			return false;
		});

	});

})(jQuery);