<html>


<head>
    <title> Student Result Card </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('searchForm/css/searchview.css') }}" rel="stylesheet" media="all">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

  <body>
      <div class="container">
{{-- for student info --}}
<div class="row">
        <div class="col-lg-8 offset-lg-2 col-12 col-sm-12">
            <div class="card-body">
             <div class="  border">
        
                <table align = "center" width="100%">
        
                    <tbody>
                        <tr>
                            <td class="td-class" width="30%">Name </td>
                            <td class="td-class">  {{$studentt->name}}</td>
                        </tr>
    
                        <tr>
                            <td class="td-class" width="30%">Roll</td>
                            <td class="td-class">  {{$studentt->roll}}</td>
                        </tr>
    
                        <tr>
                            <td class="td-class" width="30%">Roll</td>
                            <td class="td-class">  {{$studentt->reg}}</td>
                        </tr>
    
                        <tr>
                            <td class="td-class" width="30%">Result</td>
                            <td class="td-class">  {{$studentt->result}}</td>
                        </tr>
                        <tr>
                            <td class="td-class" width="30%">GPA</td>
                            <td class="td-class">  {{$studentt->gpa}}</td>
                        </tr>
                    </tbody>
                    
                </table>

            </div>
        </div>
    </div>
   </div>
{{-- for marksheet --}}
<div class="row">
        <div class="col-lg-8 offset-lg-2 col-12 col-sm-12">
            <div class="card-body">
             <div class="info">
                 <p class="marksheet_title">Mark Sheet</p>
                <table class="table table-striped text-center">
                  
                        <thead>
                            <tr>
                                <th width="20%">Sub Name</th>
                                <th width="20%">Sub Code</th>
                                <th width="20%">Marks</th>
                                <th width="20%">Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students  as $student) 
                            <tr>
                                <td>{{ $student->subject_name }}</td>
                                <td>{{ $student->subject_code }}</td>
                                <td>{{ $student->marks }}</td>
                                <td>{{ $student->grade }}</td>
                          
                            </tr>
                            @endforeach
                          
                        </tbody>
                </table>
            </div>
        </div>
     </div>
 </div>



</div>





  </body>