<script>
    
    
    $('body').on('click','#order_now',function(){

            var s1 = $('#s1 Option:selected').attr("data-price");
        //get the urgency of assignment
        var s2 = $('#s2 Option:selected').val();
        //get the standard of assignment
        var s3 = $('#s3 Option:selected').val();
        //get page value of assignment
        var s4 = $('#s4 Option:selected').val();
        $.redirect('http://tutorialexperts.org/order-now', { 'order':true,'s1': s1, 's2':s2 ,'s3':s3, 's4':s4});
        


    });
    
    
    </script>

    <?php 
    $s1='1';
    $s2='1';
    $s3='43';
    $s4='1';

    if(isset($_POST['order'])){

$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];
$s4=$_POST['s4'];

 }

    ?>

