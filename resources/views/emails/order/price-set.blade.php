<style type="text/css">
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
</style>
<h1>Price has been set on order number {{$order_number}}</h1>

<table class="gridtable">
    <thead>
        <tr>
            <th>Brand</th>
            <th>Model</th>
            <th>Size</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$brand}}</td>
            <td>{{$model}}</td>
            <td>{{$size}}</td>
            <td>${{$price}}</td>
        </tr>
    </tbody>
</table>