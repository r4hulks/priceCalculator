<!DOCTYPE html>
<html lang="en">
<?php

$s1='1';
$s2='1';
$s3='43';
$s4='1';
//echo " $s1 $s2 $s3 $s4";
if(isset($_POST['order'])){

$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];
$s4=$_POST['s4'];
echo " $s1 $s2 $s3 $s4";

}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <div class="card bg-light
  text-center card-form" style="max-width:500px">
        <div class="card-body">
            <h3>Price Calculator</h3>

            <div class="form-group">
                <label for="courses">Select Assignment</label>
                <select name="courses" id="courses" class="form-control">
                    <option value="1" <?php if ($s1 == 1 ) echo 'selected' ; ?> data-price="22.96">Assignment</option>
                    <option value="2"  <?php if ($s1 == 2 ) echo 'selected' ; ?> data-price="38.54">Buisness</option>
                    <option value="3" <?php if ($s1 == 3 ) echo 'selected' ; ?> data-price="22.96">Case Study</option>
                    <option value="4" <?php if ($s1 == 4 ) echo 'selected' ; ?> data-price="38.54">Complete Disseration</option>
                    <option value="5" <?php if ($s1 == 5 ) echo 'selected' ; ?> data-price="22.96">Course Work</option>
                    <option value="6" <?php if ($s1 == 6 ) echo 'selected' ; ?> data-price="38.54">Disseration Chapter Abstract</option>
                    <option value="7" <?php if ($s1 == 7 ) echo 'selected' ; ?> data-price="38.54">Disseration Chapter Discussion</option>
                    <option value="8" <?php if ($s1 == 8 ) echo 'selected' ; ?> data-price="38.54">Disseration Chapter Introduction</option>
                    <option value="9" <?php if ($s1 == 9 ) echo 'selected' ; ?> data-price="38.54">Disseration Chapter Literature Review</option>
                    <option value="10" <?php if ($s1 ==10 ) echo 'selected' ; ?>  data-price="38.54">Disseration Chapter Methodology</option>
                    <option value="11"<?php if ($s1 == 11 ) echo 'selected' ; ?>  data-price="38.54">Disseration Chapter Results</option>
                    <option value="12" <?php if ($s1 == 12 ) echo 'selected' ; ?> data-price="38.54">Disseration Proposal</option>
                    <option value="13" <?php if ($s1 == 13 ) echo 'selected' ; ?> data-price="38.54">Disseration Service Editing</option>
                    <option value="14" <?php if ($s1 == 14 ) echo 'selected' ; ?> data-price="38.54">Disseration Service Proof Reading</option>
                    <option value="15" <?php if ($s1 == 15 ) echo 'selected' ; ?> data-price="22.96">Others</option>
                    <option value="16" <?php if ($s1 == 16 ) echo 'selected' ; ?> data-price="22.96">Posters</option>
                    <option value="17" <?php if ($s1 == 17 ) echo 'selected' ; ?> data-price="22.96">PowerPoint Presentations</option>
                    <option value="18" <?php if ($s1 == 18 ) echo 'selected' ; ?> data-price="22.96">Research Papers</option>
                    <option value="19" <?php if ($s1 == 19 ) echo 'selected' ; ?> data-price="22.96">Term Papers</option>
                    <option value="20" <?php if ($s1 == 20 ) echo 'selected' ; ?> data-price="38.54">Thesis</option>

                </select>
            </div>
            <div class="form-group">
                <label for="duration">Select Urgency</label>
                <select name="duration" id="duration" class="form-control">

                    <option value="1" <?php if ($s2 == 1 ) echo 'selected' ; ?> >1 Day</option>
                    <option value="2" <?php if ($s2 == 2 ) echo 'selected' ; ?>>2 Days</option>
                    <option value="3" <?php if ($s2 == 3 ) echo 'selected' ; ?>>3 Days</option>
                    <option value="4" <?php if ($s2 == 4 ) echo 'selected' ; ?>>4 Days</option>
                    <option value="5" <?php if ($s2 == 5 ) echo 'selected' ; ?>>5 Days</option>
                    <option value="6" <?php if ($s2 == 6 ) echo 'selected' ; ?>>6 Days</option>
                    <option value="7" <?php if ($s2 == 7 ) echo 'selected' ; ?>>7 Days</option>
                    <option value="8" <?php if ($s2 == 8 ) echo 'selected' ; ?>>8 Days</option>
                    <option value="9" <?php if ($s2 == 9 ) echo 'selected' ; ?>>9 Days</option>
                    <option value="10" <?php if ($s2 == 10 ) echo 'selected' ; ?>>10 Days</option>
                    <option value="15" <?php if ($s2 == 15 ) echo 'selected' ; ?>>15 Days</option>
                    <option value="20" <?php if ($s2 == 20 ) echo 'selected' ; ?>>20 Days</option>
                    <option value="25" <?php if ($s2 == 25 ) echo 'selected' ; ?>>25 Days</option>
                    <option value="30" <?php if ($s2 == 30 ) echo 'selected' ; ?>>30 Days</option>
                    <option value="35" <?php if ($s2 == 35 ) echo 'selected' ; ?>>35 Days</option>
                    <option value="40" <?php if ($s2 == 40 ) echo 'selected' ; ?>>40 Days</option>
                    <option value="45" <?php if ($s2 == 45 ) echo 'selected' ; ?>>45 Days</option>
                    <option value="50" <?php if ($s2 == 50 ) echo 'selected' ; ?>>50 Days</option>
                    <option value="55" <?php if ($s2 == 55 ) echo 'selected' ; ?>>55 Days</option>
                    <option value="60" <?php if ($s2 == 60 ) echo 'selected' ; ?>>60 Days</option>
                    <option value="70" <?php if ($s2 == 70 ) echo 'selected' ; ?>>70 Days</option>

                </select>
            </div>
            <div class="form-group">
                <label for="class">Select Standard</label>
                <select name="class" id="class" class="form-control">
                    <option value="0" <?php if ($s3 == 0 ) echo 'selected' ; ?> >guaranteed 2:2 Standard</option>
                    <option value="20" <?php if ($s3 == 20 ) echo 'selected' ; ?>>guaranteed 2:1 Standard</option>
                    <option value="43" <?php if ($s3 == 43 ) echo 'selected' ; ?>>guaranteed First Class</option>
                </select>
            </div>
            <div class="form-group">
                <label for="students">Select Pages</label>
                <select name="students" id="students" class="form-control">
                    <option value="1" <?php if ($s4 == 1 ) echo 'selected' ; ?> >1 Pages / 250 Words</option>
                    <option value="2" <?php if ($s4 == 2 ) echo 'selected' ; ?> >2 Pages / 500 Words</option>
                    <option value="3" <?php if ($s4 == 3 ) echo 'selected' ; ?> >3 Pages / 750 Words</option>
                    <option value="4" <?php if ($s4 == 4 ) echo 'selected' ; ?> >4 Pages / 1000 Words</option>
                    <option value="5" <?php if ($s4 == 5 ) echo 'selected' ; ?> >5 Pages / 1250 Words</option>
                    <option value="6" <?php if ($s4 == 6 ) echo 'selected' ; ?> >6 Pages / 1500 Words</option>
                    <option value="7" <?php if ($s4 == 7 ) echo 'selected' ; ?> >7 Pages / 1750 Words</option>
                    <option value="8" <?php if ($s4 == 8 ) echo 'selected' ; ?> >8 Pages / 2000 Words</option>
                    <option value="9" <?php if ($s4 == 9 ) echo 'selected' ; ?> >9 Pages / 2250 Words</option>
                    <option value="10" <?php if ($s4 ==10 ) echo 'selected' ; ?> >10 Pages / 2500 Words</option>
                    <option value="11" <?php if ($s4 == 11 ) echo 'selected' ; ?> >11 Pages / 2750 Words</option>
                    <option value="12" <?php if ($s4 == 12 ) echo 'selected' ; ?> >12 Pages / 3000 Words</option>
                    <option value="13" <?php if ($s4 == 13 ) echo 'selected' ; ?> >13 Pages / 3250 Words</option>
                    <option value="14" <?php if ($s4 == 14 ) echo 'selected' ; ?> >14 Pages / 3500 Words</option>
                    <option value="15" <?php if ($s4 == 15 ) echo 'selected' ; ?> >15 Pages / 3750 Words</option>
                    <option value="16" <?php if ($s4 == 16 ) echo 'selected' ; ?> >16 Pages / 4000 Words</option>
                    <option value="17" <?php if ($s4 == 17 ) echo 'selected' ; ?> >17 Pages / 4250 Words</option>
                    <option value="18" <?php if ($s4 == 18 ) echo 'selected' ; ?> >18 Pages / 4500 Words</option>
                    <option value="19" <?php if ($s4 == 19 ) echo 'selected' ; ?> >19 Pages / 4750 Words</option>
                    <option value="20" <?php if ($s4 == 20 ) echo 'selected' ; ?> >20 Pages / 5000 Words</option>
                    <option value="21">21 Pages / 5250 Words</option>
                    <option value="22">22 Pages / 5500 Words</option>
                    <option value="23">23 Pages / 5750 Words</option>
                    <option value="24">24 Pages / 6000 Words</option>
                    <option value="25">25 Pages / 6250 Words</option>
                    <option value="26">26 Pages / 6500 Words</option>
                    <option value="27">27 Pages / 6750 Words</option>
                    <option value="28">28 Pages / 7000 Words</option>
                    <option value="29">29 Pages / 7250 Words</option>
                    <option value="30">30 Pages / 7500 Words</option>
                    <option value="40">40 Pages / 10000 Words</option>
                    <option value="50">50 Pages / 12500 Words</option>
                    <option value="60">60 Pages / 15000 Words</option>
                    <option value="70">70 Pages / 17500 Words</option>
                    <option value="80">80 Pages / 20000 Words</option>
                    <option value="90">90 Pages / 22500 Words</option>
                    <option value="100">100 Pages / 25000 Words</option>
                    <option value="110">110 Pages / 27500 Words</option>
                    <option value="120">120 Pages / 30000 Words</option>
                    <option value="130">130 Pages / 32500 Words</option>
                    <option value="140">140 Pages / 35000 Words</option>
                    <option value="150">150 Pages / 37500 Words</option>
                    <option value="160">160 Pages / 40000 Words</option>
                    <option value="180">180 Pages / 45000 Words</option>
                    <option value="200">200 Pages / 50000 Words</option>
                    <option value="250">250 Pages / 62500 Words</option>
                </select>
            </div>
            <center>
                <h6> $
                    <strike>
                        <span id="price">base price</span>
                    </strike>
                </h6>
                <h4 class="text-success">25% Off on all courses.</h4>
                <h2>$
                    <span id="discountedPrice">discounted price</span>
                </h2>
                <input type="submit" class="btn btn-outline-dark btn-block" style="width: 150px" value="Pay Now" id="click">

            </center>
            <p><span id="totalPrice">Total Price</span></p>
            <br>
            <p id="dis">discount amount</p>
            <br>
            <p><span id="savedAmount">saved amount</span></p>
