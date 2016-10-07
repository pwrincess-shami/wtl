<!DOCTYPE html>
<html>
    <head>
        <title> MOBILE VOTING </title>   
    </head>
    <body>
        <?php
            if($_POST){
                $n1=$_POST['n1'];
                $n2=$_POST['n2'];
                
                if(!empty($n1)&&!empty($n2)){
                    for($i=$n1;$i<=$n2;$i++){
                        $k=2;
                        $flag=0;
                        while($k<i){
                            if($i%$k==0){
                                $flag=1;
                                break;
                            }
                            if($flag==0)
                            echo $i."<br>";
                        }  
                    }
                }
            else{
        ?>
        <form method="post" action="mobile.php">
            <input type="number" value="n1" /> Num 1 <br>
            <input type="number" value="n2" /> Num 2 <br>
            <input type="submit" id="submit" class="form-button" value="SUBMIT">
        </form>
        <?php
            }
        ?>    
    </body>
</html>