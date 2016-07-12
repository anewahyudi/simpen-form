<?php
/*
  Template Name: Contact Form
 */

//If the form is submitted
if (isset($_POST['submitted'])) {

    //Check to see if the honeypot captcha field was filled in
    if (trim($_POST['checking']) !== '') {
        $captchaError = true;
    } else {

        //==================================================
        //side order variabel
        //===================================================
        //section1 (SATAY OTAH)
        $chiken_satay= $_POST['chiken_satay'];
        $pr_chiken_satay= 37.45; 
        $total_chicken_satay = $pr_chiken_satay * $chiken_satay;
        //--------------------------------------------------------
        $assorted_mixture_satay= $_POST['assorted_mixture_satay'];
        $pr_assorted_mixture_satay= 37.45;
        $total_assorted_mixture_satay = $pr_assorted_mixture_satay* $assorted_mixture_satay;
        //--------------------------------------------------------
        $spicy_fish_otah=$_POST['spicy_fish_otah'];
        $pr_spicy_fish_otah= 16.05;
        $total_spicy_fish_otah= $pr_spicy_fish_otah* $spicy_fish_otah;
        //--------------------------------------------------------
        $spicy_fish_otah_small=$_POST['spicy_fish_otah_small'];
        $pr_spicy_fish_otah_small=32.10;
        $total_spicy_fish_otah_small= $pr_spicy_fish_otah_small*$spicy_fish_otah_small;
        //--------------------------------------------------------
        $lontong=$_POST['lontong'];
        $pr_lontong = 5.35;
        $total_lontong= $pr_lontong*$lontong;
        //--------------------------------------------------------
        //section2 (Chicken)
        //--------------------------------------------------------
        $thai_hot=$_POST['thai_hot'];
        $pr_thai_hot=26.75;
        $total_thai_hot=$pr_thai_hot*$thai_hot;
        //--------------------------------------------------------
        $curry_chicken=$_POST['curry_chicken'];
        $pr_curry_chicken=37.45;
        $total_curry_chicken= $pr_curry_chicken*$curry_chicken;
        //--------------------------------------------------------
        $sweet_sour_chicken=$_POST['sweet_sour_chicken'];
        $pr_sweet_sour_chicken=32.10;
        $total_sweet_sour_chicken=$pr_sweet_sour_chicken*$sweet_sour_chicken;
        //--------------------------------------------------------
        $grilled_yakitori=$_POST['grilled_yakitori'];
        $pr_grilled_yakitori=32.10;
        $total_grilled_yakitori=$pr_grilled_yakitori*$grilled_yakitori;
        //--------------------------------------------------------
        $golden_seaweed=$_POST['golden_seaweed'];
        $pr_golden_seaweed=27.82;
        $total_golden_seaweed=$pr_golden_seaweed*$golden_seaweed;
        //--------------------------------------------------------
        $grilled_black_Pepper=$_POST['grilled_black_Pepper'];
        $pr_grilled_black_Pepper=26.75;
        $total_grilled_black_Pepper=$pr_grilled_black_Pepper*$grilled_black_Pepper;
        //--------------------------------------------------------
        $hickory_bbq=$_POST['hickory_bbq'];
        $pr_hickory_bbq=26.75;
        $total_hickory_bbq=$pr_hickory_bbq*$hickory_bbq;
        //--------------------------------------------------------
        $grilled_teriyaki=$_POST['grilled_teriyaki'];
        $pr_grilled_teriyaki=26.75;
        $total_grilled_teriyaki=$pr_grilled_teriyaki*$grilled_teriyaki;
        //--------------------------------------------------------
        //section3 (Noodle)
        //--------------------------------------------------------
        $nonya_dry_mee_siam=$_POST['nonya_dry_mee_siam'];
        $pr_nonya_dry_mee_siam=26.75;
        $total_nonya_dry_mee_siam=$pr_nonya_dry_mee_siam*$nonya_dry_mee_siam;
        //--------------------------------------------------------
        $seafood_sin_chow=$_POST['seafood_sin_chow'];
        $pr_seafood_sin_chow=26.75;
        $total_seafood_sin_chow=$pr_seafood_sin_chow*$seafood_sin_chow;
        //--------------------------------------------------------
        $seafood_mee_goreng=$_POST['seafood_mee_goreng'];
        $pr_seafood_mee_goreng=26.75;
        $total_seafood_mee_goreng=$pr_seafood_mee_goreng*$seafood_mee_goreng;
        //--------------------------------------------------------
        $ee_fu_mee=$_POST['ee_fu_mee'];
        $pr_ee_fu_mee=26.75;
        $total_ee_fu_mee=$pr_ee_fu_mee*$ee_fu_mee;
        //--------------------------------------------------------
        //section4 (Snacks)
        //--------------------------------------------------------
        $egg_chunk=$_POST['egg_chunk'];
        $pr_egg_chunk=21.40;
        $total_egg_chunk=$pr_egg_chunk*$egg_chunk;
        //--------------------------------------------------------
        $vegetable_spring=$_POST['vegetable_spring'];
        $pr_vegetable_spring=21.40;
        $total_vegetable_spring=$pr_vegetable_spring*$vegetable_spring;
        //--------------------------------------------------------
        $shell_curry_puffs=$_POST['shell_curry_puffs'];
        $pr_shell_curry_puffs=21.40;
        $total_shell_curry_puffs=$pr_shell_curry_puffs*$shell_curry_puffs;
        //--------------------------------------------------------
        $samosa=$_POST['samosa'];
        $pr_samosa=21.40;
        $total_samosa=$pr_samosa*$samosa;
        //--------------------------------------------------------
        $chicken_nuggets=$_POST['chicken_nuggets'];
        $pr_chicken_nuggets=21.40;
        $total_chicken_nuggets=$pr_chicken_nuggets*$chicken_nuggets;
        //--------------------------------------------------------
        $golden_fish_balls=$_POST['golden_fish_balls'];
        $pr_golden_fish_balls=19.26;
        $total_golden_fish_balls=$pr_golden_fish_balls*$golden_fish_balls;
        //--------------------------------------------------------
        $golden_cuttlefish=$_POST['golden_cuttlefish'];
        $pr_golden_cuttlefish=19.26;
        $total_golden_cuttlefish=$pr_golden_cuttlefish*$golden_cuttlefish;
        //--------------------------------------------------------
        $golden_prawn_balls=$_POST['golden_prawn_balls'];
        $pr_golden_prawn_balls=19.26;
        $total_golden_prawn_balls=$pr_golden_prawn_balls*$golden_prawn_balls;
        //--------------------------------------------------------
        $prawn_wantons=$_POST['prawn_wantons'];
        $pr_prawn_wantons=21.40;
        $total_prawn_wantons=$pr_prawn_wantons*$prawn_wantons;
        //--------------------------------------------------------
        $chicken_ngoh_hiong=$_POST['chicken_ngoh_hiong'];
        $pr_chicken_ngoh_hiong=21.40;
        $total_chicken_ngoh_hiong=$pr_chicken_ngoh_hiong*$chicken_ngoh_hiong;
        //--------------------------------------------------------
        $mini_chicken_pies=$_POST['mini_chicken_pies'];
        $pr_mini_chicken_pies=26.75;
        $total_mini_chicken_pies=$pr_mini_chicken_pies*$mini_chicken_pies;
        //--------------------------------------------------------
        $baked_quice_lorraine=$_POST['baked_quice_lorraine'];
        $pr_baked_quice_lorraine=26.75;
        $total_baked_quice_lorraine=$pr_baked_quice_lorraine*$baked_quice_lorraine;
        //--------------------------------------------------------
        //section5 (Salad)
        //--------------------------------------------------------
        $classis_ceaser=$_POST['classis_ceaser'];
        $pr_classis_ceaser=26.75;
        $total_classis_ceaser=$pr_classis_ceaser*$classis_ceaser;
        //--------------------------------------------------------
        $potatoes_salad=$_POST['potatoes_salad'];
        $pr_potatoes_salad=26.75;
        $total_potatoes_salad=$pr_potatoes_salad*$potatoes_salad;
        //--------------------------------------------------------
        //section6 (Sweet Pastries)
        //--------------------------------------------------------
        $chocolate_banana_muffins=$_POST['chocolate_banana_muffins'];
        $pr_chocolate_banana_muffins=21.40;
        $total_chocolate_banana_muffins=$pr_chocolate_banana_muffins*$chocolate_banana_muffins;
        //--------------------------------------------------------
        $deluxe_fruit_tarts=$_POST['deluxe_fruit_tarts'];
        $pr_deluxe_fruit_tarts=21.40;
        $total_deluxe_fruit_tarts=$pr_deluxe_fruit_tarts*$deluxe_fruit_tarts;
        //--------------------------------------------------------
        $assorted_swiss_rolls=$_POST['assorted_swiss_rolls'];
        $pr_assorted_swiss_rolls=21.40;
        $total_assorted_swiss_rolls=$pr_assorted_swiss_rolls*$assorted_swiss_rolls;
        //--------------------------------------------------------
        $assorted_mini_french_fanish=$_POST['assorted_mini_french_fanish'];
        $pr_assorted_mini_french_fanish=21.40;
        $total_assorted_mini_french_fanish=$pr_assorted_mini_french_fanish*$assorted_mini_french_fanish;
        //--------------------------------------------------------
        $chocolate_doughnuts=$_POST['chocolate_doughnuts'];
        $pr_chocolate_doughnuts=21.40;
        $total_chocolate_doughnuts=$pr_chocolate_doughnuts*$chocolate_doughnuts;
        //--------------------------------------------------------
        $chocolate_eclairs=$_POST['chocolate_eclairs'];
        $pr_chocolate_eclairs=21.40;
        $total_chocolate_eclairs=$pr_chocolate_eclairs*$chocolate_eclairs;
        //--------------------------------------------------------
        $apple_strudels=$_POST['apple_strudels'];
        $pr_apple_strudels=21.40;
        $total_apple_strudels=$pr_apple_strudels*$apple_strudels;
        //--------------------------------------------------------
        $chocolate_brownies=$_POST['chocolate_brownies'];
        $pr_chocolate_brownies=21.40;
        $total_chocolate_brownies=$pr_chocolate_brownies*$chocolate_brownies;
        //--------------------------------------------------------
        $cream_puffs=$_POST['cream_puffs'];
        $pr_cream_puffs=21.40;
        $total_cream_puffs=$pr_cream_puffs*$cream_puffs;
        //--------------------------------------------------------
        $home_baked_egg_tarts=$_POST['home_baked_egg_tarts'];
        $pr_home_baked_egg_tarts=21.40;
        $total_home_baked_egg_tarts=$pr_home_baked_egg_tarts*$home_baked_egg_tarts;
        //--------------------------------------------------------
        $deluxe_fresh_fruits=$_POST['deluxe_fresh_fruits'];
        $pr_deluxe_fresh_fruits=37.45;
        $total_deluxe_fresh_fruits=$pr_deluxe_fresh_fruits*$deluxe_fresh_fruits;
        //--------------------------------------------------------    
        //section6 (Beverage)
        //--------------------------------------------------------
        $pokka_packet_drinks=$_POST['pokka_packet_drinks'];
        $pr_pokka_packet_drinks=1.07;
        $total_pokka_packet_drinks=$pr_pokka_packet_drinks*$pokka_packet_drinks;
        //--------------------------------------------------------  
        $mineral_water_bottles=$_POST['mineral_water_bottles'];
        $pr_mineral_water_bottles=1.07;
        $total_mineral_water_bottles=$pr_mineral_water_bottles*$mineral_water_bottles;
        //--------------------------------------------------------
        $mineral_water_cup=$_POST['mineral_water_cup'];
        $pr_mineral_water_cup=0.64;
        $total_mineral_water_cup=$pr_mineral_water_cup*$mineral_water_cup;
        //--------------------------------------------------------
        $ice_cubes=$_POST['ice_cubes'];
        $pr_ice_cubes=21.40;
        $total_ice_cubes=$pr_ice_cubes*$ice_cubes;
        //--------------------------------------------------------
        //==================================================
        //FORM ORDER
        //===================================================
        if (trim($_POST['pre']) === '') {
            $preError = 'You forgot to enter your prefix name.';
            $hasError = true;
        } else {
            $pre = trim($_POST['pre']);
        }
        if (trim($_POST['contactName']) === '') {
            $nameError = 'You forgot to enter your name.';
            $hasError = true;
        } else {
            $name = trim($_POST['contactName']);
        }

        //Check to make sure sure that a valid email address is submitted
        if (trim($_POST['email']) === '') {
            $emailError = 'You forgot to enter your email address.';
            $hasError = true;
        } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
            $emailError = 'You entered an invalid email address.';
            $hasError = true;
        } else {
            $email = trim($_POST['email']);
        }


        //Check Phone SUbmited===========================
        if (trim($_POST['telephone']) === '') {
            $telephoneError = 'Dont forget entry telephone number.';
            $hasError = true;
        } else if (!eregi("^[-0-9)( +.]{10,18}$", trim($_POST['telephone']))) {
            $telephoneError = 'You entered an invalid telephone .';
            $hasError = true;
        } else {
            $telephone = trim($_POST['telephone']);
        }

        //Check MObile SUbmited===========================
        if (trim($_POST['mobile']) === '') {
            $mobileError = 'Dont forget entry mobile number.';
            $hasError = true;
        } else if (!eregi("^[-0-9)( +.]{10,18}$", trim($_POST['telephone']))) {
            $mobileError = 'You entered an invalid mobile .';
            $hasError = true;
        } else {
            $telephone = trim($_POST['mobile']);
        }


        //Check to make sure comments were entered	
        if (trim($_POST['billing_address']) === '') {
            $billing_addressError = 'You forgot to enter your comments.';
            $hasError = true;
        } else {
            if (function_exists('stripslashes')) {
                $billing_address = stripslashes(trim($_POST['billing_address']));
            } else {
                $billing_address = trim($_POST['billing_address']);
            }
        }

        //Check to make sure dlivery address
        if (trim($_POST['delivery_address']) === '') {
            $delivery_addressError = 'You forgot to enter your delivery address.';
            $hasError = true;
        } else {
            if (function_exists('stripslashes')) {
                $delivery_address = stripslashes(trim($_POST['delivery_address']));
            } else {
                $delivery_address = trim($_POST['delivery_address']);
            }
        }

        //===========tambahan
        $company = $_POST['company'];
        $contact_person = $_POST['contact_person'];
        $fax = $_POST['fax'];
        $postal_code = $_POST['postal_code'];
        $floor = $_POST['floor'];
        $delivery_date = $_POST['delivery_date'];
        $ready_by = $_POST['ready_by'];
        $guest = $_POST['guest'];
        $special_instructions = $_POST['special_instructions'];
        
        //=====payment gateway variable
        $payment= $_POST['payment'];
        ///gebiz
        $ministry=$_POST['ministry'];
        $business_unit= $_POST['business_unit'];
        $sub_business_unit= $_POST['sub_business_unit'];
        ///moe
        $teachers_name = $_POST['teachers_name'];
        $teachers_email = $_POST['teachers_email'];
        $teachers_hp = $_POST['teachers_hp'];
        $student_name = $_POST['student_name'];
        $student_email =$_POST['student_email'];
        $student_hp =$_POST['student_hp'];
        ///
        $knowing = $_POST['knowing'];
        $tnc = $_POST['tnc'];
 
        //==================================================
        //EMAIL
        //===================================================
          
        if (!isset($hasError)) {
          
            $emailTo = 'wahyudi@proweb.co.id,' . $email;
            $subject = 'Contact Form Submission from ' . $name;           
            //$sendCopy = trim($_POST['sendCopy']);
          /*  $body = "Name:$pre $name "
                    . "\n\nCHicken Satay: $chiken_satay .':'. $val_chicken_satay"
                    . "\n\nCompany: $company"
                    . " \n\nEmail: $email "
                    . "\n\nTelephone: $telephone "
                    . "\n\nDelivery Date: $delivery_date"
                    . "\n\nReady by: $ready_by"
                    . "\n\nNo Of Guest: $guest";
             */
            $body='<html><body style="background:#f4f4f4; padding:30px">';
            $body.='<table width="100%" style="padding:20px; background:#fff"> <tbody bgcolor="#fffff" style="padding:20px border:1px solid #dedede">';
            $body.='<tr><td style="font-weight:bold; padding:10px;" >Additional Side Order </td><td style="font-weight:bold; padding:10px;">Quantity
           </td><td style="font-weight:bold; padding:10px;">Amount </td></tr>';
            //satay otah=====
            $body.='<tr><td><h3>Satay Otah</h3></td></tr>';
            $body.='<tr><td> Chicken Satay 50 stick $35.00 ($37.45 w/GST) </td> <td>'.$chiken_satay.'</td> <td> $ '.$total_chicken_satay.'</td></tr>';
            $body.='<tr><td> Assorted Mixture Satay (Chicken & Mutton Satay) 50 stick $35.00 ($37.45 w/GST)</td><td>'.$assorted_mixture_satay.'</td><td> $ '.$total_assorted_mixture_satay.'</td></tr>';
            $body.='<tr><td> Spicy Fish Otah (BIG) Banana Leaf 10pcs $15.00 ($16.05 w/GST) </td> <td>'.$spicy_fish_otah.'</td> <td> $ '.$total_spicy_fish_otah.'</td></tr>';
            $body.='<tr><td> Spicy Fish Otah (Small) Coconut Leaf 50pcs $30.00 ($32.10 w/GST) </td> <td>'.$spicy_fish_otah_small.'</td> <td> $ '.$total_spicy_fish_otah_small.'</td></tr>';
            $body.='<tr><td>Lontong (Round Rice cakes) 1 pcs $5.00 ($5.35 w/GST)</td> <td>'.$lontong.'</td> <td> $ '.$total_lontong.'</td></tr>';
            $body.='<tr><td colspan="2"><hr></td></tr>';
            
            $body.='<tr><td><h3>Chicken</h3></td></tr>';
            $body.='<tr><td> Thai Hot & Spicy Drumlets 25pcs $25.00 ($26.75 w/GST)</td> <td>'.$thai_hot.'</td> <td> $ '.$total_thai_hot.'</td></tr>';
            
            $body.='</tbody></table>';
            $body.='</body></html>';

            $headers = 'From: My Site <' . $emailTo . '>' . "\r\n" . 'Reply-To: ' . $email;
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            mail($emailTo, $subject, $body, $headers);

            /* if($sendCopy == true) {
              $subject = 'You emailed Your Name';
              $headers = 'From: Your Name <noreply@somedomain.com>';
              mail($email, $subject, $body, $headers);
              } */

            $emailSent = true;
        }
    }
}
?>

