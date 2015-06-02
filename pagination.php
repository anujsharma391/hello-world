<html>
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
	    $(document).ready(function(){
		$('#data').after('<div id="nav"></div>');
		var rowsShown = 4;
		var rowsTotal = $('#data tbody tr').length;
		var numPages = rowsTotal/rowsShown;
		for(i = 0;i < numPages;i++) {
		    var pageNum = i + 1;
		    $('#nav').append('<a href="#" rel="'+i+'">'+pageNum+'</a> ');
		}
		$('#data tbody tr').hide();
		$('#data tbody tr').slice(0, rowsShown).show();
		$('#nav a:first').addClass('active');
		$('#nav a').bind('click', function(){
     
		    $('#nav a').removeClass('active');
		    $(this).addClass('active');
		    var currPage = $(this).attr('rel');
		    var startItem = currPage * rowsShown;
		    var endItem = startItem + rowsShown;
		    $('#data tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
			    css('display','table-row').animate({opacity:1}, 300);
		});
	    });
	</script>
	<style>
		table, th, td {
		    cellpadding:1px;
		    cellspacing:1px;
		}
		th{
		    background:#B4F114;
		}
		.active {
		    background:red;
		}
	</style>
</head>
<body>
    <table id="data">
	<thead>
	<tr>
	    <th>S.No</th>
	    <th>Category</th>
	    <th>Product</th>
	    <th>Price</th>
	    <th>Status</th>
	</tr>
	</thead>
	<tbody>
	<tr>
	    <td>1</td>
	    <td>Clothing</td>
	    <td>North Jacket</td>
	    <td>$189.99</td>
	    <td>In-stock</td>
	</tr>
	<tr>
	    <td>2</td>
	    <td>Shoes</td>
	    <td>Nike</td>
	    <td>$59.99</td>
	    <td>In-stock</td>
	</tr>
	<tr>
	    <td>3</td>
	    <td>Electronics</td>
	    <td>LED TV</td>
	    <td>$589.99</td>
	    <td>Out of stock</td>
	</tr>
	<tr>
	    <td>4</td>
	    <td>Sporting </td>
	    <td>Ping Golf </td>
	    <td>$159.99</td>
	    <td>In-stock</td>
	</tr>
	<tr>
	    <td>5</td>
	    <td>Clothing</td>
	    <td>Sweater</td>
	    <td>$19.99</td>
	    <td>In-stock</td>
	</tr>
	<tr>
	    <td>6</td>
	    <td>Clothing</td>
	    <td>North Jacket</td>
	    <td>$189.99</td>
	    <td>In-stock</td>
	</tr>
	<tr>
	    <td>7</td>
	    <td>Shoes</td>
	    <td>Nike</td>
	    <td>$59.99</td>
	    <td>In-stock</td>
	</tr>
	<tr>
	    <td>8</td>
	    <td>Electronics</td>
	    <td>LED TV</td>
	    <td>$589.99</td>
	    <td>Out of stock</td>
	</tr>
	<tr>
	    <td>9</td>
	    <td>Sporting</td>
	    <td>Ping Golf</td>
	    <td>$159.99</td>
	    <td>In-stock</td>
	</tr>
	<tr>
	    <td>10</td>
	    <td>Shoes</td>
	    <td>Nike</td>
	    <td>$59.99</td>
	    <td>In-stock</td>
	</tr>
	<tr>
	    <td>11</td>
	    <td>Electronics</td>
	    <td>LED TV</td>
	    <td>$589.99</td>
	    <td>Out of stock</td>
	</tr>
	<tr>
	    <td>12</td>
	    <td>Sporting </td>
	    <td>North Jacket </td>
	    <td>$159.99</td>
	    <td>In-stock</td>
	</tr>
     
	</tbody>
    </table>
</body>
</html>

