<?php if($this->session->userdata('USER_TYPE')!=''){ ?>
<script type="text/javascript" src="<?php echo base_url();?>/js/common.js">
</script>
 <style type="text/css">#cssMenu{display:none}</style>


  <link type="text/css" href="<?php echo base_url();?>/css-menu.files/style.css" rel="stylesheet"/>
<style type="text/css">
<!--
.style5 {color: #666666}
.style1 {	color: #333333;
	font-weight: bold;
}
.style4 {color: #333333}
.style7 {color: #000000; }
-->
</style>
<?
 if ($this->session->userdata('USER_TYPE') == 5 or $this->session->userdata('USER_TYPE') == 4 or $this->session->userdata('USER_TYPE') == 2 or  $this->session->userdata('USER_GROUP') == 'W') { ?>
 <div align="left"> 
 <A HREF="javascript:history.go(-1)"><img height="40" width="40" src="<?php echo base_url(false).'images/back_button.png';?>" title="Back"/></a>
 </div>
<? } ?> 
<div id="print_content">
<div class="conthead" align="center">
  <h2><em>MATHS FAIR</em></h2>
</div>
<?php
 echo form_open('school/registration/maths_print_details', array('id' => 'mathsprint','name' => 'mathsprint'));
// var_dump($school_details);
 ?>
<div class="container">
 <div class="contentbox">
   <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" style="color:#999999" bgcolor="#FFFFF0"><tr><td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" style="border:solid 1px; color:#999999" bgcolor="#E9E9D1">
     <tr style="border-bottom:1px solid #666666;">
       <td width="18%"  class="table_row_first">School Code :</td>
       <td  class="table_row_first"><?php echo @$school_details[0]['school_code']?>
           <input type="hidden" name="hidschool" id="hidschool" value="<? echo @$school_details[0]['school_code'] ; $schoolcode=@$school_details[0]['school_code'];?>" />
           <input name="base_url" type="hidden" id="base_url" value="<?php echo base_url();?>" /> 
            <input name="sch_code" type="hidden" id="sch_code" value="<?php echo @$school_details[0]['school_code']?>" /> 
             <input name="fairid" type="hidden" id="fairid" value="<?php echo @$fairid;?>" />       </td>
       <td >&nbsp;SchoolName: <?php echo @$school_details[0]['school_name']?></td>
       <td  colspan="3">&nbsp;</td>
     </tr>
     <tr style="border-bottom:1px solid #666666;">
       <td  class="table_row_first">School Phone(with STD code) : </td>
       <td colspan="5"  class="table_row_first"><?php echo @$school_details[0]['school_phone']?> </td>
     </tr>
     <tr style="border-bottom:1px solid #666666;">
       <td>E-mail : </td>
       <td colspan="5"><?php echo @$school_details[0]['school_email']?></td>
     </tr>
     <tr style="border-bottom:1px solid #666666;">
       <td>Standard : </td>
       <td width="14%">From : <?php echo @$school_details[0]['class_start']?></td>
       <td>To : <?php echo @$school_details[0]['class_end']?></td>
       <td width="15%">&nbsp;</td>
       <td width="14%">&nbsp;</td>
       <td width="6%"></td>
     </tr>
     <tr style="border-bottom:1px solid #666666;">
       <td>School Type :</td>
       <td colspan="5"><?php 
		if(@$school_details[0]['school_type'] == 'G') 
			$type	=	'Government';
		else if(@$school_details[0]['school_type'] == 'A') 
			 $type	= 	'Aided';
		else if(@$school_details[0]['school_type'] == 'U') 
			$type	= 	'Unaided' ;
		else
			$type	= '';
		?>
           <?php echo @$school_details[0]['school_type'];?> </td>
     </tr>
     <tr style="border-bottom:1px solid #666666;">
       <td>Principal :</td>
       <td><?php echo @$school_details[0]['principal_name'];?> </td>
       <td width="33%">Phone : &nbsp;&nbsp;<?php echo @$school_details[0]['principal_phone'];?></td>
       <td colspan="3">&nbsp;</td>
     </tr>
     <tr style="border-bottom:1px solid #666666;">
       <td>Headmaster : </td>
       <td><?php echo @$school_details[0]['hm_name'];?></td>
       <td>Phone :&nbsp;&nbsp; <?php echo @$school_details[0]['hm_phone'];?></td>
       <td colspan="3">&nbsp;</td>
     </tr>
     <tr style="border-bottom:1px solid #666666;">
       <td>Total number of students :</td>
       <td colspan="5"><?php 
				$lp		=	@$school_details[0]['strength_lp'];
				$up		=	@$school_details[0]['strength_up'];
				$hs		=	@$school_details[0]['strength_hs'];
				$hss	=	@$school_details[0]['strength_hss'];
				$vhss	=	@$school_details[0]['strength_vhss'];	
			?>
           <div class="style7" id="lp" style="float:left;">LP&nbsp;:&nbsp; <?php echo $lp?> </div>
         <div class="style5" id="up" style="float:left;">&nbsp;<span class="style7">UP&nbsp;:&nbsp; <?php echo $up?></span> </div>
         <div class="style5" id="hs" style="float:left;">&nbsp;<span class="style7">HS&nbsp;:&nbsp; <?php echo $hs?></span> </div>
         <div class="style5" id="hss" style="float:left;">&nbsp;<span class="style7">HSS :&nbsp;<?php echo $hss?></span> </div>
         <div class="style5" id="vhss" style="float:left; ">&nbsp;<span class="style4">&nbsp;<span class="style7">VHSS&nbsp;:&nbsp; <?php echo $vhss?></span></span> </div></td>
     </tr>
    
   </table></td>
       </tr>
     <tr>
       <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#EAEAF4" style="border:solid 1px; color:#999999">

         <tr class="table_row_first">
           <td width="23%" height="30" bgcolor="#E9E9D1" class="style4"><span class="style7">Number of Boys Participated&nbsp;&nbsp;&nbsp;</span>: <span class="style7">&nbsp;&nbsp;<? echo $this->Registration_Model->fair_count($fairid,@$schoolcode,'B');?></span></td>
           <td colspan="2" bgcolor="#E9E9D1" class="style4"><span class="style7">Number of Girls Participated&nbsp;&nbsp;&nbsp;:</span><strong>&nbsp;</strong>&nbsp;&nbsp;<span class="style7"><? echo $this->Registration_Model->fair_count($fairid,@$schoolcode,'G');?></span></td>
           </tr>
         <tr class="table_row_first">
           <td colspan="2" bgcolor="#E9E9D1" class="style7">Number of Escorting Teacher</td>
           <td width="74%" bgcolor="#E9E9D1"><span style="float:left;">
             <?php 
		//escorting_details
		$no_escorting_details = count($escorting_details);
		 echo @$escorting_details[0]['teachers_num'];
		 $count_c =  "0";
		$count_c=@$escorting_details[0]['teachers_num'];
		//echo $count_c;
		@$school_details[0]['escorting_teachers'] = ($count_c>0)?$count_c:0;?>
           </span></td>
         </tr>
         <tr class="table_row_second">
           <td colspan="3" bgcolor="#FFFFFF"><?php 
	   if(@$no_escorting_details > 0)
        {
				$i_limit=$count_c+1;
				
				$escorting_teacher_details = explode('#@#',@$escorting_details[0]['escorting_teachers']); 
				
				for($itr=1;$itr<=$count_c;$itr++)
				{
					$aryname[$itr]= explode('#$#',@$escorting_teacher_details[$itr-1]); 
					
					
					?>
               <table width="100%" align="center" border="0">
               <?php if($itr==1){?>  
               <tr>
                   <td  width="2%" align="left" bgcolor="#D9D9EC">SLNO</td>
                   <td  width="20%" align="left" bgcolor="#D9D9EC">NAME</td>
                   <td width="30%" align="left" bgcolor="#D9D9EC">DESIGNATION</td>
                   <td width="50%" align="left" bgcolor="#D9D9EC">PHONE</td>
                 </tr>
                 <?php }else
				  ?><tr>
                  <td align="left"  width="4%">                  </td>
                   <td align="left"  width="20%">                  </td>
                   <td align="left" width="30%">                  </td>
                   <td align="left" width="50%">                  </td>
                  </tr>
                 <tr>
                   <td    width="2%" align="left" bgcolor="#FFFFFF"><?php echo $itr; ?></td>
                   <td    width="20%" align="left" bgcolor="#FFFFFF"><?php echo  @$aryname[$itr][0];?>                   </td>
                   <td    width="30%" align="left" bgcolor="#FFFFFF"><?php 
					
						
							foreach($designations as $row=>$values)
							{
							if(@$aryname[$itr][1]==$values['designation_code'])echo $values['designation'];
							
							}
						
						?>                   </td>
                   <td    width="50%" align="left" bgcolor="#FFFFFF"><?php echo @$aryname[$itr][2]; ?>                   </td>
                 </tr>
               </table>
             <?php
				}
		}	
	  ?>              </td>
         </tr>

         <tr>
           <td colspan="3">
               <!--<input type="submit" value="Save" class="btnalt" align="right" onclick="return validate();" />-->                          </td>
         </tr>
       </table>
       <?php 
				$lp_count		=	count(@$count_lp);
				$up_count		=	count(@$count_up);
				$hs_count		=	count(@$count_hs);
				$hss_count		=	count(@$count_hss);
				
			?>
       
       </td>
     </tr>
     <tr>
       <td>&nbsp;</td>
     </tr>
       <?php if($lp_count!=0){?>
     <tr>
       <td><table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
         <tr>
           <td colspan="7" bgcolor="#D9D9EC"><div align="center" class="style4"><strong>LOWER PRIMARY DETAILS</strong></div></td>
           </tr>
         <tr>
           <td width="4%" bgcolor="#E9E9D1"><div align="center"><span class="style1">Slno</span></div></td>
           <td width="18%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Items</span></td>
           <td width="13%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Name of Participants</span></td>
           <td width="7%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Standard</span></td>
           <td width="9%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Admission Number</span></td>
           <td width="8%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Gender</span></td>
           
         </tr>
         <?php 

		
		 $item_count=(count($item_details_lp));
	   $var_item=$item_count;
	   $var_item1=$item_count;
	   $slno=0;
	   for($j=0;$j<$item_count;$j++){
	  
	   $var_item=$var_item1;
	   $item_name[$j]=$item_details_lp[$j]['item_name'];
	   $item_code[$j]=$item_details_lp[$j]['item_code'];
	   $max_participants[$j]=$item_details_lp[$j]['max_participants'];
	   $max=$max_participants[$j];
	  	$k=0;
	   $spn=0;
	 $part_item_details_lp=$this->Registration_Model->get_details_itemcode($schoolcode,1,$fairid,$item_code[$j]);
	//var_dump($part_item_details_lp);
	if(@$part_item_details_lp[0]['admn_no']  || @$part_item_details_lp[0]['item_code'] == 138){
	$slno++;
	$r=0;
	  while($max_participants[$j]!=0){
	  $k=$max_participants[$j];
?>

         <tr <?php if($j%2==0) {?> <?php } ?>>
           <?php if($spn==0) {?>
           <td rowspan="<?php echo $k; ?>"><div align="center"><span class="style5"><?php echo $slno;?></span></div></td>
           <?php }?>
           <?php if($spn==0) {?>
           <td rowspan="<?php echo $k; ?>">&nbsp;<?php echo strtoupper($item_name[$j]);?>
               <input name="item_code<?php echo $item_code[$j];?>" type="hidden" value="<?php echo $item_code[$j]; ?>" /></td>
           <?php }
            if(@$part_item_details_lp[0]['item_code'] == 138)
		   {
		   ?>
            <td colspan="4">
            <?php echo @$part_item_details_lp[0]['exhibit_name']; ?>
            </td>
            <?php 
			} 
			else{
			?>
           <td>
               &nbsp;
               <?php 
		   
		   if(@$part_item_details_lp[$r]['item_code']==$item_code[$j]){echo @$part_item_details_lp[$r]['participant_name'];}
		   ?></td>
           <td>&nbsp;             <?php 
		   if(@$part_item_details_lp[$r]['item_code']==$item_code[$j]){echo  @$part_item_details_lp[$r]['class']; }?></td>
          
         
           <td>&nbsp;             <?php  
		   if(@$part_item_details_lp[$r]['item_code']==$item_code[$j]){ echo @$part_item_details_lp[$r]['admn_no'];} ?></td>
           <td>&nbsp;             <?php 
		   if(@$part_item_details_lp[$r]['gender'] == 'B') {$sex='Boy';}
		   else if(@$part_item_details_lp[$r]['gender'] == 'G') {$sex='Girl';}
		   else {echo $sex='';}
		   if(@$part_item_details_lp[$r]['item_code']==$item_code[$j]){echo  @$sex;}
		   ?></td>
           <?php } ?>
           
         </tr>
         <?php 
		
		 $max_participants[$j]=$max_participants[$j]-1;
		 
		 $spn=1;
		$r=$r+1;
		 }
		}
		 }?>
       </table></td>
     </tr>
     <?php } ?>
     <tr>
       <td>&nbsp;</td>
     </tr>
       <?php if($up_count!=0){?>
     <tr>
       <td><table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
         <tr>
           <td colspan="7" bgcolor="#D9D9EC"><div align="center" class="style4"><strong>UPPER PRIMARY DETAILS</strong></div></td>
         </tr>
         <tr>
           <td width="4%" bgcolor="#E9E9D1"><div align="center"><span class="style1">Slno</span></div></td>
           <td width="18%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Items</span></td>
           <td width="13%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Name of Participants</span></td>
           <td width="7%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Standard</span></td>
           <td width="9%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Admission Number</span></td>
           <td width="8%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Gender</span></td>
          
         </tr>
         <?php 

		
		 $item_count=(count($item_details_up));
	   $var_item=$item_count;
	   $var_item1=$item_count;
	   $slno=0;
	   for($j=0;$j<$item_count;$j++){
	  
	   $var_item=$var_item1;
	   $item_name[$j]=$item_details_up[$j]['item_name'];
	   $item_code[$j]=$item_details_up[$j]['item_code'];
	   $max_participants[$j]=$item_details_up[$j]['max_participants'];
	   $max=$max_participants[$j];
	  	$k=0;
	   $spn=0;
	 $part_item_details_up=$this->Registration_Model->get_details_itemcode($schoolcode,2,$fairid,$item_code[$j]);
	//print_r($part_item_details_up);
	if(@$part_item_details_up[0]['admn_no'] || @$part_item_details_up[0]['item_code'] == 147){
	$slno++;
	$r=0;
	  while($max_participants[$j]!=0){
	  $k=$max_participants[$j];
?>
         <tr <?php if($j%2==0) {?> <?php } ?>>
           <?php if($spn==0) {?>
           <td rowspan="<?php echo $k; ?>"><div align="center"><span class="style5"><?php echo $slno;?></span></div></td>
           <?php }?>
           <?php if($spn==0) {?>
           <td rowspan="<?php echo $k; ?>">&nbsp;<?php echo strtoupper($item_name[$j]);?>
               <input name="item_code<?php echo $item_code[$j];?>2" type="hidden" value="<?php echo $item_code[$j]; ?>" /></td>
           <?php }
		     if(@$part_item_details_up[0]['item_code'] == 147)
		   {
		   ?>
            <td colspan="4">
            <?php echo @$part_item_details_up[0]['exhibit_name']; ?>
            </td>
            <?php 
			} 
			else{
			?>
           <td>&nbsp;             <?php 
		   
		   if(@$part_item_details_up[$r]['item_code']==$item_code[$j]){echo @$part_item_details_up[$r]['participant_name'];}
		   ?></td>
           <td>&nbsp;             <?php 
		   if(@$part_item_details_up[$r]['item_code']==$item_code[$j]){echo  @$part_item_details_up[$r]['class']; }?></td>
           <td>&nbsp;             <?php  
		   if(@$part_item_details_up[$r]['item_code']==$item_code[$j]){ echo @$part_item_details_up[$r]['admn_no'];} ?></td>
           <td>&nbsp;             <?php 
		   if(@$part_item_details_up[$r]['gender'] == 'B') {$sex='Boy';}
		   else if(@$part_item_details_up[$r]['gender'] == 'G') {$sex='Girl';}
		   else {echo $sex='';}
		   if(@$part_item_details_up[$r]['item_code']==$item_code[$j]){echo  @$sex;}
		   ?></td>
          <?php } ?>
         </tr>
         <?php 
		
		 $max_participants[$j]=$max_participants[$j]-1;
		 
		 $spn=1;
		$r=$r+1;
		 }
		}
		 }?>
       </table></td>
     </tr>
     <?php } ?>
     <tr>
       <td>&nbsp;</td>
     </tr>
       <?php if($hs_count!=0){?>
     <tr>
       <td><table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
         <tr>
           <td colspan="7" bgcolor="#D9D9EC"><div align="center" class="style4"><strong>HS DETAILS</strong></div></td>
         </tr>
         <tr>
           <td width="4%" bgcolor="#E9E9D1"><div align="center"><span class="style1">Slno</span></div></td>
           <td width="18%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Items</span></td>
           <td width="13%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Name of Participants</span></td>
           <td width="7%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Standard</span></td>
           <td width="9%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Admission Number</span></td>
           <td width="8%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Gender</span></td>
          
         </tr>
         <?php 

		
		 $item_count=(count($item_details_hs));
	   $var_item=$item_count;
	   $var_item1=$item_count;
	   $slno=0;
	   for($j=0;$j<$item_count;$j++){
	  
	   $var_item=$var_item1;
	   $item_name[$j]=$item_details_hs[$j]['item_name'];
	   $item_code[$j]=$item_details_hs[$j]['item_code'];
	   $max_participants[$j]=$item_details_hs[$j]['max_participants'];
	   $max=$max_participants[$j];
	  	$k=0;
	   $spn=0;
	 $part_item_details_hs=$this->Registration_Model->get_details_itemcode($schoolcode,3,$fairid,$item_code[$j]);
	//var_dump($part_item_details_hs);
	if(@$part_item_details_hs[0]['admn_no'] || @$part_item_details_hs[0]['item_code'] == 164){
	$slno++;
	$r=0;
	  while($max_participants[$j]!=0){
	  $k=$max_participants[$j];
?>
         <tr <?php if($j%2==0) {?> <?php } ?>>
           <?php if($spn==0) {?>
           <td rowspan="<?php echo $k; ?>"><div align="center"><span class="style5"><?php echo $slno;?></span></div></td>
           <?php }?>
           <?php if($spn==0) {?>
           <td rowspan="<?php echo $k; ?>">&nbsp;<?php echo strtoupper($item_name[$j]);?>
               <input name="item_code<?php echo $item_code[$j];?>3" type="hidden" value="<?php echo $item_code[$j]; ?>" /></td>
           <?php }
		     if(@$part_item_details_hs[0]['item_code'] == 164)
		   {
		   ?>
            <td colspan="4">
            <?php echo @$part_item_details_hs[0]['exhibit_name']; ?>
            </td>
            <?php 
			} 
			else{
			?>
           <td>&nbsp;             <?php 
		   
		   if(@$part_item_details_hs[$r]['item_code']==$item_code[$j]){echo @$part_item_details_hs[$r]['participant_name'];}
		   ?></td>
           <td>&nbsp;             <?php 
		   if(@$part_item_details_hs[$r]['item_code']==$item_code[$j]){echo  @$part_item_details_hs[$r]['class']; }?></td>
           <td>&nbsp;             <?php  
		   if(@$part_item_details_hs[$r]['item_code']==$item_code[$j]){ echo @$part_item_details_hs[$r]['admn_no'];} ?></td>
           <td>&nbsp;             <?php 
		   if(@$part_item_details_hs[$r]['gender'] == 'B') {$sex='Boy';}
		   else if(@$part_item_details_hs[$r]['gender'] == 'G') {$sex='Girl';}
		   else {echo $sex='';}
		   if(@$part_item_details_hs[$r]['item_code']==$item_code[$j]){echo  @$sex;}
		   ?></td>
          <?php } ?>
         </tr>
         <?php 
		
		 $max_participants[$j]=$max_participants[$j]-1;
		 
		 $spn=1;
		$r=$r+1;
		 }
		}
		 }?>
       </table></td>
     </tr>
     <?php } ?>
     <tr>
       <td>&nbsp;</td>
     </tr>
       <?php if($hss_count!=0){?>
     <tr>
       <td><table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
         <tr>
           <td colspan="8" bgcolor="#D9D9EC"><div align="center" class="style4"><strong>HSS/VHSS DETAILS</strong></div></td>
         </tr>
         <tr>
           <td width="4%" bgcolor="#E9E9D1"><div align="center"><span class="style1">Slno</span></div></td>
           <td width="18%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Items</span></td>
           <td width="13%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Name of Participants</span></td>
           <td width="7%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Standard</span></td>
           <td width="9%" bgcolor="#E9E9D1"><span class="style1">&nbsp;TYPE(</span><span class="style4">HSS/VHSS</span><span class="style1">)</span></td>
           <td width="9%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Admission Number</span></td>
           <td width="8%" bgcolor="#E9E9D1"><span class="style1">&nbsp;Gender</span></td>
           
         </tr>
         <?php 

		
		$item_count=(count($item_details_hss));
	   $var_item=$item_count;
	   $var_item1=$item_count;
	   $slno=0;
	   for($j=0;$j<$item_count;$j++){
	  
	   $var_item=$var_item1;
	   $item_name[$j]=$item_details_hss[$j]['item_name'];
	   $item_code[$j]=$item_details_hss[$j]['item_code'];
	   $max_participants[$j]=$item_details_hss[$j]['max_participants'];
	   $max=$max_participants[$j];
	  	$k=0;
	   $spn=0;
	 $part_item_details_hss=$this->Registration_Model->get_details_itemcode($schoolcode,4,$fairid,$item_code[$j]);
	//var_dump($part_item_details_hss);
	if(@$part_item_details_hss[0]['admn_no'] || @$part_item_details_hss[0]['item_code'] == 182){
	$slno++;
	$r=0;
	  while($max_participants[$j]!=0){
	  $k=$max_participants[$j];
?>
         <tr <?php if($j%2==0) {?> <?php } ?>>
           <?php if($spn==0) {?>
           <td rowspan="<?php echo $k; ?>"><div align="center"><span class="style5"><?php echo $slno;?></span></div></td>
           <?php }?>
           <?php if($spn==0) {?>
           <td rowspan="<?php echo $k; ?>">&nbsp;<?php echo strtoupper($item_name[$j]);?>
               <input name="item_code<?php echo $item_code[$j];?>4" type="hidden" value="<?php echo $item_code[$j]; ?>" /></td>
           <?php }
		     if(@$part_item_details_hss[0]['item_code'] == 182)
		   {
		   ?>
            <td colspan="4">
            <?php echo @$part_item_details_hss[0]['exhibit_name']; ?>
            </td>
            <?php 
			} 
			else{
			?>
           <td>&nbsp;             <?php 
		   
		   if(@$part_item_details_hss[$r]['item_code']==$item_code[$j]){echo @$part_item_details_hss[$r]['participant_name'];}
		   ?></td>
           <td>&nbsp;             <?php 
		   if(@$part_item_details_hss[$r]['item_code']==$item_code[$j]){echo  @$part_item_details_hss[$r]['class']; }?></td>
            <?php
		   @$admn_fest=str_split(@$part_item_details_hss[$r]['admn_no'],1);
		
		 if(@$admn_fest[0]=="H")
		 @$admn_fest="HSS";
		 else if(@$admn_fest[0]=="V")
		 @$admn_fest="VHSS";
		 else
		 @$admn_fest="";
		   ?> <td>&nbsp;              <?php 
		  
		   if(@$part_item_details_hss[$r]['item_code']==$item_code[$j]){echo @$admn_fest; }?></td>
           <td>&nbsp;             <?php  
		   if(@$part_item_details_hss[$r]['item_code']==$item_code[$j]){ echo @$part_item_details_hss[$r]['admn_no'];} ?></td>
           <td>&nbsp;             <?php 
		   if(@$part_item_details_hss[$r]['gender'] == 'B') {$sex='Boy';}
		   else if(@$part_item_details_hss[$r]['gender'] == 'G') {$sex='Girl';}
		   else {echo $sex='';}
		   if(@$part_item_details_hss[$r]['item_code']==$item_code[$j]){echo  @$sex;}
		   ?></td>
          <?php } ?>
         </tr>
         <?php 
		
		 $max_participants[$j]=$max_participants[$j]-1;
		 
		 $spn=1;
		$r=$r+1;
		 }
		}
		 }?>
       </table></td>
     </tr>
     <?php } ?>
     <tr>
       <td>&nbsp;</td>
     </tr>
     <tr>
       <td></td>
     </tr>
 </table>
   
   
   
   
 </div>
</div>
</div>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php echo  form_submit('Print', 'Print to pdf', 'class="btnalt" '); ?>&nbsp;<?php //echo  form_button('Print', 'Print', 'class="btnalt" onClick="javascript:Clickheretoprint()"');?></td>
  </tr>
</table><?php 
echo form_close();

}
?>

