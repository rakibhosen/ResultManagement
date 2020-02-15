<html>


<head>
    <title> Student Result Card </title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>

    .error{
        text-align: center;
        background-color: red;
        color: aliceblue;
        margin-top:100px;
        
    }
   .search_again_btn{
        text-decoration: none!important;
        list-style: none;
        background:#2c8eab;
        color:#ffff;
        border-radius: 3px;
        padding:5px;
        display: inline-block;
    }
    .search_again_btn:hover{
        color:#fff;
    }
</style>
</head>

  <body>
      <div class="container">
{{-- for student info --}}
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card-body">
                <p class="error">Opps!! Sorry Result not found</p>
                <p class="text-center"><a class="search_again_btn" href="{{ route('search') }}">Search Again</a></p>
           </div>
      </div>
    </div>
  </div>




  </body>
</html>