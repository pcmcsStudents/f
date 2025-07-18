<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->common->mysql_safe_string($cust_rs['cust_name'])?></title>
<link  href="<?php echo base_url()?>print_assets/css/style.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">


</head>

<body>
<page size="A4">

	<div class="head"><img src="<?php echo base_url()?>print_assets/images/head.png" alt="" /></div>    
    
    <div class="user-photo">
    	<div class="photo"><img src="<?PHP echo base_url()?>uploads/customers/<?php echo stripslashes($cust_rs['cust_photo_1'])?>" alt="" /></div> 
    	<div class="photo-bg"><img src="<?php echo base_url()?>print_assets/images/photo-bg.png" alt="" /></div>
    	
    </div>
    
    <div class="clearfix"></div>
    <div class="user-name">
    	Mr. <?php echo $this->common->mysql_safe_string($cust_rs['cust_name'])?><br />
        
        
        <br/>
        <span>DOB : <?php echo date('d M Y', strtotime($this->common->mysql_safe_string($cust_rs['cust_dob'])))?> (<?php echo $this->common->mysql_safe_string($cust_rs['cust_dob_time'])?>), Mob : <?php echo $this->common->mysql_safe_string($cust_rs['cust_mobile'])?></span>
    </div>

    
   <div class="footer"> <img src="<?php echo base_url()?>print_assets/images/footer.png" alt="" /></div>

</page>

<page size="A4" class="middle-page">
	<div class="head"><img src="<?php echo base_url()?>print_assets/images/head.png" alt="" /></div>    
    

    <div class="hand-photo">
    	<p>Left Hand</p>
    	<img src="<?php echo base_url().'uploads/customers/'.stripslashes($cust_rs['cust_photo_2'])?>">
    </div>
    
    <div class="hand-photo hand-photo-right">
    	<p>Right Hand</p>
    	<img src="<?php echo base_url().'uploads/customers/'.stripslashes($cust_rs['cust_photo_3'])?>" />
    </div>
    
        <div class="footer"> <img src="<?php echo base_url()?>print_assets/images/footer.png" alt="" /></div>
</page>

<div class="clearfix"></div>

<page size="A4" class="content-page">


<?php
$wrd = 0;
foreach($pred_rs as $pr_det){
		  $where_cond = " WHERE cat_id=".$pr_det['cat_id']." ORDER BY cat_id";
		  $cat_rs = $this->common->getOneRow('medi_cat_master',$where_cond);


		  /*$where_cond = " WHERE cat_id=".$pr_det['cat_id']." ORDER BY word_id";
		  $master_word_rs = $this->common->getOneRow('medi_word_master',$where_cond);		  
		  if($master_word_rs && $master_word_rs['word_head_1']!='') {
			 $wrd_head = '<strong>'.$this->common->mysql_safe_string($master_word_rs['word_head_1']).' : </strong> <br/>';
		  } else {
			 $wrd_head = '';
		  }*/
		  
		  //$wrds_rs = $this->common->get_words_names($this->common->mysql_safe_string($pr_det['word_ids']));
		  $wrds_rs = '';
		  if($pr_det['word_ids']){
			  $wrds_rs.=$this->common->mysql_safe_string($pr_det['word_ids']);
		  }

		  if($pr_det['word_ids_2']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_2']);
		  }

		  if($pr_det['word_ids_3']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_3']);
		  }

		  if($pr_det['word_ids_4']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_4']);
		  }

		  if($pr_det['word_ids_5']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_5']);
		  }

		  if($pr_det['word_ids_6']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_6']);
		  }

		  if($pr_det['word_ids_7']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_7']);
		  }

		  if($pr_det['word_ids_8']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_8']);
		  }

		  if($pr_det['word_ids_9']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_9']);
		  }

		  if($pr_det['word_ids_10']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_10']);
		  }

		  if($pr_det['word_ids_11']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_11']);
		  }

		  if($pr_det['word_ids_12']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_12']);
		  }

		  if($pr_det['word_ids_13']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_13']);
		  }

		  if($pr_det['word_ids_14']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_14']);
		  }

		  if($pr_det['word_ids_15']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_15']);
		  }

		  if($pr_det['word_ids_16']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_16']);
		  }

		  if($pr_det['word_ids_17']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_17']);
		  }

		  if($pr_det['word_ids_18']){
			  $wrds_rs.=", ".$this->common->mysql_safe_string($pr_det['word_ids_18']);
		  }
		  
		  if(substr($wrds_rs,0,1)==","){
			  $wrds_rs = substr($wrds_rs, 1);
		  }
		  
?>	
<div class="detail-info">
    <div class="heading">
        <div class="heading-text"><?php echo $this->common->mysql_safe_string($cat_rs['cat_name'])?></div>
        <div class="heading-bg"><img src="<?php echo base_url()?>print_assets/images/heding-bg.png" /></div>
    </div>
    <p>
	<?php echo $wrds_rs;?></p>    
</div>

<?php 
$wrd++;
} ?>


<div class="detail-info">
    <div class="heading">
        <div class="heading-text">|| इति श्री शुभंम ||</div>
        <div class="heading-bg"><img src="<?php echo base_url()?>print_assets/images/heding-bg.png" /></div>
    </div>
    <p style="text-align:center; background-color:#FFB366"> *हातावरील रेषा म्हणजे सर्वस्व नाही ह्या रेषा म्हणजे जीवनासाठी फक्त एक मार्गदर्शन आहे * <br/>वरील भविष्य खरे / खोटे  ठरल्याचे सांगून संशोधनास मदत करावी</p> 
</div>
    

     
     <br/><br/> 

<div class="watermark"><img src="<?php echo base_url()?>print_assets/images/watermar.png" alt="" /></div>
</page>

</body>
</html>