<page backtop="20mm" backbottom="50mm">
<page_header>

<table style="width: 100%;">
			<tr>
				<!--<td style="text-align: left; width: 50%">
					<img src="<?php //echo image_url().'logo.jpg'?>">
				</td>-->
				<td style="width: 100%" align="center"><strong><?PHP echo strtoupper(@$school_details[0]['sub_district_name']);?>&nbsp;SUBDISTRICTSCHOOLS<br />
			    WORKEXPERIENCE <?php if(@$heading){ echo strtoupper(@$heading);} else { echo "ON THE SPOT"; }?> FAIR 2013-14<br />
				</strong></td>
		  </tr>
            <tr>
				<td style="width: 100%" align="center">
                <?php 
					//echo @$school_details[0]['sub_district_name'].' Subdistrict';
					echo (@$cluster[0]['name']) ? '(Cluster : '.@$cluster[0]['name'].')' : '';
				?>
                
                </td>
			</tr>
			<tr>
				<td style="width: 100%"><hr/></td>
			</tr>
		</table>
        
	</page_header>
    
<page_footer>
  
		<table width="80%" cellpadding="5" cellspacing="0" border="0" align="left">
    		
		<tr>
        	<td style="text-align:center"  colspan="3" width="500">
			   	Certified that above details has been verified and found correct
                <br /><br /><br />            </td>
        </tr>
		<tr>
		  <td height="30"  colspan="3" align="center">&nbsp;</td>
		  </tr>
		<tr>
		  <td   colspan="3">        </td>
		  </tr>
        
        <tr>
        	<td style="text-align:left">
            	Place&nbsp;:&nbsp;..............................<br /><br />
                Date&nbsp;&nbsp;:&nbsp;.............................            </td>
            <td align="center" >
            	<br /><br /></td>
        	<td style="text-align:right" width="600">
            	<br /><br />
            	Name &amp; Signature of the Head of the Institution</td>
        </tr>
        <tr>
          <td colspan="3" align="left"> <?php 
			   
			  echo " Report confirmed on ".$school_details[0]['workexp_confirmTime'];
		  echo " and Report Taken on ".date("F j, Y, g:i a");
				?></td>
          </tr>
    </table>
	
