<!-- ____________ *** SALES *** ______________ -->
<?php

    echo "<table class='table'>";
	echo "<tr>";
		echo "<th>Sales</th>";
		echo "<th><input type='search' name='sale_search' value='search'></th>";
	echo "</tr>";

	echo "<tr>";
		echo "<td>Sales Number</td>";
		echo "<td>Product Name</td>";
		echo "<td>Product Code</td>";
		echo "<td>Payment Method</td>";
		echo "<td>Quantity</td>";
		echo "<td>Date Purchased</td>";
		echo "<td>Unit Price</td>";
		echo "<td>Sum Total</td>";
		echo "<td>Customer Number</td>";
		echo "<td>Invoice Number</td>";
		echo "<td>Supplier Code</td>";
		echo "<td>Delete";
		echo "</td>";
	echo "</tr>";
    
    foreach($sales as $sale){
        
        $sales_nr = $sale['sales_nr'];
        $product_name = $sale['product_name'];
        $product_code = $sale['product_code'];
        $payment = $sale['payment_method'];
        $qty = $sale['quantity'];
        $date = $sale['date'];
        $unit_price = $sale['unit_price'];
        $total = $sale['sum_total'];
        $customer_nr = $sale['customer_nr'];
        $report = $sale['reports'];
        $supplier_code = $sale['supplier_code'];
        
        echo "<tr>";
        echo "<td>$sales_nr</td>";
        echo "<td>$product_name</td>";
        echo "<td>$product_code</td>";
        echo "<td>$payment</td>";
        echo "<td>$qty</td>";
        echo "<td>$date</td>";
        echo "<td>$unit_price</td>";
        echo "<td>$total</td>";
        echo "<td>$customer_nr</td>";
        echo "<td>$report</td>";
        echo "<td>$supplier_code</td>";
        
        echo "<td>";
        echo "<a href='#' class='stable' id='$sales_nr'>Delete</a>";
        echo "</td>";
        echo"</tr>";
    }
    echo "</table>";

?>