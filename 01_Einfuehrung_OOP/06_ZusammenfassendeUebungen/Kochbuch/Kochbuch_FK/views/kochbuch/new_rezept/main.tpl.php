<html>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

    <h2>Kochbuch</h2>

    <br>

    <form action="http://localhost/API/kochbuch/newRezept" method="post">

        Rezept-Name:
        <input type="text" name="name">

        <br>
        <br>

        Zubereitungszeit:
        <input type="text" name="time">

        <br>
        <br>

        Zubereitungsanleitung:
        <br>
        <textarea rows="4" cols="50" name="text"></textarea>
        
        <br>
        <br>

        Zutaten:
        <br>

        <select id="select1" name='zutaten[]' style='width: 200px;'>
        </select>
        Menge: 
        <input type='text' name='amount[]'>
        <br>
        <br>

        <select id="select2" name='zutaten[]' style='width: 200px;'>
        </select>
        Menge: 
        <input type='text' name='amount[]'>
        <br>
        <br>

        <select id="select3" name='zutaten[]' style='width: 200px;'>
        </select>
        Menge: 
        <input type='text' name='amount[]'>
        <br>
        <br>

        <br>
        <br>

        <a href="/View/kochbuch/main"><button type="button">Zurück</button></a>
        <button type="submit">Absenden</button>

    </form>


    <script>
		$.ajax
		({
			url: 'http://localhost/API/kochbuch/showZutaten',
			dataType: 'json',
			type: 'get',
			cache: false,
			success: function(data)						
			{
				var prozess_data = '';
                prozess_data += '<option disabled selected>Wähle ...</option>';
				$(data).each(function(index, value)
				{								
					prozess_data += '<option value="'+value.id+'">'+value.name+'</option>';
				})
                for( i = 1; i <= 3; i++)
                {
				    $('#select'+i).append(prozess_data);
                }
			}
		});
	</script>

</body>

</html>