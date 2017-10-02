<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <script src="jquery-3.2.1.js"></script>
    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.min.js"></script>
    </head>
 <body>

     <h1  class="bg-primary" align="center">Guest Detail</h1>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Search</span>
                        <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
                    </div>

                </div>
              
                <div id="result"></div>
           
     

      
 </body>
</html>


<script>
        $(document).ready(function(){
        load_data();
        function load_data(query)
        {
            $.ajax({
            url:"data.php",
            method:"POST",
            data:{query:query},
            success:function(data)
            {
                $('#result').html(data);
            }
            });
        }
        $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
                load_data(search);
            }
            else
            {
                load_data();
            }
        });
    });
</script>