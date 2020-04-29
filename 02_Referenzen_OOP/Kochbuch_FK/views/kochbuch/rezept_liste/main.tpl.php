<html>

    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>

    <style>
        table, th, td 
        {
            border: 1px solid black;
        }
    </style>

    <body>
    <h2>Kochbuch</h2>

    <br>

    <table class="table table-borderless">
		<thead>
			<tr>
				<th>Name</th>
				<th>Zubereitungszeit</th>
				<th></th>
			</tr>
		</thead>

		<tbody id="rezepte">			
		<tbody>
	</table>


    <br>
    <a href="/View/kochbuch/main"><button type="button">Zurück</button></a>

    <script>
		$.ajax
		({
			url: 'http://localhost/API/kochbuch/showRezepte',
			dataType: 'json',
			type: 'get',
			cache: false,
			success: function(data)						
			{
				var prozess_data = '';
				$(data).each(function(index, value)
				{								
					prozess_data += '<tr>';
                        prozess_data += '<td>'+value.name+'</td>';
                        prozess_data += '<td>'+value.time+' Minuten</td>';
						prozess_data += '<td>';
							prozess_data += '<a href="/View/kochbuch/rezept?rezeptid='+value.id+'">';
								prozess_data += '<button type="button">Ansehen</button>';
							prozess_data += '</a>';
					    prozess_data += '</td>';
		    		prozess_data += '</tr>';
				})
				$('#rezepte').append(prozess_data);
			}
		});
	</script>

    
</body>
</html>