<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <script type="text/javascript" src="<?php get_template_directory_uri(); ?>/scripts/contact-form.js"></script>
            <?php if (isset($emailSent) && $emailSent == true) { ?>
                <div class="thanks">
                    <h1>Thanks, <?= $name; ?></h1>
                    <p>Your email was successfully sent. I will be in touch soon.</p>
                </div>

            <?php } else { ?>

                <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>

                        <?php if (isset($hasError) || isset($captchaError)) { ?>
                            <p class="error">There was an error submitting the form.<p>
                            <?php } ?>

                        <form action="<?php the_permalink(); ?>" id="formOrder" method="post">
                        <!--==============================
                        SIDE ORDER
                         ===============================-->
                        <!-----<><><><>satay otah (section side order 1)<><><><><>-------->                      
                        <div class="side-order-group">
                            <h3>Satay Otah</h3>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="chiken_satay" value="<?php if (isset($_POST['chiken_satay'])) echo $_POST['chiken_satay']; ?>" class="form-control" id="chiken_satay">      
                                      
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Chicken Satay 50 stick $35.00 ($37.45 w/GST)</p>
                                        <small class="text-danger"><i class="fa fa-long-arrow-left"></i> enter the number of orders</small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="assorted_mixture_satay" value="<?php if (isset($_POST['assorted_mixture_satay'])) echo $_POST['assorted_mixture_satay']; ?>" class="form-control" id="assorted_mixture_satay">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Assorted Mixture Satay (Chicken & Mutton Satay) 50 stick $35.00 ($37.45 w/GST)</p>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="spicy_fish_otah" value="<?php if (isset($_POST['spicy_fish_otah'])) echo $_POST['spicy_fish_otah']; ?>"  class="form-control" id="spicy_fish_otah">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Spicy Fish Otah (BIG) Banana Leaf 10pcs $15.00 ($16.05 w/GST)</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="spicy_fish_otah_small" value="<?php if (isset($_POST['spicy_fish_otah_small'])) echo $_POST['spicy_fish_otah_small']; ?>" class="form-control" id="spicy_fish_otah_small">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Spicy Fish Otah (Small) Coconut Leaf 50pcs $30.00 ($32.10 w/GST)</p>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="lontong" value="<?php if (isset($_POST['lontong'])) echo $_POST['lontong']; ?>" class="form-control" id="lontong">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Longtong (Round Rice cakes) 1 pcs $5.00 ($5.35 w/GST)</p>
                                         
                                    </div>
                                </div>
                            </div>
                        </div><!--side order group-->    
                        
                        <!-----<><><><>CHICKEN (section side order 2)<><><><><>-------->  
                         <div class="side-order-group">
                            <h3>Chicken</h3>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="thai_hot" value="<?php if (isset($_POST['thai_hot'])) echo $_POST['thai_hot']; ?>" class="form-control" id="thai_hot">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Thai Hot & Spicy Drumlets 25pcs $25.00 ($26.75 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="curry_chicken" value="<?php if (isset($_POST['curry_chicken'])) echo $_POST['curry_chicken']; ?>" class="form-control" id="curry_chicken">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Curry Chicken with Potatoes 12pax $35.00 ($37.45 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="sweet_sour_chicken" value="<?php if (isset($_POST['sweet_sour_chicken'])) echo $_POST['sweet_sour_chicken']; ?>" class="form-control" id="sweet_sour_chicken">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Sweet & Sour Chicken with Trio Capsicums 12pax $30.00 ($32.10 w/GST)</p>
                                    </div>
                                </div>
                            </div>                       
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="grilled_yakitori" value="<?php if (isset($_POST['grilled_yakitori'])) echo $_POST['grilled_yakitori']; ?>" class="form-control" id="grilled_yakitori">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Grilled Yakitori Chicken on Skewer 25pcs $30.00 ($32.10 w/GST)</p>
                                    </div>
                                </div>
                            </div>                             
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="golden_seaweed" value="<?php if (isset($_POST['golden_seaweed'])) echo $_POST['golden_seaweed']; ?>" class="form-control" id="golden_seaweed">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Golden Seaweed Chicken 30pcs $26.00 ($27.82 w/GST)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+"  name="grilled_black_Pepper" value="<?php if (isset($_POST['grilled_black_Pepper'])) echo $_POST['grilled_black_Pepper']; ?>" class="form-control" id="grilled_black_Pepper">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Grilled Black Pepper Chicken Drumlets 25pcs $25.00 ($26.75 w/GST)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="hickory_bbq" value="<?php if (isset($_POST['hickory_bbq'])) echo $_POST['hickory_bbq']; ?>"  class="form-control" id="hickory_bbq">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Hickory BBQ Drumlets 25pcs $25.00 ($26.75 w/GST)</p>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="grilled_teriyaki" value="<?php if (isset($_POST['grilled_teriyaki'])) echo $_POST['grilled_teriyaki']; ?>" class="form-control" id="grilled_teriyaki">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Grilled Teriyaki Drumlets 25pcs $25.00 ($26.75 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--side order group-->
                        
                        <!-----<><><><>Noodle (section side order 3)<><><><><>--------> 
                        <div class="side-order-group">
                             <h3>Noodle</h3>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="nonya_dry_mee_siam" value="<?php if (isset($_POST['nonya_dry_mee_siam'])) echo $_POST['nonya_dry_mee_siam']; ?>"  class="form-control" id="nonya_dry_mee_siam">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Nonya Dry Mee Siam with Condiments 12pax $25.00 ($26.75 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="seafood_sin_chow" value="<?php if (isset($_POST['seafood_sin_chow'])) echo $_POST['seafood_sin_chow']; ?>" class="form-control" id="seafood_sin_chow">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Seafood Sin Chow Fried Bee Hoon 12pax $25.00 ($26.75 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="seafood_mee_goreng" value="<?php if (isset($_POST['seafood_mee_goreng'])) echo $_POST['seafood_mee_goreng']; ?>" class="form-control" id="seafood_mee_goreng">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Seafood Mee Goreng 12pax $25.00 ($26.75 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="ee_fu_mee" value="<?php if (isset($_POST['ee_fu_mee'])) echo $_POST['ee_fu_mee']; ?>" class="form-control" id="ee_fu_mee">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Ee Fu Mee with Mushroom 12pax $25.00 ($26.75 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--side order group-->
                        
                        <!-----<><><><>Snacks (section side order 4)<><><><><>--------> 
                        <div class="side-order-group">
                             <h3>Snacks</h3>
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="egg_chunk" value="<?php if (isset($_POST['egg_chunk'])) echo $_POST['egg_chunk']; ?>" class="form-control" id="egg_chunk">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Egg Chunk & Tuna Onions Finger Sandwiches (with Zucchini) 30pcs $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="vegetable_spring " value="<?php if (isset($_POST['vegetable_spring'])) echo $_POST['vegetable_spring']; ?>" class="form-control" id="vegetable_spring">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Vegetables Spring Rolls 25pcs $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="shell_curry_puffs " value="<?php if (isset($_POST['shell_curry_puffs'])) echo $_POST['shell_curry_puffs']; ?>" class="form-control" id="shell_curry_puffs">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Shell Curry Puffs 20pcs $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="samosa" value="<?php if (isset($_POST['samosa'])) echo $_POST['samosa']; ?>" class="form-control" id="samosa">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Samosa (Medium) 20pcs $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="chicken_nuggets" value="<?php if (isset($_POST['chicken_nuggets'])) echo $_POST['chicken_nuggets']; ?>" class="form-control" id="samosa">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Chicken Nuggets 1kg $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                              <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="golden_fish_balls" value="<?php if (isset($_POST['golden_fish_balls'])) echo $_POST['golden_fish_balls']; ?>" class="form-control" id="golden_fish_balls">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Golden Fish Balls 1kg $18.00 ($19.26 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="golden_cuttlefish" value="<?php if (isset($_POST['golden_cuttlefish'])) echo $_POST['golden_cuttlefish']; ?>" class="form-control" id="golden_cuttlefish">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Golden Cuttlefish Balls 1kg $18.00 ($19.26 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="golden_prawn_balls" value="<?php if (isset($_POST['golden_prawn_balls'])) echo $_POST['golden_prawn_balls']; ?>" class="form-control" id="golden_prawn_balls">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Golden Prawn Balls 1kg $18.00 ($19.26 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="prawn_wantons" value="<?php if (isset($_POST['prawn_wantons'])) echo $_POST['prawn_wantons']; ?>" class="form-control" id="prawn_wantons">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Prawn Wantons with Mayonnaise 25pcs $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="chicken_ngoh_hiong " value="<?php if (isset($_POST['chicken_ngoh_hiong'])) echo $_POST['chicken_ngoh_hiong']; ?>" class="form-control" id="chicken_ngoh_hiong">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Chicken Ngoh Hiong (Wu Xiang) with Chef Sauce 30pcs $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="mini_chicken_pies " value="<?php if (isset($_POST['mini_chicken_pies'])) echo $_POST['mini_chicken_pies']; ?>"  class="form-control" id="mini_chicken_pies">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Mini Chicken Pies (Chicken) 20pcs $25.00 ($26.75 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="baked_quice_lorraine" value="<?php if (isset($_POST['baked_quice_lorraine'])) echo $_POST['baked_quice_lorraine']; ?>"  class="form-control" id="baked_quice_lorraine">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Baked Quice Lorraine 20pcs $25.00 ($26.75 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                                                       
                        </div><!--side order group-->
                        
                         <!-----<><><><>Salad (section side order 5)<><><><><>--------> 
                         <div class="side-order-group">
                             <h3>Salad</h3>
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="classis_ceaser" value="<?php if (isset($_POST['classis_ceaser'])) echo $_POST['classis_ceaser']; ?>"  class="form-control" id="classis_ceaser">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Classis Ceaser Salad 12pax $25.00 ($26.75 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                             
                              <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="potatoes_salad" value="<?php if (isset($_POST['potatoes_salad'])) echo $_POST['potatoes_salad']; ?>" class="form-control" id="potatoes_salad">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Potatoes Salad with Turkey Bacons 12pax $25.00 ($26.75 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--side order group-->
                        
                         <!-----<><><><>Sweet Pastries (section side order 6)<><><><><>--------> 
                         <div class="side-order-group">
                             <h3>Sweet Pastries</h3>
                              <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="chocolate_banana_muffins" value="<?php if (isset($_POST['chocolate_banana_muffins'])) echo $_POST['chocolate_banana_muffins']; ?>" class="form-control" id="chocolate_banana_muffins">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Chocolate & Banana Muffins 25pcs $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="deluxe_fruit_tarts" value="<?php if (isset($_POST['deluxe_fruit_tarts'])) echo $_POST['deluxe_fruit_tarts']; ?>"  class="form-control" id="deluxe_fruit_tarts">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Deluxe Fruit Tarts 18pcs $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="assorted_swiss_rolls" value="<?php if (isset($_POST['assorted_swiss_rolls'])) echo $_POST['assorted_swiss_rolls']; ?>" class="form-control" id="assorted_swiss_rolls">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Assorted Swiss Rolls (Chocolate & Vanilla Lemonade) 25pcs $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="assorted_mini_french_fanish" value="<?php if (isset($_POST['assorted_mini_french_fanish'])) echo $_POST['assorted_mini_french_fanish']; ?>" class="form-control" id="assorted_mini_french_fanish">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Assorted Mini French Danish (Strawberry, Chocolate & Raisin) 20pcs $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="chocolate_doughnuts" value="<?php if (isset($_POST['chocolate_doughnuts'])) echo $_POST['chocolate_doughnuts']; ?>" class="form-control" id="chocolate_doughnuts">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Chocolate Doughnuts 20pcs $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                             
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="chocolate_eclairs" value="<?php if (isset($_POST['chocolate_eclairs'])) echo $_POST['chocolate_eclairs']; ?>" class="form-control" id="chocolate_eclairs">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Chocolate Éclairs 25pcs $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                          
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="apple_strudels" value="<?php if (isset($_POST['apple_strudels'])) echo $_POST['apple_strudels']; ?>" class="form-control" id="apple_strudels">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Apple Strudels 20pcs $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="chocolate_brownies" value="<?php if (isset($_POST['chocolate_brownies'])) echo $_POST['chocolate_brownies']; ?>" class="form-control" id="chocolate_brownies">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Chocolate Brownies 20pcs $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="cream_puffs" value="<?php if (isset($_POST['cream_puffs'])) echo $_POST['cream_puffs']; ?>" class="form-control" id="cream_puffs">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Cream Puffs 30pcs $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                             
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="home_baked_egg_tarts" value="<?php if (isset($_POST['home_baked_egg_tarts'])) echo $_POST['home_baked_egg_tarts']; ?>" class="form-control" id="home_baked_egg_tarts">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Home Baked Egg Tarts 20pcs $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                             
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="deluxe_fresh_fruits" value="<?php if (isset($_POST['deluxe_fresh_fruits'])) echo $_POST['deluxe_fresh_fruits']; ?>" class="form-control" id="deluxe_fresh_fruits">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Deluxe Fresh Fruits Platter 15pax $35.00 ($37.45 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--side order group-->
                        
                         <!-----<><><><>Beverage (Ambient Temperature) (section side order 7)<><><><><>--------> 
                         <div class="side-order-group">
                             <h3>Beverage (Ambient Temperature)</h3>
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="pokka_packet_drinks " value="<?php if (isset($_POST['pokka_packet_drinks'])) echo $_POST['pokka_packet_drinks']; ?>" class="form-control" id="pokka_packet_drinks">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Pokka Packet Drinks (Green Tea, Lemon Tea, Apple Tea & etc…) 250ml $1.00 ($1.07 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="coke" value="<?php if (isset($_POST['coke'])) echo $_POST['coke']; ?>" class="form-control" id="coke">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>7 Up/ Coke/ Green Tea 330ml $1.50 ($1.61 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                              <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="mineral_water_bottles" value="<?php if (isset($_POST['mineral_water_bottles'])) echo $_POST['mineral_water_bottles']; ?>" class="form-control" id="mineral_water_bottles">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Mineral Water Bottles 500ml $1.00 ($1.07 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                              <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="mineral_water_cup " value="<?php if (isset($_POST['mineral_water_cup'])) echo $_POST['mineral_water_cup']; ?>" class="form-control" id="mineral_water_cup">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Mineral Water Cup $0.60 ($0.64 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group side-order">
                                <div class="row">                            
                                    <div class="col-sm-2">
                                        <input type="text" pattern="\d+" name="ice_cubes" value="<?php if (isset($_POST['ice_cubes'])) echo $_POST['ice_cubes']; ?>" class="form-control" id="ice_cubes">
                                    </div>
                                    <div class="col-sm-8">
                                        <p>Ice Cubes in Foam Boxes 8kg $20.00 ($21.40 w/GST)</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--side order group-->
                        
                        <!--============================
                        FORM ORDER
                        ===============================-->
                            <div class="form-group">
                                <label >Name <span class="req">*</span></label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <select class="form-control" name="pre">
                                            <option value="mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="ms">Ms</option>
                                            <option value="Mdm">Mdm</option>
                                            <option value="Dr>">Dr</option>
                                        </select>    
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" name="contactName" value="<?php if (isset($_POST['contactName'])) echo $_POST['contactName']; ?>" class="form-control"  id="name" required>
                                        <?php if ($nameError != '') { ?>
                                            <span class="error"><?= $nameError; ?></span> 
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" name="company" value="<?php if (isset($_POST['company'])) echo $_POST['company']; ?>" class="form-control" id="conpany"  >
                            </div>
                            <div class="form-group">
                                <label >Email<span class="req">*</span></label>
                                <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" class="form-control" id="email" required>    
                                <?php if ($emailError != '') { ?>
                                    <span class="error"><?= $emailError; ?></span>
                                <?php } ?>
                            </div> 

                            <div class="form-group">
                                <label >Contact Person</label>
                                <input type="text" name="contact_person" value="<?php if (isset($_POST['contact_person'])) echo $_POST['contact_person']; ?>" class="form-control" id="contact_person">                         
                            </div>

                            <div class="form-group">
                                <label >Telephone<span class="req">*</span></label>
                                <input type="tel" name="telephone" value="<?php if (isset($_POST['telephone'])) echo $_POST['telephone']; ?>" class="form-control" id="telephone" required>   
                                <?php if ($telephoneError != '') { ?>
                                    <span class="error"><?= $telephoneError; ?></span>
                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label >Mobile<span class="req">*</span></label>
                                <input type="tel" name="mobile" value="<?php if (isset($_POST['mobile'])) echo $_POST['mobile']; ?>" class="form-control" id="mobile" required>   
                                <?php if ($mobileError != '') { ?>
                                    <span class="error"><?= $mobileError; ?></span>
                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label >Fax</label>
                                <input type="tel" name="fax" value="<?php if (isset($_POST['fax'])) echo $_POST['fax']; ?>" class="form-control" id="fax">                         
                            </div>

                            <div class="form-group">
                                <label >Billing Address<span class="req">*</span></label>
                                <textarea  name="billing_address" class="form-control" rows="7" id="billing_address" required> <?php
                                    if (isset($_POST['billing_address'])) {
                                        if (function_exists('stripslashes')) {
                                            echo stripslashes($_POST['billing_address']);
                                        } else {
                                            echo $_POST['billing_address'];
                                        }
                                    }
                                    ?></textarea>     
                                <?php if ($billing_addressError != '') { ?>
                                    <span class="error"><?= $billing_addressError; ?></span> 
                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label >Postal Code</label>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <input type="text" name="postal_code" value="<?php if (isset($_POST['postal_code'])) echo $_POST['postal_code']; ?>" class="form-control " pattern="\d+" id="postal_code">       
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label >Delivery Address/Venue<span class="req">*</span></label>

                                <p class=""> Same as billing Address?</p>

                                <input type="radio" id="copy" name="billing_address" value="yes"> Yes |
                                <input type="radio" id="reset" name="billing_address" value="no"> No
                            </div>

                            <div class="form-group">                       
                                <textarea  name="delivery_address" class="form-control" rows="7" id="delivery_address" required> <?php
                                    if (isset($_POST['delivery_address'])) {
                                        if (function_exists('stripslashes')) {
                                            echo stripslashes($_POST['delivery_address']);
                                        } else {
                                            echo $_POST['delivery_address'];
                                        }
                                    }
                                    ?></textarea>     
                                <?php if ($delivery_addressError != '') { ?>
                                    <span class="error"><?= $delivery_addressError; ?></span> 
                                <?php } ?>
                            </div>
                            <div class="well">
                                <p class="small"> Please provide exact locations please: e.g. 
                                    Function Room 2 on Level 2 at Swimming Pool Area; 
                                    Outside - along the corridor of my flat;
                                </p>

                                <p class="small">Give prominent landmarks or specific direcitons 
                                    to the location - so that our delivery guys will 
                                    not be second guessing their way.
                                </p>

                                <p class="small">NOTE: Please advise us if your condo 
                                    function room has time-sensitive booking hours by giving us your booking times. 
                                </p>          
                            </div>  
                            <!-----floor---------------->
                            <hr>
                            <p>Is your buffet location on a lift level (no staircase hinderances)?</p>
                            <p>Catering Culture reserves the right to charge a non-lift level surcharge/difficult locations.</p>
                            <p>Level 2: $20, Level 3: $30, Level 4: $40, 
                                therefore the waiver of transport charge and 
                                staircase charge is not waived for such order above $600.
                            </p>
                            <div class="form-group">
                                <input type="radio" name="level" value="yes"> Yes |
                                <input type="radio"  name="level" value="no" data-toggle="modal" data-target="#myModal"> No
                            </div>
                            <!-------------------------modal----------------------------------->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h4 class="text-center">Lift Stop On Wich floor ?</h4>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-8 col-sm-offset-2 ">
                                                        <textarea  name="floor" class="form-control" rows="4" id="floor"> 
                                                            <?php
                                                            if (isset($_POST['floor'])) {
                                                                if (function_exists('stripslashes')) {
                                                                    echo stripslashes($_POST['floor']);
                                                                } else {
                                                                    echo $_POST['floor'];
                                                                }
                                                            }
                                                            ?>
                                                        </textarea>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---------------------------###-end modal------------>

                            <hr>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label >Delivery Date<span class="req">*</span></label>
                                        <input type="text" name="delivery_date" value="<?php if (isset($_POST['delivery_date'])) echo $_POST['delivery_date']; ?>" class="form-control datepicker" id="delivery_date" required>       
                                    </div>
                                    <div class="col-sm-3">
                                        <label >Ready By <span class="req">*</span></label>
                                        <input type="text" name="ready_by" value="<?php if (isset($_POST['ready_by'])) echo $_POST['ready_by']; ?>" class="form-control timepicker" id="ready_by" required>       
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label>No Of Guest<span class="req">*</span></label>
                                            <input type="text" name="guest" value="<?php if (isset($_POST['guest'])) echo $_POST['guest']; ?>"  class="form-control" pattern="\d+" id="guest" required> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr> 
                            <div class="form-group">
                                <label >Special Instructions</label>
                                <textarea  name="special_intructions" class="form-control" rows="7" id="special_intructions"> 
                                    <?php
                                    if (isset($_POST['special_intructions'])) {
                                        if (function_exists('stripslashes')) {
                                            echo stripslashes($_POST['special_intructions']);
                                        } else {
                                            echo $_POST['special_intructions'];
                                        }
                                    }
                                    ?>
                                </textarea>                        
                            </div>
                            <hr>
                            <!---payment method==============================
                            ============================================================-->
                            <h1 class="text-center">Mode of Payment</h1>
                            <hr>
                            <span class="req">*</span>
                            <div class="payment-method">
                                <div class="form-group" >
                                    <strong>  All Orders  </strong>

                                    <br>
                                    <label class="">
                                        <input type="radio" onclick="hide_form()" id="cash" name="payment" value="Strictly Cash on Delivery "> Strictly Cash on Delivery 
                                    </label>       
                                    <br>
                                    <label class="">
                                        <input type="radio" onclick="hide_form()"  id="cheque" name="payment" value="Strictly Cheque on delivery">  Strictly Cheque on delivery
                                        (made payable to Catering Culture Pte Ltd)
                                    </label>
                                </div>
                                <div class="form-group">
                                    <strong> Applicable for Government & Corporate Accounts Only </strong>
                                    <br>
                                    <label class="">
                                        <input type="radio" onclick="hide_form()" id="giro" name="payment" value="Giro / IBG (pre-approved only)">  Giro / IBG (pre-approved only)
                                    </label>
                                    <br>

                                    <!--colapse--->
                                    <label class="">
                                        <input type="radio" onclick="hide_form()"   id="bgebiz" name="payment" value="Gebiz / eInvoice - please state Ministry / Stat Board / Dept /
                                               Sub-BU: e.g. MCYS, MCD20 (Youth Division)" >   Gebiz / eInvoice - please state Ministry / Stat Board / Dept /
                                        Sub-BU: e.g. MCYS, MCD20 (Youth Division)
                                    </label>
                                    <div class=" " id="gebiz">
                                        <div class="well">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td colspan="2">
                                                        <h1 class="text-center">GEBIZ</h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ministry</td>
                                                    <td><input type="text" name="ministry" value="<?php if (isset($_POST['ministry'])) echo $_POST['ministry']; ?>" class="form-control" id="ministry"> </td>
                                                </tr>
                                                <tr>
                                                    <td>Business Unit</td>
                                                    <td><input type="text" name="business_unit" value="<?php if (isset($_POST['business_unit'])) echo $_POST['business_unit']; ?>" class="form-control" id="business_unit"></td>
                                                </tr>
                                                <tr>
                                                    <td>Sub Business Unit</td>
                                                    <td><input type="text" name="sub_business_unit" value="<?php if (isset($_POST['sub_business_unit'])) echo $_POST['sub_business_unit']; ?>" class="form-control" id="sub_business_unit"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!--end collAPSE------->

                                    <!--colapse2--->
                                    <label class="">
                                        <input type="radio" onclick="hide_form()" id="bmoe"  name="payment" value="Goverment School - MOE " >  Goverment School - MOE 
                                    </label>
                                    <div class="" id="moe">
                                        <div class="well">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td colspan="2">
                                                        <h1 class="text-center">MOE</h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Teacher's Name</td>
                                                    <td><input type="text" name="teachers_name" value="<?php if (isset($_POST['teachers_name'])) echo $_POST['teachers_name']; ?>" class="form-control" id="teachers_name"> </td>
                                                </tr>
                                                <tr>
                                                    <td>Teacher's Email</td>
                                                    <td><input type="text" name="teachers_email" value="<?php if (isset($_POST['teachers_email'])) echo $_POST['teachers_email']; ?>" class="form-control" id="teachers_email"></td>
                                                </tr>
                                                <tr>
                                                    <td>Teacher's HP</td>
                                                    <td><input type="text" name="teachers_hp" value="<?php if (isset($_POST['teachers_hp'])) echo $_POST['teachers_hp']; ?>" class="form-control" id="teachers_hp"></td>
                                                </tr>
                                                <tr>
                                                    <td>Student  Name</td>
                                                    <td><input type="text" name="student_name" value="<?php if (isset($_POST['student_name'])) echo $_POST['student_name']; ?>" class="form-control" id="student_name"> </td>
                                                </tr>
                                                <tr>
                                                    <td>Student  Email</td>
                                                    <td><input type="text" name="student_email" value="<?php if (isset($_POST['student_email'])) echo $_POST['student_email']; ?>" class="form-control" id="student_email"></td>
                                                </tr>
                                                <tr>
                                                    <td>Student  HP</td>
                                                    <td><input type="text" name="student_hp" value="<?php if (isset($_POST['student_hp'])) echo $_POST['student_hp']; ?>" class="form-control" id="student_hp"></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <!--end collAPSE 2------->
                                    </div><!--end acordion-->
                                    <label class="">
                                        <input type="radio" onclick="hide_form()" id="14-days" name="payment" value="14-days Credit Terms (pre-approved only, first time clients -
                                               cash/cheque only)  ">   14-days Credit Terms (pre-approved only, first time clients -
                                        cash/cheque only) 
                                    </label>

                                </div>
                                <!------end paymet method================================
                                ========================================================-->
                                <hr>
                                <div class="form-group">
                                    <label>How did you come to know about Catering Culture Services Pte Ltd?</label>
                                    <div class="row">
                                        <div class="col-sm-4">

                                            <select name="knowing" class="form-control">
                                                <option onclick="hide_other()" value="" selected="">Please select</option>
                                                <option onclick="hide_other()" value="Existing Customer">Existing Customer</option>
                                                <option onclick="hide_other()" value="From Catering Culture Event">From Catering Culture Event</option>
                                                <option onclick="hide_other()" value="Google">Google</option>
                                                <option onclick="hide_other()" value="Yahoo">Yahoo</option>
                                                <option onclick="hide_other()" value="Internet Yellow Pages">Internet Yellow Pages</option>
                                                <option onclick="hide_other()" value="Newspapers">Newspapers</option>
                                                <option onclick="hide_other()" value="Online Forum">Online Forum</option>
                                                <option onclick="hide_other()" value="Television/ TV AD">Television/ TV AD</option>
                                                <option onclick="hide_other()" value="Recommended by Friend">Recommended by Friend</option>
                                                <option onclick="show_other()" value="Others"  >Others</option>
                                            </select>
                                            <div  id="other">
                                                <input type="text"  name="knowing" class="form-control" > 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label >

                                            <input name="tnc" id="tnc" value="Yes" type="checkbox" required=""><span class="req">*</span>Yes, I have read and agreed the Terms & Conditions below 
                                        </label>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#tc">
                                    Terms & Conditions
                                </button>
                                <button type="button" id="preview" class="btn btn-primary " data-toggle="modal" data-target="#op">
                                    Order Preview
                                </button>

                                <input type="hidden"  name="submitted" id="submitted" value="true" /><button type="submit" class="btn btn-success ">Order &raquo;</button>

                        </form>

                    <?php endwhile; ?>
                <?php endif; ?>
            <?php } ?>
        </div><!--end col-offset-->
    </div><!--end row-->
</div><!--end container-->


<!--modal term & condition--->                           
<div class="modal fade" id="tc" tabindex="-1" role="dialog" >
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-body">
                <h4>Terms & Conditions</h4>
                <ul>
                    <li>Transport Charge: <strong>$45</strong> (Transport Charge will be waived for orders above $600 food only &amp; before GST) $55 for Public Holiday and after 2pm on eve of PH (waived for orders above $1,000)</li>
                    <li><strong>Full Set of disposables</strong> (150%) will be provided</li>
                    <li><strong>Complete Buffet Layout</strong> with Full-Drop Table Cloths &amp; Warmers</li>
                    <li>The collection of the <strong>buffet items is four (3) hours</strong> after the “ready time”.</li>
                    <li>The management <strong>reserves the right to change the items on the menu without prior notice.</strong></li>
                    <li>Please allow <strong>±30 minutes grace</strong> from the “ready time” for unforeseen circumstances (traffic jams, parking problems, etc).</li>
                    <li>All Prices are subjected to<strong> 7% GST.</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--end modal term and condition-->
<!--modal order preview----------->                          
<div class="modal fade" id="op" tabindex="-1" role="dialog" >
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-body">
                <h4>Your Order</h4>
                <table>
                    <tr>
                    <td>Name</td>
                    <td><?php echo $_POST['name']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!--en modal order preview--->   

<?php get_footer(); ?>
	