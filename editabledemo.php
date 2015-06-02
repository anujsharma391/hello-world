<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <title></title>
    
    <style type="text/css">
        body
        {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
        }
        .editbox
        {
            display:none
        }
        td
        {
            padding:5px;
        }
        .editbox
        {
            font-size:14px;
            width:270px;
            background-color:#ffffcc;
            border:solid 1px #000;
            padding:4px;
        }
        .edit_tr:hover
        {
            background:url(edit.png) right no-repeat #80C8E5;
            cursor:pointer;
        }
    </style>
    
</head>

<body>
    
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script type="text/javascript">
    
    $(document).ready(function()
    {
        
         /*Start Check All Functionality*/
            $('#selecctall').click(function(event) {  //on click
                if(this.checked) { // check select status
                    $('.checkbox1').each(function() { //loop through each checkbox
                        this.checked = true;  //select all checkboxes with class "checkbox1"              
                    });
                }else{
                    $('.checkbox1').each(function() { //loop through each checkbox
                        this.checked = false; //deselect all checkboxes with class "checkbox1"                      
                    });        
                }
            });
        /*End Check All Functionality*/
        
         /*Start make editable as per selected checkbox*/
                $('.editbtn').click(function () {
                    
                    //var currentTD = $(this).parents('tr').find('td');
                    var currentTD = $('.del').find('td');
                    
                    if ($(this).val() == 'Edit') {
                                
                               $('input:checkbox:checked').map(function() {
                                    //return this.value;
                                    var ID = $(this).closest('tr').attr('id');
                                   
                                    $("#first_"+ID).hide();
                                    $("#last_"+ID).hide();
                                    $("#first_input_"+ID).show();
                                    $("#last_input_"+ID).show();

                                    $(this).closest('tr').addClass("highlight_row");
                                });
                       

                    }else{
                                $('input:checkbox:checked').map(function() {
                                    //return this.value;
                                    var ID = $(this).closest('tr').attr('id');
                                    var first=$("#first_input_"+ID).val();
                                    var last=$("#last_input_"+ID).val();
                                    //var dataString = 'id='+ ID +'&firstname='+first+'&lastname='+last;
                                    
                                    $("#first_"+ID).html(first);
                                    $("#last_"+ID).html(last);
                                    
                                    $("#first_"+ID).val(first);
                                    $("#last_"+ID).val(last);
                                    
                                    
                                });
                                
                        
                                /*************************/
                                var data = new Array(); 

                                $( ".highlight_row" ).each(function(rowIndex, r) {
                                        var cols = new Array();
                                        var valIndex = $(this).find('input[name=chechboxPayrollId]').val();
                                        $(this).find('td').each(function (colIndex, c) {
                                            //alert(rowIndex);alert(colIndex);alert(c.textContent);
                                            if (colIndex==0) {
                                              cols.push(valIndex);
                                            }else{
                                              cols.push(c.textContent);
                                            }
                                      
                                        });
                                        data[rowIndex]=cols;
                                        alert(data);
                                        $(this).closest('tr').removeClass("highlight_row");
                                }); // Here I just Interchanged the location of the objects.
                                
                                
                                
                                /***************************/
                                 
                                $(".editbox").hide();   //hide textbox
                                $(".text").show();  //show text
                                
                                $('.checkbox1').each(function() {
                                        this.checked = false; //deselect all checkboxes with class "checkbox1"                      
                                });  
                                                      
                    }
          
                    $(this).val($(this).val() == 'Edit' ? 'Save' : 'Edit')
          
                });
                
         /*End make editable as per selected checkbox*/
    
    });
    
</script>
    
   
<?php

$id=1;
$firstname='anuj';
$lastname='sharma';

$id2=2;
$firstname2='anuj2';
$lastname2='sharma2';

$id3=3;
$firstname3='anuj3';
$lastname3='sharma3';
?>

<table id="tableone" border="1" class="record_table">
        <thead>
            <tr>
                <th class="col1"><input class="checkbox1" type="checkbox" id="selecctall"/></th>
                <th class="col1">First Name</th>
                <th class="col3">Last Name</th>
            </tr>
        </thead>



    <tr id="<?php echo $id; ?>" class="edit_tr">
        <td><input class="checkbox1" type="checkbox" id="item1" name="chechboxPayrollId" value="item1"/></td>
        <td class="edit_td">
        <span id="first_<?php echo $id; ?>" class="text"><?php echo $firstname; ?></span>
        <input type="text" value="<?php echo $firstname; ?>" class="editbox" id="first_input_<?php echo $id; ?>" name="first_input_<?php echo $id; ?>" />
        </td>
        
        <td class="edit_td">
        <span id="last_<?php echo $id; ?>" class="text"><?php echo $lastname; ?></span>
        <input type="text" value="<?php echo $lastname; ?>" class="editbox" id="last_input_<?php echo $id; ?>" name="last_input_<?php echo $id; ?>"/>
        </td>
    
    </tr>
    
    <tr id="<?php echo $id2; ?>" class="edit_tr">
        <td><input class="checkbox1" type="checkbox" id="item2" name="chechboxPayrollId" value="item2"/></td>
        <td class="edit_td">
        <span id="first_<?php echo $id2; ?>" class="text"><?php echo $firstname2; ?></span>
        <input type="text" value="<?php echo $firstname2; ?>" class="editbox" id="first_input_<?php echo $id2; ?>" name="first_input_<?php echo $id2; ?>" />
        </td>
        
        <td class="edit_td">
        <span id="last_<?php echo $id2; ?>" class="text"><?php echo $lastname2; ?></span>
        <input type="text" value="<?php echo $lastname2; ?>" class="editbox" id="last_input_<?php echo $id2; ?>" name="last_input_<?php echo $id2; ?>"/>
        </td>
    
    </tr>
    
    <tr id="<?php echo $id3; ?>" class="edit_tr">
        <td><input class="checkbox1" type="checkbox" id="item3" name="chechboxPayrollId" value="item3"/></td>
        <td class="edit_td">
        <span id="first_<?php echo $id3; ?>" class="text"><?php echo $firstname3; ?></span>
        <input type="text" value="<?php echo $firstname3; ?>" class="editbox" id="first_input_<?php echo $id3; ?>" name="first_input_<?php echo $id3; ?>" />
        </td>
        
        <td class="edit_td">
        <span id="last_<?php echo $id3; ?>" class="text"><?php echo $lastname3; ?></span>
        <input type="text" value="<?php echo $lastname3; ?>" class="editbox" id="last_input_<?php echo $id3; ?>" name="last_input_<?php echo $id3; ?>"/>
        </td>
    
    </tr>

</table>
<!--<button class="editbtn">Edit</button>-->
<input type="button" class="editbtn" value="Edit"/>

</body>
</html>
