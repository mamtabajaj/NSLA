<div>
<?php 
	$session->flash(); 
	$newUrl = "list".$urlString;
	$urlArray = array(
		'field' 	=> $search1,
		'value' 	=> $search2
	);
	$paginator->options(array('url'=>$urlArray));
?>
<?php echo $form->create('User',array('action'=>$newUrl,'method'=>'POST', "class" => "longFieldsForm", "name" => "listForm", "id" => "listForm")); ?>
	<div class="header content-header">
            <h2 class="heading"><?php echo $pageTitle; ?></h2>
			<?php echo $html->link("Add User",array("controller"=>"Users","action"=>"add"),array("class"=>"green_link")); ?>
			<div class="clear"></div>
    </div>
        <div class="section content-body form_content">
		<table cellspacing="0" cellpadding="4" border="0" align="center" class="searchListing">
			<tr>
				<td width="20%">
				Search by:<br/>
				<?php
				$fieldsArray = array(
				''				  => 'Select',
				'User.name' => 'Name',
				'User.email'   => 'Email Address',
				'User.status'     => 'Status',
				'User.created'    => 'Created On',
				'User.username'   => 'Username');
				echo $form->select("User.fieldName",$fieldsArray,$search1,array("id"=>"searchBy","label"=>false,"style"=>"width:200px","class"=>"disableEvent"),false); ?>
				</td>
				<td width="40%">
				Search value:<br/>
				<?php
				$display1 = "display:none";
				$display2 = "display:none";
				if($search1 != "User.status"){
					$display1 = "display:block";
				}else{
					$display2 = "display:block";
				}
					echo $form->input("User.value1",array("id"=>"search_input","class"=>"string disableEvent","style"=>"width:400px;$display1", "div"=>false, "label"=> false,"value"=>$search2)); 
					echo $form->select("User.value2",array('1' => 'Active','0' => 'Inactive'),
					$search2,array("id"=>"search_select","label"=>false,"style"=>"width:200px;$display2","class"=>"disableEvent"), false);
				?>
				</td>
				<td width="40%"><br/>
				<?php
				echo $form->button("Search", array('id'=>'search','onclick'=>'setSubmitMode(this.id)'))."&nbsp;&nbsp;&nbsp;";
				echo $form->button("Reset Search",array("class"=>"","label"=>false,"onclick"=>"location.href='".BASE_URL."/admin/users/list'"));
				?>
				</td>
			</tr>
			</table>
		<table cellspacing="0" cellpadding="2" border="0">
        	<tr class="field-heading-row">
				<th class="ezpage-heading" width="5%">
            			<input type="checkbox" onclick="changeCheckboxStatus(listForm)" name="selectAll" class="checkbox disableEvent"/>
         		</th>
       			<th class="ezpage-heading" width="15%">
            			<?php echo $paginator->sort('Name', 'User.name');?>
				<?php // echo $common->getSortLabel('User.first_name',$this->params['named']);?>
         		</th>
			    <th class="ezpage-heading" width="5%">
            			<?php echo $paginator->sort('Credibility Score', 'User.credibility');?>
				<?php // echo $common->getSortLabel('User.first_name',$this->params['named']);?>
         		</th>
				<th class="ezpage-heading" width="23%">
            			<?php echo $paginator->sort('Email', 'User.email');?>
				<?php // echo $common->getSortLabel('User.email',$this->params['named']);?>
         		</th>
				<th class="ezpage-heading" width="7%">
            			<?php echo $paginator->sort('Status', 'User.status');?>
				<?php // echo $common->getSortLabel('User.status',$this->params['named']);?>
         		</th>
            	<th class="created-at-heading" width="12%">
            		<?php echo $paginator->sort('Created On', 'User.created');?>
			<?php // echo $common->getSortLabel('User.created',$this->params['named']);?>
          		</th>
				<th class="created-at-heading" width="8%">
            		Action
				</th>
				<th class="created-at-heading" width="8%">
            		Login to user's account
				</th>
		</tr>
		<?php if(count($resultData)>0){
			$i = 1;
			foreach($resultData as $result): 
			if($i%2)$class = "odd"; else $class = "even";  ?>
    		<tr class="<?php echo $class; ?>">
			<td>
				<input type="checkbox" onclick="toggleCheck(listForm)" name="IDs[]" class="checkbox disableEvent" value="<?php echo $result['User']['id'];?>" />
			</td>
			<td>
			 <?php echo ucwords($result['User']['name']); ?>
			</td>
			<td>
			 <?php echo ucwords($result['User']['credibility']); ?>
			</td>
			<td>
			 <?php echo $html->link($result['User']['email'],"mailto:".$result['User']['email']); ?>
			</td>
			<td style="text-align:center">
				<?php echo ($result['User']['status'] == '1')?$html->image("/images/green2.jpg", array("alt"=>"Activated")):$html->image("/images/red3.jpg", array("alt"=>"Deactivated")); ?>
			</td>
            <td class="created-at-view">
				<?php echo date(DATE_FORMAT, strtotime($result['User']['created'])); ?>
			</td>
			<td align="left">
			<?php echo $html->link(
			$html->image("/images/b_drop.png", array("alt"=>"Delete")),
			array("controller"=>"users","action"=>"list",'delete',$result['User']['id']),
			array('escape'=>false,'title'=>'Delete','onclick'=>"return confirm('If you delete user then all the information associated with this user will also be deleted. Are you sure you want to delete this user?');")
			);
			?>&nbsp;&nbsp;
			<?php echo $html->link(
				$html->image("/images/edit.png",array("alt"=>"Edit")),
				array("controller"=>"Users","action"=>"add",$result['User']['id']),array('escape'=>false)); 
			?>					
			</td>
			<td align="left">
				<?php
				echo $form->button("Login",array("class"=>"","label"=>false,"onclick"=>"location.href='".BASE_URL."/users/dashboard"));
				?>		
			</td>
   		</tr>
		<?php $i++ ;
		endforeach; ?>
		<?php } else { ?>
		<tr>
			<td colspan="6" style="border-bottom:0px">No records found</td>
		</tr>
		<?php } ?>
	</table>
        </div>
		<?php if(count($resultData)>0){ ?>
	<div><br/>
		<?php echo $form->submit("Delete Selected",array("div"=>false,"name"=>"delete",'onclick' => "return atleastOneChecked('If you delete user then all the information associated with this user will also be deleted. Are you sure you want to delete this user?');")); ?>
		<?php echo $form->submit("Activate",array("div"=>false,"name"=>"publish",'onclick' => "return atleastOneChecked('Activate selected records?');")); ?>
		<?php echo $form->submit("Deactivate",array("div"=>false,"name"=>"unpublish",'onclick' => "return atleastOneChecked('Deactivate selected records?');","value"=>"0")); ?>
	</div>
	<?php } ?>
	<!-- Paging Starts here -->
	<div class="pagination">
		<?php echo $paginator->prev(); ?>
		<?php echo str_replace("|"," ",$paginator->numbers()); ?>
		<?php echo $paginator->next(); ?> 
	</div>
				
	<!-- Paging Ends here -->
	<?php echo $form->hidden('User.mode', array('value'=>'')); ?>
	<?php echo $form->end(); ?>
</div>
<script type="text/javascript">
	document.onkeypress = stopRKey1;
</script>