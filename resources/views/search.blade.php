<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Search Result</title>

    <!-- Icons font CSS-->
    <link href="{{ asset('searchForm/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('searchForm/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('searchForm/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('searchForm/css/main.css') }}" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Search Your Result</h2>
                </div>
                <div class="card-body">
                    <form method="get" action="{{route('searchView')}}">
      
                        <div class="form-row">
                            <div class="name">Roll</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="roll">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Reg</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="reg">
                                </div>
                            </div>
                        </div>
           
        
                        <div class="form-row">
                            <div class="name">Class</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="class">
                                            <option disabled="disabled" selected="selected">Select Class</option>
                                            @foreach(App\Classes::orderBy('id','asc')->get() as $class)
                                            <option value="{{$class->name}}">
                                            {{$class->name}}</option>
                                          @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

              

                        <div class="form-row">
                            <div class="name">Section</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="section">
                                            <option disabled="disabled" selected="selected">Select section</option>
                                            @foreach(App\Section::orderBy('id','asc')->get() as $section)
                                            <option value="{{$section->name}}">
                                            {{$section->name}}</option>
                                          @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="search_btn">
                            <button class="btn btn--radius-2 btn--red" type="submit">Search</button>
                            
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('searchForm/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('searchForm/vendor/select2/select2.min.js') }}"></script>
    <!-- Main JS-->
    <script src="{{ asset('searchForm/js/global.js') }}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->