<br>
            <p><span id="total">Total amount</span></p>

        </div>
    </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
<script>
    //base discount
    var discount = 2.5;
    //overall discount apllied on total cart value
    var totalDiscount = 25;

//function to calculate price
    function getPrice() {
//get the price of assignment
        var getCoursePrice = $('#courses Option:selected').attr("data-price");
        //get the urgency of assignment
        var getDuration = $('#duration Option:selected').val();
        //get the standard of assignment
        var getTime = $('#class Option:selected').val();
        //get page value of assignment
        var getStudents = $('#students Option:selected').val();

        //using switch statement to determine which course with price
        switch (getCoursePrice) {
            case '22.96':
            //base price of course
                var basePrice = 22.96;
                //if statements to add additional discount depending on urgency
                if (getDuration < 2) {
                    //alert("working till here");
                    var totalPrice = (basePrice + (getTime * basePrice / 100)) * getStudents;
                    $('#price').html(totalPrice.toFixed(2));
                    //alert(getStudents);
                    //25% off price here
                    var discountedPrice = totalPrice - (totalDiscount * totalPrice / 100);
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    //alert (totalPrice);
                    $('#totalPrice').html(totalPrice.toFixed(2));
                    $('#dis').html(totalDiscount.toFixed(2)+'%');
                    var saved=totalPrice-discountedPrice;

                    $('#savedAmount').html(saved.toFixed(2));
                    $('#total').html(discountedPrice.toFixed(2));


                } else
                if (getDuration < 11) {
                    var increment = 2.1;
                    var extraDiscount = getDuration * increment + discount;
                    console.log(increment + " for " + extraDiscount);
                    var totalPrice = (basePrice + (getTime * basePrice / 100));
                    var extraDiscountedPrice = (totalPrice - (extraDiscount * totalPrice / 100)) * getStudents;
                    $('#price').html(extraDiscountedPrice.toFixed(2));
                    //25% off price here
                    var discountedPrice = extraDiscountedPrice - (totalDiscount * extraDiscountedPrice / 100);
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    $('#totalPrice').html(totalPrice.toFixed(2));
                    $('#dis').html(totalDiscount.toFixed(2)+'%');
                    var saved=totalPrice-discountedPrice;

                    $('#savedAmount').html(saved.toFixed(2));
                    $('#total').html(discountedPrice.toFixed(2));
                } else
                if (getDuration < 21) {
                    var increment = 1.4;
                    var extraDiscount = getDuration * increment + discount;
                    console.log(increment + " for " + extraDiscount);
                    var totalPrice = (basePrice + (getTime * basePrice / 100));
                    var extraDiscountedPrice = (totalPrice - (extraDiscount * totalPrice / 100)) * getStudents;
                    $('#price').html(extraDiscountedPrice.toFixed(2));
                    //25% off price here
                    var discountedPrice = extraDiscountedPrice - (totalDiscount * extraDiscountedPrice / 100);
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    $('#totalPrice').html(totalPrice.toFixed(2));
                    $('#dis').html(totalDiscount.toFixed(2)+'%');
                    var saved=totalPrice-discountedPrice;

                    $('#savedAmount').html(saved.toFixed(2));
                    $('#total').html(discountedPrice.toFixed(2));
                } else
                if (getDuration < 35) {
                    var increment = 1.1;
                    var extraDiscount = getDuration * increment + discount;
                    console.log(increment + " for " + extraDiscount);
                    var totalPrice = (basePrice + (getTime * basePrice / 100));
                    var extraDiscountedPrice = (totalPrice - (extraDiscount * totalPrice / 100)) * getStudents;
                    $('#price').html(extraDiscountedPrice.toFixed(2));
                    //25% off price here
                    var discountedPrice = extraDiscountedPrice - (totalDiscount * extraDiscountedPrice / 100);
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    $('#totalPrice').html(totalPrice.toFixed(2));
                    $('#dis').html(totalDiscount.toFixed(2)+'%');
                    var saved=totalPrice-discountedPrice;

                    $('#savedAmount').html(saved.toFixed(2));
                    $('#total').html(discountedPrice.toFixed(2));
                } else
                if (getDuration < 80) {
                    var increment = 0.8;
                    var extraDiscount = getDuration * increment + discount;
                    console.log(increment + " for " + extraDiscount);
                    var totalPrice = (basePrice + (getTime * basePrice / 100));
                    var extraDiscountedPrice = (totalPrice - (extraDiscount * totalPrice / 100)) * getStudents;
                    $('#price').html(extraDiscountedPrice.toFixed(2));
                    //25% off price here
                    var discountedPrice = extraDiscountedPrice - (totalDiscount * extraDiscountedPrice / 100);
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    $('#totalPrice').html(totalPrice.toFixed(2));
                    $('#dis').html(totalDiscount.toFixed(2)+'%');
                    var saved=totalPrice-discountedPrice;

                    $('#savedAmount').html(saved.toFixed(2));
                    $('#total').html(discountedPrice.toFixed(2));
                }
                break;
//second case statement
            case '38.54':
                var basePrice = 38.54;
                if (getDuration < 2) {
                    //alert("working till here");
                    var totalPrice = (basePrice + (getTime * basePrice / 100)) * getStudents;
                    $('#price').html(totalPrice.toFixed(2));
                    //25% off price here
                    var discountedPrice = totalPrice - (totalDiscount * totalPrice / 100);
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    //alert (discountedPrice);
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    $('#totalPrice').html(totalPrice.toFixed(2));
                    $('#dis').html(totalDiscount.toFixed(2)+'%');
                    var saved=totalPrice-discountedPrice;

                    $('#savedAmount').html(saved.toFixed(2));
                    $('#total').html(discountedPrice.toFixed(2));
                } else
                if (getDuration < 11) {
                    var increment = 2.1;
                    var extraDiscount = getDuration * increment + discount;
                    console.log(increment + " for " + extraDiscount);
                    var totalPrice = (basePrice + (getTime * basePrice / 100));
                    var extraDiscountedPrice = (totalPrice - (extraDiscount * totalPrice / 100)) * getStudents;
                    $('#price').html(extraDiscountedPrice.toFixed(2));
                    //25% off price here
                    var discountedPrice = extraDiscountedPrice - (totalDiscount * extraDiscountedPrice / 100);
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    $('#totalPrice').html(totalPrice.toFixed(2));
                    $('#dis').html(totalDiscount.toFixed(2)+'%');
                    var saved=totalPrice-discountedPrice;

                    $('#savedAmount').html(saved.toFixed(2));
                    $('#total').html(discountedPrice.toFixed(2));
                } else
                if (getDuration < 21) {
                    var increment = 1.4;
                    var extraDiscount = getDuration * increment + discount;
                    console.log(increment + " for " + extraDiscount);
                    var totalPrice = (basePrice + (getTime * basePrice / 100));
                    var extraDiscountedPrice = (totalPrice - (extraDiscount * totalPrice / 100)) * getStudents;
                    $('#price').html(extraDiscountedPrice.toFixed(2));
                    //25% off price here
                    var discountedPrice = extraDiscountedPrice - (totalDiscount * extraDiscountedPrice / 100);
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    $('#totalPrice').html(totalPrice.toFixed(2));
                    $('#dis').html(totalDiscount.toFixed(2)+'%');
                    var saved=totalPrice-discountedPrice;

                    $('#savedAmount').html(saved.toFixed(2));
                    $('#total').html(discountedPrice.toFixed(2));
                } else
                if (getDuration < 35) {
                    var increment = 1.1;
                    var extraDiscount = getDuration * increment + discount;
                    console.log(increment + " for " + extraDiscount);
                    var totalPrice = (basePrice + (getTime * basePrice / 100));
                    var extraDiscountedPrice = (totalPrice - (extraDiscount * totalPrice / 100)) * getStudents;
                    $('#price').html(extraDiscountedPrice.toFixed(2));
                    //25% off price here
                    var discountedPrice = extraDiscountedPrice - (totalDiscount * extraDiscountedPrice / 100);
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    $('#totalPrice').html(totalPrice.toFixed(2));
                    $('#dis').html(totalDiscount.toFixed(2)+'%');
                    var saved=totalPrice-discountedPrice;

                    $('#savedAmount').html(saved.toFixed(2));
                    $('#total').html(discountedPrice.toFixed(2));
                } else
                if (getDuration < 80) {
                    var increment = 0.8;
                    var extraDiscount = getDuration * increment + discount;
                    console.log(increment + " for " + extraDiscount);
                    var totalPrice = (basePrice + (getTime * basePrice / 100));
                    var extraDiscountedPrice = (totalPrice - (extraDiscount * totalPrice / 100)) * getStudents;
                    $('#price').html(extraDiscountedPrice.toFixed(2));
                    //25% off price here
                    var discountedPrice = extraDiscountedPrice - (totalDiscount * extraDiscountedPrice / 100);
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    $('#discountedPrice').html(discountedPrice.toFixed(2));
                    $('#totalPrice').html(totalPrice.toFixed(2));
                    $('#dis').html(totalDiscount.toFixed(2)+'%');
                    var saved=totalPrice-discountedPrice;

                    $('#savedAmount').html(saved.toFixed(2));
                    $('#total').html(discountedPrice.toFixed(2));
                }

                break;



        }
    }


    //basic script to load function on page load and change
    $(document).ready(function () {
        getPrice();
        $('select').change(function () {


            getPrice();
        });
    });
</script>
</body>

</html>