<!DOCTYPE html>
<html>
<head>

</head>
<style>

body{
    overflow-x: visible;
}

    </style>
<body>

<div>
<?php 
                $con=mysqli_connect('localhost','root');
                mysqli_select_db($con,'projectdatabase');
                

                $q="select url from courses where course_name='java'";
                $result=mysqli_query($con,$q);
                $datas =array();
                if(mysqli_num_rows($result))
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $datas[] = $row;
                    }
                }
                foreach( $datas[0] as $data)
                {
                  echo $data;
                }
            ?>
            

</div>

<body>

<script>



</script>