<table style="width: 100%;">
			<tr>
				<td style="width: 100%"><hr/></td>
			</tr>
			<tr>
				<td style="text-align: center;width: 100%">page [[page_cu]]/{nb} </td>
			</tr>
		</table>
	</page_footer>

	<table width="100%"  align="center" cellpadding="0" cellspacing="1" style="margin-top:15px;">
   <tr><td><table style="width:100%">
     <tr style="border-bottom:1px solid #666666;">
       <td width="19%" height="20" bgcolor="#FFFFFF">School Code :</td>
       <td height="20" bgcolor="#FFFFFF"><?php echo @$school_details[0]['school_code']?>
           <input type="hidden" name="hidschool" id="hidschool" value="<? echo @$school_details[0]['school_code'] ; $schoolcode=@$school_details[0]['school_code'];?>" />
           <input name="base_url" type="hidden" id="base_url" value="<?php echo base_url();?>" />       </td>
       <td height="20" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;SchoolName: <?php echo @$school_details[0]['school_name']?></td>
       <td height="20"  colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
     </tr>
     <tr >
       <td height="20" bgcolor="#FFFFFF"  class="table_row_first">School Phone(with STD code) : </td>
       <td height="20" colspan="5" bgcolor="#FFFFFF"  class="table_row_first"><?php echo @$school_details[0]['school_phone']?> </td>
     </tr>
     <tr style="border-bottom:1px solid #666666;">
       <td height="20" bgcolor="#FFFFFF">E-mail : </td>
       <td height="20" colspan="5" bgcolor="#FFFFFF"><?php echo @$school_details[0]['school_email']?></td>
     </tr>
     <tr style="border-bottom:1px solid #666666;">
       <td height="20" bgcolor="#FFFFFF">Standard : </td>
       <td width="15%" height="20" bgcolor="#FFFFFF">From : <?php echo @$school_details[0]['class_start']?></td>
       <td height="20" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To : <?php echo @$school_details[0]['class_end']?></td>
       <td width="1%" height="20" bgcolor="#FFFFFF">&nbsp;</td>
       <td width="8%" height="20" bgcolor="#FFFFFF">&nbsp;</td>
       <td width="45%" height="20" bgcolor="#FFFFFF"></td>
     </tr>
     <tr style="border-bottom:1px solid #666666;">
       <td height="20" bgcolor="#FFFFFF">School Type :</td>
       <td height="20" colspan="5" bgcolor="#FFFFFF"><?php 
		if(@$school_details[0]['school_type'] == 'G') 
			$type	=	'Government';
		else if(@$school_details[0]['school_type'] == 'A') 
			 $type	= 	'Aided';
		else if(@$school_details[0]['school_type'] == 'U') 
			$type	= 	'Unaided' ;
		else
			$type	= '';
		?>
           <?php echo @$type;?> </td>
     </tr>
     <tr style="border-bottom:1px solid #666666;">
       <td height="20" bgcolor="#FFFFFF">Principal :</td>
       <td height="20" bgcolor="#FFFFFF"><?php echo @$school_details[0]['principal_name'];?> </td>
       <td width="12%" height="20" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone : &nbsp;&nbsp;<?php echo @$school_details[0]['principal_phone'];?></td>
       <td height="20" colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
     </tr>
     <tr style="border-bottom:1px solid #666666;">
       <td height="20" bgcolor="#FFFFFF">Headmaster : </td>
       <td height="20" bgcolor="#FFFFFF"><?php echo @$school_details[0]['hm_name'];?></td>
       <td height="20" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone :&nbsp;&nbsp; <?php echo @$school_details[0]['hm_phone'];?></td>
       <td height="20" colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
     </tr>
     <tr style="border-bottom:1px solid #666666;">
       <td height="20" bgcolor="#FFFFFF">Total number of students :</td>
       <td height="20" colspan="5" bgcolor="#FFFFFF">
	       <?php 
				$lp		=	@$school_details[0]['strength_lp'];
				$up		=	@$school_details[0]['strength_up'];
				$hs		=	@$school_details[0]['strength_hs'];
				$hss	=	@$school_details[0]['strength_hss'];
				$vhss	=	@$school_details[0]['strength_vhss'];	
			?>
           LP&nbsp;:&nbsp; <?php echo $lp?>
         
       
        
        UP&nbsp;:&nbsp; <?php echo $up?> HS&nbsp;:&nbsp; <?php echo $hs?> &nbsp;HSS :&nbsp;<?php echo $hss?> VHSS&nbsp;:&nbsp; <?php echo $vhss?>  &nbsp;&nbsp;</td>
       </tr>
    
   </table></td>
       </tr>
     <tr>
       <td >
       <table style="width:100%" >

         <tr >
           <td height="20" colspan="2" bgcolor="#FFFFFF" class="style4">Number of Boys Participated&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;<? echo $this->Registration_Model->fair_count($fairid,@$schoolcode,'B');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of Girls Participated&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<? echo $this->Registration_Model->fair_count($fairid,@$schoolcode,'G');?></td>
          </tr>
         <tr >
           <td height="20" bgcolor="#FFFFFF">Number of Escorting Teacher &nbsp;:&nbsp;&nbsp;&nbsp;             <?php 
		//escorting_details
		$no_escorting_details = count($escorting_details);
		 echo @$escorting_details[0]['teachers_num'];
		 $count_c =  "0";
		$count_c=@$escorting_details[0]['teachers_num'];
		//echo $count_c;
		@$school_details[0]['escorting_teachers'] = ($count_c>0)?$count_c:0;?></td>
           <td width="42%" height="20" bgcolor="#FFFFFF">&nbsp;</td>
         </tr>
         <tr>
           <td colspan="2" bgcolor="#FFFFFF">	             </td>
         </tr>

        <tr>
          <tr>
           <td colspan="2">          </td>
         </tr>
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
       <td bgcolor="#FFFFFF">&nbsp;</td>
     </tr>
     <tr>
       <td bgcolor="#FFFFFF"><?php 
		//escorting_details
		$no_escorting_details = count($escorting_details);
		 //echo $no_escorting_details+1;
		 $count_c =  "0";
		$count_c=@$escorting_details[0]['teachers_num'];
		//echo $count_c;
		@$school_details[0]['escorting_teachers'] = ($count_c>0)?$count_c:0;?>
         <?php 
	   if(@$no_escorting_details > 0)
        {
				$i_limit=$count_c+1;
				
				$escorting_teacher_details = explode('#@#',@$escorting_details[0]['escorting_teachers']); 
				?>
                <table width="726" border="0" align="center">
                <tr><td colspan="4"> <strong>Escorting Teachers Details </strong></td>
              </tr>
              <tr><td colspan="4"></td></tr> 
                
                <?
				
				for($itr=1;$itr<=$count_c;$itr++)
				{
					$aryname[$itr]= explode('#$#',@$escorting_teacher_details[$itr-1]); 
					
					
					?>
               
              <?php if($itr==1){?>  
            <tr>
              <td width="29%" height="10" bgcolor="#FFFFFF" >Name</td>
              <td width="55%" height="10" bgcolor="#FFFFFF" >Designation</td>
              <td width="16%" height="10" bgcolor="#FFFFFF">Phone</td>
                    
                 </tr>
                 <?php }else
				  ?><tr>
                  <td height="10" bgcolor="#FFFFFF" style="width:30%" ></td>
                   <td height="10"bgcolor="#FFFFFF" style="width:40%" ></td>
                   <td height="10"bgcolor="#FFFFFF" style="width:25%" ></td>
                   
                  </tr>
                 
                 <tr>
                   <td height="10" bgcolor="#FFFFFF" style="width:30%"><?php echo  @$aryname[$itr][0];?>                   </td>
                   <td height="10"bgcolor="#FFFFFF" style="width:40%"><?php 
					
						
							foreach($designations as $row=>$values)
							{
							if(@$aryname[$itr][1]==$values['designation_code'])echo $values['designation'];
							
							}
						
						?>                   </td>
                   <td height="10" bgcolor="#FFFFFF" style="width:25%"><?php echo @$aryname[$itr][2]; ?>                   </td>
                   
                 </tr>
         
       <?php
				} ?>
          </table>
	  <? }	
	  ?></td>
     </tr> 
   
      <tr>
       <td bgcolor="#FFFFFF">&nbsp;</td>
     </tr> 
     
      <tr>
       <td bgcolor="#FFFFFF">
        <table width="100%" border="0" align="left">
       		<tr>
            	<td colspan="4"> <strong>Item Details </strong></td>
            </tr>
            
		<?php  
        
        $part_item_details=$this->Registration_Model->get_details_exb($schoolcode,0,$fairid,2);
        
       $sel_items	=	explode('#',@$part_item_details[0]['item_code']);
		 $item_count=(count($item_details_lp));
		$sel_item_count=(count($sel_items));
	   $var_item=$item_count;
	   $var_item1=$item_count;
	   $slno=0;
		  for($j=0;$j<$sel_item_count;$j++){
	  
	   $var_item=$var_item1;
	   $item_name[$j]=$item_details_lp[$j]['item_name'];
	   $item_code[$j]=$item_details_lp[$j]['item_code'];
	  //print_r($sel_items);
	
	   $item_name_details=$this->General_Model->get_data('item_master','item_name',array('item_code'=>$sel_items[$j]));
	   ?>
     
          
                <?php
                
		?>
		 <tr>
                <td width="4%"  ><div align="center"><?php echo ++$slno;?></div></td>
                <td width="96%" colspan="3" >
                <?php echo strtoupper($item_name_details[0]['item_name']);?>
                </td>
                <?php 
				?>
                
              
            </tr>
            
            <?php } ?>
        </table>
       </td>
     </tr>
      <tr>
       <td bgcolor="#FFFFFF">&nbsp;</td>
     </tr>  
      <tr>
       <td style="width:100%;" bgcolor="#FFFFFF">
           
           <table width="100%" style="width:100%;" border="1" align="left">
       		<tr>
            	<td colspan="5" style="width:100%;"> <strong>PARTICIPANT DETAILS </strong></td>
            </tr>
           <tr>
            	<td  style="width:5%; border-right: solid 1px #000000; padding:2px;border-top: solid 1px #000000; padding:2px"> <strong>Slno</strong></td>
                <td  style="width:30%; border-right: solid 1px #000000; padding:2px;border-top: solid 1px #000000; padding:2px"> <strong>Name of Participant</strong></td>
                <td  style="width:20%; border-right: solid 1px #000000; padding:2px;border-top: solid 1px #000000; padding:2px"> <strong>Std</strong></td>
                <td  style="width:25%; border-right: solid 1px #000000; padding:2px;border-top: solid 1px #000000; padding:2px"> <strong>Admn Number</strong></td>
                <td  style="width:20%; border-right: solid 0px #000000; padding:2px;border-top: solid 1px #000000; padding:2px"> <strong>Gender</strong></td>
            </tr>
            
			<?php 
            
				$item_count=(count($part_item_details));
				$var_item=$item_count;
				$var_item1=$item_count;
				$r	=	0;
				for($p=1;$p<=$item_count;$p++){
            ?>
            
            <tr>
            	<td style="width:5%; border-right: solid 1px #000000; padding:2px;border-top: solid 1px #000000; padding:2px"><?php echo $p;?></td>
                <td style="width:30%; border-right: solid 1px #000000; padding:2px;border-top: solid 1px #000000; padding:2px"><?php echo @$part_item_details[$r]['participant_name'];?></td>
                <td style="width:20%; border-right: solid 1px #000000; padding:2px;border-top: solid 1px #000000; padding:2px"><?php echo @$part_item_details[$r]['class'];?></td>
                <td style="width:25%; border-right: solid 1px #000000; padding:2px;border-top: solid 1px #000000; padding:2px"><?php echo @$part_item_details[$r]['admn_no'];?></td>
                <td style="width:20%; border-right: solid 0px #000000; padding:2px;border-top: solid 1px #000000; padding:2px"><?php 
				 if(@$part_item_details[$r]['gender'] == 'B') {$sex='Boy';}
		   		 else if(@$part_item_details[$r]['gender'] == 'G') {$sex='Girl';}
		   		 else {echo $sex='';}
				 echo $sex;
				?></td>
            </tr>
            <?php 
			$r++;
			} 
			?>
        </table>    
        
       </td>
     </tr>  
        
     <tr>
       <td bgcolor="#FFFFFF">&nbsp;</td>
     </tr> 
 
     <tr>
       <td bgcolor="#FFFFFF"><p><br />
         Name of the TeamManager/Joint TeamManager &nbsp;&nbsp;&nbsp;&nbsp;:<?PHP echo @$escorting_details[0]['name_team'];?></p>
         <p>Address of the TeamManager/Joint TeamManager&nbsp; :<?PHP echo @$escorting_details[0]['address_team'];?><br />
         </p>
         <p>Phone Number of the TeamManager/Joint TeamManager&nbsp; :<?PHP echo @$escorting_details[0]['phone_team'];?><br />
         </p></td>
     </tr>
     <tr>
       <td bgcolor="#FFFFFF">
       <br />
      </td>
     </tr>
     
     <tr>
       <td bgcolor="#FFFFFF"> </td>
     </tr>
     <tr>
       <td bgcolor="#FFFFFF">       </td>
       </tr></table>
       
</page>