<!doctype html> 
<html> 
<head> 
    <title>DataTables and Codeigniter</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <!--data table--> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-html5-1.2.2/b-print-1.2.2/r-2.1.0/datatables.min.css" /> 
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-html5-1.2.2/b-print-1.2.2/r-2.1.0/datatables.min.js"></script> 
    <!--/.data table--> 
    <style> 
        body { 
            padding: 15px; 
        } 
    </style> 
</head> 
<body> 
    <div class="row" style="margin-bottom: 10px"> 
        <div class="col-md-4"> 
            <h2 style="margin-top:0px">glacier</h2> 
        </div> 
    </div> 
    <table class="table table-bordered table-striped" id="mytable"> 
        <thead> 
            <tr> 
				<th>No</th> 
                <th>Job Position</th> 
                <th>Description</th> 
                <th>Added Date</th> 
                <th>Updated On</th> 
                
            </tr> 
        </thead> 
        <tbody> 
           <?php 
            $start = 0; 
             foreach ($archiverecord as $row)
            { 
                ?> 
                <tr> 
                    <td> 
                        <?php echo ++$start ?> 
                    </td> 
                    <td> 
                        <?php echo $row->title; ?> 
                    </td> 
                    <td> 
                        <?php echo $row->technique; ?> 
                    </td> 
                    <td> 
                        <?php echo $row->tissue; ?> 
                    </td> 
                    <td> 
                        <?php echo $row->archive_vault; ?> 
                    </td> 
                </tr> 
                <?php 
            } 
            ?> 
        </tbody> 
    </table> 
    <script type="text/javascript"> 
       
        
   $(document).ready(function() {
    $(document).ready(function() { 
            $("#mytable").dataTable(); 
        }); 
} );
        
        
        
    </script> 
</body> 
</html>
