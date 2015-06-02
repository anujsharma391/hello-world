<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	
        <script>

            $(document).ready(function () {
                
                /*Start make editable as per selected checkbox*/
                $('.editbtn').click(function () {
                    
                    //var currentTD = $(this).parents('tr').find('td');
                    var currentTD = $('.del').find('td');
                    
                    if ($(this).html() == 'Edit') {
                        
                                $( ".highlight_row" ).each(function() {
                                    
                                    //$('.highlight_row').find('td').prop('contenteditable', true);
                                    $('.highlight_row').find('td:first').nextAll().prop('contenteditable', true);
                                    $('.highlight_row').find('td:first').nextAll().addClass("edit_row_borders");
                                    $('.highlight_row').find('td:first').addClass("edit_first_row_borders");
                                    
                                });
                       

                    }else{
                       $.each(currentTD, function () {
                            $(this).prop('contenteditable', false)
                        });
                    }
          
                    $(this).html($(this).html() == 'Edit' ? 'Save' : 'Edit')
          
                });
                
                /*End make editable as per selected checkbox*/
                
                /*start change checked row color*/
                $('.record_table tr').click(function (event) {
                        if (event.target.type !== 'checkbox') {
                            //$(':checkbox', this).trigger('click');
                        }
                    });
                
                $("input[type='checkbox']").change(function (e) {
                    if ($(this).is(":checked")) {
                        
                        if($(this).attr('id')=="ckbCheckAll"){
                            
                        }else{
                            $(this).closest('tr').addClass("highlight_row");    
                        }
                        
                    } else {
                        $(this).closest('tr').removeClass("highlight_row");
                    }
                });
                /*end change checked row color*/
                
                /*Start Check All Functionality*/
                $("#ckbCheckAll").click(function () {

                    $(".checkBoxClass").prop('checked', $(this).prop('checked'));

                    if ($(this).prop('checked')) {
                        $(".del").addClass("highlight_row");
                    }else{
                        $(".del").removeClass("highlight_row");
                    }
                    
                });
                /*End Check All Functionality*/
             
               $("td[contenteditable=true]").on("keypress", function (e) {
                alert(e.keyCode);
                    if (e.keyCode == 13)
                        alert('hello');
                });
            });

        </script>
        
        <style>
            .record_table {
                width: 100%;
                border-collapse: collapse;
            }
            .record_table tr:hover {
                background: #eee;
            }
            .record_table td {
                border: 1px solid #eee; height: 45px;
            }
            .highlight_row {
                background: #eee;
            }
            .record_table .edit_row_borders{
                background: none repeat scroll 0 0 #fff;
                border: 8px solid #eee;
                line-height: 17px;
                margin: 19px 5px;
                padding: 10px;
                word-break: break-all;
            }
            .edit_first_row_borders{
                border: 8px solid #eee !important;
            }
        </style>
</head>
<body>
    <table id="tableone" border="1" class="record_table">
        <thead>
            <tr>
                <th class="col1"><input type="checkbox" id="ckbCheckAll" /></th>
                <th class="col1">Header 1</th>
                <th class="col3">Header 3</th>
                <th class="col3">Header 4</th>
            </tr>
        </thead>
        
        <tr class="del">
            <td><input type="checkbox" class="checkBoxClass" id="Checkbox1" /></td>
            <td contenteditable="false"> Row 0 Column 0 </td>
            <td contenteditable="false"> Row 0 Column 1 </td>
            <td contenteditable="false"> Row 0 Column 2 </td>
        </tr>
        
        <tr class="del">
            <td><input type="checkbox" class="checkBoxClass" id="Checkbox2" /></td>
            <td contenteditable="false"> Row 1 Column 0 </td>
            <td contenteditable="false"> Row 1 Column 1 </td>
            <td contenteditable="false"> Row 1 Column 2 </td>
        </tr>
        
        <tr class="del">
            <td><input type="checkbox" class="checkBoxClass" id="Checkbox3" /></td>
            <td contenteditable="false"> Row 1 Column 0 </td>
            <td contenteditable="false"> Row 1 Column 1 </td>
            <td contenteditable="false"> Row 1 Column 2 </td>
        </tr>
        
        <tr class="del">
            <td><input type="checkbox" class="checkBoxClass" id="Checkbox4" /></td>
            <td contenteditable="false"> Row 1 Column 0 </td>
            <td contenteditable="false"> Row 1 Column 1 </td>
            <td contenteditable="false"> Row 1 Column 2 </td>
        </tr>
        
        <tr class="del">
            <td><input type="checkbox" class="checkBoxClass" id="Checkbox5" /></td>
            <td contenteditable="false"> Row 1 Column 0 </td>
            <td contenteditable="false"> Row 1 Column 1 </td>
            <td contenteditable="false"> Row 1 Column 2 </td>
        </tr>
        
    </table>

    <button class="editbtn">Edit</button>

</body>
</html>

