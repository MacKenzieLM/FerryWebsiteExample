<html>	
<head>
<script>
		function updateNewPrice() {
			var oldPrice = document.getElementsByName("old_price")[0].value;
			var discountPrct = document.getElementsByName("percent")[0].value;	
			if (!isNaN(oldPrice) && !isNaN(discountPrct)) {
				//var discount = (oldPrice / 100) * discountPrct;
				var count = (discountPrct / 100) * oldPrice;
				var discount = oldPrice - count;
				if (discount > 0)
					document.getElementsByName("new_price")[0].value = discount;
			}
		}
	</script>
</head>	
<body>


<form method="post" action="" enctype="multipart/form-data">

	old Price : <input onkeydown="updateNewPrice()" type="number" name="old_price" value=""><br>
	discount : <input onkeydown="updateNewPrice()" type="number" name="percent" value=""><br>
	new price : <input type="number" name="new_price" value=""><br>
	<input type="submit" id="submit" value="submit">
</form>

</body>
</html>
