<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	
        <script>
            $(document).ready(function () {
                        $('#btnHide').click(function () {
                            //$('td:nth-child(2)').hide();
                            // if your table has header(th), use this
                            $('td:nth-child(3),th:nth-child(3)').hide();
                        });
                    });
                  
                  
            $(document).ready(function () {
                //$('.editbtn').click(function () {
                //    var currentTD = $(this).parents('tr').find('td');
                //    if ($(this).html() == 'Edit') {
                //        currentTD = $(this).parents('tr').find('td');
                //        $.each(currentTD, function () {
                //            $(this).prop('contenteditable', true)
                //        });
                //    } else {
                //       $.each(currentTD, function () {
                //            $(this).prop('contenteditable', false)
                //        });
                //    }
                //
                //    $(this).html($(this).html() == 'Edit' ? 'Save' : 'Edit')
                //
                //});
                
                
                
                $('.editbtn').click(function () {
                    
                    //var currentTD = $(this).parents('tr').find('td');
                    var currentTD = $('.del').find('td');
                    
                    if ($(this).html() == 'Edit') {
                        
                                $( ".highlight_row" ).each(function() {
                                    
                                    $('.highlight_row').find('td').prop('contenteditable', true);
                                    $('.highlight_row').find('td:first').nextAll().addClass("edit_row_border");
                                    
                                });
                       

                    } else {
                       $.each(currentTD, function () {
                            $(this).prop('contenteditable', false)
                        });
                    }
          
                    $(this).html($(this).html() == 'Edit' ? 'Save' : 'Edit')
          
                });
                
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
                border: 1px solid #eee;
            }
            .highlight_row {
                background: #eee;
            }
        </style>
</head>
<body>
    <table id="tableone" border="1" class="record_table">
        <thead>
            <tr>
                <th class="col1"><input type="checkbox" id="ckbCheckAll" /></th>
                <th class="col1">Header 1</th>
                <!--<th class="col2">Header 2</th>-->
                <th class="col3">Header 3</th>
                <th class="col3">Header 4</th>
            </tr>
        </thead>
        
        <tr class="del">
            <td><input type="checkbox" class="checkBoxClass" id="Checkbox1" /></td>
            <td contenteditable="false">Row 0 Column 0</td>
            <!--<td>
                <button class="editbtn">Edit</button>
            </td>-->
            <td contenteditable="false">Row 0 Column 1</td>
            <td contenteditable="false">Row 0 Column 2</td>
        </tr>
        
        <tr class="del">
            <td><input type="checkbox" class="checkBoxClass" id="Checkbox2" /></td>
            <td contenteditable="false">Row 1 Column 0</td>
            <!--<td>
                <button class="editbtn">Edit</button>
            </td>-->
            <td contenteditable="false">Row 1 Column 1</td>
            <td contenteditable="false">Row 1 Column 2</td>
        </tr>
        
        <tr class="del">
            <td><input type="checkbox" class="checkBoxClass" id="Checkbox3" /></td>
            <td contenteditable="false">Row 1 Column 0</td>
            <!--<td>
                <button class="editbtn">Edit</button>
            </td>-->
            <td contenteditable="false">Row 1 Column 1</td>
            <td contenteditable="false">Row 1 Column 2</td>
        </tr>
        
        <tr class="del">
            <td><input type="checkbox" class="checkBoxClass" id="Checkbox4" /></td>
            <td contenteditable="false">Row 1 Column 0</td>
            <!--<td>
                <button class="editbtn">Edit</button>
            </td>-->
            <td contenteditable="false">Row 1 Column 1</td>
            <td contenteditable="false">Row 1 Column 2</td>
        </tr>
        
        <tr class="del">
            <td><input type="checkbox" class="checkBoxClass" id="Checkbox5" /></td>
            <td contenteditable="false">Row 1 Column 0</td>
            <!--<td>
                <button class="editbtn">Edit</button>
            </td>-->
            <td contenteditable="false">Row 1 Column 1</td>
            <td contenteditable="false">Row 1 Column 2</td>
        </tr>
        
    </table>

    <button class="editbtn">Edit</button>
            
    <input id="btnHide" type="button" value="Hide Column 2" />
</body>
</html>

