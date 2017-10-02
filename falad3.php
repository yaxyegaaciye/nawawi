<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>SAHAL GAS | LIST CUSTOMER</title>
        <?php include("falad2.php"); ?>
    </head>
 <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-9"><br />
                <h4 align="center">Student details</h4><br/>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Search</span>
                        <input type="text" name="search_text" id="search_text" 
                        placeholder="Search student " class="form-control" />
                    </div>
                </div>
            </div>
            <div class="col-sm-1">
               <a href="register.php" class="btn btn-info" role="button">
                   <span class="glyphicon glyphicon-plus"></span>  Ad New</a>
           </div> 
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="result"></div>
            </div>
        </div>
    </div>
 </body>
</html>


<script>
        $(document).ready(function(){
        load_data();
        function load_data(query)
        {
            $.ajax({
            url:"falad.php",
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