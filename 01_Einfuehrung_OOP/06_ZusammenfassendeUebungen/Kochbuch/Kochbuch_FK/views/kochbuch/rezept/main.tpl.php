<html>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

    <h2>Kochbuch</h2>

    <br>

    <div id="rezept">
    </div>

    <br>

    Zutaten:
    <br>
    <div id="zutaten"></div>
    <br><br>



    <a href="/View/kochbuch/uebersicht"><button type="button">Zurück</button></a>


    <script>
        var url_string = window.location.href; //window.location.href
		var url = new URL(url_string);
		var rezept_id = url.searchParams.get("rezeptid");

		$.ajax
		({
			url: 'http://localhost/API/kochbuch/showRezept?rezeptid='+rezept_id,
			dataType: 'json',
			type: 'get',
			cache: false,
			success: function(data)						
			{
				var rezept_data = '';
				$(data).each(function(index, value)
				{								
					rezept_data += value.name; 
                    rezept_data += '<br><br>';
                    rezept_data += 'Zubereitungszeit: '+value.time+' Minuten';
					rezept_data += '<br><br>';                           
                    rezept_data += value.text;
				})
				$('#rezept').append(rezept_data);
			}
		});

        $.ajax
		({
			url: 'http://localhost/API/kochbuch/showRezeptZutaten?rezeptid='+rezept_id,
			dataType: 'json',
			type: 'get',
			cache: false,
			success: function(data)						
			{
				var zutaten_data = '';
                var calories_gesamt = 0;
				$(data).each(function(index, value)
				{	calories = parseInt(value.calories);							
					zutaten_data += '- '+value.name+', Menge: '+value.amount+', Kalorien: '+value.calories+'<br>';
                    calories_gesamt = calories_gesamt + calories;
				})
                zutaten_data += '<br>';
                zutaten_data += 'Gesamte Kalorien: '+calories_gesamt;
				$('#zutaten').append(zutaten_data);
			}
		});
	</script>

    

</body>
</html>